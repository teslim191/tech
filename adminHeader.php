<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <?php if (isset($_SESSION['email'])): ?>
                        <li class="sidebar-item pt-2">
                            <span class="sidebar-link waves-effect waves-dark sidebar-link"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu"><?php echo $_SESSION['email']; ?></span>
                            </span>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo 'index.php'; ?>"
                                aria-expanded="false">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">Homepage</span>
                            </a>
                        </li>
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="fas fa-chart-line" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="trainingform.php"
                                aria-expanded="false">
                                <i class="fab fa-pen-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Course</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="solarimages.php"
                                aria-expanded="false">
                                <i class="fab fa-pen-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Solar and CCTV</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="smartlock_images.php"
                                aria-expanded="false">
                                <i class="fab fa-pen-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Smartlock</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="repair_uploads.php"
                                aria-expanded="false">
                                <i class="fab fa-pen-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Repair</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="productUpload.php"
                                aria-expanded="false">
                                <i class="fab fa-pen-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="car_tracking_uploads.php"
                                aria-expanded="false">
                                <i class="fab fa-pen-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Car Tracking</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="managecontact.php"
                                aria-expanded="false">
                                <i class="fas fa-comments" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Contacts</span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo 'logout.php'; ?>"
                                aria-expanded="false">
                                <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>