<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"D:\phpStudy\PHPTutorial\WWW\mall\public/../application/home\view\default\mall\login\login.html";i:1545196757;s:81:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\mall_top.html";i:1545811969;s:84:"D:\phpStudy\PHPTutorial\WWW\mall\application\home\view\default\base\mall_footer.html";i:1545196757;}*/ ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo (isset($html_title) && ($html_title !== '')?$html_title:\think\Config::get('site_name')); ?></title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand" />
        <meta name="keywords" content="<?php echo (isset($seo_keywords) && ($seo_keywords !== '')?$seo_keywords:''); ?>" />
        <meta name="description" content="<?php echo (isset($seo_description) && ($seo_description !== '')?$seo_description:''); ?>" />
        <link rel="stylesheet" href="<?php echo HOME_SITE_ROOT; ?>/css/common.css">
        <link rel="stylesheet" href="<?php echo HOME_SITE_ROOT; ?>/css/home_header.css">
        <link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/font-awesome/css/font-awesome.min.css">
        <script>
            var BASESITEROOT = "<?php echo BASE_SITE_ROOT; ?>";
            var HOMESITEROOT = "<?php echo HOME_SITE_ROOT; ?>";
            var BASESITEURL = "<?php echo BASE_SITE_URL; ?>";
            var HOMESITEURL = "<?php echo HOME_SITE_URL; ?>";
        </script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery-2.1.4.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/common.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.validate.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/additional-methods.min.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/layer/layer.js"></script>
        <script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
    </head>
    <body>
        <div id="append_parent"></div>
        <div id="ajaxwaitid"></div>
        <div class="public-top">
            <div class="w1200">
                <span class="top-link">
                    <?php echo \think\Lang::get('welcome_to'); ?> <em><?php echo \think\Config::get('site_name'); ?></em>
                </span>
                <ul class="login-regin">
                    <?php if(\think\Session::get('member_id')): ?>
                    <li class="line"> <a href="<?php echo url('Member/index'); ?>"><?php echo \think\Session::get('member_name'); ?></a></li>
                    <li> <a href="<?php echo url('Login/Logout'); ?>"><?php echo \think\Lang::get('exit'); ?></a></li>
                    <?php else: ?>
                    <li class="line"> <a href="<?php echo url('Login/login'); ?>"><?php echo \think\Lang::get('please_log'); ?></a></li>
                    <li> <a href="<?php echo url('Login/register'); ?>"><?php echo \think\Lang::get('free_registration'); ?></a></li>
                    <?php endif; ?>
                </ul>
                <span class="top-link">
                    <strong style="margin-left:30px;"><?php echo \think\Lang::get('ds_attention'); ?><a href="http://www.csdeshang.com" target="_blank">www.csdeshang.com</a> <?php echo \think\Lang::get('ds_continuous_update'); ?></strong>&nbsp;
                    <?php echo \think\Lang::get('ds_purchase_authorization'); ?>：<a target="_blank" href="<?php echo HTTP_TYPE; ?>wpa.qq.com/msgrd?v=3&uin=858761000&site=qq&menu=yes"><img border="0" src="<?php echo HTTP_TYPE; ?>wpa.qq.com/pa?p=2:858761000:51" alt="<?php echo \think\Lang::get('click_here_send_message'); ?>" title="<?php echo \think\Lang::get('click_here_send_message'); ?>"/></a>
                </span>
                <ul class="quick_list">
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="<?php echo url('Member/index'); ?>"><?php echo \think\Lang::get('ds_user_center'); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <li><a href="<?php echo url('Memberorder/index'); ?>"><?php echo \think\Lang::get('ds_buying_goods'); ?></a></li>
                                <li><a href="<?php echo url('Memberfavorites/fglist'); ?>"><?php echo \think\Lang::get('ds_care_about'); ?></a></li>
                                <li><a href="<?php echo url('Memberfavorites/fslist'); ?>"><?php echo \think\Lang::get('ds_the_shop'); ?></a></li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="<?php echo url('Seller/index'); ?>"><?php echo \think\Lang::get('business_center'); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <?php if(\think\Session::get('seller_id')): ?>
                                <li><a href="<?php echo url('Seller/index'); ?>"><?php echo \think\Lang::get('ds_shop_overview'); ?></a></li>
                                <li><a href="<?php echo url('Sellerorder/index'); ?>"><?php echo \think\Lang::get('ds_member_path_store_order'); ?></a></li>
                                <li><a href="<?php echo url('Sellergoodsonline/index'); ?>"><?php echo \think\Lang::get('promotion_goods_manage'); ?></a></li>
                                <?php else: ?>
                                <li><a href="<?php echo url('Showjoinin/index'); ?>"><?php echo \think\Lang::get('tenants'); ?></a></li>
                                <li><a href="<?php echo url('Sellerlogin/login'); ?>"><?php echo \think\Lang::get('merchant_login'); ?></a></li>
                                <?php endif; ?>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="<?php echo url('Memberfavorites/fglist'); ?>"><?php echo \think\Lang::get('ds_favorites'); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <li><a href="<?php echo url('Memberfavorites/fglist'); ?>"><?php echo \think\Lang::get('ds_merchandise_collection'); ?></a></li>
                                <li><a href="<?php echo url('Memberfavorites/fslist'); ?>"><?php echo \think\Lang::get('ds_store_collect'); ?></a></li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)"><?php echo \think\Lang::get('ds_customer_center'); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <li><a href="<?php echo url('Article/index',['ac_id'=>2]); ?>"><?php echo \think\Lang::get('ds_help_center'); ?></a></li>
                                <li><a href="<?php echo url('Article/index',['ac_id'=>5]); ?>"><?php echo \think\Lang::get('ds_after_sales_service'); ?></a></li>
                                <li><a href="<?php echo url('Article/index',['ac_id'=>6]); ?>"><?php echo \think\Lang::get('ds_complaint_center'); ?></a></li>
                            </ol>
                        </div>
                    </li>
                    <li class="moblie-qrcode">
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)"><?php echo \think\Lang::get('wechat_end'); ?></a>
                        <div class="dropdown-menu">
                            <img src="<?php echo UPLOAD_SITE_URL; ?>/<?php echo ATTACH_COMMON; ?>/<?php echo \think\Config::get('site_logowx'); ?>" width="90" height="90" />
                        </div>
                    </li>
                    <?php if(\think\Config::get('switching_language_state') == '1'): ?>
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)"><?php echo \think\Config::get('default_lang'); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <li><a href="javascript:change_lang('zh-cn')"><?php echo \think\Lang::get('ds_zh_cn'); ?></a></li>
                                <li><a href="javascript:change_lang('en-us')"><?php echo \think\Lang::get('ds_en_us'); ?></a></li>
                            </ol>
                        </div>
                    </li>
                    <?php endif; ?>
                    <!--
                    <li class="app-qrcode">
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)">APP</a>
                        <div class="dropdown-menu">
                            <img width="90" height="90" src="<?php echo UPLOAD_SITE_URL; ?>/<?php echo ATTACH_COMMON; ?>/<?php echo \think\Config::get('site_logowx'); ?>" />
                            <h3>扫描二维码</h3>
                            <p>下载手机客户端</p>
                        </div>
                    </li>
                    -->
                </ul>
            </div>
        </div>
        
        
        
        <!--左侧导航栏-->
<div class="ds-appbar">
    <div class="ds-appbar-tabs" id="appBarTabs">
        <?php if(\think\Session::get('is_login')): ?>
        <div class="user" dstype="a-barUserInfo">
            <div class="avatar"><img src="<?php echo get_member_avatar(\think\Session::get('avatar')); ?>"/></div>
            <p><?php echo \think\Lang::get('sns_me'); ?></p>
        </div>
        <div class="user-info" dstype="barUserInfo" style="display:none;"><i class="arrow"></i>
            <div class="avatar"><img src="<?php echo get_member_avatar(\think\Session::get('avatar')); ?>"/></div>
            <dl>
                <dt>Hi, <?php echo \think\Session::get('member_name'); ?></dt>
                <dd><?php echo \think\Lang::get('ds_current_level'); ?>：<strong dstype="barMemberGrade"><?php echo \think\Session::get('level_name'); ?></strong></dd>
                <dd><?php echo \think\Lang::get('ds_current_experience'); ?>：<strong dstype="barMemberExp"><?php echo \think\Session::get('member_exppoints'); ?></strong></dd>
            </dl>
        </div>
       <?php else: ?>
        <div class="user TA_delay" dstype="a-barLoginBox">
            <div class="avatar TA"><img src="<?php echo get_member_avatar(\think\Session::get('avatar')); ?>"/></div>
            <p class="TA"><?php echo \think\Lang::get('login_notlogged'); ?></p>
        </div>
        <?php endif; ?>
        <ul class="tools">
            <?php if(\think\Config::get('node_site_use') == '1'): ?>
            <li><a href="javascript:void(0);" id="chat_show_user" class="chat TA_delay"><span class="fa fa-commenting"></span><span class="tit"><?php echo \think\Lang::get('ds_chat'); ?></span><i id="new_msg" class="new_msg" style="display:none;"></i></a></li>
            <?php endif; ?>
            <li><a href="javascript:void(0);" onclick="toglle_bar('rtoolbar_cart')" id="rtoolbar_cart" class="cart TA_delay"><span class="fa fa-shopping-cart"></span><span class="tit"><?php echo \think\Lang::get('ds_cart'); ?></span><i id="rtoobar_cart_count" class="new_msg" style="display:none;"></i></a></li>
            <li><a href="javascript:void(0);" onclick="toglle_bar('compare')" id="compare" class="compare TA_delay"><span class="fa fa-exchange"></span><span class="tit"><?php echo \think\Lang::get('ds_comparison'); ?></span></a></li>
            <li>
                <a href="javascript:void(0);" id="qrcode" class="qrcode TA_delay"><span class="fa fa-qrcode"></span>
                    <span class="tit tit-box">
                        <?php echo \think\Lang::get('ds_mobile_shopping_better'); ?><br>
                        <img src="<?php echo HOME_SITE_URL; ?>/qrcode?url=<?php echo WAP_SITE_URL; ?>" width="110" height="110" />
                        <em class="tips_arrow"></em>
                    </span>
                </a>
            </li>
            <li><a href="javascript:void(0);" onclick="$('html,body').animate({scrollTop: '0px'}, 500)" id="gotop" class="gotop TA_delay" style="position: fixed;bottom: 0"><span class="fa fa-chevron-up"></span><span class="tit"><?php echo \think\Lang::get('ds_top'); ?></span></a></li>
        </ul>
        <div class="content-box" id="content-compare">
            <div class="top">
                <h3><?php echo \think\Lang::get('ds_comparison'); ?></h3>
                <a href="javascript:void(0);" class="close fa fa-angle-double-right" title="<?php echo \think\Lang::get('ds_hidden'); ?>"></a></div>
            <div id="comparelist"></div>
        </div>
        <div class="content-box" id="content-cart">
            <div class="top">
                <h3><?php echo \think\Lang::get('ds_my_shopping_cart'); ?></h3>
                <a href="javascript:void(0);" class="close fa fa-angle-double-right" title="<?php echo \think\Lang::get('ds_hidden'); ?>"></a></div>
            <div id="rtoolbar_cartlist"></div>
        </div>
    </div>
</div>
        
<script type="text/javascript">

    //动画显示边条内容区域
    $(function() {
        $(".close").click(function(){
            close_bar();
        });
        // 右侧bar用户信息
        $('div[dstype="a-barUserInfo"]').click(function(){
            $('div[dstype="barUserInfo"]').toggle();
        });
        // 右侧bar登录
        $('div[dstype="a-barLoginBox"]').click(function(){
            login_dialog();
        });

        <?php if($cart_goods_num > 0): ?>
            $('#rtoobar_cart_count').html(<?php echo $cart_goods_num; ?>).show();
        <?php endif; ?>
    });
    function toglle_bar(item){
        //判断侧边栏是否已拉出
        if(parseInt($('.ds-appbar').css('width')) == 36){
            $('.ds-appbar').css('width','306px');
        }
        //判断选中项是否已显示
        if(!$("#"+item).hasClass('active')){
            $('.tools li > a').removeClass('active');
            $("#"+item).addClass('active');
            $('.content-box').removeClass('active');
            
            switch(item){
                case 'rtoolbar_cart':
                    $("#rtoolbar_cartlist").load("<?php echo url('Cart/ajax_load','type=html'); ?>");
                    $("#content-cart").addClass('active');
                    break;
                case 'compare':   
                    loadCompare(false);
                    $("#content-compare").addClass('active');
                    break;
            }
        }else{
            //关闭
            close_bar();
            $(".chat-list").css("display",'none');
        }
        
    }
    function close_bar(){
        $('.tools li > a').removeClass('active');
        $('.content-box').removeClass('active');
        $('.ds-appbar').css('width','36px');
    }
</script> 

<link rel="stylesheet" href="<?php echo HOME_SITE_ROOT; ?>/css/home.css">
<div class="header-login clearfix">
    <div class="w1200">
        <div class="logo">
            <a href="<?php echo HOME_SITE_URL; ?>"><img src="<?php echo UPLOAD_SITE_URL; ?>/<?php echo ATTACH_COMMON; ?>/<?php echo \think\Config::get('site_logo'); ?>"/></a>
        </div>
    </div>
</div>


<div class="page_login clearfix" style="background-image: url('<?php echo HOME_SITE_ROOT; ?>/images/login/login-bg.jpg');background-position: center center;">
    <div class="w1000">
        <div class="login_form">
            <div class="mt">
                <a href="javascript:void(0)" class="on"><span><?php echo \think\Lang::get('login_account'); ?></span><i></i></a>
                <?php if(\think\Config::get('sms_login') == 1): ?>
                <a href="javascript:void(0)" ><span><?php echo \think\Lang::get('login_mobile'); ?></span><i></i></a>
                <?php endif; ?>
            </div>
            <div class="mc">
                <form id="login_normal_form" method="post" action="<?php echo url('Login/login'); ?>">
                    <div class="item">
                        <div class="text-area">
                            <div class="fa fa-user-o ico"></div>
                            <input type="text" id="member_name" name="member_name" class="text" placeholder="<?php echo \think\Lang::get('login_type'); ?>" tabindex="1"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text-area">
                            <div class="fa fa-unlock-alt ico"></div>
                            <input type="password" id="member_password" name="member_password" class="text" placeholder="<?php echo \think\Lang::get('login_password'); ?>" tabindex="2"/>
                        </div>
                    </div>
                    <?php if(\think\Config::get('captcha_status_login') == '1'): ?>
                     <div class="item">
                        <div class="text-area">
                            <div class="fa fa-unlock-alt ico"></div>
                            <input type="text" id="captcha_normal" name="captcha_normal" class="text" style="width:130px;float:left" placeholder="<?php echo \think\Lang::get('login_register_code'); ?>" tabindex="2" maxlength="4"/>
                            <span class="span">
                           <img style="position: absolute;top: 0;height:46px;" src="<?php echo url('Seccode/makecode'); ?>" title="<?php echo \think\Lang::get('login_index_change_checkcode'); ?>" name="codeimage" id="codeimage">
                                <a class="makecode" href="javascript:void(0);" onclick="javascript:document.getElementById('codeimage').src='<?php echo url('Seccode/makecode'); ?>?'+(new Date().getTime());"><?php echo \think\Lang::get('login_password_change_code'); ?></a>
                            </span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="item">
                        <a href="<?php echo url('Login/forget_password'); ?>"><?php echo \think\Lang::get('login_index_find_password'); ?>?</a>
                        <a href="<?php echo url('Login/register'); ?>" title="<?php echo \think\Lang::get('login_register_login_now_4'); ?>"><?php echo \think\Lang::get('new_user_registration'); ?></a>
                    </div>
                    <div class="item">
                        <input type="submit" class="btn login-btn" value="<?php echo \think\Lang::get('login_register_login_now_2'); ?>"/>
                    </div>    
                </form>
                <?php if(\think\Config::get('sms_login') == 1): ?>
                <form id="login_mobile_form" method="post" action="<?php echo url('Connectsms/login'); ?>" style="display:none">
                    <div class="item">
                        <div class="text-area">
                            <div class="fa fa-user-o ico"></div>
                            <input type="text" id="sms_mobile" name="sms_mobile" class="text" placeholder="<?php echo \think\Lang::get('login_mobile_phone'); ?>" tabindex="1"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text-area">
                            <div class="fa fa-unlock-alt ico"></div>
                            <input type="password" id="sms_captcha" name="sms_captcha" class="text" placeholder="<?php echo \think\Lang::get('login_mobile_verification_code'); ?>" tabindex="2" style="width:130px;float:left" maxlength="6"/>
                            <a class="send_code valid" id="btn_sms_captcha" ds_type="2" ><?php echo \think\Lang::get('login_get_verification_code'); ?></a>
                        </div>
                    </div>
                    <?php if(\think\Config::get('captcha_status_login') == '1'): ?>
                     <div class="item">
                        <div class="text-area">
                            <div class="fa fa-unlock-alt ico"></div>
                            <input type="text" id="captcha_mobile" name="captcha_mobile" class="text" style="width:130px;float:left" placeholder="<?php echo \think\Lang::get('login_register_code'); ?>" tabindex="2" maxlength="4" />
                            <span class="span">
                                <img style="position: absolute;top: 0;height:46px;" src="<?php echo url('Seccode/makecode'); ?>" title="<?php echo \think\Lang::get('login_index_change_checkcode'); ?>" name="codeimage" id="sms_codeimage" />
                                <a class="makecode" href="javascript:void(0);" onclick="javascript:document.getElementById('sms_codeimage').src='<?php echo url('Seccode/makecode'); ?>';"><?php echo \think\Lang::get('login_password_change_code'); ?></a>
                            </span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="item">
                        <a href="<?php echo url('Login/forget_password'); ?>"><?php echo \think\Lang::get('login_index_find_password'); ?>?</a>
                        <a href="<?php echo url('Login/register'); ?>" title="<?php echo \think\Lang::get('login_register_login_now_4'); ?>"><?php echo \think\Lang::get('new_user_registration'); ?></a>
                    </div>
                    <div class="item">
                        <input type="hidden" value="<?php echo \think\Request::instance()->param('ref_url'); ?>" name="ref_url">
                        <input type="submit" class="btn login-btn" value="<?php echo \think\Lang::get('login_register_login_now_2'); ?>"/>
                    </div>    
                </form>
                <?php endif; ?>
            </div>
            <?php if(\think\Config::get('qq_isuse') =='1' || \think\Config::get('sina_isuse') =='1' || \think\Config::get('weixin_isuse') =='1'): ?>
            <div class="partner-login clearfix">
                <h3><?php echo \think\Lang::get('partner_account_login'); ?></h3>
                <p>
                    <?php if(\think\Config::get('qq_isuse') == '1'): ?>
                    <a class="login_ico ico_qq" href="<?php echo url('Api/oa_qq'); ?>"></a>
                    <?php endif; if(\think\Config::get('sina_isuse') == '1'): ?>
                    <a class="login_ico ico_weibo" href="<?php echo url('Api/oa_sina'); ?>"></a>
                    <?php endif; if(\think\Config::get('weixin_isuse') == '1'): ?>
                    <a class="login_ico ico_weixin" onclick="ajax_form('weixin_form', '<?php echo \think\Lang::get('wechat_account_login'); ?>', '<?php echo url('Connectwx/index'); ?>', 360);" title="<?php echo \think\Lang::get('wechat_account_login'); ?>"></a>
                    <?php endif; ?>
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
$(function () {
    $(".login_form .mt a").click(function(){
        var index=$(this).index();
        $(this).parent().next().find("form").hide().eq(index).show();
        $(this).addClass("on").siblings().removeClass("on");
    });
    
    $("#login_normal_form").validate({
        errorPlacement: function (error, element) {
            var error_td = element.parent('.text-area');
            error_td.append(error);
            element.parents('.text-area:first').addClass('error');
        },
        success: function (label) {
            label.parents('.text-area:first').removeClass('error').find('label').remove();
        },
        submitHandler:function(form){
            ds_ajaxpost('login_normal_form','url','<?php echo \think\Request::instance()->param('ref_url'); ?>');
        },
        onkeyup: false,
        rules: {
            member_name: "required",
            member_password: "required"
            <?php if(\think\Config::get('captcha_status_login') == '1'): ?>,
            captcha_normal: {
                required: true,
                remote: {
                    url: "<?php echo url('Seccode/check',['reset'=>'false']); ?>",
                    type: 'get',
                    data: {
                        captcha: function () {
                            return $('#captcha_normal').val();
                        }
                    },
                    complete: function (data) {
                        if (data.responseText == 'false') {
                            document.getElementById('codeimage').src = "<?php echo url('Seccode/makecode'); ?>";
                        }
                    }
                }
            }
            <?php endif; ?>
        },
        messages: {
            member_name: "<i class='fa fa-exclamation-circle'></i><?php echo \think\Lang::get('please_enter_registered_name'); ?>",
            member_password: "<i class='fa fa-exclamation-circle'></i><?php echo \think\Lang::get('login_index_input_password'); ?>"
            <?php if(\think\Config::get('captcha_status_login') == '1'): ?>,
            captcha_normal: {
                required: '<i class="fa fa-exclamation-circle" title="<?php echo \think\Lang::get('login_index_input_checkcode'); ?>"></i><?php echo \think\Lang::get('login_index_input_checkcode'); ?>',
                remote: '<i class="fa fa-exclamation-circle" title="<?php echo \think\Lang::get('login_index_wrong_checkcode'); ?>"></i><?php echo \think\Lang::get('login_index_wrong_checkcode'); ?>'
            }
            <?php endif; ?>
        }
    });
});
</script>
<?php if(\think\Config::get('sms_login') == 1): ?>
<script type="text/javascript" src="<?php echo HOME_SITE_ROOT; ?>/js/connect_sms.js"></script>
<script>
            $(function () {
                $("#login_mobile_form").validate({
                    errorPlacement: function (error, element) {
                        var error_td = element.parent('.text-area');
                        error_td.append(error);
                        element.parents('.text-area:first').addClass('error');
                    },
                    success: function (label) {
                        label.parents('.text-area:first').removeClass('error').find('label').remove();
                    },
                    submitHandler:function(form){
                        ds_ajaxpost('login_mobile_form','url','<?php echo \think\Request::instance()->param('ref_url'); ?>');
                    },
                    onkeyup: false,
                    rules: {
                        sms_mobile: {
                            required: true,
                            number:true,
                            rangelength:[11,11]
                        },
                        sms_captcha: {
                            required: true,
                            rangelength:[6,6]
                        }
                        <?php if(\think\Config::get('captcha_status_login') == '1'): ?>,
                        captcha_mobile: {
                            required: true,
                            minlength: 4,
                            remote: {
                                url: "<?php echo url('Seccode/check',['reset'=>'false']); ?>",
                                type: 'get',
                                data: {
                                    captcha: function () {
                                        return $('#captcha_mobile').val();
                                    }
                                },
                                complete: function (data) {
                                    if (data.responseText == 'false') {
                                        document.getElementById('sms_codeimage').src = "<?php echo url('Seccode/makecode'); ?>";
                                    }
                                }
                            }
                        }
                        <?php endif; ?>
                    },
                    messages: {
                        sms_mobile: {
                            required: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_correct_phone'); ?>',
                            number: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_correct_phone'); ?>',
                            rangelength:'<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_correct_phone'); ?>'
                        },
                        sms_captcha: {
                            required: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_sms_dynamic_code'); ?>',
                            rangelength: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_sms_dynamic_code'); ?>'
                        }
                        <?php if(\think\Config::get('captcha_status_login') == '1'): ?>,
                        captcha_mobile: {
                            required: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_correct_verification_code'); ?>',
                            minlength: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_correct_verification_code'); ?>',
                            remote: '<i class="fa fa-exclamation-circle"></i><?php echo \think\Lang::get('login_correct_verification_code'); ?>'
                        }
                        <?php endif; ?>
                    }
                });
            });
</script>
<?php endif; if(\think\Config::get('node_site_use') == '1' && !isset($wait)): ?>
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
