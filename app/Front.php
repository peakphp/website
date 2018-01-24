<?php

namespace App;

use App\Models\Packagist;
use Peak\Bedrock\Application;
use Peak\Bedrock\Controller\FrontController;
use Peak\Bedrock\View;
use Peak\Config\ConfigLoader;

/**
 * Application Front Controller
 */
class Front extends FrontController
{

    /**
     * @throws \Exception
     */
    public function preDispatch()
    {
        $filepath = CACHE_PATH.'/packagist.json';

        if (file_exists($filepath) && !fileExpired($filepath, '1 day')) {
            $packagist = new Packagist(
                (new ConfigLoader([$filepath]))->asArray()
            );
        } else {
            $packagist = Packagist::loadPackage('peakphp/framework');
            file_put_contents($filepath, $packagist->jsonSerialize());
        }

        Application::container()->add($packagist);
    }

    /**
     * postDispatch
     */
    public function postDispatch()
    {
        $v = Application::get(View::class);

        $v->ctrl = strtolower($this->controller->getTitle());
        $v->action = strtolower($this->controller->getActionTitle());
        $v->page_class = $v->ctrl.'-'.$v->action;
        $v->version = config('version');
    }

    /**
     * postRender
     */
    public function postRender()
    {
        if (isEnv('dev')) {
            $this->controller->view->debugbar()->show();
        }
    }
}