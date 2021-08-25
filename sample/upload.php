<?php
class data{
 public $link='';
 function __construct($Temperature, $Humidity, $DustDensity, $Moisture_percentage, $Uv_level, $Uv_intensity){
  $this->connect();
  $this->storeInDB($Temperature, $Humidity, $DustDensity, $Moisture_percentage, $Uv_level, $Uv_intensity);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'datacollection') or die('Cannot select the DB');
 }
 
 function storeInDB($Temperature, $Humidity, $DustDensity, $Moisture_percentage, $Uv_level, $Uv_intensity){
  $query = "insert into sensor_data set Temperature='".$Temperature."', Humidity='".$Humidity."', DustDensity='".$DustDensity."', Moisture_percentage='".$Moisture_percentage."', Uv_level='".$Uv_level."', Uv_intensity='".$Uv_intensity."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['Temperature'] != '' and  $_GET['Humidity'] != '' and $_GET['DustDensity'] !='' and $_GET['Moisture_percentage'] !='' and $_GET['Uv_level'] !='' and $_GET['Uv_Intensity'] !=''){
 $data=new data($_GET['Temperature'],$_GET['Humidity'],$_GET['DustDensity'],$_GET['Moisture_percentage'],$_GET['Uv_level'],$_GET['Uv_Intensity']);
}


?>