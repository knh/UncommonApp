<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php $theme->site('url');?>"><?php $theme->site('name');?></a>
      <div class="nav-collapse">
        <ul class="nav">
          <li<?php if($theme->active_view() == 'help'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>/help">帮助</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>