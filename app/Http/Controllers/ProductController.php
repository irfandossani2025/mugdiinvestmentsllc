<?php

namespace App\Http\Controllers;

use App\Services\VendorProductService;
use Illuminate\Http\Request;
use Throwable;

class ProductController extends Controller
{
    public function index(Request $request, VendorProductService $service)
    {
        try {
            $products = collect($service->products());
            $categories = $products->flatMap(fn ($i) => $i['categories'])->unique()->sort()->values();
            $search = trim((string) $request->query('q'));
            $category = trim((string) $request->query('category'));
            if ($search !== '') {
                $products = $products->filter(fn ($i) => str_contains(mb_strtolower($i['name'].' '.$i['description']), mb_strtolower($search)));
            }if ($category !== '') {
                $products = $products->filter(fn ($i) => in_array($category, $i['categories'], true));
            }

return view('products', compact('products', 'categories', 'search', 'category'));
        } catch (Throwable $e) {
            report($e);

            return view('products', ['products' => collect(), 'categories' => collect(), 'search' => '', 'category' => '', 'catalogueError' => true]);
        }
    }
}
