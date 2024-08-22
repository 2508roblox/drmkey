<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GioHang extends Component
{
    use LivewireAlert;
    public $name;
    public $address;
    public $email;
    public $phone;
    public $notes;

    public $cart_items = [];
    public $grand_total;

    public function removeCartItem($product_id)
    {
        $this->cart_items = CartManagement::removeCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->dispatch('update-cart-count', [
            'total_count' => count($this->cart_items), // Correct the count calculation
        ])->to(Navbar::class);
        $this->alert('success', 'Xoá giỏ hàng thành công', [
            'position' => 'bottom-end'
        ]);
    }
    public function clearCart()
    {
        // Clear all items in the cart
        CartManagement::clearCartItems();

        // Reset the component's state
        $this->cart_items = [];
        $this->grand_total = 0;

        // Update the cart count on the Navbar
        $this->dispatch('update-cart-count', [
            'total_count' => 0,
        ])->to(Navbar::class);

        // Show a success message
        $this->alert('success', 'Giỏ hàng đã được xóa sạch', [
            'position' => 'bottom-end'
        ]);
    }

    public function incrementQuantityToCartItem($product_id)
    {
        $this->cart_items = CartManagement::incrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function decrementQuantityToCartItem($product_id)
    {
        $this->cart_items = CartManagement::decrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function updateCartItemQuantity($product_id, $quantity)
    {
        if (is_numeric($quantity) && $quantity > 0) {
            // Update quantity in the cart
            $this->cart_items = CartManagement::updateQuantityCartItem($product_id, $quantity);
            $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        }
    }

    public function render()
    {
        return view('livewire.gio-hang');
    }

    public function submitOrder()
    {
        // dd($this->name);
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $order = \App\Models\Order::create([
            'user_id' => '1', // Assuming user is authenticated
            'grand_total' => $this->grand_total,
            'payment_method' => 'cod', // Example default value
            'payment_status' => 'pending', // Example default value
            'status' => 'new',
            'currency' => 'USD', // Example default value
            'shipping_amount' => 0, // Example default value
            'shipping_method' => 'standard', // Example default value
            'notes' => $this->notes,
        ]);

        $order->address()->create([
            'first_name' => $this->name,
            'last_name' => $this->email,
            'street_address' => $this->address,
            'phone' => $this->phone,
            'city' => $this->notes,

        ]);
        foreach ($this->cart_items as $item) {
            \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'unit_amount' => $item['unit_amount'],
                'total_amount' => $item['total_amount'],
            ]);
        }

        // Clear cart
        CartManagement::clearCartItems();

        // Reset form inputs
        $this->reset(['name', 'address', 'email', 'phone', 'notes']);
        $this->cart_items = [];
        $this->grand_total = 0;

        $this->alert('success', 'Đơn hàng đã được gửi thành công', [
            'position' => 'bottom-end'
        ]);
        $this->js('window.location.reload()');

    }
}
