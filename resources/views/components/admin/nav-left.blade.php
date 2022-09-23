<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('banner') }}">
                    <span data-feather="file"></span>
                    Banner
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aboult') }}">
                    <span data-feather="shopping-cart"></span>
                    Sobre
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects') }}">
                    <span data-feather="users"></span>
                    Projetos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services') }}">
                    <span data-feather="bar-chart-2"></span>
                    Serviços
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('products') }}">
                    <span data-feather="layers"></span>
                    Produtos
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('config') }}">
                    <span data-feather="layers"></span>
                    Config
                </a>
            </li>
        </ul>
    </div>
</nav>
