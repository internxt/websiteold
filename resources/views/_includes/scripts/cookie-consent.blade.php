<script>
        loadJS("{{ asset('js/analytics.js') }}")
</script>

<!--
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>

    var popup;

    window.addEventListener("load", function(){
        loadJS("{{ asset('js/analytics.js') }}")

        window.cookieconsent.initialise({
            "type": "opt-in",
            "content": {
                "message": "We use cookies",
                "allow": "Accept"
            },
            "revokable": true,
            // revokable:true,
            onInitialise: function (status) {
                if(this.hasConsented()){
                    console.debug('Enabling cookies...');
                    // loadJS("{{ asset('js/analytics.js') }}")
                }
            },
            onStatusChange: function(status) {
                if(this.hasConsented()){
                    console.debug('Enabling cookies...');
                    // loadJS("{{ asset('js/analytics.js') }}")
                }
            },
        }, function (thisPopup) {
            popup = thisPopup;
        });
    });

</script>
-->