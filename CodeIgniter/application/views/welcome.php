<!DOCTYPE html>
<html>
<head>
  <title>我的网站</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/templatemo-style.css">
  <style>
	.nav{
		border: 0px solid #FF0000;
		width: 230px;
		height: 60px;
		margin: auto;
	}
	.font{
		font-size: 25px;
	}
	#imglogo{
		width: 237px;
		height: 219px;
		margin: auto;
	}
  </style>
</head>
<body>
<div class="tm-bg-purple tm-section">
	<br><br>
	<div id="imglogo"><img src="img/logo.png" class="img-circle" alt="Oh sorry unvisible" width="237" height="219">
	</div>
	<br><br><br><br><br><br><br>
	<div class="nav">
    <button type="button" class="cd-btn fcd-hero-slider font"><strong>登录</strong></button>                              
	</div>
	<br>
	<div class="nav">
    <button type="button" class="cd-btn font"><strong>注册</strong></button>                              
	</div>
	<br><br>
  <div class="container tm-section-5-inner">
    <div class="row">
      <div class="col-xs-12 tm-text-white text-xs-center">
        <h2 class="tm-section-3-title">联系我们</h2>
          <p class="tm-section-3-description">欢迎您对我们的网站有提供建议,以帮助我们做的更好</p>
      </div>
      </div>
        <div class="row">
          <form action="index.html" method="p	ost" class="tm-contact-form">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="姓名" required="">
              </div>
            <div class="form-group">
            	<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="邮箱" required="">
            </div>
            <div class="form-group">
              <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="主题" required="">
            </div>    
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <div class="form-group">
            <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="请在此输入内容" required=""></textarea>
          </div>    
        </div>
        <div class="col-xs-12">
          <button type="submit" class="cd-btn pull-xs-right"><strong>发 送</strong></button>                              
        </div>
        </form>  
        </div>
        <div class="row">
        	<footer class="col-xs-12 text-xs-center">
            <p class="tm-text-white tm-copyright-text">Copyright © 2017 | Designed by ECNU</p>
          </footer>
        </div>
  </div>
</div>
</body>
</html>