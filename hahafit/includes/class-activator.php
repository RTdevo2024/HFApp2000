<?php
/**
 * Fired during plugin activation.
 *
 * Orchestrates all one-time setup tasks: database tables, custom roles, and
 * seed data.  Actual implementations live in their respective classes and will
 * be filled in during prompts 1b and 1c.
 *
 * @package Hahafit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Hahafit_Activator
 */
class Hahafit_Activator {

	/**
	 * Run all activation tasks.
	 *
	 * Called by register_activation_hook() in hahafit.php.
	 */
	public static function activate() {
		// TODO (1b): Hahafit_Database::create_tables();
		// TODO (1c): Hahafit_Roles::add_coach_role();
		// TODO (1c): Hahafit_Seeder::seed_form_options();
	}
}
