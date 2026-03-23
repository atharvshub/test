<?php
session_start();
require 'db_connect.php'; 

// This page now only handles the DISPLAY. 
// We will send the form data directly to a processing script that redirects to the new tab.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Agreement | Atharv's Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root { --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); --body-bg: #f3f4f9; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--body-bg); color: #1e293b;}
   /* Footer */
        .main-footer {
            margin-top: 80px;
            padding: 40px 0;
            border-top: 1px solid #e2e8f0;
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

        .dashboard-header { background: var(--primary-gradient); border-radius: 24px; padding: 40px; color: white; margin-top: 30px; box-shadow: 0 20px 40px rgba(99, 102, 241, 0.2); }
        .form-card { background: white; border-radius: 20px; padding: 40px; margin-top: -30px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: none; }
        .clause-item { background: #f8fafc; padding: 10px; border-radius: 10px; margin-bottom: 10px; border-left: 4px solid #6366f1; display: flex; gap: 10px; }
        .stamp-box { border: 2px solid #1e293b; width: 120px; height: 140px; margin: 10px auto; display: flex; flex-direction: column; align-items: center; justify-content: flex-end; padding-bottom: 10px; font-size: 10px; font-weight: bold; color: #64748b; }
        .verified-stamp { border: 3px double #065f46; color: #065f46; padding: 5px; transform: rotate(-5deg); font-weight: 900; display: inline-block; margin: 10px 0; font-size: 0.7rem; }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-lightning-charge-fill me-2"></i>Atharv's Hub</a>
        <div class="ms-auto d-flex align-items-center">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
            <a href="logout.php" class="btn-logout ms-3"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
        </div>
    </div>
</nav>

<div class="container mb-5">
    <div class="dashboard-header text-center">
        <h2 class="fw-bold">Agreement Builder</h2>
        <p class="opacity-75">Professional Document System</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card form-card">
                <form action="process_agreement.php" method="POST" target="_blank">
                    <div class="row g-4 mt-2">
                        <div class="col-md-5 border-end">
                            <h6 class="text-uppercase fw-bold text-primary small">Founder Info</h6>
                            <h4 class="fw-bold mb-0">Atharv's Hub</h4>
                            <p class="mb-0">Atharv Tambe</p>
                            <div class="verified-stamp">DIGITALLY VERIFIED</div>
                        </div>

                        <div class="col-md-7">
                            <h6 class="text-uppercase fw-bold text-primary small">Client Info</h6>
                            <div class="mb-3">
                                <label class="small fw-bold">Client Name</label>
                                <input type="text" name="client_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="small fw-bold">Mobile Number</label>
                                <input type="text" name="client_mobile" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="small fw-bold">Agreement Type</label>
                                <select name="agreement_type" class="form-select">
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                    <option>One Time</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6 class="text-uppercase fw-bold text-primary small">Clauses</h6>
                        <div id="clausesContainer">
                            <div class="clause-item"><input type="text" name="clauses[]" class="form-control" required></div>
                        </div>
                        <button type="button" class="btn btn-sm btn-dark mt-2" onclick="addClause()">+ Add Clause</button>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3 mt-5 rounded-pill fw-bold shadow">
                        GENERATE & OPEN AGREEMENT
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
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
<script>
    function addClause() {
        const div = document.createElement('div');
        div.className = 'clause-item mt-2';
        div.innerHTML = `<input type="text" name="clauses[]" class="form-control" required>
                         <button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">X</button>`;
        document.getElementById('clausesContainer').appendChild(div);
    }
</script>
</body>
</html>