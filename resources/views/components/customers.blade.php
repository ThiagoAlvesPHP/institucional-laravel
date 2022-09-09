<section class="customers" id="customers">
    <h3 class="title"><?=$data['title'] ?? ''; ?></h3>
    <div class="carousel-customers">
        @foreach ($data['images'] as $value)
            <img src="<?=$value; ?>" width="100%" class="image-customer" alt="Customers">
        @endforeach
    </div>
</section>

<script defer src="assets/js/custom/customers.js"></script>
