@include('partials.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Leony's Blog</title>
</head>
<body >
    <div class="container">
        {{-- <div class="card"> --}}
            <div class="row justify-content-center">
                <h1 class="text-center">Selamat Datang di website Leony
                @if (auth()->user())
                    {{ auth()->user()->name }}
                @endif
            </h1>

                <div class="card shadow " style="width: 18rem;">
                    <img src="img/dendi.jpg" class="card-img-top mt-2" alt="Dendi Rizal Fauzi">
                    
                    <div class="card-body">
                      <p class="card-text text-center">Dendi Rizal Fauzi</p>
                      <p class="card-text text-center">10120765</p>
                      <p class="card-text text-center">Informatika 9</p>
                    </div>
                </div>
                  </div>
                

            </div>
            
            
        {{-- </div> --}}
    </div>
    
</body>
</html>l
        
   