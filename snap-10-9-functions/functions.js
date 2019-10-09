let numberOne = 1;
let numberTwo = 2;
/*
* Returns the product of two numbers
*
* */
function multiplyTwoNumbers(num1, num2) {
	let product = num1 * num2;
	return product;
}

console.log("New Number:" + multiplyTwoNumbers(numberOne, numberTwo));

let stringOne = "Good";
let stringTwo = "Morning";
let stringThree = smushStrings(stringOne, stringTwo);
console.log("New String:" + stringThree);

function smushStrings(str1, str2) {
	let newString = str1 + " " + str2;
	return newString;
}