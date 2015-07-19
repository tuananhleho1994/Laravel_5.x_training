<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/19/2015
 * Time: 1:04 PM
 */
?>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Username</th>
    </tr>
    @foreach($users as $eachUser)
    <tr>
        <td>{{ $eachUser->id }}</td>
        <td>{{ $eachUser->email }}</td>
        <td>{{ $eachUser->username }}</td>
    <tr>
    @endforeach
</table>
{!! str_replace('/?', '?', $users->render()) !!}
{{--{!! str_replace('/?', '?', $users->appends(['sort' => 'votes', 'long' => 'hello'])->render()) !!}--}}
{{--{!! str_replace('/?', '?', $users->appends(['sort' => 'votes', 'long' => 'hello'])->fragment(bcrypt('12345'))->render()) !!}--}}

