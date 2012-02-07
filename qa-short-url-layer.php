<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
header('Location: ../');
exit;
}

class qa_html_theme_layer extends qa_html_theme_base {

	function q_view_main($q_main){
		qa_html_theme_base::q_view_main($q_main);
		if(qa_opt('short_url_content_on') && $_SERVER['REMOTE_ADDR'] != '127.0.0.1')
		{
			$login = qa_opt('short_url_bitly_username');
			$api_key = qa_opt('short_url_bitly_api_key');
			$url = 'dfdf';
		}
	}
}