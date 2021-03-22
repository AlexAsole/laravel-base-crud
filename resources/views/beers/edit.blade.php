@extends('template')

@section('title', 'Modify Beer')

@section('content')
<form action="{{route('beers.update', compact('beer'))}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="brand">Brand</label>
        <input
        class="form-control"
        type="text"
        name="brand"
        placeholder="Brand"
        value="{{$beer->brand}}">
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input
        class="form-control"
        type="text" name="name"
        placeholder="Name"
        value="{{$beer->name}}">
    </div>

    <div class="form-group">
        <label for="gradation">Gradation</label>
        <input
        class="form-control"
        type="text"
        name="gradation"
        placeholder="Gradation"
        value="{{$beer->gradation}}">
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input
        class="form-control"
        type="text"
        name="type"
        placeholder="Type"
        value="{{$beer->type}}">
    </div>

    <div class="form-group">
        <label for="brewery">Brewery</label>
        <input
        class="form-control"
        type="text"
        name="brewery"
        placeholder="Brewery"
        value="{{$beer->brewery}}">
    </div>

    <div class="form-group">
        <label for="image">Image(URL)</label>
        <input
        class="form-control"
        type="text"
        name="image"
        placeholder="Image(URL)"
        value="{{$beer->image}}">
    </div>


    <input type="submit" value="Send">
</form>
@endsection
