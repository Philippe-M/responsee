<?php if(!defined('PLX_ROOT')) exit; ?>
	<?php if($plxShow->plxMotor->plxRecord_coms): ?>
	<div class="line">
		<div class="s-12 l-12" id="comments">
			<h2><?php echo $plxShow->artNbCom(); ?></h2>
			<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

			<div id="<?php $plxShow->comId(); ?>" class="comment s-12 l-12">
				<blockquote>
					<p class="info_comment">
						<a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>
						<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?></time>
						<?php $plxShow->comAuthor('link'); ?>
						<?php $plxShow->lang('SAID'); ?> :
					</p>
					<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
				</blockquote>
			</div>

			<?php endwhile; # Fin de la boucle sur les commentaires ?>
			<div class="comment rss">
				<?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="form">
		<h2><?php $plxShow->lang('WRITE_A_COMMENT') ?></h2>

		<form class="customform" action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" placeholder="<?php $plxShow->lang('NAME') ?>" maxlength="30" />
			<input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" placeholder="<?php $plxShow->lang('WEBSITE') ?>" />
			<input id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" placeholder="<?php $plxShow->lang('EMAIL') ?>" />
			<textarea id="id_content" name="content" cols="35" rows="6" placeholder="<?php $plxShow->lang('COMMENT') ?>"><?php $plxShow->comGet('content',''); ?></textarea>

			<?php $plxShow->comMessage('<p class="com-alert">#com_message</p>'); ?>

			<?php if($plxShow->plxMotor->aConf['capcha']): ?>
			<p>
				<label for="id_rep"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></label>
				<?php $plxShow->capchaQ(); ?> :
				<input id="id_rep" name="rep" type="text" size="2" maxlength="1" />
			</p>
			<?php endif; ?>
			<p>
				<button type="submit"><?php $plxShow->lang('SEND') ?></button>
			</p>
		</form>
	</div>

	<?php else: ?>
		<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
