@extends("crud.layout")

@section("title", "Add Device")

@section("body")

<h2>Add Device</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel panel-primary">
    <div class="panel-heading">
        Add Device
        <a class="btn btn-warning pull-right" style="margin-top: -7px;" href="{{route('device.index')}}">List Devices</a>
    </div>
    <div class="panel-body">

        <form class="form-horizontal" action="{{ route('device.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="status">Status:</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
