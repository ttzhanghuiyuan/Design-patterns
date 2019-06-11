<?php
namespace service\uu_message;
/**
 * @desc 定义约束消息接口
 * interface messageInterface
 */
interface messageInterface{
    /**
     * @desc: 发送方法
     * @author: yuan<turing_zhy@163.com>
     * @date: 2019/1/14
     * @return mixed
     */
    public function send();
}