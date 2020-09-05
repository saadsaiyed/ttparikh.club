<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TTParikh</title>

    <!-- CSS File Link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="iconStyle.css">
    <script src="js/allJavaScripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="sidebar" id = "sidebar_Id">
        <div class="search-box">
            <form action="post"  action="php/bookingFetch.php" enctype = "multipart/form-data">
                <table>
                    <tr>
                        <td><input type="text" placeholder="Search..."></td>
                        <td><input type="button" value="GO"></td>
                    </tr>
                </table>
            </form>
        </div>
        <a href="index.php"><div class="menu"><span class="icon-clipboard"></span><span>Dashboard</span></div></a>
        <a href="#Invoice"><div class="menu"><span class="icon-browser"></span><span>Invoice</span></div></a>
        <a href="report.php"><div class="menu"><span class="icon-presentation"></span><span>Report</span></div></a>
        <a href="production.php"><div class="menu"><span class="icon-gift"></span><span>Production</span></div></a>
        <a href="#Garbage"><div class="menu"><span class="icon-basket"></span><span>Garbage</span></div></a>
        <a href="#Customer"><div class="menu"><span class="icon-profile-male"></span><span>Customer</span></div></a>
        <a href="#Products"><div class="menu"><span class="icon-beaker"></span><span>Products</span></div></a>
        <a href="#Tracking"><div class="menu"><span class="icon-map"></span><span>Tracking Number</div></a>
        <a href="#Help"><div class="menu"><span class="icon-genius"></span><span>Help</span></div></a>
        <a href="#Settings"><div class="menu"><span class="icon-gears"></span><span>Settings</span></div></a>
    </div>

    <div class="root" id = "root_Id">
        <header>
            <div class="burgureMenuIcon change" onclick="openCloseSidebar(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <a class="logo" href="index.php">Trade Technocrats Ltd.</a>
            <ul class="nav_links">
                <input type="color" name="" id="colorPicker1" style="width:auto; background-color:var(--green-theme);border:none;">
                <a href="index.php"><i data-feather="bell"></i></a>
                <a href="#Form"><li><i data-feather="flag" alt="flag"></i></li></a>
                <a href="#ContactUs" onclick=someFunc() ><i data-feather="github"></i></a>
                <input type="color" name="" id="colorPicker2" style="width:auto; background-color:var(--green-theme);border:none;">
            </ul>
        </header>

        <div class="grid_container">
            <div class="grid item1">
                <div class="inside"><h3>1</h3></div>
            </div>

            <div class="grid item2">
                <div class="inside"><h3>2</h3></div>
            </div>

            <div class="grid item3">
                <div class="inside"><h3>3</h3></div>
            </div>

            <div class="grid item4">
                <div class="inside"><h3>4</h3></div>
            </div>
        </div>
    </div>

    
    <script>
      feather.replace()
    </script>
</body>
</html>