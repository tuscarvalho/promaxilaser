<?php /* Smarty version Smarty-3.1.19, created on 2017-04-27 19:52:33
         compiled from "C:\WebServer\Apache2.2\htdocs\promaxilaser\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916559024c0135bfb9-54526258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4863cae20e7a6b3ba18fa74b5a84a150566a9cb' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_item.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916559024c0135bfb9-54526258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop' => 0,
    'node' => 0,
    'url_shop_url' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59024c01384363_95629745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59024c01384363_95629745')) {function content_59024c01384363_95629745($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;shop_id=<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a>
	</label>
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['urls'])) {?>
		<ul class="tree">
			<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
			<li class="tree-item">
				<label class="tree-item-name">
					<i class="tree-dot"></i>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_url']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_url=<?php echo $_smarty_tpl->tpl_vars['url']->value['id_shop_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a>
				</label>
			</li>
			<?php } ?>
		</ul>
	<?php }?>
</li><?php }} ?>
