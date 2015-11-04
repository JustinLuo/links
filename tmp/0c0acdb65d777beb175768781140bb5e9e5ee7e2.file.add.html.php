<?php /* Smarty version Smarty-3.0.8, created on 2015-11-04 06:32:58
         compiled from "/srv/http/links/tpl/admin/add.html" */ ?>
<?php /*%%SmartyHeaderCode:12125792635639a69ade5428-54465071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0acdb65d777beb175768781140bb5e9e5ee7e2' => 
    array (
      0 => '/srv/http/links/tpl/admin/add.html',
      1 => 1446618774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12125792635639a69ade5428-54465071',
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
					$("#checkURL").html(urlJSON.message);
					$("#title").attr("value", "");	
				} else {
					$("#title").attr("value", urlJSON.message);
				}
			});
		});

		$("#submit").click(function(){
			if (status == 0){
				var strUrl = $("#address").val();
				var strTitle = $("#title").val();

				$.ajax({
					type: "POST",
					url:  "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'add_ajax'),$_smarty_tpl);?>
",
					cache: false,
					dataType: "json",
					
						data: {url: strUrl, title: strTitle},
					
					success: function(data){
						if (data.msg == "true"){
							alert("OK!");
							// window.location.reload();
						} else {
							// alert("ERROR!");
							alert(data.msg);
						}
					},
					error: function(){
						alert("EZRROR");
					}
				});

				// $.getJSON("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'add'),$_smarty_tpl);?>
", {'url': strUrl, 'title': strTitle},
				// 	function(addJson){
				// 		if (addJson.status == 0){
				// 			$("#clsShow").html("OK!");
				// 		} else {
				// 			$("#clsShow").html("NO");
				// 		}
				// 	});
			}else{
				alert("have error!");
			}
		});
	});


</script>
<p></p>

<div class="clsShow"></div>

<div class="container">
	<div class="well">
		<h1 class="text-center">Add Links</h1>
		<!-- <form action="<?php echo spUrl('user','signin_post');?>
" method="POST" class="form-group"> -->
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
				<!-- <input type="submit" class="btn btn-primary" value="SignIn" /></p> -->
				<button id="submit" class="btn btn-default">Add</button>
			</div>
		<!-- </form> -->
	</div>

</div>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
