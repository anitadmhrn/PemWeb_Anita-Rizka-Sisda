<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login_modal.css"/>
</head>

<body>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="aksi_login.php">
  <form method="post" action="aksi_login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="user.png" alt="Avatar" class="avatar">
      
      <label><center><br>Sign in to Tengok Kanan</center></label>
    </div>

    <div class="container">
        <label for="username"><b>Username or email address</b></label>
        <input class="masuk" type="text" autocomplete="off" name="username" autofocus required>
        <br>
        <label for="password"><b>Password</b></label>
        <input class="masuk" type="password" autocomplete="off" name="password" autofocus required>    
        <br>
        <input id="tombol" type="submit" value="Login">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
