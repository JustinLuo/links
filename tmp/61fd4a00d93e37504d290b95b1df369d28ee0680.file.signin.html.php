<?php /* Smarty version Smarty-3.0.8, created on 2015-10-26 04:25:04
         compiled from "/srv/http/links/tpl/user/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:196271297562dab20acc818-11965293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fd4a00d93e37504d290b95b1df369d28ee0680' => 
    array (
      0 => '/srv/http/links/tpl/user/signin.html',
      1 => 1445833502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196271297562dab20acc818-11965293',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="container-fluid">

	<h1>SignIn</h1>
	<form action="<?php echo spUrl('user','signin_post');?>
" method="POST" class="form-group">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">@</span>
			<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="email" size=10 /></p>
		</div>
		<br />
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon2">#</span>
			<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password" size=10 /></p>
		</div>

		<div class="input-group">
			<input type="submit" class="btn btn-primary" value="SignIn" /></p>
		</div>
	</form>

</div>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
