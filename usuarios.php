<?php 
           include_once 'modelo_autos.php';


           $id= $_GET['numid'];
          
           $tabla="usuarios";
           $conn=new Crud;

           $result =$conn->ConsultaDatos($id,$tabla);
    



if (isset($_POST['usuarioupdate'])) {
    //Recogemos las claves enviadas
    $id = $_POST['id1'];

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $poblacion = $_POST['poblacion'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
   
   
    $conn->UpdateUsuarios($id,$nombre,$apellidos,$poblacion,$dni,$email);
   
   
    
    }


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

 </head>
      
      <!-- Your content here -->
     <body>
          

         <div class="container">
           <div class="row">
        
                <form  class="form-inline" >

                        <div class="row">
                         <div class="col s12 m12">
                                    <div class="card purple lighten-5" style="padding:50px;">
                     <div class="card-content center-align">
                        <span class="card-title align-text">USUARIOS</span>
                     <span class="card-title align-text">Editar</span>


                     <div class="row">
                     <div class="input-field col s12">
                       <input id="id1" type="text" name="id1" value="<?php echo $result['id']; ?>"  readonly="readonly" >
                       <label for="id1">Id</label>
                     </div>
                           </div>    
                     
                         <div class="row">
                     <div class="input-field col s12">
                       <input id="nombre" type="text" class="validate" name="nombre" value="<?php echo $result['nombre']; ?> ">
                       <label for="nonmbre">Nombre</label>
                     </div>
                           </div>
                          


                   <div class="row">
                     <div class="input-field col s12">
                       <input id="apellidos" type="text" class="validate" name="apellidos" value="<?php echo $result['apellidos']; ?>">
                       <label for="apellidos">apellidos</label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="poblacion" type="text" class="validate" name="poblacion" value="<?php echo $result['poblacion']; ?>">
                       <label for="poblacion">Poblacionr</label>
                     </div>
                   </div>
                    <div class="row">
                     <div class="input-field col s12">
                       <input id="dni" type="text" class="validate" name="dni" value="<?php echo $result['dni']; ?>">
                       <label for="dni">dniColor</label>
                     </div>
                   </div>
                    <div class="row">
                     <div class="input-field col s12">
                       <input id="email" type="text" class="validate" name="email" value="<?php echo $result['email']; ?>">
                       <label for="email">emailr</label>
                     </div>
                   </div>
                   

                   
                   
                     <div class="row">
                     <div class="col s6">
                      <a id="modificarUsuario" class="waves-effect waves-light btn-small"><i class="material-icons left">done</i></a>

                       

                     </div>
                      <div class="col s6">
                        <a  href="principal3.php" class="waves-effect waves-light btn-small"><i class="material-icons left">exit_to_app</i></a>

                     </div>
                     
                   </div>
                   </div>
                   
                   </div>
                   
                       

                   
                   </form>
         </div>
         
             </body>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
      
        $("#modificarUsuario").click(function(){
        
        
       var ide1=$("#id1").val();
      var nombre1=$("#nombre").val();
      var apellidos1=$("#apellidos").val();
      var poblacion1=$("#poblacion").val();
      var dni1=$("#dni").val();
       var email1=$("#email").val();

        var jqxhr = $.post( "usuarios.php",{id1: ide1, nombre: nombre1, apellidos: apellidos1, poblacion: poblacion1, dni: dni1, email: email1,  usuarioupdate:"insertar"},
            function(data) {
  alert( "success" );
    $("#listado2").hide();
      $("#listado").show();
          $("#altas").show();
})
 
  
    
   });


    </script>
</html>      

     
    
   