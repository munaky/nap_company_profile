<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategories;

class UserView extends Controller
{
    public function __invoke(Request $req, $page)
    {
        if (!view()->exists("user/$page/index")) {
            return "404";
        }

        if (method_exists($this, $page)) {
            return view("user/$page/index", ['data' => $this->$page($req)]);
        }

        return view("user/$page/index");
    }

    private function home()
    {
        $settings = app()->call('App\Http\Controllers\Etc@pageSettings');

        return $settings;
    }

    private function products(Request $req)
    {
        $filterCategories = explode(',', $req->get('categories'));
        $filterName = $req->get('name') ? $req->get('name') : '';
        $categories = Category::all()->pluck('name');
        $products = ProductCategories::query()
            ->with('product')
            ->whereHas('product', function ($q) use($filterName) {
                $q->where('name','like',"%$filterName%");
            })
            ->when(count($filterCategories) > 1, function ($q) use ($filterCategories) {
                $q->whereHas('category', function ($q) use($filterCategories) {
                    if(count($filterCategories) > 0){
                        $q->whereIn('name', $filterCategories);
                    }
                });
            })
            ->get()
            ->pluck('product');

        return [
            'categories' => $categories,
            'products' => $products,
            'filter' => [
                'categories' => $filterCategories,
                'name' => $filterName,
            ],
        ];
    }
}
