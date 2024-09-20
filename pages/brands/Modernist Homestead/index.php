<?php
  // Include the configuration file
  include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include CSS files using $cssPath -->
    <link rel="stylesheet" href="<?php echo $cssPath; ?>styles.css">
    <link rel="stylesheet" href="<?php echo $cssPath; ?>point.css">
    
    <!-- Include JS files using $jsPath -->
    <script src="<?php echo $jsPath; ?>jquery-1.11.1.min.js"></script>  
    <script src="<?php echo $jsPath; ?>scripts.js"></script>
    
    <!-- Include other head components -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/head.php'; ?>
    
</head>
<body>
    <!-- Use the $includesPath variable to include header.php -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/header.php'; ?>

    <section id="mainContent">
      <h1>Modernist Homestead</h1>
      <p>Modernist Homestead is dedicated to blending traditional homesteading techniques with modern technology. Our focus includes:</p>
      <ul>
        <li><strong>Content Creation:</strong> Articles and guides on sustainable living, gardening, cooking, and more.</li>
        <li><strong>Shop:</strong> A curated selection of tools and products for gardening, cooking, and homesteading.</li>
        <li><strong>Homestead Technology:</strong> Guides on automation and technology integration in modern homesteading.</li>
      </ul>
      <p>Our content and products are designed to enhance your homesteading journey with practical advice and innovative solutions.</p>
    </section>

    <!-- Use the $includesPath variable to include footer.php -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/footer.php'; ?>
</body>
</html>
