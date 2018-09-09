<?php
  header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="estudiantes-' . date("d-m-Y") . '.xls"');
      header('Cache-Control: max-age=0');?>
<table>
    <tr><th>NACIONALIDAD</th><th>IDENTIFICACION</th><th>PRIMER NOMBRE</th><th>SEGUNDO NOMBE</th>
        <th>PRIMER APELLIDO</th><th>SEGUNDO APELLIDO</th><th>GENERO</th><th>TELEFONO</th>
        <th>TELEFONO DE CASA</th><th>TELEFONO DE CONTACTO</th><th>CORREO</th><th>DIRECCION</th>
        <th>ESTADO</th><th>MUNICIPIO</th><th>PARROQUIA</th><th>PNF</th></tr>
<?php

foreach($estudiantes as $data):
    echo "<tr><td>".$data['nacionalidad']."</td><td>".$data['identificacion']."</td>
        <td>".$data['pnombre']."</td><td>".$data['snombre']."</td>
        <td>".$data['papellido']."</td><td>".$data['sapellido']."</td><td>".$data['genero']."</td>
        <td>".$data['telefono']."</td> <td>".$data['tlf_casa']."</td>
        <td>".$data['tlf_contacto']."</td><td>".$data['correo']."</td>
        <td>".$data['direccion']."</td><td>".$data['estado']."</td><td>".$data['municipio']."</td>
        <td>".$data['parroquia']."</td><td>".$data['pnf']."</td></tr>";
endforeach;

?></table>