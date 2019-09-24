<?php
use Step\Acceptance\AdminStep as AcceptanceTester;

/**
 * Class LoginCest
 */
class LoginCest
{
	/**
	 * @param AcceptanceTester $I
	 * @throws Exception
	 */
	public function logIn(AcceptanceTester $I)
	{
		$I->wantToTest("LoginPage function");
		$I->doLogin($I);
	}
}
