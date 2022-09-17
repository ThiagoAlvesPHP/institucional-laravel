<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 {{$path}}" id="{{$path}}">
    <div class="row">
        <div class="col">
            <h4 class="title">Atualizar</h4>

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
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="file" name="image" id="file">
                <label for="file">Subir Arquivo</label>
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</main>
