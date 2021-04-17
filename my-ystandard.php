<?php
/**
 * Plugin name: My yStandard
 * Description: このプラグインに、あなたのyStandard用カスタマイズコードを記述します。
 * Version: 1.0.1
 *
 * @package my-ystandard
 */

/**
 * プラグインのURL
 *
 * @var string
 */
define( 'MYS_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * プラグインのpath
 *
 * @var string
 */
define( 'MYS_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * 定数・関数の読み込み
 */
require_once 'inc/enqueue.php';
