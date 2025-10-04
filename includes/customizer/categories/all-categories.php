<?php
add_action('customize_register', 'rjs_customize_register');

function rjs_customize_register($wp_customize)
{
  // === ১. সব ক্যাটাগরি নিন (পোস্ট খালি হলেও) ===
  $rjs_categories_full_list = get_categories(array(
    'orderby'    => 'name',
    'hide_empty' => false, // 👉 খালি ক্যাটাগরিও দেখাবে
  ));

  // === ২. কোনো ক্যাটাগরি না থাকলে রিটার্ন করুন ===
  if (empty($rjs_categories_full_list)) {
    return;
  }

  // === ৩. ক্যাটাগরির নাম ও আইডি দিয়ে choices list তৈরি ===
  $rjs_choices_list = [];
  foreach ($rjs_categories_full_list as $rjs_single_cat) {
    $rjs_choices_list[$rjs_single_cat->term_id] = esc_html($rjs_single_cat->name);
  }

  // === ৪. কাস্টমাইজার সেকশন তৈরি করুন ===
  $wp_customize->add_section('npa_acd', array(
    'title'    => __('All Category Names', 'media'),
    'priority' => 50,
  ));

  // === ৫. সব ক্যাটাগরি গুনে রাখুন ===
  $categories_count = count($rjs_categories_full_list);

  // === ৬. foreach লুপ ব্যবহার করুন (১টি করে dropdown তৈরি) ===
  $index = 1;
  foreach ($rjs_categories_full_list as $cat) {
    $wp_customize->add_setting('rjs_category_dropdown_' . $index, array(
      'type'       => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default'    => 1,
    ));

    $wp_customize->add_control('rjs_category_dropdown_' . $index, array(
      'type'    => 'select',
      'section' => 'npa_acd',
      'label'   => sprintf(__('%d No. Category', 'media'), $index),
      'choices' => $rjs_choices_list,
    ));

    $index++;
  }

  // === ৭. ডিবাগিং (চাইলে লগ দেখতে পারেন) ===
  error_log('Total categories found: ' . $categories_count);
}
