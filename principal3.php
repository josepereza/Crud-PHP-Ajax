<!DOCTYPE html>
  <html>
    <head>
      <title>Crud PHP javascript jquery-ajax-paginacion-sesiones</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
     <style>
     .cyan-tran {

        background-color: rgba(37, 197, 218, 0.24);

     }

     header {
         background-image: url('https://comocrearun.org/wp-content/uploads/2016/10/base-de-datos.jpg');
         background-attachment: fixed;
       
         height:50vh;
              }
     .fondo {
            background-color: rgba(12, 44, 100, 0.85);
            height:50vh;
     }

     #precio{
        text-align:right;

     }
     .jumbotron {
 width: 60% !important;
  background-color: rgba(11, 44, 100, 0.65);
  padding: 10px;
  margin:auto;
  

     }
    
     

    </style>
    <body>
       <?php 

session_start();



$pdo = new PDO('mysql:host=localhost;dbname=automoviles', 'root', '3266root');


if(isset($_POST['nombre'])){

   $nombre = trim($_POST['nombre']);
    $password = $_POST['password'];
    //$id=$_POST['id'];
   
    
    $statement = $pdo->prepare("SELECT * FROM usuarios WHERE password = :password and nombre= :nombre");
    $result = $statement->execute(array('password' => $password,
    												  'nombre' => $nombre));
    $user = $statement->fetch();
    
   
   if (trim($user['nombre']) == $nombre)
		
  {

$_SESSION['nombre']=$user['nombre'];
$_SESSION["id"]=$user["id"];

  } 


}
    if (!isset($_SESSION['nombre'])){
      echo  '<div class="container center-align">';
      echo '<br>';
      echo '<br>';
      echo '<h2>ACCESO RESTRINGIDO</h2>';
      echo '<br>';
      echo '<br>';
    
      exit("<h3> Kein Zugang <br><a class='btn' href='index.php'>"
        . "zum Login</a></h3>");
			
        
        }
      echo '</div>';
       
?>

    <header>
      <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a onclick="usuarios(<?php echo $_SESSION['id'] ?>)";>Editar</a></li>
  <li><a   onclick="logoff();" >Logoff</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
      
       <nav>
    <div class="nav-wrapper">
     <div class="container">
        <a href="#!" class="brand-logo">Logo</a>
        <a id="dropdownNombre" class="dropdown-trigger right" href="#!" data-target="dropdown1"><?php echo $_SESSION["nombre"] ?><i class="material-icons right">arrow_drop_down</i></a>
       
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li> 
          <div class="input-field">
                    <input id="search" type="text" name="buscar" >
                    <label  for="search"><i class="material-icons">search</i></label>
                   
               </div></li>
       
      </ul>
            
     </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li> <div class="input-field">
                    <input id="search2" type="text" name="buscar" >
                    <label  for="search2"><i class="material-icons">search</i></label>
                    <button id="buscamovil" class="btn waves-effect waves-light" >
                              <i class="material-icons right">send</i>
                               </button>
                   
               </div></li>
  </ul>
          
        <div class="container white-text center-align">
                    <br>

                       <div class="jumbotron center-align " >


                          <h3 style="font-size:4vw;">MANTENIMENTO</h3>
                    <h3>BASE DE DATOS</h3>
                    <a  class="waves-effect waves-light btn start " onclick="empezar();" >Get started</a>

                      </div>
                </div>


    </header>


   
       
<main>
         <div class="container">
 <?php 
           include_once 'modelo_autos.php';
if (isset($_POST['boton'])){

    $buscar=$_POST['buscar'];
    $consulta="select * from marcas2 where nombre like '%" . $buscar . "%' or color like '%" . $buscar . "%'";

}else {
    $consulta="select * from marcas2";
}

$prueba="cajgo en caja";
?>


          <div  class="row">
       
               

                  <div id="altas" class="col s12 m5">
                         <?php include_once 'altas.php';?>

                  </div>
             
             

                   <div id="listado" class="col s12 m7">
                                 
                       <?php include_once 'lisstado.php';?>

                </div>

                 <div id="listado2" class="col s12 m12">
                                 

                </div>
         

      </div>
      </div>
     
      </main>
      <!--JavaScript at end of body for optimized loading-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script >
      $( document ).ready(function() {

       // $("#empezar").click(function(event) {
         //$("#listado").load('lisstado.php');
         //$("#altas").load('altas.php');
        //});


        $('.sidenav').sidenav();

          $(".dropdown-trigger").dropdown();


         
      });


    </script>

       <script> 
        function empezar(){
           $("#listado2").hide();
          $("#listado").show();
          $("#altas").show();
         
          
        }
          $("#dropdownNombre").click(function(event) {
             $("#listado2").show();
          $("#listado").hide();
          $("#altas").hide();
        });
       
        
     </script>

  

    <script>



     function logoff(){
     
    location.href="logoff.php";}


     function borrar(bo){
        
          var jqxhr = $.post( "borrar.php",{codigo: bo},
            function(data) {
  alert( "Borrado registro " + bo );
})
   
     //$( "#listado" ).load( "lisstado.php" );
      ordenar(1);
  }


   function editar(bo){
        
       $.post( "editar.php",{id: bo}, function(data) {
   
    $("#altas").html(data);

  });
    
  }

 $("#search").keypress(function(event){
    if ( event.which == 13 ) {
     
      // var pato=document.formulario.buscar.value;  
      // var moto=document.formulario.marcamoto.value;  
      
      var pato=$("#search").val();
      
      
        
        $.post("lisstado.php", {buscar: pato, boton:"boton"}, function(htmlexterno){
$("#listado").html(htmlexterno);
        
        });
        
    }
});


$("#buscamovil").on('click', function(){
   var pato=$("#search2").val();
    $.post("lisstado.php", {buscar: pato, boton:"boton"}, function(htmlexterno){
$("#listado").html(htmlexterno);



});
});



      function pagina(pa, vaord){
        var pato=$("#search").val();
      

           var jqxhr = $.post( "lisstado.php",{pagina: pa, ordenar: vaord, buscar:pato, vaor: "si"})
   
    .always(function(data) {
    
    $("#listado").html(data); 
  });
  


      }

         function ordenar(vaord){ 
    
     $.post( "lisstado.php",{ordenar: vaord, vaor: "si"}, function(data) {
    
    $("#listado").html(data); 
  });



  }

      $("#alta").click(function(){
    
        

      var nombre1=$("#n1").val();
      var potencia1=$("#po1").val();
      var color1=$("#c1").val();
      var precio1=$("#p1").val();

        var jqxhr = $.post( "altas.php",{nombre: nombre1, potencia: potencia1, color: color1, precio: precio1,  insertar:"insertar"},
            function(data) {
  alert( "success" );
})
 
   //$( "#listado" ).load( "lisstado.php" );
   ordenar(1);
  
    
   });



        
    function prueba(){ 
    
   
    $("#listado2").load("altas.php"); 
  };



   function usuarios(vaord){ 
    
     $.get( "usuarios.php",{numid: vaord}, function(data) {
    
    $("#listado2").html(data); 
  });



  }

    </script>
   
    


    </body>
  </html>
        