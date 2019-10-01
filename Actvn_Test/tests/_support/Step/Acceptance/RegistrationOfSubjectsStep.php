<?php
namespace Step\Acceptance;
use Page\RegistrationOfSubjectsPage;

/**
 * Class RegistrationOfSubjectsStep
 * @package Step\Acceptance
 */
class RegistrationOfSubjectsStep extends AdminStep
{
	/**
	 * @param \AcceptanceTester $I
	 * @throws \Codeception\Exception\ModuleException
	 */
	public function doRegistrationOfSubject(\AcceptanceTester $I)
	{
		$I = $this;
		$I->amOnPage(RegistrationOfSubjectsPage::$URL1);
		$I->wait(2);
		$I->seeInPopup(RegistrationOfSubjectsPage::$mess);
		$I->acceptPopup(); //OK
	}

	/**
	 * @param \AcceptanceTester $I
	 * @throws \Codeception\Exception\ModuleException
	 * @throws \Exception
	 */
	public function showAllClass(\AcceptanceTester $I)
	{
		$I = $this;
		$I->doRegistrationOfSubject($I);
		$I->waitForElement(RegistrationOfSubjectsPage::$chooseSub, 3);
		$I->see(RegistrationOfSubjectsPage::$chooseText);
		$I->click(RegistrationOfSubjectsPage::$chooseSub);
		$I->see(RegistrationOfSubjectsPage::$subText);
		$I->checkOption(RegistrationOfSubjectsPage::$option);
		$I->waitForElement(RegistrationOfSubjectsPage::$buttonShow, 3);
		$I->click(RegistrationOfSubjectsPage::$buttonShow);
		$I->waitForElement(RegistrationOfSubjectsPage::$table, 3);
		$I->see(RegistrationOfSubjectsPage::$sub);
	}

	/**
	 * @param \AcceptanceTester $I
	 * @throws \Codeception\Exception\ModuleException
	 * @throws \Exception
	 */
	public function doFilterClassesWithoutDuplicationOfTime(\AcceptanceTester $I)
	{
		$I = $this;
		$I->showAllClass($I);
		$I->waitForElement(RegistrationOfSubjectsPage::$buttonFilter, 3);
		$I->click(RegistrationOfSubjectsPage::$buttonFilter);
		$I->waitForElement(RegistrationOfSubjectsPage::$table, 2);
		$I->dontSee(RegistrationOfSubjectsPage::$sub);
	}

	/**
	 * @param \AcceptanceTester $I
	 * @throws \Codeception\Exception\ModuleException
	 * @throws \Exception
	 */
	public function printResults(\AcceptanceTester $I)
	{
		$I = $this;
		$I->doRegistrationOfSubject($I);
		$I->waitForElement(RegistrationOfSubjectsPage::$buttonPrint, 3);
		$I->click(RegistrationOfSubjectsPage::$buttonPrint);
	}
}