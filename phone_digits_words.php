<?php

# Print all possible letter from phone Digits Dialup

# https://www.geeksforgeeks.org/find-possible-words-phone-digits/

function printWordRecursion($input,$curr,$output,$number){

	$dialPadLetters = array("", "", "abc", "def", "ghi", "jkl",  
                    "mno", "pqrs", "tuv", "wxyz");

	$inputArr=str_split($input);
	for($i=0;$i<strlen($dialPadLetters[$inputArr[$curr]]);$i++){
		array_push($output,$dialPadLetters[$inputArr[$curr]][$i]);
		printWordRecursion($input,$curr+1,$output,$number);
		array_pop($output);
	}

	if($curr==$number){
		$out = implode("", $output);
		print($out."\n");
	}

}

$inputNum="234";
printWordRecursion($inputNum,0,[],strlen($inputNum));

?>