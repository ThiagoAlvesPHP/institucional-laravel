<section class="projects" id="projects">
    <h3 class="title">Projetos entregues para empresas de todos os portes</h3>
    <div class="carousel-projects">
        @foreach ($data as $value)
            <img src="assets/images/projects/<?=$value['image']; ?>" width="100%" class="image-projects" alt="<?=$value['name']; ?>">
        @endforeach
    </div>
</section>

<script defer src="assets/js/custom/projects.js"></script>
