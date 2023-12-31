<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Garamond&display=swap">
  <script type="text/javascript" src="<?php echo base_url('application/assets/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('application/assets/js/bootstrap.min.js'); ?>"></script>
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

  <!-- Additional CSS for navbar and body -->
  <style>
    body {
      font-family: 'Garamond', serif;
    }

    .navbar {
      background-color: rgba(192, 192, 192, 0.5);
    }

    .navbar-nav .nav-link {
      color: black;
      font-weight: normal;
      /* Reset font-weight for other links */
    }

    .navbar-nav .nav-link.bold-text {
      font-weight: bold;
      /* Apply bold font to selected links */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url('application/assets/images/blogs/blog.png'); ?>" alt="Blogger Icon" style="width: 150px; height: auto;">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link bold-text" href="<?php echo site_url('categories'); ?>" style="color: black;">Categories</a>
        </li>
        <?php if ($this->session->userdata('logged_in')) : ?>
          <li class="nav-item">
            <a class="nav-link bold-text" href="<?php echo site_url('blogs/create'); ?>" style="color: black;">Add Blogs</a>
          </li>
        <?php endif; ?>
      </ul>
      <div class="form-inline">
        <?php if ($this->uri->segment(1) != 'login') : ?>
          <div class="form-group">
            <?php echo form_open('home/search'); ?>
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" value="<?php echo $this->session->userdata('search_query') ?>">
            <?php $categories = $this->categories_model->get_published_cat(); ?>
            <select class="custom-select" name="category" title="Search by Category">
              <option value="AllCategory">Search by Category</option>
              <?php
              $search_cat = $this->session->userdata('search_cat');
              foreach ($categories as $category) {
                $selected = ($category['id'] == $search_cat) ? 'selected="selected"' : '';
                echo '<option ' . $selected . ' value="' . $category['id'] . '">' . $category['title'] . '</option>';
              } ?>
            </select>
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i> Search
            </button>
            <?php echo form_close(); ?>
          </div>
        <?php endif; ?>
        <?php if (!$this->session->userdata('logged_in')) : ?>
          <div class="">
            <a href="<?php echo site_url('signup'); ?>" class="btn btn-danger">
              <i class="fas fa-user-plus"></i> Sign-Up
            </a>
            <a href="<?php echo site_url('login'); ?>" class="btn btn-success">
              <i class="fas fa-sign-in-alt"></i> Login
            </a>
          </div>
        <?php else : ?>
          <a href="<?php echo site_url('logout'); ?>" class="btn btn-success">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
</body>

</html>