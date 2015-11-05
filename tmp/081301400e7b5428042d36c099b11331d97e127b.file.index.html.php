<?php /* Smarty version Smarty-3.0.8, created on 2015-11-05 02:28:42
         compiled from "/srv/http/links/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:371934226563abeda660156-93163003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081301400e7b5428042d36c099b11331d97e127b' => 
    array (
      0 => '/srv/http/links/tpl/index.html',
      1 => 1446690521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '371934226563abeda660156-93163003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<p></p>
<div class="container">
	<?php if (($_SESSION['user']!=null)){?>
		Welcome! <?php echo $_SESSION['user']['username'];?>
 | <a href="<?php echo spUrl('user','logout');?>
">Logout</a>
	<?php }else{ ?>
		<a href="<?php echo spUrl('user','signin');?>
">SignIn</a>|<a href="<?php echo spUrl('user','signup');?>
">SignUp</a>
	<?php }?>



	<p><a href="<?php echo spUrl('admin','add');?>
" class="btn btn-primary">Add Links</a></p>
	<!-- <h1><a href="<?php echo spUrl('admin','add');?>
">Add Links</a></h1> -->
	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('links')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
?>
		<p class="lead"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['address'];?>
" target="_black"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a>
			<small><em><?php echo $_smarty_tpl->tpl_vars['link']->value['address'];?>
</em></small>
			<!-- <blockquote><em><?php echo $_smarty_tpl->tpl_vars['link']->value['address'];?>
</em></blockquote> -->
		</p>
		<hr />

		<!-- <small><em><?php echo $_smarty_tpl->tpl_vars['link']->value['address'];?>
</em></small></p> -->
	<?php }} ?>
	
	<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']==$_smarty_tpl->getVariable('pager')->value['first_page']){?>
		Index
	<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">Index</a>
	<?php }?>
	|
	<?php  $_smarty_tpl->tpl_vars['allPages'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['allPages']->key => $_smarty_tpl->tpl_vars['allPages']->value){
?>
		<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']==$_smarty_tpl->tpl_vars['allPages']->value){?>
			<?php echo $_smarty_tpl->tpl_vars['allPages']->value;?>

		<?php }else{ ?>
			|<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->tpl_vars['allPages']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['allPages']->value;?>
</a>
		<?php }?>
	<?php }} ?>

	<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']==$_smarty_tpl->getVariable('pager')->value['last_page']){?>
		Last
	<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">Last</a>
	<?php }?>

</div>



	

	

<?php $_template = new Smarty_Internal_Template('footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>