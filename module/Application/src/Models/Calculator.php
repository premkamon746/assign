<?php

	namespace Application\Models;

	class Calculator
	{ 
		function findingX($n){
			if($n==1) return 3;
			else return $this->findingX($n-1)+(($n-1)*2);
		}
	}