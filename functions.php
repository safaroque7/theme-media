<?php

//after setup theme
require_once get_template_directory() . '/includes/after-setup-theme.php';

//css and js
require_once get_template_directory() . '/includes/theme-media-css-js.php';

//nav regsiter
require_once get_template_directory() . '/includes/theme-media-nav-register.php';

//for aclass-wp-bootstrap-5.3.7-navwalker.php
include_once get_template_directory() . '/class-wp-bootstrap-5.3.7-navwalker.php';

//fallback-primary-menu
require_once get_template_directory() . '/includes/fallback-primary-menu.php';