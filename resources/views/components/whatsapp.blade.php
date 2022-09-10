<div class="zap-a">
    <img class="img" src="assets/images/whatsapp/zap-a.png" alt="">
</div>
<div class="zap-a-content">
    <div class="title">
        <div class="row">
            <div class="col">
                <img class="img" src="assets/images/whatsapp/zap-a.png" alt="">
                <span>WhatsApp</span>
            </div>
            <div class="col">
                <div class="close">
                    X
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="whatsappme__message">
            Possui alguma dúvida ou está interessado em nossos serviços? Fale conosco agora!
        </div>
        <a href="https://api.whatsapp.com/send?phone=5573999412514&text=Estou interessados em saber mais sobre seus serviços" target="_blank" class="btn-whatsapp close">
            Enviar WhatsApp
        </a>
    </div>
</div>

<script>
    document.querySelector('.zap-a').addEventListener('click', function () {
        document.querySelector('.zap-a-content').style.display = 'flex';
    })

    document.querySelector('.zap-a-content .close').addEventListener('click', function(event){
        event.target.parentElement.parentElement.parentElement.parentElement.style.display = 'none';
    });
</script>
