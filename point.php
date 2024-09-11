<!DOCTYPE html>

<html>
  <?php include('assets/components/head.php'); ?>
  <body>

    <?php include('assets/components/header.php'); ?>
    

    <aside>
      <nav>
        <a href="#">info</a>
      </nav>
    </aside>
    
    <section id="mainContent">
        
          <?php      
            foreach (glob('assets/components/contentBoxes/*.php') as $filename)
            { include_once $filename; }
          ?>
          
    </section>
  
    <?php include('assets/components/footer.php'); ?>
    <?php include('assets/components/scripts.php'); ?>

  </body>
</html>
