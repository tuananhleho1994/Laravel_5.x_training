<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/19/2015
 * Time: 10:50 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class QueryBuilderController extends Controller
{
    public function getCountUser(){
        echo DB::table('users')->count();
    }

    public function getMaxUser(){
        echo $id = DB::table('users')->max('id');
    }

    public function getPrint($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public function getInsert(){
        $dataInsert = array(
            'user_id' => 10,
            'product_code' => '12020005',
            'product_name' => 'Five-5',
            'product_quantity' => '10',
            'product_price' => '50'
        );
        DB::table('products')->insert($dataInsert);
        return "Done Insert";
    }

    public function getUpdate(){
        $dataUpdate = array(
            'product_quantity' => 30,
            'product_price' => '100'
        );

        DB::table('products')->where('product_id','5')->update($dataUpdate);
        return "Done Update";
    }

    public function getDelete(){
        DB::table('products')->where('product_id',5)->delete();
        return "Done Delete";
    }
/*===============================================================================================================*/
    public function getOne(){
        DB::table('users')->chunk(5, function($users){
            $this->getPrint($users);

            foreach($users as $eachUser){
                echo $eachUser->username."<br>";
            }
            return false;
        });
    }

    public function getTwo(){
        $users = DB::table('users')->lists('username','email');
        $this->getPrint($users);
    }

    public function getThree(){
        $users = DB::table('users')->select('username','email as my-email')->get();
        $this->getPrint($users);
    }

    public function getFour(){
        $users = DB::table('users')->distinct()->get();
        $this->getPrint($users);
    }

    public function getSix(){
        $users = DB::table('users')
            ->leftJoin('products', 'users.id', '=', 'products.user_id')
            ->get();
        $this->getPrint($users);
    }



    public function getFive(){
        $query = DB::table('users')->select('username');
        $users = $query->addSelect('email')->get();
        $this->getPrint($users);
    }

}