<?php
  // Include the configuration file for asset paths
  include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Dynamically include CSS files using the $cssPath variable -->
    <link rel="stylesheet" href="<?php echo $cssPath; ?>styles.css">
    <link rel="stylesheet" href="<?php echo $cssPath; ?>point.css">
    
    <!-- Include JS files dynamically using the $jsPath variable -->
    <script src="<?php echo $jsPath; ?>jquery-1.11.1.min.js"></script>  
    <script src="<?php echo $jsPath; ?>scripts.js"></script>
    
    <!-- Include other head components -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/head.php'; ?>
    
    <title>Peter Salvato | Designer, Engineer, Urban Homesteader</title>
</head>
<body>
    <!-- Include the header component dynamically -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/header.php'; ?>

    <section id="mainContent">
      <h1>About Peter Salvato</h1>
      <p>
          Peter Salvato is a designer, engineer, and accidental urban homesteader, navigating the space where code, ink, and gluten-free flour meet. Raised in Brooklyn, he’s more interested in what works than in following trends—whether that’s crafting a custom typeface or growing bananas and jalapeños in his backyard. His approach to design is like his approach to everything else: hands-on, no-nonsense, and always curious.
      </p>
      <p>
          A graduate of the School of Visual Arts, Peter’s work spans a variety of mediums, mixing the precision of technology with the soul of craft. Think <em>Bauhaus at a dive bar</em>—bold, beautiful, and functional design with just the right amount of grit. Moving fluidly between disciplines, he has a knack for seeing the hidden connections that others might overlook. Whether he’s building a brand or fine-tuning a web app, his aim is always the same: to create work that’s functional, beautiful, and built to last.
      </p>
      <p>
          When he’s not elbow-deep in Photoshop or pulling a screenprint, Peter’s likely baking gluten-free bread that defies expectations or coaxing life out of his backyard garden, where bananas and jalapeños thrive. He’s always experimenting across mediums, blending ideas, and pushing boundaries to find the unexpected.
      </p>
      <p>
          For Peter, design isn’t just a profession—it’s a way of thinking, a way of exploring how things work. Whether he’s tinkering with code, crafting a new brand, or growing the perfect tomato, he’s constantly learning and connecting ideas in unexpected ways.
      </p>
    </section>

    <!-- Include the footer component dynamically -->
    <?php include '/mnt/c/Users/ptsal/projects/petersalvatodotcom/assets/components/footer.php'; ?>
</body>
</html>
