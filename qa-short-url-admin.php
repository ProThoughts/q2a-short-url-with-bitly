<?php
if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
header('Location: ../');
exit;
}

class qa_short_url_admin{

	function admin_form(&$qa_content)
	{
		$ok=null;

		if (qa_clicked('short_url_save_button')) {
			qa_opt('short_url_content_on', (bool)qa_post_text('short_url_content_on'));
			qa_opt('short_url_bitly_username', (string)qa_post_text('short_url_bitly_username'));
			qa_opt('short_url_bitly_api_key', (string)qa_post_text('short_url_bitly_api_key'));
			$ok = qa_lang('admin/options_saved');
		}
		else if (qa_clicked('short_url_reset_button')) {
			foreach($_POST as $i => $v) {
				$def = $this->option_default($i);
				if($def !== null) qa_opt($i,$def);
			}
			$ok = qa_lang('admin/options_reset');
		}

			$fields = array();
			$fields[] = array(
				'label' => 'Enable Short Url',
				'tags' => 'NAME="short_url_content_on"',
				'value' => qa_opt('short_url_content_on'),
				'type' => 'checkbox',
				);	
			$fields[] = array(
				'label' => 'Your Bitly username',
				'tags' => 'NAME="short_url_bitly_username"',
				'value' => qa_opt('short_url_bitly_username'),
				'type' => 'string',
				);
				$fields[] = array(
					'label' => 'Your Bitly api key',
					'tags' => 'NAME="short_url_bitly_api_key"',
					'value' => qa_opt('short_url_bitly_api_key'),
					'type' => 'string',
					);
		
		return array(
			'ok' => ($ok && !isset($error)) ? $ok : null,

			'fields' => $fields,

		'buttons' => array(
		array(
			'label' => qa_lang_html('main/save_button'),
			'tags' => 'NAME="short_url_save_button"',
			),
		array(
			'label' => qa_lang_html('admin/reset_options_button'),
			'tags' => 'NAME="short_url_reset_button"',
			),
			),
			);		
	}

}