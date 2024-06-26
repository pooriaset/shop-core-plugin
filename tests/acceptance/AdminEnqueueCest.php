<?php
class AdminEnqueueCest
{

	function _before(AcceptanceTester $I)
	{
		// will be executed at the beginning of each test
		$I->loginAsAdmin();
		$I->am('administrator');
	}

	function enqueue_admin_scripts(AcceptanceTester $I)
	{
		$I->wantTo('access to the plugin settings page and check the scripts enqueue');
		$I->amOnPage('/wp-admin/admin.php?page=nextjs-woo-plugin');
		$I->seeInPageSource('nextjs-woo-plugin-settings-script');
		$I->seeInPageSource('nextjs-woo-plugin-admin-script');
	}

	function enqueue_admin_styles(AcceptanceTester $I)
	{
		$I->wantTo('access to the plugin settings page and check the style enqueue');
		$I->amOnPage('/wp-admin/admin.php?page=nextjs-woo-plugin');
		$I->seeInPageSource('nextjs-woo-plugin-settings-styles-css');
		$I->seeInPageSource('nextjs-woo-plugin-admin-styles-css');
	}
}
