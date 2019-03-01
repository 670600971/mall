<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:108:"D:\phpStudy\PHPTutorial\WWW\mall\public/../application/home\view\default\seller\sellersns\store_sns_add.html";i:1545196758;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\base_seller.html";i:1545196757;s:83:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_top.html";i:1545811967;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_left.html";i:1545196757;s:85:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\seller_items.html";i:1545196757;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\mall_footer.html";i:1545196757;}*/ ?>
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
        
<div class="alert alert-block alert-info mt10"> <strong><?php echo \think\Lang::get('store_sns_type'); ?><?php echo \think\Lang::get('ds_colon'); ?></strong>
    <label class="mr20">
        <input type="radio" name="sns_type" value="normal" id="sns_normal" checked="checked" class="vm mr5" />
        <?php echo \think\Lang::get('store_sns_normal'); ?></label>
    <label class="mr20">
        <input type="radio" name="sns_type" value="recommend" id="sns_recommend" class="vm mr5" />
        <?php echo \think\Lang::get('store_sns_recommend'); ?></label>
    <label class="mr20">
        <input type="radio" name="sns_type" value="hotsell" id="sns_hotsell" class="vm mr5" />
        <?php echo \think\Lang::get('store_sns_hotsell'); ?></label>
    <label class="mr20">
        <input type="radio" name="sns_type" value="new" id="sns_new" class="vm mr5" />
        <?php echo \think\Lang::get('store_sns_new'); ?></label>
</div>


        <div class="dssc-form-default" dstype="normal" style=" display: none;">
            <form method="post" action="<?php echo url('Sellersns/store_sns_save'); ?>" id="normal_form">
                <input type="hidden" name="type" value="2" />
                <dl>
                    <dt><?php echo \think\Lang::get('store_sns_image'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <div class="dssc-upload-thumb store-sns-pic">
                            <p>
                                <img dstype="normal_img" src="<?php echo BASE_SITE_ROOT; ?>/uploads/home/common/default_image.png"/></p>
                            <input type="hidden" name="sns_image" id="sns_image" value="" />
                        </div>
                        <div class="handle">
                            <div class="dssc-upload-btn"> <a href="javascript:void(0);"><span>
                                        <input type="file" hidefocus="true" size="1" class="input-file" name="normal_file" id="normal_file">
                                    </span>
                                    <p><i class="fa fa-upload"></i><?php echo \think\Lang::get('image_upload'); ?></p>
                                </a> </div>
                            <a class="dssc-btn mt5" dstype="get_img" href="<?php echo url('Selleralbum/pic_list','item=store_sns_normal'); ?>">
                                <i class="fa fa-picture-o"></i><?php echo \think\Lang::get('select_from_image_space'); ?></a>
                            <a href="javascript:void(0);" dstype="del_img" class="dssc-btn ml5 mt5" style="display: none;">
                                <i class="fa fa-arrow-circle-up"></i><?php echo \think\Lang::get('close_album'); ?></a>
                        </div>
                        <div id="get_img_ajaxContent" class="ajax-albume"></div>
                        <p class="hint"><?php printf(lang('store_sns_normal_tips'),intval(config('image_max_filesize'))/1024) ?></p>
                    </dd>
                </dl>
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_cotent'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <textarea name="content" class="textarea w450 h100" id="content_normal" dstype="normal"></textarea>
                        <p class="w450">
                           <!-- <a href="javascript:void(0)" ds_type="smiliesbtn" data-param='{"txtid":"normal"}' class="dssc-btn-mini dssc-btn-orange">
                            <i class="fa fa-smile-o"></i><?php echo \think\Lang::get('store_sns_face'); ?></a>-->
                            <span id="weibocharcount_normal" class="weibocharcount"></span>
                        </p>
                    </dd>
                </dl>
                <div class="bottom">
                    <label class="submit-border">
                        <input type="submit" class="submit" value="<?php echo \think\Lang::get('store_sns_release'); ?>" />
                    </label>
                </div>
            </form>
        </div>

        <div class="dssc-form-default" dstype="recommend" style="display: none;">
            <div class="alert">
                <h4><?php echo \think\Lang::get('store_sns_explain'); ?><?php echo \think\Lang::get('ds_colon'); ?></h4>
                <ul>
                    <li><?php echo \think\Lang::get('store_sns_explain_notes1'); ?></li>
                </ul>
            </div>
            <form method="post" action="<?php echo url('Sellersns/store_sns_save'); ?>" id="recommend_form">
                <input type="hidden" name="type" value="9" />
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_goods'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <p>
                            <input type="text" class="text w400" name="goods_url" value="" placeholder="<?php echo \think\Lang::get('store_sns_input_goods_url'); ?>" />
                        </p>
                    </dd>
                </dl>
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_cotent'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <textarea name="content" class="textarea w400 h100" dstype="recommend" id="content_recommend"></textarea>
                        <p class="w450">
                           <!-- <span class="smile">
                                <a href="javascript:void(0)" ds_type="smiliesbtn" data-param='{"txtid":"recommend"}' class="dssc-btn-mini dssc-btn-orange">
                                <i class="fa fa-smile-o"></i><?php echo \think\Lang::get('store_sns_face'); ?></a>
                            </span>-->
                            <span id="weibocharcount_recommend" class="weibocharcount"></span>
                        </p>
                    </dd>
                </dl>
                <div class="bottom">
                    <label class="submit-border"><input type="submit" class="submit" value="<?php echo \think\Lang::get('store_sns_release'); ?>" /></label>
                </div>
            </form>
        </div>


        <div class="dssc-form-default" dstype="hotsell" style="display: none;" >
            <form method="post" action="<?php echo url('Sellersns/store_sns_save'); ?>" id="hotsell_form">
                <input type="hidden" name="type" value="10" />
                <?php if(!(empty($hotsell_list) || (($hotsell_list instanceof \think\Collection || $hotsell_list instanceof \think\Paginator ) && $hotsell_list->isEmpty()))): ?>
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_hotsell_dt'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <div class="div-goods-select">
                            <div class="search-result" style="width:739px;">
                                <ul class="goods-list" style=" width:760px;">
                                    <?php if(is_array($hotsell_list) || $hotsell_list instanceof \think\Collection || $hotsell_list instanceof \think\Paginator): if( count($hotsell_list)==0 ) : echo "" ;else: foreach($hotsell_list as $key=>$val): ?>
                                    <li>
                                        <div class="goods-thumb"><img src="<?php echo goods_cthumb($val['goods_image'], 240, $val['store_id']); ?>" /></div>
                                        <dl class="goods-info">
                                            <dt>
                                            <input type="checkbox" class="checkbox" name="goods_id[]" value="<?php echo $val['goods_id']; ?>" />
                                            <?php echo $val['goods_name']; ?></dt>
                                        </dl>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                        <p class="hint"><?php echo \think\Lang::get('store_sns_hotsell_hint'); ?></p>
                    </dd>
                </dl>
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_cotent'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <textarea name="content" class="textarea w450" dstype="hotsell" id="content_hotsell"></textarea>
                        <p class="w450">
                            <!--<span class="smile"> <a href="javascript:void(0)" ds_type="smiliesbtn" data-param='{"txtid":"hotsell"}' class="dssc-btn-mini dssc-btn-orange"><i class="fa fa-smile-o"></i><?php echo \think\Lang::get('store_sns_face'); ?></a> </span>-->
                            <span id="weibocharcount_hotsell" class="weibocharcount"></span></p>
                    </dd>
                </dl>
                <div class="bottom">
                    <label class="submit-border"><input type="submit" class="submit" value="<?php echo \think\Lang::get('store_sns_release'); ?>" /></label>
                </div>
                <?php else: ?>
                <div class="warning-option"><i class="fa fa-warning">&nbsp;</i><span><span><?php echo \think\Lang::get('store_sns_hotsell_null'); ?>
                            <label for="sns_recommend"><a><?php echo \think\Lang::get('store_sns_self_recommend'); ?></a></label>
                        </span></div>
                <?php endif; ?>
            </form>
        </div>
        <div class="dssc-form-default" dstype="new" style="display: none;" >
            <form method="post" action="<?php echo url('Sellersns/store_sns_save'); ?>" id="new_form">
                <input type="hidden" name="type" value="3" />
                <?php if(!(empty($new_list) || (($new_list instanceof \think\Collection || $new_list instanceof \think\Paginator ) && $new_list->isEmpty()))): ?>
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_recommend_dt'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <div class="div-goods-select">
                            <div class="search-result" style="width:739px;">
                                <ul class="goods-list" style=" width:760px;">
                                    <?php if(is_array($new_list) || $new_list instanceof \think\Collection || $new_list instanceof \think\Paginator): if( count($new_list)==0 ) : echo "" ;else: foreach($new_list as $key=>$val): ?>
                                    <li>
                                        <div class="goods-thumb"><img src="<?php echo goods_cthumb($val['goods_image'], 240, $val['store_id']); ?>"/></div>
                                        <dl class="goods-info">
                                            <dt>
                                            <input type="checkbox" class="checkbox" name="goods_id[]" value="<?php echo $val['goods_id']; ?>" />
                                            <?php echo $val['goods_name']; ?></dt>
                                        </dl>
                                    </li>
                                   <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt><i class="required">*</i><?php echo \think\Lang::get('store_sns_cotent'); ?><?php echo \think\Lang::get('ds_colon'); ?></dt>
                    <dd>
                        <textarea name="content" class="textarea w450" dstype="new" id="content_new"></textarea>
                        <p class="w450">
                            <!--<span class="smile"> <a href="javascript:void(0)" ds_type="smiliesbtn" data-param='{"txtid":"new"}' class="dssc-btn-mini dssc-btn-orange"><i class="fa fa-smile-o"></i><?php echo \think\Lang::get('store_sns_face'); ?></a> </span>-->
                            <span id="weibocharcount_new" class="weibocharcount"></span></p>
                    </dd>
                </dl>
                <div class="bottom">
                    <label class="submit-border"><input type="submit" class="submit" value="<?php echo \think\Lang::get('store_sns_release'); ?>" /></label>
                </div>
                <?php else: ?>
                <div class="warning-option"><i class="fa fa-warning">&nbsp;</i><span><?php echo \think\Lang::get('store_sns_new_null'); ?>
                        <label for="sns_recommend"><a><?php echo \think\Lang::get('store_sns_self_recommend'); ?></a></label>
                    </span> </div>
                <?php endif; ?>
            </form>
        </div>


<!-- 表情弹出层 -->
<div id="smilies_div" class="smilies-module"></div>
<script>
    jQuery.browser={};(function(){jQuery.browser.msie=false; jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)./)){ jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
</script>
<script type="text/javascript" src="<?php echo HOME_SITE_ROOT; ?>/js/sns_store.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/js/smilies/smilies_data.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/js/smilies/smilies.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.caretInsert.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.charCount.js"></script> 
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.ajaxContent.pack.js"></script> 
<script type="text/javascript" src="<?php echo PLUGINS_SITE_ROOT; ?>/ajaxfileupload.js"></script> 
<script>
$(function(){
        /* ajax添加商品  */
        $('a[dstype="get_img"]').ajaxContent({
                event:'click', //mouseover
                loaderType:"img",
                loadingMsg:'<?php echo HOME_SITE_ROOT; ?>/images/transparent.gif',
                target:'#get_img_ajaxContent'
        }).click(function(){
            $(this).hide();
            $('a[dstype="del_img"]').show();
    });
    $('a[dstype="del_img"]').click(function(){
        $(this).hide();
        $('a[dstype="get_img"]').show();
        $('#get_img_ajaxContent').html('');
    });
	
        $('body').click(function(){ $("#smilies_div").html(''); $("#smilies_div").hide();});
        $('input[name="sns_type"]').each(function(){
                if($(this).prop('checked')){
                        $('.dssc-form-default').hide();
                        $('.dssc-form-default[dstype="'+$(this).val()+'"]').show();
                }
        });
        $('input[name="sns_type"]').change(function(){
                $('.dssc-form-default').hide();
                $('.dssc-form-default[dstype="'+$(this).val()+'"]').show();
        });

        $('textarea[name="content"]').each(function(){
                $(this).charCount({
                        allowed: 140,
                        warning: 10,
                        counterContainerID:	'weibocharcount_'+$(this).attr('dstype'),
                        firstCounterText:	'<?php echo \think\Lang::get('sns_charcount_tip1'); ?>',
                        endCounterText:		'<?php echo \think\Lang::get('sns_charcount_tip2'); ?>',
                        errorCounterText:	'<?php echo \think\Lang::get('sns_charcount_tip3'); ?>'
                });
        });

        $('#normal_form').validate({
                errorLabelContainer: $('#warning'),
                invalidHandler: function(form, validator) {
                        $('#warning').show();
                },
                submitHandler:function(form){
                        ds_ajaxpost('normal_form')
                },
                rules : {
                        content : {
                                required : true
                        }
                },
                messages : {
                        content : {
                                required : '<?php echo \think\Lang::get('store_sns_content_not_null'); ?>'
                        }
                }
        });
    
        $('#recommend_form').validate({
                errorLabelContainer: $('#warning'),
                invalidHandler: function(form, validator) {
                        $('#warning').show();
                },
                submitHandler:function(form){
                        ds_ajaxpost('recommend_form')
                },
                rules : {
                        content : {
                                required : true
                        },
                        goods_url : {
                                required : true,
                        }
                },
                messages : {
                        content : {
                                required : '<?php echo \think\Lang::get('store_sns_content_not_null'); ?>'
                        },
                        goods_url : {
                                required : '<?php echo \think\Lang::get('store_sns_input_goods_url'); ?>',
                        }
                }
        });
    
        $('#hotsell_form').validate({
                errorLabelContainer: $('#warning'),
                invalidHandler: function(form, validator) {
                        $('#warning').show();
                },
                submitHandler:function(form){
                        // 验证是否选中商品
                        if($('#hotsell_form').find('input[type="checkbox"]:checked').length == 0){
                                $('#hotsell_form').find('ul').after('<label class="error" for="content" generated="true"><?php echo \think\Lang::get('store_sns_choose_goods'); ?></label>');
                                return false;
                        }else{
                                $('#hotsell_form').find('ul').next('label').remove();
                        }
                        ds_ajaxpost('hotsell_form')
                },
                rules : {
                        content : {
                                required : true
                        }
                },
                messages : {
                        content : {
                                required : '<?php echo \think\Lang::get('store_sns_content_not_null'); ?>'
                        }
                }
        });
    
        $('#new_form').validate({
                errorLabelContainer: $('#warning'),
                invalidHandler: function(form, validator) {
                        $('#warning').show();
                },
        submitHandler:function(form){
                // 验证是否选中商品
                        if($('#new_form').find('input[type="checkbox"]:checked').length == 0){
                                $('#new_form').find('ul').after('<label class="error" for="content" generated="true"><?php echo \think\Lang::get('store_sns_choose_goods'); ?></label>');
                                return false;
                        }else{
                                $('#new_form').find('ul').next().remove('label');
                        }
                ds_ajaxpost('new_form')
        },
                rules : {
                        content : {
                                required : true
                        }
                },
                messages : {
                        content : {
                                required : '<?php echo \think\Lang::get('store_sns_content_not_null'); ?>'
                        }
                }
        });

        // 图片上传js
        $('#normal_file').unbind().on('change', function(){
                $('img[dstype="normal_img"]').attr('src','<?php echo HOME_SITE_ROOT; ?>/images/loading.gif');

                $.ajaxFileUpload
                (
                        {
                                url:'<?php echo url("Sellersns/image_upload"); ?>',
                                secureuri:false,
                                fileElementId:'normal_file',
                                dataType: 'json',
                                data:{id:'normal_file'},
                                success: function (data, status)
                                {
                                        if(typeof(data.error) != 'undefind'){
                                                $('img[dstype="normal_img"]').attr('src',data.image);
                                                $('#sns_image').val(data.image);
                                        }else{
                                                alert(data.error);
                                        }
                                },
                                error: function (data, status, e)
                                {
                                        alert(e);
                                }
                        }
                )
                return false;

        });
});
//从图片空间中插入图片
function sns_insert(data){
        $('img[dstype="normal_img"]').attr('src',data);
        $('#sns_image').val(data);
}
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

