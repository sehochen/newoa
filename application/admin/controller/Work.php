<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Work extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        if(request()->Post()){
            $data=input('param.');
            $data['time']=time();
            $validate = validate('Work');
            if(!$validate->check($data)){
                // 验证失败 输出错误信息
                $this->error($validate->getError());
            }else{
                // 添加单条数据
                $res=db('work')->insert($data);
                if( $res){
                    $this->success('保存成功');
                }else{
                    $this->error('保存失败');
                }
            }

        }
        return view();
    }




    public function start()
    {
        $list=db('work')->select();
        $this->assign('list', $list);
        return view();
    }
    public function newtitle()
    {   $data=input('param.');
        $list=db('work')->where('id',$data['id'])->select();
        $this->assign('list', $list);
        return view();
    }



    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
