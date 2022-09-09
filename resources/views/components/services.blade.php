<section class="services" id="services">
    <div class="img">
        <img src="<?=$data['image'] ?? ""; ?>" alt="Banner" width="100%" class="banner-img">
    </div>
    <div class="description">
        <h3 class="title"><?=$data['title'] ?? ''; ?></h3>
        <p class="text"><?=$data['text'] ?? ''; ?></p>

        <div class="icons">
            @foreach ($data['icons'] as $value)
                <div class="icon">
                    <?=$value['icon'] ?? '' ?>
                    <p class="text"><?=$value['text'] ?? '' ?></p>
                </div>
            @endforeach
        </div>

        <a href="<?=$data['link'] ?? ''; ?>" class="link">
            <i class="fas fa-phone"></i>
            Marcar um call
        </a>
    </div>
</section>
