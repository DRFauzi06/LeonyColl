@include('partials.navbar')
<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Leony's Blog</title>
  </head>
  <body>
    {{-- Pop up Input Script --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <h1 class="text-center">Data Baju</h1>
    <div class="container-sm">
      <div class="row">
      
        @if ($pesan = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $pesan }}</strong>
                
            </div>
            @endif
        
        
        
        <div class="row">
            <div class="container">
              
              
                    <button type="button" class="btn btn-outline-success  " data-toggle="modal" data-target="#modalInput"><i class="bi bi-plus-square"></i></button>
              
              
                
            </div>
            
            <table class="table table-striped table-hover mt-4">
                <tr>
                    <td>ID</td>
                    <td>Jenis Baju</td>
                    <td>Kode Baju</td>
                    <td>Ukuran</td>
                    <td>Jumlah</td>
                    <td>Aksi</td>
                </tr>
                {{-- @foreach ($result as $hasil) --}}
                
                
                @foreach ($list as $key=>$baju)
                <tr>
                  <td>{{ $key+1 }}</td>
                  
                  <td>
                    @if ($baju->kodeBaju ==="A01")
                        {{  $result[0]['jenisBaju']}}
                    @elseif($baju->kodeBaju ==="D02")
                    {{  $result[1]['jenisBaju']}}
                    @elseif($baju->kodeBaju ==="MD03")
                    {{  $result[2]['jenisBaju']}}
                    @elseif($baju->kodeBaju ==="T04")
                    {{  $result[3]['jenisBaju']}}
                    @endif
                  </td>
                  <td>{{ $baju->kodeBaju }}</td>
                  <td>{{ $baju->ukuran }}</td>
                  <td>{{ $baju->jumlah }}</td>
                  <td>
                    <a href="/baju/{{ $baju->id }}">
                      <button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-square" value={{ $baju->id }}></i></button>
                    </a>
                    <a href="/delete/{{ $baju->id }}">
                      <button type="button" class="btn btn-outline-warning"><i class="bi bi-trash3-fill"></i></button>
                    </a>
                  </td>
              </tr>   

                @endforeach
                
                {{-- @endforeach --}}
                
            </table>

            {{-- Add Popup --}}
            @extends('layouts.input')
            {{-- @extends('layouts.edit') --}}
    </div>

  </div>
    </div>


    

   
  </body>
</html>