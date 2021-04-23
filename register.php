<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" as="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" as="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>Fakebook - Inicia Sesion</title>
    
    <script type="text/javascript">

    var realUser = "ChrisVega";
    var realPass = "Totodile158";

        function validUser(){
            var user = document.forms["registro"] ["nameUser"].value;
            var pass = document.forms["registro"] ["passUser"].value;

            if(user !== realUser || pass !== realPass ){
                alert("Usuario o Contraseña Incorrecto >:(");
                return false;
            }
        }

        function forgotUser(){
            window.alert("Usuario: " + realUser +"\n" + "Contraseña: " + realPass);
        }

    </script>

</head>
    
<body>
    <div class="formRight vertical-center">
        <form name="registro" action="index.php" method="POST" class="formBox formBG"> 

            <!-- Nombre de usuario aqui-->
            <input type="text" name="nameUserReg" placeholder="Nombre De Usuario" class="textBox"> <br><br>
            <!-- Contraseña aqui-->
            <input type="password" name="passUserReg" placeholder="Contraseña" class="textBox"> <br><br>
            <!-- Iniciar sesion y crear cuenta -->
            <div class="divForm"></div>
            <input type="submit" value="Crear Cuenta Nueva" class="sendButton border5px">
        </form>
    </div>
    
    <div class="title ">
        <h1>Fakebook</h1>
        <h2>Fakebook te ayuda a comunicarte y compartir<br>con las personas que forman parte de tu vida.</h2>
    </div>
</body>
</html>