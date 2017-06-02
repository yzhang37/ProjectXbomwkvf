<!DOCTYPE HTML>
<meta charset="utf-8">
<html>
	<body>
		<?php echo form_open('home'); ?>
			<ul>
				<li><a href="<?php echo site_url('register');?>" name="register">注册</a></li>
				<li><a href="<?php echo site_url('login');?>" name="login">登录</a></li>
			</ul>
		</form>
	</body>
</html>