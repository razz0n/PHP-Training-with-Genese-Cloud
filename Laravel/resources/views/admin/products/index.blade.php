<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
            <table width='900px',allign='center' >
                <tr>
                    <td>ID</td>
                    <td>Product Name</td>
                    <td>Product Description</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{substr($product ->product_name,0,15)}}</td>
                    <td>{{substr($product ->product_desc,0,50)}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="/admin/products/edit/{{$product->id}}">Edit</a> | <a href="#">Delete</a> </td>
                </tr>
                @endforeach
                <a href="/admin/products/create">Create product</a>
            </table>
            </div>
        </div>
    </div>
</x-admin.layout>