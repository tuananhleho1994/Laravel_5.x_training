<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/9/2015
 * Time: 1:01 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Message\Request;
use Illuminate\Http\Response;

class ResponseController extends Controller
{
    public function getShowXml(){
        return response("<?xml version='1.0' ?><root><data>This is action show-xml, controller Response</data></root>", "200")
            ->header('Content-Type', "text/xml");

    }

    public function getShowXmlSecond(){
        return (new Response($content = "<?xml version='1.0' ?><root><data>This is action show-xml-second, controller Response</data></root>", $status = "200"))
            ->header('Content-Type-One', 'text/xml');
    }

    public function getReturnCookie(){
        return response("Created")->header('Content-Type', "text/xml")
            ->withCookie('name', 'Do Tuan Anh');
    }

    public function getViewResponse(){
//   Error     return response()->view('response.hello', 'My name is Đỗ Tuấn Anh')->header('Content-Type', 'text/word');
    }

    public function getJson(){
        return response()->json(["name"=>"Do Tuan Anh", "age"=>18]);
    }

    public function getJsonp(Request $request){
        return response()->json(['name' => 'Abigail', 'state' => 'CA'])
            ->setCallback($request->input('callback'));
    }

    public function getFileDownload(){
        return response()->download('D:\Sever\Xampp\htdocs\Laravel\Laravel_5.x_training\public\picture\red.jpg');
    }

    public function getRedirect(){
        return redirect()->action('ResponseController@getResultRedirect')->with('success',"<h2>This message from action getRedirect</h2>");
    }

    public function getResultRedirect(){
        return view('response.getRedirect');
    }

    /*
     * return redirect('home/dashboard');
     * return back()->withInput();
     * return redirect()->route('login');
     * return redirect()->action('HomeController@index');
     * return redirect()->route('profile', [1]);
     * return redirect()->action('UserController@profile', [1]);
     *
     * return redirect('dashboard')->with('status', 'Profile updated!');
     * @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
       @endif
     */
}