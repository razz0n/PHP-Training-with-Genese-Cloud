<?php


use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // $product1 = array(
//     //     'product_name' => 'First Product',
//     //     'product_desc' => 'This is a new product.'
//     // );
//     // $product2 = array(
//     //     'product_name' => 'Second Product',
//     //     'product_desc' => 'This is a product.'
//     // );
//     // $product3 = array(
//     //     'product_name' => 'Third Product',
//     //     'product_desc' => 'This is a product.'
//     // );
//     // $products = array($product1,$product2,$product3);
//     // return view('products',['products' => $products]);


//     $products = Product::all();
//     return view('products',['products' => $products]);
// });


Route::get('/', function () {
    $products= Product::all();
    return view('products' ,['products' => $products ]);
});
Route::get('/products/{product}', function (Product $product) {
    // $product= Product::find($id);
    return view('product',['product' => $product]);
});

Route::get('/home', [App\Http\Controllers\Admin\ProductsController::class,'index']);

Route::get('/categories/{category}', function(Category $category ){
    // $products = Product::whereCategoryId($category ->id);
    $products = $category->products;
    return view('category',['products' => $products, 'category'=>$category]);
});



// admin route
Route::get('/admin/dashboard',[App\Http\Controllers\Admin\ProductsController::class,'index'])->name('dashboard');
Route::get('/admin/products',[App\Http\Controllers\Admin\ProductsController::class,'index'])->name('product_list');
Route::get('/admin/products/create',[App\Http\Controllers\Admin\ProductsController::class,'create'])->name('create_product');
Route::post('/admin/products/store',[App\Http\Controllers\Admin\ProductsController::class,'store']);
Route::get('/admin/products/edit/{product}',[App\Http\Controllers\Admin\ProductsController::class,'edit']);



    // $product = new Product;
    // $product->product_name = 'Pen';
    // $product->product_desc = ' This is a pen';
    // $product->price = '120';
    // $product->save();
    
    // $product = new Product;
    // $product->product_name = 'Headphone';
    // $product->product_desc = ' This is a headphone';
    // $product->price = '2500';
    // $product->save();
// });

// Route::get('/get_product',function(){
//     $products = Product::get();
//     return $products;
// });

// Route::get('/posts',function(){
//     $post1 = array(
//         'post_name' => 'First Post',
//         'post_desc' => 'This is a post made by me. This is to test post.'
//     );
//     $post2 = array(
//         'post_name' => 'Second Post',
//         'post_desc' => 'This is a post made by me. This is to test post.'
//     );
//     $post3 = array(
//         'post_name' => 'Third Post',
//         'post_desc' => 'This is a post made by me. This is to test post.'
//     );
//     $posts = array($post1,$post2,$post3);
//     return view('post',['posts' => $posts]);
// });

// Route::get('/posts',function(){
//     $posts = Posts::all();
//     return view('post', ['posts' => $posts]);
// });


