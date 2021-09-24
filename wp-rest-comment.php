<?php
    /**
    * WP REST Comment
    *
    * WP REST Comment is free software: you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation, either version 2 of the License, or
    * any later version.
    *
    * WP REST Comment is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    * GNU General Public License for more details.
    *
    * You should have received a copy of the GNU General Public License
    * along with WP REST Comment. If not, see http://www.gnu.org/licenses/gpl-2.0.html
    *
    * @package           wp-rest-comment
    * @author            Workcompany, Appsdabanda, joaquiminteresting
    * @copyright         2021 workcompany & Appsdabanda
    * @license           GPL - 2.0-or-later
    * @since             1.0.0
    * 
    * @wordpress-plugin
    * Plugin Name:       WP REST Comment
    * Description:       Create comments via REST API, this plugin allows comments from mobile, desktop and other web Applications
    * Version:           1.0.0
    * Requires at least: 5.2.0
    * Author:            Workcompany, Appsdabanda, joaquiminteresting
    * Author URI:        https://appsdabanda.com
    * License:           GPL v2 or later
    * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
    * Text Domain:       wp-rest-comment
    * Domain Path:       /languages
    */

    // If this file is called directly, abort.
    if (!defined('WPINC')) {
        die;
    }

    /**
    * Currently plugin version.
    * Start at version 1.0.0 
    */
    define('WP_REST_COMMENT_VERSION', '1.0.0');

    /**
    * The code that runs during plugin activation.
    * This action is documented in includes/class-wp-rest-comment-activator.php
    */
    function activate_wp_rest_comment() {
        require_once plugin_dir_path(__FILE__) . 'includes/class-wp-rest-comment-activator.php';
        Wp_Rest_Comment_Activator::activate();
    }

    /**
    * The code that runs during plugin deactivation.
    * This action is documented in includes/class-wp-rest-comment-deactivator.php
    */
    function deactivate_wp_rest_comment() {
        require_once plugin_dir_path(__FILE__) . 'includes/class-wp-rest-comment-deactivator.php';
        Wp_Rest_Comment_Deactivator::deactivate();
    }

    register_activation_hook(__FILE__, 'activate_wp_rest_comment');
    register_deactivation_hook(__FILE__, 'deactivate_wp_rest_comment');

    /**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wp-rest-comment.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_rest_comment() {

	$plugin = new Wp_Rest_Comment();
	$plugin->run();

}
run_wp_rest_comment();

?>