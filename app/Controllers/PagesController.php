<?php

namespace App\Controllers;

use Peak\Bedrock\Controller\ParentController;

class PagesController extends ParentController
{
    /**
     * PreAction
     * Check if a view scripts exists for ChildController less action
     */
    public function preAction()
    {
        // page without action but with a scripts view get redirected to index action
        if (!$this->isAction($this->action) && $this->viewScriptExists()) {
            $this->new_file = $this->getViewActionScriptPath();
            $this->action = $this->action_prefix.'basic';
        }
    }

    /**
     * Generate the appropriate view script filename for current action
     * @return string
     */
    protected function getViewActionScriptPath()
    {
        return strtolower($this->getTitle().'.'.$this->getActionTitle()).'.php';
    }

    /**
     * Check if current action view script file exists
     * @return bool
     */
    protected function viewScriptExists()
    {
        return file_exists(
            $this->config->get('path.apptree.views_scripts').'/'.$this->getViewActionScriptPath()
        );
    }
}
