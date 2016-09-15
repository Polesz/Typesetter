<?php

$GP_MENU_ELEMENTS = 'UIkitMenu';

function UIKitMenu($node, $attributes){
	GLOBAL $GP_MENU_LINKS;

	if( $node == 'a' ){
		$format = $GP_MENU_LINKS;
		$search = array('{$href_text}','{$attr}','{$label}','{$title}');

		if( in_array('uk-parent',$attributes['class']) ){
			$format = '<li {$attr} data-uk-dropdown><a>{$label} <i class="uk-icon-caret-down"></i></a><div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">';
		}

		return str_replace( $search, $attributes, $format );
	}
}

function UIkitOffcanvasMenu($node, $attributes){
	GLOBAL $GP_MENU_LINKS;

	if( $node == 'a' ){
		$format = $GP_MENU_LINKS;
		$search = array('{$href_text}','{$attr}','{$label}','{$title}');

		if( in_array('uk-parent',$attributes['class']) ){
			$format = '<li {$attr}><a href="#">{$label}</a>';
		}

		return str_replace( $search, $attributes, $format );
	}
}
