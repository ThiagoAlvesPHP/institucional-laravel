<section id="home" class="banner">
    <div class="description">
        <h1 class="title"><?=$data['title'] ?? 'LT Developer'; ?></h1>
        <p class="text"><?=$data['text'] ?? ''; ?></p>
        <a href="<?=$data['link'] ?? ''; ?>" class="link"><?=$data['link_text'] ?></a>
    </div>
    <div class="img">
        <img src="assets/images/<?=$data['image'] ?? ""; ?>" alt="Banner" width="100%" class="banner-img">
    </div>
</section>