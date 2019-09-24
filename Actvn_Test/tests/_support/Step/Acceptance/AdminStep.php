<?php
namespace Step\Acceptance;
use Page\LoginPage;

/**
 * Class AdminStep
 * @package Step\Acceptance
 */
class AdminStep extends \AcceptanceTester
{
	/**
	 * @param \AcceptanceTester $I
	 * @throws \Exception
	 */
	public function doLogin(\AcceptanceTester $I)
	{
		$I = $this;
		$I->amOnPage(LoginPage::$URL);
		$I->waitForElement(LoginPage::$title, 3);
		$I->see(LoginPage::$hvkt);
		$I->waitForText(LoginPage::$tk, 3);
		$I->see(LoginPage::$tk);
		$I->fillField(LoginPage::$UserName, "AT131341");
		$I->waitForText(LoginPage::$mk,3);
		$I->see(LoginPage::$mk);
		$I->fillField(LoginPage::$PassWord, "07/09/1998");
		$I->waitForElement(LoginPage::$submit, 3);
		$I->see(LoginPage::$login);
		$I->click(LoginPage::$submit);
		$I->see(LoginPage::$hvkt);
	}
}