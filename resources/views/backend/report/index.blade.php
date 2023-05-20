@extends('backend/layout')
@section('content')

<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Tìm kiếm..." aria-describedby="basic-addon2" id="search">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">Tìm kiếm</button>
    </div>
  </div>
  
  <ul id="list">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
  </ul>
  
  <script>
  $(document).ready(function(){
    $("#search").on("keyup input", function() {
      var value = $(this).val().toLowerCase();
      $("#list li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  

@endsection