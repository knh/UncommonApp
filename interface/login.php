<?php
include('inc/header.php');
$theme->controller('navbar-guest');
?>
	<div class="container-fluid">
      <div class="row-fluid">
        <?php $theme->controller('login');?>
	  </div><!--/row-->
	  <?php $theme->controller('footer'); ?>
	</div><!--/.fluid-container-->
<?php
include('inc/footer.php');
?>