<!-- page load function and pagitaion function will be same -->

public function product_pagination_data(request $Request){
        $product = DB::table('products')->paginate(1);
        return view('web_pages.product_pagination_data',['product'=>$product]);
    }
