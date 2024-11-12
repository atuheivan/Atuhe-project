alert management screen
<html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Manage Alerts</h3>
        <div class="d-flex justify-content-between my-3">
            <input class="form-control w-50" type="text" placeholder="Filter by date, status, or vehicle">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Vehicle ID</th>
                    <th>Loads</th>
                    <th>Location</th>
                    <th>Alert Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234</td>
                    <td>1200 kg</td>
                    <td>Mbarara Street</td>
                    <td>10:45 AM</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td><button class="btn btn-sm btn-success">Resolve Alert</button></td>
                </tr>
               
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include 'DATABASE CONNECT.PHP'; 
?>
