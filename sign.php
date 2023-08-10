<?php
    $error="";
    if(isset($_GET['error'])){
      switch ($_GET['error']) {
        case '1':
          $error = "username not found !!";
          break;
        case '2':
          $error = "password incorrect !!";
          break;
      }
    }
  ?>
  <?php
    session_start();
    

    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        $username = $_POST['Username'];
        $password = $_POST['Password'];


   $conn = new mysqli("localhost" , "root", "" , "companiesandcars");/*a connecting to a database*/

  if ($conn->connect_error) { /*if the coonnection has been failed , then a "Connection failed" massage will apper*/
    die("Connection failed: " . $conn->connect_error);
}
?>
  <?php

/*looking for the username inside the database*/
        $userInfo = $conn->query('select * from user where Username = \''.$username.'\'');
        if($userInfo->num_rows > 0){
            $userInfo = $userInfo->fetch_assoc();
            if($userInfo['Password'] == $password){

                $_SESSION['Username'] = $userInfo['Username'];

                header('REFRESH:3,URL=Admin Control Panel.php');
				echo("<h1>Please wait ... redirecting you to the page.</h1>");
            }
               

        }else{
            header('REFRESH:1,URL=sign.php?error=1');/*if it failes the 2nd time to sing in then the page will back until he gets a correct info */
			echo("eroor");
        }

    }
    ?> 

<html>
<head>
 <header>
	  <link rel = "stylesheet" type ="text/css" href ="css/style.css">
	<script src= "https://unpkg.co/gsap@3/dist/gsap.min.js"></script> 
        <link rel = "stylesheet" type ="text/css" href ="css/taskbar.css">

        <div id="tabbar">
    <div class="containerr">
    <div class="tabs">
      <input type="radio" id="Option1" name="Option" checked>
      <label class="tab" for="Option1"><img id="website" src="pic/website.png" alt="Website Image"></label>
      <input type="radio" name="Option" id="Option2">
      <label class="tab" for="Option2"><img id="car" src="pic/car.png" alt="Car Image"></label>
      <input type="radio" name="Option" id="Option3">
      <label class="tab" for="Option3"><img id="store" src="pic/store.png" alt="Store Image"></label>
      <input type="radio" name="Option" id="Option4">
      <label class="tab" for="Option4"><img id="login" src="pic/login.png" alt="Login Image"></label>
      <span class="glider"></span>
    </div>
  </div>

  <script>
    var website = document.getElementById('website');
    var car = document.getElementById('car');
    var store = document.getElementById('store');
    var login = document.getElementById('login');

    var website_gif = 'pic/website.gif';
    var website_image = 'pic/website.png';
    var car_gif = 'pic/car.gif';
    var car_image = 'pic/car.png';
    var store_gif = 'pic/store.gif';
    var store_image = 'pic/store.png';
    var login_gif = 'pic/login.gif';
    var login_image = 'pic/login.png';

    var Option1 = document.getElementById('Option1');
    var Option2 = document.getElementById('Option2');
    var Option3 = document.getElementById('Option3');
    var Option4 = document.getElementById('Option4');

    login.src = login_gif;

    Option1.addEventListener('click', function() {
    website.src = website_gif;
    car.src = car_image;
    store.src = store_image;
    login.src = login_image;

    window.location.href = 'index.php';

});
Option2.addEventListener('click', function() {
      website.src = website_image;
      car.src = car_gif;
      store.src = store_image;
      login.src = login_image;
      window.location.href = 'Cars.php';

    });

    Option3.addEventListener('click', function() {
      website.src = website_image;
      car.src = car_image;
      store.src = store_gif;
      login.src = login_image;
      window.location.href = 'Companys.php';

    });

    Option4.addEventListener('click', function() {
      website.src = website_image;
      car.src = car_image;
      store.src = store_image;
      login.src = login_gif;

      window.location.href = 'sign.php';

    });
  </script>
    </div>
   
</header>

</head>
<body>
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form action="sign.php" method = "post">
			<h1>Sign in</h1>
			
			<input type="text" placeholder="Username" name ="Username" />
			<input type="password" placeholder="Password" name = "Password"/>
			
			<button>Sign In</button>
		</form>
	</div>
	
	</div>
</div>
</body>
	<footer style = "color: lightblue;">
<?php include 'conn.php';?>

		</footer>
</html>
