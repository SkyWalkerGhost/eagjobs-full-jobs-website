 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm"> 
                        გასვლა
                    </button>
                </form>
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
        
            <div class="navbar-search-block">
                <form action="{{ route('admin.pages.search.index') }}" method="GET" class="form-inline">
                    <div class="input-group input-group-sm">
                        <input name="search" class="form-control form-control-navbar" type="search" placeholder="მაგ: order_id" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>