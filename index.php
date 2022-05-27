<?php include "db.php";     ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>gtechnologyit</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- fontawesome cdn -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS includes Bootstrap-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <?php require "header.php"; ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">G-TECHNOLOGY</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"><em>...One of the fastest growing tech firm in Africa</em></p>
                        <a class="btn btn-secondary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-secondary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">About Us</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-2">G-technology is a group of young minds giving to research in I.T and other human capacity strategic development related fields.</p>
                        <p class="text-white-75 mb-2">our approach is based on initiating projects with clear objectives, delivering significant outcome to help drive the business needs of our client. With a customer centric focus we ensure our clients are satisfied every time and therefore we provide full support to our client even the young project completion</p>
                        <p class="text-white-75 mb-2">Our team consist of professional personnel and partners in a range of 1 to 15 years experience.
                        We have young energetic experts working in almost all technologies and spheres of I.T.
                        We have instructors engineers, animators, designer and usability expert around the world to meet the creative names of our clients</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container-fluid px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Services</h2>
                <hr class="divider" />
                <div class='row'>
                    <div class='col-lg-2 text-center'>
                        <div class='mt-5'>
                            <div class='mb-2'><img src='images/training.png' style='max-width: 30%;'></div>
                            <h5 class='mb-2'>Training</h5>
                            <div class=''>
                                <a href='training.php' class='btn btn-secondary text-light'>learn more</a>
                            </div>
                        </div>
                    </div>      
                    <div class='col-lg-2 text-center'>
                        <div class='mt-5'>
                            <div class='mb-2'><img src='images/cctv-camera.png' style='max-width: 30%;'></div>
                            <h5 class='mb-2'>Solar and CCTV</h5>
                            <div class=''>
                                <a href='solar.php' class='btn btn-secondary text-light'>learn more</a>
                            </div>
                        </div>
                    </div>      
                    <div class='col-lg-2 text-center'>
                        <div class='mt-5'>
                            <div class='mb-2'><img src='images/acquisition (1).png' style='max-width: 30%;'></div>
                            <h5 class='mb-2'>Sales of gadgets</h5>
                            <div class=''>
                                <a href='products.php' class='btn btn-secondary text-light'>learn more</a>
                            </div>
                        </div>
                    </div>      
                    <div class='col-lg-2 text-center'>
                        <div class='mt-5'>
                            <div class='mb-2'><img src='images/door-lock.png' style='max-width: 30%;'></div>
                            <h5 class='mb-2'>Smart door lock</h5>
                            <div class=''>
                                <a href='smartlock.php' class='btn btn-secondary text-light'>learn more</a>
                            </div>
                        </div>
                    </div>      
                    <div class='col-lg-2 text-center'>
                        <div class='mt-5'>
                            <div class='mb-2'><img src='images/tracking.png' style='max-width: 30%;'></div>
                            <h5 class='mb-2'>Car tracking</h5>
                            <div class=''>
                                <a href='car_tracking.php' class='btn btn-secondary text-light'>learn more</a>
                            </div>
                        </div>
                    </div>      
                    <div class='col-lg-2 text-center'>
                        <div class='mt-5'>
                            <div class='mb-2'><img src='images/tools.png' style='max-width: 30%;'></div>
                            <h5 class='mb-2'>Repair of gadgets</h5>
                            <div class=''>
                                <a href='repair.php' class='btn btn-secondary text-light'>learn more</a>
                            </div>
                        </div>
                    </div>                
            </div>
        </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next business with us? Send us a message and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder"></div>
                                  
                                    <br />
                                </div>
                            </div>
                        
                            <!-- Submit Button-->
                            <div><button class="btn btn-secondary btn-block" type="submit" value="">send message<i class="fas fa-paper-plane pl-2"></i></button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div><a style="text-decoration: none;" href="tel:+2347030263625">+234 (070) 3026-3625</a></div>
                        
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
