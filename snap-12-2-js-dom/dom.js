window.onload = function() {
	mapArrayToDom();
}

function mapArrayToDom() {
	let names = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];
	let displayDiv = document.getElementById("display");
	names.map(function(name) {
		let child = document.createElement("p");
		child.textContent = name;
		displayDiv.appendChild(child);
		}
	)
}