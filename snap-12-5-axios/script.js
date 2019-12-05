function onPageLoad() {
	axios.get('https://dog.ceo/api/breeds/list/all').then(result => {
		let breeds = result.data.message;
		let breedDiv = document.getElementById("target");
		breedDiv.textContent = "";
		for (let [key, value] of Object.entries(breeds)) {
			let child = document.createElement("p");
			child.textContent = `${key}: ${value}`;
			breedDiv.appendChild(child);
		}
	});
}

