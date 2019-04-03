<?php 
     include_once 'modelo_autos.php';


     $id= $_POST['codigo'];
     $conn=new Crud;

     $conn->BorrarDatos($id);
    


?>