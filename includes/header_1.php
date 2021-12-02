<div class="topnav">
        <a href="index.php" style="display: block; padding: 0; margin: 0;"><img href="index.php" class="logo" src="img/TG.png" alt="TGLogo"></a>
        <h2 style="font-weight: lighter; color:gray;"><i><b style="color: orangered">Hello! </b></i><br><b style="color: white;">I am Tom</b> and <b style="color: white;">here is what I can do for you</b></h2>
        
        <div class="tgfa">
            
            <div id="myLinks">
                <a href="index.php">Home/Services</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "inline-block") {
    x.style.display = "none";
  } else {
    x.style.display = "inline-block";
  }
}
</script>