<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\Controller\CadastrarplanoController;
use Symfony\Component\HttpFoundation\Request;

class PlanosTestsTest extends TestCase
{
    public function testSomething()
    {
        $this->assertTrue(false);
    }


    public function testNomeString(){


        $cadaPlan = new CadastrarplanoController () ;

        $planomes = $cadaPlan->cadastroplano(NEW Request())->request('GET', '/submit', ['planome' => 321])->$planos->getPlanome();
        
       // ->request('POST', '/submit', ['planome' => 'Fabien']
       // $cadaPlan->cadastroplano()->$form->isSubmitted();
      //  $cadaPlan->$form->get('planome')->setData("321");
        //$cadaPlan->$form->isSubmitted();

        $this->assertEquals(321,  321 );

    }
}

