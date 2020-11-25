<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Draw</title>
        <link rel="stylesheet" href="draw.css">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="ThemeStarz">
    
        <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <title>CreaSoon - Creative Coming Soon Template</title>

        <SCRIPT LANGUAGE="JavaScript">
            //ส่วนของ สคิปตรงนี้จะเป็นการ เลื่อนตาม Scoll ครับ
            var content2Text = '';
            var $sibProfile = $('#sibProfile');
            var $scroll = $(window);
            var sibPPositionY = parseFloat($sibProfile.css('bottom'));
            var sibPPositionX = parseFloat($sibProfile.css('right'));
            $(document).ready(function () {
                $(document).scroll(function () {
                    var ScrollY = $scroll.scrollTop();
                    var ScrollX = $scroll.scrollLeft();
            
                    $sibProfile.css({
                        'right':(sibPPositionX - ScrollX) + 'px'
                        ,'bottom':(sibPPositionY - ScrollY) + 'px'
                    });
                });
            });
        </script>

            <!-- กำหนด style ให้กับ Bar ซัก หน่อยครับ -->
        <style type="text/css">
             #showface {
                display:none;
                margin-left:0px;
                margin-top:10%;
                float:left;
            }
            .sibLockedMenu {
                position: fixed;
                top:8%;
                left:0px;
                padding:0px;
                width:40px;
                height:100px;
            }
            #nwhdBarface {
                background-color:#FFFFFF;
                position:absolute;
                left:0px;
                cursor:pointer;
                width: 20px;
                margin-top: 5%;
                height:400px;
                border-radius: 0px 30px 30px 0px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            #nwhdBarview {
                background-color:#FFFFFF;
                margin-top:10%;
                cursor:pointer;
                width:32px;
                height:233px;
                float:left;
            }
            #nwhdBarview {
                float:left;
                margin-top:-400px;
                margin-left:385px;
            }
            body { background-color: #f3f3f3; }
            .picker {
			border-radius: 5px;
			width: 36px;
			height: 36px;
			cursor: pointer;
			-webkit-transition: all linear .2s;
			-moz-transition: all linear .2s;
			-ms-transition: all linear .2s;
			-o-transition: all linear .2s;
			transition: all linear .2s;
			border: thin solid #eee;
            }
            .picker:hover {
                transform: scale(1.1);
            }
        </style>

    </head>
    <body>

        <nav class="" style="margin:0%; padding: 0%; position:absolute;">
            <a class="navbar-brand" href="index.php">
            <img src="assets\img\logo.png" alt="" loading="lazy">
            </a>
        </nav>
        
        <!-- TOOL BAR -->
        <div id="contact"></div>
            <div class="sibLockedMenu" onmouseover="chnw(2);" >
                <div id="showface" >
                    <div id="facestyle">
                        <div class="top-bar">
                            <table>
                                <!-- CLOSE -->
                                <tr><td><button type="button" class="btn btn-link" style=" width:50%; left: 70px; position: relative; top: -25px;" onclick="closeA();" ><img class="icon" src="assets\img\close.png" alt="close"></button></td></tr> 
                                <!-- BRUSH -->
                                 <tr>
                                    <td>
                                        <button type="button" class="btn btn-link" style="margin: 0px; position: relative; top: -40px; " data-toggle="modal" data-target="#BrushSelect">
                                            <svg id="svgGallery" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-brush" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.247-.013-.574.05-.88.479a11.01 11.01 0 0 0-.5.777l-.104.177c-.107.181-.213.362-.32.528-.206.317-.438.61-.76.861a7.127 7.127 0 0 0 2.657-.12c.559-.139.843-.569.993-1.06a3.121 3.121 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.591 1.927-5.566 4.66-7.302 6.792-.442.543-.796 1.243-1.042 1.826a11.507 11.507 0 0 0-.276.721l.575.575zm-4.973 3.04l.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043l.002.001h-.002z"/>
                                            </svg>
                                        </button> 
                                    </td>
                                 </tr>    
                                <!-- COLORSET n SENSORCOLOR -->
                                 <tr><td>
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#selectColor">
                                            <svg id="svgGallery" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                                                <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                                            </svg>
                                        </button>
                                </td></tr>
                                <!-- COLOR -->
                                 <!-- <tr><td><input type="color" id="color-picker"></td></tr> -->
                                <!-- BRUSH SIZE -->
                                <!-- <tr><td class="popup" > <button class="btn btn-link"><input class="icon" type="range" id="brush-size" min="1" max="50" value="10"></button></td></tr> -->
                                <!-- LINE -->
                                <tr><td><img class="icon" src="assets\img\Line 1.png" alt=""></button></td> </tr>
                                <!-- Eraser -->
                                <tr>
                                <td><button type="color" class="btn btn-link" onclick="setColor('#F3F3F3');" ><img class="icon" src="assets\img\eraser.png" alt=""></button></td>             
                                </tr>
                                <!-- UNDO -->
                                <tr>
                                <td><button type="button" class="btn btn-link" id="undo-btn"><img class="icon" src="assets\img\Icon awesome-undo-alt.png" alt=""></button></td>             
                                </tr>
                                <!-- CLEAR -->
                                <tr>
                                <td><button type="button" class="btn btn-link" id="clear-btn"><img class="icon" src="assets\img\Icon awesome-trash-alt.png" alt=""></button></td>            
                                </tr>
                                <!-- LINE -->
                                <tr><td><img class="icon" src="assets\img\Line 1.png" alt=""></button></td> </tr>
                                <!-- SAVE TO Gallery -->
                                <tr>
                                    <td><div class="btn btn-link"  ><a id="btnSaveSig"><img class="icon" src="assets\img\Icon awesome-save.png" alt=""></a></div></td> 
                                </tr>
                                <!-- Gallery -->
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#Gallery">
                                            <svg id="svgGallery" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                                              </svg>
                                      </button>
                                    </td>
                                </tr>
                                <!-- LINE -->
                                <tr>
                                    <td><img class="icon" src="assets\img\Line 1.png" alt=""></button></td> 
                                </tr>
                                <!-- upload -->
                                <tr>
                                    <td>
                                    <button type="button" class="btn btn-link" onclick="callInput()">
                                    <svg id="svgGallery" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                    </button>
                                    <input type="file" id="imageLoader" name="imageLoader" style="display:none;"/></td>
                                </tr>
                                <!-- Download -->
                                <tr>
                                    <td><div class="tool dl" data-tool-tip="Download As PNG"><a id="download">
                                    <svg id="svgGallery" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    </a></div></td> 
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="nwhdBarview" onclick="closeA();">&nbsp;</div>
                </div>
                <div id="nwhdBarface" onmouseover="chnw(2);" >&nbsp;</div>
            </div>
        <!-- END TOOL BAR -->
               


        <canvas id="draw"></canvas>



        <!-- Modal Gallery -->
        <div class="modal fade" id="Gallery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    
                <?php
				$image_list = glob("./doc/*.png");
				foreach($image_list as $image){
									//echo $image;
                ?>
                
                <img src="<?php echo $image; ?>" class="sign-preview" />
                          
				<?php
				}
                ?>
                



               
                </div>
            </div>
            </div>
        </div>
         <!-- End Modal Gallery -->



         <!-- Modal Brush -->
            <div class="modal fade" id="BrushSelect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Brush Style</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- <div class="col text-center">
                                    <button type="button" class="btn btn-light" data-dismiss="modal" onclick="setBrush('smoothing');">
                                        <div>
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                            </svg>
                                        </div>
                                        <div>Smoothing</div>
                                    </button>
                                </div> -->
                                <div class="col text-center">
                                    <button type="button" class="btn btn-light" data-dismiss="modal" onclick="setBrush('thick');">
                                        <div>
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                            </svg>
                                        </div>
                                        <div>Thick</div>
                                    </button>
                                </div>
                                <!-- <div class="col text-center">
                                    <button type="button" class="btn btn-light" data-dismiss="modal" onclick="setBrush('pixels');">
                                        <div>
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                            </svg>
                                        </div>
                                        <div>pixels</div>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
            </div>
            <!-- End Modal Brush -->





            <!-- Modal SelectColor -->
            <div class="modal fade" id="selectColor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-body">     
                        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-color-tab" data-toggle="pill" href="#pills-color-set" role="tab" aria-controls="pills-home" aria-selected="true" onclick="_stateSelectColor('manually')">COLOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="pills-color-sencor-tab" data-toggle="pill" href="#pills-color-sencor" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="_stateSelectColor('auto')">SENSOR COLOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="pills-brush-tab" data-toggle="pill" href="#pills-brush-set" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="_stateSelectColor('manually')">BRUSH</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-color-set" role="tabpanel" aria-labelledby="pills-color-tab">  
                                <div class="row"><div class="col text-center mt-auto mb-auto">
                                    <a>CUSTOM COLOR<BR></a>
                                    <input type="color" id="color-picker">
                                </div></div>
                                <BR>
                                <BR>
                                <div class="row"><div class="col text-center mt-auto mb-auto">
                                <a>COLOR SET</a>
                                </div> </div>
                                <br>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#F2F4F4;" onclick="setColor('#F2F4F4');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#CCD1D1;" onclick="setColor('#CCD1D1');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#99A3A4;" onclick="setColor('#99A3A4');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#707B7C;" onclick="setColor('#707B7C');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#616A6B;" onclick="setColor('#616A6B');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#515A5A;" onclick="setColor('#515A5A');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#212F3D;" onclick="setColor('#212F3D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#17202A;" onclick="setColor('#17202A');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#D5D8DC;" onclick="setColor('#D5D8DC');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#ABB2B9;" onclick="setColor('#ABB2B9');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7F8C8D;" onclick="setColor('#7F8C8D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#566573;" onclick="setColor('#566573');"></span></div>             
                                    <div class="col"><span class="dot-color" style="background-color:#424949;" onclick="setColor('#424949');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#273746;" onclick="setColor('#273746');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1C2833;" onclick="setColor('#1C2833');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#000000;" onclick="setColor('#000000');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#F9E79F;" onclick="setColor('#F9E79F');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F7DC6F;" onclick="setColor('#F7DC6F');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F4D03F;" onclick="setColor('#F4D03F');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F1C40F;" onclick="setColor('#F1C40F');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#D4AC0D;" onclick="setColor('#D4AC0D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#B7950B;" onclick="setColor('#B7950B');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#9A7D0A;" onclick="setColor('#9A7D0A');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7D6608;" onclick="setColor('#7D6608');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#FAD7A0;" onclick="setColor('#FAD7A0');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F8C471;" onclick="setColor('#F8C471');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F5B041;" onclick="setColor('#F5B041');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F39C12;" onclick="setColor('#F39C12');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#D68910;" onclick="setColor('#D68910');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#B9770E;" onclick="setColor('#B9770E');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#9C640C;" onclick="setColor('#9C640C');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7E5109;" onclick="setColor('#7E5109');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#F5CBA7;" onclick="setColor('#F5CBA7');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F0B27A;" onclick="setColor('#F0B27A');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#EB984E;" onclick="setColor('#EB984E');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#E67E22;" onclick="setColor('#E67E22');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#CA6F1E;" onclick="setColor('#CA6F1E');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#AF601A;" onclick="setColor('#AF601A');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#935116;" onclick="setColor('#935116');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#784212;" onclick="setColor('#784212');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#EDBB99;" onclick="setColor('#EDBB99');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#EDBB99;" onclick="setColor('#EDBB99');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#DC7633;" onclick="setColor('#DC7633');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#D35400;" onclick="setColor('#D35400');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#D35400;" onclick="setColor('#D35400');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#A04000;" onclick="setColor('#A04000');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#873600;" onclick="setColor('#873600');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#6E2C00;" onclick="setColor('#6E2C00');"></span></div>
                                </div>           
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#E6B0AA;" onclick="setColor('#E6B0AA');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#D98880;" onclick="setColor('#D98880');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#CD6155;" onclick="setColor('#CD6155');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#C0392B;" onclick="setColor('#C0392B');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#A93226;" onclick="setColor('#A93226');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#922B21;" onclick="setColor('#922B21');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7B241C;" onclick="setColor('#7B241C');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#641E16;" onclick="setColor('#641E16');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#F5B7B1;" onclick="setColor('#F5B7B1');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#F1948A;" onclick="setColor('#F1948A');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#EC7063;" onclick="setColor('#EC7063');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#E74C3C;" onclick="setColor('#E74C3C');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#CB4335;" onclick="setColor('#CB4335');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#B03A2E;" onclick="setColor('#B03A2E');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#943126;" onclick="setColor('#943126');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#78281F;" onclick="setColor('#78281F');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#D7BDE2;" onclick="setColor('#D7BDE2');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#C39BD3;" onclick="setColor('#C39BD3');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#AF7AC5;" onclick="setColor('#AF7AC5');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#9B59B6;" onclick="setColor('#9B59B6');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#884EA0;" onclick="setColor('#d5f4e6');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#76448A;" onclick="setColor('#76448A');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#633974;" onclick="setColor('#633974');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#512E5F;" onclick="setColor('#512E5F');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#D2B4DE;" onclick="setColor('#D2B4DE');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#BB8FCE;" onclick="setColor('#BB8FCE');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#A569BD;" onclick="setColor('#A569BD');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#8E44AD;" onclick="setColor('#8E44AD');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7D3C98;" onclick="setColor('#7D3C98');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#6C3483;" onclick="setColor('#6C3483');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#5B2C6F;" onclick="setColor('#5B2C6F');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#4A235A;" onclick="setColor('#4A235A');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#A9CCE3;" onclick="setColor('#A9CCE3');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7FB3D5;" onclick="setColor('#7FB3D5');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#5499C7;" onclick="setColor('#5499C7');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#2980B9;" onclick="setColor('#2980B9');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#2471A3;" onclick="setColor('#2471A3');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1F618D;" onclick="setColor('#1F618D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1A5276;" onclick="setColor('#1A5276');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#154360;" onclick="setColor('#154360');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#AED6F1;" onclick="setColor('#AED6F1');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#85C1E9;" onclick="setColor('#85C1E9');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#5DADE2;" onclick="setColor('#5DADE2');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#3498DB;" onclick="setColor('#3498DB');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#2E86C1;" onclick="setColor('#2E86C1');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#2874A6;" onclick="setColor('#2874A6');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#21618C;" onclick="setColor('#21618C');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1B4F72;" onclick="setColor('#1B4F72');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#A3E4D7;" onclick="setColor('#A3E4D7');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#76D7C4;" onclick="setColor('#76D7C4');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#48C9B0;" onclick="setColor('#48C9B0');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1ABC9C;" onclick="setColor('#1ABC9C');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#17A589;" onclick="setColor('#17A589');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#148F77;" onclick="setColor('#148F77');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#117864;" onclick="setColor('#117864');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#0E6251;" onclick="setColor('#0E6251');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#A2D9CE;" onclick="setColor('#A2D9CE');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#73C6B6;" onclick="setColor('#73C6B6');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#45B39D;" onclick="setColor('#45B39D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#16A085;" onclick="setColor('#16A085');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#138D75;" onclick="setColor('#138D75');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#117A65;" onclick="setColor('#117A65');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#0E6655;" onclick="setColor('#0E6655');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#0B5345;" onclick="setColor('#0B5345');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#A9DFBF;" onclick="setColor('#A9DFBF');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#7DCEA0;" onclick="setColor('#7DCEA0');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#52BE80;" onclick="setColor('#52BE80');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#27AE60;" onclick="setColor('#27AE60');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#229954;" onclick="setColor('#229954');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1E8449;" onclick="setColor('#1E8449');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#196F3D;" onclick="setColor('#196F3D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#145A32;" onclick="setColor('#145A32');"></span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="dot-color" style="background-color:#ABEBC6;" onclick="setColor('#ABEBC6');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#82E0AA;" onclick="setColor('#82E0AA');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#58D68D;" onclick="setColor('#58D68D');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#2ECC71;" onclick="setColor('#2ECC71');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#2ECC71;" onclick="setColor('#2ECC71');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#239B56;" onclick="setColor('#239B56');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#1D8348;" onclick="setColor('#1D8348');"></span></div>
                                    <div class="col"><span class="dot-color" style="background-color:#186A3B;" onclick="setColor('#186A3B');"></span></div>
                                </div>          
                            </div>
                            <div class="tab-pane fade" id="pills-color-sencor" role="tabpanel" aria-labelledby="pills-color-sencor-tab">
                                <div class="row"><div class="col text-center mt-auto mb-auto">
                                <a>COLOR SENSOR</a>
                                </div> </div>
                                <br>
                                <div class="row">
                                    <div class="col text-center mt-auto mb-auto"><span id="dot-sensor-color" class="dot"></span></div>
                                    <div class="col text-center mt-auto mb-auto"><input id="input-sensor-color" class="text-center" type="text" placeholder="Sensor Color" disabled></div>
                                </div>
                            </div>    
                            <div class="tab-pane fade" id="pills-brush-set" role="tabpanel" aria-labelledby="pills-brush-tab">
                                 <div class="row">
                                    <div class="col text-center mt-auto mb-auto">
                                    <a>SIZE</a><br><input class="icon" type="range" id="brush-size" min="1" max="50" value="10">
                                    <br>
                                    <br>
                                    <a>OPACITY</a><br><input class="icon" type="range" id="brush-opacity" min="1" max="50" value="10">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
             <!-- End Modal SelectColor -->
            

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="draw.js"></script>
    </body>
</html>
