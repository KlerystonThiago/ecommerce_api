<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return BrandResource::collection($brands);
    }

    public function store(BrandRequest $request)
    {
        $brand = $request->validated();

        $brand = Brand::create($brand);

        return response()->json([
            'status' => 'true',
            'message' => 'Marca cadastrada com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $brand = Brand::find($id);

        if(!$brand){
            return response()->json([
                'status' => 'false',
                'message' => 'Marca não encontrada!',
            ], 404);
        }

        return new BrandResource($brand);
    }

    public function update(BrandRequest $request, $id)
    {
        $validate = $request->validated();
        $brand = Brand::find($id);

        if(!$brand){
            return response()->json([
                'status' => 'false',
                'message' => 'Marca não encontrada!',
            ], 404);
        }

        $brand->update($validate);

        return response()->json([
            'status' => 'true',
            'message' => 'Marca alterada com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if(!$brand){
            return response()->json([
                'status' => 'false',
                'message' => 'Marca não encontrada!',
            ], 404);
        }

        $brand->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Marca excluída com sucesso!',
        ], 200);
    }
}
