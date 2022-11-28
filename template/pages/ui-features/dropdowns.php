<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dropdown</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../css/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../css/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../css/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../css/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../css/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../css/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

    <!-- NAVBAR -->
    <?php include '../../includes/navbar.php'; ?>
    <!-- NAVBAR -->

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
      <!-- partial -->

      <!-- SIDEBAR -->
      <?php include '../../includes/sidebar.php'; ?>
      <!-- SIDEBAR -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dropdown menu</h4>
                  <div class="row">
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton1">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton3">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton4">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton8">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton5">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton7">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Split button dropdowns</h4>
                  <p class="card-description">
                    Wrap two buttons in <code>.btn-group</code> and add <code>.dropdown-toggle-split</code> to the toggling button
                  </p>
                  <div class="template-demo">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Dropdown</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">Dropdown</button>
                      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton2">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success">Dropdown</button>
                      <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton3">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary">Dropdown</button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton4">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">Dropdown</button>
                      <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton5">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">Dropdown</button>
                      <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton6">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Icon dropdowns</h4>
                  <p class="card-description">
                    Add icon tags instead of text
                  </p>
                  <div class="row">
                    <div class="col-12">
                      <div class="template-demo d-flex justify-content-between flex-wrap">
                        <div class="dropdown">
                          <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-world"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuIconButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-cup"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton2">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-time"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="template-demo d-flex justify-content-between flex-wrap">
                        <div class="dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle" id="dropdownMenuIconButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-heart"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton4">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button type="button" class="btn btn-warning dropdown-toggle" id="dropdownMenuIconButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-power-off"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton5">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-lock"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="template-demo d-flex justify-content-between flex-wrap">
                        <div class="dropdown">
                          <button type="button" class="btn btn-dark dropdown-toggle" id="dropdownMenuIconButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-user"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton7">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button type="button" class="btn btn-info dropdown-toggle" id="dropdownMenuIconButton8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-bell"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle" id="dropdownMenuIconButton9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-user"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton9">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dropup variation</h4>
                  <p class="card-description">
                    Add class <code>.dropup</code>
                  </p>
                  <div class="template-demo">
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-primary">Dropdown</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton1">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-danger">Dropdown</button>
                      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-success">Dropdown</button>
                      <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton3">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-secondary">Dropdown</button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton4">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-info">Dropdown</button>
                      <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton5">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-warning">Dropdown</button>
                      <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton6">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dropdown sizes</h4>
                  <p class="card-description">
                    Add class <code>.btn-{size}</code> to dropdown buttons
                  </p>
                  <div class="template-demo mt-5">
                    <div class="dropdown">
                      <button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuSizeButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton1">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuSizeButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- FOOTER -->
        <?php include '../../includes/footer.php'; ?>
        <!-- FOOTER -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
