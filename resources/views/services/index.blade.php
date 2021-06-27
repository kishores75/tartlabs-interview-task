@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Services</h2>
            </div>
            <div class="pull-right">
                @can('service-create')
                    <a class="btn btn-success" href="{{ route('services.create') }}"> Create New Service</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($services as $service)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $service->name }}</td>
	        <td>{{ $service->detail }}</td>
	        <td>
                <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a>
                    @can('service-edit')
                        <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('service-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
    {!! $services->links() !!}
@endsection