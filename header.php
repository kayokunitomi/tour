<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta="description" content="">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 "><!--viewportの設定-->
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<header>
  <div class="upper">
    <div class="container">
        <div class="small-info">マレーシアで素晴らしいひとときを・・</div>
    </div>
  </div>
  <div class="middle clearfix">
    <div class="container">
      <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="Malaysia tour"></a>
      </div>
      <div class="middle-right">
        <ul>
          <li><i class="far fa-clock"></i> 09:00AM — 05:00PM</li>
          <li><i class="fas fa-mobile-alt phone"></i> 03-0000-0000</li>
          <li class="date-weather">02/26 晴れ</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="menu clearfix">
    <div class="container">
      <div class="menu-bar">
        <ul class="menu-list">
          <li>ツアーを選ぶ</li>
          <li>ご予約の流れ</li>
          <li>会社案内</li>
          <li>FAQ</li>
          <li>お問い合わせ</li>
        </ul>
      </div>
    </div>
  </div>
 </header>
