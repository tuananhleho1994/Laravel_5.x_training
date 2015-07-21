<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/19/2015
 * Time: 5:03 PM
 */
namespace App\Http\Controllers\Eloquent;

use Carbon\Carbon;
use DB;
use App\Models\Product;
use App\User;
use App\Http\Controllers\Controller;

class EloquentController extends Controller
{
    public function getPrint($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public function getOne()
    {
        $products = Product::all();
        return view('eloquent.one', ['products'=>$products]);
    }

    public function getTwo(){
        $products = Product::where('product_quantity','>',50)
                            ->orderBy('product_name','desc')
                            ->take(2)
                            ->get();
        return view('eloquent.one', ['products'=>$products]);
    }

    public function getThree(){
        $user = Product::find(1);
        $this->getPrint($user);
    }

    public function getFour(){
        echo Carbon::now();
    }

    public function getCountRecord(){
        $count = Product::count();
        echo $count;
    }

    public function getMaxPrice(){
        $max = Product::max('product_price');
        return $max;
    }

    /*============================ CRUD ===============================================================*/
    public function getInsert(){
        /*============= The First Way ====================*/
        $product = new Product();// Không cần khai báo fillable trong model
        $product -> user_id = 5;
        $product -> product_code = '12020005';
        $product -> product_name = 'Five-5';
        $product -> product_quantity = 300;
        $product -> product_price = 200.5;
        $product -> save();
        /*============= End The First Way ====================*/

        /*============= The Second Way ====================*/
        $array = array(
            'user_id' => 6,
            'product_code' => '12020006',
            'product_name' => 'Six-6',
            'product_quantity' => 500,
            'product_price' => 300,
        );
        Product::create($array);// Bắt buộc khai báo fillable trong model
        /*============= End The Second Way ====================*/

        return "Done insert";
    }

    public function getOtherCreate(){
        // Retrieve the product by the attributes, or create it if it doesn't exist...
        $product = Product::firstOrCreate(['product_name' => 'Five-7']);
        $this->getPrint($product);
        /*==========================================================================================*/

//        $product = Product::firstOrNew(['product_name' => 'Seven-7'])->save();
        $product = Product::firstOrNew(['product_name' => 'Seven-7']);
        $this->getPrint($product);
    }

    public function getUpdate(){
        /*============= The First Way ====================*/
        $product = Product::find(5);
        $product -> product_quantity = 500;
        $product -> save();
        /*============= End The First Way ====================*/

        /*============= The Second Way ====================*/
        $product = Product::where('product_price','<',15)
                            -> update(array('product_price'=>5));
        /*============= End The Second Way ====================*/
        return "Done update";
    }

    public function getDelete(){
        $product = Product::find(6);
        $product -> delete();
        /*===========================================================================================*/
        $product = Product::where('product_code','12020007')->delete();
        /*===========================================================================================*/
        Product::destroy([5,7]);

        return "Done delete";
    }
    /*============================ END CRUD ===============================================================*/

    public function getTrashOne(){
        $product = Product::find(5);
        if($product->trashed()){// kiểm tra xem model(record) đã xóa  hay chưa ....
            echo "Đã  xóa";
        }else{
            $product->delete();
        }
    }

    public function getTrashTwo(){
        $product = Product::withTrashed()
                            ->where('user_id',7)
                            ->get();
        foreach($product as $value){
            echo $value->product_code;
        }
        $this->getPrint($product);
    }

    public function getTrashThree(){
        $product = Product::onlyTrashed()
            ->where('user_id',100)
            ->get();
        foreach($product as $value){
            echo $value->product_code;
        }
        $this->getPrint($product);
    }
}