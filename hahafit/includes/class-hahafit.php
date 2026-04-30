<?php
/**
 * The core plugin class.
 *
 * Bootstraps all sub-systems and acts as the central service locator.
 * Uses a singleton so there is always exactly one running instance.
 *
 * @package Hahafit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Hahafit
 */
class Hahafit {

	/**
	 * The single instance of this class.
	 *
	 * @var Hahafit|null
	 */
	private static $instance = null;

	/**
	 * Plugin version, kept in sync with the constant.
	 *
	 * @var string
	 */
	protected $version;

	/**
	 * The unique identifier (text domain) of this plugin.
	 *
	 * @var string
	 */
	protected $plugin_name;

	/**
	 * Private constructor — use get_instance() instead.
	 */
	private function __construct() {
		$this->version     = HAHAFIT_VERSION;
		$this->plugin_name = 'hahafit';

		$this->init();
	}

	/**
	 * Return (or create) the single instance.
	 *
	 * @return Hahafit
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Prevent cloning of the singleton.
	 */
	private function __clone() {}

	/**
	 * Prevent unserialization of the singleton.
	 *
	 * @throws \Exception Always.
	 */
	public function __wakeup() {
		throw new \Exception( 'Cannot unserialize singleton.' );
	}

	/**
	 * Wire up all sub-systems.
	 *
	 * Called once from the constructor so every dependency is resolved before
	 * run() attaches hooks to WordPress.
	 */
	public function init() {
		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_frontend_hooks();
	}

	/**
	 * Require all class files the plugin depends on.
	 *
	 * Additional requires will be added here as each sub-system is built.
	 */
	private function load_dependencies() {
		// TODO (1b): require Database, Roles, and other core classes here.
	}

	/**
	 * Set the plugin locale so translations can be loaded.
	 */
	private function set_locale() {
		add_action(
			'init',
			function () {
				load_plugin_textdomain(
					'hahafit',
					false,
					dirname( plugin_basename( HAHAFIT_PATH . 'hahafit.php' ) ) . '/languages'
				);
			}
		);
	}

	/**
	 * Register all hooks that power the WordPress admin area.
	 *
	 * Admin controllers will be wired up here as they are built.
	 */
	private function define_admin_hooks() {
		// TODO (future prompts): register admin menu, settings, and AJAX hooks.
	}

	/**
	 * Register all hooks that power the public-facing side.
	 *
	 * Frontend controllers, shortcodes, and REST routes will be registered
	 * here as they are built.
	 */
	private function define_frontend_hooks() {
		// TODO (future prompts): register shortcodes, REST API, and asset hooks.
	}

	/**
	 * Kick off the plugin by attaching the loader to WordPress.
	 *
	 * Called once from hahafit_boot() after WooCommerce availability is
	 * confirmed.
	 */
	public function run() {
		// Hooks are already registered in init(); nothing extra needed here yet.
		// Sub-system run() calls will be chained here as each module is added.
	}

	/**
	 * Return the plugin name (text domain).
	 *
	 * @return string
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * Return the plugin version string.
	 *
	 * @return string
	 */
	public function get_version() {
		return $this->version;
	}
}
