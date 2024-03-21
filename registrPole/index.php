<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="screen">
      <div class="component-wrapper">
        <div class="component">
          <div class="overlap-group">
            <div class="property-ID">
              <p class="ID"><span class="text-wrapper">Либук</span> <span class="span"> ID</span></p>
            </div>
          </div>
          <div class="div-wrapper"><div class="div">Войдите с Либук ID</div></div>
          <div class="overlap">
            <div class="property-wrapper">
              <div class="property"><div class="div">Почта</div></div>
            </div>
            <div class="property-2"><div class="text-wrapper-2">Телефон</div></div>
          </div>
          <div class="property-email-wrapper">
            <div class="property-email"><div class="text-wrapper-2">Логин или email</div></div>
          </div>
          <div class="overlap-2">
            <div class="property-3"><div class="text-wrapper-3">Войти</div></div>
          </div>
          <div class="property-4"><div class="text-wrapper-4">Войти с помощью</div></div>
          <div class="property-vk"></div>
          <div class="property-icons"></div>
        </div>
      </div>
    </div>
    <?php
require_once('connect.php');
if (!empty($_REQUEST['login']) && !empty($_REQUEST['phone']) && !empty($_REQUEST['email']) && !empty($_REQUEST['password']));
$login=$_POST['login'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
if ($password !=$repassword) {
    echo 'Пароль не совпадает';
}
else{
    $passw=password_hash($password, PASSWORD_BCRYPT);
    $sql="INSERT INTO users1 (login, phone, email, password) values ('$login', '$phone', '$email', '$passw')";
    if ($db ->query($sql)=== TRUE) {
        echo "Успешная регистрация";
}
else {
    echo "Ошибка:" .$db->error;
}
}
?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c858714db7216d3","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
  </body>
</html>
