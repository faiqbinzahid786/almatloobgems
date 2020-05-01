<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include 'header.html';

//title of the page
echo "<head><title>Almatloob Gems</title></head>";

//Heading of the Page
echo "<div class='container-fluidser'>
  <br>
  <h1><strong>Almatloob Gems Stock Management®</strong></h1> <br>
</div>";

//Nav Bar or Menu Bar
echo "<nav class='navbar navbar-expand-sm bg-dark navbar-dark sticky-top faiq'>
        <div class='container-fluid' id='1'>
        <span class='cover'>
        <ul class='navbar-nav'>
            <li class='nav-item active'>
                <a class='nav-link' href='almatloobgems.php'>Almatloob Gems Stocks</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='stones/stones.php'>Gemstones</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='rings/rings.php'>Rings</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='pendants/pendants.php'>Pendants</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='earring/earings.php'>Earings</a>
            </li>";

        echo"
            <!--<li class='nav-item'>
                <a class='nav-link' href='comingsoon/index.html'>Project</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='comingsoon/index.html'>Department</a>
            </li>-->";

        echo"
            <li>
                <a class='nav-link'>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                </a>
            </li>

          <!--Logout-->
            <a class='navbar-brand' href='index.html'><img src='diamond.png' alt='Logo' style='width:50px; margin-right: -30px;'></a>
            <a class='nav-link' href='index.html' style='margin-left: 20px;'><i>Logout from system!</i></a>

            <!--Documentation Dropdown Navbar-->
            <!-- Dropdown
            <li class='nav-item dropdown nav navbar-nav navbar-right'>
                <a class='nav-link' href='documentation_main.html' id='navbardrop' data-toggle='dropdown'>Documentation</a>
                <div class='dropdown-menu'>
                    <a class='dropdown-item' href='doc/documentation_employee.html'>Employee</a>
                    <a class='dropdown-item' href='doc/documentation_project.html'>Project</a>
                    <a class='dropdown-item' href='doc/documentation_department.html'>Department</a>
                </div>
            </li>-->
        </ul>
    </div>
  </span>
</nav>";


// ok, valid username & password
//echo '<div  class="container"><div class="alert alert-dark">You are logged in as: ' . $data['username'].'</div></div>';

//phpinfo() external file;
include 'db_connect.php';

//
echo "<br><h3 class='design'>Welcome to the Almatloob Gems Stock Management®</h3>

  <br> <p class='design'>This system is build in order to maintain menu in order to perform manual tasks easier and faster. This system have several accounts each have limited access to the system. Only the admin has full access. The user can only view the the <strong>menu</strong> for all existing restaurants.
  The admin or the manager can <strong>add menu</strong>, <strong>remove menu</strong>, <strong>add menu</strong> and <strong>add projects</strong>. What ever the user type in the input box, the box will then automatically add the inputted
  text into the sql query and execute it. The URL to the application is <kbd><a href='http://sysinfo.site/index.php' target='_blank'>www.sysinfo.site</a></kbd>. You can reach us through <kbd><a href = 'mailto: info@sysinfo.site'>info@sysinfo.site</a></kbd></p>
";

include 'footer.html';
//close the connection - to prevent server overflow
//$conn->close();
?>
