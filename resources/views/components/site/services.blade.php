<section class="services" id="services">
    <div class="img">
        <img src="assets/images/<?=$data->image ?? ""; ?>" alt="Banner" width="100%" class="banner-img">
    </div>
    <div class="description">
        <h3 class="title"><?=$data->name ?? ''; ?></h3>
        <p class="text"><?=$data->text ?? ''; ?></p>

        <div class="icons">
            @foreach ($data['icons'] as $value)
                <div class="icon">
                    <i class="{{$value->icon ?? ''}}"></i>
                    <p class="text">{{$value->text ?? ''}}</p>
                </div>
            @endforeach
        </div>

        <a href="{{$data->link ?? ''}}" class="link link-google-analitick" id="Button Service - {{$data->link_text ?? ''}}">
            <i class="{{$data->link_icon ?? ''}}"></i>
            {{$data->link_text ?? ''}}
        </a>
    </div>
</section>
