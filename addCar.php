<php>
      <html>
    <head>
    <header>
	  <link rel = "stylesheet" type ="text/css" href ="css/style.css">
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

    website.src = website_gif;
    car.src = car_image;
    store.src = store_image;
    login.src = login_image;

    Option2.addEventListener('click', function() {
      website.src = website_image;
      car.src = car_gif;
      store.src = store_image;
      login.src = login_image;
    });

    Option3.addEventListener('click', function() {
      website.src = website_image;
      car.src = car_image;
      store.src = store_gif;
      login.src = login_image;
    });

    Option4.addEventListener('click', function() {
      website.src = website_image;
      car.src = car_image;
      store.src = store_image;
      login.src = login_gif;
    });
  </script>
  </div>
    </head>
	<br><br>
		<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>

    <body>
    <section id="main">
          <div class="a">
            <article id="main-col">
    
              <ul id="services">
    
    
    <form action="addCar.php" method="post">
    <h1> Add a Cars </h1>
    <p><label>
    CarId:
    <input name = "CarId" , type = "number" size = "10">
    </label></p>
    <p><label>
    car Name:
    <input name = "carName" , type = "text" size = "50">
    </label></p>
    <p><label>
    car description:
    <br><textarea name = "cardescription" , type = "comments" rows = "20" cols = "40"></textarea>
    </label></p>
                 
    <p><label>carimage:
     <input type="file" name="myFile"><br>
     </label></p>
    
    
      <a href="Cars.php"><button class="btn" type="submit" name = "Add">add</button></a></a>
	<br>
	
    <button class="btn" type="clear">cancel</button></a>
    </li>
              </ul>
            </article>
          </div>
        </section>
        <?php 
    if(isset($_POST['Add'])){
        /*connection to the database*/
    $connection = new mysqli("localhost","root","","companiesandcars");
    /*insert from SQL to apply it here*/
    $sql= "INSERT INTO cars (Car_id, Name ,Description,Image) VALUES ('".$_POST['CarId']."' , 
    '".$_POST['carName']."', '".$_POST['cardescription']."','".$_POST['myFile']."')";
    /*connect a database and check in query*/
    if( $connection ->query($sql)==false ){
      echo $connection->error;
    }else {
      echo "<span style='color:blue'>Added successfully</span>";}}
     ?>
       
    </body>
    </html>
    </php>



    