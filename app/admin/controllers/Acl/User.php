<?php
class Acl_UserController extends Base\ViewController
{
    public function init()
    {
        parent::init();
        $this->fieldsList = [
            'id' => ['data' => 'id', 'className' => 'col-checker align-middle', 'orderable' => false, 'searchable' => false],
            'user_id' => ['data' => 'user_id', 'className' => 'align-middle', 'title' => l('Acl_User.user_id')],
            'role_id' => ['data' => 'role_id', 'className' => 'align-middle', 'title' => l('Acl_User.role_id')],
            'status' => ['data' => 'status', 'className' => 'align-middle', 'title' => l('app.status')],
            'date_add' => ['data' => 'date_add', 'className' => 'align-middle', 'title' => l('app.date_add')],
            'idx' => ['data' => 'id', 'className' => 'align-middle text-right', 'orderable' => false, 'searchable' => false]
        ];
    }
}