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
      <h1>Motorology</h1>
      <p>Motorology explores the design and aesthetic aspects of automotive culture, featuring:</p>
      <ul>
        <li><strong>Automotive Styles:</strong> Documenting and analyzing various automotive design trends and styles.</li>
        <li><strong>Visual Design:</strong> Incorporating scientific and technical elements into automotive visuals.</li>
        <li><strong>Project Development:</strong> Creating detailed studies and visual representations of automotive designs.</li>
      </ul>
      <p>Our focus is on merging technical insights with design to offer a comprehensive view of automotive aesthetics.</p>
    </section>

    <!-- Use the $includesPath variable to include footer.php -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/footer.php'; ?>
</body>
</html>
