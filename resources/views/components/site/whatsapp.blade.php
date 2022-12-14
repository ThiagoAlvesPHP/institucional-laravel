<div class="zap-a link-google-analitick" id="Button Whatsapp">
    <img class="img" src="{{ asset('assets/images/whatsapp/zap-a.png') }}" alt="WhatsApp">
</div>
<div class="zap-a-content">
    <div class="title">
        <div class="row">
            <div class="col">
                <img class="img" src="{{ asset('assets/images/whatsapp/zap-a.png') }}" alt="WhatsApp">
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
            {{__('Do you have any questions or are you interested in our services? Talk to us now!')}}
        </div>
        <a href="{{trim($data->link_whatsapp) ?? ''}}" target="_blank" class="btn-whatsapp close link-google-analitick" id="Action Whatsapp">
            {{__('Send Whatsapp')}}
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
