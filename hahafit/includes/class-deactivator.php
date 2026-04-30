<?php
/**
 * Fired during plugin deactivation.
 *
 * Performs safe, non-destructive cleanup.  Database tables and user data are
 * intentionally left intact so that re-activating the plugin restores the
 * previous state without data loss.
 *
 * @package Hahafit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Hahafit_Deactivator
 */
class Hahafit_Deactivator {

	/**
	 * Run all deactivation tasks.
	 *
	 * Called by register_deactivation_hook() in hahafit.php.
	 */
	public static function deactivate() {
		// Flush rewrite rules so any custom endpoints are unregistered cleanly.
		flush_rewrite_rules();

		// NOTE: No tables, roles, or user data are removed here by design.
		// Uninstall cleanup (if ever needed) belongs in uninstall.php.
	}
}
