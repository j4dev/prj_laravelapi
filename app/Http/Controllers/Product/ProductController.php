<?php
//<project>/app/Http/Controllers/Product/ProductController.php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $oCollection = Product::all();
        return $this->showAll($oCollection);
    }//index

    /**
     * Display the specified resource.
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $this->showOne($product);
    }//show
    
}//ProductController
