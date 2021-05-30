<x-admin.layout>
  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="/admin/products/store" method="POST">
          @csrf
          <h2>Create Product </h2>
          <label>Product Name</label><input id="product_name" type="text" name="product_name" class="form-control"
            value="{{old('product_name')}}" @error('product_name') style="border-color: red" @enderror><br>
          
          @error('product_name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label>Product Description</label><br><textarea name="product_desc" id="product_desc" cols="30" rows="10"
            class="form-control" value="{{old('product_desc')}}" @error('product_desc') style="border-color: red"
            @enderror></textarea>

          @error('product_desc')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label for="">Price:</label><br><input type="text" id="price" name="price" class="form-control"
            value="{{old('price')}}" @error('price') style="border-color: red" @enderror>
          @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <br>

          <select name="category_id" id="category_id" class="form-control" value="{{old('category_id')}}"><br>
            <option @error('category_id') style="border-color: red" @enderror>Select a Category</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}" {{$category->id==old('category_id') ? "selected" : ''}}>
              {{$category->category_name}}</option>
            @endforeach
          </select><br>

          @error('category_id')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <input type="submit" name="submit " value="Save" class="form-control">

        </form>

      </div>

    </div>

  </div> 
</x-admin.layout>