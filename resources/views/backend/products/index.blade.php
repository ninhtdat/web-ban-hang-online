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
{{-- <div class="table-responsive">
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
</div> --}}
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4 ">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                      </tr>
                      <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                      </tr>

                  </tbody>
              </table>
          </div>
      </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection