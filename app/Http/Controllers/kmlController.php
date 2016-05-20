<?php 

namespace App\Http\Controllers;
use DB;
use PHP;
use Input;
use Log;
use App\kml;
use Geo;
use Illuminate\Http\Request;

use App\Http\Requests;

class kmlController extends Controller
{
    public function index()
		{
		    return View('kml');
		}

	public function store()
		{
			


		include_once('geoPHP/geoPHP.inc');

		$xml=simplexml_load_file("tekPoints.kml");
		// $batchUpload= file_get_contents("kmlFile"); 
		// $xml = simplexml_load_string($batchUpload);
		$fd=count($xml);
		


			foreach ($xml->Document->Placemark as $coord) {

				$name = $coord -> name;
				$description = $coord -> description;
				$point = $row -> point -> coordinates;
				$coord = (string) $coord->Point->coordinates."<br/>";
   				$args     = explode(",", $coord);
    			$coords[] = array($args[0], $args[1], $args[2]);

				function kml_to_wkt($point) {
				  $geom = geoPHP::load($point,'kml');
				  return $geom->out('wkt');
				}





			// DB::insert('insert into SampleKML (name, description, geompoint) VALUES ('$name', '$description', '$geom')');
				
				
			}
}}




//     
// // log one variable at "info" logging level:
// // int print ( string $name ) ;

// // Log::info("Logging one variable: " . $point);
// 	 // $content = Input::file('kmlFile'); // get the file user sent via POST    
// 	 // $xml = new \SimpleXMLElement($content);
	


//     if( ! $xml = simplexml_load_file('statimc.xml') ) 
//     { 
//         echo 'unable to load XML file'; 
//     } 
//     else 
//     { 
//         echo 'XML file loaded successfully'; 
//     } 

// parseKml($geometry)


// // The entire XML tree as a string:
// // "<element><child>Hello World</child></element>"
// $xml->asXML();

// // Just the child node as a string:
// // "<child>Hello World</child>"
// $xml->child->asXML();



// $xml = simplexml_load_string(Statimc.xml);
    
// $json_string = json_encode(Statimc.xml);
    
// $result_array = json_decode($json_string, TRUE);

// print_r($result_array);


// foreach ($kml->xpath('//Placemark/Point/coordinates') as $kml_coordinates) {
//     sscanf((string) $kml_coordinates, '%f,%f,%f', $latitude, $longitude, $altitude);
//     $coords[] = array($latitude, $longitude, $altitude);
// }

// var_dump($coords);





// foreach ($xml->
//  as $movie) {    
// 	$user = $xml->parse([
// 	    $name = ['uses' => 'kml.document.placemark.name'],
// 	    $description = ['uses' => 'kml.document.placemark..description'],
// 	    $point = ['uses' => 'kml.document.placemark.point.coordinates'],
// 		$placemark = ['uses' => 'kml.document.placemark'],
// 	]);


	
// 	}
