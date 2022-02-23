@extends('layouts.admin')

@section('header_title')
<h1>Factory details</h1>
@stop

@section('body_content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div>
                    <b>Ref:</b> {{ $factory->ref }}
                </div>
                <div>
                    <b>Name:</b> {{ $factory->name }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div>
                    <b>Year of creation:</b> {{ $factory->year_of_creation }}
                </div>
                <div>
                    <b>Location:</b> {{ $factory->location }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div>
                    <b>Revenues:</b> {{ $factory->revenues }}
                </div>
                <div>
                    <b>Employees:</b> {{ $factory->employes }}
                </div>
            </div>
        </div>
    </div>
</div>
<h3>Products</h3>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body">
                <table id="product-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Factory</th>
                            <!--<th>Year of creation</th>-->
                            <th>Revenues</th>
                            <th>Sold count</th>
                            <!--<th>Image</th>-->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($factory->products as $product)
                        <tr>
                            <td>{{ $product->ref }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->factory->name }}</td>
                            <td>{{ $product->revenues }}</td>
                            <td>{{ $product->sold_count }}</td>
                            <td>
                                <a href="{{ route('products.edit',$product->id) }}" class="fa fa-edit"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
@section('page_css')
<link rel="stylesheet" href="{{ asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{ asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
@stop
@section('page_js')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
$(function () {
    $('#product-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "autoWidth": true,
        "responsive": false,
    });
});
</script>
@stop