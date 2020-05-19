<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="utf-8">
<title>MR Rider- Forgot Paasword</title>
<meta name="description" content="Responsive Login Page / Signup Page Template Design In HTML5 And CSS3 With html css source code"/>
<link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{font-family: 'Ropa Sans', sans-serif; color:#666; font-size:14px; color:#ffffff}
li,ul,body,input{margin:0; padding:0; list-style:none}
#login-form{width:350px; background:#FFF; margin:60px auto; background:#e9e8fc; overflow:hidden; border-radius:20px}
.form-header{display:table; clear:both}
.form-header label{display:block; cursor:pointer; z-index:999}
.form-header li{margin:0; line-height:60px; width:350px; text-align:center; background:#25799b; font-size:18px; float:left; transition:all 600ms ease}

/*sectiop*/
.section-out{width:700px; float:left; margin-bottom:7px; transition:all 600ms ease}
.section-out:after{content:''; clear:both; display:table}
.section-out section{width:350px; float:left}

.forgot-password{padding:20px}
.ul-list{clear:both; display:table; width:100%}
.ul-list:after{content:''; clear:both; display:table}
.ul-list li{ margin:0 auto; margin-bottom:52px}
.input{background:#fff; transition:all 800ms; width:247px; border-radius:3px 0 0 3px; font-family: 'Ropa Sans', sans-serif; border:solid 1px #ccc; border-right:none; outline:none; color:#999; height:40px; line-height:40px; display:inline-block; padding-left:10px; font-size:16px}
.input,.login span.icon{vertical-align:top}
.forgot-password span.icon{width:50px; transition:all 800ms; text-align:center; color:#0509c4; height:40px; border-radius:0 3px 3px 0; background:#e8e8e8; height:40px; line-height:40px; display:inline-block; border:solid 1px #ccc; border-left:none; font-size:16px}
.input:focus:invalid{border-color:red}
.input:focus:invalid+.icon{border-color:red}
.input:focus:valid{border-color:green}
.input:focus:valid+.icon{border-color:green}
#check,#check1{top:1px; position:relative}
.btn{border:none; outline:none; background:#00cc03; border-bottom:solid 4px #027c04; font-family: 'Ropa Sans', sans-serif; margin:0 auto; display:block; height:40px; width:100%; padding:0 10px; border-radius:3px; font-size:16px; color:#FFF}

.social-login{padding:15px 20px; background:#f1f1f1; border-top:solid 2px #e8e8e8; text-align:right}
.social-login a{display:inline-block; height:35px; text-align:center; line-height:35px; width:35px; margin:0 3px; text-decoration:none; color:#FFFFFF}
.form a i.fa{line-height:35px}
.fb{background:#305891} .tw{background:#2ca8d2} .gp{background:#ce4d39} .in{background:#006699}
.remember{width:50%; display:inline-block; clear:both; font-size:14px}
.remember:nth-child(2){text-align:right}
.remember a{text-decoration:none; color:#666}

.hide{display:none}

/*swich form*/
#signup:checked~.section-out{margin-left:-350px}
#forgot-password:checked~.section-out{margin-left:0px}
#forgot-password:checked~div .form-header li:nth-child(1),#signup:checked~div .form-header li:nth-child(2){background:#d3d3d3}

.backto{background:#09C}
.backto>a{padding:16px; margin-bottom:10px; display:block; text-align:center; text-decoration:none; font-size:16px; color:#fff}



.btn-primary,.btn-primary-o,.btn-secondary,.btn-white,.btn-white-o{margin-top:15px;display:inline-block;padding:15px 25px;font-size:14px;font-family:GothamBold,sans-serif;border-radius:100px;border:none;cursor:pointer}.btn i,.btn-disable i,.btn-primary i,.btn-primary-o i,.btn-secondary i,.btn-white i,.btn-white-o i{padding-left:10px;transition:all .3s}.btn i.on-left,.btn-disable i.on-left,.btn-primary i.on-left,.btn-primary-o i.on-left,.btn-secondary i.on-left,.btn-white i.on-left,.btn-white-o i.on-left{padding-left:0;padding-right:10px}.btn.full,.full.btn-disable,.full.btn-primary,.full.btn-primary-o,.full.btn-secondary,.full.btn-white,.full.btn-white-o{width:100%;text-align:center}.btn-disable:hover i,.btn-primary-o:hover i,.btn-primary:hover i,.btn-secondary:hover i,.btn-white-o:hover i,.btn-white:hover i,.btn:hover i{padding-left:15px}.btn-disable:hover i.on-left,.btn-primary-o:hover i.on-left,.btn-primary:hover i.on-left,.btn-secondary:hover i.on-left,.btn-white-o:hover i.on-left,.btn-white:hover i.on-left,.btn:hover i.on-left{padding-left:0;padding-right:15px}.btn-large.btn-disable,.btn-large.btn-primary,.btn-large.btn-primary-o,.btn-large.btn-secondary,.btn-large.btn-white,.btn-large.btn-white-o,.btn.btn-large{font-size:16px;padding:20px 25px;font-weight:900}.btn-small.btn-disable,.btn-small.btn-primary,.btn-small.btn-primary-o,.btn-small.btn-secondary,.btn-small.btn-white,.btn-small.btn-white-o,.btn.btn-small{font-size:11px;padding:6px 20px;font-weight:900;margin-top:3px}.btn-primary{box-shadow:0 5px 14px -3px #17bad1;background:#17bad1;color:#fff}.btn-primary:hover{background:#15aec3}.btn-secondary{box-shadow:0 5px 14px -3px #00c222;background:#00c222;color:#fff}.btn-secondary:hover{background:#00b31f}.btn-white{background:#fff;color:#00d664}

</style>
</head>
<body>
<div id="login-form">



<div>
<ul class="form-header">
<li><i class="fa fa-lock"></i> FORGOT  PASSWORD  CUSTOMER</li>

</ul>
</div>

<div class="section-out">
<section class="forgot-password-section">

     
<div class="forgot-password">
<form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url();?>index.php/c_utama/ForgotPassword_Customer" onsubmit ='return validate()'>
 
<ul class="ul-list">
<li><input type="email" name="email" id="email" required class="input" placeholder="Enter Your Email"/><span class="icon"><i class="fa fa-user"></i></span></li>

<li><input type="submit" value="GET PASSWORD" class="btn-primary full register"></li>

</ul>
</form>
</div>

<!-- Alert -->
     <?php if ($this->session->flashdata('message')): ?>
     <div class="alert alert-<?php echo $this->session->flashdata('style'); ?> fade in">
       
       <strong><?php echo $this->session->flashdata('alert'); ?></strong>&nbsp; <?php echo $this->session->flashdata('message'); ?>
     </div>
     <?php endif; ?>
     <!-- End Alert -->

</section>


</div>
</div>

</body>
</html>