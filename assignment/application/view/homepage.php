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
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
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
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-to img-fluid img-thumbnail" src="assets/images/coca_cola.jpg"
                            alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_left"></div>
                        <div id="subtitle_left"></div>
                        <div id="text_left"></div>
                        <a href="#" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>
            </div>
            <!--Sprite-->
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-to img-fluid img-thumbnail" src="assets/images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_centre"></div>
                        <div id="subtitle_centre"></div>
                        <div id="text_centre"></div>
                        <a href="#" class="btn btn-primary">Find out more ...</a>
                    </div>
                </div>
            </div>
            <!--Dr pepper-->
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-to img-fluid img-thumbnail" src="assets/images/dr_pepper.jpg"
                            alt="Dr Pepper">
                    </a>
                    <div class="card-body">
                        <div id="title_right"></div>
                        <div id="subtitle_right"></div>
                        <div id="text_right"></div>
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
            <div class="navbar-text float-left social">
                <p><span class="align-baseline"></span>Github Archive ->
                <a href="https://github.com/Jcorb08/Web3DApps"><i class="fab fa-github fa-3x" style="font-size: 20px;color: gold;"></i></a>
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
    <!--gallery generator-->
    <script src="assets/js/gallery.js"></script>
    <!--JS data getter-->
    <script src="assets/js/getJsonData.js"></script>
    <!--Model animations-->
    <script src="assets/js/model.js"></script>
</body>

</html>




</html>