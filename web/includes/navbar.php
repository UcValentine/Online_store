<header class="header">
    <div class="container-fluid px-lg-5">
        <!-- nav -->
        <nav class="py-4">
            <div id="logo">
                <h1> <a href="index.php">Val-Store</a></h1>
                <!--<a href="index.php"><img src="./images/logo.png" alt=""></a>-->
            </div>
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                    <a href="#">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                    <input type="checkbox" id="drop-2" />
                    <ul>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop Now</a></li>
                        <li><a href="shop-single.php">Single Page</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>
