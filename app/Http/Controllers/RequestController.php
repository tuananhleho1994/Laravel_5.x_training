<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/8/2015
 * Time: 9:25 AM
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;

class RequestController extends Controller
{
    public function show(Request $request){
        echo $request->old('name');
        return view("request.form_01");
    }
    public function store(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $school = $request->input('school','VNU-UET');
        echo "<h3>$name ------------ $age---------$school</h3>";
        /*============================================================================================*/
        $listData = $request->all();
        echo "<pre>";
        print_r($listData);
        echo "</pre>";
        /*============================================================================================*/
        $input = $request->only('name', 'age');
        echo "<pre>";
        print_r($input);
        echo "</pre>";

        $input = $request->except('ok');
        echo "<pre>";
        print_r($input);
        echo "</pre>";
        /*============================================================================================*/
        $request->flash();
        // return redirect('request/show')->withInput();

    }


    public function update(Request $request, $id){
        echo $id;
    }

    public function uri(Request $request){
//        The path method returns the request's URI.
//        So, if the incoming request is targeted at http://domain.com/foo/bar, the path method will return foo/bar:
        $uri = $request->path();
        echo $uri."<br/>";
        /*=========================================================================================*/
        if ($request->is('request/*')) {
            echo "request.....<br/>";
        }else{
            echo "other.........<br/>";
        }
        /*=========================================================================================*/
        $url = $request->url();
        echo $url."<br/>";
        /*=========================================================================================*/
        $method = $request->method();
        if ($request->isMethod('post')) {
            //
        }
        echo $method."<br/>";
        /*=========================================================================================*/
    }

    public function getFile(){
        return view('request.formUploadFile');
    }
    public function postFile(Request $request){
        echo "This is method post. Upload File<br>";
        $file = $request->file('photo');
        echo "<pre>";
        print_r($file);
        echo "</pre>";
        echo $file->getClientOriginalName()."<br>";
        echo $file->getMaxFilesize();
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('public/picture',$file->getClientOriginalName());
            echo "Done<br>";
        }

    }
}
