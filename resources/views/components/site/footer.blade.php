<footer class="footer">
    <div class="row">
        <div class="col text-social">
            <img src="{{ asset('assets/'.$data->logo_dark) }}" width="150" alt="Logo">
            <p class="text"><?=$data->text; ?></p>
            <div class="social">
                @if ($configSocial)
                    @foreach ($configSocial as $value)
                        <a href="<?=$value['link'] ?? '' ?>" class="link-social link-google-analitick" title="{{$value->name ?? ''}}" target="_blank" id="Action Social - {{$value->name ?? ''}}">
                            <img src="assets/images/icons/<?=$value['icon'] ?? '' ?>" width="30" height="30" alt="{{$value->name ?? ''}}">
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col text-contact">
            <p class="title">Fale Conosco</p>
            <div class="texts">
                <p class="address">
                    {{$data->address}} {{$data->address_number}} {{$data->complement}}
                </p>
                <p class="address">
                    {{$data->address_district}} - {{$data->city }}/{{$data->state ?? '' }}
                </p>
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
            {{-- <a href="{{ route('home') }}#products" class="link-menu">Produtos</a> --}}
            <a href="{{ route('home') }}#contact" class="link-menu">Contato</a>
        </div>
    </div>
</footer>
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/google.analytics.events.js') }}"></script>
