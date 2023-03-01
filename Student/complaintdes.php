<?php
$db = mysqli_connect("localhost","root","","db_sports");
?>
<?php
session_start();
if(!isset($_SESSION['log_id'])){
    header("location: ../login.html");
}
?>


<?php
$log_id = $_SESSION['log_id'];
$b = "SELECT * FROM tbl_stud_register WHERE login_id = $log_id";
$c = mysqli_query($db, $b);
$d = mysqli_fetch_assoc($c);
$item1 = $d['stud_item_1'];
$item2 = $d['stud_item_2'];

$getdetails = "SELECT * FROM tbl_stud_schedule WHERE login_id = $log_id";
$result = mysqli_query($db, $getdetails);
$row = mysqli_fetch_assoc($result);


if($item2 != 'Nil'){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wizard Sports Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script type="text/javascript">
            function Validate(){
              if(!this.form.checkbox.checked){
                alert('You must agree to the terms first.');
                return false;
              }
            }
  </script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Wizard</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'] ?></span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username'] ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Admin/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="components-list-group.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Schedule</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-list-group.html" class="active">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li> 
          
        </ul>
      </li> End Components Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li>-->    <!--End Forms Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li>-->   <!--End Tables Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li>-->      <!--End Charts Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Icons Nav -->

      <!-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav
    </ul>-->

  </aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Group</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Schedule</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $item1 ?></h5>
              <h6>Batch</h6>

              <form action="schedule.php" method="post">
              <div style="width: 50%">
              
                <select name="stud_batchA" id="stud_batchA" class="demo-ed" required>
                  <option>Select</option>
                  <option value="MWF">Monday, Wednesday, Friday</option>
                  <option value="TTS">Tuesday, Thursday, Saturday</option>
                </select>
                <br /><br />
                <!-- <select class="demo-ed">
                  <option>Select</option>
                  <option value="1">Monday, Wednesday, Friday</option>
                  <option value="2">Tuesday, Thursday, Saturday</option>
                </select> -->
                <br /><br />
                <!-- <h6>Time Slot</h6> -->
                <label>Time Slot</label><br>
                <div style="list-style:none; display: flex; flex-wrap: nowrap; flex-direction: row;">
                <!-- <div class="checkbox-group required"> -->
                  <?php $newArray = explode(",",$row['stud_time_morn']); ?>
                  <input type="hidden" id="stud_time1" name="stud_time1" value="Nil">
                    <input type="checkbox" id="stud_time1" name="stud_time1" <?php if(in_array("Morning",$newArray)){ echo "checked";} ?> value="Morning"><label for="Morning"> Morning</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <?php $newArray = explode(",",$row['stud_time_eve']); ?>
                    <input type="hidden" id="stud_time2" name="stud_time2" value="Nil">
                    <input type="checkbox" id="stud_time2" name="stud_time2" <?php if(in_array("Evening",$newArray)){ echo "checked";} ?> value="Evening"><label for="Evening"> Evening</label>
                <!-- </div> -->
                </div>
              <br>
              <br>
              <br>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $item2 ?></h5>
              <h6>Batch</h6>

              <div style="width: 50%">
                <select name="stud_batchB" id="stud_batchB" class="demo-ed" required>
                  <option>Select</option>
                  <option value="MWF">Monday, Wednesday, Friday</option>
                  <option value="TTS">Tuesday, Thursday, Saturday</option>
                </select><br /><br />
                <!-- <select class="demo-ed">
                  <option>Select</option>
                  <option value="3">Monday, Wednesday, Friday</option>
                  <option value="4">Tuesday, Thursday, Saturday</option>
                </select> -->
                <br /><br />
                <!-- <h6>Time Slot</h6> -->
                <label>Time Slot</label><br>
                <div style="list-style:none; display: flex; flex-wrap: nowrap; flex-direction: row;">
                <?php $newArrays = explode(",",$row['stud_time_morn']); ?>
                  <input type="hidden" id="stud_time3" name="stud_time3" value="Nil">
                    <input type="checkbox" id="stud_time3" name="stud_time3" <?php if(in_array("Morning",$newArray)){ echo "checked";} ?> value="Morning"><label for="Morning"> Morning</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <?php $newArrays = explode(",",$row['stud_time_eve']); ?>
                    <input type="hidden" id="stud_time4" name="stud_time4" value="Nil">
                    <input type="checkbox" id="stud_time4" name="stud_time4" <?php if(in_array("Evening",$newArray)){ echo "checked";} ?> value="Evening"><label f'or="Evening"> Evening</label>
                </div>
                <br>
                <br>
                <button type="submit" name="submit" id="submit" onclick="Validate()">Submit</button>
                </form>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Wizard Sports Academy</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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
    <!-- <script>
      $('div.checkbox-group.required :checkbox:checked').length > 0
    </script> -->

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
          { Id: 1, Description: 'MWF' },
          { Id: 2, Description: 'TTS' },
          { Id: 3, Description: 'MWF' },
          { Id: 4, Description: 'TTS' },
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
<?php } ?>

<?php if($item2 == 'Nil'){ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wizard Sports Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
	form {
		width: 50%;
		margin: 0 auto;
		padding: 20px;
		background-color: #f2f2f2;
		border-radius: 10px;
		box-shadow: 0px 0px 10px #aaa;
	}

	input[type="text"], textarea {
		width: 100%;
		padding: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		border: none;
		box-shadow: 0px 0px 5px #aaa;
	}

	input[type="submit"] {
		padding: 10px;
		background-color: #4CAF50;
		color: #fff;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #3e8e41;
	}
	</style> 

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Wizard</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username'] ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Admin/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="components-list-group.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Schedule</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="complaintdes.php">
          <i class="bi bi-circle"></i>
          <span>Complaints</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-list-group.html" class="active">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li> 
          
        </ul>
      </li> End Components Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li>-->    <!--End Forms Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li>-->   <!--End Tables Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li>-->      <!--End Charts Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Icons Nav -->

      <!-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->
    <!-- </ul> -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <form action="complaint.php" method="POST">
		<h2>Complaint Form</h2>
		<label for="name">Name:</label>
		<input type="text" id="stud_name" name="stud_name" placeholder="Enter your name" required>
		<label for="email">Email:</label>
		<input type="text" id="stud_email" name="stud_email" placeholder="Enter your email" required>
		<label for="complaint">Complaint:</label>
		<textarea id="stud_complaint" name="stud_complaint" placeholder="Enter your complaint" required></textarea>
		<input type="submit" value="Submit" name="submit" id="submit">
	</form>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Wizard Sports Academy</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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

    

</body>

</html>
<?php } ?>