<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'>

    <!-- CSS Files -->
	  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="../assets/css/atlantis.min.css">
    <link href="../CSS/applicant.css" rel="stylesheet">

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>

    <title>Fullscreen</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/jj_logo.png">
</head>
<body>
      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="green2">
        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <div>
            <form class="navbar-left navbar-form">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar nav me-auto mb-2 mb-lg-0">
                 <li>
                     <a href="Landing_Page.html" class="logo">
                       <img src="../assets/img/JapanJobs.png" alt="navbar brand">
                     </a>
                 </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="Landing_Page.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="profile.php">Pofile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="about_us.html">About Us</a>
                  </li>
                </ul>
              </div>
            </form>
            </div>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-justify">
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="../assets/img/icon.png" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="scroll-wrapper dropdown-user-scroll scrollbar-outer" style="position: relative;"><div class="dropdown-user-scroll scrollbar-outer scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg"><img src="../assets/img/icon.png" alt="image profile" class="avatar-img rounded"></div>
                      <div class="u-text">
                        <h4>Meow</h4>
                        <p class="text-muted">Genesis.com</p><a href="profile.php" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Saved Jobs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">recommended Jobs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                  </li>
                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div></div>
              </ul>
            </li>
          </ul>
        </div>
        </nav>
        <!-- End Navbar -->

      <!--Background-Group-->
      <div class="card">
        <img src="../assets/img/header_bg.png">
      </div>
      
      <!--Search Group-->
      <div class="container-fluid d-flex justify-content-center">
        <div class="row row-cols-4">
          <div class="col">
            <div class="form-group">
              <div class="input-icon">
                <span class="input-icon-addon">
                  <i class="fa fa-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Job Title">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <div class="input-icon">
                <span class="input-icon-addon"> 
                  <i class="fa fa-suitcase"></i>
              </span>
              <input type="text" class="form-control ps-5" placeholder="Classification" />
            </div>
          </div>
          </div>
          <div class="col">
            <div class="form-group">
              <div class="input-icon">
                <span class="input-icon-addon">
                  <i class="fas fa-map-marker-alt"></i>
                </span>
              <input type="text" class="form-control ps-5" placeholder="Location" />
            </div>
            </div>
          </div>
          <div class="col">
            <button class="btn btn-danger" type="button">Search</button>
            <button onclick="test();" id="test" class="btn btn-danger" type="button">
              <i class="fa fa-filter"></i>
            </button>
          </div>  
        </div>
      </div> 

      <!--FIlter-->
      <div id="Div-filter" class="dropdown d-flex justify-content-center gap-3 d-none d-sm-none">
        <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Date posted
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

        <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Experience Level
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">test</a>
          <a class="dropdown-item" href="#">test test</a>
          <a class="dropdown-item" href="#">test</a>
        </div>

        <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Minimum Salary
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">test</a>
          <a class="dropdown-item" href="#">test test </a>
          <a class="dropdown-item" href="#">test</a>
        </div>

        <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Remote
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">test</a>
          <a class="dropdown-item" href="#">test test</a>
          <a class="dropdown-item" href="#">test</a>
        </div>
      </div> 

      <div class="container-fluid flex justify-content-center row mt-5">
        <div class="card" style="width: 80%;">
          <div class="card-header">
            <h2 class="font-weight-bold">Software Engineer</h2>
            <div class="row mt-4">
              <div class="col-md-12 pl-4">
                <h5><span class="mr-2 text-danger"><i class="fas fa-map-marker-alt fa-lg"></i></span>Osaka, Japan</h5>
                <h5><span class="mr-2 text-danger"><i class="fas fa-clone fa-lg"></i></span>Information and Communication Technology</h5>
                <h5><span class="mr-2 text-danger"><i class="fas fa-clock fa-lg"></i></span>Full-Time</h5>
                <h5><span class="mr-2 text-danger"><i class="fas fa-database fa-lg"></i></span>60,000 - 80,000 yen</h5>
                </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <button class="btn btn-danger mr-3">Apply Now</button>
                <button class="btn btn-outline-danger mr-3"><i class="fa fa-bookmark mr-2"></i> Save</button>
                <button class="btn btn-outline-danger"><i class="fa fa-flag mr-2"></i> Report Job</button>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4 class="font-weight-bold">Job Summary</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore accusamus iste dicta sit. Eveniet sed cupiditate aut earum eaque aliquam ullam, iusto adipisci pariatur, ipsam facilis. Autem, dolor natus.</p>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-12">
                <h4 class="font-weight-bold">Qualifications</h4>
                <ul>
                  <li>
                      <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                  <li>
                    <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                  <li>
                    <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h4 class="font-weight-bold">Education & Experiences</h4>
                <ul>
                  <li>
                      <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                  <li>
                    <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                  <li>
                    <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <h4 class="font-weight-bold">Employer's Questions</h4>
                <ul>
                  <li>
                      <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                  <li>
                    <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                  <li>
                    <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum ut consectetur provident rem ab illo eum error, officiis quam ullam dolorem perferendis veniam quod nesciunt doloremque voluptatem esse dolorum?</a> 
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--bottom navbar-->
    <footer class="footer text-white" style="background-color:mediumseagreen">
      <div class="container-fluid">
          <nav class="pull-left">
              <ul class="nav">
                  <li class="nav-item">
                      <a class="nav-link">
                          Privacy
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">
                          Terms & Condition
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">
                          Protect yourself online
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">
                          Contact
                      </a>
                  </li>
              </ul>
          </nav>
          <div class="ml-auto">
              © 2024 JAPAN JOBS.All rights reserved by Japan Jobs
          </div>				
      </div>
    </footer>

    <script>
      function test(){
        var variablename = $('#Div-filter').attr('class'); //variable name (id or class)
      
        if(variablename == 'dropdown d-flex justify-content-center gap-3'){ //variablename = class
          $('#Div-filter').addClass('d-none d-sm-none');
        }else {
          $('#Div-filter').removeClass('d-none d-sm-none');
        }
      }
      </script>

      <!-- Option 1: Bootstrap scripts -->
      <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Option 1: Bootstrap scripts -->
      <script src="../.../assets/js/atlantis.js"></script>
      <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- Vendor JS Files -->
      <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="../assets/vendor/aos/aos.js"></script>
      <script src="../assets/vendor/php-email-form/validate.js"></script>

      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>

      <!-- jQuery UI -->
      <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
      <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

      <!-- jQuery Scrollbar -->
      <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

      <!-- Chart JS -->
      <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

      <!-- jQuery Sparkline -->
      <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

      <!-- Chart Circle -->
      <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

      <!-- Datatables -->
      <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

      <!-- Bootstrap Notify -->
      <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

      <!-- jQuery Vector Maps -->
      <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
      <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

      <!-- Sweet Alert -->
      <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

      <!-- Atlantis JS -->
      <script src="../assets/js/atlantis.min.js"></script>
    </body>
    </html>