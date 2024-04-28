<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('/css/isnumber.css')}}">

</head>
<body>

    @include('header')

    <section class="containerAll">

        <div>

       

        <form method="POST" action="/isnumber" class="containerItems">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter Value</label>
              <input type="text" name="inputValue" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             
            </div>
          
            <button type="submit" class="btnStyle btn btn-primary">Submit</button>
          </form>

          

    </section>

    <div style="text-align: center; margin-top: 1em">

        @if(isset($isnumeric))

        <h1 >Result: {{$isnumeric}}</h1>

        @endif

        @if (isset($isstring))

        <h1>Result: {{$isstring}}</h1>
            
        @endif

        @if (isset($undefined))

        <h1>Result: {{$undefined}}</h1>
            
        @endif

      </div>

    </div>
    
</body>
</html>