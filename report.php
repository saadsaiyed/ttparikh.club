    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Report | TTParikh</title>

        <!-- CSS File Link -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="iconStyle.css">

        <!-- JavaScript And Jquery Link -->
        <script src="js/allJavaScripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        
        <style>
            .item1 {
                grid-column: 1 / 9;
                grid-row: 1 / 3;
                display: flex;
                justify-content: space-between;
            }
            .item1 .page-title {
                color: var(--green-theme);
                font-family: 'Oswald', sans-serif;
                font-size: 25px;
                font-weight: 200;
                transition: ease 0.3s;
                margin-left: 30px;
            }
            .item1 .inside input{
                font-size: 20px;
                height: 40px;
            }
            .item1 input[type=button]{
                line-height: 4.9px;
                margin-left: -1.7px;
            }
            .item2 {
                grid-column: 1 / 5;
                grid-row: 5 / 7;
            }
            .top-info, date-range{
                display:flex;
                justify-content: space-between;
            }
            .date-range input[type=date]{
                width: auto;
                background-color: var(--purple-theme);
                border: 1px solid var(--green-theme);
                font-size: 14px;
                line-height: 17px;
            }
            .date-range input[type=button]{
                width: auto;
                line-height: 22px;
            }
            .date-range label{
                margin: 10px;
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
                border-radius: 5px;
            }
            .item2 a{
                text-decoration: underline;
            }
            
            .item3 {
                grid-column: 5 / 9;
                grid-row: 5 / 7;
            }
            .item3 .invoice-details{
                width: 100%;
                display:none;
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
            .item3 .contact-info td:nth-child(1), .item3 .contact-info td:nth-child(2){
                padding: 15px;
            }
            .item3 .invoice-details div{
                padding: 20px;
            }
            .item3 .details{
                border: 1px dashed var(--green-theme);
            }

            .item4 {
                grid-column: 1 / 9;
                grid-row: 3 / 5;
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
                grid-column: 1 / 9;
                padding: 20px;
            }
            .item5 table{
                width: 100%;
                text-align: center;
                margin-top: 20px;
                font-size: 20px;
            }
            .item5 td{
                padding: 20px;
            }
            .item5 th{
                background-color: var(--green-theme);
                color: var(--purple-theme);
                padding: 15px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="sidebar" id = "sidebar_Id">
            <div class="search-box">
                <form action="post" action="php/bookingFetch.php" enctype = "multipart/form-data">
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
            <!-- <div class="sidebar-dropdown">
                <a href="#OverallReport">Overall Report</a>
                <a href="#InvoiceReport">Invoice Report</a>
                <a href="#ProductReport">Product Report</a>
                <a href="#CustomerReport">Customer Report</a>
            </div> -->
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
                    <div class="page-title">
                        <span>Product Report - "Psyllium Husk"</span>
                    </div>
                    <div class="inside">
                        <form action="post" action="php/bookingFetch.php" enctype = "multipart/form-data">
                        <table>
                            <tr><td><input type="text" size="70" value="Psyllium Husk"></td><td><input type="button" value="Search"></td></tr>
                        </table>
                        </form>
                    </div>
                </div>

                <div class="grid item2">
                    <div class="top-info">
                        <div class="inside"><span>Invoice Details :</span></div>
                        <div class="date-range">
                            <input type="date" name="" id=""><label for="">-</label><input type="date" name="" id=""><input type="button" value="Sort">
                        </div>
                    </div>
                    <div class="info">
                        <table>
                            <tr>
                                <th>Invoice Number</th><th>Total Packages</th><th>Date</th>
                            </tr>
                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">12589</label></a></td><td>12</td><td><label for="">May 16, 2018</label></td>
                            </tr>

                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">74865</label></a></td><td>4</td><td><label for="">May 16, 2018</label></td>
                            </tr>

                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">30584</label></a></td><td>6</td><td><label for="">May 16, 2018</label></td>
                            </tr>

                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">39068</label></a></td><td>4</td><td><label for="">May 16, 2018</label></td>
                            </tr>

                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">73058</label></a></td><td>2</td><td><label for="">May 16, 2018</label></td>
                            </tr>

                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">80655</label></a></td><td>1</td><td><label for="">May 16, 2018</label></td>
                            </tr>

                            <tr>
                                <td><a href="#invoce" onclick='invoiceInfo(12589)'><label for="">90399</label></a></td><td>1</td><td><label for="">May 16, 2018</label></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="grid item3">
                    <div class="inside"><span>Specific Details :</span></div>
                    <div class="invoice-details" id="invoice-details-id">
                        <div class="contact-info">
                            <table>
                                <tr>
                                    <td><label for="">Customer Name:</label></td><td><label for="">Andrew Kingston</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Invoice Number:</label></td><td><label for="">95010</label></td><td style="float:right"><input type="button" value="Edit"></td>
                                </tr>
                                <tr>
                                    <td><label for="">Total Packages:</label></td><td><label for="">23</label></td>
                                </tr>
                            </table>
                        </div>
                        <div class="details">
                            <table>
                                <tr>
                                    <th><label for="">Product name</label></th><th>Weight</th><th>Count</th>
                                </tr>
                                <tr>
                                    <td><label for="">BURDOCK ROOT POWDER</label></td><td><label for="">1.0 lb</label></td><td><label for="">2</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">YARROW FLOWER C/S</label></td><td><label for="">1.0 lb</label></td><td><label for="">1</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">SPINACH POWDER</label></td><td><label for="">144 g</label></td><td><label for="">2</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">COLTSFOOT C/S</label></td><td><label for="">1.0 lb</label></td><td><label for="">2</label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="grid item4">
                    <div class="inside"><span>Warehouse Details :</span></div>
                    <div class="details">
                        <div class="iitem1">
                            <table><!-- <img src="https://generator.barcodetools.com/barcode.png?gen=0&data=772696110713&bcolor=091428&fcolor=46B692&tcolor=46B692&fh=14&bred=0&w2n=2.5&xdim=2&w=&h=50&debug=1&btype=7&angle=0&quiet=1&balign=2&talign=3&guarg=1&text=0&tdown=1&stst=1&schk=0&cchk=1&ntxt=1&c128=0" alt="barcode" srcset=""> -->
                                <tr>
                                    <td><label for="">Barcode :</label></td><td><label for="">772696110713</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Item Code :</label></td><td><label for="">H.A-080</label></td>
                                </tr>
                            </table>
                        </div>
                        <div class="iitem2">
                            <table>
                                <tr>
                                    <td><label for="">Locations :</label></td><td><label for="">A2, B5, F21</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Rack Address :</label></td><td><label for="">A29</label></td>
                                </tr>
                            </table>
                        </div>
                        <div class="iitem3">
                            <table>
                                <tr>
                                    <td><label for="">Yearly Avg :</label></td><td><label for="">721</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">In Stock :</label></td><td><label for="">54 (1.0 lb)</label></td><td><label for="">0 (Bulk)</label></td>
                                </tr>
                            </table>
                        </div>
                        <div class="iitem4">
                            <table>
                                <tr>
                                    <td><label for="">Total Sold :</label></td><td><label for="">934</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Sold This Month :</label></td><td><label for="">41</label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="grid item5">
                    <div class="top-info">
                        <div class="inside"><span>Production Details :</span></div>
                        <div class="date-range">
                            <input type="date" name="" id=""><label for="">-</label><input type="date" name="" id=""><input type="button" value="Sort">
                        </div>
                    </div>
                    <div class="info">
                        <table>
                            <tr>
                                <th>Date</th><th>No. Bags</th><th>No. Boxes</th><th>In Tourt</th><th>Total Packages</th><th>Lot No.</th><th>Location</th><th>Name</th>
                            </tr>
                            <tr>
                                <td>March 13, 2020</td>
                                <td>20</td>
                                <td>3</td>
                                <td>12</td>
                                <td>40</td>
                                <td>NIGRDKG-1810V296218</td>
                                <td>A15</td>
                                <td>BHAGYESH SHAH</td>
                            </tr>
                            <tr>
                                <td>May 15, 2020</td>
                                <td>55</td>
                                <td>2</td>
                                <td>30</td>
                                <td>140</td>
                                <td>AAI/2384</td>
                                <td>F14</td>
                                <td>SMIT PARIKH</td>
                            </tr>
                            <tr>
                                <td>May 6, 2020</td>
                                <td>18</td>
                                <td>2</td>
                                <td>1</td>
                                <td>37</td>
                                <td>00601F</td>
                                <td>A25</td>
                                <td>BHAGYESH SHAH</td>
                            </tr>
                            <tr>
                                <td>April 29, 2020</td>
                                <td>8</td>
                                <td>2</td>
                                <td>30</td>
                                <td>45</td>
                                <td>01353-6</td>
                                <td>G11</td>
                                <td>PARtd PARIKH</td>
                            </tr>
                            <tr>
                                <td>April 25, 2020</td>
                                <td>40</td>
                                <td>4</td>
                                <td>25</td>
                                <td>200</td>
                                <td>M-0014453</td>
                                <td>T</td>
                                <td>ZAID SAIYED</td>
                            </tr>
                            <tr>
                                <td>April 9, 2020</td>
                                <td>15</td>
                                <td>2</td>
                                <td>30</td>
                                <td>60</td>
                                <td>168P-18-0706-000A</td>
                                <td>-</td>
                                <td>SUMIT GARG</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        
        
        <script>
        feather.replace()
        </script>
    </body>
    </html>