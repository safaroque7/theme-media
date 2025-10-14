<?php

//after setup theme
require_once get_template_directory() . '/includes/helpers/after-setup-theme.php';

//css and js
require_once get_template_directory() . '/includes/helpers/theme-media-css-js.php';

//nav regsiter
require_once get_template_directory() . '/includes/helpers/theme-media-nav-register.php';

//for aclass-wp-bootstrap-5.3.7-navwalker.php
include_once get_template_directory() . '/includes/helpers/class-wp-bootstrap-5.3.7-navwalker.php';

//fallback-primary-menu
require_once get_template_directory() . '/includes/helpers/fallback-primary-menu.php';

// add-primary-category-field
include_once get_template_directory() . '/includes/helpers/bangla-english-date.php';


//for class-tgm-plugin-activation
if (file_exists(get_template_directory() . '/includes/helpers/class-tgm-plugin-activation.php')) {
    include_once('includes/helpers/class-tgm-plugin-activation.php');
}

//for tgm
if (file_exists(get_template_directory() . '/includes/helpers/tgm.php')) {
    include_once('includes/helpers/tgm.php');
}

//for customizer
if (file_exists(get_template_directory() . '/includes/customizer/npa-customizer.php')) {
    include_once('includes/customizer/npa-customizer.php');
}

//for category
if (file_exists(get_template_directory() . '/includes/customizer/categories/all-categories.php')) {
    include_once('includes/customizer/categories/all-categories.php');
}

//for category
if (file_exists(get_template_directory() . '/includes/helpers/talkshow-design-function-1.php')) {
    include_once('includes/helpers/talkshow-design-function-1.php');
}

function convert_to_bangla($number)
{
    $eng = [
        'months',
        'month',
        'hours',
        'hour',
        'minutes',
        'minute',
        'seconds',
        'second',
        'days',
        'day',
        'weeks',
        'week',
        'years',
        'year',
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
        'am',
        'pm',
        'AM',
        'PM',
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9'
    ];

    $bng = [
        'মাস',
        'মাস',
        'ঘণ্টা',
        'ঘণ্টা',
        'মিনিট',
        'মিনিট',
        'সেকেন্ড',
        'সেকেন্ড',
        'দিন',
        'দিন',
        'সপ্তাহ',
        'সপ্তাহ',
        'বছর',
        'বছর',
        'জানুয়ারি',
        'ফেব্রুয়ারি',
        'মার্চ',
        'এপ্রিল',
        'মে',
        'জুন',
        'জুলাই',
        'আগস্ট',
        'সেপ্টেম্বর',
        'অক্টোবর',
        'নভেম্বর',
        'ডিসেম্বর',
        'এএম',
        'পিএম',
        'এএম',
        'পিএম',
        '০',
        '১',
        '২',
        '৩',
        '৪',
        '৫',
        '৬',
        '৭',
        '৮',
        '৯'
    ];

    return str_replace($eng, $bng, $number);
}
