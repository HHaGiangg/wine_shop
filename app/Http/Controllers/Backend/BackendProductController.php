<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendProductRequest;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BackendProductController extends Controller
{
    protected $folder = 'Backend.product.';

    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(20);

        $viewData = [
          'products' => $products,
        ];
        return view($this->folder.'index', $viewData);
    }
    public function create()
    {
        $categories = Category::all();

        $viewData = [
          'categories' => $categories,
        ];
        return view($this->folder.'create', $viewData);
    }
    public function store(BackendProductRequest $request)
    {
        $data = $request->except('_token','pro_avatar');
        $data['pro_slug'] = \Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        $product = Product::create($data);

        return redirect()->back();
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product    = Product::find($id);
        $viewData = [
            'categories' => $categories,
            'product'   => $product,
        ];
        return view($this->folder.'update', $viewData);
    }
    public function update(BackendProductRequest $request , $id)
    {
        $data = $request->except('_token','pro_avatar');
        $data['pro_slug'] = \Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        Product::find($id)->update($data);

        return redirect()->back();
    }
    public function delete($id)
    {
        \DB::table('products')->where('id', $id)->delete();
        return redirect()->route('get_backend.product.index');
    }
}
