<?php

namespace App\Http\Controllers;

use App\Reposty\Employee;
use Illuminate\Http\Request;

class CrudController extends Controller
{

public function testst()
{
  $new = new Employee();
  dd($new->toString());
}

}
