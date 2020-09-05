<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production | TTParikh</title>

    <!-- CSS File Link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="iconStyle.css">
    <script src="js/allJavaScripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        .item1 {
            grid-column: 1 / 9;
            grid-row: 1 / 3;
        }
        .item1 .page-title {
            color: var(--green-theme);
            font-family: 'Oswald', sans-serif;
            font-size: 25px;
            font-weight: 200;
            transition: ease 0.3s;
            margin-left: 30px;
        }
        .item1 input[type=button]{
            line-height: 4.9px;
            margin-left: -1.7px;
        }
        .item2 {
            grid-column: 1 / 9;
            grid-row: 3 / 5;
        }
        .item2 select, .item2 option{
            width: 100%;
            height: 30px;
            background-color: var(--purple-theme);
            border: 1px solid var(--green-theme);
            text-align:center;
        }
        .item2 select option{
            background: var(--purple-theme);
        }
        .item2 table{
            width: 100%;
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
        }
        .item2 td{
            padding: 20px;
        }
        .item2 th{
            background-color: var(--green-theme);
            color: var(--purple-theme);
            padding: 15px;
        }
        .item2 a{
            text-decoration: underline;
        }
        
        .item3 {
            grid-column: 5 / 9;
            grid-row: 3 / 5;
        }
        .item3 .invoice-details{
            width: 100%;
        }
        .item3 table{
            width: 100%;
            font-size: 20px;
        }
        .item3 .details table{
            text-align: center;
            margin-left: -30px;
        }
        .item3 .details table *{
            padding: 15px;
        }
        .item3 .invoice-details div{
            padding: 20px;
        }

        .item4 {
            grid-column: 1 / 9;
            grid-row: 5 / 7;
        }
        .item4 .details{
            display: flex;
            justify-content: space-between;
            border: 1px dashed var(--green-theme);
        }
        .item4 table{
            margin: auto 20px;
            font-size: 20px;
        }
        .item4 td{
            padding: 15px;
            font-size: 20px;
            text-align: center;
        }

        .item5 {
            grid-column: 1 / 11;
            padding: 0px;
            text-align: center;
        }
    </style>

</head>
<body>
    <!-- <div class="sidebar" id = "sidebar_Id">
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
        <a href="invoice.php"><div class="menu"><span class="icon-browser"></span><span>Invoice</span></div></a>
        <a onclick="dropdownToggle()"><div class="menu dropdown-btn"><span class="icon-presentation"></span><span>Report</span><span><i data-feather="chevron-down"></i></span></div></a>
        <div class="side-drop" id="side-drop-id">
            <a href="#OverallReport"><div class="menu drop-content"><span class="icon-gift"></span><span>Overall Report</span></div></a>
            <a href="#InvoiceReport"><div class="menu drop-content"><span class="icon-gift"></span><span>Invoice Report</span></div></a>
            <a href="productReport.php"><div class="menu drop-content"><span class="icon-gift"></span><span>Product Report</span></div></a>
            <a href="#CustomerReport"><div class="menu drop-content"><span class="icon-gift"></span><span>Customer Report</span></div></a>
        </div>
        <a href="production.php"><div class="menu"><span class="icon-gift"></span><span>Production</span></div></a>
        <a href="#Garbage"><div class="menu"><span class="icon-basket"></span><span>Garbage</span></div></a>
        <a href="customer.php"><div class="menu"><span class="icon-profile-male"></span><span>Customer</span></div></a>
        <a href="products.php"><div class="menu"><span class="icon-beaker"></span><span>Products</span></div></a>
        <a href="tracking.php"><div class="menu"><span class="icon-map"></span><span>Tracking Number</div></a>
        <a href="#Help"><div class="menu"><span class="icon-genius"></span><span>Help</span></div></a>
        <a href="settings.php"><div class="menu"><span class="icon-gears"></span><span>Settings</span></div></a>
    </div> -->

    <div id = "root_Id">
        <!-- <header>
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
        </header> -->

        <div class="grid_container">
            <div class="grid item1">
                <div class="page-title"><span>New Production Entry :</span> <label for="">Elderberry</label></div>
            </div>

            <div class="grid item2">
                <div class="inside"><span>Entry Feed</span></div>
                <div class="details">
                    <form action="production.php" method="get">
                        <!--------------------- Write the encryption method in the form tag -->
                        <table>
                            <tr>
                                <td>Barcode :</td>
                                <td><input type="text"></td>
                                <td>Bags :</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Boxes :</td>
                                <td><input type="text"></td>
                                <td>Tourt :</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Taken From :</td>
                                <td><select name="">
                                    <option value = "1">Machine</option>
                                    <option value = "2">Direct</option>
                                    <option value = "3">1.00 lb</option>
                                </select></td>
                                <td>Lot Number :</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Location :</td>
                                <td><input type="text"></td>
                                <td>Name :</td>
                                <td><input type="text"></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td><input type="reset" value="Reset"></td>
                                <td><input type="submit" value="Submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- <script>
        feather.replace();
        var dropdown = document.querySelectorAll(".drop-content");
        for (let i = 0; i < dropdown.length; i++) {
            dropdown[i].style.display = "none";
        }
    </script> -->
</body>
</html>