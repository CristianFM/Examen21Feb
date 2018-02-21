<?php

$arrayFileProvincias = file("../ficheros/comunidades.txt");
$arrayFileMunicipios = file("../ficheros/municipios.txt");
$arrayProvincias = [];


foreach($arrayFileProvincias as $a){
    $provincia = explode("%", $a);
    if(!isset($arrayProvincias[$provincia[0]])){
        $arrayProvincias[$provincia[0]] = [];
    }
    array_push($arrayProvincias[$provincia[0]], $provincia[1]);
}
foreach($arrayFileMunicipios as $b){
    $municipio = explode("%", $b);
    array_push($arrayProvincias[$municipio[2]], [$municipio[1], $municipio[3]]);
}

$prueba = 50;
$pruebaNumero = ($prueba);

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
        $total=0;
        $totalProvincia=0;
        foreach($arrayProvincias as $k => $v){
            $cont=0;
            echo "<tr><td style='font-size:20px;font-weight:bold;'>.$v[0].</td><td></td></tr>";
            foreach($v as $key =>$i){
                if(is_numeric(trim($i[1]))){
                    $numeroASumar= trim($i[1]);

                    $totalProvincia += $numeroASumar;
                    $total += $numeroASumar;
                }
                if(!$cont==0){
                    echo  "<tr><td>" .$v[0]."__".$i[0].":</td><td>".$i[1]."</td></tr>";
                }
                $cont++;
            }
            echo "<tr><td style='font-size:15px;'>Total Provincia</td><td>$totalProvincia</td></tr>";
        }
        echo "<tr><td style='font-size:20px;font-weight:bolder;'>Total España</td><td>".$total."</td></tr>";
        ?>
    </table>
</body>
</html>