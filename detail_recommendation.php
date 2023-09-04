<?php
   if ( !isset($_GET['id'])=="" && trim($_GET['id'])=="" ){
      $empty = true;
   }
   else {
      $empty = false;
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Detail</title>
      <meta name="keywords" content="food">
      <meta name="description" content="This page allows users to view detailed information, including name, category, energy, energy level, labels, and allergens about the selected food.">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <!-- shared.css -->
      <link rel="stylesheet" href="css/shared.css">
      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- plugin -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <script src="http://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
      <script src="js/jquery.shCircleLoader.js" type="text/javascript"></script>
      <style>
         .nav-link:hover {
             color: #8a817c!important;
             text-decoration: underline!important;
         }
         .nav-link {
            color: #463F3A!important;
         }
         .active{
             color: #8a817c!important;
         }
         body {
            background-color: #F5EBE0;
            font-family: Verdana, Arial, sans-serif;
         }
         h1 {
            text-align: center;
            font-size: 2.5em;
            color: #463F3A;
            font-weight: bold;
            letter-spacing: 3px;
            font-family: Verdana, Arial, sans-serif;
            background-color: #E3D5CA;
            border-top: 4px solid #463F3A;
            text-transform: uppercase;
         }
         tr {
            border-top: 3px solid #463F3A;
         
         }
         tr:hover {
            background-color: #E3D5CA;
         }
         .table td, .table th {
            border: none;
         }
         img {
            border: 4px solid #463F3A;
            width: 90%;
            height: auto;
         }
         .th {
            border-right: 4px solid #463F3A;
            margin-top: auto;
            margin-bottom: auto;
         }
         #footer {
            color: #F5EBE0;
            position: fixed;
            bottom: 0;
            width: 100%;
         }
         #loader-container {
            margin-right: auto;
            margin-left: auto;
            width: 200px;
            height: 200px;
         }
         @media (min-width: 768px) {
            .row {
               padding-left: 150px;
               padding-right: 150px;
            }
         }
      </style>
   </head>
   <body>
      <!-- navbar starts -->
      <nav class="navbar navbar-expand-md navbar-light" id="navbar_container">
         <span id="transparent"></span>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="project.html">Project Summery</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="search.html">Search</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="recommendation.html">Recommendation</a>
               </li>
               <li class="nav-item right">
                  <a class="nav-link" href="favorite.php" id="fav">&hearts; Favorate List</a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- navbar ends -->

      <!-- main section starts -->
      <?php if($empty==true) : ?>
         <script>alert("empty food ID");</script>
      <?php else : ?>
         <div class="container-fluid"><div class="pt-4" id="loader-container"></div></div>
         <div id="main">
            <input type="hidden" id="index" value="<?php echo $_GET['id'] ?>">
            <h1></h1>
            <div class="row mt-4">
               <div class="col-4 text-center mb-5">
                  <img class="rounded" src="https://static.vecteezy.com/system/resources/previews/004/141/669/non_2x/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg" alt="image">
               </div>
               <div class="col-8 container text-center">
                  <table class="table">
                    <tbody>
                        <tr>
                           <th scope="row" class="px-0 align-middle">
                              <div class="th">category</div>
                           </th>
                           <td class="align-middle" id="category"></td>
                        </tr>
                        <tr>
                           <th scope="row" class="px-0 align-middle">
                              <div class="th">energy</div>
                           </th>
                           <td class="align-middle" id="energy"></td>
                        </tr>
                       <!--  <tr>
                           <th scope="row" class="px-0 align-middle">
                              <div class="th">energy level</div>
                           </th>
                           <td class="align-middle" id="">high energy</td>
                        </tr> -->
                        <tr>
                           <th scope="row" class="px-0 align-middle">
                              <div class="th">labels</div>
                           </th>
                           <td class="align-middle" id="label"></td>
                        </tr>
                        <tr>
                           <th scope="row" class="px-0 align-middle">
                              <div class="th">allergens</div>
                           </th>
                           <td class="align-middle" id="allergen"></td>
                        </tr>
                    </tbody>
                  </table>
               </div>
            </div>
         </div>
      <?php endif; ?>
      <!-- main section ends -->
      <div id="footer">
         Contact: aimeedu@usc.edu. All Rights Reserved. Design by Aimee Du&copy;
      </div>
      <!-- bootstrap script -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
      <script>
         window.onload = function() {
            document.getElementById("main").style.display = "none";
            $('#loader-container').shCircleLoader({
                dots: 15,
                dotsRadius: 15,
                color: '#463F3A'
            });
            var i = 0;
            setInterval(function() {
               $('#loader-container').shCircleLoader('progress', i + '%');
               if (i < 100) i+=4;
            }, 30);
         }

         var index = document.getElementById("index").value;
         console.log(index);
         $.ajax({
            url: "https://us.openfoodfacts.org/cgi/search.pl?action=process&sort_by=unique_scans_n&json=true&fields=product_name,categories_tags,image_url,nutriscore_data,labels_hierarchy,allergens&page_size=30",
            dataType: "json",
            success: function(result) {
               $('#loader-container').hide();
               document.getElementById("main").style.display = "block";
               console.log(result);
               document.querySelector("h1").innerHTML = result.products[index].product_name;
               document.querySelector("img").src = result.products[index].image_url;
               document.querySelector("img").alt = result.products[index].product_name;
               document.getElementById("category").innerHTML = result.products[index].categories_tags[0].replace(/^en:/, '');
               document.getElementById("energy").innerHTML = result.products[index].nutriscore_data.energy + " kj";
               var labels = result.products[index].labels_hierarchy;
               var final = "";
               for (var i = 0; i < labels.length; i++) {
                 if (final === "") {
                   final = labels[i].replace(/^en:/, '').replace(/^fr:/, '').replace(/^Fr:/, '');
                 } else {
                   final += "," + labels[i].replace(/^en:/, '').replace(/^fr:/, '').replace(/^Fr:/, '');
                 }
               }
               document.getElementById("label").innerHTML = final;
               var words = result.products[index].allergens.split(",");
               var newWords = words.map(function(word) {
                  return word.replace("en:", "").replace("fr:", "").replace("Fr:", "");
               });
               var newStr = newWords.join(",");
               document.getElementById("allergen").innerHTML = newStr;

            },
            error: function(error) {
               alert("AJAX error")
               console.log(error)
            }
         });


      </script>
   </body>
</html>