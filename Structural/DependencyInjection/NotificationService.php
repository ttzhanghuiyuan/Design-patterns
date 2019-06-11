<?php
namespace service\uu_message;

use service\common\BaseService;
/**
 * @desc 发送消息类
 */
class NotificationService extends BaseService{
    protected $messager = '';

    function __construct(messageInterface $message)
    {
        $this->messager = $message;
    }

    /**
     * @desc: 发送消息操作
     * @author: yuan<turing_zhy@163.com>
     * @date: 2019/1/14
     * @return mixed
     */
    public function sendMsg()
    {
        return $this->messager->send();
    }
}