<?php

$arrayFileProvincias = file("../ficheros/comunidades.txt");
$arrayFileMunicipios = file("../ficheros/municipios.txt");

$arrayProvincias = [];
$total=0;
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
    array_push($arrayProvincias[$municipio[2]], [$municipio[1], $municipio[3]]);
}
//var_dump($arrayProvincias["1"]);echo "<br/>";

?>
<html>
<head>
    <link rel="stylesheet" href="../ficheros/estilo.css">
</head>
<body>
    <table>
        <tr>
            <th>Listado de Provincias</th>
            <th>Poblacion</th>
        </tr>
        <?php


        foreach($arrayProvincias as $k => $v){
            $cont=0;
            foreach($v as $key =>$i){
                if(!$cont==0){
                    echo  "<tr><td>" .$v[0]."__".$i[0].":</td><td>".$i[1]."</td>";
                }
                $cont++;
            }
            echo"</td>";
//                foreach($municipios as $p){
//               echo"<td>$p[1]</td>";
//               }
            echo"<tr>";
        }
        echo "<tr><td>total</td><td>".$total."</td></tr>";
        ?>
    </table>
</body>
</html>