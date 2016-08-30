<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GithubScoreTest extends TestCase
{
	use DatabaseTransactions;

    /**
     *
     * @test
     */
    public function when_a_user_send_an_empty_form_laravel_trigger_validations()
    {
        $this->visit('/scores/create')
            ->press('Crear')
            ->seePageIs('/scores/create')
			->see('Errores:');
    }

    /**
     *
     * @test
     */
    public function arstarst()
    {
        $this->visit('/scores/create')
			->type('rodri', 'username')
			->type('danny@email.com', 'email')
            ->press('Crear')
			->see('bacan');

		$this->seeInDatabase('scores', ['username' => 'rodrarstarstai']);
    }
}
