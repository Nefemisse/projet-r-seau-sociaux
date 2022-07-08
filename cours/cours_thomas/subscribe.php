<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="./css/base.css" rel="stylesheet" id="bootstrap-css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
      Connexion
    </div>
    <form action="./controller/controller.php" method="POST">
      <input type="hidden" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
  </div>
</div>