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

</section>
