<?php
/**
 * Plugin blogroll
 *
 * @package     PLX
 * @version     0.8
 * @date        26/07/2015
 * @author      rockyhorror
 **/
 
	if(!defined('PLX_ROOT')) exit; 
	
	# Control du token du formulaire
	plxToken::validateFormToken($_POST);
	
	if(!empty($_POST)) {
		$plxPlugin->setParam('pub_title', $_POST['pub_title'], 'cdata');
		$plxPlugin->saveParams();
		header('Location: parametres_plugin.php?p=Blogroll');
		exit;
	}
?>

<h2><?php $plxPlugin->lang('L_CONFIG_DESCRIPTION') ?></h2>

<form action="parametres_plugin.php?p=Blogroll" method="post">
	<fieldset class="withlabel">
		
		<p><?php echo $plxPlugin->getLang('L_CONFIG_PUB_TITLE') ?></p>
		<?php plxUtils::printInput('pub_title', $plxPlugin->getParam('pub_title'), 'text'); ?>
	</fieldset>
	<br />
	<?php echo plxToken::getTokenPostMethod() ?>
	<input type="submit" name="submit" value="<?php echo $plxPlugin->getLang('L_CONFIG_SAVE') ?>" />
</form>
