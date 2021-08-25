<?php
class dht11{
 public $link='';
 function __construct($moisture){
  $this->connect();
  $this->storeInDB($moisture);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'temphumdity') or die('Cannot select the DB');
 }
 
 function storeInDB($moisture){
  $query = "insert into soil_moisture set soilmoisture='".$moisture."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['moisture'] != ''){
 $dht11=new dht11($_GET['moisture']);
}


?>