<?php include('inc/header.php');
$theme->controller('navbar-guest');
?>
	<div class="container-fluid">
      <div class="row-fluid">
	  <div class="span2"></div>
		<div class="span8">
        <div class="hero-unit">
			<h1>404： 呵呵，不妙啊</h1>
			<p>你访问的页面不存在，可能是你记录的地址已经发生变更或者服务器正在傲娇中。你可以尝试喂她一些饼干。</p>
			<p><a href="<?php $theme->site('url');?>" class="btn btn-primary btn-large" style="float:right;">回到主页 &raquo;</a></p>
		</div>
		</div>
	  <div class="span2"></div>
	  </div><!--/row-->
	  <?php $theme->controller('footer'); ?>
	</div><!--/.fluid-container-->
<?php 
include('inc/footer.php');?>