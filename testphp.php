<?php
    echo "Hello World";
    echo "\n";
    echo 'Current PHP version: ' . phpversion();
    echo "\n";

    //$dbconn = pg_connect("dbname=mary");
//connect to a database named "mary"

//$dbconn2 = pg_connect("host=localhost port=5432 dbname=mary");
// connect to a database named "mary" on "localhost" at port "5432"

//$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
//connect to a database named "mary" on the host "sheep" with a username and password

$conn_string = "host=db.doc.ic.ac.uk port=5432 dbname=g1427141_u user=g1427141_u password=BhNt16JkU5";
$dbconn4 = pg_connect($conn_string);
 if(!$dbconn4)
    {
      throw new Exception("Database Connection Error");
    } else{
    	echo "Connected to postgre SQL database\n";
    }
    $result = pg_exec($dbconn4, "select * from weather");
  $numrows = pg_numrows($result);
  echo "number of rows: ", $numrows, "\n";
 $numfie =pg_numfields($result);   
echo "number of column: ", $numfie, "\n";
   for ($row = 0; $row < pg_numrows($result); $row++) {     
   

        $fullname = pg_result($result, $row, 'city') . " ";        

        $fullname .= pg_result($result, $row, 'date') . " ";        

        echo $fullname;      

             
echo " \n";

}

//$myarray = array();
//while ($row = pg_fetch_row($result)) {
  //$myarray[] = $row;
//}

//echo json_encode($myarray);

$resultArray = pg_fetch_all($result);
echo json_encode($resultArray);
//$response['posts'] = $posts;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($resultArray));
fclose($fp);
  //  $row = pg_fetch_array($result, 0);
 //   echo $row["fname"], "\n";
 //echo  $row["lname"], "\n";
 //echo $row["id"], "\n";
//connect to a database named "test" on the host "sheep" with a username and password
echo " \n";
//$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8
pg_free_result($result);
    pg_close($conn_string);
?>