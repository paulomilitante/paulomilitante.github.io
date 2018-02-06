document.getElementById('btn').addEventListener('click', multiple);

function multiple() {
	var num = document.getElementById('input1').value;

	if (num%2 == 0) {
		if (num%3 == 0 && num%5 == 0)
			alert(num + " is an EVEN multiple of both 3 AND 5!");
		else if (num%3 == 0)
			alert(num + " is an EVEN multiple of 3, but not of 5.");
		else if (num%5 == 0)
			alert(num + " is an EVEN multiple of 5, but not of 3.");
		else
			alert(num + " is EVEN and NOT a multiple of 3 or 5.");
	}
	else {
		if (num%3 == 0 && num%5 == 0)
			alert(num + " is an ODD multiple of both 3 AND 5!");
		else if (num%3 == 0)
			alert(num + " is an ODD multiple of 3, but not of 5.");
		else if (num%5 == 0)
			alert(num + " is an ODD multiple of 5, but not of 3.");
		else
			alert(num + " is ODD and NOT a multiple of 3 or 5.");
	}
}

document.getElementById('btn2').addEventListener('click',calculateBMI);

function calculateBMI() {

	var weight = document.getElementById('weight').value;
	var wOption = document.getElementById('wOption').value;
	var height = document.getElementById('height').value;
	var hOption = document.getElementById('hOption').value;

	if (wOption == "lbs") {
		weight *= 0.453592;
	}

	if (hOption == "in") {
		height *= 0.0254;
	}

	var bmi = weight/(height*height);
	bmi = bmi.toFixed(2);


	if (bmi < 18.5)
		alert("Your BMI is " + bmi + " and you are UNDERWEIGHT");
	else if (bmi >= 18.5 && bmi <= 24.9)
		alert("Your BMI is " + bmi + " and you have NORMAL WEIGHT"); 
	else if (bmi > 24.9 && bmi <= 29.9)
		alert("Your BMI is " + bmi + " and you are OVERWEIGHT");
	else
		alert("Your BMI is " + bmi + " and you are OBESE");	
}

var x = 0;
while (x <= 20) {
	if (x%2 == 0) {
		if (x%3 == 0 && x%5 == 0)
			console.log(x + " is an EVEN multiple of both 3 AND 5!");
		else if (x%3 == 0)
			console.log(x + " is an EVEN multiple of 3, but not of 5.");
		else if (x%5 == 0)
			console.log(x + " is an EVEN multiple of 5, but not of 3.");
		else
			console.log(x + " is EVEN and NOT a multiple of 3 or 5.");
	}
	else {
		if (x%3 == 0 && x%5 == 0)
			console.log(x + " is an ODD multiple of both 3 AND 5!");
		else if (x%3 == 0)
			console.log(x + " is an ODD multiple of 3, but not of 5.");
		else if (x%5 == 0)
			console.log(x + " is an ODD multiple of 5, but not of 3.");
		else
			console.log(x + " is ODD and NOT a multiple of 3 or 5.");
	}
	x++;
}

var y = 0;
var z = 0;
var z1 = 0;
while (y <= 50) {
	if (y%2 == 0)
		z = z + y;
	else
		z1 = z1 + y;
	y++;
}
alert("Sum of Even: " + z + "\n" + "Sum of Odd: " + z1);


var colors = [
	"Red",
	"Orange",
	"Yellow",
	"Green",
	"Blue",
	"Indigo",
	"Violet"
];

var col = colors.length - 1;
while (col >= 0) {
	console.log(colors[col]);
	col--;
}


document.getElementById('btn3').addEventListener('click', goLoop);

function goLoop() {
	var ast = document.getElementById('ast').value;
	document.getElementById('divTest').innerHTML = "";
	for (var x = 1; x <= ast; x++) {
	for (var y = 1; y <= ast; y++){
		document.getElementById('divTest').innerHTML += " *";
	}
	document.getElementById('divTest').innerHTML += "<br>";
	}
}