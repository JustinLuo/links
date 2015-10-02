<?php /* Smarty version Smarty-3.0.8, created on 2015-10-02 15:55:16
         compiled from "/srv/http/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1055535068560ea8e47af340-04614925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dd3bdf1038a30fe1fcf98eb0e05987f8a269d08' => 
    array (
      0 => '/srv/http/tpl/index.html',
      1 => 1443799873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055535068560ea8e47af340-04614925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h1><a href="<?php echo spUrl('link','add');?>
">Add Links</a></h1>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('links')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['address'];?>
" target="_black"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a>	<small><i><?php echo $_smarty_tpl->tpl_vars['link']->value['address'];?>
</i></small></p>
<?php }} ?>

<?php $_template = new Smarty_Internal_Template('footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>