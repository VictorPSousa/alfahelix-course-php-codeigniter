    <!--
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    -->

    <script type="text/javascript" src="<?= base_url(); ?>public/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/mdb.min.js"></script>

    <script src="<?= base_url(); ?>public/js/scripts.js"></script>
    <?php 
      if(isset($scripts)){
        foreach($scripts as $script_name){
          $src = base_url() . "public/js/" . $script_name; 
    ?>
    <script src="<?= $src ?>"></script>
    <?php 
        }
      } 
    ?>
    
  </body>
</html>