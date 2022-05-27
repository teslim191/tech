
        <footer class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <ul class="social-icons" style="list-style-type: none;">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f px-1"></i></a>
                                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                                <a href="#"><i class="fab fa-linkedin-in px-1"></i></a>
                                <a href="https://wa.me/+2347030263625"><i class="fab fa-whatsapp px-1"></i></a>
                                <!-- <a href="#"><i class="fab fa-instagram"></i></a> -->
                            </li>
                        </ul>                    
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-6">
                    <div class="small text-center text-muted">Copyright &copy; <?php echo date("Y"); ?> - <a href="" data-bs-toggle="modal" data-bs-target="#login">skyNet</a></div>
                    </div>

                </div>

            </div>

        </footer>
    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="admin.php" method="POST">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" required class="form-control mb-3">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required class="form-control">
                    <input type="submit" name="login" class="btn btn-primary mt-3">
                <a href="resetpassword.php" style="float: right;"  class="mt-3">
                forgot password?
                </a>
                </form>
            </div>
            </div>
        </div>
        </div>

