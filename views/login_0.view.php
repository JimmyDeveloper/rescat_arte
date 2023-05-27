<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>IA4GOOD</title>
        <link href="css_ai/metro.min.css" rel="stylesheet">
        <link href="css_ai/estilos.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/metro.min.js"></script>
        <script src="js/FontAwesomeCdnConfig.js"></script>
        <script src="https://use.fontawesome.com/5fe7ff4e50.js"></script>
    </head>
<body>
  <style>
	body {



        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>





    <div class="formu">
        <form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
           <center> <h1 class="text-light"><i>Login Pachuco Games</i></h1></center>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Usuario:</label>
                <input type="text" name="usuario" id="user_login">
                <button class="button helper-button clear"><i class="fa fa-user-plus" aria-hidden="true"></i></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Contraseña:</label>
                <input type="password" name="password" id="user_password">
                <button class="button helper-button reveal"><i class="fa fa-unlock" aria-hidden="true"></i></span></button>
            </div>
            <br />
            <br />
<a href="registro_pg_online.php">Registrarse</a>
            <br>

          <?php
          if(!isset($_SESSION['usuario'])){
                 include 'btn_enviar.php'; } ?>
             <?php if(!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?>
            <?php endif; ?>
            <?php if(!empty($error)): ?>
                <div class="panel alert">
                 <div class="heading ">
                     <?php echo $error ?>
                 </div>
               </div>

            <?php endif; ?>

           </div>
</form>

</body>
</html>
