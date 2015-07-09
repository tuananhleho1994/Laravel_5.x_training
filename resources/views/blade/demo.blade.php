<h1>{{ $name }}</h1>

<h1>{{ time() }}</h1>

{!! $name !!}<br/>

@{{ $name }}<br/>

{{ $name or 'Default' }}

{{--@unless (Auth::check())--}}
    {{--You are not signed in.--}}
{{--@endunless--}}

@forelse ($users as $user)
    <li>{{ $user['name'] }}</li>
@empty
    <p>No users</p>
@endforelse

<?php echo with($var)->format('m/d/Y H:i'); ?>