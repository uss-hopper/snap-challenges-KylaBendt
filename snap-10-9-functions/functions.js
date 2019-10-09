window.onload = function() {
	console.log("js started");
	displayFunctionResults();
}

function displayFunctionResults() {

	let numberOne = 1;
	let numberTwo = 2;
	let numberThree = multiplyTwoNumbers(numberOne, numberTwo);
	console.log("New Number: " + numberThree);

	let stringOne = "Good";
	let stringTwo = "Morning";
	let stringThree = smushStrings(stringOne, stringTwo);
	console.log("New String: " + stringThree);

	let display = document.getElementById("display");
	display.textContent = "New Number: " + numberThree + " New String: " + stringThree;
}

/*
* Returns the product of two numbers
*
* @param $num1 first number to be multiplied
* @param $num1 second number to be multiplied
* @return $product value of num1 * num2
* */
function multiplyTwoNumbers(num1, num2) {
	let product = num1 * num2;
	return product;
}


/*
* Concatenates two strings
*
* @param $str1 first string to be concatenated
* @param $str1 second string to be concatenated
* @return $product str1 and str2 concatenated
* */
function smushStrings(str1, str2) {
	let newString = str1 + " " + str2;
	return newString;
}