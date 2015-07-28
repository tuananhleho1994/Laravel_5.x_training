<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/21/2015
 * Time: 12:05 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Contracts\Mail\Mailer;

class MailController extends Controller
{
    public function getOne(Mailer $mailer){
        echo "Send A Mail";
        $user = array(
            'name' => 'Đỗ Tuấn Anh',
            'email'=> 'tuananhleho1994@gmail.com',
            'age' => 21
        );
        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('anhdt570@gmail.com', 'Laravel');
            $m->to($user['email'], $user['name'])->subject('Your Reminder!');
        });
    }
}