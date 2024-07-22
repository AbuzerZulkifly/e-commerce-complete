<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Cick</title>

  <!--Bootstrap CSS Link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!--Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--Css Link-->
<link rel="stylesheet" href="./Assets/css/main.css">

<!------------------------------------------------------------------------------------------------------------------------------------->
</head>
<body>

<!--NavBar-->
<!-- container-fluid provides a full width container, spanning the entire width of the viewport-->
<div class="container-fluid p-0  ">
  <!--first child container MAIN NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light bg-black ">
  <div class="container-fluid d-flex">

    <a style="margin-left: 100px; padding-top: 15px;" class="navbar-brand nav-div" href="#"><img style="width: 80px;" src="./Assets/images/logo.jpg" alt=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
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
                <a class="nav-link active text-light" aria-current="page" href="#">Return &
                  <br> Orders</a>
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


<nav class="navbar navbar-expand-md navbar-dark bg-secondary d-flex justify-content-center">
   <ul class="navbar-nav ">
       <li class="nav-item">
        <a class="nav-link active text-dark p-0 pt-2 cursor-normal pe-none" aria-current="page" href="#"> Welcome Guest Click Here To</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-light nav-div" aria-current="page" href="#">Login</a>
      </li>
    </ul>
</nav>


<!--3rd Container-->
<div class="row">
  <div class="col-md-10 p-5">
    <!--Products-->
    
  </div>


  <div class="col-md-2">
    <!--sideNav-->
  </div>
</div>

     












<!------------------------------------------------------------------------------------------------------------------------------------->
<!-- Bootstrap JS link -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>