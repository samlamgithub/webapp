<?php
    echo "Hello World";
    echo "\n";
    echo 'Current PHP version: ' . phpversion();

    //$dbconn = pg_connect("dbname=mary");
//connect to a database named "mary"

//$dbconn2 = pg_connect("host=localhost port=5432 dbname=mary");
// connect to a database named "mary" on "localhost" at port "5432"

//$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
//connect to a database named "mary" on the host "sheep" with a username and password

$conn_string = "host=db.doc.ic.ac.uk port=5432 dbname=g1427141_u user=g1427141_u password=BhNt16JkU5";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password

//$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8
?>