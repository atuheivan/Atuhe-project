settings screen
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Settings</h3>
        <form>
        
            <div class="mb-3">
                <label for="threshold" class="form-label">Max Load Threshold (kg)</label>
                <input type="number" class="form-control" id="threshold" placeholder="1500">
            </div>
            
        
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="alertToggle">
                <label class="form-check-label" for="alertToggle">Enable Alerts (Email/SMS)</label>
            </div>

            
            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <?php
include 'DATABASE CONNECT.PHP'; 
?>