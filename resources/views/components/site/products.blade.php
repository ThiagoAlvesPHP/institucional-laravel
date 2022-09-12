<section class="products" id="products">
    <h3 class="title">Conheça nossos produtos!</h3>

    <div class="row carousel-products">
        @foreach ($data as $value)
            <div class="items">
                <img src="assets/images/<?=$value['image'] ?? ''; ?>" width="100%" class="image-customer" alt="<?=$value['name'] ?? ''; ?>">
                <p class="text"><?=$value['name'] ?? ''; ?></p>
                <a class="link" href="#"><?=$value['link_text'] ?? ''; ?></a>
            </div>
        @endforeach
    </div>
</section>

<script defer src="assets/js/custom/products.js"></script>
