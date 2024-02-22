<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * pagination by 10
     */
    public function index(Request $request)
    {
        $currentPage = $request->get('page', 1); // Default to 1 if not provided
        $itemsPerPage = $request->get('itemsPerPage', 10); // Default to 10 if not provided

        // Manually set the paginator to use the provided page
        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });

        return Product::paginate($itemsPerPage);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
