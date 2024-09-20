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
      <h1>Sentimentography</h1>
      <p>Sentimentography delves into the exploration of emotions through visual art, focusing on:</p>
      <ul>
        <li><strong>Emotional Expression:</strong> Capturing and conveying emotional states through artistic techniques.</li>
        <li><strong>Artistic Projects:</strong> Creating works that reflect and evoke specific sentiments.</li>
        <li><strong>Visual Language:</strong> Developing a visual language that communicates emotional depth and nuance.</li>
      </ul>
      <p>Our goal is to bridge the gap between emotion and art, creating a unique and expressive visual experience.</p>
    </section>

    <!-- Use the $includesPath variable to include footer.php -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/footer.php'; ?>
</body>
</html>
