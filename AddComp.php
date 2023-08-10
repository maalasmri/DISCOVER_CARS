<php>
    <html>

    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
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

    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>
        <br><br>
        <br>
        <br>
        <section id="main">
            <div class="a">
                <article id="main-col">

                    <ul id="services">

                        <form action="AddComp.php" method="post">
                            <h1> Add a Company </h1>
                            <p><label>
                            company id:
                                    <input name="Compid" , type="number" size="10">
                                </label></p>
                            <p><label>
                            company Name:
                                    <input name="compName" , type="text" size="50">
                                </label></p>
                            <p><label>
                            company description:
                                    <br><textarea name="compdescription" , type="comments" rows="20"
                                        cols="40"></textarea>
                                </label></p>

                            <p><label>company image:
                                    <input type="file" name="myFile"><br>
                                </label></p>

                            <a href="Companys.php"><button class="btn" type="submit" name="Add">add</button></a>
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
    $sql= "INSERT INTO company (Comp_id, Name ,Description,Image) VALUES ('".$_POST['Compid']."' , 
    '".$_POST['compName']."', '".$_POST['compdescription']."','".$_POST['myFile']."')";
    /*connect a database and check in query*/
    if( $connection ->query($sql)==false ){
      echo $connection->error;
    }else {
      echo "<span style='color:blue'>Added successfully</span>";

	  }}
     ?>

    </body>

    </html>
</php>