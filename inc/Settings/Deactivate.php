<?php

/**
 * Plugin Deactivate
 * 
 * @package kk-post-grid
 */

namespace Inc\Settings;

class Deactivate 
{
	
	public static function deactivate()
	{
		flush_rewrite_rules( );
	}
}

