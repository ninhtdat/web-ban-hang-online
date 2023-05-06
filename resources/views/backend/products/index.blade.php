@extends('backend/layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
  </div>
</div>
<h2>Danh sách sản phẩm</h2>
<div class="pull-right mb-2">
  <a class="btn btn-success" href="{{ route('sanpham.create') }}"> Add product</a>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">tên</th>
        <th scope="col">hình ảnh</th>
        <th scope="col">giá gốc</th>
        <th scope="col">giá bán</th>
        <th scope="col">loại</th>
        <th scope="col">thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($sanpham as $sanpham)
      <tr>
        <td>{{ $sanpham->id }}</td>
        <td>{{ $sanpham->sp_ten }}</td>
        <td>{{ $sanpham->sp_hinh }}</td>
        <td>{{ $sanpham->sp_giaGoc }}</td>
        <td>{{ $sanpham->sp_giaBan }}</td>
        <td>{{ $sanpham->l_ma }}</td>
        <td>
          <form action="{{ route('sanpham.destroy',$sanpham->id) }}" method="Post">
            <a class="btn btn-primary" href="{{ route('sanpham.edit',$sanpham->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection