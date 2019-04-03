 <?php 
           include_once 'modelo_autos.php';
             $ordenar="";
           if (isset($_POST['boton'])){
  
    $buscar=$_POST['buscar'];
    $consulta="select * from marcas2 where nombre like '%" . $buscar . "%' or color like '%" . $buscar . "%'";

}else {
    $consulta="select * from marcas2 ";
}


 $por_pagina=5;
        if (isset($_POST['pagina'])){

              $buscar=$_POST['buscar'];
              $consulta="select * from marcas2 where nombre like '%" . $buscar . "%' or color like '%" . $buscar . "%'";

            $pagina=$_POST['pagina'];
        }else{
          $pagina=1;  
          $empieza=0;
          $buscar="";
        }
        $empieza=($pagina-1)*$por_pagina;
          
        $consulta2="$consulta limit $empieza, $por_pagina"; 
        if (isset($_POST['vaor'])){
             $numeroordenar=$_POST['ordenar'];

                       switch ($numeroordenar) {
              case 1:
                 $ordenar="order by id";
                  break;
              case 2:
                    $ordenar="order by nombre";
                  break;
              case 3:
                     $ordenar="order by  potencia";
                  break;
               case 4:
                     $ordenar="order by color";
                  break;
               case 5:
                     $ordenar="order by precio";
                  break;      
          }

             
           }else $ordenar="order by nombre";

            $consulta2="$consulta $ordenar limit $empieza, $por_pagina"; 

  ?>         
<div class="card pink lighten-4">
                    <div class="card-content black-text">
                    <span class="card-title center">Listado de Autos</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                     I am convenient because I require little markup to use effectively.</p>
                    <table>
                    <thead>
                    <tr>
                    <?php 
                   
                                  echo"<th><a href='javascript:ordenar(1);'>Id</a></th>";
                                  echo"<th><a href='javascript:ordenar(2);'>Nombre</a></th>";
                                  echo"<th><a href='javascript:ordenar(3);'>Potencia</a></th>";
                                  echo"<th><a href='javascript:ordenar(4);'>Color</a></th>";
                                  echo"<th><a href='javascript:ordenar(5);'>Precior</a></th>";
                                  // echo"<th> <a href='#' onclick=ordenar('$prueba');> Precio</a></th>";
                                 
                                     ?>
                                    
                                </tr>
                            </thead> 
                    <?php  
                             
                        $conn=new Crud;
                        
                         $count = $conn->conexion->prepare("select count(*) as numero from marcas2 where nombre like '%" . $buscar . "%' or color like '%" . $buscar . "%'");
                        $count->execute();
                        $row = $count->fetch();
                        $numreg=$row["numero"];


                        $total_paginas=ceil($numreg/$por_pagina);
                        //echo " se han encontraodo $total_paginas paginas  y $numreg registros";
                        $conn->leerDatos($consulta2);
                        $matrizAutos=$conn->rows;
                        foreach ($matrizAutos as $fila){ ?>    

                           <tbody>
                                <tr>
                                <td><?php echo $fila["id"]?></td>
                                <td><?php echo $fila["nombre"]?></td>
                                <td><?php echo $fila["potencia"]?></td>
                                <td><?php echo $fila["color"] ?></td>
                                <td id="precio"><?php echo $fila["precio"] ?></td>
                                
                               <td width=14% style='text-align:right;'><a href="javascript:editar(<?php echo $fila['id']?>);" ><i class='material-icons'>edit</i></a></td> 
                                <td><a href='javascript:borrar(<?php echo $fila['id']?>);'> <i class='material-icons'>delete</i></a></td> 
                                </tr>
                        </tbody>


                <?php } ?> </table>


                        <?php
         $numeroordenar=0;
         echo "<a href='javascript:pagina(1,$numeroordenar);'>".'Primera '. "</a>";
         for ($i=1; $i <=$total_paginas; $i++){

             echo "<a href='javascript:pagina($i,$numeroordenar);' style='padding:7px;'>".$i." "."</a>";
       }

             echo "<a href='javascript:pagina($total_paginas,$numeroordenar);'>".' Ultima '. "</a>";
          ?>

                 
                    </div>
                    
                </div>


   