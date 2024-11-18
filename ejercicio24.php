 $conn = new mysqli("<host>", "<usuario>", "<clave>", "<base_de_datos>" ) ;
 if( $conn->connect_errno ) {
 echo "Falla al conectarse a Mysql ( ". $conn->connect_errno . ") " .
 $conn->connect_error ;
} else {
 echo $conn->host_info. "\n" ;
 } ;