if( $resultado = $mysqli->query(“<sentencia sql>”) ) {
echo “La consulta devolvió “. $resultado->num_rows . “ registros”;
} else {
echo “Hubo un error ...” ;
};