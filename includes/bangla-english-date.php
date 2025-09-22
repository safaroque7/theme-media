<?php
function get_bangla_date()
{
    $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    $date = date('l, j F Y');
    $bangla_date = str_replace($en, $bn, $date);
    return $bangla_date;
}
