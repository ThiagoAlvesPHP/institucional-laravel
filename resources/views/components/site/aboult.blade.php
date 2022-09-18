<section id="aboult" class="aboult" style="background-image: url('assets/images/{{$data->image ?? ""}}')">
    <div class="row">
        <div class="col texts">
            <h3 class="title">{{$data->name ?? ''}}</h3>
        </div>
        <div class="col image">
            <p class="description">{{$data->text ?? ''}}</p>
        </div>
    </div>
</section>
