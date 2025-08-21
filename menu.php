<?php
include 'admin/db.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Menu</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f7f7f7;
      color: #333;
    }

    /* Navbar */
    nav {
      background: #222;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 50px;
    }

    nav img {
      height: 50px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #e63946;
    }

    /* Hero Section */
    .box {
      text-align: center;
      padding: 40px 20px;
      background: #eee;
    }

    .box h3 {
      font-size: 28px;
      color: #444;
    }

    .box p {
      font-size: 22px;
      font-weight: bold;
      color: #e63946;
      margin: 10px 0;
    }

    .box img {
      height: 80px;
    }

    /* Menu Section */
    h2.section-title {
      text-align: center;
      margin: 30px 0;
      font-size: 26px;
      color: #222;
    }

    .menu-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 20px 50px;
    }

    .menu-box {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: 0.3s;
    }

    .menu-box:hover {
      transform: translateY(-5px);
    }

    .menu-box img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .menu-content {
      padding: 15px;
      text-align: center;
    }

    .menu-content h3 {
      font-size: 20px;
      margin-bottom: 8px;
      color: #333;
    }

    .menu-content p {
      font-size: 14px;
      color: #666;
      margin-bottom: 12px;
    }

    .price {
      font-size: 18px;
      font-weight: bold;
      color: #e63946;
    }

    /* Footer */
    footer {
      background: #222;
      color: #ddd;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <img src="logo.png" alt="Logo">
    <ul>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="reservation.html">Reservation</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>

  <!-- Hero Section -->
  <div class="box">
    <h3>WELCOME to</h3>
    <p>Hunger Hunt</p>
    <img src="cutlery (1).png" alt="cutlery icon">
  </div>

  <!-- Featured Dishes -->
  <h2 class="section-title">🍴 Featured Dishes</h2>

<div class="menu-container">
    <?php
    $result = $conn->query("SELECT * FROM menu");
    while ($row = $result->fetch_assoc()):
    ?>
    <div class="menu-box">
        <!-- Image from uploads folder -->
        <img src="admin/uploads/<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>">

        <div class="menu-content">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <div class="price">$<?php echo $row['price']; ?></div>
        </div>
    </div>
    <?php endwhile; ?>
</div>


  <!-- Main Course -->
  <h2 class="section-title">🍽️ Main Course</h2>
  <div class="menu-container">
    <?php
    $result = $conn->query("SELECT * FROM main_course");
    while ($row = $result->fetch_assoc()):
    ?>
    <div class="menu-box">
        <!-- Image from uploads folder -->
        <img src="admin/uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">

        <div class="menu-content">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['des']; ?></p>
            <div class="price">$<?php echo $row['price']; ?></div>
        </div>
    </div>
    <?php endwhile; ?>
</div>


  <!-- Drinks & Cocktails -->
  <h2 class="section-title">🍹 Drinks & Cocktails</h2>
  <div class="menu-container">
    <div class="menu-box">
      <img src="food1.jpg" alt="">
      <div class="menu-content">
        <h3>Fiery Carrot Margarita</h3>
        <p>Spicy carrot lime cocktail.</p>
        <div class="price">$6.00</div>
      </div>
    </div>

    <div class="menu-box">
      <img src="food1.jpg" alt="">
      <div class="menu-content">
        <h3>Comte de Provence Rosé</h3>
        <p>Lemon and vanilla aroma.</p>
        <div class="price">$5.00</div>
      </div>
    </div>

    <div class="menu-box">
      <img src="food1.jpg" alt="">
      <div class="menu-content">
        <h3>Malbec Selection</h3>
        <p>Perfect with sweet cheese pastries.</p>
        <div class="price">$15.00</div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Hunger Hunt. All Rights Reserved.</p>
  </footer>

</body>
</html>
