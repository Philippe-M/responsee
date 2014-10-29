<?php include(dirname(__FILE__).'/header.php'); ?>
<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			<div class="s-12 l-9"> 	  
				<div class="box"> 
					<!-- HEADER -->     
					<!-- CAROUSEL --> 
					<div class="line">
						<div id="owl-demo" class="owl-carousel owl-theme margin-bottom">
							<div class="item"><img src="<?php $plxShow->template(); ?>/img/slide-1.jpg" alt=""></div>
							<div class="item"><img src="<?php $plxShow->template(); ?>/img/slide-2.jpg" alt=""></div>
							<div class="item"><img src="<?php $plxShow->template(); ?>/img/slide-3.jpg" alt=""></div>
							<div class="item"><img src="<?php $plxShow->template(); ?>/img/slide-4.jpg" alt=""></div>
						</div>
					</div>

					<!-- ARTICLE -->
					<section>
						<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<article class="line">
							<div class="margin"> 
								<div class="s-12 l-2 date">
							 		<i class="icon-calendar"></i>
					  				<p><span><?php $plxShow->artDate('#num_day</span><br />#month #num_year(4)'); ?></p>
								</div>
								<div class="s-12 l-10">
									<header>
										<h2><?php $plxShow->artTitle('link'); ?></h2>
										<p><span><i class="icon-user"></i><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>&nbsp;<i class="icon-discussion"></i><?php $plxShow->artNbCom(); ?></span><p>
									</header>
									<section>
										<?php $plxShow->artChapo(); ?> 
									</section>
									<footer>
										<p><span><i class="icon-newspaper"></i><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?>&nbsp;<i class="icon-label"></i><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></span></p>
									</footer>
									<hr>        
								</div>
							</div>
						</article>
						<?php endwhile; ?>

						<div class="right"><?php $plxShow->pagination(); ?></div>
					</section>
				</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
