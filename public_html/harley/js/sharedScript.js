var searchAssocArray = {
    "Athletics":"athletics",
    "Athletic":"athletics",
    "Awards": "awards",
    "Class Photos":"classphotos",
    "Candlelight": "candlelight",
    "Commencement": "commencement",
    "Commence": "commencement",
    "2000 2002 2003 2006 2009 2010": "commencement",
    "Fourth Grade Events":"fourthgrade",
    "Halloween":"halloween",
    "Sports":"sports",
    "Sport":"sports",
    "Men's Sports":"sports",
    "Mens Sports":"sports",
    "Women's Sports":"sports",
    "2011":"sports",
    "Womens Sports":"sports",
    "Homecoming Sports":"homecomingsports",
    "Homecoming":"homecoming",
    "Home":"homecoming",
    "Honors Assembly":"honors",
    "Honor":"honors",
    "Ice Cream Social":"icecream",
    "1999":"icecream",
    "Lower School Pageant":"pageant",
    "2013":"pageant",
    "Sixth Grade":"sixthgrade",
    "6 6th 2001":"sixthgrade",
    "Trivia Bowl":"trivia",
    "Organic Garden":"garden",
    "Drama And Theater":"theater",
    "Joy In Learning":"joy",
    "Various Events":"events",
    "Music And Chorus":"chorus",
    "Mr. Schudder's Machines":"machines",
    "2013":"machines",
    "Machine":"machines"
};

/*************************************************************
 SEARCH JS
 */
$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        //lower grid opacity
        $('div.container-fluid').css("opacity",'0.17');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
            //reset grid opacity
            $('div.container-fluid').css("opacity",'1');
        }
    });
});

//Search page for typed answer
function searchPage() {
    try{
        //get #id
        var id = getIdFromKeywords();
        console.log(id);
        //go to element
        var element = document.getElementById(id);
        element.scrollIntoView();
        $("#searchInput").blur();
        return false;
    }catch(err){
        $("#searchInput").blur();
        return false;
    }
};

function getIdFromKeywords(){
    $('#search').removeClass('open');
    $('div.container-fluid').css("opacity",'1');
    //get text of search field
    var searchText = document.getElementById("searchInput").value.toLowerCase();
    //loop thru assoc array - get each key - split to remove strings - check for match
    for (var key in searchAssocArray) {
        //split to remove strings
        var keywords = key.toLowerCase().split(" ");
        var search = searchText.split(" ");
        //compare each keyword to searched text
        for(var i in keywords){
            for(var j in search){
                if(search[j] == keywords[i]){
                    return searchAssocArray[key];
                }
            }
        }
    }
}
/*************************************************************
 FILTER JS
 */
$(function () {
    $('a[href="#filter"]').on('click', function(event) {
        event.preventDefault();
        $('#filter').addClass('open');
        //lower grid opacity
        $('div.container-fluid').css("opacity",'0.17');
        $('#filter > form > input[type="search"]').focus();
    });

    $('#filter, #filter button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
            //reset grid opacity
            $('div.container-fluid').css("opacity",'1');
        }
    });
});

