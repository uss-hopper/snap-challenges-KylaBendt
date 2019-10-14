window.onload = function() {
	initInput();
};

function initInput() {
	let form = document.getElementById("input-form");
	form.addEventListener("submit", (event)=> {
		handleForm(event, form);
	});
}

//This function prevents default form submit behaviour and calls function to convert
function handleForm(event, formRef) {
	if(event.preventDefault) {
		event.preventDefault();
	}
	displayConversion();
	formRef.reset();
}

function displayConversion(){
	let inputWeight = document.getElementById("input-weight");
	let inputUnits = document.getElementById("units");
	let displayAnswer = document.getElementById("display-answer");
	let convertedGrams = convertWeight(inputWeight.value, inputUnits.value);
	displayAnswer.textContent = inputWeight.value + " " + inputUnits.value + " is equal to " + convertedGrams + " g";
}

/*
* Convert a weight or mass to grams.
*
* @param weight The weight or mass to be converted.
* @param units The abbreviation for the units in which the weight/mass is measured ("lbs", "oz", "kg", "g", "mg")
* @returns The mass in grams
* */
function convertWeight(weight, units) {
	let grams = 0;
	if(units.toLowerCase() === "lbs") {
		grams = weight * 453.92;
	} else if(units.toLowerCase() === "oz") {
		grams = weight * 28.35;
	} else if(units.toLowerCase() === "kg") {
		grams = weight * 1000;
	} else if(units.toLowerCase() === "g") {
		grams = weight;
	} else if(units.toLowerCase() === "mg") {
		grams = weight / 1000;
	}
	return grams;
}