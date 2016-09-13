<?php
/**
 * Plugin blogroll
 *
 * @package	PLX
 * @version	0.8
 * @date	26/07/2015
 * @author	Rockyhorror
 **/
 

class Blogroll extends plxPlugin {

	public $blogList = array(); # Tableau des blogs
	private $blogfile = "data/configuration/Blogroll.xml";
	
	/**
	 * Constructeur de la classe blogroll
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Rockyhorror
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Autorisation d'acces à la configuration du plugin
		$this->setConfigProfil(PROFIL_ADMIN, PROFIL_MANAGER);

		# Autorisation d'accès à l'administration du plugin
		$this->setAdminProfil(PROFIL_ADMIN, PROFIL_MANAGER);

		# Déclarations des hooks
		$this->addHook('showBlogrollHead', 'showBlogrollHead');
		$this->addHook('showBlogroll','showBlogroll');
	}

	public function OnActivate() {
		$plxAdmin = plxAdmin::getInstance();
		if (version_compare($plxAdmin->version, "5.1.7", ">=")) {
			if (!file_exists(PLX_ROOT.$this->blogfile)) {
				if (!copy(PLX_PLUGINS."Blogroll/parameters.xml", PLX_ROOT."data/configuration/plugins/Blogroll.xml")) {
					return plxMsg::Error(L_SAVE_ERR.' '.PLX_ROOT."data/configuration/plugins/Blogroll.xml");
				}
			}
		}
	}

	public function getBlogroll() {
		
		if(!is_file(PLX_ROOT.$this->blogfile)) return;
		
		# Mise en place du parseur XML
		$data = implode('',file(PLX_ROOT.$this->blogfile));
		$parser = xml_parser_create(PLX_CHARSET);
		xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
		xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,0);
		xml_parse_into_struct($parser,$data,$values,$iTags);
		xml_parser_free($parser);
		if(isset($iTags['blogroll']) AND isset($iTags['title'])) {
			$nb = sizeof($iTags['title']);
			$size=ceil(sizeof($iTags['blogroll'])/$nb);
			for($i=0;$i<$nb;$i++) {
				$attributes = $values[$iTags['blogroll'][$i*$size]]['attributes'];
				$number = $attributes['number'];
				# Recuperation du titre
				$this->blogList[$number]['title']=plxUtils::getValue($values[$iTags['title'][$i]]['value']);
				# Recuperation du nom de la description
				$this->blogList[$number]['description']=plxUtils::getValue($values[$iTags['description'][$i]]['value']);
				# Recuperation du groupe
				$this->blogList[$number]['groupe']=plxUtils::getValue($values[$iTags['groupe'][$i]]['value']);
				# Recuperation de l'url
				$this->blogList[$number]['url']=plxUtils::getValue($values[$iTags['url'][$i]]['value']);
				# Recuperation de la langue
				$this->blogList[$number]['langue']=plxUtils::getValue($values[$iTags['langue'][$i]]['value']);
				# Recuperation de la class
				$this->blogList[$number]['class']=plxUtils::getValue($values[$iTags['class'][$i]]['value']);
			}
		}
		
	}
	
	/**
	 * Méthode qui édite le fichier XML du blogroll selon le tableau $content
	 *
	 * @param	content	tableau multidimensionnel du blogroll
	 * @param	action	permet de forcer la mise àjour du fichier
	 * @return	string
	 * @author	Stephane F
	 **/
	public function editBloglist($content) {

		$action = false;
		$save = $this->blogList;
		
		# suppression
		if(!empty($content['selection']) AND $content['selection']=='delete' AND isset($content['idBlogroll'])) {
			foreach($content['idBlogroll'] as $blogroll_id) {
				unset($this->blogList[$blogroll_id]);
				$action = true;
			}
		}
		
		# mise à jour de la liste des catégories
		elseif(!empty($content['update'])) {
			foreach($content['blogNum'] as $blog_id) {
				$blog_name = $content[$blog_id.'_title'];
				if($blog_name!='') {
					$this->blogList[$blog_id]['title'] = $blog_name;
					$this->blogList[$blog_id]['url'] = $content[$blog_id.'_url'];
					$this->blogList[$blog_id]['description'] = $content[$blog_id.'_description'];
					$this->blogList[$blog_id]['groupe'] = $content[$blog_id.'_groupe'];
					$this->blogList[$blog_id]['langue'] = $content[$blog_id.'_langue'];
					$this->blogList[$blog_id]['ordre'] = intval($content[$blog_id.'_ordre']);
					$this->blogList[$blog_id]['class'] = $content[$blog_id.'_class'];
					$action = true;
				}
			}
		}
		# On va trier les clés selon l'ordre choisi
		if(sizeof($this->blogList)>0) uasort($this->blogList, create_function('$a, $b', 'return $a["ordre"]>$b["ordre"];'));
		
		# sauvegarde
		if($action) {
			# On génére le fichier XML
			$xml = "<?xml version=\"1.0\" encoding=\"".PLX_CHARSET."\"?>\n";
			$xml .= "<document>\n";
			foreach($this->blogList as $blog_id => $blog) {

				$xml .= "\t<blogroll number=\"".$blog_id."\">";
				$xml .= "\n\t\t<title><![CDATA[".plxUtils::cdataCheck($blog['title'])."]]></title>";
				$xml .= "\n\t\t<description><![CDATA[".plxUtils::cdataCheck($blog['description'])."]]></description>";
				$xml .= "\n\t\t<groupe><![CDATA[".plxUtils::cdataCheck($blog['groupe'])."]]></groupe>";
				$xml .= "\n\t\t<url><![CDATA[".plxUtils::cdataCheck($blog['url'])."]]></url>";
				$xml .= "\n\t\t<langue><![CDATA[".plxUtils::cdataCheck($blog['langue'])."]]></langue>";
				$xml .= "\n\t\t<class><![CDATA[".plxUtils::cdataCheck($blog['class'])."]]></class>";
				$xml .= "\n\t</blogroll>\n";
			}
			$xml .= "</document>";
			
			# On écrit le fichier
			if(plxUtils::write($xml, PLX_ROOT.$this->blogfile))
				return plxMsg::Info(L_SAVE_SUCCESSFUL);
			else {
				$this->blogList = $save;
				return plxMsg::Error(L_SAVE_ERR.' '.PLX_ROOT.$this->blogfile);
			}			
		}
	}
	
	public function buildSelectGroup () {
		foreach($this->blogList as $v) {
			if(!empty($v['groupe'])) {
				$selectGroup[$v['groupe']] = $v['groupe'];
			}
		}
		$selectGroup[''] = "aucun";
		natsort($selectGroup);
		return $selectGroup;
	}

	public function showBlogrollHead () {
		$title = plxUtils::strCheck($this->getParam('pub_title'));
		echo $title;
	}

	public function showBlogroll($params) {		
		
		if(isset($params)) {
			if(is_array($params)) {
				$format = (isset($params[0]) && !empty($params[0]))?$params[0]:NULL;
				$groupe = (isset($params[1]) && !empty($params[1]))?$params[1]:NULL;
			}
			else {
				$format = !empty($params)?$params:NULL;
			}
		}
		
		$this->getBlogroll();
		if(!$this->blogList) { return; }
		
		if(!isset($format)) { $format = '<li><a href="#url" hreflang="#langue" title="#description">#title</a></li>'; }
		if(isset($groupe)) {
			foreach($this->blogList as $link) {
				if($link['groupe'] == $groupe) {
					$row = str_replace('"#url"','"#url" onclick="window.open(this.href);return false;"',$format);
					$row = str_replace('#url',$link['url'],$row);
					$row = str_replace('#description',plxUtils::strCheck($link['description']),$row);
					$row = str_replace('#title',plxUtils::strCheck($link['title']),$row);
					$row = str_replace('#langue',plxUtils::strCheck($link['langue']),$row);
					$row = str_replace('#class',plxUtils::strCheck($link['class']),$row);
					echo $row;
				}
			}
		}
		else {
			foreach($this->blogList as $link) {
				$row = str_replace('"#url"','"#url" onclick="window.open(this.href);return false;"',$format);
				$row = str_replace('#url',$link['url'],$row);
				$row = str_replace('#description',plxUtils::strCheck($link['description']),$row);
				$row = str_replace('#title',plxUtils::strCheck($link['title']),$row);
				$row = str_replace('#langue',plxUtils::strCheck($link['langue']),$row);
				$row = str_replace('#class',plxUtils::strCheck($link['class']),$row);
				echo $row;
			}
		}
		
	}
}
?>
