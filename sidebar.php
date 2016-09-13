<?php if(!defined('PLX_ROOT')) exit; ?>
			<!-- TOP MENU -->
			<div class="hide-l s-12 l-12">
				<div class="line">
				<div class="logo-box">
					<h1><?php $plxShow->mainTitle(); ?></h1>
					<p><?php $plxShow->subTitle(); ?></p>
				</div>
					<nav>
						<p class="nav-text">Menu</p>
						<div class="top-nav">
							<ul class="chevron">
								<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li><a href="#static_url" title="#static_name"><i class="icon-sli-home"></i>#static_name</a></li>'); ?>
								<?php eval($plxShow->callHook('showBlogroll', '<li><a href="#url" hreflang="#langue" title="#description"><i class="#class"></i>#title</a></li>')); ?>
								<li>
									<a><i class="icon-newspaper"></i><?php $plxShow->lang('CATEGORIES'); ?></a>
									<ul>
										<?php $plxShow->catList('','<li><a href="#cat_url" title="#cat_name">#cat_name (#art_nb)</a></li>'); ?>
									</ul>
								</li>
								<li>
									<a><i class="icon-sheet"></i><?php $plxShow->lang('LATEST_ARTICLES'); ?></a>
									<ul>
										<?php $plxShow->lastArtList('<li><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
									</ul>
								</li>
								<li>
									<a><i class="icon-label"></i><?php $plxShow->lang('TAGS'); ?></a>
									<ul>
										<?php $plxShow->tagList('<li class="tags #tag_size"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 30, 'random'); ?>
									</ul>
								</li>
								<li>
									<a><i class="icon-discussion"></i><?php $plxShow->lang('LATEST_COMMENTS'); ?></a>
									<ul>
										<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
									</ul>
								</li>
		                                                <li>
                		                                        <a><i class="icon-file_alt"></i><?php $plxShow->lang('ARCHIVES'); ?></a>
                                		                        <ul>
                                                		                <?php $plxShow->archList('<li><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
		                                                        </ul>
                		                                </li>
								<li>
									<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><i class="icon-link"></i><?php $plxShow->lang('ARTICLES'); ?></a>
								</li>
								<li>
									<a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><i class="icon-link"></i><?php $plxShow->lang('COMMENTS'); ?></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- LEFT COLUMN -->
			<div class="hide-s hide-m l-3">
				<div class="logo-box">
					<h1><?php $plxShow->mainTitle(); ?></h1>
					<p><?php $plxShow->subTitle(); ?></p>
				</div>
				<div class="aside-nav">
					<ul class="chevron">
						<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li><a href="#static_url" title="#static_name"><i class="icon-sli-home"></i>#static_name</a></li>'); ?>
						<?php eval($plxShow->callHook('showBlogroll', '<li><a href="#url" hreflang="#langue" title="#description"><i class="#class"></i>#title</a></li>')); ?>
						<li>
							<a><i class="icon-newspaper"></i><?php $plxShow->lang('CATEGORIES'); ?></a>
							<ul>
								<?php $plxShow->catList('','<li><a href="#cat_url" title="#cat_name">#cat_name (#art_nb)</a></li>'); ?>
							</ul>
						</li>
						<li>
							<a><i class="icon-sheet"></i><?php $plxShow->lang('LATEST_ARTICLES'); ?></a>
							<ul>
								<?php $plxShow->lastArtList('<li><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
							</ul>
						</li>
						<li>
							<a><i class="icon-label"></i><?php $plxShow->lang('TAGS'); ?></a>
							<ul>
								<?php $plxShow->tagList('<li class="tags #tag_size"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 30, 'random'); ?>
							</ul>
						<li>
						<li>
							<a><i class="icon-discussion"></i><?php $plxShow->lang('LATEST_COMMENTS'); ?></a>
							<ul>
								<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
							</ul>
						</li>
						<li>
							<a><i class="icon-file_alt"></i><?php $plxShow->lang('ARCHIVES'); ?></a>
							<ul>
								<?php $plxShow->archList('<li><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
							</ul>
						</li>
						<li>
							<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><i class="icon-link"></i><?php $plxShow->lang('ARTICLES'); ?></a>
						</li>
						<li>
							<a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><i class="icon-link"></i><?php $plxShow->lang('COMMENTS'); ?></a>
						</li>
					</ul>
				</div>
			</div>
