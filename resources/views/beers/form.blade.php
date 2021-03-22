@php
    if(isset($create) && !empty($create)) {
        $route = route('beers.store');
        $method = 'POST';
    } else {
        $route = route('beers.update', compact('beer'));
        $method = 'PUT';
    }
@endphp

<form action="{{$route}}" method="post">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="brand">Brand</label>
        <input
        class="form-control {{$errors->has('brand') ? 'is-invalid' : '' }}"
        type="text"
        name="brand"
        placeholder="Brand"
        value="{{isset($beer) ? $beer->brand : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('brand')}}
        </div>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input
        class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}"
        type="text" name="name"
        placeholder="Name"
        value="{{isset($beer) ? $beer->name : ''}}">
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
        placeholder="Gradation"
        value="{{isset($beer) ? $beer->gradation : ''}}">
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
        placeholder="Type"
        value="{{isset($beer) ? $beer->type : ''}}">
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
        placeholder="Brewery"
        value="{{isset($beer) ? $beer->brewery : ''}}">
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
        placeholder="Image(URL)"
        value="{{isset($beer) ? $beer->image : ''}}">
    </div>


    <input type="submit" value="Send">
</form>
