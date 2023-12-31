<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryGraphController extends Controller
{
    public function index(){
        $category_total_price = DB::table('category')
        ->join('products','category.id','=','products.category_id')
        ->selectRaw("sum(price*stock) as category_total_price, category_name")
        ->groupBy (DB::raw('category_name'))
        ->pluck('category_total_price','category_name');
        $labels = $category_total_price->keys();
        $data = $category_total_price->values();
        return view('category.category_graph',compact('labels','data'));

    }
}