<?php

if (!empty($_POST["answer_submit"])) {

	$firstcategory_score = 0;
	$secondcategory_score = 0;
	$thirdcategory_score = 0;
	$forthcategory_score = 0;
	$fifthcategory_score = 0;


	//1つ目のカテゴリー
	$firstcategory_answers = [
		$_POST["firstcategory_firstquestion"],
		$_POST["firstcategory_secondquestion"],
		$_POST["firstcategory_thirdquestion"],
		$_POST["firstcategory_forthquestion"],
		$_POST["firstcategory_fifthquestion"]
	];
	foreach ($firstcategory_answers as $firstcategory_answer) {
		if ($firstcategory_answer == "yes") {
			$firstcategory_score++;
		}
	}
	//結果表示
	if ($firstcategory_score == 0) {
		echo '<img src="red.jpeg">';
	} elseif ($firstcategory_score == 1) {
		echo '<img src="orange.jpeg">';
	} elseif ($firstcategory_score == 2) {
		echo '<img src="yellow.jpeg">';
	} elseif ($firstcategory_score == 3) {
		echo '<img src="green.jpeg">';
	} elseif ($firstcategory_score == 4) {
		echo '<img src="blue.jpeg">';
	} else {
		echo '<img src="purple.jpeg">';
	}


	//2つ目のカテゴリー
	$secondcategory_answers = [
		$_POST["secondcategory_firstquestion"],
		$_POST["secondcategory_secondquestion"],
		$_POST["secondcategory_thirdquestion"],
		$_POST["secondcategory_forthquestion"],
		$_POST["secondcategory_fifthquestion"]
	];
	foreach ($secondcategory_answers as $secondcategory_answer) {
		if ($secondcategory_answer == "yes") {
			$secondcategory_score++;
		}
	}
	//結果表示
	if ($secondcategory_score == 0) {
		echo '<img src="red.jpeg">';
	} elseif ($secondcategory_score == 1) {
		echo '<img src="orange.jpeg">';
	} elseif ($secondcategory_score == 2) {
		echo '<img src="yellow.jpeg">';
	} elseif ($secondcategory_score == 3) {
		echo '<img src="green.jpeg">';
	} elseif ($secondcategory_score == 4) {
		echo '<img src="blue.jpeg">';
	} else {
		echo '<img src="purple.jpeg">';
	}


	//3つ目のカテゴリー
	$thirdcategory_answers = [
		$_POST["thirdcategory_firstquestion"],
		$_POST["thirdcategory_secondquestion"],
		$_POST["thirdcategory_thirdquestion"],
		$_POST["thirdcategory_forthquestion"],
		$_POST["thirdcategory_fifthquestion"]
	];
	foreach ($thirdcategory_answers as $thirdcategory_answer) {
		if ($thirdcategory_answer == "yes") {
			$thirdcategory_score++;
		}
	}
	//結果表示
	if ($thirdcategory_score == 0) {
		echo '<img src="red.jpeg">';
	} elseif ($thirdcategory_score == 1) {
		echo '<img src="orange.jpeg">';
	} elseif ($thirdcategory_score == 2) {
		echo '<img src="yellow.jpeg">';
	} elseif ($thirdcategory_score == 3) {
		echo '<img src="green.jpeg">';
	} elseif ($thirdcategory_score == 4) {
		echo '<img src="blue.jpeg">';
	} else {
		echo '<img src="purple.jpeg">';
	}


	//4つ目のカテゴリー
	$forthcategory_answers = [
		$_POST["forthcategory_firstquestion"],
		$_POST["forthcategory_secondquestion"],
		$_POST["forthcategory_thirdquestion"],
		$_POST["forthcategory_forthquestion"],
		$_POST["forthcategory_fifthquestion"]
	];
	foreach ($forthcategory_answers as $forthcategory_answer) {
		if ($forthcategory_answer == "yes") {
			$forthcategory_score++;
		}
	}
	//結果表示
	if ($forthcategory_score == 0) {
		echo '<img src="red.jpeg">';
	} elseif ($forthcategory_score == 1) {
		echo '<img src="orange.jpeg">';
	} elseif ($forthcategory_score == 2) {
		echo '<img src="yellow.jpeg">';
	} elseif ($forthcategory_score == 3) {
		echo '<img src="green.jpeg">';
	} elseif ($forthcategory_score == 4) {
		echo '<img src="blue.jpeg">';
	} else {
		echo '<img src="purple.jpeg">';
	}


	//5つ目のカテゴリー
	$fifthcategory_answers = [
		$_POST["fifthcategory_firstquestion"],
		$_POST["fifthcategory_secondquestion"],
		$_POST["fifthcategory_thirdquestion"],
		$_POST["fifthcategory_forthquestion"],
		$_POST["fifthcategory_fifthquestion"]
	];
	foreach ($fifthcategory_answers as $fifthcategory_answer) {
		if ($fifthcategory_answer == "yes") {
			$fifthcategory_score++;
		}
	}
	//結果表示
	if ($fifthcategory_score == 0) {
		echo '<img src="red.jpeg">';
	} elseif ($fifthcategory_score == 1) {
		echo '<img src="orange.jpeg">';
	} elseif ($fifthcategory_score == 2) {
		echo '<img src="yellow.jpeg">';
	} elseif ($fifthcategory_score == 3) {
		echo '<img src="green.jpeg">';
	} elseif ($fifthcategory_score == 4) {
		echo '<img src="blue.jpeg">';
	} else {
		echo '<img src="purple.jpeg">';
	}
}
