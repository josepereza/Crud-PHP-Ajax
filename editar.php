<?php 
           include_once 'modelo_autos.php';


           $id= $_POST['id'];
           $tabla="marcas2";
           $conn=new Crud;

           $result =$conn->ConsultaDatos($id,$tabla);
    

if (isset($_POST['boton'])){

    $buscar=$_POST['buscar'];
    $consulta="select * from marcas2 where nombre like '%" . $buscar . "%' or color like '%" . $buscar . "%'";

}else {
    $consulta="select * from marcas2";
}

if (isset($_POST['update'])) {
    //Recogemos las claves enviadas
    $id = $_POST['id'];

    $nombre = $_POST['nombre'];
    $potencia = $_POST['potencia'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
   
   
    $conn->UpdateDatos($id,$nombre,$potencia,$color,$precio);
   
   
    
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
          

          <div class="row">
        
                <form  class="form-inline">

                        <div class="row">
                         <div class="col s12 m12">
                                    <div class="card purple lighten-5" style="padding:50px;">
                     <div class="card-content center-align">
                     <span class="card-title align-text">Editar</span>


                     <div class="row">
                     <div class="input-field col s12">
                       <input id="i1" type="text" name="id1" value="<?php echo $result['id']; ?>"  readonly="readonly" >
                       <label for="id1">Id</label>
                     </div>
                           </div>    
                     
                         <div class="row">
                     <div class="input-field col s12">
                       <input id="n1" type="text" class="validate" name="nombre" value="<?php echo $result['nombre']; ?> ">
                       <label for="n1">Nombre</label>
                     </div>
                           </div>
                          


                   <div class="row">
                     <div class="input-field col s12">
                       <input id="po1" type="text" class="validate" name="potencia" value="<?php echo $result['potencia']; ?>">
                       <label for="po1">Potencia</label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="c1" type="text" class="validate" name="color" value="<?php echo $result['color']; ?>">
                       <label for="c1">Color</label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="p1" type="number" step="0.01" class="validate" name="precio" value="<?php echo $result['precio']; ?>">
                       <label for="p1">Precio</label>
                     </div>
                   </div>

                   
                   
                     <div class="row">
                     <div class="input-field col s12">
                       <input class="btn" id="actualizar" type="button" value ="EDITAR" name="update">
                       
                     </div>
                   </div>
                   </div>
                   
                   </div>
                   
                        
                   
                   </form>
         
             </body>

              <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script>
      $("#actualizar").click(function(){
    
        var id1=$("#i1").val();

        var nombre1=$("#n1").val();
      var potencia1=$("#po1").val();
      var color1=$("#c1").val();
      var precio1=$("#p1").val();

      $.post( "editar.php",{id: id1, nombre: nombre1, potencia: potencia1, color: color1, precio: precio1,  update:"update"});
            
  

   $( "#listado" ).load( "lisstado.php" );
   $( "#altas" ).load( "altas.php" );


  
    
    
   });
    </script>
</html>      

     
    
   