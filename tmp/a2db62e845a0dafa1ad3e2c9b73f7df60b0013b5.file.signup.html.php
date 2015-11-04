<?php /* Smarty version Smarty-3.0.8, created on 2015-11-04 04:20:00
         compiled from "/srv/http/links/tpl/user/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:1125525840563987707350a9-21112434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2db62e845a0dafa1ad3e2c9b73f7df60b0013b5' => 
    array (
      0 => '/srv/http/links/tpl/user/signup.html',
      1 => 1446486236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125525840563987707350a9-21112434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
	$("document").ready(function(){
		var status = 0;
		$("#username").blur(function(){
			$.getJSON("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'checkUsername'),$_smarty_tpl);?>
", {'username': $("#username").val()}, function(json){
				status += json.status;
				$("#checkUsername").html(json.message);
			});
		});

		$("#apwd").blur(function(){

			if ($("#apwd").val() != ""){
				$.getJSON("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'checkPwd'),$_smarty_tpl);?>
", {'password': $("#password").val(), 
																'apwd':  $("#apwd").val()}, function(pwdJSON){
				status += pwdJSON.status;
				$("#checkPwd").html(pwdJSON.message);
				});	
			} 
		});

		$("#email").blur(function(){
			if ($("#email").val() == ""){
				$("#checkEmail").html("<font color='red'>email is empty</font>");
			}else{
				$.getJSON("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'checkEmail'),$_smarty_tpl);?>
", 
						{'email': $("#email").val()}, 
						function(emailJSON){
					status += emailJSON.status;
					$("#checkEmail").html(emailJSON.message);
				});
			}
		});
	});
</script>

<p></p>

<div class="container">
	<div class="well">
		<h1 class="text-center">SignUp</h1>
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'signup_post'),$_smarty_tpl);?>
" method="POST" class="form-group">

			<div class="input-group">
				<span class="input-group-addon">@</span>
				<input type="email" class="form-control" placeholder="input your email address" aria-describedby="basic-addon4" name="email" id="email"/>
			</div>
			<p id="checkEmail"></P>

			<div class="input-group">
				<span class="input-group-addon" id="base-addon2">#</span>
				<input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password" id="password" size=25/>
			</div>
			<p></p>

			<div class="input-group">
				<span class="input-group-addon">>_<</span>
				<input type="text" class="form-control" placeholder="Input password again" aria-describedby="basic-addon3" name="apwd" id="apwd" size=2500/>
			</div>
			<p id="checkPwd"></p>

			<div class="input-group">
				<span class="input-group-addon" id="base-addon1">^_^</span>
				<input type="text" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1" name="username" id="username"/>
			</div>
			<p id="checkUsername"></p>
			
			<div class="input-group">
				 <!-- <input  type="submit" class="btn btn-default" value="SignUP" id="submit"/> -->
				 <button id="submit" class="btn btn-default btn-lg disabled">SignUP</button>
			</div>
		</form>

	</div>
</div>


<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>