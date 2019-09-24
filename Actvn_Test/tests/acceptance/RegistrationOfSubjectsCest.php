<?php
use Step\Acceptance\RegistrationOfSubjectsStep as AcceptanceTester;

/**
 * Class RegistrationOfSubjectsCest
 */
class RegistrationOfSubjectsCest
{
    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function registrationOfSubjects(AcceptanceTester $I)
    {
        $I->wantTo("LoginPage");
        $I->doLogin($I);

        $I->wantToTest("Show all class you can registration");
        $I->showAllClass($I);

        $I->wantToTest("Filter classes without duplication of time");
        $I->doFilterClassesWithoutDuplicationOfTime($I);
    }
}
