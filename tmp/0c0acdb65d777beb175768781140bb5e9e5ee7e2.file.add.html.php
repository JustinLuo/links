<?php /* Smarty version Smarty-3.0.8, created on 2015-10-26 03:59:43
         compiled from "/srv/http/links/tpl/admin/add.html" */ ?>
<?php /*%%SmartyHeaderCode:534218131562da52fdb3e59-10227856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0acdb65d777beb175768781140bb5e9e5ee7e2' => 
    array (
      0 => '/srv/http/links/tpl/admin/add.html',
      1 => 1445831982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '534218131562da52fdb3e59-10227856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="container-fluid">
	<form action="<?php echo spUrl('admin','add_post');?>
" method="POST">
		<p>Title:</p>
		<input type="text" name="title" size="25" /><br />
		<p>address</p>
		<input type="text" name="address" size="25" /><br />
		<input type="submit" value="Add" />
	</form>
</div>
<?php $_template = new Smarty_Internal_Template('footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>