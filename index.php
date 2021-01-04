<!DOCTYPE html>
<html>
  <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
      <!-- my css -->
      <link rel="stylesheet" href="css/style.css">
      
      <!--Let browser know website is optimized for mobile-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <title>Portfolio</title>
    </head>

    <body id="home" class="scrollspy">
        <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="grey darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#home" class="brand-logo">Portfolio.</a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                          <li><a href="#about">About</a></li>
                          <li><a href="#clients">Clients</a></li>
                          <li><a href="#services">Services</a></li>
                          <li><a href="#portfolio">Portfolio</a></li>
                          <li><a href="#contact">Contact</a></li>
                        </ul>
                      </div>
                </div>
            </nav>
          </div>
        <!-- akhir navbar -->

          <!-- sidenav -->
          <ul class="sidenav" id="mobile-nav">
            <li><a href=""#about">About</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <!-- akhir sidenav -->

          <!-- home section start -->
          <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text-1">Hello, my name is</div>
                    <div class="text-2">Mikhael Adriel</div>
                    <div class="text-3">And I'm a <span class="typing"></span></div>
                </div>
            </div>
        </section>
        <!-- home section end-->

          <!-- About Us -->
          <section id="about" class="about scrollspy">
            <div class="container">
                <div class="row">
                    <h3 class="center light grey-text text-darken-3">About</h3>
                    <div class="col m12 light">
                        <div class="text">I'm Mikhael and I'm a <span class="typing-2"></span></div>
                        <p>A career in Industrial Technology, specifically in the areas of software developer, that will optimally utilize strong creativity and excellent analytical thinking as well as basics coding, markup language, and programming skills. </p>
                    </div>
                </div>
            </div>
          </section>
          <!-- akhir About Us -->

          <!-- Clients -->
          <div id="clients" class="parallax-container scrollspy">
            <div class="parallax"><img src="img/slider/4.png"></div>

            <div class="container clients">
                <h3 class="center light white-text">My Teams</h3>
                <div class="row">
                  <div class="col m4 s12 center">
                    <div class="card-panel center">
                      <img src="img/m1.jpg" alt="1" class="circle responsive-img">
                      <h5>Lorem, ipsum.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="col m4 s12 center">
                    <div class="card-panel center">
                      <img src="img/m2.jpg" alt="2" class="circle responsive-img">
                      <h5>Lorem, ipsum.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="col m4 s12 center">
                    <div class="card-panel center">
                      <img src="img/m3.jpg" alt="3" class="circle responsive-img">
                      <h5>Lorem, ipsum.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- akhir Clients -->

          <!-- services -->
          <section id="services" class="services scrollspy grey lighten-5">
            <div class="container">
              <div class="row">
                <h3 class="light center gray-text-darken-3">My Services</h3>
                <div class="col m4 s12">
                  <div class="card-panel center waves-effect">
                    <i class="material-icons medium">dvr</i>
                    <h5>Web Development</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center waves-effect">
                    <i class="material-icons medium">dock</i>
                    <h5>Mobile App Development</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center waves-effect">
                    <i class="material-icons medium">games</i>
                    <h5>Game Development</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- akhir services -->

          <!-- portfolio -->
          <section id="portfolio" class="portfolio scrollspy">
            <div class="container">
              <h3 class="light center grey-text text-darken-3">Portfolio</h3>
              <div class="row">
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/1.png" alt="1" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/2.png" alt="2" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/3.png" alt="3" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/4.png" alt="4" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/5.png" alt="5" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/6.png" alt="6" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/1.png" alt="1" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
                <div class="col m3 sm 12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/portfolio/2.png" alt="2" class="responsive-img materialboxed">
                      <span class="card-title">Card Title</span>
                      <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- akhir portfolio -->

          <!-- contact us -->
          <section id="contact" class="contact scrollspy">
            <div class="container">
              <h3 class="light grey-text text-darken-3 center">Contact</h3>
              <div class="row">
                <div class="col m5 s12">
                  <div class="card-panel grey darken-2 center">
                    <i class="material-icons white-text">email</i>
                    <h5 class="white-text">E-mail</h5>
                    <p class="white-text">mikhaelapg@gmail.com</p>
                  </div>
                  <ul class="collection with-header">
                    <li class="collection-header"><h4>Contact</h4></li>
                    <li class="collection-item">Mikhael</li>
                    <li class="collection-item">Bandung</li>
                    <li class="collection-item">West Java, Indonesia</li>
                  </ul>
                </div>

                <div class="col m7 s12">
                  <form action="index.php" method="POST">
                    <div class="card-panel">
                      <h5>Please Fill out this form</h5>
                      <div class="input-field">
                        <input type="text" name="name" id="name" required class="validate">
                        <label for="name">Name</label>
                      </div>
                      <div class="input-field">
                        <input type="email" name="email" id="email" class="validate">
                        <label for="email">E-Mail</label>
                      </div>
                      <div class="input-field">
                        <input type="text" name="phone" id="phone" required class="validate">
                        <label for="phone">Phone</label>
                      </div>
                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea"></textarea>
                        <label for="message">Message</label>
                      </div>
                      <button type="submit" class="btn grey">Send</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- akhir contact us -->

          <!-- footer -->
          <footer class="grey darken-4 white-text center">
            <p class="flow-text">&copy; copyright 2020 | built by. <a href="http://instagram.com/mikhaelapg">Mikhael Adriel</p>
          </footer>
          <!-- akhir footer -->

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/script.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        //sidebar
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
        
        //slider
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        //parallax
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        //material box
        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        //scroll spy
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });
      </script>

    <?php
      if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO user(name,email,phone,message) VALUES('$name','$email','$phone', '$message')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
      }
    ?>
    </body>
  </html>