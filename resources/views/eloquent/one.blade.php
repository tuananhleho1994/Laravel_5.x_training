<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/19/2015
 * Time: 11:16 PM
 */
?>

@forelse($products as $eachProduct)
    {{ $eachProduct->product_code }}<br/>
@empty
    <p>No products</p>
@endforelse
