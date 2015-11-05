<?php /* Smarty version Smarty-3.0.8, created on 2015-11-05 02:28:28
         compiled from "/srv/http/links/tpl/user/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:1294723090563abeccc23e57-70444647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fd4a00d93e37504d290b95b1df369d28ee0680' => 
    array (
      0 => '/srv/http/links/tpl/user/signin.html',
      1 => 1446688666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294723090563abeccc23e57-70444647',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
	$("document").ready(function(){
		$("#email").blur(function(){
			$.getJSON("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'emailGetNickname'),$_smarty_tpl);?>
", {'email': $("#email").val()}, function(emailJSON){
				$("#checkEmail").html(emailJSON.message);
			});
		});

		$("#password").focus(function(){
			$("#checkPwd").html('');
		});
		$("#email").focus(function(){
			$("#checkEmail").html('');
		});

		$("#submit").click(function(){
			var email = $("#email").val();
			var pwd = $("#password").val();

			if (email == ''){
				$("#checkEmail").html("<font color='red'>邮箱不能为空</font>");
				return false;
			} else if(pwd == ''){
				$("#checkPwd").html("<font color='red'>密码不能为空</font>");
				return false;
			} else {
				$('form').submit();
			}
			// 
			// var status = 0;
			// if(pwd == ''){
			// 	$("#checkPwd").html("<font color='red'>密码不能为空</font>");
			// 	status += 1;
			// 	// return false;
			// }
			// if (email == ''){
			// 	$("#checkEmail").html("<font color='red'>邮箱不能为空</font>");
			// 	status += 1;
			// 	// return false;
			// }


			// if (status == 0){
			// 	$('form').submit();
			// } else {
			// 	return false;
			// }
				

			// if ($("#password").val() == ''){
			// 	alert("NULL");
			// 	return false;
			// }else{
			// 	$('form').submit();
			// }
		});	
		
	});


</script>
<p></p>

<div class="container">
	<div class="well">
		<h1>SignIn</h1>
		<form action="<?php echo spUrl('user','signin_post');?>
" method="POST" class="form-group" >
		<!-- <form role="form"> -->
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">@</span>
				<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" size=10 id="email"/></p>
			</div>
			<span id="checkEmail"></span>
			<br />
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon2">#</span>
				<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password" size=10 id="password" /></p>
			</div>
			<span id="checkPwd"></span>

			<div class="input-group">
				<input type="submit" class="btn btn-default" value="SignIn" id="submit" /></p>
				<!-- <button id="submit" class="btn btn-default">SignIN</button> -->
			</div>
		</form>
	</div>

</div>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
