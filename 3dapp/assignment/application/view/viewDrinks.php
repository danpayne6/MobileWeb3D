<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

 <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="scripts/gallery_generator.js"></script>
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

 <title>Drinks Image View</title>

</head>
<body>
    <h1 style='margin:5px; padding:10px;'>Choose a drink brand to see more details</h1>
    <b style='margin:5px; padding:10px;'>Select a drinks brand name: </b>
    <form style='margin:5px; padding:10px;'>
        <select id="select">
            <?php 
                // Debug
                // $data = array("A", "B", "C", "D", "E");
                for ($i=0; $i <= count($data); $i++)                                  
                    echo '<option value="'. $data[$i] .'">'. $data[$i] . '</option>';
            ?>
        </select>
    </form> 
    <!-- Inject the HTML into this div tag placeholder -->

    <div id="placeholder" style='margin:5px; padding:10px;'></div>

    <script>
    $(document).ready(function(){
        $("#select").change(function () {
            // Debug
            var model = $(this).val();
            console.log('Drinks Model:', model, 'has been selected');
            // Variable to hold the HTML as we build it for inserting into the place holder
            var str = "";          
            // Process the selection to select the desired drinks brand
            $("select option:selected").each(function () {              
                // Start to build the HTML starting with a title
                str += "<div><b>Drinks Brand: </b> "+ $(this).text() + "</div>" + "</br>";
                // Debug
                console.log('HTML Title is:', str);
                // Debug
                var selection = $(this).text();
                // Debug
                console.log('Selected brand model:', selection);
                // Build a Url path to the php model used to read the drinks brand data
                var brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
                // Debug
                console.log('URL to PHP Model is:', brandUrl);
                // Fire the AJAX call with the .getJSON function to get the service response from the Url (to the web server)
                $.getJSON(brandUrl, function(json) {
                  // Debug
                  console.log('Web service response for drink brand data: ', json);
                  // Write the handler to display the results in an HTML view
                  // Start the contatiner div tag
                  str +="<div width=90%; style='float:left; margin:5px; border:1px solid; border-color: blue; padding:10px;'>";
                  // Build the HTML view — we need to loop because we may have more than one of a particular brand
                  for (var i=0; i<json.length; i++) {
                      // Grab the drink brand details
                      str+= 
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].brand + "</div>";
                      // And, the drink brand image
                      str +=
                        "<div width='30%'style='float:left; margin:5px;border:1px solid; border-color: green; border-radius: 10px; padding:10px;'>" + 
                        "<img class = 'zoom' width='300px' src = '../assets/images/gallery_images/" + json[i].brand + ".jpg'></img>" +
                        "</div>";
                    str +=
                        "<div width='30%'style='float:left; margin:5px;border:1px solid; border-color: green; border-radius: 10px; padding:10px;'>" + 
                        "<img width='300px' src = '../assets/images/gallery_images/" + json[i].brand + "1" +".jpg'></img>" +
                        "</div>";

                  }
                  // Close off the container div tag
                  str+="</div";
                  // And return the constructed HTML to the '</div> placeholder </div>'
                  document.getElementById("placeholder").innerHTML=str;
                  // Alternatively, you could use the JQuery .html() method to return the HTML string to the placeholder div tag
                  // $('#placeholder').html(str);
               });
            });
        });
    });
  </script>

<div id="about">

<div class="col-sm-12">
    <div class="card text-left">
        <div class="card-body">
            <div class="card-title title_gallery drinksText"></div>
            <div class="gallery" id="gallery"></div>Hello
            <div class="card-text description_gallery drinksText"></div>
        </div>
    </div>

</div>
</div><!-- End home page -->



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

    <script src = "scripts/js/medium-zoom.min.js"></script>
   
    <script src = "scripts/js/zoom.js"></script>
   

</body>
</html>	