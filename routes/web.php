<?php

use App\Models\Customer;
use App\Models\CustomerGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main_view', [
        'customers' => Customer::all()
    ]);
});

Route::get('/customers/{customer}', function(Customer $customer){
    return view('customers' , [
        'customer' => $customer
    ]);
});
