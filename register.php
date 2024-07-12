<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta name="keywords" content="IEEE, ICAST 2024, Ghana, ICAST Ghana Conference 2024, International Conference, Advanced Science and Technology, IEEE Ghana Section, research, innovations, Ghana Aviation Training Academy, ICAST GH 2024">
  <meta name="description" content="Join the IEEE ICAST 2024 in Ghana, the premier International Conference on Advanced Science and Technology. Hosted by the IEEE Ghana Section, this event brings together global researchers and innovators at the Ghana Aviation Training Academy to explore the latest advancements in science and technology. Don't miss out on this pivotal conference for groundbreaking research and innovations in Ghana.">

  <title>IEEE ICAST 2024 - Ghana | International Conference on Advanced Science and Technology</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="./images/logo/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/logo/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/logo/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./images/logo/favicon_io/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="./css/font-awesome.min.css" rel="stylesheet">
  <link href="./css/animate.min.css" rel="stylesheet">
  <link href="./css/venobox.css" rel="stylesheet">
  <link href="./css/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="./css/style.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- Include SweetAlert CSS and JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <style>
    .grid {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .grid h3 {
      color: #007bff;
      margin-bottom: 15px;
    }

    .grid p {
      text-align: justify;
      line-height: 1.6;
      margin-bottom: 15px;
      /* Adjusts spacing between paragraphs */
    }

    .grid a {
      color: #007bff;
      text-decoration: none;
    }

    .grid a:hover {
      text-decoration: underline;
    }

    /* Style for the 'How to submit your paper' section */
    .grid h1 {
      font-size: 1.75rem;
      color: #28a745;
      margin-top: 20px;
    }

    .grid h1 a {
      color: #28a745;
      text-decoration: none;
    }

    .countdown {
      width: 100%;
      /* background-color: rebeccapurple; */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column !important;
    }

    .flipdown {
      transform: scale(0.6);
      /* Adjust the scale value as needed */
      transform-origin: top center;
      /* Adjusts the point from which the scaling occurs */
      max-width: max-content !important;

    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8VLYL6BD84"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-8VLYL6BD84');
  </script>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#main">I<span>CAST</span>2024</a></h1>
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <!-- <a href="#intro" class="scrollto"><img src="images/logo/logo.jpg" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="./index.html">Home</a></li>
          <li><a href="./committee.html">Committees</a></li>
          <li><a href="./workshop.html">Workshop</a></li>
          <li><a href="./register.php">Registration</a></li>
          <li><a href="#call-for-paper">Call for papers</a></li>
          <li><a href="#submit-paper">Submission</a></li>
          <li><a href="#sponsors">Sponsors</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>ICAST </span>2024</h1>
      <p class="mb-4 pb-0">24 – 26 October 2024, Ghana Aviation Training Academy</p>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>IEEE ICAST 2024 is accepting submission for the 9th ICAST. This is sponsored by the IEEE Ghana Section
            </p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Ghana Aviation Training Academy</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>24-26 October 2024</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Registration Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Registration</h2>
        </div>

        <div class="container py-5">
          <div class="row">
            <!-- Early Registration -->
            <div class="col-lg-6">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Early Registration</h5>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>IEEE - $100 USD</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>IEEE Student Member - $50 USD</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Non-IEEE Member - $150 USD</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Student Non-IEEE Member - $75 USD</li>
                  </ul>
                  <div class="text-center">
                    <button id="purchaseBtnEarly" class="btn btn-primary" data-toggle="modal" data-target="#accountDetailsModal">Purchase Early</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Late Registration -->
            <div class="col-lg-6">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Late Registration</h5>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>IEEE - $150 USD</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>IEEE Student Member - $60 USD</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Non-IEEE Member - $200 USD</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Student Non-IEEE Member - $85 USD</li>
                  </ul>
                  <div class="text-center">
                    <button id="purchaseBtnLate" class="btn btn-primary" data-toggle="modal" data-target="#accountDetailsModal">Purchase Late</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Registration Form -->
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card">
                <h5 class="card-title text-muted text-uppercase text-center">IEEE ICAST 2024 Registration Form</h5>
                <hr>
                <div class="card-body">
                  <form method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <!-- Your form fields -->
                    <div class="mb-3">
                      <label for="fullName" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                      <label for="affiliation" class="form-label">Affiliation</label>
                      <input type="text" class="form-control" id="affiliation" name="affiliation" placeholder="Enter your affiliation" required>
                    </div>
                    <div class="mb-3">
                      <label for="contactNumber" class="form-label">Contact Number</label>
                      <input type="tel" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter your contact number" required>
                    </div>
                    <div class="mb-3">
                      <label for="paperID" class="form-label">Paper ID</label>
                      <input type="text" class="form-control" id="paperID" name="paperID" placeholder="Enter your paper ID (if applicable)">
                    </div>
                    <div class="mb-3">
                      <label for="category" class="form-label">Registration Category</label>
                      <select class="form-select" id="category" name="category" required>
                        <option value="" disabled selected>Select your category</option>
                        <option value="student">Student</option>
                        <option value="professional">Professional</option>
                        <option value="academic">Academic</option>
                      </select>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="agreeTerms" name="agreeTerms" required>
                      <label class="form-check-label" for="agreeTerms">
                        I agree to the terms and conditions
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for Account Details -->
        <div id="accountDetailsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="accountDetailsModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="accountDetailsModalLabel">Account Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p><b>Account Number:</b> 2441001382241</p>
                <p><b>Account Name:</b> IEEE Ghana Section</p>
                <p><b>Bank Name:</b> Ecobank Ghana Limited</p>
                <p><b>Bank Address:</b> 2nd Morocco Lane, Off Independence Avenue</p>
                <p><b>Bank City:</b> Accra</p>
                <p><b>Bank Country:</b> Ghana</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Accra Ghana</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p>
                <a href="tel:+233208351347">+233 20 835 1347</a>
                <br>
                <a href="tel:+233249653242">+233 24 965 3242</a>

              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@ieeeghicast2024.org">info@ieeeghicast2024.org</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="images/logo/logo.jpg" alt="TheEvenet">
            <p>
              IEEE ICAST 2024 is accepting submission for the IEEE Ghana section.
              <br>
              The conference will feature world-class plenary speakers, major Technical symposiums, industry, and
              academic panels.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Ghana Aviation Training Academy <br>
              Accra<br>
              Ghana <br>
              <strong>Phone:</strong> +233 20 835 1347 <br> +233 24 965 3242 <br>
              <strong>Email:</strong> info@ieeeghicast2024.org<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>IEEE</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://ghprofit.com/">GhProfit</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery-migrate.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/easing.min.js"></script>
  <script src="./js/hoverIntent.js"></script>
  <script src="./js/superfish.min.js"></script>
  <script src="./js/wow.min.js"></script>
  <script src="./js/venobox.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="./js/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  
  <script>
    // Use jQuery to handle the modal display
    $(document).ready(function() {
      $('#purchaseBtnEarly, #purchaseBtnLate').click(function() {
        $('#accountDetailsModal').modal('show');
      });
    });


document.querySelector('form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    const data = Object.fromEntries(formData.entries());

    try {
        const response = await fetch('./includes/register', {
            method: 'POST',
            body: new URLSearchParams(data),
        });

        const result = await response.json();
        if (result.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: result.message,
            }).then(() => {
                event.target.reset();
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: result.message,
            });
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error submitting form',
        });
    }
});
</script>
</body>

</html>