
/* Set content */
function setContent(html){
    document.getElementById('content').innerHTML = html;
}


/* On click functions for links */
function modifyContent(ele,text){
    //change title text
    var color = $(ele).css('backgroundColor');
    document.getElementById('title').innerHTML = text;
    $('#title').css("color", color);
    //determine what content to display
    $('#content').css('visibility','hidden');
    $('#content').removeClass();
    switch(text) {
        case 'About':
            $('#content').addClass('slideLeft');
            var html = 
              `<p>I am a lead developer based in Manhattan.</p>
              <p>I currently work @ Myntr in NYC, building ecommerce brands.</p>
              <p>Within my professional career I have built & led development teams, developed Shopify themes for multi-million dollar commerce companies, engineered software for Mitsubishi Electric, and designed the inventory system for the RIT Information Technology department.</p>
              <p>Check out my work!</p>`;
            setContent(html);
            break;
        case 'Work':
            $('#content').addClass('slideDown');
            var html = `<a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://drinkarizona.com/' target='_blank'>
                          🍹 Arizona Iced Tea
                        </a>            
                        <p class="work-caption">The Classic 99¢ beverage</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://www.pier1.com/' target='_blank'>
                          🏠 Pier1
                        </a>            
                        <p class="work-caption">Home goods</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://www.lavazzausa.com/' target='_blank'>
                          ☕ Lavazza
                        </a>            
                        <p class="work-caption">Italy's #1 coffee company</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://veronicabeard.com/' target='_blank'>
                          👗 Veronica Beard
                        </a>            
                        <p class="work-caption">Luxury women's fashion</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://www.hedleyandbennett.com/' target='_blank'>
                          🧑‍🍳 Hedley & Bennett
                        </a>            
                        <p class="work-caption">LA's leading apron company</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://ninewest.com/' target='_blank'>
                          👠 Ninewest
                        </a>            
                        <p class="work-caption">High-end shoes</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://www.wholelattelove.com/' target='_blank'>
                          ♨️ Whole Latte Love
                        </a>
                        <p class="work-caption">Largest retailer for espresso machines</p>

                        <a onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' class="work-link" href='https://hellobonafide.com/' target='_blank'>
                          💊 Bonafide
                        </a>            
                        <p class="work-caption">Health and Wellness brand</p>`
           
            setContent(html);
            break;
        case 'Contact':
            $('#content').addClass('slideUp');
            var html = `<a class="contact-link" onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' href="mailto:kylebansavage@gmail.com">kylebansavage@gmail.com</a><br><br>
                        <a class="contact-link" onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' href='https://github.com/bansavage' target='_blank'>GitHub</a><br><br>
                        <a class="contact-link" onmouseover='linkHoverOn(this)' onmouseout='linkHoverOut(this)' href='https://www.linkedin.com/in/kylebansavage/' target='_blank'>LinkedIn</a><br><br>`	
            setContent(html);
            break;
        default:
            break;
    }
}

function linkHoverOn(ele){
	var color = randomHoverColor();
    $(ele).css("background-color", color);
    $(ele).css("color", "white");
}
function linkHoverOut(ele){
	$(ele).css("background-color", "transparent");
    $(ele).css("color", "black");
    $(ele).css( 'cursor', 'pointer' );
}
/* Runs when page loads */
$(document).ready(function(){
    $('#links').css('visibility','hidden');
    $('#links').addClass('slideRight');
    //link hovering
    $("#about").hover(function(){
        var color = randomHoverColor();
        $(this).css("background-color", color);
        $(this).css("color", "white");
        $('#title').css("color", color);
        $(this).css( 'cursor', 'pointer' );
    },function(){
        $(this).css("background-color", "transparent");
        $(this).css("color", "black");
    });
    $("#work").hover(function(){
        var color = randomHoverColor();
        $(this).css("background-color", color);
        $(this).css("color", "white");
        $('#title').css("color", color);
        $(this).css( 'cursor', 'pointer' );
    },function(){
        $(this).css("background-color", "transparent");
        $(this).css("color", "black");
    });
    $("#exp").hover(function(){ //this is FUN link
        var color = randomHoverColor();
        $(this).css("color", "white");
        $(this).text('fun!');
        $(this).css( 'cursor', 'pointer' );
        $(this).css("background-color", color );
        $(this).css("text-decoration", "underline" );


        $("*").css("background-color", color );
        $("*").not(this).css("color", color );
        $("#content").css("visibility", "hidden !important" );

        $('#links').removeClass('slideRight');
        $('#links').addClass('floating');
        $('#links').css('visibility','visible');
        $('#links').find('#resume').css('visibility','hidden');

        $('.particle-background').css('opacity', '0');

        document.query

    },function(){
        $(this).css("background-color", "transparent");
        $(this).css("color", "black");
        $(this).text('fun');

        $("*").not( this ).css( "background-color", "unset" );
        $("*").css( "color", "unset" );

        $('#links').find('#resume').css('visibility','visible');
        $("#content").css("visibility", "visible" );

        $(this).css("text-decoration", "none" );
        $('#links').removeClass('floating');
        $('.particle-background').css('opacity', '1');
    });
    $("#resume").hover(function(){
        var color = randomHoverColor();
        $(this).css("background-color", color);
        $(this).css("color", "white");
        $('#title').css("color", color);
        $(this).css( 'cursor', 'pointer' );
    },function(){
        $(this).css("background-color", "transparent");
        $(this).css("color", "black");
    });
    $("#contact").hover(function(){
        var color = randomHoverColor();
        $(this).css("background-color", color);
        $(this).css("color", "white");
        $('#title').css("color", color);
        $(this).css( 'cursor', 'pointer' );
    },function(){
        $(this).css("background-color", "transparent");
        $(this).css("color", "black");
    });
});

/* Produce a random HEX code */
function randomHoverColor(){
    var color = "#" + Math.floor(Math.random() * 0xFFFFFF).toString(16);
    if(color.length < 7 ){
        color = "#D40D12";
    }
    return color;
}

/* Add and remove class from element */
function addAnimation(ele,animation)
{
    $(ele).addClass(animation);
}

function delAnimation(ele,animation)
{
    $(ele).removeClass(animation);
}

/* Modify title */
(function titleScroller(text) {
  document.title = text;
  setTimeout(function () {
    if(document.title === "Kyle Bansavage_"){
      titleScroller("Kyle Bansavage");
    } else {
      titleScroller("Kyle Bansavage_")
    }
  }, 650);
}(" Kyle Bansavage_"));
