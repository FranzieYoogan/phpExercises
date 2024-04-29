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

       

        <form method="POST" action="/agetodays" class="containerItems">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Year</label>
              <input type="number" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"z>
             
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Month</label>
                <input type="number" name="month" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"z>
               
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Days</label>
                <input type="number" name="day" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"z>
               
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age in Days</label>
                <input type="text" name="result" id="result" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
               
              </div>
          
            <button type="submit" class="btnStyle btn btn-primary">Submit</button>
          </form>

          

    </section>

    <div style="text-align: center; margin-top: 1em">

        @if(isset($convert))

        <h1 id="resultH1" style="display: none">{{$convert}}</h1>

       <script>

            document.getElementById('result').value = document.getElementById('resultH1').innerHTML;

       </script>

        @endif

        @if(isset($error))

        <script>

     document.getElementById('result').value = "0";

        </script>
    

        @endif

      

      </div>

    </div>
    
</body>
</html>