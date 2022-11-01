<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderTransaction;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCoupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

class OrderService
{


    public function createOrder($request)
    {
        $order = Payment::create([
            'currency' => 'USD',
            'payment_status' => 0,
        ]);
     return $order;
    }

}
