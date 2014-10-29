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

	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/components.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/responsee.css">  
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/owl-carousel/owl.theme.css">
	<!-- CUSTOM STYLE -->
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/template-style.css">
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.7.0/jquery-ui.min.js"></script> 
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/responsee.js"></script>

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="size-1140 align-content-left">
	<div class="line">
		<div id="content-wrapper">
