<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Atharv's Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --body-bg: #f3f4f9;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--body-bg);
            color: #1e293b;
        }

        /* Top Navbar */
        .navbar {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .navbar-brand { font-weight: 800; color: #4338ca !important; }
        .nav-link { font-weight: 600; color: #64748b !important; margin: 0 10px; }
        .btn-logout { background: #ef4444; color: white; border-radius: 8px; padding: 8px 20px; border: none; }

        /* Banner Section */
        .dashboard-header {
            background: var(--primary-gradient);
            border-radius: 24px;
            padding: 50px;
            color: white;
            margin-top: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.2);
        }
        .dashboard-header i.bg-icon {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 8rem;
            opacity: 0.15;
        }

        /* Card Tiles */
        .action-card {
            border: none;
            border-radius: 20px;
            background: white;
            padding: 30px;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
        }
        .action-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
        }
        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .bg-purple-light { background: #f3e8ff; color: #9333ea; }
        .bg-blue-light { background: #e0e7ff; color: #4338ca; }

        /* Footer */
        .main-footer {
            margin-top: 80px;
            padding: 40px 0;
            border-top: 1px solid #e2e8f0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-lightning-charge-fill me-2"></i>Atharv's Hub</a>
        <div class="ms-auto d-flex align-items-center">
            <a class="nav-link" href="#">Dashboard</a>
            <a class="nav-link" href="setting.php">Settings</a>
            <a href="logout.php" class="btn-logout ms-3"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="dashboard-header">
        <div class="col-md-8">
            <h1 class="fw-bold display-5">Draft a New Agreement</h1>
            <p class="lead opacity-75">Fill in the details below to generate a new legal contract for your portals.</p>
        </div>
        <i class="bi bi-graph-up-arrow bg-icon"></i>
    </div>

    <div class="row mt-5 g-4">
        <div class="col-md-6">
            <div class="card action-card">
                <div class="icon-box bg-blue-light">
                    <i class="bi bi-file-earmark-plus-fill"></i>
                </div>
                <h3 class="fw-bold">Create New Agreement</h3>
                <p class="text-muted">Generate a customized professional legal agreement in PDF format for your client.</p>
                <a href="create_form.php" class="btn btn-primary mt-3 px-4 rounded-pill">Launch Builder</a>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card action-card">
                <div class="icon-box bg-purple-light">
                    <i class="bi bi-archive-fill"></i>
                </div>
                <h3 class="fw-bold">Past Agreements</h3>
                <p class="text-muted">Review all previously generated website and portal sales contracts.</p>
                <a href="past_agreements.php" class="btn btn-outline-dark mt-3 px-4 rounded-pill">View Archive</a>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-1 text-secondary">&copy; <?php echo date('Y'); ?> All Rights Reserved by <strong>Atharv's Hub</strong></p>
                <p class="small text-muted mb-0">Designed And Developed By <strong>Atharv Tambe</strong></p>
            </div>
            <div class="col-md-6 text-center text-md-end pt-3 pt-md-0">
                <a href="terms.php" class="text-secondary text-decoration-none mx-2 small">Terms</a>
                <a href="privacy.php" class="text-secondary text-decoration-none mx-2 small">Privacy</a>
                <a href="support.php" class="text-secondary text-decoration-none mx-2 small">Contact Support</a>
            </div>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>