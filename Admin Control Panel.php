
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

</head>
<section id="main">
      <div class="a">
        <article id="main-col">

          <ul id="services">




<a href="AddComp.php"><button class="button" type="submit">Add a Company</button></a>
<a href="AddCar.php"><button class="button" type="submit">Add a Car</button></a>

</body>
</html>