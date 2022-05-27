<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Leony's Blog</a>
      
      <div class="row">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="/">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link " href="/about">About</a>
          </li> --}}
          <li class="nav-item " >
            <a class="nav-link " href="/posts">Posts</a>
          </li>
        
              
          @if (auth()->user())

          @if(auth()->user()->level=="admin")
            <li class="nav-item " >
            <a class="nav-link " href="/baju">Data</a>
            </li>
            @endif
              
          @endif

            
              

          {{-- @endif --}}

          
            
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            @if (auth()->user())
            <a class="nav-link " href="/logout"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
            @else
            <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>

            @endif
          
        </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>