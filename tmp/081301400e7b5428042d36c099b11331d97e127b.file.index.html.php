<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 06:48:19
         compiled from "/srv/http/links/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:94387252856121d33a56dc1-24069534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081301400e7b5428042d36c099b11331d97e127b' => 
    array (
      0 => '/srv/http/links/tpl/index.html',
      1 => 1444027698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94387252856121d33a56dc1-24069534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if (($_SESSION['user']!=null)){?>
	Welcome! <?php echo $_SESSION['user']['username'];?>
 | <a href="<?php echo spUrl('user','logout');?>
">Logout</a>
<?php }else{ ?>
	<a href="<?php echo spUrl('user','signin');?>
">SignIn</a>|<a href="<?php echo spUrl('user','signup');?>
">SignUp</a>
<?php }?>



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