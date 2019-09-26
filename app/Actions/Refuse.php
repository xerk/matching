<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Refuse extends AbstractAction
{
    public function getTitle()
    {
        return 'Refuse';
    }

    public function getIcon()
    {
        return 'voyager-exit';
    }

    public function getPolicy()
    {
        return 'refuse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-danger pull-right',
            'style' => 'margin-right:5px'
        ];
    }

    public function getDefaultRoute()
    {
        return route('refuse.user', $this->data->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        if($this->data->aprrove) {
            return $this->dataType->slug == 'users';
        }
    }
}