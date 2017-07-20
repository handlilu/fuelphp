<?php
$location = '西安';
$api = 'http://api.map.baidu.com/telematics/v3/weather?location='.urlencode($location).'&output=json&ak=11ffd27d38deda622f51c9d314d46b17';
$html = json_decode(file_get_contents($api));
$results = $html->results ;
$getdate = $html->date;
$output = "<table>";
for( $i =0; $i<count($results);$i++){
    $data[] = (array)$results[$i];
    if( is_array($results[$i]) ){
        $res_data = $results[$i];
        for( $j =0; $j<count($res_data);$j++){
            $results[$i][$j]= (array)$results[$i][$j];
        }
    }
}
echo '<pre>';
var_dump( $data);
echo "<pre>";

