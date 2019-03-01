<?php

namespace app\admin\controller;

use think\Lang;

class Storesnstrace extends AdminControl {

    public function _initialize() {
        parent::_initialize(); // TODO: Change the autogenerated stub
        Lang::load(APP_PATH . 'admin/lang/'.config('default_lang').'/storesnstrace.lang.php');
    }

    /**
     * 动态列表
     */
    public function index() {
        // where条件
        $where = array();
        if (input('get.search_sname') != '') {
            $where['stracelog_storename'] = array('like', '%' . trim(input('get.search_sname')) . '%');
        }
        if (input('get.search_stitle') != '') {
            $where['stracelog_title'] = array('like', '%' . trim(input('get.search_stitle')) . '%');
        }
        if (input('get.search_scontent') != '') {
            $where['stracelog_content'] = array('like', '%' . trim(input('get.search_scontent')) . '%');
        }
        if (input('get.search_type') != '') {
            $where['stracelog_type'] = trim(input('get.search_type'));
        }
        if (input('get.search_stime') != '' || input('get.search_etime') != '') {
            $s_time = input('get.search_stime') != '' ? strtotime(input('get.search_stime')) : null;
            $e_time = input('get.search_etime') != '' ? strtotime(input('get.search_etime')) : null;
            $where['stracelog_time'] = array('between', array($s_time, $e_time));
        }
        // 实例化模型
        $storesnstracelog_model = model('storesnstracelog');
        $storetrace_list = model('storesnstracelog')->getStoresnstracelogList($where, '*', 'stracelog_id desc', 0, 10);
        if (!empty($storetrace_list) && is_array($storetrace_list)) {
            foreach ($storetrace_list as $key => $val) {
                if ($val['stracelog_content'] == '') {
                    $data = json_decode($val['stracelog_goodsdata'], true);
                    $content = $storesnstracelog_model->spellingStyle($val['stracelog_type'], $data);
                    $storetrace_list[$key]['stracelog_content'] = str_replace("%siteurl%", HOME_SITE_URL . DS, $content);
                }
            }
        }
        $this->setAdminCurItem('index');
        $this->assign('storetrace_list', $storetrace_list);
        $this->assign('show_page', $storesnstracelog_model->page_info->render());
        return $this->fetch();
    }

    /**
     * 删除动态
     */
    public function strace_del() {
        $st_id = input('param.st_id');
        $st_id_array = ds_delete_param($st_id);
        if ($st_id_array == FALSE) {
            ds_json_encode('10001', lang('param_error'));
        }
        // 删除动态
        $rs = model('storesnstracelog')->delStoresnstracelog(array('stracelog_id' => array('in', $st_id_array)));
        if ($rs) {
            // 删除评论
            model('storesnscomment')->delStoresnscomment(array('stracelog_id' => array('in', $st_id_array)));
            $this->log(lang('ds_del').lang('admin_snstrace_comment'), 1);
            ds_json_encode('10000', lang('ds_common_del_succ'));
        } else {
            ds_json_encode('10001', lang('ds_common_del_fail'));
        }
    }

    /**
     * 编辑动态
     */
    public function strace_edit() {
        $st_id = input('param.st_id');
        $st_id_array = ds_delete_param($st_id);
        if ($st_id_array == FALSE) {
            ds_json_encode('10001', lang('param_error'));
        }
        // where条件
        $where = array();
        $where['stracelog_id'] = array('in', $st_id_array);
        // update条件
        $update = array();
        $update['stracelog_state'] = 1;
        if (input('param.type') == 'hide') {
            $update['stracelog_state'] = 0;
        }
        // 实例化模型
        $rs = model('storesnstracelog')->editStoresnstracelog($update, $where);
        if ($rs) {
            $this->log(lang('ds_edit').lang('admin_snstrace_comment'), 1);
            ds_json_encode('10000', lang('ds_common_op_succ'));
        } else {
            ds_json_encode('10001', lang('ds_common_op_fail'));
        }
    }

    /**
     * 评论列表
     */
    public function storecomment_list() {
        // where 条件
        $where = array();
        $st_id = intval(input('get.st_id'));
        if ($st_id > 0) {
            $where['stracelog_id'] = $st_id;
        }
        
        if (input('get.search_uname') != '') {
            $where['storesnscomm_membername'] = array('like', '%' . trim(input('get.search_uname')) . '%');
        }
        if (input('get.search_content') != '') {
            $where['storesnscomm_content'] = array('like', '%' . trim(input('get.search_content')) . '%');
        }
        if (input('get.search_state') != '') {
            $where['storesnscomm_state'] = intval(input('get.search_state'));
        }
        if (input('get.search_stime') != '' || input('get.search_etime') != '') {
            $s_time = input('get.search_stime') != '' ? strtotime(input('get.search_stime')) : null;
            $e_time = input('get.search_etime') != '' ? strtotime(input('get.search_etime')) : null;
            $where['storesnscomm_time'] = array('between', array($s_time, $e_time));
        }
        $model_storesnscomment = model('storesnscomment');
        $storesnscomm_list = $model_storesnscomment->getStoresnscommentList($where, '*', 'storesnscomm_id desc', 0, 20);
        
        $this->setAdminCurItem('index');
        $this->assign('scomm_list', $storesnscomm_list);
        $this->assign('show_page', $model_storesnscomment->page_info->render());
        return $this->fetch();
    }

    /**
     * 删除评论
     */
    public function scomm_del() {
        $sc_id = input('param.sc_id');
        $sc_id_array = ds_delete_param($sc_id);
        if ($sc_id_array == FALSE) {
            ds_json_encode('10001', lang('param_error'));
        }
        // 实例化模型
        $rs = model('storesnscomment')->delStoresnscomment(array('storesnscomm_id' => array('in', $sc_id_array)));
        if ($rs) {
            $this->log(lang('ds_del').lang('admin_snstrace_pl'), 1);
            ds_json_encode('10000', lang('ds_common_del_succ'));
        } else {
            ds_json_encode('10001', lang('ds_common_del_fail'));
        }
    }

    /**
     * 评论编辑
     */
    public function scomm_edit() {
        $sc_id = input('param.sc_id');
        $sc_id_array = ds_delete_param($sc_id);
        if ($sc_id_array == FALSE) {
            ds_json_encode('10001', lang('param_error'));
        }
        $storesnscomm_state = 1;
        if (input('get.type') == 'hide') {
            $storesnscomm_state = 0;
        }
        // 实例化模型
        $rs = model('storesnscomment')->editStoresnscomment(array('storesnscomm_state' => $storesnscomm_state), array('storesnscomm_id' => array('in', $sc_id_array)));
        if ($rs) {
            $this->log(lang('ds_edit').lang('admin_snstrace_pl'), 1);
            ds_json_encode('10000', lang('ds_common_op_succ'));
        } else {
            ds_json_encode('10001', lang('ds_common_op_fail'));
        }
    }

}

?>
