<!-- a connection to the database -->
<?php



$servername = "localhost";
$username = "root";
$password = "";
$db = "companiesandcars";

   $conn = new mysqli($servername , $username, $password, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Cars";
$result = $conn->query($sql);

?>


 <!-- html code-->


<html> <header>
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

    car.src = car_gif;
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


      <br><br><br><br><br><br><br>
    </header>

<style>
.row::after {
   content: "";
   clear: both;
   display: table;  
   position:relative;
   top:500xp;
   }
 
   .checked {
   color: red;
 }
 .footer {
  background-color: #F1F1F1;
  text-align: center;
  padding: 10px;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  margin-left: 1230px;
  font-size: 17px;
  border: none;
}
.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 90px;
  background: #fff;
  font-size: 17px;
  border: none;
  cursor: pointer;
  }

  .column-header{
    background:#333;
    color:#fff;
    padding: 50px;
  }
  .column-body{
    padding: 90px;
    color:#fff;
    text-align: center;
    background:#afafaf;

  }
  .btn{
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    border: 1px solid transparent;
    border-radius: 4px;
    text-align: center;
    padding: 5px 90px;
    display: block;
    width: 100%;
  }
.btnaa:hover {
  opacity: 1;
}
.center{
text-align: center;
}

 img {
 float: left;	
   
 }
 .topnav {
 
   overflow: hidden;
   background-color: #333;
 }
 div.relative {
   position: relative;
   left: 20px;
   
 }
 
 .topnav a {
   float: left;
   display: block;
   color: #f2f2f2;
   text-align: right;
   padding: 14px 16px;
   text-decoration: none;
   font-size: 17px;
 
 }
 .active {
   
   background-color: #0dc6dc;
   color: white;
 }

.pagination a {
   color: black;
   padding: 8px 16px;
   text-decoration: none;
   transition: background-color .3s;
 }
 
 .pagination a.active {
   background-color: dodgerblue;
   color: white;
 }
 
 .pagination a:hover:not(.active) {background-color: #ddd;}
 * {
   box-sizing: border-box;
 }
 
 .columnaa {
  position: relative;
   float: left;
   width: 50%;
   /* padding: 100px; */
   margin-bottom: -100px;
   margin-top: 300px;
   padding-right: 150px;
    padding-left: 150px;
 }
 
 .rowaa::after {
   content: "";
   clear: both;
   display: table;  
   position:relative;
   top:500xp;
   }
 
   .checked {
   color: red;
 }
 .footer {
  background-color: #F1F1F1;
  text-align: center;
  padding: 10px;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  margin-left: 1230px;
  font-size: 17px;
  border: none;
}
.topnav .search-containeraa button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 90px;
  background: #fff;
  font-size: 17px;
  border: none;
  cursor: pointer;
  }

  .column-headeraa{
    background:#333;
    color:#fff;
    padding: 50px;
	padding-left: 100px;
  }
  .column-bodyaa{
    padding: 90px;
    color:#fff;
    text-align: left;
    background:#000000;

  }
  .btnaa{
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    border: 1px solid transparent;
    border-radius: 4px;
    text-align: center;
    padding: 5px 90px;
    display: block;
    width: 100%;
  }
</style>

<body>

    <section id="mainaa">
      <div class="containeraa">
	     <h1 class="page-titleaa"></h1>

			
         
			  <div class="rowaaa">
			  
					<?php  while($row = $result->fetch_assoc()) {?>
         <div class="columnaa">
           <div class="column-headeraa">
             <img src="./pic/<?php echo $row['Image'] ?>" height="75" width="100" >
             <?php echo $row['Name'] ?>
           </div>
           <div class="column-bodyaa">
              <?php echo $row['Description']?>
              </p>
              <br><br>
			 <a class="btnaa" href="deleteCar.php?Car_id=<?php echo $row['Car_id']; ?>">Delete</a>

           </div>         
         </div> 
				  <?php } ?>
							
				</div>
      </div>
	</body>
</html>
