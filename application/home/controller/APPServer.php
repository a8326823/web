<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace app\home\controller;

use think\Db;

class APPServer extends Base
{
    public function _initialize() {
        parent::_initialize();
    }

    public function index()
    {
        $api_url = config('api_url');
        $data = array();
        //获取广告
        $condition = array();
        $condition['pid'] = 9;
        $list = Db::name('ad')->field('id,litpic,start_time,end_time')->where($condition)->select();
        foreach ($list as $k=>$v){
            $list[$k]['litpic'] = $api_url.$v['litpic'];
        }
        $data['banner'] = $list;
        //获取小程序
        $condition = array();
        $condition['a.typeid'] = config('typeid');
        $condition['a.is_del'] = 0;

        $list = Db::name('archives')->field('a.*,c.preset_value,d.text_content')->alias('a')
            ->join('product_spec_value b', 'a.aid = b.aid', 'LEFT')
            ->join('product_spec_preset c','b.spec_value_id = c.preset_id','left')
            ->join('product_netdisk d','a.aid = d.aid','left')
            ->where($condition)->select();


        $head_project = []; //独家推荐
        $good_project = []; //好游风向标
        $hot_project = []; //精选手游
        $u_project = []; //精选手游
        foreach ($list as $k=> $value){
            $value['litpic'] = config('api_url').$value['litpic'];
            if($value['is_special']==1){  //独家
                $head_project = array($value);
            }
            if($value['is_head']==1){  //推荐
                $good_project[] = $value;
            }
            if($value['is_top']==1){  //精选
                $hot_project[] = $value;
            }
            if($value['is_recom']==1){  //推荐2
                $u_project[] = $value;
            }
        }
        $data['head_project'] = $head_project;
        $data['good_project'] = $good_project;
        $data['hot_project'] = $hot_project;
        $data['u_project'] = $u_project;
        echo retuanJson($data,0);

    }

    //修改表
    public function updateTable(){
        $sql = "SELECT
	table_name 
FROM
	information_schema.TABLES 
WHERE
	table_schema = 'eyoucms' 
	AND table_type = 'base table'";
        $list = Db::query($sql);
        foreach ($list as $value){
            $table = $value['table_name'];
            $sql = 'ALTER TABLE '.$table.' ADD platform_user_id int(10) not null default 0 ;';
            echo $sql."<br/>";
            //Db::query($sql);

//            $sql = 'ALTER TABLE '.$table.' ADD INDEX platform_user_id ( `platform_user_id` )';
//            echo $sql;
//            Db::query($sql);





        }
    }

}