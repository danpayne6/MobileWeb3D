<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="scripts/js/bootstrap-4.4.1.js"></script>
 <title>Drinks Image View</title>

</head>

<style>

@font-face {
    font-family: simpsonFont;
    src: url(../assets/fonts/simpsonfont/Simpsonfont.otf);
}

@font-face {
    font-family: mcdonaldsFont;
    src: url(../assets/fonts/mcdonalds/mcdonalds.otf);
}

body{background-color: #116466;}

select{ 
        background-color: rgb(227, 252, 245);
        font-family: simpsonFont;
        margin-left: 30px;
}

.con{
        border-color: blue;
        border-radius: 10px;
        background-color: grey;
        text-align: center;

}

.image{  float:left;
        margin:5px;
        border:1px solid;
        border-color: white;
        border-radius: 10px;
        padding:10px;
        font-family:simpsonFont;
        text-align: center;
        width:95%;
        margin-left: auto;
        margin-right: auto;
        background-color:gray;
        }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-family: simpsonFont;
}

li a {
  margin-right: 20px;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin: auto;
}

li c {
  margin: auto;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: bold;

}

h1{
    font-family: simpsonFont;
    text-align: center;
    color: white;
}

h2{
    font-family: mcdonaldsFont;
    text-align: center;
    font-size: 8px;
    color: white;
}


</style>



<body>

<ul>
  <li><c href="#news">How It Was Made</a></li>
</ul>


    <h1 style='margin-top:60px; margin-bottom:30px;'>Choose a drink to see how it was made!</h1>
    
    <form style='margin:5px; padding:10px;'>
    <h2 style='margin:5px; padding:10px;'>Select a Drink:   </b>
        <select id="select">
            <?php 
                for ($i=0; $i <= count($data); $i++)                                  
                    echo '<option value="'. $data[$i] .'">'. $data[$i] . '</option>';
            ?>
        </select>
    </form> 
    <div id="placeholder" style='margin:5px; padding:10px;'></div>
    <script>
    $(document).ready(function(){
        $("#select").change(function () {
            var model = $(this).val();
            console.log('Drinks Model:', model, 'has been selected');
            var str = "";          
            $("select option:selected").each(function () {      
                str += "<div>You are viewing creation process of the "+ $(this).text() + "<div> model"+"</div>"+"</div>" + "</br>";
                var selection = $(this).text();
                var brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
                $.getJSON(brandUrl, function(json) {
                  str +="<div class='con' width=100%; margin:5px; border:1px solid; border-color: black; padding:10px; margin-left: auto; margin-right: auto;'>";
                  for (var i=0; i<json.length; i++) {
                      str +=
                        "<div class='image'>" + 
                        "<img width='100%' src = '../assets/images/gallery_images/" + json[i].brand + ".png'></img>" +
                        "</div>";
                    str +=
                        "<div class='image'>" + 
                        "<img width='100%' src = '../assets/images/gallery_images/" + json[i].brand + "1" +".png'></img>" +
                        "</div>";
                    str +=
                        "<div class='image'>" + 
                        "<img width='100%' src = '../assets/images/gallery_images/" + json[i].brand + "2" +".png'></img>" +
                        "</div>";
                  }
                  str+="</div";
                  document.getElementById("placeholder").innerHTML=str;

               });
            });
        });
    });
  </script>
   
</body>
</html>	