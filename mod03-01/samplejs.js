function showMonth() {
			var num = document.getElementById('month').value;
			var month = 
			['January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December']
			// switch(num) {
			// 	case "1":
			// 	month = "January";
			// 	break;
			// 	case "2":
			// 	month = "February";
			// 	break;
			// 	case "3":
			// 	month = "March";
			// 	break;
			// 	case "4":
			// 	month = "April";
			// 	break;
			// 	case "5":
			// 	month = "May";
			// 	break;
			// 	case "6":
			// 	month = "June";
			// 	break;
			// 	case "7":
			// 	month = "July";
			// 	break;
			// 	case "8":
			// 	month = "August";
			// 	break;
			// 	case "9":
			// 	month = "September";
			// 	break;
			// 	case "10":
			// 	month = "October";
			// 	break;
			// 	case "11":
			// 	month = "November";
			// 	break;
			// 	case "12":
			// 	month = "December";
			// }
			document.getElementById('heading2').innerHTML = month[num-1];
		}

		function calculate() {
			document.getElementById('heading').innerHTML = eval(document.getElementById('heading').innerHTML)

		}

		function checkFive() {
			var num = document.getElementById('heading').innerHTML

			if (num>5) {
				console.log(num + " is greater than 5")
			}
			else if (num<5) {
				console.log(num + " is less than 5")
			}
			else {
				console.log(num + " is equal than 5")
			}
		}

		function oddEven() {
			var num = document.getElementById('heading').innerHTML

			if (num%2 == 0) {
				console.log(num + " is an even number")
			}
			else {
				console.log(num + " is an odd number")
			}

		}


		function clr() {
			document.getElementById('heading').innerHTML = "";
		}

		function display(num){
			document.getElementById('heading').innerHTML += num;
		}
		function changeHTML(input) {
			// alert('Hello World');
			// document.getElementsByTagName('h1').value = 'javascript';
			// var input1 = parseInt(document.getElementById('input1').value);
			// var input2 = parseInt(document.getElementById('input2').value);
			// document.getElementById('heading').innerHTML = input1 + input2;
			alert(input);
		}