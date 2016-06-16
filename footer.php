<?php if (!defined('PLX_ROOT')) exit; ?>
			<!-- FOOTER --> 
			<div class="box footer">
				<footer class="line">     
					<div class="s-12 l-6">
						<p><?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?></p>
						<p>The background image and slideshow is propriety of <a href="http://www.blogoflip.fr" title="Philippe MALADJIAN"><span itemprop="publisher" itemscope itemtype="http://schema.org/Organization"><span itemprop="name">Philippe MALADJIAN</span></span></a>. Do not use the image in your website.</p>
					</div>
					<div class="s-12 l-6">
						<p class="right">Design and coding by <a href="http://http://www.myresponsee.com">Responsee</a></p>
						<p class="right">Adapte to PluXml by <a href="http://www.blogoflip.fr" title="Blogoflip - Philippe MALADJIAN">Philippe MALADJIAN</a></p>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<img class="lazy" id="background" class="hide-s" src="<?php $plxShow->template(); ?>/img/background.jpg" alt="">   
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
<script type="text/javascript" charset="utf-8">
	$(function() {
		$("img.lazy").lazyload();
	});
</script>
</body>
</html>
