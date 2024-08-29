<?php
include "../Includes/styling-links.php";
include "../Includes/connect.php";
include("../Function/main-function.php");

session_start();

$userExists = 0;
$emptyInput = 0;
function retainData ($data){
  $userExists = 0;
  if($userExists){
  echo "$data";}
}

if(isset($_POST['signup'])) {
  //Error Msges 
  
  //Success Msg
   $success = 0;

  $ip = getIPAddress();
  $name = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $address = $_POST['address'];
  $mobile_no = $_POST['contact'];
  $image = $_FILES['image']['name'];
  $tempimage = $_FILES['image']['tmp_name'];
  $password_hash = password_hash($password, PASSWORD_DEFAULT);
 

  $userCheck = "SELECT * FROM user WHERE email = '$email'";
  $result_userCheck = mysqli_query($conn, $userCheck);
  $checkForUser = mysqli_num_rows($result_userCheck);

  $proimg = 0;
  if ($image == ''){
    $proimg = "user_icon.png";
    echo "$proimg";
  }
  else {
    $proimg = $image;
    echo "$proimg";
  }

  if($checkForUser > 0) {
    $userExists = 1;
  }
  else {
      $image = 'user_icon.png';
      $userExists = 0;
    move_uploaded_file($tempimage, "userimg/$image");
    
    $userSignup = "INSERT INTO user (ip_address,username,email,password,address,mobile_no,user_img) VALUES ('$ip','$name','$email','$password_hash','$address','$mobile_no','$proimg')";
    
    $result_usersignup = mysqli_query($conn, $userSignup);
     
}

  $userCart = mysqli_query($conn, "SELECT * FROM cart WHERE ip_address = '$ip'");
  $userCartRow = mysqli_num_rows($userCart);

  if($userCartRow > 0) {
   $session_username = $_SESSION['username'] = $name;
   $session_email = $_SESSION['email'] = $email;
   
   $username = $session_username;
   $useremail = $session_email;
    echo "<script>
    alert('Welcome $session_username Your Items In Cart Has Been Saved');
    window.open('checkout.php', '_self')
    </script>
    ";
  }
  else {
    echo "<script>
    alert('Account Successfully Created');
    window.open('../index.php', '_self');
    </script>";
  }

}
?>

<div class="container mt-5 d-flex justify-content-center align-items-center">
  
  <div class="p-5 mt-5 border border-black rounded bg-light">
    <form action="" method="post" enctype="multipart/form-data" class="">
      <h4 class="mb-3 text-center ">Sign Up</h4>
      <div class="mb-4 img-holder text-center">
        <img src="../Assets/images/user_icon.png" id="img-preview" alt=""> 
        <i class="fa fa-trash btn btn-lg delete-icon" onclick="deleteImage();" style='color: red;'></i> <br>
        <label for="input-file" class="display-block bg-black text-light p-1 ps-3 pe-3 rounded btn mt-1" onchange="showPreview(event);" id="img_label">Select Image
        <input type="file" id="input-file" name="image" value="
        <?php 
          if($userExists) {
            echo "$image";
          }
    
          ?>
          
        "  hidden>
        </label> 
      </div>
      
      <div class="row gy-4" style="width: 800px;">
        <div class=" col-6">
          <input type="text" class="form-control w-100 text-center" placeholder="Enter Your First and Last Name" name="uname" autocomplete="off" required>
        </div>


        <div class=" col-6 text-center">
          <input type="email" class="form-control w-100 text-center" id="email" placeholder="Enter Your Email" name="email" autocomplete="off" required value="<?php 
          if($userExists) {
            echo "$email";
          }
          
          ?>">
          <small class="text-danger fw-bold" id="error-email">
            <?php 
            if($userExists){
              echo "That Email Already exists Enter Another Email <i class='fa-solid fa-window-close btn p-0' style='color:red'></i>";
            }
            ?>

          </small>

        </div>

        <div class=" col-6 password-container text-center">
          <div class="password-icon">
             <i class="fa fa-eye fa-l btn btn-show" style="color:gray"></i>
          </div>
          
          <input type="password" class="form-control w-100 text-center passwordInput" placeholder="Enter a Password" max="15" name="password" id="password" autocomplete="off" onkeyup="passwordMatch();" required pattern="[a-zA-Z0-9]+">

          <label for="" id="passwordlimit" class="fw-bold" style="font-size: small;" hidden>Password Must Be Atleast 8 Digits <span id="passwordRemainer"></span></label>
        </div>


        <div class=" col-6 password-container text-center">
        <div class="password-icon">
             <i class="fa fa-eye fa-l btn btn-show" style="color:gray"></i>
          </div>
          <input type="password" class="form-control w-100 text-center passwordInput" placeholder="Re-Enter Password" name="repassword" autocomplete="off" id="repassword" onkeyup="passwordMatch();" required >

          <label for="" class="fw-bold text-danger" style="font-size: small;" id="passwordlabel" hidden>Your Password Does Not Match</label>
        </div>

        <div class=" col-8">
          <input type="text" class="form-control w-100 text-center" placeholder="Enter Your Address" name="address" autocomplete="off" required >
        </div>


        <div class=" col-4">
          <input type="number" class="form-control w-100 text-center" placeholder="Enter Phone Number" name="contact" autocomplete="off" required>
        </div>

        <div class="col-12 text-center">
          <input type="submit" class="btn text-center text-light bg-dark form-control" value="Sign Up" id="btnsignup" name="signup">
          Already Have an Account? <a href="login.php" class="text-decoration-none text-primary">Login</a>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  function passwordMatch() {
    let password = document.getElementById('password').value;
    let repassword = document.getElementById('repassword').value
    
    if (repassword != password) {
      document.getElementById('btnsignup').disabled = true;
      document.getElementById('passwordlabel').hidden = false;
    }
    else {
      document.getElementById('btnsignup').disabled = false;
      document.getElementById('passwordlabel').hidden = true;
    }

    if(password.length < 8) {
   document.getElementById('passwordlimit').hidden = false
   let remainer = 8 - password.length
   document.getElementById('passwordRemainer').innerHTML = `Enter ${remainer} More Digits`;
   document.getElementById('btnsignup').disabled = true;
    }
     if (password.length >= 8 || password.length == 0) {
      document.getElementById('passwordlimit').hidden = true
    }
  }

  function showPreview(event) {
    let trashIcon =  document.querySelector('.delete-icon')
    let imageField = document.getElementById('input-file');
    if(event.target.files.length > 0) {
      let src = URL.createObjectURL(event.target.files[0]);
      let preview = document.getElementById('img-preview');
      preview.src = src;
      preview.style.border = "4px solid black";
      trashIcon.style.display = "block";
    }
    else {
      trashIcon.style.display = "none";
    }
    
  }
// Delete uploaded image
function deleteImage() {
let trashIcon =  document.querySelector('.delete-icon');
let imageField = document.getElementById('img-preview');
let imageInput = document.getElementById('input-file');


imageField.src = '../Assets/images/user_icon.png' 
imageField.style.border = '0px';
trashIcon.style.display = 'none';
imageInput.value = ''; 
 }

  // Password visibility
    let btnShow = document.querySelectorAll('.btn-show');
    let passInput = document.querySelectorAll('.passwordInput')
for(let i=0; i<btnShow.length; i++) {
  btnShow[i].addEventListener("click", () => {
      if(passInput[i].type === "password") {
        passInput[i].type = "text";
        btnShow[i].classList.replace("fa-eye", "fa-eye-slash")
      
      }
      else {
        passInput[i].type = "password";
        btnShow[i].classList.replace("fa-eye-slash", "fa-eye");
      }
    })
}

let btnCloseMsg =document.querySelector('.fa-window-close').addEventListener("click", () => {

  document.getElementById('error-email').hidden = true;

})
</script>