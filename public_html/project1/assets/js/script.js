/*
Kyle Bansavage
JavaScript file for Project 1
*/

/** BROWSER DETECTION **/

var ieSeven;
//Check for MAC IE
if  ((navigator.userAgent.indexOf("MSIE") != -1) && (navigator.userAgent.indexOf("Mac") != -1) && (navigator.userAgent.indexOf("Opera") == -1)) 
{
	window.location="download.html";
}
//Check for IE 7
else if(navigator.appVersion.indexOf("MSIE 7.")!=-1)
{
	ieSeven = true;
	
}
//Check for IE 9+
else if(  document.addEventListener  )
{
    ieSeven = false;
 }
// Check for other modern Internet Explorers
else if(document.getElementById) 
{
	ieSeven = false;	
	
}
// Outdated Browser -- Redirect user to download page
else
{	
	window.location="download.html";
}

/* DATA OBJECTS */

//Create data object for choices
var data = new Object();

//FIRST MENU
data['init']=['Choose your initial strategy!','-- Choose --','Trojan Horse','Brute-force Attack'];

//Trojan Path
data['Trojan Horse']=['What will the trojan do?','-- Choose --','Install root access','Hold system for ransom'];
    //Backdoor path
    data['Install root access']=['What will the trojan do with full access to the mainframe?','-- Choose --','Shutdown The Mainframe','Take Control'];
    //Ransom Path
    data['Hold system for ransom']=['What will the program demand?','-- Choose --','Money','Data'];

//Brute-force Path
data['Brute-force Attack']=['What account shall be broken into?','-- Choose --','Admin','User'];
    //Admin path
    data['Admin']=['What will you do to the mainframe as the new admin?','-- Choose --','Steal Information','Inject Worm'];
    //User Path
    data['User']=['What will you do as an user in the mainframe','-- Choose --','Copy Data','Remain Undetected'];




/*
*Get element by id
*/
function $(id)
{
    return document.getElementById(id);
}


/*
* Get element by tag name and index
*/
function $$(tag,index)
{
    return document.getElementsByTagName(tag)[index];
}


/*Set storage for modern browsers*/
function setStorage(att)
{
		localStorage.setItem(att, $(att).value);
}

/*Set storage for IE 7 (COOKIES) */
function setStorageIE0()
{
	if(ieSeven == true)
	{
		SetCookie('first-name', $$('input',0).value);
	}
}
function setStorageIE1()
{
	if(ieSeven == true)
	{
		SetCookie('last-name',  $$('input',1).value);
	}
}
function setStorageIE2()
{
	if(ieSeven == true)
	{
		SetCookie('location',  $$('input',2).value);
	}
}

/*
Load local storage into form
*/
function displayStorage()
{
	//IE 7 Cookies
	if(ieSeven == true)
	{
		if(GetCookie("first-name") !== null)
		{
			$$('input',0).value = GetCookie("first-name");
		}
		if(GetCookie("last-name") !== null)
		{
			$$('input',1).value = GetCookie("last-name");
		}
		if(GetCookie("location") !== null)
		{
			$$('input',2).value = GetCookie("location");
		}
	}
	//modern browsers
	else
	{
		if(localStorage.getItem("first-name") !== null)
		{
			$('first-name').value = localStorage.getItem("first-name") ;
		}
		if(localStorage.getItem("last-name") !== null)
		{
			$('last-name').value = localStorage.getItem("last-name") ;
		}
		if(localStorage.getItem("location") !==null)
		{
			$('location').value = localStorage.getItem("location") ;
		}
	}
}

/*
Remove all text nodes from output div
*/
function clearOutput(id)
{
	while ($(id).hasChildNodes()) 
	{
		$(id).removeChild($(id).lastChild);
				
	}	
}



var butOpac = 0;
/* Fades in "Run Set Up" button on body load */
function fadeButton()
{
	if($('setup').style.opacity == '')
	{
		$('setup').style.opacity = '.01';		
	}
	if(parseFloat($('setup').style.opacity) < 1  && parseFloat($('setup').style.opacity) > 0) 
	{ 
		var opac = $('setup').style.opacity;
		butOpac= (parseFloat(opac) + .006);
	    var x = butOpac.toString();
		$('setup').style.opacity = x;
	}
	else
	{
		return;
	}
	setTimeout(function(){fadeButton();}, 20);
}

var newOpac = 0;
/* Function to fade text  (DHTML) */
function fadeText()
{

	$('output').style.visibility = 'visible';
    $('outputText').style.visibility = 'visible';
	$('setup').style.display= 'none';
	if($('outputText').style.opacity == '')
	{
		$('outputText').style.opacity = '.01';		
	}
	if(parseFloat($('outputText').style.opacity) < 1  && parseFloat($('outputText').style.opacity) > 0) 
	{ 
		var opac = $('outputText').style.opacity;
		newOpac = (parseFloat(opac) + .01);
	    var x = newOpac.toString();
		$('outputText').style.opacity = x;
	}
	else
	{
		return;
	}
	setTimeout(function(){fadeText();}, 20);
}	


/*
* Constructor function to dynamically create select menus
*/
function menuChange(element)
{
	$('setup').style.display= 'none';
    if(element == 'init')
	{
    	var moreData = data[element];		
		fadeText();
    }
	else
	{
    	//Assign user choice of the next data object to moreData
    	var moreData = data[element.value];			
		// see if element is last child. If not, kill last child
		while(element !=  element.parentNode.lastChild)
		{	
			//remove old menus
			element.parentNode.removeChild(element.parentNode.lastChild);
			clearOutput('outputText');
			clearOutput('infoForm');
			//Add original placeholder text to output div
			$('outputText').appendChild(document.createTextNode('> bash# Forced system reset'));
			$('outputText').appendChild(document.createElement('br'));
			$('outputText').appendChild(document.createTextNode('> awaiting user input...'));
			$('outputText').appendChild(document.createElement('br'));
			$('outputText').appendChild(document.createElement('br'));			
		}	
    	
    }
    //Check to make sure moreData is NOT empty, if it is build final output
    if(moreData != undefined)
    {			
		//dynamically create a h3
        var question = document.createElement('h3');
        //give h3 a class
		
		// IE 7 class setting
		if(ieSeven == true)
		{
			question.className = "greenColor";
		}
		//modern ieSevens
		else{
			 question.setAttribute('class', 'greenColor');
		}
       
        //put text into h3 (moreData[0])
        question.appendChild(document.createTextNode(moreData[0]));
        //put on parent
        $('menuForm').appendChild(question);
        //dynamcially build the select
        var select = document.createElement('select');
        //give it attrs (event)
		
		// IE 7 Set Attribute
        if(ieSeven == true){
        	select.setAttribute('onchange', function(){menuChange(this);});
        }else{
	        select.setAttribute('onchange', 'menuChange(this)');
	    }		
        select.setAttribute('class', 'menu');
        //loop through length of hold starting at 1 (not 0 - 0 is the question)
        for(var i=1; i< moreData.length; i++)
        {
            //build an option
            var option = document.createElement('option');
            //give option value and text of moreData[i]
            option.setAttribute('value', moreData[i]);
            //give option text
            option.appendChild(document.createTextNode(moreData[i]));
            //append option to select
            select.appendChild(option);
        }
        //append select to page
        $('menuForm').appendChild(select);
    }
    // moreData IS empty, build final output
    else
    {     
		clearOutput('outputText');
		clearOutput('infoForm');			
				var menu;
		var menuOptions;
		var input;
		var outputText;
		//Loop through array of Select menus and pull out user selected indexes
		for(var i = 0; i < 3; i++)
		{
			if(ieSeven == true)
			{
				menu = $$('select',i).selectedIndex;
				menuOptions = $$('select',i).options;	
			}
			else
			{
				menu = $$('select',i).selectedIndex;
				menuOptions = $$('select',i).options;	
			}			
			input = menuOptions[menu].text;
			//Append text to div
			if(i==0)
			{
				outputText = ('> Initial Strategy : ');
			}
			else if(i==1)
			{
				outputText = ('> Second Command : ');
			}
			else if(i==2)
			{
				outputText = ('> Final Command : ');
			}			
			$('outputText').appendChild(document.createTextNode(outputText));
			$('outputText').appendChild(document.createElement('br'));
			$('outputText').appendChild(document.createTextNode('-' + input));
			$('outputText').appendChild(document.createElement('br'));
			$('outputText').appendChild(document.createElement('hr'));
		}
		
		
		/* Creates form for user information gathering */
		var i = 0
		var name = "";
		var att = "";
		var type = "";
		var span;
		while(i < 4)
		{				
			if(i == 0){
				name = 'First Name';
				att = 'first-name';
				type = 'text';
			}
			if(i == 1){
				name = 'Last Name';
				att = 'last-name';
				type = 'text';
			}
			if(i == 2){
				name = 'Location';
				att = 'location';
				type = 'text';
			}
			if(i == 3){
				att = 'submit';
				type = 'submit';
			}
			if(i != 3){
				span = document.createElement('span');
				span.appendChild(document.createTextNode(name));
			}
			var input = document.createElement('input');			
			
			//IE 7 
			if(ieSeven == true)
			{				
				input.type = type;
				input.id = att;
			}
			//modern browsers
			else{
				input.setAttribute('type', type);
				input.setAttribute('id', att);	
			}					
			// IE 7
			if(ieSeven == true)
			{
				if(i == 0){
					input.setAttribute('onchange', function(){setStorageIE0();});
				}
				if(i == 1){
					input.setAttribute('onchange', function(){setStorageIE1();});
				}
				if(i == 2){
					input.setAttribute('onchange', function(){setStorageIE2();});
				}
				
			}
			//modern browsers
			else{
				input.setAttribute('onchange', 'setStorage(' + "'" + att + "'" + ')');
			}
			
			input.setAttribute('name', att);
			if( i == 3){
				input.setAttribute('value', 'Submit');
			}
			if(i != 3){
				input.setAttribute('size', '20');				
				if(i != 2){
					input.setAttribute('maxlength', '20');					
				}
				$('infoForm').appendChild(span);
			}						
			$('infoForm').appendChild(input);
			$('infoForm').appendChild(document.createElement('br'));
			i++;					
		}
		displayStorage();
		
    }

}


