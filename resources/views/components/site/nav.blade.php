<nav class="navbar">
    <ul class="logo">
        <li class="link-logo">
            <a href="{{ route('home') }}" class="link-menu">
                <img src="assets/<?=$data->logo; ?>" width="150" alt="Logo">
            </a>
        </li>
    </ul>
    <ul class="links">
        <i class="far fa-times-circle close"></i>
        <li>
            <a href="{{ route('home') }}#home" class="link-menu">Home</a>
        </li>
        <li>
            <a href="{{ route('home') }}#aboult" class="link-menu">Sobre</a>
        </li>
        <li>
            <a href="{{ route('home') }}#projects" class="link-menu">Projetos</a>
        </li>
        {{-- <li>
            <a href="{{ route('home') }}#products" class="link-menu">Produtos</a>
        </li> --}}
        <li>
            <a href="{{ route('home') }}#contact" class="link-menu">Contato</a>
        </li>
    </ul>
    <ul class="bar-mobile">
        <li>
            <i class="fas fa-bars show"></i>
        </li>
    </ul>
</nav>

<script src="assets/js/custom/navbar.js"></script>
