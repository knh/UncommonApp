<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php $theme->site('url');?>"><?php $theme->site('name');?></a>
      <div class="btn-group pull-right">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="icon-user"></i> Username
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?php $theme->site('url');?>/profile"><i class="icon-th-list"></i> 个人信息</a></li>
		  <li><a href="<?php $theme->site('url');?>/dashboard/messages"><i class="icon-envelope"></i> 站内信</a></li>
          <li class="divider"></li>
          <li><a href="<?php $theme->site('url');?>/logout" ><i class="icon-off"></i> 登出</a></li>
        </ul>
      </div>
      <div class="nav-collapse">
        <ul class="nav">
          <li<?php if(($theme->active_view() == 'index' || $theme->active_view() == 'dashboard') && $theme->active_subview() != 'messages'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>">控制板</a></li>
          <li<?php if($theme->active_view() == 'dashboard' && $theme->active_subview() == 'messages'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>/dashboard/messages">站内信</a></li>
          <li<?php if($theme->active_view() == 'help'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>/help">帮助</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>