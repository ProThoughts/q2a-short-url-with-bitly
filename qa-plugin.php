<?php

/*
	Plugin Name: Short your URLs
	Plugin URI: https://github.com/roine/q2a-short-url-with-bitly
	Plugin Description: Allow to automatically change the background color of a question if contain a favorite tag or category for current user
	Plugin Version: 1.0
	Plugin Date: 2012-02-07
	Plugin Author: jonathan de Montalembert
	Plugin Author URI: jon.webistro.net/b
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Minimum PHP Version: 5
	Plugin Update Check URI: https://github.com/roine/q2a-short-url-with-bitly
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
			header('Location: ../../');
			exit;
	}
	
qa_register_plugin_layer('qa-short-url-layer.php', 'Short Url Layer');
qa_register_plugin_module('module', 'qa-short-url-admin.php', 'qa_short_url_admin', 'Short Url with bitly');

/*
	Omit PHP closing tag to help avoid accidental output
*/