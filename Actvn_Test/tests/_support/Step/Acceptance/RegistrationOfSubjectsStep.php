<?php
namespace Step\Acceptance;
use Page\RegistrationOfSubjectsPage;

/**
 * Class RegistrationOfSubjectsStep
 * @property  symfony
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
        $I->wait(2);
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
        $I->wait(2);
    }

    /*
    public function doFilterClassesWithoutDuplicationOfTime(\AcceptanceTester $I)
    {
        $I = $this;
        $I->doRegistrationOfSubject();

    }*/
}