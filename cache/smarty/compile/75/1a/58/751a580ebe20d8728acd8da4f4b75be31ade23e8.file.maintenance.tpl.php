<?php /* Smarty version Smarty-3.1.19, created on 2017-04-27 19:52:27
         compiled from "C:\WebServer\Apache2.2\htdocs\promaxilaser\themes\default-bootstrap\maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2355259024bfbe96102-70076654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751a580ebe20d8728acd8da4f4b75be31ade23e8' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\themes\\default-bootstrap\\maintenance.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355259024bfbe96102-70076654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59024bfbed9bb6_55139203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59024bfbed9bb6_55139203')) {function content_59024bfbed9bb6_55139203($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<head>
	<meta charset="utf-8">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)) {?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
	<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,follow">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
">
       	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet">
       	<link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet'>
</head>
<body>
    	<div class="container">
			<div id="maintenance">
				<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" /></div>
	        		<?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

	        		<div id="message">
	             			<h1 class="maintenance-heading"><?php echo smartyTranslate(array('s'=>'We\'ll be back soon.'),$_smarty_tpl);?>
</h1>
							<?php echo smartyTranslate(array('s'=>'We are currently updating our shop and will be back really soon.'),$_smarty_tpl);?>

							<br />
							<?php echo smartyTranslate(array('s'=>'Thanks for your patience.'),$_smarty_tpl);?>

					</div>
				</div>
	        </div>
		</div>
</body>
</html>
<?php }} ?>
