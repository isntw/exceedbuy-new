
<script>
    var bkRawUrl = function () {
        return window.location.href
    }();
    (function (doc, scriptPath, apiKey) {
        var sc, node, today = new Date(), dd = today.getDate(), mm = today.getMonth() + 1, yyyy = today.getFullYear();
        if (dd < 10)
            dd = '0' + dd;
        if (mm < 10)
            mm = '0' + mm;
        today = yyyy + mm + dd;
        window.BKShopApiKey = apiKey;
        window.BeeketingApiKey = '';
        sc = doc.createElement("script");
        sc.type = "text/javascript";
        sc.async = !0;
        sc.src = scriptPath + '?' + today;
        node = doc.getElementsByTagName("script")[0];
        node.parentNode.insertBefore(sc, node);
    })(document, 'https://sdk.beeketing.com/js/beeketing.js', '69dbfb9358a80e15fa038375fe95b040');
</script>
