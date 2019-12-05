function onPageLoad() {

		// axios.get('https://dog.ceo/api/breeds/list/all').then(result => {
		// 	const breeds = result.data;
		// });
	let breeds = "dog, another dog";
	let breedDiv = document.getElementById("target");
	breedDiv.textContent = breeds;
}