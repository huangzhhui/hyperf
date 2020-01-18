<?php

namespace Hyperf\Casbin;


use Casbin\Model\Model;
use Hyperf\Utils\ApplicationContext;

class EnforcerCreator
{

    public function create()
    {
        $model = new Model();
        $model->loadModel(BASE_PATH . '/config/casbin_model.conf');
        $adapter = ApplicationContext::getContainer()->get(Db\Adapter::class);
        return new \Casbin\Enforcer($model, $adapter);
    }

}