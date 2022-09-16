<section class="contact" id="contact">
    <h3 class="title">Fale Conosco</h3>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <x-site.alert>
                {{ $error }}
            </x-site.alert>
        @endforeach
    @endif

    <form action="{{ route('mail') }}" method="POST" class="form-contact">
        @csrf
        <div class="group-inputs">
            <div class="inputs">
                <input type="text" placeholder="Nome" name="name" class="input" id="name" value="{{old('name')}}" required>
            </div>
            <div class="inputs">
                <input type="email" placeholder="E-mail" name="email" class="input" value="{{old('email')}}" id="email" required>
            </div>
        </div>
        <div class="group-inputs">
            <div class="inputs">
                <input type="text" placeholder="Assunto" name="subject" class="input" value="{{old('subject')}}" id="subject" required>
            </div>
            <div class="inputs">
                <input type="text" placeholder="Telefone" class="input" name="phone" value="{{old('phone')}}" id="phone" required>
            </div>
        </div>
        <textarea name="message" id="message" class="textarea" placeholder="Mensagem" cols="30" rows="10">{{old('message')}}</textarea>
        <button class="btn link">Enviar</button>
    </form>
</section>
