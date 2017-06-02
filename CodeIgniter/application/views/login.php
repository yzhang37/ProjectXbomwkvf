<!DOCTYPE HTML>
<meta charset="utf-8">
<html>
	<body>
		<?php echo validation_errors(); ?>
		<?php echo form_open('login'); ?>
			<h3>登录</h3>
			<ul>
				<li>邮箱：<input type="email" name="log_email" placeholder="注册时候输入的密码" 
						  value="<?php echo set_value('log_email')?>"></input></li>
				<li>密码：<input type="password" name="log_pwd" placeholder="请输入密码"
					      ></input></li>
				<li><input type="submit" name="log_submit" value="登录"/></li>
				<li>还没有账号吗？<a href="<?php echo site_url('register');?>">立即注册</a></li>
			</ul>
		</form>
	</body>
</html>