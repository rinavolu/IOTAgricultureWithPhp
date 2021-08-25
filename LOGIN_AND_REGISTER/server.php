<?php          
$user='Ravindra_111';
               $errors=array();
               session_start();
               $dbname = mysqli_connect('localhost','root','','registration');
               $db_connection_sensor_data= mysqli_connect('localhost','root','','datacollection');
            //   if($dbname)
            //       echo "Connection Perfect";
            //   else
            //       echo "Connection Failed";     
             $sample=array();
             if(isset($_POST['signup'])){
                            $USER_ID=mysqli_real_escape_string($dbname,$_POST['userID']);
                            $name=mysqli_real_escape_string($dbname,$_POST['name']);
                            $emailID=mysqli_real_escape_string($dbname,$_POST['emailID']);
                            $password_1=mysqli_real_escape_string($dbname,$_POST['password_1']);
                            $password_2=mysqli_real_escape_string($dbname,$_POST['password_2']);
                            if(empty($USER_ID)){
                                array_push($errors,"Username is required");
                            }
                            if(empty($name)){
                                array_push($errors,"Name is required");
                            }
                            if(empty($emailID)){
                                array_push($errors,"Email is required");
                            }
                            if(empty($password_1)){
                                array_push($errors,"Username is required");
                            } 
                            if($password_1!=$password_2)
                            {
                                array_push($errors,"Passwords did not matched");
                            }
                            if(count($errors)==0){
                                    $query ="insert into users values('$USER_ID','$name','$emailID','$password_1')";
                                    mysqli_query($dbname,$query);
                                    
                                    $per_query="insert into access set USER_ID = '$USER_ID'";
                                    mysqli_query($dbname,$per_query);
                                  //  $_SESSION['username']=$USER_ID;s
                                  //  $_SESSION['success']="You are now logged in";
                                    header('location: login.php');
                            
                        }
                  }
            if(isset($_POST['register']))
            {
                header('location:register.php');
            }
         //   if(isset($_POST['login'])){
           //                 header('location:login.php');
           //   }
            if(isset($_GET['logout'])){
                            session_destroy();
                            unset($_SESSION['username']);
                            header('location: login.php');
              }
            if(isset($_POST['login'])){
                            $USER_ID=mysqli_real_escape_string($dbname,$_POST['userID']);
                         //   $emailID=mysqli_real_escape_string($dbname,$_POST['emailID']);
                            $password=mysqli_real_escape_string($dbname,$_POST['password']);

                            if(empty($USER_ID)){
                                array_push($errors,"User ID is required ");
                            }
                        //    if(empty($emailID)){
                        //        array_push($errors,"Email is required ");
                       //     }
                            if(empty($password)){
                                array_push($errors,"Password is required ");
                            }
                            $query="select * from users where USER_ID = '$USER_ID' AND password = '$password'";
                            $result=mysqli_query($dbname,$query);
                            if(mysqli_num_rows($result) == 0)
                            {
                                ?>
                               <div style="background-image: url('https://image.shutterstock.com/image-photo/black-background-texture-pattern-all-260nw-425112010.jpg');">
                               <center> 
                               <p style="color:red;" >Password is wrong</p>
                            </center>
                               <div>
                           
                                <?php
                            }
                     if(mysqli_num_rows($result) == 1)
                    {
                             $_SESSION['username']=$USER_ID;
                             $_SESSION['success']="";
                             header('location: menu.php');
                    }
            }


?>