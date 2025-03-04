<?php
//inlcude library.php
include_once('include/library.php');
//Create HTML Header
echo head();
?>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <!-- Flexbox for sidebar nav items -->
            <div class="d-flex flex-column justify-content-between" id="flexSidebar">
                <div style="position: relative;height:100%;">
                    <!-- Harley logo -->
                    <a href="index.php"><div class="p-2 sidebar-brand">H</div></a>
                    <!-- Search icon -->
                    <a href="#search"><div class="p-2" id="sidebarSearch"><span class="glyphicon glyphicon-search"></span></div></a>
                    <!-- Filters -->
                    <a href="#filter">
                        <div class="p-2" id="sidebarFilter">
                            <span>Filters</span>
                        </div>
                    </a>
                </div>
            </div><!-- </div> end flexbox container -->

        </div><!--end sidebar wrapper -->

        <!-- Container for photo grid -->
        <div class="mainContainer">
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Class Photos&year=1929-2016">
                    <div id="classphotos" class="col-sm-4 gridImage" style="background-image: url('images/Class Photos/1949.jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Class Photos</p>
                            <p class="albumDate">1929-2016</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Drama And Theater&year=1930-1989">
                    <div id="theater" class="col-sm-4 gridImage" style="background-image: url('images/Drama And Theater/Theater 40 - 44 (3).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Drama & Theater</p>
                            <p class="albumDate">1930-1989</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Music And Chorus&year=1940-1988">
                    <div id="chorus" class="col-sm-4 gridImage" style="background-image: url('images/Music And Chorus/Chorus 40s - 50s (2).jpg')">
                            <div class="caption post-content">
                                <p class="albumHeader">Music & Chorus</p>
                                <p class="albumDate">1940-1988</p>
                                <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                            </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Joy In Learning&year=1920-1960">
                    <div id="joy" class="col-sm-4 gridImage" style="background-image: url('images/Joy In Learning/Science Class 20s - 30s.jpg')">
                            <div class="caption post-content">
                                <p class="albumHeader">Joy In Learning</p>
                                <p class="albumDate">1920-1989</p>
                                <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                            </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Various Events&year=1930-1990">
                    <div id="events" class="col-sm-4 gridImage" style="background-image: url('images/Various Events/Tree Day 37.jpg')">
                            <div class="caption post-content">
                                <p class="albumHeader">Various Events</p>
                                <p class="albumDate">1930-1990</p>
                                <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                            </div>
                            <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Awards&year=1920-1989">
                    <div id="awards" class="col-sm-4 gridImage" style="background-image: url('images/Awards/Distinguished Alumnus Award 61.jpg')">
                            <div class="caption post-content">
                                <p class="albumHeader">Awards</p>
                                <p class="albumDate">1930-1989</p>
                                <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                            </div>
                            <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Commencement-2000&year=2000">
                    <div id="commencement" class="col-sm-4 gridImage" style="background-image: url('images/Commencement-2000/Commencement 2000 (5).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Commencement</p>
                            <p class="albumDate">2000</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Commencement-2002&year=2002">
                    <div id="commencement" class="col-sm-4 gridImage" style="background-image: url('images/Commencement-2002/Commencement Speakers 2002 (3).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Commencement</p>
                            <p class="albumDate">2002</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Commencement-2003&year=2003">
                    <div id="commencement" class="col-sm-4 gridImage" style="background-image: url('images/Commencement-2003/Commencement 2003 (2).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Commencement</p>
                            <p class="albumDate">2003</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Commencement-2006&year=2006">
                    <div id="commencement" class="col-sm-4 gridImage" style="background-image: url('images/Commencement-2006/Commencement 2006 (6).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Commencement</p>
                            <p class="albumDate">2006</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Commencement-2009&year=2009">
                    <div id="commencement" class="col-sm-4 gridImage" style="background-image: url('images/Commencement-2009/Commencement 2009 (3).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Commencement</p>
                            <p class="albumDate">2009</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Commencement-2010&year=2010">
                    <div id="commencement" class="col-sm-4 gridImage" style="background-image: url('images/Commencement-2010/Commencement Passing of the Banner 2010.jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Commencement</p>
                            <p class="albumDate">2010</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Athletics&year=1920-2002">
                    <div id="athletics" class="col-sm-4 gridImage" style="background-image: url('images/Athletics/Football 40s (1).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Athletics</p>
                            <p class="albumDate">1920-2002</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Womens Sports-2011&year=2011">
                    <div id="sports" class="col-sm-4 gridImage" style="background-image: url('images/Womens Sports-2011/Womens Baseball 2011 (2).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Womens Sports</p>
                            <p class="albumDate">2011</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Mens Sports-2011&year=2011">
                    <div id="sports" class="col-sm-4 gridImage" style="background-image: url('images/Mens Sports-2011/Mens Basketball 2011 (3).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Mens Sports</p>
                            <p class="albumDate">2011</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Homecoming Sports-2003&year=2003">
                    <div id="homecomingsports" class="col-sm-4 gridImage" style="background-image: url('images/Homecoming Sports-2003/Homecoming Mens Soccer 2003 (7).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Homecoming Sports</p>
                            <p class="albumDate">2003</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Homecoming-2002&year=2002">
                    <div id="homecoming" class="col-sm-4 gridImage" style="background-image: url('images/Homecoming-2002/Homecoming Celebration 2002 (8).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Homecoming</p>
                            <p class="albumDate">2002</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Honors Assembly-2009&year=2009">
                    <div id="honors" class="col-sm-4 gridImage" style="background-image: url('images/Honors Assembly-2009/Honors Assembley 2009 (3).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Honors Assembly</p>
                            <p class="albumDate">2009</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Halloween-2002&year=2002">
                    <div id="halloween" class="col-sm-4 gridImage" style="background-image: url('images/Halloween-2002/Halloween 2002 (5).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Halloween</p>
                            <p class="albumDate">2002</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Candlelight-1980-2006&year=1980-2006">
                    <div id="candlelight" class="col-sm-4 gridImage" style="background-image: url('images/Candlelight-1980-2006/Candlelight 2006 (5).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Candlelight</p>
                            <p class="albumDate">1980-2006</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Trivia Bowl-2003&year=2003">
                    <div id="trivia" class="col-sm-4 gridImage" style="background-image: url('images/Trivia Bowl-2003/Trivia Bowl 2003 (13).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Trivia Bowl</p>
                            <p class="albumDate">2003</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Organic Garden-2008&year=2008">
                    <div id="garden" class="col-sm-4 gridImage" style="background-image: url('images/Organic Garden-2008/Organic Garden 2008 (4).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Organic Garden</p>
                            <p class="albumDate">2008</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Sixth Grade Events-2001&year=2001">
                    <div id="sixthgrade" class="col-sm-4 gridImage" style="background-image: url('images/Sixth Grade Events-2001/6th Grade Class Outdoor Learning 2001 (6).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Sixth Grade Events</p>
                            <p class="albumDate">2001</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Fourth Grade Events-2006&year=2006">
                    <div id="fourthgrade" class="col-sm-4 gridImage" style="background-image: url('images/Fourth Grade Events-2006/4th Grade Fieldtrip 2006 (8).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Fourth Grade Events</p>
                            <p class="albumDate">2006</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Ice Cream Social-1999&year=1999">
                    <div id="icecream" class="col-sm-4 gridImage" style="background-image: url('images/Ice Cream Social-1999/Ice Cream Social 1999 (1).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Ice Cream Social</p>
                            <p class="albumDate">1999</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Ice Cream Social-2002&year=2002">
                    <div id="icecream" class="col-sm-4 gridImage" style="background-image: url('images/Ice Cream Social-2002/Ice Cream Social _ Ribbon Cutting 2002 (1).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Ice Cream Social</p>
                            <p class="albumDate">2002</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Mr. Scudder And Machines&year=2013">
                    <div id="machines" class="col-sm-4 gridImage" style="background-image: url('images/Mr. Scudder And Machines/Simple Machines with Mr. Scudder (2).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Scudder's Machines</p>
                            <p class="albumDate">2013</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
            <!-- Grid row -->
            <div class="row">
                <!-- left column -->
                <a class="gridImageLink" href="album.php?album=Lower School Pageant-2000&year=2000">
                    <div id="pageant" class="col-sm-4 gridImage" style="background-image: url('images/Lower School Pageant-2000/Lower School Pageant 2000 (5).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Lower School Pageant</p>
                            <p class="albumDate">2000</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- middle column -->
                <a class="gridImageLink" href="album.php?album=Lower School Pageant-2002&year=2002">
                    <div id="pageant" class="col-sm-4 gridImage" style="background-image: url('images/Lower School Pageant-2002/Lower School Pageant 2002 (10).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Lower School Pageant</p>
                            <p class="albumDate">2002</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
                <!-- right column -->
                <a class="gridImageLink" href="album.php?album=Lower School Pageant-2008&year=2008">
                    <div id="pageant" class="col-sm-4 gridImage" style="background-image: url('images/Lower School Pageant-2008/Lower School Pageant 2008 (12).jpg')">
                        <div class="caption post-content">
                            <p class="albumHeader">Lower School Pageant</p>
                            <p class="albumDate">2008</p>
                            <p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p>
                        </div>
                        <div class="gridImageOverlay"></div>
                    </div>
                </a>
            </div><!-- end grid row -->
         </div><!-- end container for photo grid -->
    </div><!-- end wrapper -->



    <!-- Search form -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="searchForm" onsubmit="event.preventDefault(); searchPage();">
            <input id="searchInput" type="search" value="" placeholder="Search album titles">
        </form>
    </div>
    <!-- Filter form -->
    <div id="filter">
        <button type="button" class="close">×</button>
        <div class="filterOptions" >
            <div class="row">
                <a class="col-sm-3 singleOption" >A - Z</a>
                <a class="col-sm-3 singleOption" >Z - A</a>
                <a class="col-sm-3 singleOption" >Most Tags</a>
                <a class="col-sm-3 singleOption" >Least Tags</a>
            </div>
        </div>

    </div>


<!-- GENERATE HTML CLOSING TAGS -->
<?php
echo footer();
?>