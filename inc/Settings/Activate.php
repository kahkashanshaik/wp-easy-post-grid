<?php

/**
 * Plugin Activate
 * 
 * @package kk-post-grid
 */

namespace Inc\Settings;

class Activate 
{
	
	public static function activate()
	{
		flush_rewrite_rules( );
	}

	public function testing_git_function() {
		echo "hello world";
	}
}

