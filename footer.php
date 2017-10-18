<?php if (!defined('PLX_ROOT')) exit; ?>
			<!-- FOOTER -->
			<div class="box footer">
				<footer class="line">
					<div class="s-12 l-6">
						<p><?php $plxShow->mainTitle('link'); ?> © 2017 - <?php $plxShow->subTitle(); ?></p>
						<p>The background image and slideshow is propriety of <a href="https://www.blogoflip.fr" title="Philippe MALADJIAN"><span itemprop="publisher" itemscope itemtype="http://schema.org/Organization"><span itemprop="name">Philippe MALADJIAN</span></span></a>. Do not use the image in your website.</p>
					</div>
					<div class="s-12 l-6">
						<p class="right">Design and coding by <a href="http://www.myresponsee.com">Responsee</a></p>
						<p class="right">Adapte to PluXml by <a href="https://www.blogoflip.fr" title="Blogoflip - Philippe MALADJIAN">Philippe MALADJIAN</a></p>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<img id="background" class="hide-s" src="<?php $plxShow->template(); ?>/img/background.jpg" alt="<?php $plxShow->pageTitle(); ?> - <?php $plxShow->subTitle(); ?>" title="<?php $plxShow->pageTitle(); ?> - <?php $plxShow->subTitle(); ?>">
<script type="text/javascript" charset="utf-8">
	$(function() {
		$("img.lazy").lazyload({
			threshold : 200,
			effect: "fadeIn",
		});
	});
</script>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/responsee.js"></script>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			navigation : true,
			slideSpeed : 300,
			paginationSpeed : 400,
			autoPlay : true,
			singleItem:true
		});
	});
</script>
<script>
	$(document).ready( function () {
	// Add return on top button
		$('body').append('<div id="returnOnTop" title="Retour en haut" class="text-center"><i class="icon-sli-arrow-up"></i></div>');

		// On button click, let's scroll up to top
		$('#returnOnTop').click(
		function() {
			$('html,body').animate({scrollTop: 0}, 'slow');
		});
	});

	$(window).scroll(function() {
	// If on top fade the bouton out, else fade it in
		if ( $(window).scrollTop() == 0 )
			$('#returnOnTop').fadeOut();
		else
			$('#returnOnTop').fadeIn();
	});
</script>
<?php @include('stats.php'); ?>
</body>
</html>
