    <div id="header">
        <div class="nav topnav">
                <img href="index.php" class="logo" src="img/TG.png" alt="TGLogo">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Menu</button>
                <div id="myDropdown" class="dropdown-content">
                    <nav>
                        <a href="index.php">Home/about</a>
                        <a href="services.php">Services</a>
                        <a href="contact.php">Contact</a>
                    </nav>
                </div>
            </div>
            <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
            <h2 style="font-weight: lighter; color:gray;"><i><b style="color: orangered">Hello! </b></i><br><b style="color: white;">I am Tom</b> and <b style="color: white;">here is what I do</b></h2>
    
        </div>
    </div>
