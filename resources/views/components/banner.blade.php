<section id="home" class="banner">
    <div class="description">
        <h3 class="title"><?=$data['title'] ?? ''; ?></h3>
        <p class="text"><?=$data['text'] ?? ''; ?></p>
        <a href="<?=$data['link'] ?? ''; ?>" class="link">Clique Aqui</a>
    </div>
    <div class="img">
        <img src="<?=$data['image'] ?? ""; ?>" alt="Banner" width="100%" class="banner-img">
    </div>
</section>
