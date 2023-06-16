<!DOCTYPE html>
<html>
<head>
    <title>Shoe Shopping - Admin Dashboard</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .logout-btn {
            float: right;
            background-color: #f44336;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #d32f2f;
        }
        .product-list {
            margin-top: 20px;
        }
        .product-item {
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .product-item:hover {
            background-color: #e0e0e0;
        }
        .product-title {
            font-weight: bold;
            color: #333;
        }
        .product-description {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, Admin</h2>
        <a href="logout.php" class="logout-btn">Logout</a>
        <div class="product-list">
            <div class="product-item">
                <h3 class="product-title">Nike Air Max 90</h3>
                <p class="product-description">Classic sneakers with a sleek design.</p>
            </div>
            <div class="product-item">
                <h3 class="product-title">Adidas Ultraboost</h3>
                <p class="product-description">Comfortable running shoes with responsive cushioning.</p>
            </div>
            <div class="product-item">
                <h3 class="product-title">Puma Suede</h3>
                <p class="product-description">Iconic shoes with a retro look.</p>
            </div>
            <!-- Add more product items here -->
        </div>
    </div>
</body>
</html>
<?php include 'logincheck.php'; ?>