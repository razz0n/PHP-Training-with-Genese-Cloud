<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
            <form action="/admin/products/store" method="POST">
                @csrf
                <h2>Update Product:{{$product->product_name}} </h2>
                <label>Product Name:</label><input type="text" name="product_name" class="form-control" value="{{$product->product_name}}"><br>
                <label>Product Description</label><br><textarea name="product_desc" id="" cols="30" rows="10" class="form-control">{{$product->product_desc}}</textarea><br>
                <label for="">Price:</label><br><input type="text" name="price" class="form-control" value="{{$product->price}}"><br> <br>
                <select name="category_id" id="" class="form-control"><br>
                    <option value="0">Select a Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$category->id==$product->category_id ? 'selected':''}}>{{$category->category_name}}</option>
                    @endforeach
                </select><br><br>
                <input type="submit" name="submit "value="Save" class="form-control">
            </form>
          </div>
        </div>
    </div>
</x-admin.layout>

