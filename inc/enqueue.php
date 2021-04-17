<?php
/**
 * CSS、JavaScriptの登録
 *
 * @package my-ystandard
 */

add_action(
	'ys_enqueue_css',
	function () {
		wp_enqueue_style(
			'mys_main',
			MYS_URL . '/assets/css/main.css',
			[],
			filemtime( MYS_PATH . '/assets/css/main.css' )
		);
	}
);
