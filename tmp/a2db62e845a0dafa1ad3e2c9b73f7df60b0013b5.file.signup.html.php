<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 05:48:45
         compiled from "/srv/http/links/tpl/user/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:90300250456120f3d0a7960-70975062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2db62e845a0dafa1ad3e2c9b73f7df60b0013b5' => 
    array (
      0 => '/srv/http/links/tpl/user/signup.html',
      1 => 1444024123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90300250456120f3d0a7960-70975062',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h1>SignUp</h1>

<form action="<?php echo spUrl('user','signup_post');?>
" method="POST">
	<p>UserName:<input type="text" name="username" size="25" /><br /></p>
	<p>Password:<input type="text" name="password" size="25" /><br /></p>
	<p>E-Mail:<input type="email" name="email" size="25" /></p>
	<input type="submit" value="SignUp" />
</form>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>