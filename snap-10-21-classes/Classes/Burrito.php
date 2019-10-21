<?php


namespace KylaBendt\SnapChallengesKylaBendt;


/*
 *This is the burrito class.
 *
 * @author Kyla Bendt
 * @version 0.0.1
 */
class Burrito {

//Define state variables
/**
 * chile color - red or green!
 * @var string $chileColor
 */
private $burritoChileColor;

/*
 * meatType
 * @var string $meatType
 */
private $burritoMeatType;

/*
 * Constructor for this burrito
 *
 * @param string $newBurritoChileColor chile color of this burrito- must be 'red' or 'green'
 * @param string $newBurritoMeatType meat type of this burrito
 */

public function __construct($newBurritoChileColor, $newBurritoMeatType) {
	try {
		$this->setBurritoChileColor($newBurritoChileColor);
		$this->setBurritoMeatType($newBurritoMeatType);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 101, $exception));
	}
}

/*
 * accessor for burritoChileColor
 *
 * @return string value of burritoChileColor
 */

public function getBurritoChileColor(): string {
	return ($this->burritoChileColor);
}

/*
 * mutator for burritoChileColor
 *
 * @param string 'red' or 'green' $newBurritoChileColor accepts
 * @throws \InvalidArgumentException if $newBurritoChileColor is not 'red' or 'green'
 * @throws \TypeError if $newBurritoChileColor is not a string
 */

public function setBurritoChileColor($newBurritoChileColor): void {
	//Sanitize the input
	$newBurritoChileColor = trim($newBurritoChileColor);
	$newBurritoChileColor = filter_var($newBurritoChileColor, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newBurritoChileColor) === true) {
		throw(new \InvalidArgumentException("newBurritoChileColor is empty or insecure"));
	}

	//Check if chile type is 'red' or 'green'
	if($newBurritoChileColor != 'red' | $newBurritoChileColor != 'green') {
		throw(new \InvalidArgumentException("chile type must be 'red' or 'green'"));
	}

	//store the chile type
	$this->burritoChileColor = $newBurritoChileColor;
}


/*
 * accessor for burritoMeatType
 *
 * @return string value of burritoMeatType
 */

public function getBurritoMeatType(): string {
	return ($this->burritoMeatType);
}


/*
 * mutator for burritoMeatType
 *
 * @param string  $newBurritoMeatType
 * @throws \InvalidArgumentException if input is not secure
 * @throws \TypeError if $newBurritoMeatType is not a string
 */

public function setMeatType($newBurritoMeatType): void {
	//Sanitize the input
	$newBurritoMeatType = trim($newBurritoMeatType);
	$newBurritoMeatType = filter_var($newBurritoMeatType, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newBurritoMeatType) === true) {
		throw(new \InvalidArgumentException("newBurritoMeatType is empty or insecure- no vegetarians allowed!!!"));
	}


	//store the meat type
	$this->burritoMeatType = $newBurritoMeatType;
}

public static function eatBurrito() : void {
	echo("Your burrito is gone!");
}

}