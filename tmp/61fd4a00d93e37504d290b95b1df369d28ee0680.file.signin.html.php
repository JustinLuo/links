<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 06:32:54
         compiled from "/srv/http/links/tpl/user/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:20944496755612199665e288-64978968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fd4a00d93e37504d290b95b1df369d28ee0680' => 
    array (
      0 => '/srv/http/links/tpl/user/signin.html',
      1 => 1444026767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20944496755612199665e288-64978968',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h1>SignIn</h1>
<form action="<?php echo spUrl('user','signin_post');?>
" method="POST">
  <p>E-Mail:<input type="text" name="email" size=25 /></p>
  <p>Password:<input type="password" name="password" size=25 /></p>
  <p><input type="submit" value="SignIn" /></p>
</form>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
