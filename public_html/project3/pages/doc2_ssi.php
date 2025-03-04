	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />	
	<link rel="icon" href="images/c.png">
	
	<script>
		var prevoffset = null;
		//Function to animate scrolling to inner page link			
		function scroll()
		{	
			var y = pageYOffset;			
			if(prevoffset !== pageYOffset)
			{
				prevoffset = pageYOffset;
				if( y	< document.getElementsByClassName('content')[0].offsetTop)
				{	
					y +=5;
					window.scrollBy(0, 5 ); // horizontal and vertical scroll increments
					scrolldelay = setTimeout('scroll()',5); // scrolls every 100 milliseconds	
					console.log("y is : " +  y);
					console.log("client page height : "  + document.getElementsByClassName('content')[0].offsetTop);
				}	
			}			
						
		}
	</script>
	
</head>
<body>