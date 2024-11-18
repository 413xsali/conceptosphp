if($resultado = $conn->query("select codigo, nombre from ciudades ") ){

 while($registro = $resultado->fetch_object() ){

 echo $registro->codigo . " " . $registro->nombre . "\n" ;

 } ;
 };