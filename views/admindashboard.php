<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="viewstyle.css"/>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="../assets/logo.png">
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a class="btn"  style='background-color:red;' href="../controllers/logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td width="300">
                    
                                   
                <!-- <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                    <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li> -->

                        <?php
                        if (trim($_SESSION['role'])=="admin")
                    {
                        ?>
                        <a class="btn" href="appwallet.php">App Wallet</a>
                       <h1></h1>
                        <a class="btn" href="withdrawmoney.php">withdraw Money</a>
                        <h1></h1>
                         <a class="btn" href="admindashboard.php">Dashboard</a> 
                         <h1></h1>
                         <a class="btn" href="viewprofile.php">  Profile</a>
                         <h1></h1>
                         <a class="btn" href="setting.php">Settings</a>
                         
                         <h1></h1>
                        
                         <a class="btn" style='background-color:red;'href="../controllers/logout.php"> Logout</a> 
                    <?php
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        ?>
                       <a class="button" href="appwallet.php">App Wallet</a>
                        <h1></h1>
                        <a class="button" href="withdrawmoney.php">withdraw Money</a>
                       <h1></h1>

                         <a class="btn" href="viewprofile.php">  Profile</a>
                         <h1></h1>
                        <a class="btn" href="setting.php">Settings</a>
                        <h1></h1>
                        
                        <a class="btn" class="btn" style='background-color:red;' href="../controllers/logout.php"> Logout</a>

                        <?php
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        ?>
                        <a class="button" href="appwallet.php">App Wallet</a>
                        <h1></h1>
                        <a class="button" href="restaurentbrowsing.php">Restaurent Browsing</a>
                        <h1></h1>
                        <a class="button" href="orders.php">Orders</a>
                        <h1></h1>                       
                        <a class="btn" href="search.php">Search</a>
                        <h1></h1>
                        <a class="btn" href="viewprofile.php">  Profile</a>
                        <h1></h1>
                        <a class="btn" href="setting.php">Settings</a>
                        <h1></h1>
                        
                        <a class="btn" style='background-color:red;' href="../controllers/logout.php"> Logout</a>
                        <?php
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        ?>
                         <a class="button" href="appwallet.php">App Wallet</a>
                         <h1></h1>
                         <a class="button" href="withdrawmoney.php">withdraw Money</a>
                         <h1></h1>                        
                         <a class="btn" href="viewprofile.php">  Profile</a>
                         <h1></h1>
                        <a class="btn" href="setting.php">Settings</a>
                         <h1></h1>
                        
                        <a class="btn" style='background-color:red;' href="../controllers/logout.php"> Logout</a>
                        <?php
                    }

                    ?>
                    
                    
                </td>




                <td>

                        <fieldset class="fieldset">
                                <legend> Dashboard </legend>
                                <table width=800>
                                    <tr>
                                        <td>
                                        <a class="btn" href="viewalluser.php">View All User</a>
                                         <h1></h1>
                                        </td>

                                        <td>

                                        <a class="btn"  href="../controllers/reviewIndex.php?action=view_reviews">View Reviews</a>
                                         <h1></h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        <a class="btn"  href="searchuser.php">Search User</a>
                                          <h1></h1>
                                        </td>

                                        <td>

                                        <a class="btn"  href="../controllers/orderHistoryHandler.php">Order History</a>
                                         <h1></h1>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                        <a class="btn"  href="addadmin.php">Add Admin</a>
                                         <h1></h1>
                                        </td>

                                        <td>
                                        <a class="btn"  href="../controllers/show_reports_controller.php">Financial Report</a>
                                          <h1></h1>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                        <a class="btn"  href="voucher.php">Voucher</a>
                                         <h1></h1>
                                        </td>
                                        <td>
                                        <a class="btn"  href="../controllers/transactionhistoryhandler.php">Transaction History</a>
                                <h1></h1>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                        <a class="btn"  href="events.php">Events</a>
                                         <h1></h1>
                                        </td>

                                        <td>
                                        <a class="btn"  href="../controllers/view_sales_orders_controller.php">Sales & Order Report</a>
                                            <h1></h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        <a class="btn"  href="createnotification.php">Create Notification</a>
                                         <h1></h1>
                                        </td>

                                        <td>
                                        <a class="btn"  href="../controllers/complainIndex.php?action=view_complains">View Complaints</a>
                                     <h1></h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        <a class="btn"  href="../controllers/notificationHandler.php">View Notification</a>
                                          <h1></h1>
                                        </td>

                                        <td>

                                        </td>
                                    </tr>


<!-- 
                                 <a class="btn" href="viewalluser.php">View All User</a>
                                <h1></h1>
                                <a class="btn"  href="searchuser.php">Search User</a>
                                <h1></h1>
                                <a class="btn"  href="addadmin.php">Add Admin</a>
                                <h1></h1>
                                <a class="btn"  href="voucher.php">Voucher</a>
                                <h1></h1>
                                <a class="btn"  href="events.php">Events</a>
                                <h1></h1>
                                <a class="btn"  href="createnotification.php">Create Notification</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/notificationHandler.php">View Notification</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/reviewIndex.php?action=view_reviews">View Reviews</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/orderHistoryHandler.php">Order History</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/show_reports_controller.php">Financial Report</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/transactionhistoryhandler.php">Transaction History</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/view_sales_orders_controller.php">Sales & Order Report</a>
                                <h1></h1>
                                <a class="btn"  href="../controllers/complainIndex.php?action=view_complains">View Complaints</a>
                                <h1></h1> -->

                                </table>
                               
                        </fieldset>


                </td>













            </tr>


            <tr>
                <td colspan="2" align="center"><fieldset class="fieldset">
                    <legend>Help & Support</legend>
                    <a href="emailsupport.php">Contact Us</a>  <br>
                    <a href="../controllers/complainIndex.php?action=create_complain">Complain</a> <br>
                    <a href="FAQs.php">FAQ</a> <br>
            </fieldset></td>
            </tr>



            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>