<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Approval extends AbstractAction
{
    public function getTitle()
    {
        return 'Approve';
    }

    public function getIcon()
    {
        return 'voyager-check';
    }

    public function getPolicy()
    {
        return 'approve';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin-right:5px'
        ];
    }

    public function getDefaultRoute()
    {
        return route('approve.user', $this->data->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        if(!$this->data->aprrove) {
            return $this->dataType->slug == 'users';
        }
    }

    
}