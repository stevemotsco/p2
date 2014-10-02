<?php

// Pull data from content form via index.
// Run logic on responses to index form.


if (isset($_POST['wcount']) > 0){
    $wcount = $_POST['wcount'];
    //echo $_POST['wcount'];
    //echo $wcount;
} else {
	// if wcount not received then default to four words
	$wcount = 4;
}

if (isset($_POST['ncount'])){
//if (isset($_POST['ncount']) > 0){
	//$ncount = $_POST['ncount'];
	//echo $_POST['ncount'];
	$ncount = true; 
	//echo "ncount=true";
} else {
    //$ncount = 0;
    $ncount = false;
}

if (isset($_POST['scount']) == true){
//if (isset($_POST['scount']) > 0){
    //$scount = $_POST['scount'];
	//echo $_POST['scount'];
	$scount = true; 
	//echo "scount=true";
} else {
    //$scount = 0;
    $scount = false;
}

if (isset($_POST['uppercase'])){
	//echo $_POST['uppercase'];
    $uppercase = true;  
    //echo "uppercase=true";
}else {
    $uppercase = false; 
}

$npwd = "";
$selwords_array = []; //hold the words generated for the password
$symbols_array = ['!','@','$','%','^','&','*','(',')','~','-','_','+','='];
$numbers_array = [0,1,2,3,4,5,6,7,8,9];

//turn text file of words into an array of words
if ($word_array = file('wordsEnglish.txt')) {
	//do something with $wordList which is an array of words
	echo 'Count of words: ' . count($word_array) . '<br/>';
	echo $word_array[3];
	
	echo 'Countof symbols: ' . count($symbols_array) . '<br/>';
	echo $symbols_array[3];

	echo 'Countof numbers: ' . count($numbers_array) . '<br/>';
	echo $numbers_array[3];

	echo ('wcount='.$wcount);

	for ($i = 0; $i < $wcount; $i++) {
		$rand = rand(0, count($word_array) - 1);
		$one_word = $word_array[$rand];
		array_push($selwords_array, $one_word);
		//echo $one_word;
	}

	//loop through words in $selwords_array and apitalize first letter of every word (or not)
	if ($uppercase == true) {
		//echo "uppercase == true";
		foreach($selwords_array as $index => $one_word) {
			$selwords_array[$index] = ucfirst($one_word);
		//echo $selwords_array[$index] . "<br/>";
		}
	}

	//add in symbols (or not)
	if ($scount == true) {
		echo "scount == true";
	//str_replace(search, replace, subject)

		//foreach($selwords_array as $index => $one_word) {
		//	$selwords_array[$index] = ucfirst($one_word);
		//}
	}
	
    if ($ncount == true) {
		echo "ncount == true";
	}

	$npwd = implode("", $selwords_array);
    //echo "<br/>" . $npwd;


} else {
	$npwd = "Unable to access dictionary which is required to build a xkcd type password.  Please try again later.";
}



// Update variables to send back.


// Clean up.
