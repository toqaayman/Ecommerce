@extends('dashboard.common.app')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Product</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>selling price</th>
                            <th>discount</th>
                            <th>quantity</th>
                            <th>Manufacturer</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if(count($products) >0)
                            @foreach($products as $k=>$product)
                                <tr>
                                    <td>{{$k +1}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->selling_price}}</td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->Manufacturer}}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                no data
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                {!! $products->render() !!}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
