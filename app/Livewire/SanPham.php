<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class SanPham extends Component
{
    use WithPagination;

    public $selectedCategories = [];
    public $selectedBrands = [];
    public $searchTerm = '';
    public $sortBy = 'best_selling'; // Add this property

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function updatedSelectedCategories()
    {
        $this->resetPage();
    }

    public function updatedSelectedBrands()
    {
        $this->resetPage();
    }

    public function updatedSortBy()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::where('is_active', 1)
            ->when($this->selectedCategories, function ($query) {
                return $query->whereIn('category_id', $this->selectedCategories);
            })
            ->when($this->selectedBrands, function ($query) {
                return $query->whereIn('brand_id', $this->selectedBrands);
            })
            ->when($this->searchTerm, function ($query) {
                return $query->where('name', 'like', '%' . $this->searchTerm . '%');
            })
            ->when($this->sortBy, function ($query) {
                switch ($this->sortBy) {
                    case 'price_asc':
                        return $query->orderBy('price', 'asc');
                    case 'price_desc':
                        return $query->orderBy('price', 'desc');
                        // Add other sorting cases if needed
                    default:
                        return $query; // Default sorting
                }
            })
            ->with('category', 'brand')
            ->paginate(5);

        $categories = Category::all();
        $brands = Brand::all();

        return view('livewire.san-pham', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
