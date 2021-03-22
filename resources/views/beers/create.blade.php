@extends('template')

@section('title', 'New Beer')

@section('content')

<form action="{{route('beers.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="brand">Brand</label>
        <input
        class="form-control {{$errors->has('brand') ? 'is-invalid' : '' }}"
        type="text"
        name="brand"
        placeholder="Brand">
        <div class="invalid-feedback">
            {{$errors->first('brand')}}
        </div>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input
        class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}"
        type="text" name="name"
        placeholder="Name">
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
    </div>

    <div class="form-group">
        <label for="gradation">Gradation</label>
        <input
        class="form-control {{$errors->has('gradation') ? 'is-invalid' : '' }}"
        type="text"
        name="gradation"
        placeholder="Gradation">
        <div class="invalid-feedback">
            {{$errors->first('gradation')}}
        </div>
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input
        class="form-control {{$errors->has('type') ? 'is-invalid' : '' }}"
        type="text"
        name="type"
        placeholder="Type">
        <div class="invalid-feedback">
            {{$errors->first('type')}}
        </div>
    </div>

    <div class="form-group">
        <label for="brewery">Brewery</label>
        <input
        class="form-control {{$errors->has('brewery') ? 'is-invalid' : '' }}"
        type="text"
        name="brewery"
        placeholder="Brewery">
        <div class="invalid-feedback">
            {{$errors->first('brewery')}}
        </div>
    </div>

    <div class="form-group">
        <label for="image">Image(URL)</label>
        <input
        class="form-control"
        type="text"
        name="image"
        placeholder="Image(URL)">
    </div>


    <input type="submit" value="Send">
</form>
@endsection
