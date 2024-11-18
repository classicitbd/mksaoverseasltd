<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use App\Models\Portfoliocategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio=Portfolio::all();
        $categories=Portfoliocategory::all();

        $portfolio =DB::table('portfoliocategories')
            ->join('portfolios','portfoliocategories.id', '=', 'portfolios.category')
            ->select('portfoliocategories.name', 'portfolios.*')
            ->get();
        //   dd($portfolio);
        return view("pages.backend.portfolio.index_portfolio",["portfolio"=>$portfolio, "portfoliocategories"=>$categories]);
    }

    public function store(Request $request){
        $portfolio=new Portfolio; 
        $portfolio->category=$request->txtCategory;
        $portfolio->title=$request->txtTitle;
        $portfolio->details=$request->txtDetails;

        $portfolio->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
			$imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$portfolio->image=$imageName;
			$portfolio->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        if(isset($request->fileAttach)){
            $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
			$portfolio->attach_file=$attach_fileName;
			$portfolio->update();
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}

        $portfolio->save();      
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$portfolio=Portfolio::find($id);
		return response()->json([
			'status'=>200,
			'portfolio'=>$portfolio
		]);
	}

    
    public function update(Request $request){
        //		$portfolio->update($request->all());
            $portfolioid=$request->input('cmbPortfolioId');
            $portfolio = Portfolio::find($portfolioid);
            $portfolio->id=$request->cmbPortfolioId;
            $portfolio->category=$request->txtCategory;
            $portfolio->title=$request->txtTitle;
            $portfolio->details=$request->txtDetails;
  
            $portfolio->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $portfolio->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
    
            if(isset($request->fileAttach)){
                $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
                $portfolio->attach_file=$attach_fileName;
                $request->fileAttach->move(public_path('img'),$attach_fileName);
            }
            
            $portfolio->update();
            return redirect()->back()
            ->with('success',' Updated successfully');
        }

    
    public function destroy(Request $request){  
        $portfolioid=$request->input('d_portfolio');
		$portfolio= Portfolio::find($portfolioid);
		$portfolio->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
