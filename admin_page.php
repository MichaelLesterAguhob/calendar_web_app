<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:login_acct.php');
    }
?> 
 
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICTS | Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="jquery_bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="jquery_bootstrap/fontawesome/css/all.css">
    
    <!-- jquery ajax -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="jquery_bootstrap/bootstrap/js/bootstrap.js"></script>  
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/general_style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin_page.css">
    <link rel="stylesheet" href="css/create_acct.css">
</head>
<body>  
    <!-- navigation -->
    <?php include_once('page_components/navigation.php');?>

    <!-- Main Content -->
    <div class="container-fluid main_container" >
       
            <!-- TAB NAVIGATION -->
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#user_accounts">User Accounts</a></li>
            <li><a data-toggle="tab" href="#activities">Activities</a></li>
            <li><a data-toggle="tab" href="#logs">Logs</a></li>
        </ul>

        <div class="tab-content">

            <!-- USER ACCOUNTS TAB -->
            <div id="user_accounts" class="tab-pane fade in active">
                <div class="row tab_header">
                    <div class="col-lg-6 tab_title">
                        <h3><i class="fa-solid fa-users-gear"></i>&nbsp; User Accounts</h3>
                    </div> 
                    <div class="col-lg-6 tab_btn">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_acct_modal">Create Account</button>
                    </div> 
                </div>

                <div class="container-fluid event_table_cont">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:10%;">User ID</th>
                                <th style="width:45%;">Username</th>
                                <th style="width:35%;">Password</th>
                                <th style="width:10%;">Forgot Pass</th>
                            </tr>
                        </thead>
                        <tbody id="user_acct_data">
                            <!-- user accounts data here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ACTIVITIES TAB -->
            <div id="activities" class="tab-pane fade">
                <div class="tab_header2">
                    <div class="tab_title2">
                        <h3><i class="fa-solid fa-person-running"></i>&nbsp; Activities</h3>
                    </div>
                </div>

                <div class="container-fluid event_table_cont">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Activites</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody id="activity_data">
                            <!-- Activities data here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- LOGS TAB -->
            <div id="logs" class="tab-pane fade">
                <div class="tab_header2">
                    <div class="tab_title2">
                        <h3><i class="fa-solid fa-right-to-bracket"></i>&nbsp; Logs</h3>
                    </div>
                </div>

                <div class="container-fluid event_table_cont">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>LogIn</th>
                                <th>LogOut</th>
                            </tr>
                        </thead>
                        <tbody id="logs_data">
                            <!-- user accounts data here -->
                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>
    </div>


    <!-- footer -->
    <?php include_once 'page_components/footer.php'; ?>
    <?php include_once 'page_components/create_acct_modal.php'; ?>

    <!-- JAVASCRIPT -->
    <script src="jquery_bootstrap/bootstrap/js/bootstrap.js"></script> 
    <script src="admin.js"></script>
    <script src="login_create.js"></script>
</body>
</html>