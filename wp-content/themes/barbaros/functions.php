<?php
$temayolu = get_bloginfo('template_directory');
$site_yolu= get_bloginfo('url');

//codestar ekleme
include (TEMPLATEPATH."/codestar/codestar-framework.php");
include (TEMPLATEPATH."/codestar/samples/admin-options.php");


//menu desteği
function register_my_menus(){
	register_nav_menus(
	array(
	'primary'=>__('Primary Menu'),
	'footer-menu'=>__('Footer Menu'),
	'additional-menu'=>__('Additional Menu')
	)
	);
	}
	add_action('init','register_my_menus');
//menu desteği


//menu oluşturma
function add_class_li($classes,$item,$args){
		if(isset($args->li_class)){
			$classes[]= $args->li_class;
		}
		if(isset($args->active_class)&& in_array('current-menu-item',$classes)){
			$classes[] = $args->active_class;
		}
		return $classes;
	}
	add_filter('nav_menu_css_class', 'add_class_li',10,3);

	function add_anchor_class($attr,$item,$args) {
		if(isset($args->a_class)){
			$attr['class']= $args->a_class;
		}
		return $attr;
	}
	add_filter('nav_menu_link_attributes', 'add_anchor_class',10,3);
	//menu oluşturma



?>