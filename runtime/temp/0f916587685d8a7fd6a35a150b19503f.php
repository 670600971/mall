<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:123:"D:\phpStudy\PHPTutorial\WWW\mall\public/../application/home\view\default\seller\sellergoodsadd\store_goods_list_online.html";i:1545196758;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\base_seller.html";i:1545196757;s:83:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_top.html";i:1545811967;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_left.html";i:1545196757;s:85:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_items.html";i:1545196757;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\mall_footer.html";i:1545196757;}*/ ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo (isset($html_title) && ($html_title !== '')?$html_title:''); ?></title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta name="keywords" content="<?php echo (isset($seo_keywords) && ($seo_keywords !== '')?$seo_keywords:''); ?>" />
        <meta name="description" content="<?php echo (isset($seo_description) && ($seo_description !== '')?$seo_description:''); ?>" />
        <link rel="stylesheet" href="<?php echo HOME_SITE_ROOT; ?>/css/common.css">
        <link rel="stylesheet" href="<?php echo HOME_SITE_ROOT; ?>/css/seller.css">
        <link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/font-awesome/css/font-awesome.min.css">
        <script>
            var BASESITEROOT = "<?php echo BASE_SITE_ROOT; ?>";
            var HOMESITEROOT = "<?php echo HOME_SITE_ROOT; ?>";
            var BASESITEURL = "<?php echo BASE_SITE_URL; ?>";
            var HOMESITEURL = "<?php echo HOME_SITE_URL; ?>";
        </script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery-2.1.4.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/common.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.validate.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/additional-methods.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/layer/layer.js"></script>
        <script src="<?php echo HOME_SITE_ROOT; ?>/js/member.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
        <script>
            jQuery.browser={};(function(){jQuery.browser.msie=false; jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)./)){ jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
        </script>
    </head>
    <body>
        <div id="append_parent"></div>
        <div id="ajaxwaitid"></div>
        <div class="seller_top">
            <div class="w1200">
                <div class="logo">
                    <a href="<?php echo url('Seller/index'); ?>"><img src="<?php if(\think\Config::get('seller_center_logo') == ''): ?><?php echo BASE_SITE_ROOT; ?>/uploads/home/common/seller_center_logo.png<?php else: ?><?php echo BASE_SITE_ROOT; ?>/uploads/home/common/<?php echo \think\Config::get('seller_center_logo'); endif; ?>"/></a>
                </div>
                <div class="navbar">
                    <ul class="fl">
                        <?php if(is_array($seller_menu) || $seller_menu instanceof \think\Collection || $seller_menu instanceof \think\Paginator): if( count($seller_menu)==0 ) : echo "" ;else: foreach($seller_menu as $menu_key=>$menu): ?>
                        <li <?php if($menu_key == $curmenu): ?>class="actived"<?php endif; ?>>
                            <a href="<?php echo $menu['url']; ?>"><?php echo $menu['text']; ?></a>
                            <dl>
                                <?php if(is_array($menu['submenu']) || $menu['submenu'] instanceof \think\Collection || $menu['submenu'] instanceof \think\Paginator): if( count($menu['submenu'])==0 ) : echo "" ;else: foreach($menu['submenu'] as $key=>$submenu): ?>
                                <dd><a href="<?php echo $submenu['url']; ?>"><?php echo $submenu['text']; ?></a></dd>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </dl>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="fr">
                        <li><a href="javascript:void(0)"><?php echo \think\Session::get('seller_name'); ?></a></li>
                        <li><a href="<?php echo url('Sellerlogin/logout'); ?>"><?php echo \think\Lang::get('exit'); ?></a></li>
                        <li><a href="<?php echo url('Store/index',['store_id'=>\think\Session::get('store_id')]); ?>" target="_blank"><?php echo \think\Lang::get('ds_mystroe'); ?></a></li>
                        <li><a href="<?php echo url('Index/index'); ?>" target="_blank"><?php echo \think\Lang::get('visit_home_page'); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        

<div class="seller_main w1200">
    <div class="seller_left">
    <?php if(is_array($seller_menu) || $seller_menu instanceof \think\Collection || $seller_menu instanceof \think\Paginator): if( count($seller_menu)==0 ) : echo "" ;else: foreach($seller_menu as $key=>$menu): if($menu['name'] == $curmenu): ?>
    <ul>
        <?php if(is_array($menu['submenu']) || $menu['submenu'] instanceof \think\Collection || $menu['submenu'] instanceof \think\Paginator): if( count($menu['submenu'])==0 ) : echo "" ;else: foreach($menu['submenu'] as $key=>$submenu): ?>
        <li <?php if($submenu['name'] == $cursubmenu): ?>class="current"<?php endif; ?>><a href="<?php echo $submenu['url']; ?>"><?php echo $submenu['text']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>
    <div class="seller_right">
        <div class="seller_items">
        <?php if(!(empty($seller_item) || (($seller_item instanceof \think\Collection || $seller_item instanceof \think\Paginator ) && $seller_item->isEmpty()))): ?>
<ul>
    <?php if(is_array($seller_item) || $seller_item instanceof \think\Collection || $seller_item instanceof \think\Paginator): if( count($seller_item)==0 ) : echo "" ;else: foreach($seller_item as $key=>$item): ?>
    <li <?php if($item['name'] == $curitem): ?>class="current"<?php endif; ?>><a href="<?php echo $item['url']; ?>"><?php echo $item['text']; ?></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<?php endif; ?>
        
<a href="<?php echo url('Sellergoodsadd/index'); ?>" class="dssc-btn dssc-btn-green" title="<?php echo \think\Lang::get('store_goods_index_add_goods'); ?>"> <?php echo \think\Lang::get('store_goods_index_add_goods'); ?></a>

        </div>
        
<form method="get" action="">
    <table class="search-form">
        <tr>
            <td>&nbsp;</td>
            <th><?php echo \think\Lang::get('store_goods_index_store_goods_class'); ?></th>
            <td class="w160"><select name="storegc_id" class="w150">
                    <option value="0"><?php echo \think\Lang::get('ds_please_choose'); ?></option>
                    <?php if(!(empty($store_goods_class) || (($store_goods_class instanceof \think\Collection || $store_goods_class instanceof \think\Paginator ) && $store_goods_class->isEmpty()))): if(is_array($store_goods_class) || $store_goods_class instanceof \think\Collection || $store_goods_class instanceof \think\Paginator): if( count($store_goods_class)==0 ) : echo "" ;else: foreach($store_goods_class as $key=>$val): ?>
                    <option value="<?php echo $val['storegc_id']; ?>" <?php if(\think\Request::instance()->get('storegc_id') == $val['storegc_id']): ?>selected=selected<?php endif; ?>><?php echo $val['storegc_name']; ?></option>
                    <?php if(isset($val['child']) && count($val['child'])>0): if(is_array($val['child']) || $val['child'] instanceof \think\Collection || $val['child'] instanceof \think\Paginator): if( count($val['child'])==0 ) : echo "" ;else: foreach($val['child'] as $key=>$child_val): ?>
                    <option value="<?php echo $child_val['storegc_id']; ?>" <?php if(\think\Request::instance()->get('storegc_id') == $child_val['storegc_id']): ?>selected=selected<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $child_val['storegc_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                </select></td>
            <th> <select name="search_type">
                    <option value="0" <?php if(\think\Request::instance()->param('type') == '0'): ?>selected="selected"<?php endif; ?>><?php echo \think\Lang::get('store_goods_index_goods_name'); ?></option>
                    <option value="1" <?php if(\think\Request::instance()->param('type') == '1'): ?>selected="selected"<?php endif; ?>><?php echo \think\Lang::get('store_goods_index_goods_no'); ?></option>
                    <option value="2" <?php if(\think\Request::instance()->param('type') == '2'): ?>selected="selected"<?php endif; ?>><?php echo \think\Lang::get('platform_article_number'); ?></option>
                </select>
            </th>
            <td class="w160"><input type="text" class="text w150" name="keyword" value="<?php echo \think\Request::instance()->param('keyword'); ?>"/></td>
            <td class="tc w70"><label class="submit-border">
                    <input type="submit" class="submit" value="<?php echo \think\Lang::get('ds_search'); ?>" />
                </label></td>
        </tr>
    </table>
</form>


<table class="dssc-default-table">
    <thead>
        <tr ds_type="table_header">
            <th class="w30">&nbsp;</th>
            <th class="w50">&nbsp;</th>
            <th coltype="editable" column="goods_name" checker="check_required" inputwidth="230px"><?php echo \think\Lang::get('store_goods_index_goods_name'); ?></th>
            <th class="w100"><?php echo \think\Lang::get('store_goods_index_price'); ?></th>
            <th class="w100"><?php echo \think\Lang::get('store_goods_index_stock'); ?></th>
            <th class="w100"><?php echo \think\Lang::get('store_goods_index_add_time'); ?></th>
            <th class="w120"><?php echo \think\Lang::get('ds_handle'); ?></th>
        </tr>
        <?php if(!(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty()))): ?>
        <tr>
            <td class="tc"><input type="checkbox" id="all" class="checkall"/></td>
            <td colspan="6"><label for="all" ><?php echo \think\Lang::get('ds_select_all'); ?></label>
                <a href="javascript:void(0);" class="dssc-btn-mini" ds_type="batchbutton" uri="<?php echo url('Sellergoodsonline/drop_goods'); ?>" name="commonid" confirm="<?php echo \think\Lang::get('ds_ensure_del'); ?>"><i class="fa fa-trash-o"></i><?php echo \think\Lang::get('ds_del'); ?></a>
                <a href="javascript:void(0);" class="dssc-btn-mini" ds_type="batchbutton" uri="<?php echo url('Sellergoodsonline/goods_unshow'); ?>" name="commonid"><i class="fa fa-level-down"></i><?php echo \think\Lang::get('store_goods_index_unshow'); ?></a>
                <a href="javascript:void(0);" class="dssc-btn-mini" dstype="batch" data-param="{urls:'<?php echo url('Sellergoodsonline/edit_jingle'); ?>', sign:'jingle'}"><i></i><?php echo \think\Lang::get('advertising'); ?></a>
                <a href="javascript:void(0);" class="dssc-btn-mini" dstype="batch" data-param="{urls:'<?php echo url('Sellergoodsonline/edit_plate'); ?>', sign:'plate'}"><i></i><?php echo \think\Lang::get('set_associated_layout'); ?></a>
            </td>
        </tr>
        <?php endif; ?>
    </thead>
    <tbody>
        <?php if(!(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty()))): if(is_array($goods_list) || $goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$val): ?>
        <tr>
            <th class="tc"><input type="checkbox" class="checkitem tc" value="<?php echo $val['goods_commonid']; ?>"/></th>
            <th colspan="20"><?php echo \think\Lang::get('platform_article_number'); ?>：<?php echo $val['goods_commonid']; ?></th>
        </tr>
        <tr>
            <td class="trigger"><i class="tip fa fa-plus-square" dstype="ajaxGoodsList" data-comminid="<?php echo $val['goods_commonid']; ?>" title="<?php echo \think\Lang::get('click_check_goods'); ?>"></i></td>
            <td><div class="pic-thumb"><a href="<?php echo url('Goods/index',['goods_id'=>$storage_array[$val['goods_commonid']]['goods_id']]); ?>" target="_blank"><img src="<?php echo goods_thumb($val, 240); ?>"/></a></div></td>
            <td class="tl"><dl class="goods-name">
                    <dt style="max-width: 450px !important;">
                        <?php if($val['is_virtual'] ==1): ?>
                        <span class="type-virtual" title="<?php echo \think\Lang::get('virtual_exchange'); ?>"><?php echo \think\Lang::get('virtual'); ?></span>
                        <?php endif; if($val['is_goodsfcode'] ==1): ?>
                        <span class="type-fcode" title="<?php echo \think\Lang::get('f_code_priority_goods'); ?>"><?php echo \think\Lang::get('sellergoodsadd_f_code'); ?></span>
                        <?php endif; if($val['is_presell'] ==1): ?>
                        <span class="type-presell" title="<?php echo \think\Lang::get('advance_sale'); ?>"><?php echo \think\Lang::get('sellergoodsadd_presell'); ?></span>
                        <?php endif; if($val['is_appoint'] ==1): ?>
                        <span class="type-appoint" title="<?php echo \think\Lang::get('book_sales_tips'); ?>"><?php echo \think\Lang::get('sellergoodsadd_make'); ?></span>
                        <?php endif; ?>
                        <a href="<?php echo url('Goods/index',['goods_id'=>$storage_array[$val['goods_commonid']]['goods_id']]); ?>" target="_blank"><?php echo $val['goods_name']; ?></a></dt>
                    <dd><?php echo \think\Lang::get('store_goods_index_goods_no'); ?><?php echo \think\Lang::get('ds_colon'); ?><?php echo $val['goods_serial']; ?></dd>
                    <dd class="serve"> <span class="<?php if($val['goods_commend'] == 1): ?>open<?php endif; ?>" title="<?php echo \think\Lang::get('shop_recommendation'); ?>"><i class="commend"><?php echo \think\Lang::get('commend'); ?></i></span> <span class="<?php if($val['mobile_body'] != ''): ?>open<?php endif; ?>" title="<?php echo \think\Lang::get('details_products_mobile_phones'); ?>"><i class="fa fa-tablet"></i></span> <span class="" title="<?php echo \think\Lang::get('product_page_qr_code'); ?>"><i class="fa fa-qrcode"></i>
                            <div class="QRcode"><a target="_blank" href="<?php echo goods_qrcode(array('goods_id' => $storage_array[$val['goods_commonid']]['goods_id'])); ?>"><?php echo \think\Lang::get('download_label'); ?></a>
                                <p><img src="<?php echo goods_qrcode(array('goods_id' => $storage_array[$val['goods_commonid']]['goods_id'])); ?>"/></p>
                            </div>
                        </span>
                        <?php if($val['is_goodsfcode'] ==1): ?>
                        <span><a class="dssc-btn-mini dssc-btn-red" href="<?php echo url('Sellergoodsonline/download_f_code_excel',['commonid'=>$val['goods_commonid']]); ?>"><?php echo \think\Lang::get('download_code_f'); ?></a></span>
                        <?php endif; ?>
                    </dd>
                </dl></td>
            <td><span><?php echo \think\Lang::get('currency'); ?><?php echo $val['goods_price']; ?></span></td>
            <td><span <?php if(isset($storage_array[$val['goods_commonid']]['alarm'])): ?>style="color:red;"<?php endif; ?>><?php echo $storage_array[$val['goods_commonid']]['sum']; ?><?php echo \think\Lang::get('piece'); ?></span></td>
            <td class="goods-time"><?php echo date("Y-m-d",$val['goods_addtime']); ?></td>
            <td class="dscs-table-handle">
                <?php if($val['goods_lock'] == 0): ?>
                <span><a href="<?php echo url('Sellergoodsonline/edit_goods',['commonid'=>$val['goods_commonid']]); ?>" class="btn-blue"><i class="fa fa-pencil-square"></i>
                        <p><?php echo \think\Lang::get('ds_edit'); ?></p>
                    </a></span> <span><a href="javascript:void(0);" onclick="ds_ajaxget_confirm('<?php echo url('Sellergoodsonline/drop_goods',['commonid'=>$val['goods_commonid']]); ?>','<?php echo \think\Lang::get('ds_ensure_del'); ?>');" class="btn-red"><i class="fa fa-trash-o"></i>
                        <p><?php echo \think\Lang::get('ds_del'); ?></p>
                    </a></span>
                <?php else: ?>
                <span class="tip" title="<?php echo \think\Lang::get('participate_activity_operation'); ?>"><a href="<?php if($val['is_virtual'] ==1): ?>javascript:void(0);<?php else: ?><?php echo url('Sellergoodsonline/add_gift',['commonid'=>$val['goods_commonid']]); endif; ?>" class="btn-orange-current"><i class="fa fa-lock"></i>
                        <p><?php echo \think\Lang::get('lock'); ?></p>
                    </a></span>
                <?php endif; ?>
            </td>
        </tr>
        <tr style="display:none;">
            <td colspan="7"><div class="dssc-goods-sku ps-container"></div></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; else: ?>
        <tr>
            <td colspan="7" class="norecord"><div class="warning-option"><i class="fa fa-warning"></i><span><?php echo \think\Lang::get('no_record'); ?></span></div></td>
        </tr>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <?php if(!(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty()))): ?>
        <tr>
            <th class="tc"><input type="checkbox" id="all2" class="checkall"/></th>
            <th colspan="6"><label for="all2"><?php echo \think\Lang::get('ds_select_all'); ?></label>
                <a href="javascript:void(0);" ds_type="batchbutton" uri="<?php echo url('Sellergoodsonline/drop_goods'); ?>" name="commonid" confirm="<?php echo \think\Lang::get('ds_ensure_del'); ?>" class="dssc-btn-mini"><i class="fa fa-trash-o"></i><?php echo \think\Lang::get('ds_del'); ?></a>
                <a href="javascript:void(0);" ds_type="batchbutton" uri="<?php echo url('Sellergoodsonline/goods_unshow'); ?>" name="commonid" class="dssc-btn-mini"><i class="fa fa-level-down"></i><?php echo \think\Lang::get('store_goods_index_unshow'); ?></a>
                <a href="javascript:void(0);" class="dssc-btn-mini" dstype="batch" data-param="{urls:'<?php echo url('Sellergoodsonline/edit_jingle'); ?>', sign:'jingle'}"><i></i><?php echo \think\Lang::get('advertising'); ?></a>
                <a href="javascript:void(0);" class="dssc-btn-mini" dstype="batch" data-param="{urls:'<?php echo url('Sellergoodsonline/edit_plate'); ?>', sign:'plate'}"><i></i><?php echo \think\Lang::get('set_associated_layout'); ?></a>
            </th>
        </tr>
        <tr>
            <td colspan="7"><div class="pagination"> <?php echo $show_page; ?></div></td>
        </tr>
        <?php endif; ?>
    </tfoot>
</table>
<script src="<?php echo HOME_SITE_ROOT; ?>/js/store_goods_list.js"></script> 

<script>
            $(function () {
                $('a[dstype="batch"]').click(function () {
                    if ($('.checkitem:checked').length == 0) {    //没有选择
                        layer.alert('<?php echo \think\Lang::get('select_record_want_operate'); ?>');
                        return false;
                    }
                    var _items = '';
                    $('.checkitem:checked').each(function () {
                        _items += $(this).val() + ',';
                    });
                    _items = _items.substr(0, (_items.length - 1));

                    var data_str = '';
                    eval('data_str = ' + $(this).attr('data-param'));

                    if (data_str.sign == 'jingle') {
                        ajax_form('ajax_jingle', '<?php echo \think\Lang::get('advertising'); ?>', data_str.urls + '?commonid=' + _items + '&inajax=1', '480');
                    } else if (data_str.sign == 'plate') {
                        ajax_form('ajax_plate', '<?php echo \think\Lang::get('set_associated_layout'); ?>', data_str.urls + '?commonid=' + _items + '&inajax=1', '480');
                    }
                });
            });
</script>



    </div>
</div>
<?php if(\think\Config::get('node_site_use') == '1' && !isset($wait)): ?>
<?php echo get_chat(); endif; ?>
<script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.cookie.js"></script>
<script src="<?php echo HOME_SITE_ROOT; ?>/js/compare.js"></script>
<link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/perfect-scrollbar.min.css">
<script src="<?php echo PLUGINS_SITE_ROOT; ?>/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/js/qtip/jquery.qtip.min.js"></script>
<link href="<?php echo PLUGINS_SITE_ROOT; ?>/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.lazyload.min.js"></script>
<script>
    //懒加载
    $("img.lazyload").lazyload({
//        placeholder : "<?php echo HOME_SITE_ROOT; ?>/images/loading.gif",
        effect: "fadeIn",
        skip_invisible : false,
        threshold : 200,
    });
</script>
<div class="footer-info">
    <div class="links w1200">
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('about_us'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('contact_us'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('merchant_presence'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('marketing_center'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('mobile_mall'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('link'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('sales_alliance'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('mall_community'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank"><?php echo \think\Lang::get('mall_public_benefit'); ?></a>|
        <a href="http://www.csdeshang.com/" target="_blank">English Site</a>
    </div>
    <p class="copyright"><?php echo \think\Config::get('flow_static_code'); ?></p>
</div>

