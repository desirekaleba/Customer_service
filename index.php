
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="author" content="Desire Kaleba"/>
        <meta name="description" content="Simple CRUD application using PDO"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="keywords" content="html, css, javascript, php, bootstrap, mysql, pdo"/>

        <script src="front/jquery-3.3.1/jquery-3.3.1.js"></script>
        <script src="front/js/bootstrap.bundle.min.js"></script>
        <script src="ajax/users.js"></script>

        <link rel="stylesheet" href="front/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style/default.css"/>
        <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="front/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet"/>
        
        
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
   
        <section id="navbar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand mr-5" href="index.php"><h3>JENO</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_us">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " data-toggle="modal" href="#login_modal">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        </section>

        <section id="carousel">
            <div class="bd-example">
                <div id="carouselField" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselField" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselField" data-slide-to="1"></li>
                        <li data-target="#carouselField" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <!-- <div class="carousel-item active">
                            <img src="./images/back-2.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5  style="font-size : 52px; margin-bottom: 35%;" class="">Your management is our priority</h5>
                                <a style=" margin-bottom: 35%;" class="btn btn-dark btn-lg">Get in touch</a>
                            </div>
                        </div> -->
                        <div class="carousel-item active">
                          <img src="./images/back_1.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5  style="font-size : 62px; margin-bottom: 15%;" class="">Your management is our priority</h5>
                            <a style=" width: 200px; margin-bottom: 35%;" class="btn btn-dark btn-lg">Get in touch</a>
                          </div>
                        </div>
                      <!-- <div class="carousel-item">
                          <img src="./images/back_3.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5  style="font-size : 52px; margin-bottom: 35%;" class="">Your management is our priority</h5>
                            <a style=" margin-bottom: 35%;" class="btn btn-dark btn-lg">Get in touch</a>
                          </div>
                      </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselField" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselField" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
      </section>

      <section id="about_us" class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-4">
              <img class="img img-responsive" src="images/about_us.jpg" alt="about us" width="100%" title="about us"/>
            </div>
            <div class="col-md-8 text-justify">
              <h2>About Us</h2>
              <p>We have created a fictional band website. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>
        </div>
      </section>

      <section id="services" class="mt-5">
        <h2 class="text-center text-white mt-4">SERVICES</h2>
        <div class="container">
          <div class="row pt-4 pb-4">
            <div class="col-md-3 bg-dark mr-2">
              <h4 class="text-white">Web Development</h4>
              <ul class="text-white">
                <li>Design: Page Layouts, Review, and Approval Cycle</li>
                <li>Content Writing and Assembly</li>
                <li>Testing, Review, and Launch</li>
                <li>Maintenance: Opinion Monitoring and Regular Updating</li>
              </ul>
            </div>
            <div class="col-md-3 bg-dark mr-2">
              <h4 class="text-white">Web Hosting</h4>
              <ul class="text-white">
                <li>Shared Hosting. $2.75 – $15 per month</li>
                <li>VPS Hosting. $5 – $80 per month</li>
                <li>Dedicated Hosting. $80 – $730 per month</li>
                <li>Cloud Hosting. $4.50 – $240 per month</li>
              </ul>
            </div>
            <div class="col-md-3 bg-dark mr-2">
              <h4 class="text-white">Coaching</h4>
              <ul class="text-white">
                <li>The Coaching Spirit.</li>
                <li>Relationship and Trust</li>
                <li>Listening and Intuition.</li>
                <li>Goals and Action Plans.</li>
              </ul>
            </div>
            <div class="col-md-2 bg-dark">
              <h4 class="text-white">Design</h4>
              <ul class="text-white">
                <li>Architecture</li>
                <li>Fashion</li>
                <li>User Interface</li>
                <li>website</li>
                <li>Engineering</li>
                <li>Interior</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="container">
          <h2 class="h1-responsive  text-center mt-4">Contact us</h2>
          
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
              a matter of hours to help you.</p>

          <div class="row">

              <div class="col-md-9 mb-5">
                  <form id="contact_form" name="contact_form" action="" method="POST">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Your name</label>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="email" name="email" class="form-control">
                                  <label for="email" class="">Your email</label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="subject" name="subject" class="form-control">
                                  <label for="subject" class="">Subject</label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                  <label for="message">Your message</label>
                              </div>
                          </div>
                      </div>
                  </form>
                  <div class="text-center text-md-left">
                      <a class="btn btn-primary" onclick="">Send</a>
                  </div>
                  <div class="status"></div>
              </div>

              <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Kampla, kansanga, Uganda</p>
                      </li>

                      <li><i class="fas fa-phone mt-4 fa-2x"></i>
                          <p>+ 256 772 86 21 30</p>
                      </li>

                      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>contact@jenosystem.com</p>
                      </li>
                  </ul>
              </div>

          </div>

      </section>
      
      <section id="footer " class="bg-dark text-white">
          <footer class="page-footer font-small cyan darken-3">

          <div class="container">
            <div class="row">
              <div class="col-md-12 py-5">
                <div class="mb-5 flex-center">
                  <a class="fb-ic">
                    <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <a class="tw-ic">
                  
                    <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <a class="gplus-ic">
                    <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <a class="li-ic">
                    <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <a class="ins-ic">
                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <a class="pin-ic">
                    <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="index.php" class="white"> DESIRE KALEBA</a>
          </div>
          </footer>
      </section>


      <!-- Modals -->
      <!-- login modal -->
      <div class="modal fade" id="login_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="php/controller.php?req=login" method="POST">
                <div class="modal-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control "type="text" id="username" name="username" placeholder="username"/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control "type="password" id="password" name="password" placeholder="password"/>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Login</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
              
          </div>
        </div>  
      </div>

      <!-- login modal -->
    </body>
</html>