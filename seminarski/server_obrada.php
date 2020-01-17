<?php
include "konekcija.php";
 
$table = $db_table;
$primaryKey = 'testemonialID';

$columns = array(
array(
        'db' => 'testemonialID',
        'dt' => 'DT_RowId',
        'formatter' => function( $d, $row ) {
            return $d;
        }
      ),
      array( 'db' => 'testemonialID',     'dt' => 0 ),
    array( 'db' => 'ime',  'dt' => 1 ),
    array( 'db' => 'text',   'dt' => 2 ),
    array( 'db' => 'slika',     'dt' => 3 ),
    
);

$sql_details = array(
    'user' => $db_user,
    'pass' => $db_pass,
    'db'   => $db_db,
    'host' => $db_server
);
require( 'DataTables-1.10.4/examples/server_side/scripts/ssp.class.php' );

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
 ?>