<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Convert to grams</title>
	<script src="./weight-conversion.js"></script>
</head>
<body>
<a href="../index.php">Snap Challenge Home</a>
<a href="./index.php">October 14th Index</a>
<h1>Convert to grams</h1>
<div>
	<form id="input-form">
		<div>
			<label for="number">Weight</label>
			<input type="number" id="input-weight" name="input-weight">
			<label for="select"></label>
			<select id="unit" name="unit">
				<option value="lbs">Pounds</option>
				<option value="oz">Ounces</option>
				<option value="kg">Kilograms</option>
				<option value="g">Grams</option>
				<option value="mg">Milligrams</option>
			</select>
		</div>
		<button type="submit">Convert to grams</button>
	</form>
</div>
<div class="display-answer-container">
	<p id="display-answer"></p>
</div>
</body>
</html>