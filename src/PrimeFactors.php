<?php
	
namespace App;

class PrimeFactors{
	public function generate(int $num){
		$numsqrt = floor(sqrt($num));
		$prime = [2];
		$primefactor = [];
			
		for($j = 3; $j<=$numsqrt; $j+=2){
			$prime[] = $j;
		}
		$n = count($prime);
		
		for($i = 0; $i < $n; $i++){
			while(($num % $prime[$i]) == 0){
				$num /= $prime;
				$primefactor[] = $prime[$i];
			}
		}
		//Returning an array of prime factors
		return array_unique($primefactor);
	}
}
?>