<?php
 $conn = new mysqli("localhost", "desarrollador", "adsi2017", "citas" ) ;
 if( $conn->connect_errno) {
 echo "Falla al conectarse a Mysql ( ". $conn->connect_errno . ") " .
 $conn->connect_error ;
 } else {
 echo $conn->host_info. "\n" ;
 } ;
 ?>