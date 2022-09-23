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

    <h4 class="title">{{$data['social']->name ?? ''}} - <small>{{($data['social']->status) ? 'Ativo':'Inativo'}}</small></h4>

    <div class="row">
        <div class="col">
            <form action="{{ route('config.social.update', [$data['social']->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name">{{__('Name')}}</label>
                <input type="text" id="name" name="name" value="{{$data['social']->name ?? ''}}" class="form-control" required>
                <label for="link">{{__('Link')}}</label>
                <input type="text" id="link" name="link" value="{{$data['social']->link ?? ''}}" class="form-control" required>

                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>

        <div class="col">
            <img src="{{ asset('assets/images/icons/'.$data['social']->icon ?? '') }}" class="img-fluid" width="200" alt="{{$data['social']->name ?? ''}}">
            <form action="{{ route('config.social.update', [$data['social']->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file">Subir Arquivo</label>
                <input type="file" class="form-control" name="icon" id="file">
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>

</section>
