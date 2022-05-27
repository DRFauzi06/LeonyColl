
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Leony's Blog</title>
</head>
<body>
  @include('partials.navbar')
  <h1 class="text-center mb-5">Edit Data</h1>
    <div class="container-sm md-5">
        <div class="row">
          <div class="card">
            <form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                </div>
                <div class="mb-3">
                  <label for="kodeBaju" class="form-label">Kode Baju</label>
                  <select class="form-select"  id="kodeBaju" name="kodeBaju">
                    <option selected value={{ $data->kodeBaju }}>{{ $data->kodeBaju }}</option>
                    {{-- @foreach ($kode as $row ) --}}
                    <option value="G01">G01</option>
                    <option value="O02">O02</option>
                    <option value="H03">H03</option>
                    <option value="A04">A04</option>
                    {{-- @endforeach --}}
                  </select>
                </div>
                {{-- <div class="mb-3">
                  <label for="">Nama Baju</label>
                  <input type="text" id="jenisBaju" name="jenisBaju" class="form-control">
                </div> --}}
                <div class="mb-3">
                    <label for="ukuranBaju" class="form-label">Ukuran Baju</label>
                    <select class="form-select form-select-sm" id="ukuranBaju" name="ukuran">
                      <option selected={{ $data->ukuran }}>{{ $data->ukuran }}</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="All Size">All Size</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jumlahBaju" class="form-label">Jumlah Baju</label>
                    <input type="text" class="form-control" id="jumlahBaju" name="jumlah" value={{ $data->jumlah }}>
                </div>
                <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" class="form-control" id="foto" name="foto" value={{ $data->foto }}>
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            
          </div>
        </div>

    </div>
    
</body>
</html>
