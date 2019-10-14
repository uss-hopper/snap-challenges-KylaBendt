/*This code is designed to take a positive integer, find all positive factors and sum them. */
window.onload = function() {
 initInput();
};

//Set event listener to get number from html
function initInput() {
	let form = document.getElementById("input-number-form");
	form.addEventListener("submit", (event)=> {
		handleNumberForm(event, form);
	});
}

//This function prevents default form submit behaviour and calls function to calculate and return sum
function handleNumberForm(event, formRef) {
	if(event.preventDefault) {
		event.preventDefault();
	}
	displayFactorSum();
	formRef.reset();
}

//TODO: Check input to make sure it is an integer
//TODO: If it is not a positive integer, give error

function displayFactorSum(){
	let inputNumber = document.getElementById("input-number");
	let displayAnswer = document.getElementById("display-answer");
	let sumOfFactors = sumFactors(inputNumber.value);
	displayAnswer.textContent = "Sum of factors is: " + sumOfFactors;
}


/* This function sums all of the positive factors of a number*/
function sumFactors(number) {
	let sum = 0;
	number = Math.abs(number);
	for(let i=1;i <= number;i++) {
		if((number % i) === 0) {
			sum = sum + i;
		}
	}
	return sum;
}


