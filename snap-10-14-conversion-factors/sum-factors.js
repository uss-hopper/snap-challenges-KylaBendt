/*This code is designed to take a positive integer, find all positive factors and sum them. */
window.onload = function() {
 console.log (sumFactors(12));
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

function displayFactorSum(){

}
//TODO: Check input to make sure it is a positive integer
//TODO: If it a positive integer, proceed w/ function
//TODO: If it is not a positive integer, give error

//TODO: Return result to html



/*

TODO: Write a for loop that cycles through all numbers from 1 to input
TODO: For each number, check if it is a factor (mod = 0)
TODO: if it is a factor, add to running sum
TODO: return sum
   */
function sumFactors(number) {
	let sum = 0;
	for(let i=1;i <= number;i++) {
		if((number % i) === 0) {
			sum = sum + i;
		}
	}
	return sum;
}


