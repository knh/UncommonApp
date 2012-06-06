<?php
$active = $theme->active_view() . '/' . $theme->active_subview();
?>
<div class="span3">
  <div class="well sidebar-nav">
    <ul class="nav nav-list">
      <li class="nav-header">我的控制板</li>
      <li<?php if($active == 'dashboard/dashboard'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>/dashboard"><i class="icon-home"></i> 首页</a></li>
      <li<?php if($active == 'dashboard/notices'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>/dashboard/notices"><i class="icon-flag"></i> 公告栏</a></li>
      <li<?php if($active == 'dashboard/messages'){echo ' class="active"';}?>><a href="<?php $theme->site('url');?>/dashboard/messages"><i class="icon-envelope"></i> 站内信</a></li>
      <li class="nav-header">任务</li>
      <li><a href="<?php $theme->site('url');?>">提交推荐信申请</a></li>
      <li><a href="#">录入选校信息</a></li>
	  <!-- Teacher Modules -->
      <li><a href="#">处理推荐信请求</a></li>
      <li><a href="#">上传推荐信</a></li>
	  <!-- Counselor Modules -->
	  <li><a href="#">审核推荐信翻译</a></li>
      <li><a href="#">审核选校信息</a></li>
      <li><a href="#">录入材料制作进度</a></li>
	  <li><a href="#">录入快递追踪号码</a></li>
	  <li><a href="#">录入收费信息</a></li>
	  <!-- Translation Service -->
	  <li><a href="#">下载待翻译材料</a></li>
	  <li><a href="#">上传翻译后材料</a></li>
	  <!-- Administrator -->
	  <li><a href="#">检查系统安全</a></li>
	  <li><a href="#">查看操作记录</a></li>
	  <li><a href="#">导出和备份</a></li>
	  <li><a href="#">导入默认信息</a></li>
	  <li><a href="#">设置系统</a></li>
	  <!-- Guest -->
	  <li><a href="#">检查制作进度</a></li>
	  <li><a href="#">查看统计报表</a></li>
      <li class="nav-header">特殊</li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>
  </div><!--/.well -->
</div><!--/span-->