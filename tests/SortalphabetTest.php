<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\Sortalphabet;

class SortalphabetTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /*public function testalpha1(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("imam");
    	$this->assertEquals("aim", $hasil);
    }

    public function testalpha2(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("imam ramadhan");
    	$this->assertEquals("adhimnr", $hasil);
    }

    public function testalpha3(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("imam ramadhani");
    	$this->assertEquals("adhimnr", $hasil);
    }

     public function testalpha4(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("imam ramadhan tea");
    	$this->assertEquals("adehimnrt", $hasil);
    }

    public function testalpha5(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("Imam Ramadhan");
    	$this->assertEquals("IRadhmn", $hasil);
    }

    public function testalpha6(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("Imam Ramadhani");
    	$this->assertEquals("IRadhimn", $hasil);
    }

    public function testalpha7(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("Imam Ramadhan Tea");
    	$this->assertEquals("IRTadehmn", $hasil);
    }

    public function testalpha8(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("imam       ");
    	$this->assertEquals("aim", $hasil);
    }

    public function testalpha9(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("       imam");
    	$this->assertEquals("aim", $hasil);
    }

    public function testalpha10(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("       imam        ");
    	$this->assertEquals("aim", $hasil);
    }
*/
	/**
	 * @expectedException Exception
	*/
   /* public function testalphaErr1(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("Imam Ramadhan!");
    }*/

	/**
	 * @expectedException Exception
	*/
   /* public function testalphaErr2(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("Imam Ramadhan123");
    }*/

	/**
	 * @expectedException Exception
	*/
    /*public function testalphaErr5(){
    	$alpha = new Sortalphabet();
    	$hasil = $alpha->stringorder("Imam Ramadhan@");
    }*/

}
