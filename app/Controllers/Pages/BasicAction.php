<?php

namespace App\Controllers\Pages;

use Peak\Bedrock\Controller\ChildActionController;

/**
 * "Action less" pages
 * @package App\Controllers\Pages
 */
class BasicAction extends ChildActionController
{
    /**
     * Action logic
     */
    public function process()
    {
        // handle view script without action
        if (!isset($this->new_file)) {
            $this->redirect('error');
            return;
        }

        $this->parent->file = $this->new_file;
    }
}
