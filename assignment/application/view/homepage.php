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
                        title="About Web 3D Applications" data-content="X3d models for coke, sprite and dr.pepper">Models</a>
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
        <div class="row">
            <!-- Coke -->
            <div class="col-xs-12 col-sm-4 col-xl-3">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/coca_cola.jpg"
                            alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_cocacola" class="card-title"></div>
                        <div id="subtitle_cocacola" class="card-subtitle"></div>
                        <div id="text_cocacola" class="card-text"></div>
                        <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>
            </div>
            <!--Sprite-->
            <div class="col-xs-12 col-sm-4 col-xl-3">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid text-center img-thumbnail" src="assets/images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_sprite"></div>
                        <div id="subtitle_sprite"></div>
                        <div id="text_sprite"></div>
                        <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>
            </div>
            <!--Dr pepper-->
            <div class="col-xs-12 col-sm-4 col-xl-3">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid text-center img-thumbnail" src="assets/images/dr_pepper.jpg"
                            alt="Dr Pepper">
                    </a>
                    <div class="card-body">
                        <div id="title_drpepper"></div>
                        <div id="subtitle_drpepper"></div>
                        <div id="text_drpepper"></div>
                        <a href="https://www.coca-cola.co.uk/brands/dr-pepper" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>

            </div>
            <!--Lilt-->
            <div class="col-xs-12 col-sm-4 col-xl-3">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid text-center img-thumbnail" src="assets/images/lilt.png"
                            alt="Lilt">
                    </a>
                    <div class="card-body">
                        <div id="title_lilt"></div>
                        <div id="subtitle_lilt"></div>
                        <div id="text_lilt"></div>
                        <a href="https://www.coca-cola.co.uk/brands/lilt" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>

            </div>
            <!--Oasis-->
            <div class="col-xs-12 col-sm-4 col-xl-3">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid text-center img-thumbnail" src="assets/images/oasis.jpg"
                            alt="Oasis">
                    </a>
                    <div class="card-body">
                        <div id="title_oasis"></div>
                        <div id="subtitle_oasis"></div>
                        <div id="text_oasis"></div>
                        <a href="https://www.coca-cola.co.uk/brands/oasis" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>

            </div>
            <!--Costa-->
            <div class="col-xs-12 col-sm-4 col-xl-3">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid text-center img-thumbnail" src="assets/images/costa.png"
                            alt="Costa">
                    </a>
                    <div class="card-body">
                        <div id="title_costa"></div>
                        <div id="subtitle_costa"></div>
                        <div id="text_costa"></div>
                        <a href="https://www.coca-cola.co.uk/brands/costa-coffee" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>

            </div>
        </div>

    </div>    

    <!-- Models Page-->
    <div id="models" class="container-fluid main_contents" style="display: none;">
        <div class="row">
            <!--X3D models-->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" id="navCoke">Coke</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navSprite">Sprite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navPepper">Dr.Pepper</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="coke">
                            <div id="x3dtitle_coke" class="card-title"></div>
                            <!--X3D CODE GOES HERE-->
                            <!--ADD CAMERA VIEWS FOR THE BUTTONS TO WORK SEE APENDIX 4 LAB 4-->
                            <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline url="assets/x3d/coke.x3d"> </inline>
                                </scene>
                            </x3d>
                            </div>                    
                            <div id="x3dmethod_coke" class="card-text"></div>
                        </div>
                        <div id="sprite" style="display: none;">
                            <div id="x3dtitle_sprite" class="card-title"></div>
                            <!--X3D CODE GOES HERE-->
                            <!--ADD CAMERA VIEWS FOR THE BUTTONS TO WORK SEE APENDIX 4 LAB 4-->
                            <div class="model3D">
                                <x3d>
                                    <scene>
                                        <inline url="assets/x3d/sprite.x3d"> </inline>
                                    </scene>
                                </x3d>
                            </div>                    
                            <div id="x3dmethod_sprite" class="card-text"></div>
                        </div>
                        <div id="pepper" style="display: none;">
                            <div id="x3dtitle_pepper" class="card-title"></div>
                            <!--X3D CODE GOES HERE-->
                            <!--ADD CAMERA VIEWS FOR THE BUTTONS TO WORK SEE APENDIX 4 LAB 4-->
                            <div class="model3D">
                                <x3d>
                                    <scene>
                                        <inline url="assets/x3d/pepper.x3d"> </inline>
                                    </scene>
                                </x3d>
                            </div>                        
                            <div id="x3dmethod_pepper" class="card-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--gallery-->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div id="gallerytitle" class="card-header gallery-header"></div>
                    <div class="gallery" id="gallery"></div>
                    <div id="gallerytext" class="card-text"></div>
                </div>
            </div>
        </div>

        <div id="interaction" class="row" style="display: none;">
            <!--Cam views-->
            <div class="col-sm-4">   
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
                        <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                        </div>                            
                        <a href="#" class="btn btn-success btn-responsive" onclick="">Default</a>
                        <a href="#" class="btn btn-primary btn-responsive" onclick="">Back</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="">Left</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                        <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                        </div>
                    </div>
                </div>                
            </div>
            <!--animations-->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Animation</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                      </div>
                      <a href="#" class="btn btn-outline-light btn-responsive" onclick="">RotX</a>
                      <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                      <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                      <a href="#" class="btn btn-outline-dark btn-responsive" onclick="">Stop</a>
                      <div class="card-text x3dAnimationDescription drinksText">
                          <p>These buttons select a range of X3D animation options</p>
                      </div>
                    </div>
                  </div>
            
            </div>
            <!--render type + lighting-->
            <div class="col-sm-4">
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
                      <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render and Lighting Options</h3>
                      </div>
                      <a href="#" class="btn btn-success btn-responsive">Poly</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="">Wire</a>
                      <a href="#" class="btn btn-success btn-responsive" onclick="">Headlight</a>
                      <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                      <div class="card-text x3dRenderDescription drinksText">
                          <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <!--Descriptions-->
        <div id="row">
            <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-body">
                        <div id="cokeDescription">
                            <div id="title_coke" class="card-title"></div>
                            <div id="subtitle_coke" class="card-subtitle"></div>
                            <div id="text_coke" class="card-text"></div>
                        </div>
                        <div id="spriteDescription" style="display: none;">
                            <div id="title_sprite" class="card-title"></div>
                            <div id="subtitle_sprite" class="card-subtitle"></div>
                            <div id="text_sprite" class="card-text"></div>
                        </div>
                        <div id="pepperDescription" style="display: none;">
                            <div id="title_pepper" class="card-title"></div>
                            <div id="subtitle_pepper" class="card-subtitle"></div>
                            <div id="text_pepper" class="card-text"></div>S
                        </div>
                        <a href="#" class="btn btn-primary">Find out more ...</a>
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

    <!-- Javascript jQuery, Popper, then Bootstrap JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!--popovers, swap function, custom scripts-->
    <script src="assets/js/swap.js"></script>
    <!--gallery generator
    <script src="assets/js/gallery.js"></script>
    JS data getter-->
    <script src="assets/js/getData.js"></script>
    <!--Model animations-->
    <script src="assets/js/model.js"></script>
</body>

</html>




</html>