<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$beer->brand}} {{$beer->name}}</title>
</head>
<body>
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
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">{{$beer->id}}</th>
                <th scope="col">{{$beer->brand}}</th>
                <th scope="col">{{$beer->name}}</th>
                <th scope="col">{{$beer->gradation}}</th>
                <th scope="col">{{$beer->type}}</th>
                <th scope="col">{{$beer->brewery}}</th>
                <th scope="col"><img src={{$beer->image}} alt=""></th>
              </tr>
        </tbody>
      </table>
</body>
</html>
