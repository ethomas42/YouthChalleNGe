function uploadForm() 
{
    var fName = document.getElementById("inputFirstName").value;
	var lName = document.getElementById("inputLastName").value;
	var mName = document.getElementById("inputMiddleName").value;
	var gender = document.getElementById("inputGender").value;
	var ssn = document.getElementById("inputSSN").value;
	var email = document.getElementById("inputEmail").value;
	var admissionStatus = document.getElementById("inputAdmission").value;

	document.getElementById("myForm").submit();
}

function validate(field, query) {
	var xmlhttp;
	if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = "Validating..";
		} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
			document.getElementById(field).innerHTML = "Error Occurred. Reload Or Try Again.";
		}
	}
	xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}
//https://www.formget.com/form-validation-using-ajax/