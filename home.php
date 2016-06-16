<?php include(dirname(__FILE__).'/header.php'); ?>
<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			<div class="s-12 l-9"> 	  
				<div class="box"> 
					<!-- HEADER -->     
					<!-- CAROUSEL --> 
					<div class="line">
						<div id="owl-demo" class="owl-carousel owl-theme margin-bottom">
							<div class="item"><img class="lazy" src="<?php $plxShow->template(); ?>/img/slide-1.jpg" alt=""></div>
							<div class="item"><img class="lazy" src="<?php $plxShow->template(); ?>/img/slide-2.jpg" alt=""></div>
							<div class="item"><img class="lazy" src="<?php $plxShow->template(); ?>/img/slide-3.jpg" alt=""></div>
							<div class="item"><img class="lazy" src="<?php $plxShow->template(); ?>/img/slide-4.jpg" alt=""></div>
						</div>
					</div>

					<!-- ARTICLE -->
					<section>
						<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<article class="line">
							<div itemscope itemtype="http://schema.org/Article" class="margin"> 
								<div class="s-12 l-2 date">
							 		<i class="icon-calendar"></i>
					  				<p>
										<meta itemprop="datePublished" content="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
										<span><?php $plxShow->artDate('#num_day</span><br />#month #num_year(4)'); ?>
									</p>
								</div>
								<div class="s-12 l-10">
									<header>
										<h2><span itemprop="name"><?php $plxShow->artTitle('link'); ?></span></h2>
										<p>
											<span>
												<i class="icon-user"></i><?php $plxShow->lang('WRITTEN_BY'); ?>&nbsp;
												<span itemprop="author" itemscope itemtype="http://schema.org/Person">
													<span itemprop="name"><?php $plxShow->artAuthor() ?></span>&nbsp;
												</span>
												<span style="display:none" itemprop="publisher" itemscope itemtype="http://schema.org/Person">
													<span itemprop="name"><?php $plxShow->artAuthor() ?></span>&nbsp;
												</span>
												<i class="icon-discussion"></i><?php $plxShow->artNbCom(); ?>
												<i class="icon-clock"></i><?php $plxShow->lang('ARTICLES_DATE_UPDATE'); ?>&nbsp;<?php $plxShow->artUpdateDate('#num_day/#num_month/#num_year(4)'); ?>
												<meta itemprop="dateModified" content="<?php $plxShow->artUpdateDate('#num_year(4)-#num_month-#num_day'); ?>">
											</span>
										<p>									
									</header>
									<section>
										<span itemprop="articleBody">
										<?php $plxShow->artThumbnail('<img itemprop="image" class="art_thumbnail" src="#img_url" alt="#img_alt" title="#img_title" />'); ?>
										<?php $plxShow->artChapo(); ?>
										</span> 
									</section>
									<footer>
										<p><span><i class="icon-newspaper"></i><?php $plxShow->lang('CLASSIFIED_IN') ?> : <span itemprop="articleSection"><?php $plxShow->artCat(); ?></span>&nbsp;<i class="icon-label"></i><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></span></p>
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
