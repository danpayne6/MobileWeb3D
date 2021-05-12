<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="scripts/gallery_generator.js"></script>
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

    <title> Mobile Web 3D Applications Website</title>


</head>

<body id="bodyColor">

    <!-- Navbar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_model">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="index.php">
                    <h1>Mobile Web 3D Models Website</h1>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><u>Home</u></a>
                    </li>

                    <li class="nav-item">
                        <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="bottom" title="Gallery of Models"
                            data-content="Click to view the gallery, MentalRay has been used to make these as realistic as possible!"><u>Gallery</u></a>
                    </li>

                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="bottom" title="X3D!Models"
                            data-content="Click to view the three X3d Models; Mcdonalds Cup, Fanta Bottle and a Duff Can! "><u>Models</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal"><u>Details</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://users.sussex.ac.uk/~dlp25/2021/process/index.php/apiloadimage" ><u>Extra</u></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Page -->
    <div class="container-fluid main_contents">
        <div id="home">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/home.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/home2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/home3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/home4.jpg" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/home5.jpg" alt="Fifth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <br>
            <br>
            <hr>
            <br>
            <br>
            <br>
            <div class="container-fluid bg-2 text-center">
                <div class="logo">
                    <a class="navbar-brand" style="margin-bottom: 50px; margin-top: 50px;">
                        <h1 style="color:#116466">Welcome!<h1>

                    </a>
                </div>
                <p>
                    <br>
                    <br>
                    <br>
                    Welcome to this website, created for the 2021 Mobile Web 3D module at the University of Sussex.
                    <br>This site was built using multiple different technologies, including Bootstrap 4, HTML, CSS, PHP
                    and
                    various others.
                    <br>The other pages on this site contain a gallery, 3D models and information about the software and
                    techniques used.
                    <br>Four different 3D models have been made for this site, a couple using Blender and a couple using
                    3DS Max.
                    <br>All of the code and models can be found on Github, via the links in the footer.
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </p>
                <hr>
            </div>
            <div class="container-fluid bg-3 text-center">
                <br>
                <br>
                <br>
                <h1 class="margin" style="color:#116466">Category of 3D Models</h1><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a id="navModels1" type="button" class="btn btn-secondary" style="width: 100%"
                                    class="nav-link" href="#">McDonalds</a>
                                <img class="card-img-top img-fluid img-thumbnail"
                                    src="assets/images/site_images/mcdonalds.jpg" class="img-responsive margin"
                                    style="width:100%" alt="Image">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a id="navModels3" type="button" class="btn btn-secondary" style="width: 100%"
                                    class="nav-link" href="#">Fanta</a>
                                <img class="card-img-top img-fluid img-thumbnail"
                                    src="assets/images/site_images/fanta.jpg" class="img-responsive margin"
                                    style="width:100%" alt="Image">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a id="navModels4" type="button" class="btn btn-secondary" style="width: 100%"
                                    class="nav-link" href="#">Duff Beer</a>
                                <img class="card-img-top img-fluid img-thumbnail"
                                    src="assets/images/site_images/duff.jpg" class="img-responsive margin"
                                    style="width:100%" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- About page block element -->
        <div id="about">

            <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div>

            </div>
        </div><!-- End home page -->


        <script>
        /**
         * Change the selected object of the swichting node
         * 
         * @param nodeId number: New node id to set (starting from 0, or -1 to hide all of them)
         */
        function changeVisibleNode(nodeId) {
            var dirLight = document.getElementById("switcher");

            dirLight.setAttribute("whichChoice", nodeId);

            if (nodeId == -1)
                document.getElementById("visNode").innerHTML = "No node visible!";
            else
                document.getElementById("visNode").innerHTML = "Showing node # " + nodeId;
        }
        </script>


        <!-- Start X3D models and 3D Image Gallery -->
        <div id="models">

     
<div class="row">
 
  <div class="col-sm-4">

    <div class="card text-left">
      <div class="card-body">
      <div class="btn-group btn-group-justified" style="width:100%">
        <a id="navmcdonalds" href="#" class="btn btn-mdb-color"style="background-color: #17a2b8;"><u>McDonalds</u></a>
        <a id="navfanta"href="#" class="btn btn-mdb-color" style="background-color:#20c997;"><u>Fanta</u></a>
        <a id="navduff" href="#" class="btn btn-mdb-color" style="background-color: #bdc2c7;"><u>Duff</u></a>
      </div>
  </div>

      <div id="one">
      <div class="card-body">

        <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
          <a href="#" type="button" class="btn btn-outline-info waves-effect" onclick="spin();">Rotate</a>
          <a href="#" type="button" class="btn btn-outline-info waves-effect" onclick="stopRotation();"">Stop</a>
        </div>



        <div class="btn-group-vertical" style="width: 100%;">
          <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraFront();">Front</a>
          <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraBack();">Back</a>
          <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraLeft();">Left</a>
          <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraRight();">Right</a>
        </div>


        <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
          <button type="button" class="btn btn-outline-info waves-effect" onclick="wireframe();">Wireframe</button>
          <button type="button" class="btn btn-outline-info waves-effect" onclick="poly();">Poly</button>
        </div>

        
        </div>
      </div>

      <div id="two">
        <div class="card-body">

          <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
            <a href="#" type="button" class="btn btn-outline-success waves-effect" onclick="spinn();">Rotate</a>
            <a href="#" type="button" class="btn btn-outline-success waves-effect" onclick="stopRotationn();"">Stop</a>
          </div>



          <div class="btn-group-vertical" style="width: 100%;">
            <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraFront2();" >Front</a>
            <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraBack2();"  >Back</a>
            <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraLeft2();"  >Left</a>
            <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraRight2();" >Right</a>
          </div>


          <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
          <button type="button" class="btn btn-outline-success waves-effect" onclick="wireframe2();">Wireframe</button>
          <button type="button" class="btn btn-outline-success waves-effect" onclick="poly2();">Poly</button>
          </div>

         
        
          </div>
        </div>

        <div id="three">
          <div class="card-body">

            <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
              <a href="#" type="button" class="btn btn-outline-secondary waves-effect" onclick="drink();">Rotate</a>
              <a href="#" type="button" class="btn btn-outline-secondary waves-effect" onclick="stopDrink();"">Stop</a>
            </div>



            <div class="btn-group-vertical" style="width: 100%;">
              <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraFront3();">Front</a>
              <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraBack3();" >Back</a>
              <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraLeft3();" >Left</a>
              <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraRight3();">Right</a>
            </div>


            <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
            <button type="button" class="btn btn-outline-secondary waves-effect" onclick="wireframe3();">Wireframe</button>
            <button type="button" class="btn btn-outline-secondary waves-effect" onclick="poly3();">Poly</button>
            </div>

            
            </div>
          </div>

        
      </div>


    </div> 
  
  
  <div class="col-sm-8">
    <div class="card text-left">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <h2>Interact with the 3D model</h2>
      </div>
      <div class="card-body">
        <div id="mcdonalds">
          <div id="x3dModelTitle_mcdonalds" class="card-title modelText"></div>
         
          <div class="model3D">
            <x3d id="model">
              <scene>
                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/mcdonalds.x3d">
                </inline>
              </scene>
            </x3d>
          </div>
          <div id="x3dCreationMethod_mcdonalds" class="card-text modelText"></div>
        </div>
       
        <div id="fanta" style="display:none;">
          <div id="x3dModelTitle_fanta" class="card-title modelText"></div>
          
          <div class="model3D">
            <x3d id="model2">
              <scene>
                <inline nameSpaceName="model2" mapDEFToID="true" onclick="animateModel2();"
                  url="assets/x3d/fanta.x3d"> </inline>
              </scene>
            </x3d>
          </div>
          <div id="x3dCreationMethod_fanta" class="card-text modelText"></div>
        </div>
       
        <div id="duff" style="display:none;">
          <div id="x3dModelTitle_duff" class="card-title modelText"></div>
          
          <div class="model3D">
            <x3d id="model3">

              <scene>
                <inline nameSpaceName="model3" mapDEFToID="true" onclick="animateModel3();"
                  url="assets/x3d/coke.x3d"> </inline>
              </scene>
            </x3d>
          </div>
          <div id="x3dCreationMethod_duff" class="card-text modelText"></div>
        </div>

        
        </div>
      </div>
    </div>
  </div>

 
</div>
</div> 


<div id="interaction" class="row">

<div class="col-sm-4">
  <div class="card text-center">
   
    <div class="card-body">
      <div class="card-Title x3dCamera_Subtitle modelText">
      </div>
      <div id="mcdonaldsDescription">
      <div class="row">
        <img class="img-responsive margin" src='assets/images/gallery_images/mcpng.png' style="margin:auto" alt="Image">
        </div>
        </div>


        <div id="fantaDescription">
      <div class="row">
        <img class="img-responsive margin" src='assets/images/gallery_images/fantapng.png' style="margin:auto" alt="Image">
        </div>
        </div>


        <div id="duffDescription">
      <div class="row">
        <img class="img-responsive margin" src='assets/images/gallery_images/duffpng.png' style="margin:auto" alt="Image">
         </div>
        </div>

      </div>
     
      </div>
    </div>

    
  


<div class="col-sm-8">

  <div id="mcdonaldsDescriptionn" class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="title_mcdonalds" class="card-title modelText"></div>
          <div id="subTitle_mcdonalds" class="card-subtitle modelText"></div>
          <div id="description_mcdonalds" class="card-text modelText"></div>
          <p>McDonald's Corporation is an American fast food company, founded in 1940 as a restaurant operated by Richard and Maurice McDonald, in San Bernardino, California, United States. They rechristened their business as a hamburger stand, and later turned the company into a franchise, with the Golden Arches logo being introduced in 1953 at a location in Phoenix, Arizona. 
            </p>
          <a href="https://en.wikipedia.org/wiki/McDonald%27s" class="btn btn-primary btn-responsive" style="float:right">Find out more about mcdonalds!</a>
        </div>
      </div>
    </div>
  </div> 

  
  <div id="fantaDescriptionn" class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="title_fanta" class="card-title modelText"></div>
          <div id="subTitle_fanta" class="card-subtitle modelText"></div>
          <div id="description_fanta" class="card-text modelText"></div>
          <p>Fanta is a brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 150 flavors worldwide. Fanta originated as a Coca-Cola substitute in 1940 due to the American trade embargo of Nazi Germany which affected the availability of Coca-Cola ingredients; the current formulation was developed in Italy.</p>
          <a href="https://en.wikipedia.org/wiki/Fanta" class="btn btn-primary btn-responsive" style="float:right">Find out more about fanta!</a>
        </div>
      </div>
    </div>
  </div> 
  
  <div id="duffDescriptionn" class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="title_duff" class="card-title modelText"></div>
          <div id="subTitle_duff" class="card-subtitle modelText"></div>
          <div id="description_duff" class="card-text modelText"></div>
          <p>Duff is Homer Simpson's beer of choice. It is a parody of stereotypical mass-market American lager: cheap, poor-quality, and heavily marketed everywhere.
            The beer's slogan is "Can't Get Enough of That Wonderful Duff", though there are others. In the season four episode, "Duffless", parking lot signs at the Duff brewery have the slogans "It's Always Time For Duff" and "Now Leaving Duff Country". In the first season episode, "Homer's Odyssey", Duff is described as "The beer that makes the days fly by".
            </p>
          <a href="https://en.wikipedia.org/wiki/Duff_Beer" class="btn btn-primary btn-responisve" style="float:right">Click here to see more!</a>
        </div>
      </div>
    </div>
  </div>
</div>


</div> 





</div> 


<nav id="footerColor" class="navbar navbar-expand-sm footer">
<div class="container-fluid">
<div class="navbar-text float-centre email">
  <p><span class="align-baseline float-center">dlp25@sussex.ac.uk | 
    
  <a style = "color: white;" href="javascript:changeLook()">Colour</a>
   | 
  <a style = "color: white;" href="javascript:changeBack()">Reset</a>
  |
  <a style = "float: right; color: white; font-family: logo" href="https://github.com/danpayne6/MobileWeb3D" target="_blank">)</a>
  
  <a style = "float: right; color: white; font-family: logo"" href="https://github.com/danpayne6/MobileWeb3D" target="_blank">)</a> 
  
</span></p>
</div>
</div>
</nav>

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Further Deails</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>As a result of working from home, my access to a Windows machine was limited. <br><br>
                        One of the models was created in Blender and two were created with 3DS Max. The model created in Blender was exported
                        as .abc (Alembic). This was 
                        then placed into the 3DS Max scene where the animations and VRML helpers could be
                        implemented. The models were finally
                        exported to VRML and converted to X3D.<br><br> The wrap for the McDonalds cup was created using GIMP, this is a piece of software similar to Adobe Photoshop</br>
                        <br>To create the realistic looking images, found in the image gallery, I used MentalRay renderer.
                        For the background of the images I created a plane
                        and a wall, making sure to apply a chamfer to the parts that join, creating a smooth connection.
                        I then applied various lights to get the effect
                        I wanted. I am fairly pleased with the results. <br><br>
                        There is an extra webpage that demonstrates the process of creating the different models - that data for this page is stored in a database and retrieved using SQL and PHP.                         
                        </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="scripts/js/jquery-3.4.1.js"></script>
    <script src="scripts/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="scripts/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='scripts/js/x3dom.js'></script>

    <!-- Font Awesome Version 5 -->
    <!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
    <!-- <script src="all.js"></script> -->

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src="scripts/js/custom.js" crossorigin="anonymous"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="scripts/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="scripts/js/gallery_generator.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="scripts/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="scripts/js/modelInteractions.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="scripts/js/jquery.fancybox.min.js"></script>

</body>

</html>

