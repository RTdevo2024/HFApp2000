<?php
/**
 * Plugin Name:       Hahafit - Smart Fitness Platform
 * Plugin URI:        https://hahafit.ir
 * Description:       Smart fitness platform for the Iranian market.
 * Version:           1.0.0
 * Author:            Hahafit Team
 * Author URI:        https://hahafit.ir
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hahafit
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Requires PHP:      7.4
 *
 * @package Hahafit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Plugin version.
define( 'HAHAFIT_VERSION', '1.0.0' );

// Absolute path to the plugin directory, with trailing slash.
define( 'HAHAFIT_PATH', plugin_dir_path( __FILE__ ) );

// Public URL to the plugin directory, with trailing slash.
define( 'HAHAFIT_URL', plugin_dir_url( __FILE__ ) );

// Database table prefix used by all Hahafit tables.
define( 'HAHAFIT_DB_PREFIX', 'hf_' );

/**
 * Load the core class files that must always be available.
 */
require_once HAHAFIT_PATH . 'includes/class-activator.php';
require_once HAHAFIT_PATH . 'includes/class-deactivator.php';
require_once HAHAFIT_PATH . 'includes/class-hahafit.php';

/**
 * Run activation logic when the plugin is first activated.
 */
register_activation_hook( __FILE__, array( 'Hahafit_Activator', 'activate' ) );

/**
 * Run deactivation logic when the plugin is deactivated.
 */
register_deactivation_hook( __FILE__, array( 'Hahafit_Deactivator', 'deactivate' ) );

/**
 * Bootstrap the plugin after all plugins have loaded so WooCommerce (and any
 * other dependency) is guaranteed to be available.
 */
add_action( 'plugins_loaded', 'hahafit_boot' );

/**
 * Instantiate and run the main plugin class.
 *
 * Aborts gracefully when WooCommerce is missing so the rest of WordPress
 * keeps working; an admin notice is shown instead.
 */
function hahafit_boot() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'hahafit_woocommerce_missing_notice' );
		return;
	}

	Hahafit::get_instance()->run();
}

/**
 * Display a dismissible admin notice when WooCommerce is not active.
 */
function hahafit_woocommerce_missing_notice() {
	?>
	<div class="notice notice-error">
		<p>
			<?php
			printf(
				/* translators: %s: WooCommerce plugin name */
				esc_html__( 'Hahafit requires %s to be installed and active.', 'hahafit' ),
				'<strong>WooCommerce</strong>'
			);
			?>
		</p>
	</div>
	<?php
}
