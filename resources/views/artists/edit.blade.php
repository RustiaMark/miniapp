@extends('artists.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h3>Edit Artist</h3>
        </div>
        <div class="pull-rigth">
            <a class="btn btn-success" href="{{route('artists.index')}}">Back to Artist List</a>
        </div>
    </div>
</div>

<form action="{{route('artists.update', $artist->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$artist->name}}" class="form-control" placeholder="name">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="description" palceholder="description" class="form-control">{{$artist->description}}</textarea>
            </div>
        </div>

        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection