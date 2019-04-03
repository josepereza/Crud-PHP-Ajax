<?php

class Conexion{

    public function conectar(){
        try {
            $conexion=new PDO('mysql:host=localhost; dbname=automoviles', 'root','123456');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");


        } catch (Exception $e){

                die("Error" . $e->getMessage());
                echo "Linea del error" . $e->getLine();
        }
        return $conexion;

    }    
}

class Crud {
    public $conexion;
    public $rows;
    public $result;

    function __construct(){
        $model = new Conexion;
        $this->conexion = $model->conectar();


    }

    function leerDatos($consulta) {

        $sql=$consulta;
        try {
            $sentencia = $this->conexion->query($sql);
            $row=$sentencia->fetchAll();
            foreach ($row as $fila){
                  $this->rows[]= $fila;  

            }
            $sentencia = null;

        }
         catch (PDOException $e) {
             print $e->getMessage();
         }

    }

    function insertarDatos($nombre, $potencia, $color, $precio) {

        $sql="insert into marcas2(nombre,potencia,color,precio) values (:nombre, :potencia, :color, :precio )";

      try{  
        $sentencia=$this->conexion->prepare($sql);

        $sentencia->bindValue(':nombre', $nombre);
        $sentencia->bindValue(':potencia', $potencia);
        $sentencia->bindValue(':color', $color);
        $sentencia->bindValue(':precio', $precio);

        $sentencia->execute();
        $sentencia = null;


    }
    catch (PDOException $e) {
        print $e->getMessage();
    }
}


function ConsultaDatos($id,$tabla) {

    $sql="SELECT * FROM $tabla WHERE  id= :id";

  try{  
    $sentencia=$this->conexion->prepare($sql);
    
    $sentencia->bindValue(":id" , $id);


    
    $sentencia->execute();
    $result= $sentencia->fetch(PDO::FETCH_ASSOC);
    return $result;


}
catch (PDOException $e) {
    print $e->getMessage();
}
}    

function UpdateDatos($id, $nombre, $potencia, $color,$precio) {

    $sql="UPDATE  marcas2 SET nombre=:nombre, potencia=:potencia, color=:color, precio=:precio  where id= :id";

  try{  
    $sentencia=$this->conexion->prepare($sql);
    $sentencia->bindValue(":id", "$id");
    $sentencia->bindValue(":nombre", "$nombre");
    $sentencia->bindValue(":potencia", "$potencia");
    $sentencia->bindValue(":color", "$color");
    $sentencia->bindValue(":precio", "$precio");

    
    $sentencia->execute();
    $sentencia = null;


}
catch (PDOException $e) {
    print $e->getMessage();
}
}


function UpdateUsuarios($id, $nombre, $apellidos, $poblacion, $dni, $email) {

    $sql="UPDATE  usuarios SET nombre=:nombre, apellidos=:apellidos, poblacion=:poblacion, dni=:dni, email=:email  where id= :id";
    $nombre=trim($nombre);

  try{  
    $sentencia=$this->conexion->prepare($sql);
    $sentencia->bindValue(":id", "$id");
    $sentencia->bindValue(":nombre", "$nombre");
     $sentencia->bindValue(":apellidos", "$apellidos");
    $sentencia->bindValue(":poblacion", "$poblacion");
    $sentencia->bindValue(":dni", "$dni");
    $sentencia->bindValue(":email", "$email");

    
    $sentencia->execute();
    $sentencia = null;


}
catch (PDOException $e) {
    print $e->getMessage();
}
}    


function BorrarDatos($id) {

    $sql="DELETE FROM marcas2 WHERE id=:id";

  try{  
    $sentencia=$this->conexion->prepare($sql);

    $sentencia->bindValue(':id', $id);
    

    $sentencia->execute();
    $sentencia = null;


}
catch (PDOException $e) {
    print $e->getMessage();
}
}




}
?>
