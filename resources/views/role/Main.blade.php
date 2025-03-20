<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="h-50">
    
<div class="container mt-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="fw-bold">Dashboard</h2>
        <div>
            <button class="btn btn-outline-secondary">⚙️ Design Mockup</button>
            <button class="btn btn-primary">Place New Order</button>
        </div>
    </div>
    <p class="text-muted">Manage your orders and designs in one place</p>

    <!-- Order Summary -->
    <div class="row g-3">
        <div class="col-md-3">
            <div class="card p-3">
                <h5 class="fw-bold">Total Orders</h5>
                <h2>12</h2>
                <p class="text-muted">All time orders</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <h5 class="fw-bold">In Progress</h5>
                <h2>4</h2>
                <p class="text-muted">Orders being processed</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <h5 class="fw-bold">Completed</h5>
                <h2>8</h2>
                <p class="text-muted">Successfully delivered</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <h5 class="fw-bold">Attention Needed</h5>
                <h2>2</h2>
                <p class="text-muted">Requires your action</p>
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs mt-4">
        <li class="nav-item"><a class="nav-link active" href="#">Overview</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Design Files</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Price Calculator</a></li>
    </ul>

    <div class="row mt-3">
        <!-- Left Side: Recent Orders -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="fw-bold">Recent Orders</h5>
                        <a href="#" class="text-primary">View all →</a>
                    </div>
                    <p class="text-muted">You have placed 12 orders this month</p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="text-primary">ORD-001</a></td>
                                <td>2023-06-15</td>
                                <td>10 Custom T-Shirts</td>
                                <td>$259.90</td>
                                <td><span class="badge bg-primary">In Production</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">ORD-002</a></td>
                                <td>2023-06-10</td>
                                <td>5 Custom Hoodies</td>
                                <td>$199.95</td>
                                <td><span class="badge bg-warning text-dark">Design Review</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">ORD-003</a></td>
                                <td>2023-06-05</td>
                                <td>20 Custom Caps</td>
                                <td>$159.80</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Right Side: Pending Actions -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold">Pending Actions</h5>
                    <p class="text-muted">Items that require your attention</p>

                    <h6 class="fw-bold">📤 Pending Design Uploads</h6>
                    <div class="d-flex justify-content-between align-items-center border p-2 mb-2">
                        <div>
                            <p class="mb-0">Custom Hoodies</p>
                            <small class="text-muted">Due by 2023-06-20</small>
                        </div>
                        <button class="btn btn-sm btn-primary">Upload</button>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border p-2 mb-3">
                        <div>
                            <p class="mb-0">Custom Polo Shirts</p>
                            <small class="text-muted">Due by 2023-06-25</small>
                        </div>
                        <button class="btn btn-sm btn-primary">Upload</button>
                    </div>

                    <h6 class="fw-bold">⚠️ Design Feedback</h6>
                    <div class="border p-2">
                        <p class="mb-0">Custom Caps</p>
                        <small class="text-danger">Resolution too low. Please upload a higher quality image.</small>
                        <button class="btn btn-sm btn-outline-secondary mt-2">View</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
