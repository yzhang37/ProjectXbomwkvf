<!DOCTYPE HTML>
<meta charset="utf-8">
<html>
	<body>
		<?php echo validation_errors(); ?>
		<?php echo form_open('register'); ?>
			<h3>注册</h3>
			<ul>
				<li>邮箱：<input type="email" name="reg_email" placeholder="以后将作为登录用户名使用"
					value="<?php echo set_value('reg_email');?>"></input></li>
				<li>昵称：<input type="text" name="reg_nickname" placeholder="输入昵称"
					value="<?php echo set_value('reg_nickname');?>"></input></li>
				<li>密码：<input type="password" name="reg_password" placeholder="请输入密码"></input></li>
				<li>密码：<input type="password" name="reg_passconf" placeholder="请再次输入密码"></input></li>
				<li><input type="submit" name="reg_submit" value="注册"/></li>
				<li>已经拥有了账号？<a href="<?php echo site_url('login');?>">立即登录</a></li>
			</ul>
		</form>
	</body>
</html>