<?php
session_start();
$log_id=$_SESSION['log_id'];
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$errors = array();

$log_id = $_SESSION['log_id'];
$getdetails = "SELECT * FROM tbl_stud_register WHERE login_id = $log_id";
$result = mysqli_query($db, $getdetails);
$row = mysqli_fetch_assoc($result);
$item1 = $row['stud_item_1'];
$item2 = $row['stud_item_2'];

$_SESSION['current_date'] = date("y-m-d");
$current_date = date("y-m-d");
$_SESSION['monday'] = date('y-m-d', strtotime($current_date. ' + 1 days'));
$_SESSION['wednesday'] = date('y-m-d', strtotime($current_date. ' + 3 days'));
$_SESSION['friday'] =  date('y-m-d', strtotime($current_date. ' + 5 days'));
$_SESSION['tuesday'] = date('y-m-d', strtotime($current_date. ' + 2 days'));
$_SESSION['thursday'] = date('y-m-d', strtotime($current_date. ' + 4 days'));
$_SESSION['saturday'] =  date('y-m-d', strtotime($current_date. ' + 6 days'));

$monday = date('y-m-d', strtotime($current_date. ' + 1 days'));
$wednesday = date('y-m-d', strtotime($current_date. ' + 3 days'));
$friday = date('y-m-d', strtotime($current_date. ' + 5 days'));
$tuesday = date('y-m-d', strtotime($current_date. ' + 2 days'));
$thursday = date('y-m-d', strtotime($current_date. ' + 4 days'));
$saturday = date('y-m-d', strtotime($current_date. ' + 6 days'));
// $log_id = $_SESSION['log_id'];
if (isset($_POST['submit'])) {
    $_SESSION['batchA'] = $_POST['stud_batchA'];
    $_SESSION['batchB'] = $_POST['stud_batchB'];
    $_SESSION['time1'] = $_POST['stud_time1'];
    $_SESSION['time2'] =  $_POST['stud_time2'];
    $_SESSION['time3'] = $_POST['stud_time3'];
    $_SESSION['time4'] =  $_POST['stud_time4'];
    $batchA = $_POST['stud_batchA'];
    $batchB = $_POST['stud_batchB'];
    $time1 = $_POST['stud_time1'];
    $time2 =  $_POST['stud_time2'];
    $time3 = $_POST['stud_time3'];
    $time4 =  $_POST['stud_time4'];
    

    // $query9 = "INSERT INTO tbl_temp_date(login_id, date2) VALUES('$log_id','$monday'), ('$log_id','$wednesday'),('$log_id','$friday'),('$log_id','$tuesday'), ('$log_id','$thursday'),('$log_id','$saturday')";
    // $queryresult9 = mysqli_query($db,$query9);
    // if($queryresult9){
    // $stud = "SELECT distinct date1 from tbl_stud_schedule WHERE login_id = '$log_id'";
    // $result = mysqli_query($db,$stud);
    // while($row = mysqli_fetch_array($result)){
    //   $date = $row['date1'];
    //   $getdates = mysqli_query($db, "SELECT date2 FROM tbl_temp_date WHERE login_id='$log_id' && date2='$date'");
    //   if($getdates == 0){

      
    
    
    // echo"<script Type='text/javascript'>alert('$current_date')</script>";
    // echo"<script Type='text/javascript'>alert('$monday')</script>";
    // echo"<script Type='text/javascript'>alert('$friday')</script>";
    // echo $saturday;
    if(($time1 != 'Morning' || $time1 != 'Evening') && ($time2 != 'Morning' || $time2 != 'Evening') && ($time3 != 'Morning' || $time3 != 'Evening') && ($time4 != 'Morning' || $time4 != 'Evening') &&($batchA == 'MWF' || $batchA == 'TTS') && ($batchB == 'MMF' || $batchB == 'TTS')){
    if (count($errors) == 0 && $batchA == 'MWF') {
      //$query = "INSERT INTO tbl_stud_schedule(schedule, login_id, batch1, batch2) VALUES($_SESSION['monday'],$_SESSION['log_id'],$_SESSION[time1],$_SESSION[time2]),($_SESSION['wednesday'],$_SESSION['log_id'],$_SESSION[time1],$_SESSION[time2]),($_SESSION['friday'],$_SESSION['log_id'],$_SESSION[time1],$_SESSION[time2])";
      $query = "INSERT INTO tbl_stud_schedule(date1, login_id, event1, stud_time_morn, stud_time_eve) VALUES('$monday','$log_id','$item1','$time1','$time2'), ('$wednesday','$log_id','$item1','$time1','$time2'),('$friday','$log_id','$item1','$time1','$time2')";
      $queryresult = mysqli_query($db,$query);
      if($queryresult){
        echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
        echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
      }
      
    }
    elseif($batchA == 'TTS'){
      $query = "INSERT INTO tbl_stud_schedule(date1, login_id,event1, stud_time_morn, stud_time_eve)VALUES ('$tuesday','$log_id','$item1','$time3','$time4'), ('$thursday','$log_id','$item1','$time3','$time4'),('$saturday','$log_id','$item1','$time3','$time4')";
      $queryresult = mysqli_query($db,$query);
      if($queryresult){
        echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
        echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
      }
      
    }
    else {
      echo"<script Type='text/javascript'>alert('Please choose the required days')</script>";
      echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
    } 

    if($batchB == 'MWF'){
      $query = "INSERT INTO tbl_stud_schedule(date1, login_id, event1, stud_time_morn, stud_time_eve)VALUES('$monday','$log_id','$item2','$time1','$time2'), ('$wednesday','$log_id','$item2','$time1','$time2'),('$friday','$log_id','$item2','$time1','$time2')";
      $queryresult = mysqli_query($db,$query);
      if($queryresult){
        echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
        echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
      }
      
    }
    

    elseif($batchB == 'TTS'){
      $query = "INSERT INTO tbl_stud_schedule(date1, login_id, event1, stud_time_morn, stud_time_eve)VALUES ('$tuesday','$log_id','$item2','$time3','$time4'), ('$thursday','$log_id','$item2','$time3','$time4'),('$saturday','$log_id','$item2','$time3','$time4')";
      $queryresult = mysqli_query($db,$query);
      if($queryresult){
        echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
        echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
      }
      
    }
    else {
      echo"<script Type='text/javascript'>alert('Schedule Unsuccessfull')</script>";
      echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
    } 
  // echo"<script Type='text/javascript'>alert('$time1')</script>";
    
  }else{
      echo"<script Type='text/javascript'>alert('Please select atleast one time from each event')</script>";
      echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";

    }
    
  // }else{
  //       echo"<script Type='text/javascript'>alert('You have already scheduled. Please wait until next schedule')</script>";
  //       echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";

  //     }
  //   }

  //   }else{
  //     echo"<script Type='text/javascript'>alert('Couldn't')</script>";
  //     echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";


  //   }
    // $selectstud=mysqli_query($db, "TRUNCATE table tbl_temp_date");
    

  
    
}else{
  $_SESSION['batchC'] = $_POST['stud_batchC'];
  $_SESSION['time5'] = $_POST['stud_time5'];
  $_SESSION['time5'] = 'Nil';
  $batchC = $_POST['stud_batchC'];
  $time5 = $_POST['stud_time5'];
  // $time6 = 'Nil'
  // if(($batchC != 'MTWTFS') && ($time5 != 'Morning' or $time5 != 'Evening')){
    if($batchC == 'MTWTFS' && $time5 == 'Morning'){
      $query = "INSERT INTO tbl_stud_schedule(date1, login_id, event1, stud_time_morn, stud_time_eve)VALUES('$monday','$log_id','$item1','$time5','Nil'), ('$tuesday','$log_id','$item1','$time5','Nil'),('$wednesday','$log_id','$item1','$time5','Nil'),('$thursday','$log_id','$item1','$time5','Nil'), ('$friday','$log_id','$item1','$time5','Nil'),('$saturday','$log_id','$item1','$time5','Nil')";
      $queryresult = mysqli_query($db,$query);
    }
    else{
      $query = "INSERT INTO tbl_stud_schedule(date1, login_id, event1, stud_time_morn, stud_time_eve)VALUES('$monday','$log_id','$item1','Nil','$time5'), ('$tuesday','$log_id','$item1','Nil','$time5'),('$wednesday','$log_id','$item1','Nil','$time5'),('$thursday','$log_id','$item1','Nil','$time5'), ('$friday','$log_id','$item1','Nil','$time5'),('$saturday','$log_id','$item1','Nil','$time5')";
      $queryresult = mysqli_query($db,$query);
    }
      
    if($queryresult){
      echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
      echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
    }
    else{
      echo"<script Type='text/javascript'>alert('Schedule Unsuccessfull')</script>";
      echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
    }
  // }else{
  //   echo"<script Type='text/javascript'>alert('Please choose correct date and time')</script>";
  //   echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
  // }   
}

