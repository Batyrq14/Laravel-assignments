<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        $category = Category::create($request->only('name'));
        return response()->json($category, 201);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string']);
        $category = Category::findOrFail($id);
        $category->update($request->only('name'));
        return response()->json($category);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['message' => 'Deleted']);
    }

    public function byProduct($productId)
    {
        $product = Product::findOrFail($productId);
        return response()->json($product->categories);
    }
}
