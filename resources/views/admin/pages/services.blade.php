<section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 {{$path}}" id="{{$path}}">
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <x-site.alert>
                {{ $error }}
            </x-site.alert>
        @endforeach
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ __(session('status')) }}
        </div>
    @endif
    <div class="row">
        <div class="col">
            <h4 class="title">Atualizar</h4>
            <form action="{{ route('services.update', [$data['services']->id]) }}" method="post">
                @csrf
                <label for="name">Serviço</label>
                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror form-control" value="{{ $data['services']->name ?? '' }}">
                <label for="text">Descrição</label>
                <textarea name="text" id="text" cols="30" class="@error('text') is-invalid @enderror form-control" rows="10">{{ $data['services']->text ?? '' }}</textarea>
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="@error('link') is-invalid @enderror form-control" value="{{ $data['services']->link ?? '' }}">
                <label for="link_text">Texto de Link</label>
                <input type="text" name="link_text" id="link_text" class="@error('link_text') is-invalid @enderror form-control" value="{{ $data['services']->link_text ?? '' }}">

                <label for="link_icon">Icon de Link
                    <small>
                        <a href="https://fontawesome.com/v5/search?o=r&m=free" target="_blank">Fontawesome</a> - Conteúdo da "class" <br>
                        <i>Ex: fas fa-phone</i>
                    </small>
                </label>
                <input type="text" name="link_icon" id="link_icon" class="@error('link_icon') is-invalid @enderror form-control" value="{{ $data['services']->link_icon ?? '' }}">

                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
        <div class="col">
            <img src="{{ asset('assets/images/'.$data['services']->image ?? '') }}" class="img-fluid" width="100%" alt="{{ $data['services']->name ?? '' }}">
            <form action="{{ route('services.update', [$data['services']->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="image" id="file">
                <label for="file">Subir Arquivo</label>
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <h4>Icones</h4>
            <form action="{{ route('services.icon.register') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $data['services']->id ?? '' }}" name="service_id" id="">
                <label for="icon">{{__('Icon')}} - <small><a href="https://fontawesome.com/v5/search?m=free" target="_blank">Fontawesome</a> (Apenas a Class)</small></label>
                <input type="text" id="icon" name="icon" class="form-control" required>
                <label for="text-icon">{{__('Text')}}</label>
                <input type="text" id="text-icon" name="text" class="form-control" required>

                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>

        <div class="col">
            <h4>Lista</h4>
            <ul class="list-group">
                @foreach ($data['icons'] as $value)
                    <li class="list-group-item list-group-item-action list-group-item-info">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('services.icon', ['id' => $value->id]); }}" class="btn btn-sm btn-outline-secondary">{{__('Edit')}}</a>
                            </div>
                            <div class="col"><i class="{{ $value->icon ?? '' }}"></i> <small>| Class: {{ $value->icon ?? '' }}</small></div>
                            <div class="col">{{ $value->text ?? '' }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <hr>
</section>
