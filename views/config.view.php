<?php
	include('partials/head.php');
	include('partials/nav.php');
	include ('partials/dbcon.php');
?>



<link rel="stylesheet" href="style.css">
 
<link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
 
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 




  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <a href="/lgu" class="text-white" style=" text-decoration: none">
                  <h3>150</h3>
                  <p>LGU Configuration</p>
                </a>
                </div>
                <div class="icon">
                  <i class="ion ion-android-apps"></i>
                </div>
                <a href="/lgu" class="small-box-footer">Enter <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <a href="/office" class="text-white" style=" text-decoration: none">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Office Configuration</p>
                </a>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/office" class="small-box-footer">Enter <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <a href="/sector" class="text-white" style=" text-decoration: none">
                  <h3>44</h3>
                  <p>Sector Configuration</p>
                </a>
                </div>
                <div class="icon">
                  <i class="ion ion-android-bulb"></i>
                </div>
                <a href="/sector" class="small-box-footer">Enter <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <a href="/fy" class="text-white" style=" text-decoration: none">
                  <h3>65</h3>
                  <p>Fiscal Year</p>
                </a>
                </div>
                <div class="icon">
                  <i class="ion ion-android-settings"></i>
                </div>
                <a href="/fy" class="small-box-footer">Enter <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <a href="/lce" class="text-white" style=" text-decoration: none">
                  <h3>65</h3>
                  <p>Local Chief Executive</p>
                </a>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="/lce" class="small-box-footer">Enter <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <a href="/budget" class="text-white" style=" text-decoration: none">
                  <h3>65</h3>
                  <p>Budget Officers</p>
                </a>
                </div>
                <div class="icon">
                  <i class="ion ion-briefcase"></i>
                </div>
                <a href="/budget" class="small-box-footer">Enter <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->





    <?php
        include ('partials/footer.php');
    ?>


