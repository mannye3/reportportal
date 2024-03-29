<?php include'inc/login_header.php';  ?>
<body class="vertical-layout">
        <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box forgot-password-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-head">
                                            <a href="index.html" class="logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                                        </div> 
                                        <h4 class="text-primary my-4">Forgot Password ?</h4>
                                        <p class="mb-4">Enter the email address below to receive reset password instructions.</p>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Enter Email here" required>
                                        </div>                          
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Send Email</button>
                                    </form>
                                    <p class="mb-0 mt-3">Remember Password? <a href="user-login.html">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
  <?php include'inc/login_footer.php';  ?>