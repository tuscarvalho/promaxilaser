<?php /* Smarty version Smarty-3.1.19, created on 2017-04-27 19:52:33
         compiled from "C:\WebServer\Apache2.2\htdocs\promaxilaser\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:376459024c0130ca88-40419905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '175cfc8b65f904c6853b6f167e58b72296b6e3ee' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_folder.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376459024c0130ca88-40419905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59024c01322de5_07054930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59024c01322de5_07054930')) {function content_59024c01322de5_07054930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
