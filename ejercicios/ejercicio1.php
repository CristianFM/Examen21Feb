<?php

$arrayFileProvincias = file("../ficheros/comunidades.txt");
$arrayFileMunicipios = file("../ficheros/municipios.txt");

$arrayProvincias = [];
//$cont=0;
foreach($arrayFileProvincias as $a){
    $provincia = explode("%", $a);
    if(!isset($arrayProvincias[$provincia[0]])){
        $arrayProvincias[$provincia[0]] = [];
    }
    array_push($arrayProvincias[$provincia[0]], $provincia[1]);
}
//var_dump($arrayProvincias);
foreach($arrayFileMunicipios as $b){
    $municipio = explode("%", $b);
//    $cont++;
    array_push($arrayProvincias[$municipio[2]], $municipio[1], $municipio[3]);
}
//var_dump($arrayProvincias);echo "<br/>";


?>
<html>
<head>

</head>
<body>
    <table>
        <tr>
            <th>Listado de Provincias</th>
            <th>Poblacion</th>
        </tr>
        <?php

        foreach($arrayProvincias as $k => $v){
              echo  "<tr><td>" .$v[0]."__Municipios:";
              $municipios = $v;
            foreach($municipios as $i){
                echo $i.", ";
            }

            echo"</td>";
               foreach($municipios as $p){
               echo"<td>$p[1]</td>";
               }
            echo"<tr>";

        }
        ?>
    </table>
</body>
</html>