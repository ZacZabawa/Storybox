<?php


include_once('geoPHP/geoPHP.inc');

$batchUpload= file_get_contents("tekPoints.kml"); 


$xml = simplexml_load_string($batchUpload);

$dsn="pgsql:host=localhost user=postgres dbname=storybox password=zab3703";


try{
 // create a PostgreSQL database connection
 
  $dbh = new PDO($dsn);
 // display a message if connected to the PostgreSQL successfully
 if($dbh){
 echo "Connected to the <strong>storybox</strong> database successfully!";
 }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}
foreach ($xml -> placemark as $row ) {

	$name = $row -> name;
	$description = $row -> description;
	$point = $row -> point -> coordinates;

 



function kml_to_wkt($point) {
  $geom = geoPHP::load($point,'kml');
  return $geom->out('wkt');
}



$query    = "INSERT INTO tekpoints (name, description, geompoint) 
             VALUES('$name', '$description', '$geom')";






$result = pg_query($query);

if (!$result) {


    die("Error in SQL query: " . pg_last_error());


}


}
?>