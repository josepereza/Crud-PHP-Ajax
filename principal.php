
<?php 

session_start();

if(isset($_POST["n"])){

  if(($_POST["n"] == "jose" && $_POST["p"] =="1234")  || ($_POST["n"] == "eli" && $_POST["p"] =="12345"))

  {

$_SESSION["n"]=$_POST["n"];

  } 



}
    if (!isset($_SESSION["n"]))
      exit("<p> Kein Zugang <br><a href='index.php'>"
        . "zum Login</a></p>");

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Your custom styles 
      <link rel="stylesheet" href="css/style.css">
     Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
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
    </style>

  </head>
  <body>
    <header>
            <div class="fondo">

              <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
      
                 <nav class="cyan-tran">
                    <div class="container">
                                        
                  <div class="nav-wrapper">
                  
                      <a href="#" class="brand-logo">LOGO</a>
                      <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
                      <ul class="right hide-on-med-and-down">
                      <li><a href="#">Bajas</a></li>
                      <li><a href="#">Modificaciones</a></li>
                      <li><a href="#">Listado</a></li>
                     
                      <li>
                          
                          
                             
                                <div class="input-field">
                                  <input id="search" type="text" name="buscar" >
                                  <label  for="search"><i class="material-icons">search</i></label>
                                 
                                </div>
                           
                       </li>    
                          
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                 </ul>
                  </div>
                    </div>                    
                    </nav>                
                
                   
                  <ul class="side-nav" id="mobile-menu">
                  <li>
                      <div class="userView">
                      <div class="background">
                          <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg" alt="Background Sidenav">
                      </div>
                      <a href="#!user"><img class="circle" src="http://lorempixel.com/output/people-q-c-640-480-9.jpg" alt="User Image Sidenav"></a>
                      <a href="#!name"><span class="white-text name">John Doe</span></a>
                      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                      </div>
                  </li>
                  <li><a href="#">item1</a></li>
                  <li><a href="#">item2</a></li>
                  <li><a href="#">item3</a></li>
                  <li><a href="#">item4</a></li>
                   <li>
                      
                      
                         
                            <div class="input-field">
                              <input id="search2" type="text" name="buscar" >
                              <label  for="search"><i class="material-icons">search</i></label>
                              <button id="buscamovil" class="btn waves-effect waves-light" 
                              <i class="material-icons right">send</i>
                               </button>
                             
                            </div>
                       
                       
                      
                  </li>
                  </ul>
                                
                             
                  
        <div  class="section start">

                <div class="container white-text center-align">
                    <br>

                    <h3>MANTENIMENTO</h3>
                    <h3>BASE DE DATOS</h3>
                    <a  class="waves-effect waves-light btn start"  href="altas.php">Get started</a>

                </div>



        </div>
        </div>
                    
    </header>
      <main>
      <!-- Your content here -->
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
                                   
                        </div>
                   
             

                   <div id="listado" class="col s12 m7">
                
                </div>
                



      </div>
      </div>
      <a href="http://www.kqzyfj.com/click-8808767-13484397" target="_top">
<img src="http://www.tqlkg.com/image-8808767-13484397" width="600" height="360" alt="" border="0"/></a>
    </main>
    <footer class="page-footer cyan">
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l6">
            <h5 class="white-text">First Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col s12 m4 l6">
            <h5 class="white-text">Second Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2017 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
    <!-- jQuery CDN -->
          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

     
    <script>
     function borrar(bo){
        
          var jqxhr = $.post( "borrar.php",{codigo: bo},
            function(data) {
  alert( "Borrado registro " + bo );
})
   
     $( "#listado" ).load( "lisstado.php" );
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

           var jqxhr = $.post( "lisstado.php",{pagina: pa, ordenar: vaord, vaor: "si"})
   
    .always(function(data) {
    
    $("#listado").html(data); 
  });
  


      }

         function ordenar(vaord){ 
    
     $.post( "lisstado.php",{ordenar: vaord, vaor: "si"}, function(data) {
    
    $("#listado").html(data); 
  });



  }

      
      $("document").ready(function(){

$(".dropdown-button").dropdown();
      $(".button-collapse").sideNav();
        $( "#listado" ).load( "lisstado.php" );
         $( "#altas" ).load( "altas.php" );

        $("#start").click(function(){
    $("header").css("height", "0vh");
    $(".fondo").css("height", "0vh");
    $(".start").hide();
  });







      });
    </script>
  </body>
</html>