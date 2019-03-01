<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:101:"D:\phpStudy\PHPTutorial\WWW\mall\public/../application/home\view\default\seller\sellerinfo\index.html";i:1545196758;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\base_seller.html";i:1545196757;s:83:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_top.html";i:1545811967;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_left.html";i:1545196757;s:85:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_items.html";i:1545196757;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\mall_footer.html";i:1545196757;}*/ ?>
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
        
        </div>
        

<table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
    <thead>
        <tr>
            <th colspan="20"><?php echo \think\Lang::get('company_contact_information'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('company_name'); ?>：</th>
            <td colspan="20"><?php echo $joinin_detail['company_name']; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('company_location'); ?>：</th>
            <td><?php echo $joinin_detail['company_address']; ?></td>
            <th><?php echo \think\Lang::get('company_address'); ?>：</th>
            <td colspan="20"><?php echo $joinin_detail['company_address_detail']; ?></td>
        </tr>
        <tr>
       
            <th><?php echo \think\Lang::get('registered_capital'); ?>：</th>
            <td><?php echo $joinin_detail['company_registered_capital']; ?>&nbsp;<?php echo \think\Lang::get('ten_thousand_yuan'); ?> </td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('contact_name'); ?>：</th>
            <td><?php echo $joinin_detail['contacts_name']; ?></td>
            <th><?php echo \think\Lang::get('contact_number'); ?>：</th>
            <td><?php echo $joinin_detail['contacts_phone']; ?></td>
            <th><?php echo \think\Lang::get('e_mail'); ?>：</th>
            <td><?php echo $joinin_detail['contacts_email']; ?></td>
        </tr>
    </tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
    <thead>
        <tr>
            <th colspan="20"><?php echo \think\Lang::get('business_license_information'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('business_license_number'); ?>：</th>
            <td><?php echo $joinin_detail['business_licence_number']; ?></td></tr><tr>

            <th><?php echo \think\Lang::get('place_business_license'); ?>：</th>
            <td><?php echo $joinin_detail['business_licence_address']; ?></td></tr><tr>

            <th><?php echo \think\Lang::get('validity_business_license'); ?>：</th>
            <td><?php echo $joinin_detail['business_licence_start']; ?> - <?php echo $joinin_detail['business_licence_end']; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('legal_scope_business'); ?>：</th>
            <td colspan="20"><?php echo $joinin_detail['business_sphere']; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('business_license'); ?><br />
                <?php echo \think\Lang::get('electronic_version'); ?>：</th>
            <td colspan="20">
                <?php if(!(empty($joinin_detail['business_licence_number_electronic']) || (($joinin_detail['business_licence_number_electronic'] instanceof \think\Collection || $joinin_detail['business_licence_number_electronic'] instanceof \think\Paginator ) && $joinin_detail['business_licence_number_electronic']->isEmpty()))): ?>
                <a data-lightbox="lightbox-image"  href="<?php echo get_store_joinin_imageurl($joinin_detail['business_licence_number_electronic']); ?>"> <img src="<?php echo get_store_joinin_imageurl($joinin_detail['business_licence_number_electronic']); ?>" alt="" /> </a>
                <?php endif; ?>
            </td>
        </tr>
    </tbody>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
    <thead>
        <tr>
            <th colspan="20"><?php echo \think\Lang::get('bank_information'); ?>：</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('bank_name'); ?>：</th>
            <td><?php echo $joinin_detail['bank_account_name']; ?></td>
        </tr><tr>
            <th><?php echo \think\Lang::get('company_bank_account'); ?>：</th>
            <td><?php echo $joinin_detail['bank_account_number']; ?></td></tr>
        <tr>
            <th><?php echo \think\Lang::get('name_branch_bank'); ?>：</th>
            <td><?php echo $joinin_detail['bank_name']; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('location_bank_account'); ?>：</th>
            <td colspan="20"><?php echo $joinin_detail['bank_address']; ?></td>
        </tr>

    </tbody>

</table>
<table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
    <thead>
        <tr>
            <th colspan="20"><?php echo \think\Lang::get('settlement_account_information'); ?>：</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('settlement_account_information'); ?>：</th>
            <td><?php echo $joinin_detail['settlement_bank_account_name']; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('company_bank_account'); ?>：</th>
            <td><?php echo $joinin_detail['settlement_bank_account_number']; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('name_branch_bank'); ?>：</th>
            <td><?php echo $joinin_detail['settlement_bank_name']; ?></td>
        </tr>

        <tr>
            <th><?php echo \think\Lang::get('location_bank_account'); ?>：</th>
            <td><?php echo $joinin_detail['settlement_bank_address']; ?></td>
        </tr>
    </tbody>

</table>

<table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
    <thead>
        <tr>
            <th colspan="20"><?php echo \think\Lang::get('store_operation_information'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('seller_account'); ?>：</th>
            <td><?php echo $joinin_detail['seller_name']; ?></td>
        </tr>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('store_name'); ?>：</th>
            <td><?php echo $joinin_detail['store_name']; ?></td>
        </tr>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('shop_level'); ?>：</th>
            <td><?php echo $store_grade_name; ?></td>
        </tr>
        <tr>
            <th class="w150"><?php echo \think\Lang::get('shop_classification'); ?>：</th>
            <td><?php echo $store_class_name; ?></td>
        </tr>
        <tr>
            <th><?php echo \think\Lang::get('business_category'); ?>：</th>
            <td colspan="2"><table border="0" cellpadding="0" cellspacing="0" id="table_category" class="type">
                    <thead>
                        <tr>
                            <th><?php echo \think\Lang::get('classification_1'); ?></th>
                            <th><?php echo \think\Lang::get('classification_2'); ?></th>
                            <th><?php echo \think\Lang::get('classification_3'); ?></th>
                            <th><?php echo \think\Lang::get('ratio'); ?></th>
                        </tr>
                    </thead>
                    <?php if(!(empty($store_bind_class_list) || (($store_bind_class_list instanceof \think\Collection || $store_bind_class_list instanceof \think\Paginator ) && $store_bind_class_list->isEmpty()))): if(is_array($store_bind_class_list) || $store_bind_class_list instanceof \think\Collection || $store_bind_class_list instanceof \think\Paginator): if( count($store_bind_class_list)==0 ) : echo "" ;else: foreach($store_bind_class_list as $key=>$val): ?>
                    <tr>
                        <td><?php echo $val['class_1_name']; ?></td>
                        <td><?php echo $val['class_2_name']; ?></td>
                        <td><?php echo $val['class_3_name']; ?></td>
                        <td><?php echo $val['commis_rate']; ?>%</td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </tbody>
</table></td>
</tr>
<tr>
    <th><?php echo \think\Lang::get('audit_opinion'); ?>：</th>
    <td colspan="2"><?php echo $joinin_detail['joinin_message']; ?></td>
</tr>
</tbody>
</table>

<link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery.lightbox/css/lightbox.min.css">
<script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery.lightbox/js/lightbox.min.js"></script>


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

