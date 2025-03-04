<?php include('doc_ssi.php');?>
	<title>Colorado:About</title>
<?php include('doc3_ssi.php');?>

	<?php include('nav_ssi.php');?>
	
	<?php include('content_ssi.php');?>
	
		<!-- Intro paragraph-->
		<h1>
			About The Site
		</h1>
		
		<!--og javascript -->
		<h3> Original JavaScript Component</h3>		
		<p class="specp">
		My original Javascript component can be found on my comments page which is accessible via the global navigation bar.
		This script automatically rotates through a list of images whilst displaying each one for a set period of time.
		Each image has the same dimensions making it easy to place each image in a set div tag.
		The code works by two separate methods. The first method is called with onload when the page 
		first opens. Then this method calls the second method which utilizes a loop to rotate through the images.
		</p>
		
		<!--dhtml-->
		<h3> DHTML component</h3>		
		<p class="specp">
		My DHTML component is an automatic scroll animation on the homepage.
		The Javascript for this works by using pageYOffset, the scrollBy function, the setTimeout function,
		and the scrolldelay function. Each 5 milliseconds a recursive function scrolls the page down 5 pixels.
		</p>
		
		<!-- corrections -->
		<h3>Corrections from project 1</h3>		
		<p class="specp">
		Firstly, I changed the inner link text on subpages from "Click here!" to
		"Check out!". Secondly, I linked the subtitles on the What-To-Do, Attractions, and Upcoming Events
		pages. On the Upcoming Events page, the pictures are linked as well and lead to outside pages
		on other websites to provide more information on the events.
		</p>
		
		<!-- corrections -->
		<h3>Extras</h3>		
		<p class="specp">
		My first extra was some awesome CSS for my database table on the Comments page. My second
		extra was a favicon on all pages.
		</p>
		
		<hr>
		<p>			
			For my references, the only site I referred to is www.colorado.com.
			I used it for preliminary content ideas, locations, dates, and times.
		</p>	
		<!-- Site Design-->
		<p>
			When creating my site, I decided to direct my focus on minimalistic navigation
			and a hero image. On my main page, the hero image (the large image of Colorado)
			takes up 93% of the screen whilst my navigation bar consumes the rest. The large
			image attracts attention and is very pleasing to the eye. The nav bar then 
			uses colors found within the main image to create a contrasting scheme of green on 
			yellow. With this created, my sub pages then used the the same nav bar along with a much smaller 
			but identical image to that on my home page. Next, I structured all sub pages the same.
			They begin with the title of the page followed by a short introduction paragraph of what
			the page will detail. Then I used large, narrow images followed by paragraphs of information. The images 
			also linked to further sub pages when necessary. I made sure to use appropriate white space to keep
			the proximity of elements even and allow for perfect usability. Lastly, my links all used the same font. This
			repetition allows users to be able to easily decipher links from plain text.
		</p>
		
		<!-- Organization-->
		<p>
			My site is split into four parts. The home page, the what-to-do page, the attractions page, and the upcoming events page.
			Both my what-to-do page and the attractions page then had three sub pages linked to them. This helped lessen the 
			density of content that would be present on only two pages.
		</p>
		
		<!-- Content-->
		<p>
		My content is concise and full but not overly dense. I stuck to usually two paragraphs
		worth of information per page. I felt as two well written paragraphs can convey the information
		just as good at five. My content used many puns and enjoyable sentences that were descriptive to the visitor.
		</p>
		
		<!-- Navigation-->
		<p>
		My navigation is really simple. There are five global navigation items to choose from. However, only four are
		links to actual page content. I only needed four as I could condense my material into four different sections.
		Other sub pages are then linked to with internal links on the What-To-Do page and the
		Attractions page. These lower level sub pages then use internal links to bounce from one to 
		another.
		</p>
		
		<!-- HTML5 and CSS -->
		<p>
		Both my HTML5 and CSS validates and they work great. My content is mainly split up by divs and paragraphs. 
		I even incorporated some CSS3 within my CSS page to allow my images to fit nicely inside my divs. My MVC model is poor however
		but I believe that separating files into a sub pages folder and an images folder is all
		that is truly necessary for a decent website. The inner file structure has no effect
		on the user as long as it works like it should.
		</p>
		
		
<?php include('end_ssi.php');?>