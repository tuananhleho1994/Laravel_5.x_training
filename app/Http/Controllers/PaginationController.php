<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/19/2015
 * Time: 1:03 PM
 */

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class PaginationController extends Controller
{
    public function getOne(){
        $users = DB::table('users')->paginate(3);
        return view('pagination.one', ['users'=>$users]);
    }
}
