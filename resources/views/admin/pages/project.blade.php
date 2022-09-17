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

            <form action="{{ route('project.update', ['id' => $data['project']->id]) }}" method="post">
                @csrf
                <label for="name">Projeto</label>
                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror form-control" value="{{ $data['project']->name ?? '' }}">
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
        <div class="col">
            <img src="{{ asset('assets/images/projects/'.$data['project']->image ?? '') }}" class="img-fluid" width="100%" alt="{{ $data['project']->name ?? '' }}">
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
