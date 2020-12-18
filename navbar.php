<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/nasuha.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.php">Nasuha Asri</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/nasuhasri" class="twitter" target="no_blank"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/nasuha.asri/" class="facebook" target="no_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/nasuhasri/" class="instagram" arget="no_blank"><i class="bx bxl-instagram"></i></a>
                <a href="https://github.com/nasuhasri" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/nasuhasri/" class="linkedin" target="no_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>

                <!-- <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#academic"><i class="bx bx-book-content"></i> Academic</a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
            
                <div class="dropdown-divider"></div> -->
                <li><a href="randomFacts.php"><i class='bx bx-atom'></i> <span>Facts</span></a></li>
                <li><a href="roleModel.php"><i class='bx bxs-book-heart'></i> <span> Model</span></a></li>
                <li><a href="places.php"><i class='bx bxs-plane-alt'></i> <span> Places</span></a></li>
                <li><a href="quiz.php"><i class="icofont-pen-alt-1"></i> <span>Quick Test</span></a></li>
            </ul>

            <script type="text/javascript">
                const currentLocation = location.href;
                const menuItem = document.querySelectorAll('a');
                const menuLength = menuItem.length;

                for(var i = 0; i < menuLength; i++){
                    if(menuItem[i].href === currentLocation){
                        menuItem[i].className = "active"
                    }
                }
            </script>

        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header>