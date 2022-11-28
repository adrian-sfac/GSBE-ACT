<?php include "dbcon.php";


    if($_SESSION['role'] == "Administrator"){
      echo '

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                  <li class="nav-item">

                  <!-- Home Button for Librarian -->
                    <a class="nav-link" href="../../pages/librarian/index.php">


                      <i class="mdi mdi-grid-large menu-icon"></i>
                      <span class="menu-title">HOME</span>
                    </a>
                  </li>

        <!-- (HIDDEN) ======= LAZO =========
                  <li class="nav-item nav-category">UI Elements</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <i class="menu-icon mdi mdi-floor-plan"></i>
                      <span class="menu-title">Profile</span>
                      <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.php">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.php">Dropdowns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Typography</a></li>
                      </ul>
                    </div>
                  </li>
        -->

                  <li class="nav-item nav-category">SEARCH</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#search" aria-expanded="false" aria-controls="search">
                      <i class="menu-icon mdi mdi-card-text-outline"></i>
                      <span class="menu-title">Search Books</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="search">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/books/book_search.php">Books</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="search">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/ebooks/ebook_search.php">E-Books</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="search">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Archived Books</a></li>
                      </ul>
                    </div>
                  </li>



                  <li class="nav-item nav-category">BORROW</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#borrow" aria-expanded="false" aria-controls="borrow">
                      <i class="menu-icon mdi mdi-card-text-outline"></i>
                      <span class="menu-title">Borrow Book</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="borrow">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/borrow/borrow.php">Scan Student ID</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="borrow">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/borrow/borrowed_book.php">Borrowed Books</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="borrow">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/borrow/returned_book.php">Returned Books</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="borrow">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/borrow/settings.php">Settings</a></li>
                      </ul>
                    </div>
                  </li>



                  <li class="nav-item nav-category">Total Books</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#total" aria-expanded="false" aria-controls="total">
                      <i class="menu-icon mdi mdi-card-text-outline"></i>
                      <span class="menu-title">View Details</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="total">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Total Books</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="total">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Total E-Books</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="total">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Total Special Collection</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="total">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Total Barrowed Books</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="total">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Total Archived Books</a></li>
                      </ul>
                    </div>
                  </li>


                  <li class="nav-item nav-category">Special Collection</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#thesis" aria-expanded="false" aria-controls="total">
                      <i class="menu-icon mdi mdi-card-text-outline"></i>
                      <span class="menu-title">View Details</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="thesis">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/special_collections/special_collection_search.php">Search Thesis</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="thesis">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/special_collections/add_special_collection.php">Add Thesis</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="thesis">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Special Collection Checkout</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="thesis">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/special_collections/categories_special_collection.php">Categories</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="thesis">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/special_collections/courses_special_collection.php">Courses</a></li>
                      </ul>
                    </div>
                  </li>


                  <li class="nav-item nav-category">BOOK & E-BOOK MAINTENANCE</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#maintenance" aria-expanded="false" aria-controls="maintenance">
                      <i class="menu-icon mdi mdi-card-text-outline"></i>
                      <span class="menu-title">View Details</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="maintenance">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/books/add_book.php">Add Book</a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="maintenance">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/ebooks/add_ebook.php">Add E-Book</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="maintenance">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/maintenance/moa.php">Mode of Acquisition</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="maintenance">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/maintenance/publisher.php">Publisher</a></li>
                      </ul>
                    </div>
                  </li>
                  <div class="collapse" id="maintenance">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="../../pages/maintenance/pop.php">Place of Publication</a></li>
                      </ul>
                    </div>
                  </li>

        <!-- (HIDDEN)======= LAZO =========

                  <li class="nav-item nav-category">Forms and Datas</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                      <i class="menu-icon mdi mdi-card-text-outline"></i>
                      <span class="menu-title">Form elements</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.php">Basic Elements</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                      <i class="menu-icon mdi mdi-chart-line"></i>
                      <span class="menu-title">Charts</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.php">ChartJs</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                      <i class="menu-icon mdi mdi-table"></i>
                      <span class="menu-title">Tables</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.php">Basic table</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                      <i class="menu-icon mdi mdi-layers-outline"></i>
                      <span class="menu-title">Icons</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.php">Mdi icons</a></li>
                      </ul>
                    </div>
                  </li>

        -->
                  <li class="nav-item nav-category">USER MAINTENANCE</li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                      <i class="menu-icon mdi mdi-account-circle-outline"></i>
                      <span class="menu-title">User Pages</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/students/student_search.php"> Search User </a></li>
                      </ul>
                    </div>
                    <div class="collapse" id="auth">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/students/add_student.php"> Add User </a></li>
                      </ul>
                    </div>
                  </li>
                  
        <!-- (HIDDEN) ====LAZO =====
                  <li class="nav-item nav-category">help</li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                      <i class="menu-icon mdi mdi-file-document"></i>
                      <span class="menu-title">Documentation</span>
                    </a>
                  </li>
        -->
                </ul>
              </nav>
              
    '; } ?>

