 <?php
 session_start();
 $_SESSION = array();
 session_destroy(); 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>LISTADO CON BUSQUEDA Y ALTAS CON MATERIALIZE </title>
    <!-- Material Icon CDN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles 
      <link rel="stylesheet" href="css/style.css">
     Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
     .cyan-tran {

        background-color: rgba(37, 197, 218, 0.24);

     }

     
    </style>

  </head>
  <body>
   
 <div class="container valign-wrapper center-align"> 

     

    <div class="row">
       <div class="col s12">
          <h2>REGISTRO BASE DE DATOS</h2>


       </div>
    <form class="col s12" method="post" action="principal3.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nombre">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_open</i>
          <input id="password" type="password" name="password" >
          <label for="password">lock_open</label>
        </div>

          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
  </button>
      </div>
    </form>
  </div>




 </div>

         
           
          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
         
</html>