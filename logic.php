<?php

//get data from content.php form via $_POST
//get number of words
if (isset($_POST['wcount']) > 0){
    $wcount = $_POST['wcount'];
} else {
	//if wcount not received then default to four words
	$wcount = 4;
}

//get number of numbers
if (isset($_POST['ncount']) > 0){
	$ncount = $_POST['ncount'];
} else {
	//if ncount not received then default to zero numbers
    $ncount = 0;
}

//get number of symbols
if (isset($_POST['scount']) > 0){
    $scount = $_POST['scount'];
} else {
	// if scount not received then default to zero symbols
    $scount = 0;
}

//get if first letter of every word should be uppercase
if (isset($_POST['uppercase'])){
    $uppercase = true;  
}else {
    $uppercase = false; 
}

//declare and set some needed variables
$npwd = "";
$selwords_array = []; //hold the words generated for the password
$symbols_array = ['!','@','$','%','^','&','*','(',')','~','-','_','+','='];
$numbers_array = [0,1,2,3,4,5,6,7,8,9];

//turn text file of words into an array of words
if ($word_array = file('wordsEnglish.txt')) {
	//add random words from wordsEnglish.txt to $selwords_array
	for ($i = 0; $i < $wcount; $i++) {
		$rand = rand(0, count($word_array) - 1);
		$one_word = $word_array[$rand];
		array_push($selwords_array, $one_word);
		//echo $one_word;
	}

	//loop through words in $selwords_array and apitalize first letter of every word (or not)
	if ($uppercase == true) {
		foreach($selwords_array as $index => $one_word) {
			$selwords_array[$index] = ucfirst($one_word);
		}
	}

	//add in numbers (or not)
	for ($i = 0; $i < $ncount; $i++) {
		$rand = rand(0, count($numbers_array) - 1);
		$one_number = (string)$numbers_array[$rand] . " ";
		$rand = rand(0, count($selwords_array) - 1);
		array_splice($selwords_array, $rand, 0, $one_number);
	}

	if ($scount == true) {
		$rand = rand(0, count($symbols_array) - 1);
		$one_symbol = $symbols_array[$rand] . " ";
		$rand = rand(0, count($selwords_array) - 1);
		array_splice($selwords_array, $rand, 0, $one_symbol);
		}

	//add in symbols (or not)
	for ($i = 0; $i < $scount; $i++) {
		$rand = rand(0, count($symbols_array) - 1);
		$one_symbol = $symbols_array[$rand] . " ";
		$rand = rand(0, count($selwords_array) - 1);
		array_splice($selwords_array, $rand, 0, $one_symbol);
	}

	$npwd = implode("", $selwords_array);
    //echo "<br/>" . $npwd;

} else {
	//give message to user if unable to get words from file to make the password
	$npwd = "Unable to access dictionary which is required to build a xkcd type password.  Please try again later.";
}


