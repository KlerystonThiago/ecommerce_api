<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    public function store(ProductRequest $request)
    {
        $product = $request->validated();

        if($request->image){
            $product['image'] = $this->upload($request->image);
        }

        $product = Product::create($product);

        return response()->json([
            'status' => 'true',
            'message' => 'Produto cadastrado com sucesso!',
        ], 200);
    }

    public function update(ProductRequest $request, $id)
    {
        $validate = $request->validated();
        $product = Product::find($id);

        if(!$product){
            return response()->json([
                'status' => 'false',
                'message' => 'Produto não encontrado!',
            ], 404);
        }

        if($request->image){
            $validate['image'] = $this->upload($request->image, $product->image);
        }

        $product->update($validate);

        return response()->json([
            'status' => 'true',
            'message' => 'Produto alterado com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if(!$product){
            return response()->json([
                'status' => 'false',
                'message' => 'Produto não encontrado!',
            ], 404);
        }

        return new ProductResource($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if(!$product){
            return response()->json([
                'status' => 'false',
                'message' => 'Produto não encontrado!',
            ], 404);
        }

        $product->delete();

        $imageToDelete = explode('storage/', $product->image)[1];

        if(Storage::disk('storage')->exists($imageToDelete)){
            Storage::disk('storage')->delete($imageToDelete);
        }

        return response()->json([
            'status' => 'true',
            'message' => 'Produto excluído com sucesso!',
        ], 200);
    }

    public function upload($image, $imageToDelete = null)
    {
        $nameFile = Str::slug($image->getClientOriginalName()).date('dmYHis').'.'.$image->getClientOriginalExtension();

        if($path = $image->storeAs('img_products', $nameFile, 'storage')){
            $image = 'storage/img_products/'.$nameFile;
        }

        if($imageToDelete){
            $imageToDelete = explode('storage/', $imageToDelete)[1];
            if(Storage::disk('storage')->exists($imageToDelete)){
                Storage::disk('storage')->delete($imageToDelete);
            }
        }

        return $image;
    }
}
