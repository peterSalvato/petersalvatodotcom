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
      <h1>Aiden Jae</h1>
      <p>Aiden Jae is a fine jewelry brand specializing in:</p>
      <ul>
        <li><strong>Materials:</strong> 9k gold, with a strong emphasis on sustainability and ethical practices.</li>
        <li><strong>Design Aesthetic:</strong> Organic color palettes and soft photography evoke a natural elegance.</li>
        <li><strong>Design Style:</strong> The website features a 'crunchy brutalism' style, combining luxurious design with a focus on environmental impact.</li>
      </ul>
      <p>Explore our collection to see how high-quality craftsmanship meets sustainable luxury.</p>
    </section>

    <!-- Use the $includesPath variable to include footer.php -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/footer.php'; ?>
</body>
</html>
