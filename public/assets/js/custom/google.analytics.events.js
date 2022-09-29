$(function(){
    $(document).on('click', '.link-google-analitick', function(){
        sendGoogleAnalytic(`${$(this).attr('id')}`);
    });

    function sendGoogleAnalytic(text) {
        gtag('event', 'send', {
            'event_category': text
        });
    }
});


