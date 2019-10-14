//TODO: onload

//TODO: event listener on for submit button

//TODO: get weight & units, call conversion, display grams



/*
* Convert a weight or mass to grams.
*
* @param weight The weight or mass to be converted.
* @param units The abbreviation for the units in which the weight/mass is measured
* @returns The mass in grams
* */
function convertWeight(weight, units) {
	let grams = 0;
	if(units.toLowerCase() === "lbs") {
		grams = weight * 453.92;
	}

	return grams;
}