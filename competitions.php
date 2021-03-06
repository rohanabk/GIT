<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#4db6ac">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/git.jpeg">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="images/git.jpeg">



  <link rel="shortcut icon" href="images/git.jpeg">
  <link rel="stylesheet" href="manifest.json">
  <title>GIT I&E</title>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">

</head>

<body>
  <div class="navbar-fixed">
    <nav class="navbar">
      <div class="nav-wrapper teal lighten-2">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

        <a href="#" class="brand-logo left"> &nbsp GIT I & E</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

        </ul>
      </div>
    </nav>
  </div>

  <ul id="slide-out" class="side-nav fixed">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="images/office.jpg">
        </div>
        <center>
          <a href="#!user"><img class="circle" src="images/git.jpeg"></a>
          <a href="#!name"><span class="white-text name" style="font-size:25px;">Welcome</span></a>
        </center>
      </div>
    </li>
    <li><a class="waves-effect" href="startups.html"><i class="material-icons">computer</i>Startups on Campus</a></li>
    <li><a class="waves-effect" href="incubation.html" id="incubation"><i class="material-icons">work</i>Incubation</a></li>
    <li class="active"><a class="waves-effect" href="competitions.php"><i class="material-icons">supervisor_account</i>Competitions</a></li>
    <li><a href="proposal.php" class="waves-effect"><i class="material-icons">file_copy</i>Submit Proposal</a></li>
    <li><a class="waves-effect" href="http://internshiptracker.git.edu/students/"><i class="material-icons">cloud</i>Internship Tracker</a></li>
    <li><a href="http://gitbelgaum.almaconnect.com/" id="" class="waves-effect"><i class="material-icons">recent_actors</i>Connect with GIT Alumni</a></li>

    <li><a class="waves-effect" href="patent.html"><i class="material-icons">assistant</i>Patent filing assistance</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="waves-effect" href="aboutus.html"><i class="material-icons">people</i>About Us</a></li>
  </ul>

  <div class="page-content">
    <div id="main-content">
      <?php
      require './admin/init.php';
      $res = mysqli_query($con, "SELECT * FROM competitions");
      ?>
      <div style="padding-left: 25px; padding-right: 20px;" id="main">

        <div class='row'>
          <?php 
          while ($row = mysqli_fetch_assoc($res)) {
          ?>
          <div class='col m6 s12'>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" height="150px" width="100%" src="<?php echo $row['image']; ?>">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echo $row['title']; ?><i class="material-icons right">more_vert</i></span>
                <p><a href="<?php echo $row['link']; ?>" target="_blank">Participate</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php echo $row['title']; ?></span>
                <p><?php echo $row['description']; ?></p>
              </div>
            </div>
          </div>
      <?php } ?>
        </div>
      </div>
    </div>
  </div>

</body>

</html>



<script type="text/javascript">
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $('.button-collapse').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true, // Choose whether you can drag to open on touch screens,
    onOpen: function(el) { /* Do Stuff   */ }, // A function to be called when sideNav is opened
    onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
  });
  $(function() {
    $("#other").click(function() {
      $('#result').load('new1.html');
    });
  });
</script>
<script type="text/javascript">
  $('#incubation').click(function(e) {
    e.preventDefault(); // stops the default action of clicking on the link
    var pageToLoad = "incubation.html"; // gets the href of the clicked link
    $("#main").load(pageToLoad + " #main"); // loads the remote page into the content div without refresh
  });



  $('#it_incubation').click(function(e) {
    e.preventDefault(); // stops the default action of clicking on the link
    var pageToLoad = $(this).attr('href'); // gets the href of the clicked link
    $("#main-content").load(pageToLoad + " #main"); // loads the remote page into the content div without refresh
  });
</script>
