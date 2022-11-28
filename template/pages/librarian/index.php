<?php 
ob_start();
include "../../../template/includes/navbar.php";
if($_SESSION['role'] == "Administrator")
{
?>

      <!DOCTYPE html>
      <html lang="en">

      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>GSBE Library System</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../css/vendors/feather/feather.css">
        <link rel="stylesheet" href="../../css/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../css/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../../css/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="../../css/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../../css/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="../../css/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../../js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="../../images/favicon.png" />
      </head>

      <body>

        <div class="container-scroller">

          

          <div class="container-fluid page-body-wrapper">

          <!-- SETTINGS PANEL -->
          <?php include '../../includes/settings-panel.php'; ?>
          <!-- SETTINGS PANEL -->
            
            <div id="right-sidebar" class="settings-panel">
              <i class="settings-close ti-close"></i>
              <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
              </ul>
              <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                  <div class="add-items d-flex px-3 mb-0">
                    <form class="form w-100">
                      <div class="form-group d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                        <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                      </div>
                    </form>
                  </div>
                  <div class="list-wrapper px-3">
                    <ul class="d-flex flex-column-reverse todo-list">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Team review meeting at 3.00 PM
                          </label>
                        </div>
                        <i class="remove ti-close"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Prepare for presentation
                          </label>
                        </div>
                        <i class="remove ti-close"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Resolve all the low priority tickets due today
                          </label>
                        </div>
                        <i class="remove ti-close"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Schedule meeting for next week
                          </label>
                        </div>
                        <i class="remove ti-close"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Project review
                          </label>
                        </div>
                        <i class="remove ti-close"></i>
                      </li>
                    </ul>
                  </div>
                  <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                  <div class="events pt-4 px-3">
                    <div class="wrapper d-flex mb-2">
                      <i class="ti-control-record text-primary me-2"></i>
                      <span>Feb 11 2018</span>
                    </div>
                    <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                    <p class="text-gray mb-0">The total number of sessions</p>
                  </div>
                  <div class="events pt-4 px-3">
                    <div class="wrapper d-flex mb-2">
                      <i class="ti-control-record text-primary me-2"></i>
                      <span>Feb 7 2018</span>
                    </div>
                    <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                    <p class="text-gray mb-0 ">Call Sarah Graves</p>
                  </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                  <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                    <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                  </div>
                  <ul class="chat-list">
                    <li class="list active">
                      <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                      <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                      </div>
                      <small class="text-muted my-auto">19 min</small>
                    </li>
                    <li class="list">
                      <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                      <div class="info">
                        <div class="wrapper d-flex">
                          <p>Catherine</p>
                        </div>
                        <p>Away</p>
                      </div>
                      <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                      <small class="text-muted my-auto">23 min</small>
                    </li>
                    <li class="list">
                      <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                      <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                      </div>
                      <small class="text-muted my-auto">14 min</small>
                    </li>
                    <li class="list">
                      <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                      <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                      </div>
                      <small class="text-muted my-auto">2 min</small>
                    </li>
                    <li class="list">
                      <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                      <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                      </div>
                      <small class="text-muted my-auto">5 min</small>
                    </li>
                    <li class="list">
                      <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                      <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                      </div>
                      <small class="text-muted my-auto">47 min</small>
                    </li>
                  </ul>
                </div>
                <!-- chat tab ends -->
              </div>
            </div>

      <!-- // SIDEBAR -->
      <?php include '../../includes/sidebar.php'; ?>     
      <!-- SIDE BAR -->

            <div class="main-panel">
              <div class="content-wrapper">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="home-tab">
                      <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Status</a>
                          </li>
                          <!-- <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Total Users</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Add Books</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Add E-Books</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Total SpColl</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Total Borrowed Books</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Total Archived Books</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" href="thesis.php">Total Archived SpColl</a>
                          </li> -->



<!--              
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                          </li>
-->
                        </ul>
                        <div>
                          <div class="btn-wrapper">
                            <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="statistics-details d-flex align-items-top justify-content-between">
                                <div>
                                  <?php
                                    $result = mysqli_query($con,"SELECT * FROM user");
                                    $num_rows = mysqli_num_rows($result);
                                  ?>
                                  <p class="statistics-title">Total Users</p>
                                  <h3 class="rate-percentage"><?php echo $num_rows; ?></h3>


                                </div>

                                <div>
                                  <?php
                                    $result = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(quantity) as total FROM `book`")) or die(mysql_error());
                                  ?>
                                  <p class="statistics-title">Total Books</p>
                                  <h3 class="rate-percentage"><?php echo $result['total']; ?></h3>             
                                </div>

                                <div class="d-none d-md-block">
                                  <?php
                                    $result = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(quantity) as total FROM `ebooks`")) or die(mysql_error());
                                  ?>
                                  <p class="statistics-title">Total E-Books</p>
                                  <h3 class="rate-percentage"><?php echo $result['total']; ?></h3>     
                                </div>

                                <div>
                                  <?php
                                    $result = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(quantity) as total FROM `special_collection`")) or die(mysql_error());
                                  ?>
                                  <p class="statistics-title">Total SpColl</p>
                                  <h3 class="rate-percentage"><?php echo $result['total']; ?></h3>
                                </div>                            

                                <div class="d-none d-md-block">
                                  <?php
                                    $count1 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as total FROM `borrow_book` WHERE `borrowed_status` = 'borrowed'")) or die(mysql_error());
                                  ?>
                                  <p class="statistics-title">Total Borrowed Books</p>
                                  <h3 class="rate-percentage"><?php echo $count1['total']; ?></h3>    
                                </div>

                                <div class="d-none d-md-block">
                                  <p class="statistics-title">Total Archived Books</p>
                                  <h3 class="rate-percentage">0</h3>    
                                </div>

                                <div class="d-none d-md-block">
                                  <p class="statistics-title">Total Archived Books</p>
                                  <h3 class="rate-percentage">0</h3>    
                                </div>

      <!-- (HIDDEN) ======== LAZO
                                <div class="d-none d-md-block">
                                  <p class="statistics-title">Avg. Time on Site</p>
                                  <h3 class="rate-percentage">2m:35s</h3>
                                  <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                </div>
      -->

                            <!-- <div class="col-lg-4 d-flex flex-column">
                              <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                  <div class="card card-rounded">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="card-title card-title-dash">To-Do list</h4> -->
                                            <!-- <div class="add-items d-flex mb-0"> -->
                                              <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                              <!-- <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                            </div>
                                          </div>
                                          <div class="list-wrapper">
                                            <ul class="todo-list todo-list-rounded">
                                              <li class="d-block">
                                                <div class="form-check w-100">
                                                  <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                  </label>
                                                  <div class="d-flex mt-2">
                                                    <div class="ps-4 text-small me-3">24 June 2020</div>
                                                    <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                    <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                  </div>
                                                </div>
                                              </li>
                                              <li class="d-block">
                                                <div class="form-check w-100">
                                                  <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                  </label>
                                                  <div class="d-flex mt-2">
                                                    <div class="ps-4 text-small me-3">23 June 2020</div>
                                                    <div class="badge badge-opacity-success me-3">Done</div>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="form-check w-100">
                                                  <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                  </label>
                                                  <div class="d-flex mt-2">
                                                    <div class="ps-4 text-small me-3">24 June 2020</div>
                                                    <div class="badge badge-opacity-success me-3">Done</div>
                                                  </div>
                                                </div>
                                              </li>
                                              <li class="border-bottom-0">
                                                <div class="form-check w-100">
                                                  <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                  </label>
                                                  <div class="d-flex mt-2">
                                                    <div class="ps-4 text-small me-3">24 June 2020</div>
                                                    <div class="badge badge-opacity-danger me-3">Expired</div>
                                                  </div>
                                                </div>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div> -->
                              </div>
                              <!-- <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                  <div class="card card-rounded">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="card-title card-title-dash">Type By Amount</h4>
                                          </div>
                                          <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                          <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                  <div class="card card-rounded">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                              <h4 class="card-title card-title-dash">Leave Report</h4>
                                            </div>
                                            <div>
                                              <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                  <h6 class="dropdown-header">week Wise</h6>
                                                  <a class="dropdown-item" href="#">Year Wise</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mt-3">
                                            <canvas id="leaveReport"></canvas>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                  <div class="card card-rounded">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                              <h4 class="card-title card-title-dash">Top Performer</h4>
                                            </div>
                                          </div>
                                          <div class="mt-3">
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                              <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                  <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                  <small class="text-muted mb-0">162543</small>
                                                </div>
                                              </div>
                                              <div class="text-muted text-small">
                                                1h ago
                                              </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                              <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                  <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                  <small class="text-muted mb-0">162543</small>
                                                </div>
                                              </div>
                                              <div class="text-muted text-small">
                                                1h ago
                                              </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                              <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                  <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                  <small class="text-muted mb-0">162543</small>
                                                </div>
                                              </div>
                                              <div class="text-muted text-small">
                                                1h ago
                                              </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                              <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                  <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                  <small class="text-muted mb-0">162543</small>
                                                </div>
                                              </div>
                                              <div class="text-muted text-small">
                                                1h ago
                                              </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                              <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                  <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                  <small class="text-muted mb-0">Alaska, USA</small>
                                                </div>
                                              </div>
                                              <div class="text-muted text-small">
                                                1h ago
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- content-wrapper ends -->

                <!-- NAVBAR -->
                <?php include '../../includes/footer.php'; ?>
                <!-- NAVBAR -->

            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
          <?php include '../../includes/scripts.php'; ?>
        <!-- End custom js for this page-->
      </body>

      </html>

<?php }else{
    header("Location:../samples/404.php");
} ?>