<?php /*%%SmartyHeaderCode:384559038989738546-33087391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1724432858c6be7b84b1346acba4be325bbb6461' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\themes\\default-bootstrap\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '384559038989738546-33087391',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038989834989_24459891',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038989834989_24459891')) {function content_59038989834989_24459891($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost/promaxilaser/index.php?controller=prices-drop" title="Promoções">
            Promoções
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost/promaxilaser/index.php?id_product=5&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost/promaxilaser/img/p/1/2/12-small_default.jpg" 
                    alt="" 
                    title="Vestido estampado de verão" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost/promaxilaser/index.php?id_product=5&amp;controller=product" title="Vestido estampado de verão">
                            Vestido estampado de verão
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Vestido longo estampado com alças...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    R$ 36,23                            </span>
                                                                                                                                 <span class="price-percent-reduction">-5%</span>
                                                                                         <span class="old-price">
                                                                    R$ 38,13                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost/promaxilaser/index.php?controller=prices-drop" 
            title="Todas as promoções">
                <span>Todas as promoções<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
