<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DOSYA YÖNETİCİSİ</title>    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" type="text/css" media="screen"
          href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" href="{{ asset('assets/uploader/css/elfinder.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uploader/css/theme.css') }}">
    <script type="text/javascript" src="{{ asset('assets/uploader/js/elfinder.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/uploader/js/i18n/elfinder.tr.js') }}"></script>
    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">        $().ready(function () {
            var eell = $('#elfinder').elfinder({
                url: '{{ url ("assets/uploader/php/connector.php") }}',
                getFileCallback: function (file) {
                    window.opener.processFile(file);
                    window.close();
                },
                resizable: false
            }).elfinder('instance');
        });    </script>
</head>
<body><!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>
</body>
</html>