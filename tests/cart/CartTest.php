<?php
namespace tests;
use app\libraries\Cart;
use app\libraries\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends testCase 
{
    public function test_if_cart_is_empty()
    {
        $cart = new Cart();

        $this->assertEmpty($cart->getCart());
    }

    public function test_if_cart_not_empty()
    {
        $cart = new Cart();
        $cart->add(new Product);
        $this->assertNotEmpty($cart->getCart());
    }
    
}
