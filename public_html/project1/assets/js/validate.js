/*
Kyle Bansavage
JavaScript file for Project 1
*/		

//Validates all fields
function validate()
{
	document.getElementById('first-name').style.backgroundColor = 'white';
	document.getElementById('last-name').style.backgroundColor = 'white';
	document.getElementById('location').style.backgroundColor = 'white';
	var errorCount = 0;
	//first name
	if(document.getElementById("first-name").value == "")
	{
		errorCount++;
		document.getElementById('first-name').style.backgroundColor = 'yellow';
	}
	//last name
	if(document.getElementById("last-name").value == "")
	{
		errorCount++;
		document.getElementById('last-name').style.backgroundColor = 'yellow';
	}
	//location
	if(document.getElementById("location").value == "" )
	{
		errorCount++;
		document.getElementById('location').style.backgroundColor = 'yellow';
	}	
	if(errorCount > 0)
	{
		return false;
	}
	else
	{
		return true;
	}
}