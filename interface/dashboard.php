<?php include('inc/header.php');?>

    <?php $theme->controller('navbar'); ?>

    <div class="container-fluid">
      <div class="row-fluid">
        <?php $theme->controller('sidebar');?>
		<?php $theme->controller($theme->get_controller_name($router));?>
	  </div><!--/row-->
	  <?php $theme->controller('footer'); ?>
	</div><!--/.fluid-container-->
<?php include('inc/footer.php');?>
