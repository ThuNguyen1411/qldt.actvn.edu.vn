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
	 *
	 **/
	public function logIn(AcceptanceTester $I)
	{
		$I->wantToTest("Login Page function");
		$I->doLogin($I);
	}

	/**
	 * @param AcceptanceTester $I
	 * @throws Exception
	 */
	public function logInFail(AcceptanceTester $I)
	{
		$I->wantToTest("Login page fail with wrong password");
		$I->doLogInFail($I);

		$I->wantToTest("Login page fail with don't fill user and pass");
		$I->doLoginFailure($I);
	}
}
