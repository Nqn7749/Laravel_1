@extends('layout.admin')

@section('content')
<a href="{{ route('product.add') }}" class="btn btn-primary mb-3">
     Thêm sản phẩm
</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <!-- Xem -->
                    <a href="{{ route('product.detail', $product->id) }}"
                       class="btn btn-info btn-sm">
                        Xem
                    </a>

                    <!-- Sửa -->
                    <a href="{{ route('product.edit', $product->id) }}"
                       class="btn btn-warning btn-sm">
                        Sửa
                    </a>

                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
