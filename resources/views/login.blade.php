@include('partials.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leony's Blog</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body> 
    
    
	
    <div class="container-sm ">
        {{-- <div class="row d-flex justify-content-center align-item-center" >
          <div class="col-md-6 offset-md-3"> --}}
            <h2 class="text-center text-dark mt-5">Login Form</h2>
            
            <div class="card my-5 ">
    
              <form class="card-body cardbody-color p-lg-5" action="/logincek" method="POST">
                @csrf
    
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
    
                <div class="mb-3">
                  <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                    placeholder="Username" name="name">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
                <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                  Registered? <a href="/register" class="text-dark fw-bold"> Create an
                    Account</a>
                </div>
              </form>
            </div>
    
          {{-- </div>
        </div> --}}
      </div>
</body>
</html>