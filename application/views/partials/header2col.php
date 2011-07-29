<!DOCTYPE HTML>
<html>

  <head>

    <title><?php echo isset($title) ? $title : "Classic Wars - The Age of Crusades | BBMMORPG"; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="free, free mmorpg, free bbmmorpg, free mmo, mmo, mmorpg games, bbmmorpg, mmorpg, rpg, mmo, wars, medieval, knights, dark knight, mage, mages, archer, archers, weapons, armor, blacksmith, kingdom, classical, fun, games, gaming, competition, raiding, mobs, bosses, quests" />
    <meta name="description" content="Classicwars.com is a Browser Based MMORPG (BBMMORPG). It offers expansive quests, friendships, kingdoms, thousands of items and more!" />
    <!--[if IE]>
    <script src="js/shiv.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="/js/main.js"></script>
  </head>

  <body>
      <div id="modal" onclick="$(this).fadeOut('slow'); $('#modal_content').fadeOut('slow');" style="position:fixed; left:0; top:0; background:#000; width:100%; height:100%; display:none; z-index:9999;"></div>
          <div id="modal_container" style="padding:10px;position:fixed; top:50%; background:#70675d; display:none; z-index:9999; left:50%;">
              <div id="modal_content"></div>
              <div id="modal_footer" style="text-align:center;"><input type="button" value="OK" onclick="$('#modal').fadeOut('slow'); $(this).parent().parent().fadeOut('slow')" /></div>

          </div>
      <div id="chat" style="background:#b3a498; height:167px; width:500px; opacity:0.3; filter:alpha(opacity=30); z-index:9999; left:-468px; position:fixed; top:50%;">
          <div id="chat_text" style="float:left; width:468px;"></div>
          
      </div>
      <div onclick="open_chat();" id="chat_button" style="float:right; background:url(/images/buttons/chat_off.png) no-repeat; width:32px; height:167px; position:fixed; left:0; top:50%; z-index:9999;"></div>
      <div id="bg">

          <div id="wrapper" style="width:1025px; margin-left:auto; margin-right:auto;">

              <header>
                  <a href="/" id="logo">Classicwars | BBMMORPG (Browser Based MMORPG)</a>
                  <div id="login">
                      <form method="post" action="/user/login/">
                          <div id="login_text">
                          <p><input type="text" name="username" /></p>
                          <p><input type="password" name="password" /></p>
                          </div>
                          <div id="login_button">
                              <input type="image" src="/images/trans_login.png" />
                          </div>
                      </form>
                      <div id="login_links">
                          <a href="#">Forgot Password?</a> |
                          <a href="<?php echo URL::to_register(); ?>">Register</a>
                      </div>
                  </div>
              </header>

              <div id="repeat_home">

                  <div id="main_home">

                      <div id="left_col">

                          <nav>
                              <ul>
                                <?php
                              	if(!Auth::check()): ?>
                              	<li><a href="/">Home</a></li>
                                <li><a href="/user/register">Register</a></li>
                                <li><a href="#">Screenshots</a></li>
                               	<?php
								else: ?>
								<li><a href="/user/profile">Profile</a></li>
								<li><a href="/explore">Explore</a></li>
								<li><a href="/attack">Attack</a></li>
								<li><a href="/kingdom">Kingdom</a></li>
								<li><a href="/user/settings">User Settings</a></li>
								<?php
								endif; ?>
                              </ul>
                          </nav>

                          <div id="advertisement">
                          </div>

                      </div>