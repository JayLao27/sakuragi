<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    @include('includes/header')

<div class="container mt-4">
    <!-- Order Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Order #1001</h4>
        <span class="badge bg-primary">In Progress</span>
    </div>

    <div class="row">
        <!-- Left Column (Order Details) -->
        <div class="col-md-8">
            <!-- Order Details Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="fw-bold">Order Details</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Customer:</strong> Sarah Johnson</p>
                            <p><strong>Order Date:</strong> Mar 18, 2025</p>
                            <p><strong>Total:</strong> $75.50</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Service:</strong> Embroidery</p>
                            <p><strong>Due Date:</strong> Mar 25, 2025</p>
                        </div>
                    </div>
                    <h6 class="mt-3">Order Items</h6>
                    <p>Custom Logo Embroidery <span class="fw-bold">$75.00</span></p>
                    <h6>Notes</h6>
                    <p class="text-muted">Customer requested high-quality thread for this logo. Logo should be placed on the left chest area.</p>

                    <button class="btn btn-outline-secondary btn-sm">Edit Order</button>
                    <button class="btn btn-dark btn-sm">Mark as Completed</button>
                </div>
            </div>

            <!-- Customization Tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#">Customizations</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Checklist</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Design Files</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Custom Fields</a></li>
            </ul>

            <!-- Customization Details Table -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="fw-bold">Customization Details</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Additional Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M</td>
                                <td>John Smith</td>
                                <td>Logo on left chest</td>
                                <td>CEO</td>
                                <td><button class="btn btn-sm btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>Jane Doe</td>
                                <td>Logo on left chest</td>
                                <td>CTO</td>
                                <td><button class="btn btn-sm btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>Robert Johnson</td>
                                <td>Logo on left chest, Name on right sleeve</td>
                                <td>CPO</td>
                                <td><button class="btn btn-sm btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>Emily Williams</td>
                                <td>Logo on left chest</td>
                                <td>COO</td>
                                <td><button class="btn btn-sm btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>XL</td>
                                <td>Michael Brown</td>
                                <td>Logo on left chest, Position on right sleeve</td>
                                <td>Director</td>
                                <td><button class="btn btn-sm btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-sm btn-outline-primary">+ Add Item</button>
                </div>
            </div>
        </div>

        <!-- Right Column (Customer & Order Timeline) -->
        <div class="col-md-4">
            <!-- Customer Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="fw-bold">Customer</h5>
                    <p><strong>Sarah Johnson</strong></p>
                    <p class="text-muted">Customer since 2023</p>
                    <p><strong>Email:</strong> sarah.johnson@example.com</p>
                    <p><strong>Phone:</strong> (555) 123-4567</p>
                    <p><strong>Address:</strong><br> 123 Main Street, Suite 101<br> Anytown, CA 12345</p>
                    <button class="btn btn-outline-dark btn-sm">View Customer History</button>
                </div>
            </div>

            <!-- Order Timeline -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="fw-bold">Order Timeline</h5>
                    <ul class="list-unstyled">
                        <li>✅ <strong>Order Received</strong> - Mar 18, 2025</li>
                        <li>🕒 <strong>Processing Started</strong> - Mar 19, 2025</li>
                        <li>🔜 <strong>Estimated Completion</strong> - Mar 25, 2025</li>
                    </ul>
                </div>
            </div>

            <!-- Customization Summary -->
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold">Customization Summary</h5>
                    <p><strong>Total Items:</strong> 5</p>
                    <p><strong>Verified Items:</strong> 5 of 5</p>
                    <h6>Size Breakdown</h6>
                    <ul class="list-unstyled">
                        <li>M - 2</li>
                        <li>L - 2</li>
                        <li>XL - 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
