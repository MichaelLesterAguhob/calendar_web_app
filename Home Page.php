<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="jquery_bootstrap/fontawesome/css/all.css">
    <link rel="stylesheet" href="jquery_bootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="jquery_bootstrap/bootstrap/js/bootstrap.js"></script>  

    <!-- CSS -->
    <link rel="stylesheet" href="css/general_style.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bday_modal.css">
    <link rel="stylesheet" href="css/home_page.css">
</head>
<body>
<!-- NAVIGATION -->
<?php include_once('page_parts/navigation.php')?>

<!-- MAIN CONTENT -->
<div class="container-fluid home_container">
<div class="row crud_data_cont">
<!-- crud -->
<div class="col-lg-3 buttons_cont">
        <!-- button for creating ICTSannouncements -->
    <button class="btn btn-primary mb-3 btn_add">
        <i class="fa-solid fa-plus"></i> 
        ICTS Announcements
    </button>

    <!-- button for creating HREP announcements -->
    <button class="btn btn-primary mb-3 btn_add">
        <i class="fa-solid fa-plus"></i> 
        HREP Announcements
    </button>

    <!-- button for adding birthdays -->
    <button class="btn btn-primary mb-3 btn_add add_bday" data-bs-toggle="modal" data-bs-target="#bday_modal"> 
        <i class="fa-solid fa-plus"></i> 
        Birthday
    </button>
    
    <!-- button for adding Committe meeting and event schedule -->
    <button class="btn btn-primary mb-3 btn_add cmes"> 
        <i class="fa-solid fa-plus"></i> 
        Committee Meeting and Event Schedule
    </button>

    <!-- button for adding hrep activities -->
    <button class="btn btn-primary mb-3 btn_add">
        <i class="fa-solid fa-plus"></i> HRep Activities
    </button>

    <!-- button for updating quotes -->
    <button class="btn btn-success btn_add add_quote" data-bs-toggle="modal" data-bs-target="#quote_modal">
        <i class="fa-solid fa-pen-to-square"></i> 
        Add/Update Quote
    </button>
</div>

<!-- data -->
<div class="col-lg-9">
<div class="container-fluid mt-2">

<!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs bg-secondary">
        <li class="active"><a data-toggle="tab" href="#icts_annncmnts">ICTS Announcements</a></li>
        <li><a data-toggle="tab" href="#hrep_annncmnts">HREP Announcements</a></li>
        <li><a data-toggle="tab" href="#birthday">Birthday</a></li>
        <li><a data-toggle="tab" href="#cmes">Committee Meeting and Event Sched</a></li>
        <li><a data-toggle="tab" href="#hrep_actvts">HREP Activities</a></li>
        <li><a data-toggle="tab" href="#quote">Quote</a></li>
    </ul>

    <div class="tab-content">

<!-- ICTS ANNOUNCEMENTS TAB -->
    <div id="icts_annncmnts" class="tab-pane fade in active">
        <h3><i class="fa-solid fa-bullhorn fa-shake"></i>&nbsp; ICTS Announcements</h3>
        <div class="event_table_cont">
            <table >
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- HREP ANNOUNCEMENTS TAB -->
    <div id="hrep_annncmnts" class="tab-pane fade">
        <h3><i class="fa-solid fa-bullhorn fa-shake"></i>&nbsp; HREP Announcements</h3>
        <div class="event_table_cont">
            <table >
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- BIRTHDAY TAB -->
    <div id="birthday" class="tab-pane fade">
        <h3><i class="fa-solid fa-cake-candles fa-bounce"></i> 
        &nbsp;Birthdays &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="bday_tab_msg"></span></h3>
        <div class="event_table_cont">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birth Date</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="bday_data">
                <!-- data from birthday table in database -->
                
            </tbody>
            </table>
        </div>
    </div>

<!-- COMMITTEE MEETING AND EVENT SCHEDULE TAB -->
    <div id="cmes" class="tab-pane fade">
        <h3><i class="fa-regular fa-calendar-days fa-beat"></i>&nbsp;
        Comittee Meeting and Event Schedule</h3>
        <div class="event_table_cont">
            <table >
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- HREP ACTIVITIES TAB -->
    <div id="hrep_actvts" class="tab-pane fade">
        <h3><i class="fa-solid fa-person-running fa-bounce"></i> &nbsp; HREP Actvities</h3>
        <div class="event_table_cont">
            <table >
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- QUOTE TAB -->
    <div id="quote" class="tab-pane fade">
        <h3><i class="fa-solid fa-comment fa-beat"></i> &nbsp; Quote</h3>
        <div class="event_table_cont">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 50%;">Quotes</th>
                    <th style="width: 30%;">Quote Owner</th>
                    <th style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody id="quote_data">
                <!-- data from birthday table in database -->
                
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<!-- SYSTEM MSG MODAL -->
<div class="modal" id="sys_mod">
  <div class="modal-dialog sys_modal_dialog">
    <div class="modal-content sys_modal_content">
      <div class="modal-header sys_modal_header">
        <button type="button" class="close" data-bs-dismiss="modal" >
          <i class="fa-regular fa-circle-xmark"></i>
        </button>
        <h3 class="modal-title sys_modal_title"></h3>
      </div>
      <div class="modal-body sys_mod_body">
        <h5 class="sys_mod_msg"></h5>
      </div>
      <div class="modal-footer sys_modal_footer">
        <button type="button" class="btn btn-warning text-dark" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL -->
<?php include_once 'page_parts/bday_modal.php'; ?>
<?php include_once 'page_parts/quote_modal.php'; ?>

<!-- FOOTER -->
<?php include_once 'page_parts/footer.php'; ?>

<!-- JAVASCRIPT -->
<script src="home_page.js"></script>
</body>
</html>