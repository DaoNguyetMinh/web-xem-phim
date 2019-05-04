<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/css_home.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsive -->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    </head>
    <body class="body">
      <div class="container"> <!-- logo và search box -->
        <div>
          <img class="logo" src="images/logo_Phim.Mèo.png" alt="logo Phim.Mèo" width="80px" height="50px">  
         
            <input class="sb" type="text" name="search" placeholder="Search..">
            <button class="btn bsb" type="submit">Search</button>
          
        <nav class="navbar navbar-expand-sm navbar-dark t">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Home</a>
              
                <!-- Links -->
                <ul class="navbar-nav">

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Thể loại
                    </a>
                    <div class="dropdown-menu">
                      <table>
                        <tr>
                    <th>  <a class="dropdown-item" href="#">Hành động</a> </th>
                   <th>   <a class="dropdown-item" href="#">Viễn tưởng</a> </th>
                   <th>   <a class="dropdown-item" href="#">Tâm lí</a> </th>
                    </tr>
                    <tr>
                    <th>  <a class="dropdown-item" href="#">Hành động</a> </th>
                    <th>   <a class="dropdown-item" href="#">Viễn tưởng</a> </th>
                    <th>   <a class="dropdown-item" href="#">Tâm lí</a> </th>
                     </tr>
                     <tr>
                     <th>  <a class="dropdown-item" href="#">Hành động</a> </th>
                     <th>   <a class="dropdown-item" href="#">Viễn tưởng</a> </th>
                     <th>   <a class="dropdown-item" href="#">Tâm lí</a> </th>
                      </tr>
                      <tr>
                      <th>  <a class="dropdown-item" href="#">Hành động</a> </th>
                      <th>   <a class="dropdown-item" href="#">Viễn tưởng</a> </th>
                      <th>   <a class="dropdown-item" href="#">Tâm lí</a> </th>
                       </tr>
                    </table>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                  </li>
                </ul>
               
                  <div class="button">
                      <button type="button" class="btn login">Login</button>
                      <button type="button" class="btn logout">Log out</button>
                  </div>
              </nav>
        </div> 


        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
        
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="nm" src="images/background_web_cat.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                
                   <img class="nm" src="images/background_web_cat.jpg" alt="Chicago">
                
            </div>
            <div class="carousel-item">
              <img class="nm" src="images/hinh1.jpg" alt="New York">
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

        <h1>Phim gì đó</h1>

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->

      </div>
       

    



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
