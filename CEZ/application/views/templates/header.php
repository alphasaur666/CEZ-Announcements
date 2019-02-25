<html>
	<head>
		<title>CEZ Announcements</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">CEZ Announcements</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav justify-content-end">
            <li><a href="<?= base_url("about"); ?>"> <button type="button" class ="btn btn-secondary"> About </button></a></li>
             <li><a href="<?= base_url("posts"); ?>"> <button type="button" class ="btn btn-secondary"> Announcements </button> </a></li>
             <li><a href="<?php echo base_url(); ?>categories"><button type="button" class ="btn btn-secondary"> Categories </button> </a></li>
          </ul>
          <ul class="nav navbar-nav justify-content-end">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/login"> <button type="button" class ="btn btn-secondary"> Login</button></a></li>
            <li><a href="<?php echo base_url(); ?>users/register"> <button type="button" class ="btn btn-secondary"> Register</button></a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>posts/create"> <button type="button" class ="btn btn-secondary"> Create an anouncement</button></a></li>
            <li><a href="<?php echo base_url(); ?>categories/create"> <button type="button" class ="btn btn-secondary" > Create a category </button></a></li>
            <li><a href="<?php echo base_url(); ?>users/logout"> <button type="button" class ="btn btn-secondary" >Logout
            </button> </a> </li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>