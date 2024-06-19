<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony RX100 IV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .product-container {
            display: inline-block;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .product-price {
            font-size: 28px;
            font-weight: bold;
            color: #ff0000;
            margin-top: 10px;
        }
        .product-old-price {
            font-size: 20px;
            text-decoration: line-through;
            color: #888;
            margin-left: 10px;
        }
        .product-discount {
            font-size: 20px;
            color: #ff0000;
            margin-left: 10px;
        }
        .product-source {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <?php
            echo '<img src="canon-6d-16_9.webp" alt="Sony RX100 IV" width="300">';
            echo '<div class="product-title">Máy Ảnh Sony RX100 IV (Chính Hãng)</div>';
            echo '<div class="product-price">19.090.000 ₫<span class="product-old-price">22.990.000 ₫</span><span class="product-discount">-17%</span></div>';
            echo '<div class="product-source">Source: Product of Sony</div>';
        ?>
    </div>
</body>
</html>
