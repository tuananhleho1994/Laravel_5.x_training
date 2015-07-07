<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/7/2015
 * Time: 2:03 AM
 */
?>
<form method="post" action="<?php echo url('form/profilePost'); ?>">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit" name="ok" value="Submit">
</form>