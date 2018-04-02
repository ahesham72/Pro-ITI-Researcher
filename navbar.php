
<nav class="navbar navbar-inverse" id="topnav">
    <div class="container">
        <div class="logo">
      <a href="index.php">    <img src="img/logo.png">
</a>
    </div>

        <ul class="link">
            <li class=""><a href="index.php">Home</a></li>
           
            <li>
                <div class="dropdown">
                     <button class=" drop_source" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             Source <span class="caret"></span>
                      </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="researches.php">Researches</a></li>
                        <li><a href="mas.php">Master</a></li>
                        <li><a href="phds.php">Ph.D</a></li>
                    </ul>
                 </div>
            </li>
            <li><a href="index.php#con">Contact</a></li>

            <li><a href="guide.php">Guide</a></li>
            <li><a href="about.php">About</a></li>

            <!-- <li><a href="researcherprofile.php">Profile</a></li>
            <li><a href="login.php">Login</a></li> -->
            <!-- ?php include("session.php");?> -->

            <?php

            if(isset($_SESSION["isuser"]) && (($_SESSION["isuser"]==1))) {
                echo "<li><a href='researcherprofile.php?user_id=".$_SESSION["user_id"]."'/>Profile</a> </li>";
                echo "<li><a href='logout.php'>Logout</a></li>";
            } else {
                echo '<li><a href="login.php">Login</a></li>';
            }

            ?>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>
<button class="topnavbar"><a href="#topnav"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a>

</button>
