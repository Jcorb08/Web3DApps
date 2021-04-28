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
    <script type='text/javascript' src='https://www.x3dom.org/x3dom/release/x3dom.js'></script>

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
                <a class="navbar-brand" href="javascript:swap('home');">
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
                        <a id="navHome" class="nav-link active" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
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
        <div class="row" id="cards_home"></div>
    </div>    

    <!-- Models Page-->
    <div id="models" class="container-fluid main_contents" style="display: none;">
        <div class="row">
            <!--X3D models-->
            <div class="col-sm-6">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" id="navCoke">Coca Cola</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navSprite">Sprite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navPepper">Dr.Pepper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navLilt">Lilt</a>
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
                            <!--X3D CODE GOES HERE-->
                            <!--ADD CAMERA VIEWS FOR THE BUTTONS TO WORK SEE APENDIX 4 LAB 4-->
                            <div class="model3D">
                            <x3d id = "model">
                                <scene>
                                    <inline id="x3dmodel" url="assets/models/x3d/coca cola.x3d"> </inline>
                                </scene>
                            </x3d>
                            </div>                    
                            <div id="x3dmethod" class="card-text"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div id="interaction" class="row" style="display: none;">
            <!--Cam views-->
            <div class="col-sm-3">   
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <!-- Dropdown nav-tab -->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">Cameras</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="">Front</a>
                            <a class="dropdown-item" href="#" onclick="">Back</a>
                            <a class="dropdown-item" href="#" onclick="">Left</a>
                            <a class="dropdown-item" href="#" onclick="">Right</a>
                            <a class="dropdown-item" href="#" onclick="">Top</a>
                            <a class="dropdown-item" href="#" onclick="">Bottom</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-Title drinksText" id="cameratitle"></div>                            
                        <a href="#" class="btn btn-success btn-responsive" onclick="">Default</a>
                        <a href="#" class="btn btn-primary btn-responsive" onclick="">Back</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="">Left</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                        <div class="card-text drinksText" id="cameratext"></div>
                    </div>
                </div>                
            </div>
            <!--animations-->
            <div class="col-sm-3">
                <div class="card text-left">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Animation</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title drinksText" id="animationtitle"></div>
                      <a href="#" class="btn btn-outline-light btn-responsive" onclick="">RotX</a>
                      <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                      <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                      <a href="#" class="btn btn-outline-dark btn-responsive" onclick="">Stop</a>
                      <div class="card-text drinksText" id="animationtext"></div>
                    </div>
                  </div>
            
            </div>
            <!--render type + lighting-->
            <div class="col-sm-3">
                <div class="card text-left">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Polygon</a>
                            <a class="dropdown-item" href="#" onclick="">Wireframe</a>
                            <a class="dropdown-item" href="#">Vertex</a>
                          </div>
                        </li>
                      <!-- Dropdown nav-tab -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Default</a>
                            <a class="dropdown-item" href="#">Onmi On/Off</a>
                            <a class="dropdown-item" href="#">Target On/Off</a>
                            <a class="dropdown-item" href="#">Headlight On/Off</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title drinksText" id="rendertitle"></div>
                      <a href="#" class="btn btn-success btn-responsive">Poly</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                      <a href="#" class="btn btn-success btn-responsive" onclick="">Headlight</a>
                      <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                      <div class="card-text x3dRenderDescription drinksText" id="rendertext"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="Description" style="display: none;">
            <!--gallery-->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div id="gallerytitle" class="card-header gallery-header"></div>
                    <div class="card-body">
                        <div class="gallery" id="gallery"></div>
                        <div id="gallerytext" class="card-text drinksText"></div>
                    </div>
                </div>
            </div>
            <!--Descriptions-->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div id="modelDescription">
                            <div id="title_model" class="card-title"></div>
                            <div id="subtitle_model" class="card-subtitle"></div>
                            <div id="text_model" class="card-text"></div>
                        </div>
                        </div>
                        <a id="button_model" href="#" class="btn btn-primary">Find out more ...</a>
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
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>Github Archive ->
                <a href="https://github.com/Jcorb08/Web3DApps"><i class="fab fa-github fa-4x" style="font-size: 20px;color: gold;"></i></a>
                </p>
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




</html>