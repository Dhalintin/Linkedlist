<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;


	class PrimeFactorsTest extends TestCase
	{
	 /**
	 * @test
	 * @dataProvider factors
	 * @param $number
	 * @param $expected
	 */
	 public function generates_prime_factors_of_number($number, $expected){
		 $factor = new PrimeFactors;
		 $this->assertEquals([$expected], $factor->generate($number));
		}
		
	public function factors(){
			 return[
			 [1, []],
			 [2, [2]],
			 [3, [3]],
			 ];
		 }
	}