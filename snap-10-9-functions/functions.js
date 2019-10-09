let numberOne = 1;
let numberTwo = 2;
let numberThree = multiplyTwoNumbers(numberOne, numberTwo);
console.log("New Number: " + numberThree);

let stringOne = "Good";
let stringTwo = "Morning";
let stringThree = smushStrings(stringOne, stringTwo);
console.log("New String: " + stringThree);


/*
* Returns the product of two numbers
*
* @Param $num1 first number to be multiplied
* @Param $num1 second number to be multiplied
* @return $product value of num1 * num2
* */
function multiplyTwoNumbers(num1, num2) {
	let product = num1 * num2;
	return product;
}


/*
* Concatenates two strings
*
* @Param $str1 first string to be concatenated
* @Param $str1 second string to be concatenated
* @return $product str1 and str2 concatenated
* */
function smushStrings(str1, str2) {
	let newString = str1 + " " + str2;
	return newString;
}