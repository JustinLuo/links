<?php /* Smarty version Smarty-3.0.8, created on 2015-11-04 04:49:36
         compiled from "/srv/http/links/tpl/user/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:21196364156398e60ed8929-49908856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fd4a00d93e37504d290b95b1df369d28ee0680' => 
    array (
      0 => '/srv/http/links/tpl/user/signin.html',
      1 => 1446612449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21196364156398e60ed8929-49908856',
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
				$("#checkUsername").html(emailJSON.message);
			});
		});

		$("#submit").click(function(){
			if ($("#password").val() == ''){
				alert("NULL!");
			}else{
				alert("OK!");
			}
		});
	});


</script>
<p></p>

<div class="container">
	<div class="well">
		<h1>SignIn</h1>
		<!-- <form action="<?php echo spUrl('user','signin_post');?>
" method="POST" class="form-group"> -->
		<!-- <form role="form"> -->
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">@</span>
				<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" size=10 id="email"/></p>
			</div>
			<span id="checkUsername"></span>
			<br />
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon2">#</span>
				<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password" size=10 id="password" /></p>
			</div>

			<div class="input-group">
				<!-- <input type="submit" class="btn btn-primary" value="SignIn" /></p> -->
				<button id="submit" class="btn btn-default">SignIN</button>
			</div>
		<!-- </form> -->
	</div>

</div>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
