<!doctype html>
<html>
	<head>
		<title>Nana's Food - Lior nir & Tomer - HomeScreen</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>   
		    <link rel="icon" href="Pics/icon.png" type="image/icon_path">
	</head>
	<body>
		<header> 
      <div class="container-fluid">
        <div class="row">
          <div class = "col-sm-1"></div>
          <div class="col-sm-3 text-center m-auto">
            <!-- logo -->
            <a href="index.php" style="text-decoration: none;"><img id='logo' src="Pics/logo2.png" alt="logo"></a>
          </div>
          <navbar class="navbar navbar-expand-lg col-sm-8 fix-top sticky-top">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-between">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/Recips_Guides.php">Recipes & Guides</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/Healthy_Food.htm">Healthy Food</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/Workshops.htm">Workshops</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/Suggestion.html">Nana's suggestion</a>
                  </li>
                </ul>
              </div>
            </div>
          </navbar>
          <!-- <div class = "col-sm-1"></div>   -->
        </div>
      </div>      
    </header>

    <main>
    <!-- this is the -welcome- section -->
      <div class="container-welcome">
        <div class="row text-bg-light">
          <div class = "col-sm-1"></div>  
            <span class="spanToRemoveBig">
              <h3 class="homepageH">Welocome aboard!</h3>
            </span>
          <div class="col-sm-5 text-center">
            <img class="image" src="Pics/nana_gif.gif" class="rounded" alt="main_welcome_pic" ><br>
          </div>
          <div class="col-sm-5 text-center my-auto" >            
            <span class="spanToRemoveSmall">
              <h3>Welocome aboard!</h3>
              <p>WE ARE THRILED THAT YOU HERE</p>
            </span>                              
          </div>
          <div class = "col-sm-1"></div>  
        </div>
      </div>
    
    <!-- this is the -about Nana- section -->
    <span class="spanToRemoveSmall">
      <div class="container-about-nana">
          <div class="row">
            <div class = "col-sm-1"></div>  
            <div class="col-sm-5 text-center my-auto" >
              <h3>About Our Nana</h3> 
              <p>Our Nana is one of a kind!</p>  
              <p>Nana's greatest wish is spreading her special taste and recipes
                <br>we put all of this together for every one to learn!</p>
            </div>
            <div class="col-sm-5 text-center">
              <img class="image" src="Pics/main_welcome_pic.JPG" class="rounded" alt="main_about_pic" ><br>
            </div>
            <div class = "col-sm-1"></div>  
          </div>
        </div>
      </span>  

    <!-- this is the -Recipes and guides- section -->
      <div class="container-recipes and guides">
        <div class="row text-bg-light">
          <div class = "col-sm-1"></div>  
          <span class="spanToRemoveBig">
            <h3 class="homepageH">Recipes & Guides</h3>
          </span>
          <div class="col-sm-5 text-center">
              <img class="image" src="Pics/main_recipes_pic.JPG" class="rounded" alt="main_recipes_pic" ><br>
          </div>
          <div class="col-sm-5 text-center my-auto" >
              <span class="spanToRemoveSmall">
                <h3>Recipes & Guides</h3>
                <p>From traditional to street food and mainstream dishes</p>
              </span>
              <p>ITS ALL HERE</p> 
              <a href="includes/Recips_Guides.php" class="btn btn-primary">Let's Go!</a>
          </div>
          <div class = "col-sm-1"></div>  
        </div>
      </div>

    <!-- this is the -helthy food- section -->
      <div class="container-helthy-food">
        <div class="row">
            <div class = "col-sm-1"></div>  
            <div class="col-sm-5 text-center my-auto" >
              <h3>Helthy Food</h3>
              <span class="spanToRemoveSmall">
                <p>Its not all about the taste.</p>
                <p>Health is very important so we take care of it!</p>
                <a href="includes/Healthy_Food.htm" class="btn btn-primary">Let's Go!</a>
              </span>
            </div>
            <div class="col-sm-5 text-center">
              <img class="image" src="Pics/main_helthy_food_pic.JPG" class="rounded" alt="main_healthy_food_pic" ><br>
            </div>
            <div class="col-sm-5 text-center my-auto" >
              <span class="spanToRemoveBig"> 
                <p>Its not all about the taste.</p>
                <a href="includes/Healthy_Food.htm" class="btn btn-primary">Let's Go!</a>
              </span>
            </div>
            <div class = "col-sm-1"></div>  
          </div>
        </div>

      <!-- this is the -Workshops- section -->
      <div class="container-workshop">
        <div class="row text-bg-light">
          <div class = "col-sm-1"></div>  
          <span class="spanToRemoveBig">
            <h3 class="homepageH">Workshops</h3>
          </span>
          <div class="col-sm-5 text-center">
              <img class="image" src="Pics/main_workshop_pic.JPG" class="rounded" alt="main_workshop_pic" ><br>
          </div>
          <div class="col-sm-5 text-center my-auto" >
              <span class="spanToRemoveSmall">
                <h3>Workshops</h3>
                <p>YES Its Possible</p>
                <p>can come and learn with our greatest chefs and Nana!</p>
                <p>Pros | All family | Couples | Kids</p> </span>
              <span class="spanToRemoveBig">
                <p>You can do it with us</p></span>
              <a href="includes/Workshops.htm" class="btn btn-primary">Let's Go!</a>
          </div>
          <div class = "col-sm-1"></div>  
        </div>
      </div>

      <!-- this is the -Ingredients- section -->
      <div class="container-suggestion">
        <div class="row">
          <div class = "col-sm-1"></div>  
          <div class="col-sm-5 text-center my-auto" >
            <h3>Nana's suggestion</h3>
            <span class="spanToRemoveSmall">
              <p>come check the finest ingredients that Nana uses only and only them</p>
              <p>All ingredients are in the finest quality</p>
              <a href="includes/Suggestion.html" class="btn btn-primary">Let's Go!</a></span>
          </div>
          <div class="col-sm-5 text-center">
              <img class="image" src="Pics/main_ingredients_pic.JPG" class="rounded" alt="main_recipes_pic" ><br>
          </div>
          <div class="col-sm-5 text-center my-auto" >
            <span class="spanToRemoveBig">
              <p>Ohh Nana worked hard for this part.</p>
              <a href="includes/Suggestion.html" class="btn btn-primary">Let's Go!</a>
            </span>
          </div>
          <div class = "col-sm-1"></div>  
        </div>
      </div>

      <!-- this is the -Video- section -->
      <div class="container-video">
        <div class="row text-bg-light">
          <div class = "col-sm-1"></div>  
          <h3 class="homepageH">LOOK at us in TikTok</h3>
          <span class="spanToRemoveSmall text-center my-auto">
            <p>Our Nana in is one of the most familiar peoples at TikTok</p>
          </span>
          <div class = "col-sm-1"></div>  
          <div class="col-sm-10 text-center my-auto">
            <video width="320" height="240" controls>
              <source src="Pics/Nana_cooking.mp4" type="video/mp4">
              Your browser does not support HTML5 video
            </video>
            <br>
          </div>
          <div class = "col-sm-1"></div>  
        </div>
      </div>

    <!-- footer section -->
    <footer class="bg-light text-center text-lg-start">
      <div class="container-footer p-4">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Things from Nana </h5>    
            <ul class="list-unstyled">
              <li> <a href="index.php" class="text-dark">Home</a> </li>
              <li> <a href="includes/Recips_Guides.php" class="text-dark">Recepis & Guides</a> </li>
              <li> <a href="includes/Healthy_Food.htm" class="text-dark">Healthy Food</a> </li>
              <li> <a href="includes/Workshops.htm" class="text-dark">Workshops</a> </li>
              <li> <a href="includes/Suggestion.html" class="text-dark">Nana's suggestion</a> </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">social networks</h5>    
            <ul class="list-unstyled mb-0">
              <li> <a href="#" title="Facebook page is in the process of going live" class="text-dark">Facebook</a> </li>
              <li> <a href="#" title="Instagram page is in the process of going live" class="text-dark">Instagram</a> </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">We</h5>    
            <ul class="list-unstyled mb-0">
              <li>Contact us:</li>
              <li>
                <table>
                  <tr class = "footer_table_row"><td class = "footer_table_cell">Tomer</td><td class = "footer_table_cell">tomerbm@mta.ac.il</td></tr>
                  <tr class = "footer_table_row"><td class = "footer_table_cell">Nir</td><td class = "footer_table_cell">nir.ayal@gmail.com</td></tr>
                  <tr class = "footer_table_row"><td class = "footer_table_cell">Lior</td><td class = "footer_table_cell">liorse@mta.ac.il</td></tr>
                </table>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright :
        <a class="text-dark" style="text-decoration: none;">Lior &amp; Nir &amp; Tomer Design</a>
      </div>
    </footer>

	</body>
</html>