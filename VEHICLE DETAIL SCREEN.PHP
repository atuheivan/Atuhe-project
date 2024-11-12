vehicle Details screen
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Vehicle Details</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Vehicle ID: 1234</h5>
                <p><strong>Model:</strong> Truck A</p>
                <p><strong>Owner:</strong> John Doe</p>
                <p><strong>Current Load:</strong> 1200 kg</p>
                <p><strong>Max Capacity:</strong> 1500 kg</p>
                <p><strong>Status:</strong> <span class="badge bg-danger">Overloaded</span></p>
            </div>
        </div>

        <h4 class="mt-4">Alert History</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Load</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-10-01</td>
                    <td>1200 kg</td>
                    <td>Main Street</td>
                </tr>
                <!-- Additional rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
