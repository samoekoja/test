<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dash.css">
    <link rel="stylesheet" href="assets/charts/chart.css">
    <!-- <script src="assets/node_modules/chart.js/dist/chart.umd.js"></script>     -->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-drk">
                <!-- Sidebar content -->
                <p></p>
            </div>
            <!-- Main Content -->
            <div class="col-md-10">
                <!-- Main content -->
                <div class="row"> 
                    <!-- top row content -->
                     <div class="col-md-6 offset-md-1">
                        <!-- Search Bar  -->
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary round-text" type="button" id="button-addon2"><span class="glyphicon glyphicon-search"></button>
                            <input type="text" class="form-control round-text" placeholder="Search ISO Standards" aria-label="Search" aria-describedby="button-addon2"> 
                        </div>                        
                    </div>
                    <div class="col-md-3 offset-md-1 ">
                        <button class="btn shadow-button btn-transparent btn">My Subscription</button>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <h2>My Dashboard</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <p>Implementation Progress</p>
                            </div>
                            <div class="card-content">
                                <!-- bar chart goes here  -->
                                <div class="row">
                                    <div class="offset-md-1 col-md-9 offset-md-1">
                                        <div>
                                            <div class="chart">
                                                <div class="row">
                                                    <?php include "assets/charts/bar.php"; ?>                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <p>Compliance Status</p>
                            </div>
                            <div class="card-content">
                                <!-- pie chart goes here -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pie-chart">
                                            <?php 
                                                include "assets/charts/pie.php";
                                            
                                                echo "<div style='transform: rotate($donedeg);' class='slice slice-1'></div>";
                                                echo "<div style='transform: rotate($prog);' class='slice slice-2'></div>";
                                                echo "<div style='transform: rotate($pend);' class='slice slice-3'></div>";
                                            
                                            ?>
                                        </div>
                                    </div>
                                    <!-- completion rates  -->
                                    <div class="offset-sm-1 col-sm-5">
                                        <div class="done">
                                            <h4 style="color: green;">Completed</h4>
                                            <div class="st-lists">
                                                <?php
                                                    foreach ($doneArray as $done) {
                                                        echo  $done . "<br>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="prog">
                                             <h4 style="color: yellow;">Progress</h4>
                                            <div class="st-lists">
                                                <?php
                                                    foreach ($progArray as $prod) {
                                                        echo  $prod . "<br>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="pending">
                                             <h4 style="color: red;">Pending</h4>
                                            <div class="st-lists">
                                                <?php
                                                    foreach ($pendArray as $pend) {
                                                        echo $pend . "<br>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>                                                              
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h2>Task Tracking</h2>
                            </div>
                            <div class="card-content">
                                <!-- table goes here -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h5>Activities</h5>
                            </div>
                            <div class="card-content">
                                <p>Today</p>
                                <!-- List Goes Here  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="assets/stuff/hbar.js"></script>
</body>
</html>