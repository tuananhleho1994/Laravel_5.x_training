<form method="post" action="<?php echo url('request/store'); ?>">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    Name : <input type="text" name="name" value="{{ old('name') }}"><br>
    Age : <input type="text" name="age" value="{{ old('age') }}"><br>
    <input type="submit" name="ok" value="Submit">
</form>
