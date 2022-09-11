<footer class="footer">
    <div class="row">
        <div class="col text-social">
            <img src="assets/<?=$data->logo_dark; ?>" width="150" alt="Logo">
            <p class="text"><?=$data->text; ?></p>
            <div class="social">
                {{-- @if ($data[0]['social'])
                    @foreach ($data[0]['social'] as $value)
                        <a href="<?=$value['link'] ?? '' ?>" class="link-social" title="<?=$value['title'] ?? '' ?>">
                            <img src="<?=$value['icon'] ?? '' ?>" width="30" height="30" alt="<?=$value['title'] ?? '' ?>">
                        </a>
                    @endforeach
                @endif --}}
            </div>
        </div>
        <div class="col text-contact">
            <p class="title">Fale Conosco</p>
            <div class="texts">
                <p class="address"><?=$data->state ?></p>
                <p class="address"><?=$data->address.' '.$data->address_number.' '.$data->complement ?></p>
                <p class="address"><?=$data->address_district ?> - <?=$data->city ?></p>
            </div>
            <p class="title">Comercial</p>
            <div class="texts">
                <a href="tel:<?=$data->phone ?>"><?=$data->phone ?></a>
            </div>
        </div>
        <div class="col text-menu">
            <a href="{{ route('home') }}#home" class="link-menu">Home</a>
            <a href="{{ route('home') }}#aboult" class="link-menu">Sobre</a>
            <a href="{{ route('home') }}#projects" class="link-menu">Projetos</a>
            <a href="{{ route('home') }}#products" class="link-menu">Produtos</a>
            <a href="{{ route('home') }}#contact" class="link-menu">Contato</a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/slick.min.js"></script>
