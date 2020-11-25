<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>HOME PICPIXEL</title>

    <style>
        body { background-color: #f3f3f3; }
    </style>

</head>

<body>

<div class="page-wrapper">
    <header>
    <!-- <nav class="navbar navbar-light bg-light" style="margin:0%; padding: 0%; position:absolute;">
            <a class="navbar-brand" href="index.html">
            <img src="assets\img\logo.png" alt="" loading="lazy">
            </a>

        </nav> -->
        <nav>
            <ul class="navigation animate">
                <li><a href="index.php" >HOME</a></li>
                <li><a href="draw.php" >DRAW</a></li>
                <li><a href="" data-toggle="modal" data-target="#modal-our-works">GALLERY</a></li>
                <li><a href="" data-toggle="modal" data-target="#modal-about-us">ABOUT</a></li>
            </ul>
            <!--end navigation-->
        </nav>
    </header>
    <div class="content-wrapper">
        <div class="content-main animate">
            <div class="container">
                <div class="brand animate"><a href="draw.php"><img src="assets\img\redy.png" alt=""></a></div>

                <h2 class="opacity-60">Press any button to start drawing.</h2>
            </div>
            <!--end container-->
        </div>
        <!--end content-main-->
        <div class="background-wrapper">
            <div id="background-content"></div>
        </div>
        <!--end background-wrapper-->
    </div>
    <!--end content-wrapper-->

</div>
<!--end page-wrapper-->

<!-- Modal About Us -->
<div class="modal fade" id="modal-about-us" tabindex="-1" role="dialog" aria-labelledby="modal-about-us-label">
    <div class="modal-dialog" role="document">
        <div class="container">
            <div class="modal-content">
                <div class="modal-header" data-background-color="#61dfff">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="modal-about-us-label">About Us</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <section>
                                <!-- <h3>Our Team</h3> -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person">
                                            <div class="image">
                                        </div>
                                        <!--end person-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </section>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-7 col-sm-7">
                            <section>
                                <h3>About Our Project</h3>
                                <p>พวกเราต้องการ ลดความเครียด และสร้างความรู้สึก ผ่อนคลาย ให้กับผู้ใช้งาน 
                                จากการวิจัยทั้งในและต่างประเทศพบว่าการระบายสีในสมุดภาพระบายสี เป็นอีกหนึ่งทางเลือกที่ได้ผลดี 
                                และใช้ต้นทุนน้อย ช่วยคลายความกังวลได้มาก เพราะการจดจ่อกับลายเส้นและการลงสีเป็นการสร้างสมาธิที่ดี 
                                ทั้งยังได้ฝึกใช้จินตนาการและความคิดสร้างสรรค์ของผู้ใช้งานอีกด้วย
                                </p>
                                <!-- <p>
                                    Mauris molestie pharetra tristique. Donec interdum odio erat, sed ullamcorper lectus
                                    egestas non.  Quisque sollicitudin vestibulum leo eget malesuada. Pellentesque sem erat,
                                    tempor a odio sed, tincidunt mollis purus. Cras suscipit ultrices cursus.
                                </p> -->
                            </section>
                            <section>
                                <h3>Our Team</h3>
                                <div class="skill">
                                    <h4>Ms.Nalinthip Punvongrod</h4>
                                    <!-- <aside>60080501607</aside> -->
                                    <figure class="bar">
                                        <div class="bar-active width-80"></div>
                                        <div class="bar-background"></div>
                                    </figure>
                                </div>
                                <!--end skill-->
                                <div class="skill">
                                    <h4>Ms.Ariya Saele</h4>
                                    <!-- <aside>100%</aside> -->
                                    <figure class="bar">
                                        <div class="bar-active width-100"></div>
                                        <div class="bar-background"></div>
                                    </figure>
                                </div>
                                <!--end skill-->
                                <div class="skill">
                                    <h4>นายณฐพงษ์ ยี่สาร</h4>
                                    <!-- <aside>60%</aside> -->
                                    <figure class="bar">
                                        <div class="bar-active width-60"></div>
                                        <div class="bar-background"></div>
                                    </figure>
                                </div>
                                <!--end skill-->
                            </section>
                        </div>
                        <!--end col-md-7-->
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end container-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end #modal-about-us-->

<!-- Modal Our Works -->
<div class="modal fade" id="modal-our-works" tabindex="-1" role="dialog" aria-labelledby="modal-our-works-label">
    <div class="modal-dialog" role="document">
        <div class="container">
            <div class="modal-content">
                <div class="modal-header" data-background-color="#ffb526">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="modal-our-works-label" style="color: white;">GALLERY</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        
                                <?php
								$image_list = glob("./doc/*.png");
								foreach($image_list as $image){
									//echo $image;
								?>
                                <div class="col-md-4 col-sm-4">
                                <a href="<?php echo $image; ?>" class="work image-popup" >
                                <div class="description">
                                    <h4>Paperworks</h4>
                                    <h5>Product Design</h5>
                                </div>
                                <!--end description-->
                                <div class="image">
                                    <div class="bg-transfer"><img src="<?php echo $image; ?>" class="sign-preview" /></div>
                                </div>
                                 </a>
                                <!--end work-->
                                 </div>
								<?php
								}
								?>


                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end container-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end #modal-our-works-->




<script  src="assets/js/jquery-2.2.1.min.js"></script>
<script  src="http://maps.google.com/maps/api/js"></script>
<script  src="assets/bootstrap/js/bootstrap.min.js"></script>
<script  src="assets/js/jquery.validate.min.js"></script>
<script  src="assets/js/jquery.magnific-popup.min.js"></script>
<script  src="assets/js/sketch.min.js"></script>
<script  src="assets/js/custom.js"></script>

<script>

    //  Map

    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "assets/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map";

    $(".modal").on("shown.bs.modal", function (e) {
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));
    });

    // Background

    var COLOURS = [ '#61dfff', '#A7EBCA', '#FFFFFF', '#ff6767', '#61dfff' ];
    var radius = 0;
    var randomColor = 0;

    
</script>

<script language="JavaScript">
    document.onkeydown = checkKeycode //กดปุ่มเมื่อไหร่ก็เรียกฟังก์ชั่น checkKeycode เล่ย!
    
    function checkKeycode(e) {
     
    var keycode;
     
    if (window.event) keycode = window.event.keyCode; // ใช้ IE อ่ะ
     
    else if (e) keycode = e.which; // ใช้ Firefox เน่าะ
     
    location.href = "draw.php"; //เด้ง popup มาดูดิ๊ว่า key code คืออะไร
     
    }
     
    </script>

</body>
