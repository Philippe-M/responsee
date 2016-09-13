<?php if(!defined('PLX_ROOT')) exit; ?>

<h2>Aide</h2>
<p>Fichier d&#039;aide du plugin Blogroll</p>

<p>&nbsp;</p>
<h2>Installation</h2>
<p><b>Pensez &agrave; activer le plugin.</b><br/>
Editez le fichier template "sidebar.php". Ajoutez y le code suivant &agrave; l&#039;endroit o&ugrave; vous souhaitez voir apparaitre les liens:</p>
<pre>
	&lt;h3&gt;&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogrollHead&#039;)); ?&gt;&lt;/h3&gt;
		&lt;ul&gt;
			&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;)); ?&gt;
		&lt;/ul&gt;
</pre>
<p>&nbsp;</p>

<p><b>Plusieurs syntaxe possible pour le hook "showBlogroll"</b></p>
<p>&nbsp;</p>
<ul>
	<li>La plus simple: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;)); ?&gt;</pre></li><br/>
	<li>Avec un formatage: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;, &#039;&lt;li&gt;&lt;a href="#url" hreflang="#langue" title="#description"&gt;#title&lt;/a&gt;&lt;/li&gt;&#039;)); ?&gt;</pre></li><br/>
</ul>
<p><i>Vous pouvez maintenant filtrer l'affichage des liens à un groupe particulier:</i>
</p>
<p>&nbsp;</p>
<ul>
	<li>Avec un formatage et un groupe: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;, array(&#039;&lt;li&gt;&lt;a href="#url" hreflang="#langue" title="#description"&gt;#title&lt;/a&gt;&lt;/li&gt;&#039;, &#039;<i>groupe1</i>&#039;))); ?&gt;</pre></li><br/>
	<li>Avec juste un groupe: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;, array(&#039;&#039;, &#039;<i>groupe1</i>&#039;))); ?&gt;</pre></li><br/>
</ul>
<p><i>groupe1</i> correspond au nom du groupe défini dans l'administration des liens</p>

<p>&nbsp;</p>
<h2>Utilisation</h2>
<p>
	Le plugin ajoute une entrée "blogroll" dans la barre des menus à gauche, dans l&#039;administration du site.<br>
	Vous pouvez administrer vos liens à partir de cette page.	
</p>

<p>&nbsp;</p>
<h2>Configuration</h2>
<p>
	Dans la configuration du plugin (Paramètres > plugins > Blogroll > configuration), vous pouvez:
	<ul>
		<li>Changer le titre qui s&#039;affiche dans la sidebar de la partie publique.</li>
	</ul>
</p>
