<?php 
ob_start();
include '../../includes/navbar.php';
if($_SESSION['role'] == "Administrator")
{
?>


      <!DOCTYPE html>
      <html lang="en">
        <?php include '../../includes/css_plugins.php'; ?>

        <div class="container-scroller">
          <div class="container-fluid page-body-wrapper">

          <!-- SETTINGS PANEL -->
          <?php include '../../includes/settings-panel.php'; ?>
          <!-- SIDEBAR -->
          <?php include '../../includes/sidebar.php'; ?>     

          
            <div class="content-wrapper">
              <div class="input-group">
              <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i class= "fa fa-cog fa-spin"></i> Settings</h4>
                  <p class="card-description">

                  </p>


                  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1></h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
           <div class="row">
        
                <?php include ('settings_function/allowed_qntty.php'); ?>
                
                <?php include ('settings_function/penalty.php'); ?>
                
                <?php include ('settings_function/allowed_days.php'); ?>
                
                <div class="clearfix"></div>
                    
            </div>
        </section>
        <!-- /.Left col -->
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>





              

                </div>
              </div>
            </div>

                <!-- FOOTER -->
                <?php include '../../includes/footer.php'; ?>
                <!-- FOOTER -->

            </div>
          </div>
        </div>


      </html>


<?php }else{
    header("Location: ../samples/404.php");
} ?>
<?php include '../../includes/scripts.php'; ?>