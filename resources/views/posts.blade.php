@include('partials.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leony's Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- partial:index.partial.html -->
<section class="section-products">
    <div class="container">
            <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                            <div class="header">
                                    <h3>Leony Collection</h3>
                                    <h2>Popular Products</h2>
                            </div>
                    </div>
            </div>
            
                
            
            <div class="row">
                @foreach ($list as $baju)
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-1" class="single-product">
                                <div class="card shadow  " style="width: 18rem;">
                                    <img src="fotoBaju/{{ $baju->foto }}" class="card-img-top " alt="Gamis">
                                    
                                        
                                            
                                    </div>
                                    <div class="part-2">
                                            <h3 class="product-title">
                                                @if ($baju->kodeBaju ==="G01")
                        {{  $result[0]['jenisBaju']}}
                    @elseif($baju->kodeBaju ==="O02")
                    {{  $result[1]['jenisBaju']}}
                    @elseif($baju->kodeBaju ==="H03")
                    {{  $result[2]['jenisBaju']}}
                    @elseif($baju->kodeBaju ==="A04")
                    {{  $result[3]['jenisBaju']}}
                    @endif
                                            </h3>
                                            <h4 class="product-price">{{ $baju->ukuran }}</h4>
                                            <br>
                                            <h4 class="product-price">Stok : {{ $baju->jumlah }}</h4>
                                            
                                            
                                    </div>
                            </div>
                    </div>
                    @endforeach
                    
            </div>
            
</section>
<!-- partial -->
    
</body>
</html>