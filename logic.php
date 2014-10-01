<?php

// Pull data from content form via index.
// Run logic on responses to index form.


if (isset($_POST['wcount'])){
    $wcount = $_POST['wcount'];
} else {
	// if wcount not received then default to four words
	$wcount = 4;
}

//if (iss($_POST['number'])){
if (isset($_POST['ncount']) > 0){
    $ncount = true;
} else {
    $ncount = false;
}

//if (iss($_POST['symbol'])){
if (isset($_POST['scount']) > 0){
    $scount = true;
} else {
    $scount = false;
}

if (isset($_POST['uppercase'])){
    $uppercase = true;
}else {
    $uppercase = false;
}

//define some needed arrays
$symbols_array = [];
$numbers_array = [0,1,2,3,4,5,6,7,8,9];

//turn text file of words into an array of words
if ($word_array = file('wordsEnglish.txt')) {
	//do something with $wordList which is an array of words
	//echo 'Countof words: ' . count($wordList) . '<br/>';'
	//echo $wordList[234];
	$selwords_array = ['!','@','#','$','%','^','&','*','(',')','~','-','_','+','='];

	for ($i = 0; $i < $wcount; $i++) {
		$rand = rand(0, count($word_array) - 1);
		$one_word = $word_array[$rand];
		array_push($selwords_array, $one_word);
	}
}

//capitalize first letter of every word (or not)
if ($uppercase) {
	foreach($selwords_array as $index => $one_word) {
		$selwords_array[$index] = ucfirst($one_word);
	}
}

//add in symbols (or not)
if ($uppercase) {
	
//str_replace(search, replace, subject)

	foreach($selwords_array as $index => $one_word) {
		$selwords_array[$index] = ucfirst($one_word);
	}
}


// Update variables to send back.


// Clean up.
