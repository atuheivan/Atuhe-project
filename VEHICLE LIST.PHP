vehicle list screen
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Vehicles</h3>
        <div class="d-flex justify-content-between my-3">
            <input class="form-control w-50" type="text" placeholder="Search by Vehicle ID or Status">
            <button class="btn btn-primary">Add Vehicle</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Vehicle ID</th>
                    <th>Model</th>
                    <th>Load Weight</th>
                    <th>Max Capacity</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234</td>
                    <td>Truck A</td>
                    <td>1200 kg</td>
                    <td>1500 kg</td>
                    <td><span class="badge bg-danger">Overloaded</span></td>
                    <td><button class="btn btn-sm btn-secondary">View</button></td>
                </tr>
                <!-- Additional rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include 'DATABASE CONNECT.PHP'; 
?>
