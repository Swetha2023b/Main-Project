<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wizard Sports Academy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css2/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<!-- Custom CSS -->
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<link href="css2/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
function Validstr1() 
    {
        var val = document.getElementById('stud_name').value;
        if (!val.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg').innerHTML="Only alphabets are allowed";
          document.getElementById('stud_name').value = val;
          document.getElementById('stud_name').style.color = "red";
          return false;
          flag=1;
        }
        else if(!val){
            document.getElementById("stud_name").innerHTML="Name Required";
            document.getElementById('stud_name').style.color = "red";
            isValid=false;
        }
        else
        {
          document.getElementById('msg').innerHTML=" ";
          document.getElementById('stud_name').style.color = "green";
          //return true;
        }
    }


    function housenameValidate(){
    var housename = document.getElementById("stud_housenm").value;
    var pattern =  /^[A-Za-z0-9 ]*$/;
    isValid=true;
    if(housename.match(pattern)){
    document.getElementById("studaddressValidate").innerHTML=" ";
    document.getElementById('studaddressValidate').style.color = "green";
    }
    else if(!housename){
    document.getElementById("studaddressValidate").innerHTML="Address Required";
    document.getElementById('studaddressValidate').style.color = "red";
    isValid=false;
    }
    else{
    document.getElementById("studaddressValidate").innerHTML="Only characters are acceptable";
    document.getElementById('studaddressValidate').style.color = "red";
    isValid=false;
    }
    return isValid;
    }

    function areaValidate(){
    var area = document.getElementById("stud_area").value;
    var pattern =  /^[a-zA-Z0-9]+$/;
    isValid=true;
    if(area.match(pattern)){
    document.getElementById("studareaValidate").innerHTML=" ";
    document.getElementById('studareaValidate').style.color = "green";
    }
    else if(!area){
    document.getElementById("studareaValidate").innerHTML="Area Required";
    document.getElementById('studareaValidate').style.color = "red";
    isValid=false;
    }
    else{
    document.getElementById("studareaValidate").innerHTML="Only characters are acceptable";
    document.getElementById('studareaValidate').style.color = "red";
    isValid=false;
    }
    return isValid;
    }

    function cityValidate(){
    var city = document.getElementById("stud_city").value;
    var pattern =  /^[a-zA-Z0-9]+$/;
    isValid=true;
    if(city.match(pattern)){
    document.getElementById("studcityValidate").innerHTML=" ";
    document.getElementById('studcityValidate').style.color = "green";
    }
    else if(!city){
    document.getElementById("studcityValidate").innerHTML="City Required";
    document.getElementById('studcityValidate').style.color = "red";
    isValid=false;
    }
    else{
    document.getElementById("studcityValidate").innerHTML="Only characters are acceptable";
    document.getElementById('studcityValidate').style.color = "red";
    isValid=false;
    }
    return isValid;
    }

    // function stateValidate(){
    // var state = document.getElementById("app_stud_state").value;
    // var pattern =  /^[a-zA-Z]+$/;
    // isValid=true;
    // if(state.match(pattern)){
    // document.getElementById("studstatevalidate").innerHTML="" ;
    // document.getElementById('studstatevalidate').style.color = "green";
    // }
    // else if(!state){
    // document.getElementById("studstatevalidate").innerHTML="State Required";
    // document.getElementById('studstatevalidate').style.color = "red";
    // isValid=false;
    // }
    // else{
    // document.getElementById("studstatevalidate").innerHTML="Only characters are acceptable";
    // document.getElementById('studstatevalidate').style.color = "red";
    // isValid=false;
    // }
    // return isValid;
    // }

    function fatherValidate()
    {
        var val1 = document.getElementById('stud_father').value;
        if (!val1.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg1').innerHTML="Only alphabets are allowed";
          document.getElementById('stud_father').value = val1;
          document.getElementById('stud_father').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg1').innerHTML=" ";
          document.getElementById('stud_father').style.color = "green";
          //return true;
        }
        return isValid;
    }

    function motherValidate()
    {
        var val2 = document.getElementById('stud_mother').value;
        if (!val2.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg2').innerHTML="Only alphabets are allowed";
          document.getElementById('stud_mother').value = val2;
          document.getElementById('stud_mother').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg2').innerHTML=" ";
          document.getElementById('stud_mother').style.color = "green";
          //return true;
        }
    }

    // }


    function validatecontactno(){
    var contactno = document.getElementById("stud_phone").value;
    var pattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
    isValid=true;
    if(contactno.match(pattern)){
    document.getElementById("studphoneValidate").innerHTML=" ";
    document.getElementById('stud_phone').style.color = "green";
    }
    else if(!contactno){
    document.getElementById("studphoneValidate").innerHTML="Number required";
    document.getElementById('stud_phone').style.color = "red";
    isValid=false;
    }
    else{
    document.getElementById("studphoneValidate").innerHTML="Invalid Contact Number";
    document.getElementById('stud_phone').style.color = "red";
    isValid=false;
    }
    return isValid;
    }

    // } 
    // function validateadharno(){
    // var adharno = document.getElementById("adharno").value;
    // var pattern =  /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
    // isValid=true;
    // if(adharno.match(pattern)){
    // document.getElementById("validateadharno").innerHTML="";
    // }
    // else if(!adharno){
    // document.getElementById("validateadharno").innerHTML="adharNumber required";
    // isValid=false;
    // }
    // else{
    // document.getElementById("validateadharno").innerHTML="Invalid adhar Number";
    // isValid=false;
    // }
    // return isValid;

    // }

    function validatepincode(){
       var pincode = document.getElementById("stud_pin").value;
       var pattern =  /^[1-9]{1}[0-9]{2}[0-9]{3}$/; 
       isValid=true;
       if(pincode.match(pattern)){
          document.getElementById("validatepincode").innerHTML=" ";
          document.getElementById('stud_pin').style.color = "green";
       }
       else if(!pincode){
          document.getElementById("validatepincode").innerHTML="Pincode required";
          document.getElementById('stud_pin').style.color = "red";
          isValid=false;
       }
       else{
          document.getElementById("validatepincode").innerHTML="Invalid pincode Number";
          document.getElementById('stud_pin').style.color = "red";
          isValid=false;
       }
       return isValid;
    }

    function validatesize(){
       var size = document.getElementById("stud_size").value;
       var pattern =  /^[1-9]{1}[0-9]{1}$/; 
       isValid=true;
       if(size.match(pattern)){
          document.getElementById("validatesize").innerHTML=" ";
          document.getElementById('stud_size').style.color = "green";
       }
       else if(!size){
          document.getElementById("validatesize").innerHTML="Size required";
          document.getElementById('stud_size').style.color = "red";
          isValid=false;
       }
       else{
          document.getElementById("validatesize").innerHTML="Invalid Size";
          document.getElementById('stud_size').style.color = "red";
          isValid=false;
       }
       return isValid;
    }

    // } -->
    function validateemail(){
    var email = document.getElementById("email").value;
    var pattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/; 
    isValid=true;
    if(email.match(pattern)){
    document.getElementById("studemailValidate").innerHTML=" ";
    document.getElementById('email').style.color = "green";
    }
    else if(!email){
    document.getElementById("studemailValidate").innerHTML="Email required";
    document.getElementById('email').style.color = "red";
    isValid=false;
    }
    else{
    document.getElementById("studemailValidate").innerHTML="Invalid Email";
    document.getElementById('email').style.color = "red";
    isValid=false;
    }
    return isValid;

    } 
</script>

</head>
<body>
<script src="valid.js"></script>
    <script src="validone.js"></script>
<div id="wrapper">
     <!-- Navigation -->
     <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Wizard</a>
      </div>
      <!-- /.navbar-header -->
      <ul class="nav navbar-nav navbar-right">
  <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
        <ul class="dropdown-menu">
      <li class="dropdown-menu-header">
        <strong>Messages</strong>
        <div class="progress thin">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
          </div>
        </div>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/1.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
          <span class="label label-info">NEW</span>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/2.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
          <span class="label label-info">NEW</span>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/3.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/4.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/5.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/pic1.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="dropdown-menu-footer text-center">
        <a href="#">View all messages</a>
      </li>	
        </ul>
      </li> -->
    <li class="dropdown">
    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images2/1.png"><span class="badge"></span></a>
        <ul class="dropdown-menu">
      <!-- <li class="dropdown-menu-header text-center">
        <strong>Account</strong>
      </li>
      <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
      <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
      <li class="dropdown-menu-header text-center">
        <strong>Settings</strong>
      </li> -->
      <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
      <li class="m_2"><a href="Password.php"><i class="fa fa-wrench"></i> Change Password</a></li>
      <!-- <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
      <li class="divider"></li>
      <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li> -->
      <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
        </ul>
      </li>
</ul>
<!-- <form class="navbar-form navbar-right">
        <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
      </form> -->
      <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
              <ul class="nav" id="side-menu">
                  <li>
                      <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                  </li>

                  <li>
                    <a href="approval.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Approval</a>
                  </li>

                  <!-- <li>
                      <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="grids.html">Grid System</a>
                          </li>
                      </ul>
                  </li> -->

                  <li>
                      <a href="#"><i class="fa fa-indent nav_icon"></i>Teachers<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="teach_view.php">View Teacher</a>
                          </li>
                          <li>
                              <a href="addteacherdes.php">Add Teacher</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Students<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="stud_view.php">View Students</a>
                          </li>
                          <li>
                              <a href="addstudentsdes.php">Add Students</a>
                          </li>
                      </ul>
                  </li>
                 
                  <li>
                      <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Events<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="event_view.php">View Events</a>
                          </li>
                          <li>
                              <a href="addevents.html">Add events</a>
                          </li>
                      </ul>
                  </li>

      
                    <li>
                      <a href="complaints.html"><i class="fa fa-laptop nav_icon"></i>Complaints</a>
                  </li>

                    <li>
                      <a href="compose.html"><i class="fa fa-envelope nav_icon"></i>Mailbox</a>
                  </li>

                   <!-- <li>
                      <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a> (fa fa-dashboard fa-fw nav_icon)
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="basic_tables.html">Basic Tables</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="media.html">Media</a>
                          </li>
                          <li>
                              <a href="login.html">Login</a>
                          </li>
                      </ul>
                  </li> -->
              </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Add Students</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" onsubmit ="return Validstr1()  && Validstr2()  && Validstr3() && validateemail()  && validatepwd()  && housenameValidate()  && areaValidate() && cityValidate() && stateValidate() && fatherValidate() && motherValidate() && validatecontactno() && validatepincode() && validatesize()" action="addstudents.php" method="POST" enctype="multipart/form-data" >
          <fieldset>
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" name="stud_name" id="stud_name" title="The name should begin with capital letter Followed by uppercase or lowercase" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="Validstr1()">
              <div><span id="msg" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="email" id="email" title="Must enter a valid email address" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched"  required onkeyup="validateemail()">
              <div><span id="studemailValidate" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="stud_password" id="stud_password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required>
            </div>

            <div class="form-group">
              <label class="control-label">Phone No</label>
              <input type="text" name="stud_phone" id="stud_phone" title="Enter a valid phone number" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched"  required onkeyup="validatecontactno()">
              <div><span id="studphoneValidate" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
                        <label>Blood Group</label>
                        <select class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" name="stud_bloodgrp" id="stud_bloodgrp">
                            
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
            <div class="form-group">
              <label class="control-label normal">Date Of Birth</label>
              <input type="date" name="stud_dob" id="stud_dob" class="form-control1 ng-invalid ng-invalid-required" max="<?php echo date('Y-m-d') ?>" required>
            
            </div>

            <div class="form-group">
              <label>Gender</label><br>
              <input type="radio" name="stud_gender" id="stud_gender" value="Male">
              <label>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="stud_gender" id="stud_gender" value="Female">
              <label>Female</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="stud_gender" id="stud_gender" value="Others" >
              <label>Others</label>
            </div>

            <div class="form-group">
              <label class="control-label">House Name</label>
              <input type="text" name="stud_housenm" id="stud_housenm" title="Enter a valid address" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="housenameValidate()">
              <div><span id="studaddressValidate" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">Area</label>
              <input type="text" name="stud_area" id="stud_area" title="Enter a valid area" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="areaValidate()">
              <div><span id="studareaValidate" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">City</label>
              <input type="text" name="stud_city" id="stud_city" title="Enter a valid city" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="cityValidate()">
              <div><span id="studcityValidate" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">District</label>
              <input type="text" name="stud_district" id="stud_district" title="Enter a valid district" class="form-control1 ng-invalid ng-invalid-required ng-touched" required>
            </div>

            <div class="form-group">
              <label class="control-label">Pin</label>
              <input type="text" name="stud_pin" id="stud_pin" title="Enter a valid pin" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="validatepincode()">
              <div><span id="validatepincode" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">State</label>
              <input type="text" name="stud_state" id="stud_state" title="Enter a valid state" class="form-control1 ng-invalid ng-invalid-required ng-touched" required>
            </div>

            <div class="form-group">
              <label class="control-label">Father's Name</label>
              <input type="text" name="stud_father" id="stud_father" title="The name should begin with capital letter Followed by uppercase or lowercase" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="fatherValidate()">
              <div><span id="msg1" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
              <label class="control-label">Mother's Name</label>
              <input type="text" name="stud_mother" id="stud_mother" title="The name should begin with capital letter Followed by uppercase or lowercase" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="motherValidate()">
              <div><span id="msg2" class="validate" style="color:red"></span></div>
            </div>

            <div class="form-group">
                        <label>First Item</label>
                        <select name="stud_item_1" id="stud_item_1" class="demo-ed"  style="width: 100%;">
                            <option>Select</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Football">Football</option>
                            <option value="Hockey">Hockey</option>
                            <option value="Baseball">Baseball</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Volleyball">Volleyball</option>
                            <option value="Rugby">Rugby</option>
                            <option value="Handball">Handball</option>
                            <option value="Badminton">Badminton</option>
                            <option value="Taekwondo">Taekwondo</option>
                            <option value="Boxing">Boxing</option>
                            <option value="Judo">Judo</option>
                            <option value="Tennis">Tennis</option>
                            <option value="Wrestling">Wrestling</option>
                            <option value="Table Tennis">Table Tennis</option>
                            <option value="Wushu">Wushu</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <label>Second Item</label>
                        <select name="stud_item_2" id="stud_item_2" class="demo-ed" style="width: 100%">
                            <option>Select</option>
                            <option value="Badminton">Badminton</option>
                            <option value="Taekwondo">Taekwondo</option>
                            <option value="Boxing">Boxing</option>
                            <option value="Judo">Judo</option>
                            <option value="Tennis">Tennis</option>
                            <option value="Wrestling">Wrestling</option>
                            <option value="Table Tennis">Table Tennis</option>
                            <option value="Wushu">Wushu</option>
                            <option value="Nil">Nil</option>
                          </select>
                    </div>
            <div class="form-group">
                <label class="control-label">T-Shirt and Pants Size</label>
                <input type="text" name="stud_size" id="stud_size" title="Enter a valid number" class="form-control1 ng-invalid ng-invalid-required ng-touched" required onkeyup="validatesize()">
                <div><span id="validatesize" class="validate" style="color:red"></span></div>
              </div>

              <div class="form-group">
                <label>Image</label>
                <input class="form-control" type="file" name="stud_image" id="stud_image" required="">
            </div>
            <?php if(!empty($response)) { ?>
                        <div class="response <?php echo $response["type"]; ?> ">
                        <?php echo $response["message"]; ?>
                        </div>
                    <?php }?>
            <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="copy_layout">
      <p>Copyright &copy; 2022 Wizard Sports Academy. All Rights Reserved. </p>
   </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css2/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
      var arrayData;
      var counter = 1;
      $(document).ready(function () {
        LoadSelect();
        $('.demo').select2();
        $('.demo-ed').select2();
      });
      function LoadSelect() {
        arrayData = [
          { Id: 1, Description: 'Cricket' },
          { Id: 2, Description: 'Football' },
          { Id: 3, Description: 'Hockey' },
          { Id: 4, Description: 'Baseball' },
          { Id: 5, Description: 'Basketball' },
          { Id: 6, Description: 'Volleyball' },
          { Id: 7, Description: 'Rugby' },
          { Id: 8, Description: 'Handball' },
          { Id: 9, Description: 'Badminton' },
          { Id: 10, Description: 'Taekwondo' },
          { Id: 11, Description: 'Boxing' },
          { Id: 12, Description: 'Judo' },
          { Id: 13, Description: 'Tennis' },
          { Id: 14, Description: 'Wrestling' },
          { Id: 15, Description: 'Table Tennis' },
          { Id: 16, Description: 'Wushu' },
          { Id: 17, Description: 'Nil' },
        ];
        for (var i = 0; i < arrayData.length; i++) {
          $('.demo').append(
            '<option value="' +
              arrayData[i].Id +
              '">' +
              arrayData[i].Description +
              '</option>'
          );
        }
      }
      function AddOption(x) {
        var n = x - 1;
        for (var i = 0; i < arrayData.length; i++) {
          $('#row' + n + ' .demo').append(
            '<option value="' +
              arrayData[i].Id +
              '">' +
              arrayData[i].Description +
              '</option>'
          );
        }
        $('.demo').select2();
      }
      
      //class
      var demoSelect = '.demo-ed';
      //function enable/disable
      $(demoSelect).on('change', function (evt) {
        const selectedValue = [];
        $(demoSelect)
          .find(':selected')
          .filter(function (idx, el) {
            return $(el).attr('value');
          })
          .each(function (idx, el) {
            selectedValue.push($(el).attr('value'));
          });
        $(demoSelect)
          .find('option')
          .each(function (idx, option) {
            if (selectedValue.indexOf($(option).attr('value')) > -1) {
              if ($(option).is(':checked')) {
                return;
              } else {
                $(this).attr('disabled', true);
              }
            } else {
              $(this).attr('disabled', false);
            }
          });
      });
    </script>
</body>
</html>
