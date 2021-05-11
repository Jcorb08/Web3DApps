<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/x3dom/release/x3dom.css'></link>

    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- Installing font awesome fonts locally allows css use to change them rather than inline see bottom-->        
    <script src="https://kit.fontawesome.com/bf126aad1a.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/x3d.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <title>3D Applications Assignment</title>
</head>

<body>
    <!-- Nav Bar-->
    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Cans</h3>
                <p>Recycled across the world into more cans</p>
                </a>
            </div>
            <!--collapse navbar-->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Links -->
                <!-- ml-auto to left mr-auto to right mx-auto in center-->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" href="" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="Home" data-content="Information of various brands on display">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="About this Assignment" data-content="This uses PDOs and MVC to commicate with the 3 SQLite Tables, to display data.">About</a>
                    </li>
                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="X3D Models" data-content="X3d models of various brands">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home page block element-->
    <div id="home" class="container-fluid main_contents">
        <!-- banner image-->
        <div class="row">
            <div class="col-sm-12">
                <div id="main_3d_image">
                    <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subtitle_home"></div>
                        <div id="text_home"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cards for information (dynamically placed) -->
        <div class="row" id="cards_home"></div>
    </div>    

    <!-- Models Page-->
    <div id="models" class="container-fluid main_contents">
        <div class="row">
            <div class="col-sm-8">
                <!--X3D models-->
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navCoke">Coca Cola</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navSprite">Sprite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navPepper">Dr.Pepper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  active" href="#" id="navLilt">Lilt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navOasis">Oasis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navCosta">Costa Coffee</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="x3d">
                            <div id="x3dtitle" class="card-title"></div>
                            <!--X3D model-->
                            <div class="model3D">
                            <x3d id = "wiremodel">
                                <scene>
                                    <inline id="model" nameSpaceName="x3dmodel" mapDEFToID="true" url="assets/models/x3d/lilt.x3d"> </inline>
                                </scene>
                            </x3d>
                            </div>                    
                            <div id="x3dmethod" class="card-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <!--Descriptions-->
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="title_model" href=""></a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="modelDescription">
                            <div id="subtitle_model" class="card-subtitle"></div>
                            <div id="text_model" class="card-text"></div>
                        </div>
                        <a id="button_model" href="#" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row" id="interaction">
            <div class="col-sm-4">
                <!--Cam views--> 
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <!-- Dropdown nav-tab -->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">Cameras</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                            <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                            <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                            <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                            <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                            <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-Title drinksText" id="cameratitle"></div>                            
                        <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                        <div class="card-text drinksText" id="cameratext"></div>
                    </div>
                </div>    
            </div>            
            <div class="col-sm-4">
                <!--animations and textures-->
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Texture</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-Title drinksText" id="animationtitle"></div>
                        <a href="#" class="btn btn-warning btn-responsive" onclick="spin();">Animate</a>
                        <a href="#" class="btn btn-danger btn-responsive" onclick="stopRotate();">Stop</a>
                        <a id="texture" href="#" class="btn btn-info btn-responsive" onclick='changeTexture();'>Random Texture</a>
                        <a id="resettexture" href="#" class="btn btn-outline-info btn-responsive" onclick=''>Reset Texture</a>
                        <div class="card-text drinksText" id="animationtext"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <!--render type + lighting-->
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Render</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Lights</a>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-Title drinksText" id="rendertitle"></div>
                        <a href="#" class="btn btn-dark btn-responsive" onclick="wireframe();">Wire</a>
                        <a href="#" class="btn btn-light btn-responsive" onclick="headLight();">Headlight</a>
                        <div class="card-text x3dRenderDescription drinksText" id="rendertext"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="pics">
            <div class="col-sm-12">
                <!--gallery-->
                <div class="card text-left">
                    <div id="gallerytitle" class="card-header gallery-header"></div>
                    <div class="card-body">
                        <div class="gallery" id="gallery"></div>
                        <div id="gallerytext" class="card-text drinksText"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer-->
    <nav class="navbar navbar-expand-sm footer">
        <div class="container">
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy 2021 Web 3D Applications</p>
            </div>
            <!-- links to archives required -->
            <div class="navbar-text float-right social">
                <a href="https://github.com/Jcorb08/Web3DApps/tree/main/assignment/assets/models/original" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="Model Archive"><i class="fas fa-cube fa-4x" style="font-size: 20px;color: white;"></i></a>
                <a href="https://github.com/Jcorb08/Web3DApps/tree/main/assignment/assets/images/textures" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="Texture Archive"><i class="fas fa-chess-board fa-4x" style="font-size: 20px;color: pink;"></i></a>
                <a href="https://github.com/Jcorb08/Web3DApps/tree/main/assignment" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="Github Archive"><i class="fab fa-github fa-4x" style="font-size: 20px;color: gold;"></i></a>
            </div>
        </div>
    </nav>

    <!--Modal here because backdrop messed up if in div container-->
    <div class="modal fade" id="contactModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                198735 Email: nobody@sussex.ac.uk
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            
            </div>
        </div>
    </div>

    <!-- Javascript jQuery, Popper, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!--X3dom-->
    <script type='text/javascript' src='https://www.x3dom.org/x3dom/release/x3dom.js'></script>    
    <!--popovers, swap function, custom scripts-->
    <script src="assets/js/swap.js"></script>
    <!--gallery generator-->
    <script src="assets/js/gallery.js"></script>
    <!--JS data getter-->
    <script src="assets/js/getData.js"></script>
    <!--Model animations-->
    <script src="assets/js/model.js"></script>
</body>
</html>