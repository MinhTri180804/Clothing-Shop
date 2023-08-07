   <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav flex justify-between items-center pt-[20px]">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?php echo _WEB_ROOT; ?>/index.php" class="logo">
                            <img src="<?php echo _IMG_BASE_PATH; ?>logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav m-0">
                            <li class="scroll-to-section"><a href="<?php echo _WEB_ROOT; ?>/index.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="<?php echo _WEB_ROOT; ?>/index.php/products/productmen/">Men's</a></li>
                            <li class="scroll-to-section"><a href="<?php echo _WEB_ROOT; ?>/index.php/products/productwomen/">Women's</a></li>
                            <li class="scroll-to-section"><a href="<?php echo _WEB_ROOT; ?>/index.php/products/productkids">Kid's</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="<?php echo _WEB_ROOT; ?>/index.php/about">About Us</a></li>
                                    <li><a href="<?php echo _WEB_ROOT; ?>/index.php/product">Products</a></li>
                                    <li><a href="<?php echo _WEB_ROOT; ?>/index.php/contact">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                        <?php
                        if (isset($_SESSION['login']['fullName'])) {
                            $name = $_SESSION['login']['fullName'];
                            echo '
                        <div class="group relative p-[10px] hover:text-black">
                        <span class="font-medium uppercase text-[20px] cursor-pointer">
                            ' . $name . '
                        </span>
                        <div class="absolute hidden group-hover:block text-black top-[100%] bottom-0 left-0 right-0">
                            <ul class="">
                                <li class="p-[10px] border-y border-[#fff]" >
                                    <a class="cursor-pointer" href="/model/handleLogout.php">Log Out</a>
                                </li>
                                <li class="p-[10px] border-y border-[#fff]">
                                    <a>Setting Profile</a>
                                </li>
                            </ul>
                        </div>
                        </div>';
                        } else {
                            echo '<a href="'._WEB_ROOT.'/index.php/login" class="font-medium uppercase text-[20px] cursor-pointer">
                            login
                        </a>';
                        }
                        ?>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>