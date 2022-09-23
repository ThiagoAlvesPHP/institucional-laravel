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
            <form action="{{ route('services.icon.update', [$data['icon']->id]) }}" method="post">
                @csrf
                <label for="icon">{{__('Icon')}} - <small><a href="https://fontawesome.com/v5/search?m=free" target="_blank">Fontawesome</a> (Apenas a Class)</small></label>
                <input type="text" id="icon" name="icon" class="form-control" value="{{$data['icon']->icon ?? ''}}" required>
                <label for="text">{{__('Text')}}</label>
                <input type="text" id="text" name="text" class="form-control" value="{{$data['icon']->text ?? ''}}" required>

                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</section>
