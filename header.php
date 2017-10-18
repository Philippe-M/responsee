<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

<meta name="google-site-verification" content="3ZULSptF-zTSVjgaUqAP1ujef3lhmeV9tgDx0iBMM8s" />
	
	<meta property="og:title" content="<?php $plxShow->pageTitle(); ?>" />
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="<?php echo $plxMotor->aConf['title']; ?>" />
	<meta property="og:description" content="<?php echo $plxMotor->aConf['meta_description']; ?>" />
	<?php if($plxShow->mode() <> "article") { ?>
 	<meta property="og:image" content="<?php $plxShow->racine(); ?>img_facebook.jpg" />
	<?php } else { ?>
 	<meta property="og:image" content="<?php echo $plxShow->artThumbnail('#img_url'); ?>" />
	<?php } ?>
	<meta property="og:url" content="<?php $plxShow->racine(); ?>" />
	<meta property="og:locale" content="fr_FR" />	

	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/components-min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/icons-min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/responsee-min.css">  
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/abel-min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/owl-carousel/owl.carousel-min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/owl-carousel/owl.theme-min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/template-style-min.css">
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.7.0/jquery-ui.min.js"></script> 
 	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.lazyload.min.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/modernizr.js"></script>
	
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="size-1140 align-content-left">
	<div class="line">
		<div id="content-wrapper">