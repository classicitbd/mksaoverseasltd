<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Productcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::all();
        $categories=Productcategory::all();

        $product =DB::table('productcategories')
            ->join('products','productcategories.id', '=', 'products.category')
            ->select('productcategories.name', 'products.*')
            ->get();
        //   dd($Product);
        return view("pages.backend.product.index_product",["product"=>$product, "productcategories"=>$categories]);
    }

    public function store(Request $request){
        $product=new Product; 
        $product->category=$request->txtCategory;
        $product->title=$request->txtTitle;
        $product->heading=$request->txtHeading;
        $product->price=$request->txtPrice;
        $product->details=$request->txtDetails;

        $product->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$product->image=$imageName;
			$product->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        if(isset($request->fileAttach)){
			$attach_fileName = (rand(100,1000)).'.'.$request->fileAttach->extension();
			$product->attach_file=$attach_fileName;
			$product->update();
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}
        $product->save();
               
        return back()->with('success','Created Successfully.');
          
    }

   
    public function edit($id){
		$product=Product::find($id);
		return response()->json([
			'status'=>200,
			'product'=>$product
		]);
	}

    public function update(Request $request){
        //		$product->update($request->all());
            $productid=$request->input('cmbProductId');
            $product = Product::find($productid);
            $product->id=$request->cmbProductId;
            $product->category=$request->txtCategory;
            $product->title=$request->txtTitle;
            $product->heading=$request->txtHeading;
            $product->price=$request->txtPrice;
            $product->details=$request->txtDetails;
       
            $product->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $product->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
    
            if(isset($request->fileAttach)){
                $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
                $product->attach_file=$attach_fileName;
                $request->fileAttach->move(public_path('img'),$attach_fileName);
            }
            $product->update();
            return redirect()->back()
            ->with('success',' Updated successfully');
        }


    public function destroy(Request $request){  
        $productid=$request->input('d_product');
		$product= Product::find($productid);
		$product->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
