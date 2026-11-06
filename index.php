<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 1. Magic line that makes the web page look like a mobile app on phones -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLMUN Student Queue</title>

    <!-- 2. Bootstrap CSS (styles everything automatically) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container text-center">
            <span class="navbar-brand mx-auto fw-bold fs-4">PLMUN Registrar Services</span>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                
                <!-- Mobile Card Box -->
                <div class="card shadow border-0 rounded-4 p-4 mb-4">
                    <h5 class="text-secondary fw-semibold">Current Serving Number</h5>
                    <h1 class="display-1 text-primary fw-bold my-2">Q-012</h1>
                    <p class="text-muted fs-6">Window 1: Transcripts & Records</p>
                    
                    <hr>

                    <h6 class="text-secondary">Your Queue Ticket</h6>
                    <div class="bg-light border rounded-3 p-3 my-3">
                        <span class="fs-2 fw-bold text-success">Q-018</span>
                        <p class="mb-0 text-muted small">Estimated wait time: 10 mins</p>
                    </div>

                    <button class="btn btn-primary btn-lg w-100 rounded-pill shadow-sm">Get Queue Ticket</button>
                </div>

            </div>
        </div>
    </div>

</body>
</html>