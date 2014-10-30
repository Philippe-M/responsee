<?php if(!defined('PLX_ROOT')) exit; ?>
<?php

# récuperation d'une instance de plxShow
$plxShow = plxShow::getInstance();
$plxShow->plxMotor->plxCapcha = new plxCapcha();
$plxPlugin = $plxShow->plxMotor->plxPlugins->getInstance('plxMyContact');

$error=false;
$success=false;

$captcha = $plxPlugin->getParam('captcha')=='' ? '1' : $plxPlugin->getParam('captcha');

if(!empty($_POST)) {
	$name=plxUtils::unSlash($_POST['name']);
	$mail=plxUtils::unSlash($_POST['mail']);
	$content=plxUtils::unSlash($_POST['content']);
	if(trim($name)=='')
		$error = $plxPlugin->getLang('L_ERR_NAME');
	elseif(!plxUtils::checkMail($mail))
		$error = $plxPlugin->getLang('L_ERR_EMAIL');
	elseif(trim($content)=='')
		$error = $plxPlugin->getLang('L_ERR_CONTENT');
	elseif($captcha AND $_POST['rep2'] != sha1($_POST['rep']))
		$error = $plxPlugin->getLang('L_ERR_ANTISPAM');
	if(!$error) {
		if(plxUtils::sendMail($name,$mail,$plxPlugin->getParam('email'),$plxPlugin->getParam('subject'),$content,'text',$plxPlugin->getParam('email_cc'),$plxPlugin->getParam('email_bcc')))
			$success = $plxPlugin->getParam('thankyou_'.$plxPlugin->default_lang);
		else
			$error = $plxPlugin->getLang('L_ERR_SENDMAIL');
	}
} else {
	$name='';
	$mail='';
	$content='';
}

?>

<div class="s-12 l-9" id="form_contact">
	<div class="box">
		<section>
			<article class="line">
				<?php if($error): ?>
				<p class="contact_error"><?php echo $error ?></p>
				<?php endif; ?>
				<?php if($success): ?>
				<p class="contact_success"><?php echo plxUtils::strCheck($success) ?></p>
				<?php else: ?>
				<?php if($plxPlugin->getParam('mnuText_'.$plxPlugin->default_lang)): ?>
				<header>
					<h2><?php echo $plxPlugin->getParam('mnuText_'.$plxPlugin->default_lang) ?></h2>
				</header>
				<?php endif; ?>
				<section>
					<form class="customform" action="#form" method="post">
						<input id="name" name="name" type="text" size="30" value="<?php echo plxUtils::strCheck($name) ?>" maxlength="30" placeholder="<?php $plxPlugin->lang('L_FORM_NAME') ?>"/>
						<input id="mail" name="mail" type="text" size="30" value="<?php echo plxUtils::strCheck($mail) ?>" placeholder="<?php $plxPlugin->lang('L_FORM_MAIL') ?>" />
						<textarea id="message" name="content" cols="60" rows="12"><?php echo plxUtils::strCheck($content) ?></textarea placeholder="<?php $plxPlugin->lang('L_FORM_CONTENT') ?>">
						<?php if($captcha): ?>
						<p><label for="id_rep"><strong><?php $plxPlugin->lang('L_FORM_ANTISPAM') ?></strong>&nbsp;:</label></p>
						<?php echo $plxShow->capchaQ() ?>&nbsp;:&nbsp;<input id="id_rep" name="rep" type="text" size="10" />
						<input name="rep2" type="hidden" value="<?php echo $plxShow->capchaR() ?>" />
						<?php endif; ?>
						<p>
							<button type="submit" name="submit"><?php $plxPlugin->lang('L_FORM_BTN_SEND') ?></button>
							<button type="reset" name="reset"><?php $plxPlugin->lang('L_FORM_BTN_RESET') ?></button>
						</p>
					</form>
				</section>
				<?php endif; ?>
			</article>
		</section>
	</div>
</div>
