<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            min-height: 100vh;
        }
        .sidebar .nav-link {
            color: #fff;
        }
        .content {
            margin-top: 20px;
        }
        .user-dropdown .dropdown-toggle::after {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h2 class="mt-3 text-center">Admin Panel</h2>
                <ul class="nav flex-column mt-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>

                <!-- User Dropdown -->
                <div class="dropdown user-dropdown mt-4">
                    <a class="btn btn-secondary dropdown-toggle w-100" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Username
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-10 content">
                <h1 class="mt-3">Dashboard</h1>
                <p>Welcome to the admin panel. Here you can manage your users, products, and orders.</p>
                <!-- Add your content here -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
