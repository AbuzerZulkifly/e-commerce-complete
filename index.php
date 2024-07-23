<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Cick</title>

  <!--Bootstrap CSS Link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--Css Link-->
<link rel="stylesheet" href="./Assets/css/main.css">

<!--Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<!------------------------------------------------------------------------------------------------------------------------------------->
</head>
<body style="background-color: rgb(184, 181, 181);">

<!--NavBar-->
<!-- container-fluid provides a full width container, spanning the entire width of the viewport-->
<div class="container-fluid p-0">
  <!--first child container MAIN NAVBAR-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-black header" >
  <div class="container-fluid d-flex p-0">

    <a style="margin-left: 50px; padding-top: 15px;" class="navbar-brand nav-div" href="#"><img style="width: 80px;" src="./Assets/images/logo.jpg" alt=""></a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa-solid fa-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse d-flex " id="navbarSupportedContent" style="margin-left:300px">
    
        <div>  
        <form class="d-flex pt-3">
            <input class="form-control" style="width: 500px; margin-right:10px;" type="search" placeholder="Search" aria-label="Search">
            <button class="btn bg-primary ml-1" type="submit">Search</button>
          </form>
        </div>
          
        <div class="nav-div">
          <div>
            <ul class="navbar-nav ">
              <li class="nav-item" style="margin-left:45px;">
                <a class="nav-link active text-light" aria-current="page" href="#">
                 <i class="fa fa-sign-in">Login</i> 
                </a>
              </li>
            </ul>
            </div>
        </div> 
        
        <div class="nav-div" style="margin-left:55px;">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #0D6EFD;"></i>
                  <sup style="font-size:22px;color: #0D6EFD;">1</sup></a>
                </li>
            </ul>
        </div> 
          
        <div>
          <ul>
            <li class="nav-item dropdown mt-3">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Register</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
 </nav>
</div>

<div class="main-container ">

<!--3rd Container-->
  <div class="row" style="padding-left:35px; padding-right:20px; padding-top:30px">
    <div class="col-md-10" style="padding-right:25px;">
      <!--Products-->
      <div class="row gy-4">
        <div class="col-md-4">
          <div class="card">
            <img src="https://m.media-amazon.com/images/I/61NIMuZS2ZL._AC_UY1000_.jpg" class="card-img-top product-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary btn-md btn-cart"><i class="fa-solid fa-minus"></i></button>
                    <button type="button" class="btn btn-primary btn-md btn-cart"><i class="fa-solid fa-plus"></i></button>
                  </div>

                  <div class="ms-2">
                    <i class="fa fa-cart-shopping fa-2xl"></i>
                    <sup style="margin-left: 38px; font-size:larger;">1</sup>
                  </div>
                </div>

                <a href="" class="btn btn-success btn-md mt-3 btn-view" style="padding-left:130px; padding-right:130px; margin-left:10px">View More</a>
            
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.superwh.com.au/user/images/11900.jpg?t=2108221753" class="card-img-top product-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary btn-md btn-cart"><i class="fa-solid fa-minus"></i></button>
                    <button type="button" class="btn btn-primary btn-md btn-cart"><i class="fa-solid fa-plus"></i></button>
                  </div>

                  <div class="ms-2">
                    <i class="fa fa-cart-shopping fa-2xl"></i>
                    <sup style="margin-left: 38px; font-size:larger;">1</sup>
                  </div>
                </div>

                <a href="" class="btn btn-success btn-md mt-3 btn-view" style="padding-left:130px; padding-right:130px; margin-left:10px">View More</a>
            
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://static.independent.co.uk/2024/03/19/15/Soujourn-back-pack-indybest.png" class="card-img-top product-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary btn-md btn-cart"><i class="fa-solid fa-minus"></i></button>
                    <button type="button" class="btn btn-primary btn-md btn-cart"><i class="fa-solid fa-plus"></i></button>
                  </div>

                  <div class="ms-2">
                    <i class="fa fa-cart-shopping fa-2xl"></i>
                    <sup style="margin-left: 38px; font-size:larger;">1</sup>
                  </div>
                </div>

                <a href="" class="btn btn-success btn-md mt-3 btn-view" style="padding-left:130px; padding-right:130px; margin-left:10px">View More</a>
            
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/M3W2GCcpOZ4G6VE2.large" class="card-img-top product-img" alt="...">
            <div class="card-body" style="">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary btn-md btn-cart"><i class="fa-solid fa-minus"></i></button>
                    <button type="button" class="btn btn-primary btn-md btn-cart"><i class="fa-solid fa-plus"></i></button>
                  </div>

                  <div class="ms-2">
                    <i class="fa fa-cart-shopping fa-2xl"></i>
                    <sup style="margin-left: 38px; font-size:larger;">1</sup>
                  </div>
                </div>

                <a href="" class="btn btn-success btn-md mt-3 btn-view" style="padding-left:130px; padding-right:130px; margin-left:10px">View More</a>
            
            </div>
          </div>
        </div>
        
      </div>
    </div>


    <div class="col-md-2 bg-dark p-0 w-100%">
      <!--sideNav-->
      <ul class="navbar-nav">
        <li class="nav-item bg-light">
          <a href="" class="nav-link text-center">
          <h5>Categories</h5>
          </a>
        </li>
        <li class="nav-item bg-secondary">
          <a href="" class="nav-link text-center">
          Categorie1
          </a>
        </li>
        <li class="nav-item bg-secondary">
          <a href="" class="nav-link text-center">
          Categorie2
          </a>
        </li>
        <li class="nav-item bg-secondary">
          <a href="" class="nav-link text-center">
          Categorie3
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

     












<!------------------------------------------------------------------------------------------------------------------------------------->
<!-- Bootstrap JS link -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>