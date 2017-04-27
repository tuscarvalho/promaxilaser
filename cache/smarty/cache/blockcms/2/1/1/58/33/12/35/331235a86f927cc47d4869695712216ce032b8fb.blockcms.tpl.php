<?php /*%%SmartyHeaderCode:3159159025151332098-39246590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '331235a86f927cc47d4869695712216ce032b8fb' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3159159025151332098-39246590',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5902515145bf07_24315028',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902515145bf07_24315028')) {function content_5902515145bf07_24315028($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informação</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost/promaxilaser/index.php?controller=prices-drop" title="Promoções">
						Promoções
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/promaxilaser/index.php?controller=new-products" title="Novidades">
					Novidades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/promaxilaser/index.php?controller=best-sales" title="Mais vendidos">
						Mais vendidos
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/promaxilaser/index.php?controller=stores" title="Nossas lojas">
						Nossas lojas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/promaxilaser/index.php?controller=contact" title="Fale conosco">
					Fale conosco
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/promaxilaser/index.php?id_cms=3&amp;controller=cms" title="Termos e condições de utilização">
							Termos e condições de utilização
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/promaxilaser/index.php?id_cms=4&amp;controller=cms" title="Quem somos">
							Quem somos
						</a>
					</li>
													<li>
				<a href="http://localhost/promaxilaser/index.php?controller=sitemap" title="Mapa do site">
					Mapa do site
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
