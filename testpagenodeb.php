<?php include('server.php')?>
<!DOCTYPE HTML>
<html>
        <head>
			<title>DHT11 SENSOR VALUES </title>
			<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="templated-projection/assets/css/main.css" />
        </head>



<body>
<?php 
$flag=0;
$loginname=($_SESSION['username']);
$username_query="select node_a from access where USER_ID='$loginname'";
$result_r = mysqli_query($dbname,$username_query)->fetch_array()[0] ?? '';
if($result_r == "yes"){
?>  
    <p><strong><span class="fa fa-user"> </span><?php echo $_SESSION['username'];?>'s Node B</strong></p>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">ID</th>
								<th class="column100 column2" data-column="column2">humidity</th>
								<th class="column100 column3" data-column="column3">temperature</th>
								<th class="column100 column4" data-column="column4">Date</th>
							</tr>
                      </thread>
                  <?php   
                       
		                         $name1 = mysqli_connect('localhost','root','',$loginname);
		                         $result = mysqli_query($name1,"SELECT * from node_b");
		                         if (!$result) {
                                 echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
                                 exit;
                                  }

                                 if (mysqli_num_rows($result) == 0) {
                                 echo "No rows found, nothing to print";
                                 exit;
                                  }
		                        while($rows=mysqli_fetch_assoc($result)) 
		                        { 
		                             ?>          <tbody>
                                                 <tr> 
				                                 <td class = "column100 column1" data-column="column1"> <?php echo $rows['ID']; ?></td> 
                                                 <td class = "column100 column2" data-column="column2"> <?php echo $rows['Humidity']; ?></td>
                                                 <td class = "column100 column3" data-column="column3"> <?php echo $rows['temperature']; ?></td> 
                                                 <td class = "column100 column4" data-column="column4"> <?php echo $rows['date']; ?></td> 
												 </tr> 
								                </tbody>
	                                 <?php 
                                 } 
			  ?>                      
				</table>
			 </div>
		 </div>
		</div>
	</div>	 

<!--===============================================================================================-->	
<script src="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/bootstrap/js/popper.js"></script>
	<script src="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal/Table_Highlight_Vertical_Horizontal/js/main.js"></script>
    <p><a href="register.php?logout='1'" style="color: red;">Logout</a></p>
    <?php
}
    else{
             ?>  <H1>Sorry you dont have access to this page</H1>   <?php
    }
 ?>   
</body>
</html>
<?php