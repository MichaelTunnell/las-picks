<?php 

include_once('data.php');
$outputformat = $_GET['of'];

if ($outputformat == "json") {
	echo json_encode($data);
}
if ($outputformat == "php") {
	echo serialize($data);
}
if ($outputformat == "xml") {
	$xml_data = new SimpleXMLElement("<?xml version=\"1.0\"?><laspicks></laspicks>");
	function array_to_xml($data, &$xml_data) {
	    foreach($data as $key => $value) {
	        if(is_array($value)) {
	            if(!is_numeric($key)){
	                $subnode = $xml_data->addChild("$key");
	                array_to_xml($value, $subnode);
	            }
	            else{
	                $subnode = $xml_data->addChild("item$key");
	                array_to_xml($value, $subnode);
	            }
	        }
	        else {
	            $xml_data->addChild("$key",htmlspecialchars("$value"));
	        }
	    }
	}
	array_to_xml($data,$xml_data);
	echo htmlspecialchars($xml_data->asXML());
}
?>