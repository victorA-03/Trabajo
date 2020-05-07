<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="estilos.css">

</head>
<body>

<main>
        <div class="content-all">
        

        

            <input type="checkbox" id="check">
            <label for="check" class="icon-menu">Menu</label>
            <h2>My Learning tracks</h2>
            
           
            
            
            <nav class="menu">
                <ul>

                  <img src="https://image.freepik.com/vector-gratis/perfil-hombre-dibujos-animados_18591-58483.jpg"  width="130" height="130">
          
                  <h1>Welcome  <?php echo $user->getNombre();  ?></h1>
        
                    <li>Home</li>
                    <li>Settings</li>
                    <li>Notifications</li>
                    <li>Contact</li>
                    <li class="cerrar-sesion"><a href="includes/logout.php">Sing Out</a></li>
                </ul>
            </nav>
            
         
         
        </div>
    </main>



   

    
    
</body>
</html>