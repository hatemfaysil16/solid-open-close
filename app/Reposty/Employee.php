<?php
namespace App\Reposty;

use App\Reposty\interfaces\interfaceadmin;

class Employee extends interfaceadmin
{
    public function toString()
    {
        $this->id='123';
        $this->name='user';
        $this->price='2000';

        return $this->calcalatory(2) . 'is hourse ' . 'user';
    }
}