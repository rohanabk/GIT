<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#4db6ac">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="../images/git.jpeg">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="../images/git.jpeg">



  <link rel="shortcut icon" href="../images/git.jpeg">
  <link rel="stylesheet" href="manifest.json">
  <title>GIT I&E</title>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style media="screen">
header, main, footer,.page-content,.navbar{
padding-left: 300px;
}
@media only screen and (max-width : 992px) {
header, main, footer,.page-content,.navbar {
  padding-left: 0;
}
}

@media only screen and (max-width : 992px) {
  .left {
    float: left;
    margin-left: 25px;
  }
}
</style>
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
          <img src="../images/office.jpg">
        </div>
        <center>
          <a href="#!user"><img class="circle" src="../images/git.jpeg"></a>
          <a href="#!name"><span class="white-text name" style="font-size:25px;">Admin</span></a>
        </center>
      </div>
    </li>
    <li><a class="waves-effect" href="administrate.php"><i class="material-icons">add_box</i>Add competition</a></li>
    <li class="active"><a class="waves-effect" href="viewAllCompetition.php"><i class="material-icons">apps</i>View/Discard competitions</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="waves-effect" href="../index2.html"><i class="material-icons">home</i>Home</a></li>
  </ul>

  <div class="page-content">
    <div id="main-content" style="padding-left:10px;">
      <table class="highlight responsive-table">
        <thead>
          <tr>
            <th>Competition Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require "init.php";
          $res = mysqli_query($con, "SELECT * FROM competitions");
          while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>";
            echo '<a href="'.$row['link'].'">'.$row['title'].'</a></td>';
            echo '<td><a href="delete.php?id='.$row['id'].'">Delete</a>';
            echo "</td></tr>";
          }
          ?>
        </tbody>
      </table>
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

</script>
<script type="text/javascript">
// function readURL(input) {
//        if (input.files && input.files[0]) {
//            var reader = new FileReader();
//
//            reader.onload = function (e) {
//                $('#imgTag').attr('src', e.target.result);
//            }
//            reader.readAsDataURL(input.files[0]);
//        }
//    }
//
//
//   $("#image").on("change",function () {
//     readURL(this);
//   });

  $(".image").on("change",function(){
    var source = $(this).val();
    if (source=='') {
      $("#imgTag").attr("src","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpF7AhAfCs7zbbyrHuSNrY5MMEwOfe_bVOUV3D3NLa38h6t6xC");
    }else{
      $("#imgTag").attr("src",$(this).val());
    }
  });
</script>
