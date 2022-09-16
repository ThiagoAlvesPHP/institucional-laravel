<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row">
        <div class="col">
            <h4 class="title">Atualizar</h4>
            <form action="" method="post">
                @csrf
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $data['banner']->title ?? '' }}">
                <label for="text">Descrição</label>
                <textarea name="text" id="text" cols="30" class="form-control" rows="10">{{ $data['banner']->text ?? '' }}</textarea>
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="form-control" value="{{ $data['banner']->link ?? '' }}">
                <label for="link_text">Texto de Link</label>
                <input type="text" name="link_text" id="link_text" class="form-control" value="{{ $data['banner']->link_text ?? '' }}">
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
        <div class="col">
            <img src="{{ asset('assets/images/'.$data['banner']->image ?? '') }}" class="img-fluid" alt="...">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="file" name="image" id="file">
                <label for="file">Subir Arquivo</label>
                <br />
                <div class="d-grid">
                    <button class="btn btn-outline-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</main>
