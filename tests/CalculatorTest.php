<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\Calculator;

class CalculatorTest extends TestCase
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
 
    /*public function testSum(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("3+5");
    	$this->assertEquals(8, $hasil);
    }

    public function testKali(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("3*6");
    	$this->assertEquals(18, $hasil);
    }

    public function testBagi(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("9/3");
    	$this->assertEquals(3, $hasil);
    }

    public function testSumMulti(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("3+5+3");
    	$this->assertEquals(11, $hasil);
    }

    public function testKaliMulti(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("3*2*3");
    	$this->assertEquals(18, $hasil);
    }

    public function testBagiMulti(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("9/3/3");
    	$this->assertEquals(1, $hasil);
    }

    public function testCombine1(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("2*2+2");
    	$this->assertEquals(6, $hasil);
    }

    public function testCombine2(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("2/2+2");
    	$this->assertEquals(3, $hasil);
    }

    public function testCombine3(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("2+3*2");
    	$this->assertEquals(8, $hasil);
    }

    public function testCombine4(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("5/(2+3)");
    	$this->assertEquals(1, $hasil);
    }

    public function testCombine5(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("5*(2+3)");
    	$this->assertEquals(25, $hasil);
    }

    public function testCombine6(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("(5*2)+2");
    	$this->assertEquals("12", $hasil);
    }

    public function testCombine7(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("5*0*2");
    	$this->assertEquals("0", $hasil);
    }*/

   /* public function testCombine7(){
    	$calc = new Calculator();
    	$hasil = $calc->hitung("5**2");
    	$this->assertEquals("error", $hasil);
    }*/

}
