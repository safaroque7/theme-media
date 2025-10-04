<?php
function primary_menu_fallback()
{ ?>

    <ul class="navbar-nav nav-ft-size">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ENGLISH SPEAKING
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="single-page.html">English For Beginners</a>
                </li>
                <li><a class="dropdown-item" href="single-page.html">English For Business</a>
                </li>
                <li><a class="dropdown-item" href="single-page.html">English For Foreign</a>
                </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                PUBLIC SPEAKING
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="single-page.html">Speaking For Corporates</a>
                </li>
                <li><a class="dropdown-item" href="single-page.html">Speaking For Motivational
                        Speakers</a>
                </li>
                <li><a class="dropdown-item" href="single-page.html">Speaking For Students</a>
                </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                INTERVIEW
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="single-page.html">Interview For SSB</a></li>
                <li><a class="dropdown-item" href="single-page.html">Interview For MNC</a></li>
                <li><a class="dropdown-item" href="single-page.html">Interview For Jobs</a></li>
                <li><a class="dropdown-item" href="single-page.html">Interview For Cabin
                        Crew</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                PERSONALITY DEVELOPMENT
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="single-page.html">Disordered Personality</a>
                </li>
                <li><a class="dropdown-item" href="single-page.html">Personal Development &
                        Growth</a></li>

            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                STUDY ABROAD
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="single-page.html">IELTS</a></li>
                <li><a class="dropdown-item" href="single-page.html">TOEFL</a></li>
                <li><a class="dropdown-item" href="single-page.html">OET</a></li>
                <li><a class="dropdown-item" href="single-page.html">PTE</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                FOREIGN LANGUAGES
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="single-page.html">French</a></li>
                <li><a class="dropdown-item" href="single-page.html">German</a></li>
                <li><a class="dropdown-item" href="single-page.html">Spanish</a></li>
                <li><a class="dropdown-item" href="single-page.html">Japanese</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                GALLERY
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="image-gallery.html">Image Gallery</a></li>
                <li><a class="dropdown-item" href="video-gallery.html">Video Gallery</a></li>

            </ul>
        </li>

    </ul>

<?php };

// bottom_category_menu_fallback
function bottom_category_menu_fallback()
{ ?>

    <ul>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> রাজনীতি </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> সংগঠন </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> ব্যবসা </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> ইংরেজি </a>
        </li>
    </ul>

<?php

}


// bottom_category_menu_fallback
function legal_menu_fallback()
{ ?>

    <ul>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> গোপনীয়তা নীতি </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> ব্যবহারের শর্তাবলী </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> কপিরাইট নীতি </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> সম্পাদকীয় নীতি </a>
        </li>
        <li>
        </li>
    </ul>

<?php

}

// bottom_category_menu_fallback
function contact_menu_fallback()
{ ?>
    <ul>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> <i class="bi bi-facebook"></i> Facebook </a>
        </li>
        <li>
            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"> <i class="bi bi-youtube"></i> Youtube </a>
        </li>
    </ul>

<?php

}
