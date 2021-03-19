@extends('template')

@section('content')
<form action="{{route('beers.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="brand">Brand</label>
        <input class="form-control" type="text" name="brand" placeholder="Brand">
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="gradation">Gradation</label>
        <input class="form-control" type="text" name="gradation" placeholder="Gradation">
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input class="form-control" type="text" name="type" placeholder="Type">
    </div>

    <div class="form-group">
        <label for="brewery">Brewery</label>
        <input class="form-control" type="text" name="brewery" placeholder="Brewery">
    </div>

    <div class="form-group">
        <label for="image">Image(URL)</label>
        <input class="form-control" type="text" name="image" placeholder="Image(URL)">
    </div>


    <input type="submit" value="Send">
</form>
@endsection
