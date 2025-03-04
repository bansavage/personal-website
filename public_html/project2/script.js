/*
Kyle Bansavage
Javascript file for Project 2
*/
	
	//Assemble tabs for organization
	function getTabs(orgId){
		//remove old tabs
		$( "#tabs" ).remove();
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/Application/Tabs?orgId='+orgId},
			success:function(d){
				//Check for a server error
				if($(d).find('error').length!=0){
					alert("There is an issue with the server! Data is unattainable!");
				}
				else
				{
					//build a select option menu
					//need to get here:      window['get'+$(this).val()](2)
					//var x='<select onchange="window[\'get\'+$(this).val()]('+orgId+')">';
					var x = '<div id="tabs" >';
					x+=  '<ul>';
					//create list items for each tab
					$('Tab',d).each(function(){
						x+='<li><a href="#'+$(this).text()+'">'+$(this).text()+'</a></li>';
					});
					x+='</ul><div id="tableFont">';
					//Create divs for each tab
					$('Tab',d).each(function(){				
							x+='<div id="'+$(this).text()+'"></div>';
					});
					x+='</div></div>';
					$('#dump').html(x);			
				}//
				$( "#tabs" ).tabs();//Create tabs
			}//	
		});//
			//Put data on screen
			getGeneral(orgId);	
			getLocations(orgId);	
			getTraining(orgId);
			getTreatment(orgId);
			getFacilities(orgId);
			getEquipment(orgId);
			getPhysicians(orgId);
			getPeople(orgId);
				
						
	}//end main funct
	
	//Obtain the General Information for a specific orgId
	function getGeneral(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/General'},
			success:function(d){
				//Create table
				var x ='';
				//name
				if(( $(d).find('name').text()) == null)
				{
					x+='<tr><td>Name:</td><td>'+'<span class="notFound">*no data found*</span>'+'</td></tr>';					
				}
				else{				
					x+='<tr><td>Name:</td><td>'+$(d).find('name').text()+'</td></tr>';
				}
				//desc
				if( ($(d).find('description').text()) == null)
				{
					x+='<tr><td>Description:</td><td>'+'<span class="notFound">*no data found*</span>'+'</td></tr>';
				}
				else{
					x+='<tr><td>Description:</td><td>'+$(d).find('description').text()+'</td></tr>';
				}
				//email
				if( ( $(d).find('email').text() ) == null)
				{
					x+='<tr><td>Email:</td><td>'+'<span class="notFound">*no data found*</span>'+'</td></tr>';
				}
				else{
					x+='<tr><td>Email:</td><td>'+$(d).find('email').text()+'</td></tr>';
				}	
				//website
				x+='<tr><td>Website:</td><td>'+$(d).find('website').text()+'</td></tr>';
				//members
				x+='<tr><td>Number of Members:</td><td>'+$(d).find('nummembers').text()+'</td></tr>';
				//calls
				x+='<tr><td>Number of Calls:</td><td>'+$(d).find('numcalls').text()+'</td></tr>';				
				//put it out...
				$('#General').html(x);				
			}
		});
	}
	
	
	// Obtain location for specific organization
	function getLocations(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/Locations'},
			success:function(d){
				var x ='<table>';
				var map = '';
				$('location',d).each(function(){	
					x+='<tr><td>Location:</td><td>'+$(this).find('type').text()+'</td></tr>';
					x+='<tr><td>Address:</td><td>'+$(this).find('address1').text()+'</td></tr>';
					x+='<tr><td>City:</td><td>'+$(this).find('city').text()+'</td></tr>';					
					x+='<tr><td>County:</td><td>'+$(this).find('countyName').text()+'</td></tr>';
					x+='<tr><td>State:</td><td>'+$(this).find('state').text()+'</td></tr>';
					x+='<tr><td>Zip:</td><td>'+$(this).find('zip').text()+'</td></tr>';
					x+='<tr><td>Phone:</td><td>'+$(this).find('phone').text()+'</td></tr>';				
					x+='<tr><td>Fax:</td><td>'+$(this).find('fax').text()+'</td></tr>';			
					x+='<tr><td>Latitude:</td><td>'+$(this).find('latitude').text()+'</td></tr>';		
					x+='<tr><td>Longitude:</td><td>'+$(this).find('longitude').text()+'</td></tr>';		
					//Remove spaces and replace with plus signs in addresses and cities
					var address = ( $(this).find('address1').text() ).split(' ').join('+');
					var city = ( $(this).find('city').text() ).split(' ').join('+');
					var state = $(this).find('state').text();
					//Concantenate map string
					map += '<iframe  width="600"  height="450"  frameborder="0" style="border:0"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBn9dkj4ivD-4kqX-lBxpR2frBXfKPurIQ&q='+address+','+city+ '+'+state+'"></iframe"><br><br><br>';
					
				});
				//put it out...
				$('#Locations').html(x+'</table><div id="map"></div>');	
						//$.noConflict();
				$('#map').html(map);						
				// $.noConflict();
			}
			
		});
	}
	
	//Obtain training data
	function getTraining(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/Training'},
			success:function(d){
				var x ='<table>';
				$('training',d).each(function(){
						x+='<tr><td>Type:</td><td>'+$(this).find('type').text()+'</td></tr>';
						x+='<tr><td>Abbreviation:</td><td>'+$(this).find('abbreviation').text()+'</td></tr>';									
				});
				//put it out...
				$('#Training').html(x+'</table>');						
			}
		});
	}
	
	//Obtain treatments data
	function getTreatment(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/Treatments'},
			success:function(d){
				var x ='<table>';
				$('treatment',d).each(function(){
						x+='<tr><td>Type:</td><td>'+$(this).find('type').text()+'</td></tr>';
						x+='<tr><td>Abbreviation:</td><td>'+$(this).find('abbreviation').text()+'</td></tr>';			
				});
				//put it out
				$('#Treatment').html(x+'</table>');						
			}
		});
	}
	
	//Obtain facilities data
	function getFacilities(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/Facilities'},
			success:function(d){
				var x ='<table>';;
				$('facility',d).each(function(){
						x+='<tr><td>Type:</td><td>'+$(this).find('type').text()+'</td></tr>';
						x+='<tr><td>Quantity:</td><td>'+$(this).find('quantity').text()+'</td></tr>';	
						x+='<tr><td>Description:</td><td>'+$(this).find('description').text()+'</td></tr>';									
				});
				//put it out...
				$('#Facilities').html(x+"</table>");						
			}
		});
	}
	
	//Obtain equipment data
	function getEquipment(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/Equipment'},
			success:function(d){
				var x ='<table>';
				$('equipment',d).each(function(){
						x+='<tr><td>Type:</td><td>'+$(this).find('type').text()+'</td></tr>';
						x+='<tr><td>Quantity:</td><td>'+$(this).find('quantity').text()+'</td></tr>';	
						x+='<tr><td>Description:</td><td>'+$(this).find('description').text()+'</td></tr>';									
				});
				//put it out...
				$('#Equipment').html(x+'</table>');						
			}
		});
	}
	
	//Get physicians data
	function getPhysicians(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/Physicians'},
			success:function(d){
				var x ='<table>';
				$('physician',d).each(function(){
						x+='<tr><td>Name:</td><td>'+$(this).find('fName').text()+ ' ' +$(this).find('fName').text()+ ' ' +$(this).find('mName').text()+' ' +$(this).find('lName').text()+'</td></tr>';
						x+='<tr><td>License:</td><td>'+$(this).find('license').text()+'</td></tr>';	
						x+='<tr><td>Phone:</td><td>'+$(this).find('phone').text()+'</td></tr>';												
				});
				//put it out...
				$('#Physicians').html(x+'</table>');						
			}
		});
	}
	
	//Get people data
	function getPeople(orgId){
		$.ajax({
			type:'get',
			url:'proxy.php',
			data:{path:'/'+orgId+'/People'},
			success:function(d){
				var x ='<table>';
				$('person',d).each(function(){
						x+='<tr><td>Name:</td><td>'+$(this).find('fName').text()+ ' ' +$(this).find('mName').text()+' ' +$(this).find('lName').text()+'</td></tr>';
						x+='<tr><td>Role:</td><td>'+$(this).find('role').text()+'</td></tr>';												
				});
				//put it out...
				$('#People').html(x+'</table>');						
			}
		});		
			
	}
	
	
	//Obtain the orgTypes and cities for the main search
	$(document).ready(function(){
		getOrgTypes();
		getCities( $('#state').val() );
	});

	//Obtain the cities for the main search
	function getCities(state){
		$.ajax({
			type:'get',
			url:'proxy.php',
			async:true,
			cache:false,
			data:{path:'/Cities?state='+state},
			success:function(data){
				if($(data).find('city').length == 0 ){
					var x='There are no cities in our db for '+state;
					$('#orgCitySearch').html(x);
				}else{
					//build options...
					var x='<select name="town" class="formSelection"><option value="">-- All Cities in '+state+' --</option>';
					$('city',data).each(function(){
						x+='<option value="'+$(this).text()+'">'+$(this).text()+'</option>';
					});
					//pump it out...
					$('#orgCitySearch').html(x+'</select>');
				}
			}
		});
	}

	//Obtain the orgTypes for the main search
	function getOrgTypes(){
		$.ajax({
			type:'get',
			url:'proxy.php',
			async:true,
			cache:false,
			data:{path:'/OrgTypes'},
			success:function(data){
				//build options...
				var x='<option value="">-- All Org Types --</option>';
				$('type',data).each(function(){
					x+='<option value="'+$(this).text()+'">'+$(this).text()+'</option>';
				});
				//pump it out...
				$('#orgType').html(x);
			}
		});
	}
	
	
	//Main Search function
	function checkSearch(){
		//console.log($('#mainSearch').serialize());
		$.ajax({
			type:'get',
			url:'proxy.php',
			async:true,
			cache:false,
			data:{path:'/Organizations?'+$('#mainSearch').serialize()},
			success:function(data){
				var x='<table id="myTable" class="tablesorter"><thead><tr id="results"><th>Service Type</th><th>Name</th><th>Email</th><th>City</th><th>County</th><th>State</th><th>Zipcode</th></tr></thead><tbody>';
				$('row',data).each(function(){
					x+='<tr><td>'+$(this).find('type').text()+'</td>';
					x+='<td style="color:#1919D1;cursor:pointer;" onclick="getTabs('+$(this).find('OrganizationID').text()+')">'+$(this).find('Name').text()+'</td>';
					x+='<td>'+$(this).find('Email').text()+'</td>';
					x+='<td>'+$(this).find('city').text()+'</td>';
					x+='<td>'+$(this).find('CountyName').text()+'</td>';
					x+='<td>'+$(this).find('State').text()+'</td>';
					x+='<td>'+$(this).find('zip').text()+'</td></tr>';
				});
				//Remove old tabs
				$( "#tabs" ).remove();
				//Display table
				$('#tableOutput').html(x+'</tbody></table>');
				//Apply jQuery tablesort plug-in
				//$("#myTable").tablesorter(); 
				
			}
		});		
	}
	