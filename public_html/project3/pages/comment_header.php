	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="../style.css" />
	<link rel="icon" href="../images/c.png">
	
	<script>
		//Validates all fields
		function validate()
		{
			var errorNum= 0;
			var name = (document.getElementById("name").value).trim();
			var email = (document.getElementById("email").value).trim();
			var comments = (document.getElementById("comments_field").value).trim();
			//name
			if(name == "")
			{		
				errorNum++;
				document.getElementById("name").style.backgroundColor = "yellow";				
			}
			//email
			if(email == "" )
			{
				errorNum++;
				document.getElementById("email").style.backgroundColor = "yellow";
			}
			//comments
			if(comments == "" )
			{
				errorNum++;
				document.getElementById("comments_field").style.backgroundColor = "yellow";
			}			
			//set error message
			if(errorNum > 0 )
			{
				document.getElementById("php_error").style.display= "none";
				return false;
			}
			else
			{
				return true;
			}
		}
		
		<!--Script used to change the picture-->
		var fullPic;
		var i =1;
		function init(){
			fullPic = document.getElementById("comment_pic");
			fullPic.style.backgroundImage="url('../images/commentpic1.jpg')";
			setInterval(function(){picSwitch()},'2500');
		}
		function picSwitch(){
			i++;
			if(i>3){
				i=1;
			}
			var newPic = "\'../images/commentpic" + i + ".jpg\'"; 
			fullPic.style.backgroundImage="url("+newPic+")";
		}
		
	</script>	
	
</head>
<body onload="init();">