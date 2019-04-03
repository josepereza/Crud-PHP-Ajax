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
    
    </style>

  </head>
  <body>
    
      <main>
      <!-- Your content here -->
      
          <?php 
           include_once 'modelo_autos.php';
if (isset($_POST['boton'])){

    $buscar=$_POST['buscar'];
    $consulta="select * from marcas2 where nombre like '%" . $buscar . "%' or color like '%" . $buscar . "%'";

}else {
    $consulta="select * from marcas2";
}

if (isset($_POST['insertar'])) {
    //Recogemos las claves enviadas
    $nombre = $_POST['nombre'];
    $potencia = $_POST['potencia'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];



    
    $conn=new Crud;
    $conn->insertarDatos($nombre,$potencia,$color,$precio);
    
    }


?>


          <div  class="row">
       
                <form  class="form-inline">

                        
                                    <div class="card purple lighten-5" style="padding:50px;">
                     <div class="card-content center-align">
                     <span class="card-title align-text">Altas</span>
                     
                         <div class="row">
                     <div class="input-field col s12">
                       <input id="n1" type="text" class="validate" name="nombre">
                       <label for="n1">Nombre</label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="po1" type="text" class="validate" name="potencia">
                       <label for="po1">Potencia</label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="c1" type="text" class="validate" name="color">
                       <label for="c1">Color</label>
                     </div>
                   </div>
                   
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="p1" type="number" step="0.01" class="validate" name="precio">
                       <label for="p1">Precio</label>
                     </div>
                   </div>
                   
                     <div class="row">
                     <div class="input-field col s12">
                       <input id="alta" type="button" class="btn" name="insertar" value="INSERTAR">
                       
                     </div>
                   </div>
                   </div>
                   
                   </div>
                   
                       
                   
                   </form>

          

                  
                



      </div>
      
    
    </main>
   
    <!-- jQuery CDN -->
          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          <script>
      $("#alta").click(function(){
    
        

      var nombre1=$("#n1").val();
      var potencia1=$("#po1").val();
      var color1=$("#c1").val();
      var precio1=$("#p1").val();

        var jqxhr = $.post( "altas.php",{nombre: nombre1, potencia: potencia1, color: color1, precio: precio1,  insertar:"insertar"},
            function(data) {
  alert( "success" );
})
 
   $( "#listado" ).load( "lisstado.php" );
  
    
   });
    </script>
     
   
  </body>
</html>