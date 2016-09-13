<?php if(!defined('PLX_ROOT')) exit; ?>

<h2>Help</h2>
<p>Blogroll plugin help file</p>

<p>&nbsp;</p>
<h3>Installation</h3>
<p>Activate plugin.<br/>
Edit the template file "sidebar.php". Add following code where you want to see your links:</p>
<pre>
	&lt;h3&gt;&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogrollHead&#039;)); ?&gt;&lt;/h3&gt;
		&lt;ul&gt;
			&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;)); ?&gt;
		&lt;/ul&gt;
</pre>
<p>&nbsp;</p>

<p><b>Multiple syntax are possible for the hook "showBlogroll"</b></p>
<p>&nbsp;</p>
<ul>
	<li>Most simple: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;)); ?&gt;</pre></li><br/>
	<li>With a format: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;, &#039;&lt;li&gt;&lt;a href="#url" hreflang="#langue" title="#description"&gt;#title&lt;/a&gt;&lt;/li&gt;&#039;)); ?&gt;</pre></li><br/>
</ul>
<p><i>You can now filter display of links to a specific group:</i></p>
<p>&nbsp;</p>
<ul>
	<li>With a format and a group: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;, array(&#039;&lt;li&gt;&lt;a href="#url" hreflang="#langue" title="#description"&gt;#title&lt;/a&gt;&lt;/li&gt;&#039;, &#039;<i>groupe</i>&#039;))); ?&gt;</pre></li><br/>
	<li>With just a group: <pre>&lt;?php eval($plxShow-&gt;callHook(&#039;showBlogroll&#039;, array(&#039;&#039;, &#039;<i>groupe</i>&#039;))); ?&gt;</pre></li><br/>
</ul>

<p>&nbsp;</p>
<h3>Usage</h3>
<p>
	This plugin add an entry "Blogroll" on the left side, of the site administration.<br>
	You can manage your link on this page.
</p>

<p>&nbsp;</p>
<h3>Configuration</h3>
<p>
	In the configuration part of the plugin (Paramètres > plugins > Blogroll configuration), you can:
	<ul>
		<li>Change the xml file location</li>
		<li>Change the title that appears in the sidebar of the public part.</li>
	</ul>
</p>
