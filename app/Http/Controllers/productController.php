<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class productController extends Controller
{                                                                         
    function index()
    {

        $products_data =Product::all()->toArray();

        
         
        return view('admin.all-products',compact('products_data'));

    }
    //
    function store(Request $request)
    {

        $request->validate([
      
            'ptitle' => 'required',
            'pslug' => 'required',
            'pprice' => 'required',
            'pdescription' => 'required'

        ],

         [
            'ptitle.required' => 'Product title is required',
            'pslug.required' => 'Product Slung is required',
            'pprice.required' => 'Product Price is required',
            'pdescription.required' => 'Product Description is required',

         ]);

        $product =new Product();
        $product->product_title =$request->ptitle;
        $product->product_slug =$request->pslug;
        $product->product_price =$request->pprice;
        $product->product_description =$request->pdescription;
        $product->product_image ="1";
        $product->save();
        return view('admin.add-product');
    }

function delete($id)
{

    $product = Product::find($id);
    $product->delete();
    $products_data =Product::all()->toArray();
     
    return redirect()->back()->with('products_data',$products_data)->with('success', 'Recod deleted');


}

  function edit($id)
  {
         
    $product = Product::find($id);
    return view('admin.edit-product',compact('product'));

  }
   
  function update(Request $request)
  {

    $request->validate([
      
        'ptitle' => 'required',
        'pslug' => 'required',
        'pprice' => 'required',
        'pdescription' => 'required'

    ],

     [
        'ptitle.required' => 'Product title is required',
        'pslug.required' => 'Product Slung is required',
        'pprice.required' => 'Product Price is required',
        'pdescription.required' => 'Product Description is required',

     ]);

    $product =Product::find($request->sid);

    $product->product_title =$request->ptitle;
    $product->product_slug =$request->pslug;
    $product->product_price =$request->pprice;
    $product->product_description =$request->pdescription;
    $product->product_image ="1";
    $product->save();
    
    return redirect()->back()->with('success','Recod updated');


  }

}
?>