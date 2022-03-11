<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="{{ url("") }}" class="navbar-brand tm-site-name">AFY IYH</a>
            <nav class="navbar tm-main-nav">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ $judul === "Home" ? 'active' : '' }}">
                            <a href="{{ url("") }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item {{ $judul === "About" ? 'active' : '' }}">   
                            <a href="{{ url("about") }}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item {{ $judul === "Blog" ? 'active' : '' }}">
                            <a href="{{ url("blog") }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item {{ $judul === "Contact" ? 'active' : '' }}">
                            <a href="{{ url("contact") }}" class="nav-link">Contact</a>
                        </li>
                    </ul>                        
                </div>
            </nav>  
        </div>                                  
    </div>            
</div>