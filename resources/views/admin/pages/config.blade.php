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
            <h4 class="title">{{__('Company data')}}</h4>

            <form action="{{ route('config.update', [$data['config']->id]) }}" method="post">
                @csrf
                <label for="name">{{__('Name')}}</label>
                <input type="text" name="name" required id="name" class="@error('name') is-invalid @enderror form-control" value="{{ $data['config']->name ?? '' }}">
                <label for="email">{{__('Email')}}</label>
                <input type="text" name="email" required id="email" class="@error('email') is-invalid @enderror form-control" value="{{ $data['config']->email ?? '' }}">
                <label for="phone">{{__('Contact')}}</label>
                <input type="text" name="phone" required id="phone" class="@error('phone') is-invalid @enderror form-control" value="{{ $data['config']->phone ?? '' }}">
                <div class="row">
                    <div class="col">
                        <label for="address_zipcode">{{__('Zipcode')}}</label>
                        <input type="text" name="address_zipcode" id="address_zipcode" required class="@error('address_zipcode') is-invalid @enderror form-control" value="{{ $data['config']->address_zipcode ?? '' }}">
                    </div>
                    <div class="col">
                        <label for="address">{{__('Address')}}</label>
                        <input type="text" name="address" id="address" required readonly class="@error('address') is-invalid @enderror form-control" value="{{ $data['config']->address ?? '' }}">
                    </div>
                    <div class="col">
                        <label for="address_number">Nº</label>
                        <input type="number" name="address_number" id="address_number" class="@error('address_number') is-invalid @enderror form-control" value="{{ $data['config']->address_number ?? '' }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="address_district">{{__('District')}}</label>
                        <input type="text" name="address_district" required readonly id="address_district" class="@error('address_district') is-invalid @enderror form-control" value="{{ $data['config']->address_district ?? '' }}">
                    </div>
                    <div class="col">
                        <label for="complement">{{__('Complement')}}</label>
                        <input type="text" name="complement" id="complement" class="@error('complement') is-invalid @enderror form-control" value="{{ $data['config']->complement ?? '' }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="city">{{__('City')}}</label>
                        <input type="text" name="city" required readonly id="city" class="@error('city') is-invalid @enderror form-control" value="{{ $data['config']->city ?? '' }}">
                    </div>
                    <div class="col">
                        <label for="state">{{__('State')}}</label>
                        <input type="text" name="state" required readonly id="state" class="@error('state') is-invalid @enderror form-control" value="{{ $data['config']->state ?? '' }}">
                    </div>
                    <div class="col">
                        <label for="country">{{__('Country')}}</label>
                        <input type="text" name="country" id="country" class="@error('country') is-invalid @enderror form-control" value="{{ $data['config']->country ?? '' }}">
                    </div>
                </div>

                <br>
                <div class="d-grid">
                    <button name="update-address" value="1" class="btn btn-outline-success">Salvar</button>
                </div>

            </form>
        </div>
        <div class="col">
            <h4 class="title">{{__('Head')}}</h4>

            <form action="{{ route('config.update', [$data['config']->id]) }}" method="post">
                @csrf
                <label for="title">{{__('Title')}}</label>
                <input type="text" name="title" required id="title" class="@error('title') is-invalid @enderror form-control" value="{{ $data['config']->title ?? '' }}">
                <label for="text">{{__('Text')}}</label>
                <textarea name="text" id="text" cols="30" class="@error('text') is-invalid @enderror form-control" rows="10">{{ $data['config']->text ?? '' }}</textarea>
                <label for="keywords">{{__('Keywords')}}</label>
                <input type="text" name="keywords" required id="keywords" class="@error('keywords') is-invalid @enderror form-control" value="{{ $data['config']->keywords ?? '' }}">

                <br>
                <div class="d-grid">
                    <button name="update-head" value="1" class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <h4 class="title">{{__('Metas')}}</h4>

            <form action="{{ route('config.metas.register', [$data['config']->id]) }}" method="post">
                @csrf
                <label for="property">{{__('Property')}}</label>
                <input type="text" name="property" required id="property" class="@error('property') is-invalid @enderror form-control" value="{{ old('property') }}">
                <label for="content">{{__('Content')}}</label>
                <input type="text" name="content" required id="content" class="@error('content') is-invalid @enderror form-control" value="{{ old('content') }}">

                <br>
                <div class="d-grid">
                    <button name="register-metas" value="1" class="btn btn-outline-success">Salvar</button>
                </div>
            </form>

            <hr>

            <ul class="list-group">
                @foreach ($data['metas'] as $value)
                    <li class="list-group-item list-group-item-action list-group-item-info">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('config.meta.delete', [$value->id]) }}" class="btn btn-sm btn-outline-danger">{{__('Delete')}}</a>
                            </div>
                            <div class="col">{{ $value->property ?? '' }}</div>
                            <div class="col">{{ $value->content ?? '' }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col">
            <h4 class="title">{{__('Social')}}</h4>
            <form action="{{ route('config.metas.register', [$data['config']->id]) }}" method="post">
                @csrf
                <label for="name">{{__('Name')}}</label>
                <input type="text" name="name" required id="name" class="@error('name') is-invalid @enderror form-control" value="{{ old('name') }}">
                <label for="link">{{__('Link')}}</label>
                <input type="text" name="link" required id="link" class="@error('link') is-invalid @enderror form-control" value="{{ old('link') }}">
                <label for="icon">{{__('Icon')}}</label>
                <input type="file" name="icon" required id="icon" class="@error('icon') is-invalid @enderror form-control" value="{{ old('icon') }}">

                <br>
                <div class="d-grid">
                    <button name="register-metas" value="1" class="btn btn-outline-success">Salvar</button>
                </div>

                <hr>
                <ul class="list-group">
                    @foreach ($data['social'] as $value)
                        <li class="list-group-item list-group-item-action list-group-item-info">
                            <div class="row">
                                <div class="col">
                                    <a href="{{route('config.social.edit', [$value->id])}}" class="btn btn-sm btn-outline-primary">{{__('Edit')}}</a>

                                    <a class="btn btn-sm btn-outline-danger">{{__('Delete')}}</a>
                                </div>
                                <div class="col">{{ $value->name ?? '' }}</div>
                                <div class="col">{{ Str::substr($value->link, 0, 15) ?? '' }}</div>
                                <div class="col">
                                    <img width="25" src="{{ asset('assets/images/icons/'.$value->icon); }}" alt="">
                                </div>
                                <div class="col"><a href="{{ route('condig.social.status', [$value->id]) }}">{{ $value->status == 1 ? __('Active') :__('Inactive') }}</a></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </form>
        </div>
    </div>

    <hr>
    <script src="{{ asset('assets/js/custom/viacep.js') }}"></script>
    <script src="{{ asset('assets/js/custom/admin.config.js') }}"></script>
</section>
