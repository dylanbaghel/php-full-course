<?php 
    /**
     * Conditionals
     */
    $userId = "";
    $price = 250;
    $day = "WeD";

    $products = [
        ["name" => "Shirt", "price"=> 350],
        ["name"=> "Mobile Phone", "price"=> 15500],
        ["name"=> "Bag", "price"=> 999],
        ["name"=> "IPhone", "price"=> 90900],
        ["name"=> "Airpods", "price"=> 18000]
    ];
    /**
     * If
     * If-Else
     * If-Else If-Else
     *      --> See HTML Below.
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
    <style>
        .product-box {
            border: 1px solid grey;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <h1>Conditionals</h1>

    <!-- If -->
    <?php if ($userId): ?>
        <p>Logout</p>
    <?php endif; ?>
    <?php if (!$userId): ?>
        <p>Login</p>
    <?php endif; ?>
    
    <!-- If - Else -->
    <?php if ($price > 200): ?>
        <p>Too Costly</p>
    <?php else: ?>
        <p>Worth It</p>
    <?php endif; ?>

    <!-- Else-If -->
    <?php if (strtolower($day) === "mon"): ?>
        <p>Monday</p>
    <?php elseif (strtolower($day) === "tue"): ?>
        <p>Tuesday</p>
    <?php elseif (strtolower($day) === "wed"): ?>
        <p>Wednesday</p>
    <?php elseif (strtolower($day) === "thu"): ?>
        <p>Thursday</p>
    <?php elseif (strtolower($day) === "fri"): ?>
        <p>Friday</p>
    <?php elseif (strtolower($day) === "sat"): ?>
        <p>Saturday</p>
    <?php elseif (strtolower($day) === "sun"): ?>
        <p>Sunday</p>
    <?php else: ?>
        <p>Invalid Input</p>
    <?php endif; ?>

    <!-- Products -->
    <?php foreach($products as $product): ?>
        <div class="product-box">
            <p>Name: <?php echo $product["name"] ?></p>
            <p>Price: <?php echo $product["price"] ?></p>

            <?php if ($product["price"] > 70000): ?>
                <p>Affordability: Luxirious</p>
            <?php elseif ($product["price"] > 50000): ?>
                <p>Affordability: Expensive</p>
            <?php elseif ($product["price"] > 10000): ?>
                <p>Affordability: Reasonable</p>
            <?php else: ?>
                <p>Affordability: Cheap</p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>