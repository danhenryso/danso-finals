@extends('ProductFolder.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>CategoryID</th>
                                        <th>CategoryCode</th>
                                        <th>ProductCode</th>
                                        <th>ProductName</th>
                                        <th>Description</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Price</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->CategoryID}}</td>
                                        <td>{{ $item->CategoryCode}}</td>
                                        <td>{{ $item->ProductCode }}</td>
                                        <td>{{ $item->ProductName }}</td>
                                        <td>{{ $item->Description}}</td>
                                        <td>{{ $item->Size}}</td>
                                        <td>{{ $item->Color}}</td>
                                        <td>{{ $item->Price }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/products/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection