<footer class="footer">
    <div class="row">
        <div class="col text-social">
            <img src="<?=$data[0]['logo'] ?? '' ?>" class="logo" width="150" alt="Logo">
            <p class="text"><?=$data[0]['text'] ?? '' ?></p>
            <div class="social">
                @if ($data[0]['social'])
                    @foreach ($data[0]['social'] as $value)
                        <a href="<?=$value['link'] ?? '' ?>" class="link-social" title="<?=$value['title'] ?? '' ?>">
                            <img src="<?=$value['icon'] ?? '' ?>" width="30" height="30" alt="<?=$value['title'] ?? '' ?>">
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col text-contact">
            <p class="title">Fale Conosco</p>
            <div class="texts">
                <p class="address">Santa Catarina</p>
                <p class="address">Rua Botuverá, 261, Apt.: 102</p>
                <p class="address">Dom Joaquim - Brusque/SC</p>
            </div>
            <p class="title">Comercial</p>
            <div class="texts">
                <a href="tel:+5547992800841">+55 (47) 99280-0841</a>
            </div>
        </div>
        <div class="col text-menu">
            <a href="{{ route('home') }}#home" class="link-menu">Home</a>
            <a href="{{ route('home') }}#aboult" class="link-menu">Sobre</a>
            <a href="{{ route('home') }}#customers" class="link-menu">Clientes</a>
            <a href="{{ route('home') }}#products" class="link-menu">Produtos</a>
            <a href="{{ route('home') }}#contact" class="link-menu">Contato</a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/slick.min.js"></script>
