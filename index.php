<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id', $_SESSION) && isset($_SESSION['teacher_id'])) {
    header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
  <!-- Custom styles for this template -->
  <link href="navbar-fixed-top.css" rel="stylesheet">

  <!-- Add Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- CSS for Background Image and Animations -->
  <style>
    body {
      background-image: url('path/to/your/image.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .fade-in {
      animation: fadeIn 2s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    /* Scroll to top button */
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: #008CBA;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#" data-toggle="modal" data-target="#aboutModal">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- About Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="aboutModalLabel">About the Online Attendance Management System</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            The Online Attendance Management System is a web-based application designed to simplify the tracking, management, and reporting of student attendance in real-time. Faculty members can sign up, log in, mark attendance efficiently, view attendance records, and generate reports, while students do not have login access. The system provides detailed reports and visualizes attendance patterns through charts and graphs to help analyze trends. It also enables the management of user accounts, classes, and student records, along with system settings such as notifications. With a user-friendly interface accessible across devices, the system enhances the efficiency of attendance tracking and management for educational institutions.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="container" style="margin-top: 60px;">
      <h2 class="fade-in">For Students</h2>
      <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
      <hr>
      <h2 class="fade-in">For Faculty</h2>
      <div class="alert alert-warning hidden">
        <span></span>
        <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
      </div>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Login</th>
            <th>Sign Up</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <form id="login">
                <div class="form-group">
                  <label>Email ID</label>
                  <input class="form-control" placeholder="Email" type="email" name="email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" placeholder="Password" type="password" name="password">
                </div>
                <div class="form-group">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button class="btn btn-primary pull-right">Login</button>
              </form>
            </td>
            <td>
              <form id="signup">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" placeholder="Name" type="text" name="name">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input class="form-control" placeholder="Phone" type="text" name="phone">
                </div>
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input class="form-control" placeholder="Date of Birth" type="date" name="dob">
                </div>
                <div class="form-group">
                  <label>Email ID</label>
                  <input class="form-control" placeholder="Email" type="email" name="email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" placeholder="Password" type="password" name="password">
                  <span class="help-block">Password should be 6 characters long.</span>
                </div>
                <div class="form-group">
                  <label>Re-type Password</label>
                  <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
                </div>
                <button class="btn btn-primary pull-right">Sign Up</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <footer style="background: #222; color: #fff; padding: 20px 0;">
      <div class="container">
        <p>DBMS project developed by Nayan, Libin, Hari, and Hanoch</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
          <li class="list-inline-item"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
          <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
        </ul>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button onclick="topFunction()" id="myBtn" class="btn btn-primary">Top</button>

    <!-- Scripts for Scroll-to-Top and Tooltip -->
    <script>
      // Scroll to Top Functionality
      var mybutton = document.getElementById("myBtn");

      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      // Initialize Tooltip
      $(function () {
        $('[data-toggle="tooltip"]').