<?php
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Model_has_roles;
function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
}
   
function img($image_name)
{
    return public_path('images/products/'.$image_name);
}
