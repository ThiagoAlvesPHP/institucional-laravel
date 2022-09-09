<section class="products" id="products">
    <h3 class="title"><?=$data['title'] ?? ''; ?></h3>

    <div class="row carousel-products">
        @foreach ($data['list'] as $value)
            <div class="items">
                <img src="<?=$value['image'] ?? ''; ?>" width="100%" class="image-customer" alt="Customers">
                <p class="text"><?=$value['title'] ?? ''; ?></p>
                <a class="link" href="<?=$value['image'] ?? ''; ?>">Saiba Mais</a>
            </div>
        @endforeach
    </div>
</section>

<script defer src="assets/js/custom/products.js"></script>
