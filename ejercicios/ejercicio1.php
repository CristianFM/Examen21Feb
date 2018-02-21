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
//var_dump($arrayProvincias);
foreach($arrayFileMunicipios as $b){
    $municipio = explode("%", $b);

   var_dump($municipio);echo"<br/>";
}


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
//              echo  "<tr><td>".$v[0]."</td><tr>";
        }
        ?>
    </table>
</body>
</html>