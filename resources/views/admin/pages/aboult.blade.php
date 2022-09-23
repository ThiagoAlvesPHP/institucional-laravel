<section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 {{$path}}" id="{{$path}}">
    <h4 class="title">{{__('Update')}}</h4>

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
            <form action="{{ route('aboult.update', [$data['aboult']->id]) }}" method="post">
                @csrf
                <label for="name">Título</label>
                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror form-control" value="{{ $data['aboult']->name ?? '' }}">
                <label for="text">Descrição</label>
                <textarea name="text" id="text" cols="30" class="@error('text') is-invalid @enderror form-control" rows="10">{{ $data['aboult']->text ?? '' }}</textarea>
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
        <div class="col">
            <img src="{{ asset('assets/images/'.$data['aboult']->image ?? '') }}" class="img-fluid" alt="...">
            <form action="{{ route('aboult.update', [$data['aboult']->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file">Subir Arquivo</label>
                <input type="file" class="form-control" name="image" id="file">
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</section>
