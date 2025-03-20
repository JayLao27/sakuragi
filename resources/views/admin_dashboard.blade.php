<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Inventory Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- ✅ Admin Header (Navbar) -->
       @include('includes/header')

        <!-- ✅ Main Content -->
        <div class="container mt-4">
            @yield('content')
        </div>
</head>
<body class="bg-light">

<div class="container mt-4">
    <!-- Back Button -->    
    <a href="#" class="btn btn-light mb-3"><i class="bi bi-arrow-left"></i> Back</a>
    <h4 class="card-title">Add Inventory Item</h4>

    <!-- Form Card -->
    <div class="card shadow-sm">
        <div class="card-body"> 
            <h4 class="card-title">Item</h4>
            <p class="text-muted">Enter the details of the new inventory item</p>

            <form>
                <div class="row mb-3">
                    <!-- Item Name -->
                    <div class="col-md-6">
                        <label class="form-label">Item Name</label>
                        <input type="text" class="form-control" placeholder="Enter item name" value="Cotton Fabric - Black">
                    </div>

                    <!-- Category -->
                    <div class="col-md-6">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                            <option selected>Select a category</option>
                            <option>Fabric</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- SKU -->
                    <div class="col-md-6">
                        <label class="form-label">SKU</label>
                        <input type="text" class="form-control" value="FAB-COT-BLK" readonly>
                    </div>

                    <!-- Initial Quantity -->
                    <div class="col-md-6">
                        <label class="form-label">Initial Quantity</label>
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Reorder Point -->
                    <div class="col-md-6">
                        <label class="form-label">Reorder Point</label>
                        <input type="number" class="form-control" value="10">
                    </div>

                    <!-- Supplier -->
                    <div class="col-md-6">
                        <label class="form-label">Supplier</label>
                        <input type="text" class="form-control" value="Fabric Supplier Inc." readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Cost per Unit -->
                    <div class="col-md-6">
                        <label class="form-label">Cost per Unit ($)</label>
                        <input type="number" class="form-control" step="0.01" value="0.00">
                    </div>

                    <!-- Unit Price -->
                    <div class="col-md-6">
                        <label class="form-label">Unit Price ($)</label>
                        <input type="number" class="form-control" step="0.01" value="0.00">
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter item description..."></textarea>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light me-2">Cancel</button>
                    <button type="submit" class="btn btn-dark">Add Item</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
