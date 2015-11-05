<?php /* Smarty version Smarty-3.0.8, created on 2015-11-05 02:17:41
         compiled from "/srv/http/links/tpl/admin/add.html" */ ?>
<?php /*%%SmartyHeaderCode:238399051563abc45928d54-70767068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0acdb65d777beb175768781140bb5e9e5ee7e2' => 
    array (
      0 => '/srv/http/links/tpl/admin/add.html',
      1 => 1446689860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238399051563abc45928d54-70767068',
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
		$("#address").blur(function(){
			$.getJSON("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'checkURL'),$_smarty_tpl);?>
", {'address': $("#address").val()}, function(urlJSON){
				$("#checkURL").html("");
				status = urlJSON.status;
				if (urlJSON.status != 0){
					// $("#checkURL").html(urlJSON.message);
					// $("#title").attr("value", "");	
				} else {
					$("#title").attr("value", urlJSON.message);
				}
			});
		});

		$("#submit").click(function(){
			var url = $("#address").val();
			var title = $("#title").val();

			if (url == ''){
				$("#checkURL").html("empty");
				return false;
			} else if (title == ''){
				$("#checkTitle").html("empty");
				return false;
			} else {
				// alert("OK");
				$('form').submit();
			}
		});
	});


</script>
<p></p>

<div class="clsShow"></div>

<div class="container">
	<div class="well">
		<h1 class="text-center">Add Links</h1>
		<form action="<?php echo spUrl('admin','add_post');?>
" method="POST" class="form-group">
		<!-- <form role="form"> -->
			<div class="input-group">
				<input type="text" class="form-control" placeholder="URL" aria-describedby="basic-addon1" name="address" size=100 id="address"/></p>
			</div>
			<p id="checkURL"></p>
			
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon2" name="title" size=100 id="title" /></p>
			</div>
			<p class="checkTitle"></p>

			<div class="input-group">
				<input type="submit" class="btn btn-primary" value="Add" id="submit"/></p>
				<!-- <button id="submit" class="btn btn-default">Add</button> -->
			</div>
		</form>
	</div>

</div>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
