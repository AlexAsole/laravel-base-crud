@extends('template')

@section('title', 'Beers Table')

@section('content')
<a href={{ route('beers.create') }}><button type="button" class="btn btn-primary new-beer">New Beer</button></a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Name</th>
        <th scope="col">Gradation</th>
        <th scope="col">Type</th>
        <th scope="col">Brewery</th>
        <th scope="col">Reference</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($beers as $beer)
        <tr>
            <th scope="col">{{$beer->id}}</th>
            <th scope="col">{{$beer->brand}}</th>
            <th scope="col">{{$beer->name}}</th>
            <th scope="col">{{$beer->gradation}} %</th>
            <th scope="col">{{$beer->type}}</th>
            <th scope="col">{{$beer->brewery}}</th>
            <th scope="col"><img src={{$beer->image}} alt=""></th>
            <th scope="col" class="d-flex flex-column">
                <a href={{ route('beers.show', compact('beer')) }}>
                    <button class="btn btn-primary" type="submit">
                        <i class="far fa-eye"></i>
                    </button>
                </a>
                <a href={{ route('beers.edit', compact('beer')) }} class="aag-m">
                    <button class="btn btn-primary" type="submit">
                        <i class="far fa-edit"></i>
                    </button>
                </a>
                <form action=" {{ route('beers.destroy', compact('beer')) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </th>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
