<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Workspace</title>
    <link rel="stylesheet" href="<?php echo URL; ?>css/master.css" />
    <script type="text/javascript" src="<?php echo URL; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/custom.js"></script>
  </head>
  <body>
    <div id="header">
      <!--header <br/>-->
      <a href="<?php echo URL; ?>">Home</a>
      <a href="<?php echo URL; ?>Help">Help</a>
      <?php if (Session::get('loggedIn') == true):?>
        <a href="<?php echo URL; ?>profile">Profile</a>
        <a href="<?php echo URL; ?>profile/logout">Logout</a>
      <?php else: ?>
        <a href="<?php echo URL; ?>login">Login</a>
      <?php endif; ?>


      <hr/><br/>
    </div>

    <div id="content">
      <!-- All the content here. -->
