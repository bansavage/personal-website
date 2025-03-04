<?php
//inlcude library.php
include_once('include/library.php');
//Create HTML Header
echo head();
//get album and image name
if(isset($_GET['album']) && isset($_GET['image'])){
    $album = $_GET['album'];
    $year = $_GET['year'];
    $image = $_GET['image'];
    $path = "images/" . $album . "/" . $image;
    list($width, $height) = getimagesize($path);
    $imgHTML = '<img id="singlePhoto" src="'.$path.'" alt="'.$image.'" width="auto">';
}
?>
    <!-- Get album name from URL using PHP and then dynamically create image grid -->
    <script>

        //run immediately
        $(function () {
            //get album name
            var album = "<?php echo $album; ?>";
            //get photo
            var photo = "<?php echo $image; ?>";
            //create img tag
            var imgSrc = "<?php echo $path; ?>";
            var imgHTML = '<?php echo $imgHTML; ?>';
            //add img to screen
            $("#singlePhotoContainer").append(imgHTML);
        });

    </script>

    <!-- Wrapper -->
    <div id="navbarWrapper">

        <!-- Top Nav Bar -->
        <div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="album.php?album=<?php echo $album; ?>&year=<?php echo $year; ?>""><span id="backNavBtn" class="glyphicon glyphicon-menu-left"></span></a>
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
        <div class="container-fluid" id="singlePhotoContainer">


        </div><!-- end container for photo grid -->


    </div><!-- end wrapper -->
<!-- GENERATE HTML CLOSING TAGS -->
<?php
echo footer();
?>