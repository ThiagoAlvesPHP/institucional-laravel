<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 {{$path}}" id="{{$path}}">
    <ul class="list-group">
        @foreach ($data['projects'] as $value)
            <li class="list-group-item list-group-item-action list-group-item-info">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-sm btn-outline-secondary">Editar</a>
                    </div>
                    <div class="col">{{ $value->name ?? '' }}</div>
                    <div class="col">
                        <img src="{{ asset('assets/images/projects/'.$value->image ?? '') }}" class="img-fluid" width="80" alt="{{ $value->name ?? '' }}">
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</main>
