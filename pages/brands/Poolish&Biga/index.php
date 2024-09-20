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
      <h1>Poolish & Biga</h1>
      <p>Poolish & Biga offers products tailored to the baking lifestyle with a distinctive design approach:</p>
      <ul>
        <li><strong>Design Aesthetic:</strong> Features a retro, offset/screenprint style with bold typography and CMYK halftone imagery.</li>
        <li><strong>Product Range:</strong> Includes high-quality kitchen tools and accessories for baking enthusiasts.</li>
        <li><strong>Product Categories:</strong>
          <ul>
            <li>Cutting Boards</li>
            <li>Rolling Pins</li>
            <li>Dough Whisks</li>
            <li>Bread Bags (sewn waxed canvas)</li>
            <li>Bakers Boards / Kneading Boards</li>
            <li>Aprons</li>
            <li>Print-on-Demand Items:
              <ul>
                <li>Blank Recipe Cards</li>
                <li>Bottle Labels</li>
                <li>Spice Jar Labels</li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <p>The brand combines functionality with a unique visual style to enhance the baking experience.</p>
    </section>

    <!-- Use the $includesPath variable to include footer.php -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/footer.php'; ?>
</body>
</html>
