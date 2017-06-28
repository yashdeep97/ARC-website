<!DOCTYPE html>
<html>
<head>
    <title>New Blog Post</title>
    <link rel="stylesheet" href="./bootstrap4/css/bootstrap.min.css">
    <style>
    @media only screen and (min-width: 580px){ 
      label{
        text-align: right;
      }
    }
      h2{
        text-align: center;
        margin-top: 20px;
      }
      .button{
        text-align: center;
        margin-top: 20px;
      }
    </style>
    <script src="./jquery.min.js"></script>
    <script src="./bootstrap4/js/bootstrap.min.js"></script>
    <script>
    $( document ).ready(function() {

        $('.alphabetsOnly').bind('keyup blur',function(){ 
            var node = $(this);
            node.val(node.val().replace(/[^a-z]/g,'') ); }
        );
        $('.numbersOnly').bind('keyup blur',function(){ 
            var node = $(this);
            node.val(node.val().replace(/[^0-9]/,'') ); }
        );

    });
    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }

</script>
</head>
<body>

<?php

session_start();

if($_SESSION["login-status"] != 1 && $_SESSION["login-status"] != 2) {
  header("Location: sign.php");
}

echo "<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-inverse\">
  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <a class=\"navbar-brand\" href=\"#\">";
if(!isset($_SESSION["login-status"]) || empty($_SESSION["login-status"])) {
   $_SESSION["login-status"] = 0;
    echo "Guest";
}
else {
  echo $_SESSION["user"];
}

echo "</a>
  <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
    <ul class=\"navbar-nav mr-auto mt-2 mt-md-0\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"display-posts.php\">Reader</a></li>";


if($_SESSION["login-status"] == 2){
  echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"adminPanel.php\">Admin Panel</a></li>";
}

echo "<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"sign.php\" onclick=\"signOut();\">";

if($_SESSION["login-status"] == 0){
  echo "Login";
}
else{
echo "Logout";
}

echo "</a>
      </li>
    </ul>
  </div>
</nav>";


?>


<h2 class="col-sm-offset-5">New Post:</h2>
<hr>
<form class="" name="form1" action="submit-post.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label class="col-sm-2 form-control-label">Blog Title:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="imgToUpload" class="col-sm-2 form-control-label">Add Images:</label>
    <div class="col-sm-8">
        <input type="file" name="imgToUpload[]" multiple="multiple" >
        <p class="text-muted form-muted">Select multiple images at once.<br>
        Only .jpeg, .png and .gif formats accepted.</p>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 form-control-label">Add youtube video link:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="video-link" name="video-link" placeholder="Add video link">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 form-control-label">Content:</label>
    <div class="col-sm-8">
        <textarea name="content" class="form-control" rows="10" placeholder="Blog content" ></textarea>
    </div>
  </div>
  <div class="form-group button row">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="submit btn btn-secondary">Submit</button>
    </div>
  </div>
</form>


</body>
</html> 