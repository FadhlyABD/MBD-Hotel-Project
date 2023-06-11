<div class="container-fluid custom-bg-4 text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0">DASHBOARD</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="col-lg-2 custom-bg-4 border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg custom-bg-4" data-bs-theme="dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light">ADMIN PANEL</h4>    
            <button class="navbar-toggler shadow-none z-3" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="rooms.php">Rooms & Suites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="facilities.php">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="settings.php">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
