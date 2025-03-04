<?php
//inlcude library.php
include_once('include/library.php');
//Create HTML Header
echo head();
//create json array of pics from album
if(isset($_GET['album'])){
    $album = $_GET['album'];
    $year = $_GET['year'];
    $dir    = "images/" . $album;
    //$imgArr = scandir($dir);
    $imgArr = array_slice(scandir($dir), 2);
    $jsonImgArr = json_encode($imgArr);
}
?>

<!-- Get album name from URL using PHP and then dynamically create image grid -->
<script>

    //Create grid column for each row
    function createGridSpot(album,year,photoName,imgSrc){
        var imageTitle = "";
        //ONLY for class photos
        if(album == "Class Photos"){
            imageTitle  = photoName.replace(/\.[^/.]+$/, "");
        }
        var backgroundImg = 'style=\'background-image: url("'+imgSrc+'");\'';
        var html = '<a class="gridImageLink" href="photo.php?album='+ album + '&year='+ year +'&image='+photoName+'"><div class="col-sm-4 gridImageAlbum"'+backgroundImg+'>';
        //ONLY for class photos
        if(imageTitle != ""){
            html += '<div class="caption post-content">';
            html += '<p class="albumHeader">'+imageTitle +'</p>';
        }
        else{
            html += '<div class="caption post-content">';
        }
        html += '<p class="tag"><span class="glyphicon glyphicon-tag"></span><span class="tagCount">0</span></p></div>';
        html += '<div class="gridImageOverlay"></div></div></a>';
        return html;
    }

    //run immediately
    $(function () {
        //get album name
        var album = "<?php echo $album; ?>";
        //get year
        var year = "<?php echo $year; ?>";
        //get array of images from album
        var photoList = <?php echo $jsonImgArr; ?>;
        //create image path name beggining
        var path = "images/" + album + "/";
        //images/DramaAndTheater/
        //loop thru images
        var counter = 1;
        var createRow = true;
        var rowHTML = "";
        for (var i = 0;  i < photoList.length; i++) {
            //create grid row when counter
            if(createRow == true){
                createRow = false; //turn off new row indicator
                //create row element
                rowHTML += '<div class="row">';
            }
            //get photo file path
            var photo = "" + photoList[i];
            var imgSrc = "" + path + photo;
            //images/DramaAndTheater/Crop66.jpg
            //create col with each image - append to row element
            var columnHTML = createGridSpot(album,year,photo,imgSrc);
            rowHTML += columnHTML;
            //end grid row after every 3rd image
            if(counter % 3 == 0 || i >= photoList.length){
                createRow = true; //set indicator for new row
                //create end row element
                rowHTML += '</div><!--end row div -->';
            }
            counter++;
        }
        $("#albumGridContainer").append(rowHTML);
    });

</script>


    <!-- Wrapper -->
    <div id="navbarWrapper">

        <!-- Top Nav Bar -->
        <div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><span id="backNavBtn" class="glyphicon glyphicon-menu-left"></span></a>
                    <a class="navbar-brand" href="index.php">H</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navbar-menubuilder" style="text-align: center;">
                    <ul class="nav navbar-nav" style="margin-top: 10px;display: inline-block;float: none;">
                        <li id="albumpage-name">
                            <?php
                            if (strpos($album, '-') !== false) {
                                $albumModified = substr($album, 0, strpos($album, '-'));
                                echo $albumModified;
                            }else{
                                echo $album;
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;">
                        <li id="albumpage-year">
                            <?php echo $year; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- END Top Nav Bar -->

        <!-- Container for photo grid -->
        <div class="container-fluid mainContainer" id="albumGridContainer">

        </div><!-- end container for photo grid -->


    </div><!-- end wrapper -->

<!-- GENERATE HTML CLOSING TAGS -->
<?php
echo footer();
?>

