
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="#">comicsonline@yahoo.com</a>
            <i class="icofont-phone"></i> +92 *** *******
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</section>

<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/">Comics Online</a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/comicsList">Comics List</a></li>
                <li><a href="/favorites">Favorites</a></li>
                <li><a href="/about">About Us</a></li>
                <li class="drop-down"><a href="">Latest Release</a>
                    <ul>
                        <li><a href="/titles/Naruto">Naruto</a></li>
                        <li class="drop-down"><a href="/titles/Attack%20On%20Titan">Attack on Titans</a>
                            <ul>
                                <li><a href="/chapter/Attack%20On%20Titan/1">Season 1</a></li>
                                <li><a href="/chapter/Attack%20On%20Titan/2">Season 2</a></li>
                                <li><a href="/chapter/Attack%20On%20Titan/3">Season 3</a></li>
                                <li><a href="/chapter/Attack%20On%20Titan/4">Season 4</a></li>
                            </ul>
                        </li>
                        <li><a href="/titles/PromissedNeverland">The Promissed Neverland</a></li>
                        <li><a href="/titles/One%20Piece">One Piece</a></li>
                        <li><a href="/titles/Demon%20Slayer">Demon Slayer</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a id="loginIcon" href="javascript:void(0)"><span class="loginIcon"><i class="icofont-user-alt-7"></i></span></a></li>
            </ul>
        </nav>

    </div>
</header>


<div style="display: none">
    <div id="loginForm">
        <div id="loginFormContainer" class="loginFormContainer">
            <label for="email">Email:</label>
            <input type="email" placeholder="Enter email address" id="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" placeholder="Enter password" id="password">
            <br>
            <button onclick="submitLogin()" class="priBtn">Login</button>
            <button onclick="openRegisterPopup()" class="secBtn">Register</button>
        </div>
    </div>


    <div id="registerForm">
        <div id="regFormContainer" class="loginFormContainer">
            <label for="name">Full Name:</label>
            <input type="test" placeholder="Enter full name" id="name">
            <br>
            <label for="reg_email">Email:</label>
            <input type="email" placeholder="Enter email address" id="reg_email">
            <br>
            <label for="reg_password">Password:</label>
            <input type="password" placeholder="Enter password" id="reg_password">
            <br>
            <label for="conf_password">Confirm Password:</label>
            <input type="password" placeholder="Enter confirm password" id="conf_password">
            <br>
            <button class="priBtn">Register</button>
            <button onclick="openLoginPopup()" class="secBtn">Login</button>
        </div>
    </div>

</div>
