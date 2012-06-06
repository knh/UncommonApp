<div class="span3"></div>
<div class="span6">
	<form class="well form-horizontal" action="" method="POST" name="loginForm">
		<fieldset>
		<div class="control-group">
			<label class="control-label" for="i_username">用户名</label>
			<div class="controls">
				<input type="text" id="i_username" class="input-xlarge" value="" name="username" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="i_password">密码</label>
			<div class="controls">
			<input type="password" id="i_password" class="input-xlarge" value="" name="password"/>
			</div>
		</div>
		<div class="control-group">
			<div class="controls" style>
				<input class="btn btn-primary" type="submit" style="width:100px;" value="登陆">
				<a class="btn" style="width:60px;" href="<?php $theme->site('url');?>/register"> 注册 </a>
			</div>
		</div>
		</fieldset>
	</form>
</div>