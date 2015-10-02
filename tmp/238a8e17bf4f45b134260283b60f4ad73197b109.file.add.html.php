<?php /* Smarty version Smarty-3.0.8, created on 2015-10-02 15:50:17
         compiled from "/srv/http/tpl/admin/add.html" */ ?>
<?php /*%%SmartyHeaderCode:677571468560ea7b9a374c9-09209431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238a8e17bf4f45b134260283b60f4ad73197b109' => 
    array (
      0 => '/srv/http/tpl/admin/add.html',
      1 => 1443798886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677571468560ea7b9a374c9-09209431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<form action="<?php echo spUrl('admin','add_post');?>
" method="POST">
	<p>Title:</p>
	<input type="text" name="title" size="25" /><br />
	<p>address</p>
	<input type="text" name="address" size="25" /><br />
	<input type="submit" value="Add" />
</form>

<?php $_template = new Smarty_Internal_Template('footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>