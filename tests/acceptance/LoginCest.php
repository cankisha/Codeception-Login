<?php 

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
		$I->amOnPage('/dsadasas');
		$I->seeElement('.notice');
    }
}
