function onPageLoad() {

	axios.get('https://dog.ceo/api/breeds/list/all').then(result => {
		let breeds = result.data.message;
		console.log(breeds);
		let breedDiv = document.getElementById("target");
		breedDiv.textContent = Object.keys(breeds);
	});

}

