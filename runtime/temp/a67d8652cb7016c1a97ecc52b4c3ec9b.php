<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:107:"D:\phpStudy\PHPTutorial\WWW\mall\public/../application/home\view\default\seller\sellergoodsclass\index.html";i:1545196758;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\base_seller.html";i:1545196757;s:83:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_top.html";i:1545811967;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_left.html";i:1545196757;s:85:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_items.html";i:1545196757;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\mall_footer.html";i:1545196757;}*/ ?>
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
        

<a href="javascript:void(0)" class="dssc-btn dssc-btn-green" ds_type="dialog" dialog_title="<?php echo \think\Lang::get('new_classification'); ?>" dialog_id="my_category_add"  uri="<?php echo url('Sellergoodsclass/goods_class_add'); ?>" dialog_width="550" title="<?php echo \think\Lang::get('new_classification'); ?>"><?php echo \think\Lang::get('new_classification'); ?></a>



        </div>
        
<table class="dssc-default-table" id="my_category" server="<?php echo url('Sellergoodsclass/goods_class_ajax'); ?>" >
    <thead>
        <tr ds_type="table_header">
            <th class="w30"></th>
            <th coltype="editable" column="storegc_name" checker="check_required" inputwidth="50%"><?php echo \think\Lang::get('store_goods_class_name'); ?></th>
            <th class="w60" coltype="editable" column="storegc_sort" checker="check_max" inputwidth="30px"><?php echo \think\Lang::get('store_goods_class_sort'); ?></th>
            <th class="w120" coltype="switchable" column="storegc_state" checker="" onclass="showclass-ico-btn" offclass="noshowclass-ico-btn"><?php echo \think\Lang::get('ds_display'); ?></th>
            <th class="w100"><?php echo \think\Lang::get('ds_handle'); ?></th>
        </tr>
        <?php if(!(empty($goods_class) || (($goods_class instanceof \think\Collection || $goods_class instanceof \think\Paginator ) && $goods_class->isEmpty()))): ?>
        <tr>
            <td class="tc"><input id="all" type="checkbox" class="checkall" /></td>
            <td colspan="20"><label for="all"><?php echo \think\Lang::get('ds_select_all'); ?></label>
                <a href="javascript:void(0)" class="dssc-btn-mini" ds_type="batchbutton" uri="<?php echo url('Sellergoodsclass/drop_goods_class'); ?>" name="class_id" confirm="<?php echo \think\Lang::get('store_goods_class_ensure_del'); ?>?"><i class="fa fa-trash-o"></i><?php echo \think\Lang::get('ds_del'); ?></a></td>
        </tr>
        <?php endif; ?>
    </thead>
    <tbody id="treet1">
        <?php if(!(empty($goods_class) || (($goods_class instanceof \think\Collection || $goods_class instanceof \think\Paginator ) && $goods_class->isEmpty()))): if(is_array($goods_class) || $goods_class instanceof \think\Collection || $goods_class instanceof \think\Paginator): if( count($goods_class)==0 ) : echo "" ;else: foreach($goods_class as $key=>$val): ?>
        <tr class="bd-line" ds_type="table_item" idvalue="<?php echo $val['storegc_id']; ?>" >
            <td class="tc"><input type="checkbox" class="checkitem" value="<?php echo $val['storegc_id']; ?>" /></td>
            <td class="tl"><span class="ml5" ds_type="editobj" ><?php echo $val['storegc_name']; ?></span>
                <?php if($val['storegc_parent_id'] == 0): ?>
                <span class="add_ico_a"> <a href="javascript:void(0)" class="dssc-btn" ds_type="dialog" dialog_width="480" dialog_title="<?php echo \think\Lang::get('store_goods_class_add_sub'); ?>" dialog_id="my_category_add" uri="<?php echo url('Sellergoodsclass/goods_class_add',['top_class_id'=>$val['storegc_id']]); ?>" ><?php echo \think\Lang::get('store_goods_class_add_sub'); ?></a></span>
                <?php endif; ?></td>
            <td><span ds_type="editobj"><?php echo $val['storegc_sort']; ?></span></td>
            <td>
                <?php if($val['storegc_state'] == 1): ?>
                <?php echo \think\Lang::get('store_create_yes'); else: ?>
                <?php echo \think\Lang::get('store_create_no'); endif; ?></td>
            <td class="dscs-table-handle"><span><a href="javascript:void(0)" ds_type="dialog" dialog_width="480" dialog_title="<?php echo \think\Lang::get('store_goods_class_edit_class'); ?>" dialog_id="my_category_edit" uri="<?php echo url('Sellergoodsclass/goods_class_edit',['top_class_id'=>$val['storegc_id']]); ?>" class="btn-blue"><i class="fa fa-pencil-square"></i>
                        <p><?php echo \think\Lang::get('ds_edit'); ?></p>
                    </a></span> <span><a href="javascript:void(0)" onclick="ds_ajaxget_confirm('<?php echo url('Sellergoodsclass/drop_goods_class',['class_id'=>$val['storegc_id']]); ?>','<?php echo \think\Lang::get('store_goods_class_ensure_del'); ?>?');" class="btn-red"><i class="fa fa-trash-o"></i>
                        <p><?php echo \think\Lang::get('ds_del'); ?></p>
                    </a></span></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; else: ?>
        <tr>
            <td colspan="20" class="norecord"><div class="warning-option"><i class="fa fa-warning"></i><span><?php echo \think\Lang::get('no_record'); ?></span> </div></td>
        </tr>
        <?php endif; ?>
    </tbody>
    <?php if(!(empty($goods_class) || (($goods_class instanceof \think\Collection || $goods_class instanceof \think\Paginator ) && $goods_class->isEmpty()))): ?>
    <tfoot>
        <tr>
            <th class="tc"><input id="all2" type="checkbox" class="checkall" /></th>
            <th colspan="15"><label for="all2"><?php echo \think\Lang::get('ds_select_all'); ?></label>
                <a href="javascript:void(0)" class="dssc-btn-mini" ds_type="batchbutton" uri="<?php echo url('Sellergoodsclass/drop_goods_class'); ?>" name="class_id" confirm="<?php echo \think\Lang::get('store_goods_class_ensure_del'); ?>?"><i class="fa fa-trash-o"></i><?php echo \think\Lang::get('ds_del'); ?></a></th>
        </tr>
    </tfoot>
    <?php endif; ?>
</table>
<script src="<?php echo PLUGINS_SITE_ROOT; ?>/jqtreetable.js"></script>
<script>
    $(function()
    {
        var map = [<?php echo $map; ?>];
        var path = "<?php echo HOME_SITE_ROOT; ?>/images/";
        if (map.length > 0)
        {
            var option = {
                openImg: path + "treetable/tv-collapsable.gif",
                shutImg: path + "treetable/tv-expandable.gif",
                leafImg: path + "treetable/tv-item.gif",
                lastOpenImg: path + "treetable/tv-collapsable-last.gif",
                lastShutImg: path + "treetable/tv-expandable-last.gif",
                lastLeafImg: path + "treetable/tv-item-last.gif",
                vertLineImg: path + "treetable/vertline.gif",
                blankImg: path + "treetable/blank.gif",
                collapse: false,
                column: 1,
                striped: false,
                highlight: false,
                state:false};
            $("#treet1").jqTreeTable(map, option);
        }
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

