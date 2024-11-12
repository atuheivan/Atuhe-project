dash board screen
< html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vehicle Overloading Alarm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Vehicle Overloading Alarm</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="DASHBOARD SCREEN.PHP">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="VEHICLE DETAIL SCREEN.PHP">Vehicles</a></li>
                <li class="nav-item"><a class="nav-link" href="ALERT MANAGEMENT SCREEN.PHP">Alerts</a></li>
                <li class="nav-item"><a class="nav-link" href="SETTINGS SCREEN.PHP">Settings</a></li>
            </ul>
        </div>
    </nav>

  
    <div class="container mt-5">
       
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Vehicles</h5>
                        <p class="card-text">50</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Overloaded Vehicles</h5>
                        <p class="card-text">15</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Safe Vehicles</h5>
                        <p class="card-text">35</p>
                    </div>
                </div>
            </div>
        </div>

       
        <h3 class="mt-4">Recent Alerts</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Vehicle ID</th>
                    <th>Load</th>
                    <th>Location</th>
                    <th>Alert Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234</td>
                    <td>1200 kg</td>
                    <td>Main Street</td>
                    <td>10:45 AM</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include 'DATABASE CONNECT.PHP'; 
?>