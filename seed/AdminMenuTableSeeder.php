<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $closeMenu = [

            'product-brand',
            'product-market',
            '',
        ];
        DB::table('admin_menu')->whereIn('uri',$closeMenu)->update(['active'=>false]);

        $guideUpdate = [
            'order-form' => '/guide/order-form',
            'order-payment' => '/guide/order-payment',
            'order-delivery' => '/guide/order-delivery',
            'order-return' => '/guide/order-return',
            'receipt' => '/guide/receipt',
            'allowance' => '/guide/allowance',
            'receipt-number' => '/guide/receipt-number',
            'sale-discount' => '/guide/sale-discount',
            'sale-gift' => '/guide/sale-gift',
            'sale-grading' => '/guide/sale-grading',
            'sale-level' => '/guide/sale-level',
            'sale-collect' => '/guide/sale-collect',
            'sale-addition' => '/guide/sale-addition',
            'sale-redeem' => '/guide/sale-redeem',
            'coupon-event' => '/guide/coupon-event',
            'coupon-config' => '/guide/coupon-config',
            'coupon-ticket' => '/guide/coupon-ticket',
            'cart-payment' => '/guide/cart-payment',
            'cart-delivery' => '/guide/cart-delivery',
            'cart-shipping' => '/guide/cart-shipping',
            'cart-config' => '/guide/cart-config',
            'member' => '/guide/member',
            'member-upgrade' => '/guide/member-upgrade',
            'bonus-event' => '/guide/bonus-event',
            'bonus-record' => '/guide/bonus-record',
            'bonus-config' => '/guide/bonus-config',
            'statistic-product-set' => '/guide/statistic-product-set',
            'statistic-order-form' => '/guide/statistic-order-form',
            'statistic-member-order' => '/guide/statistic-member-order',
            'search-keyword' => '/guide/search-keyword',
        ];

        foreach ($guideUpdate as $menuUri => $guidePath) {
            if (DB::table('admin_menu')->where('uri', $menuUri)->exists()) {
                DB::table('admin_menu')->where('uri', $menuUri)->update(['guide' => $guidePath]);
            }

        }
    }
}
