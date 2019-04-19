<?php 

class LoginCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
		$I->wantTo ('login into dir.bg');
        $I->amOnPage('/login');
        $I->see('Вход');  
		$I->fillField('email', 'canko_canev@abv.bg');
        $I->fillField('password', 'mNUNzH5rkM');
        $I->click('Влез');
		$I->seeInCurrentUrl('/profile');
		$I->see('Изход');
    }
	
}