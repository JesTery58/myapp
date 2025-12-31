<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DOSYA YÖNETİCİSİ</title>
    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" href="{{ asset('admin/uploader/css/elfinder.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/uploader/css/theme.css') }}">
    <!-- elFinder JS (REQUIRED) -->
    <script type="text/javascript" src="{{ asset('admin/uploader/js/elfinder.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/uploader/js/i18n/elfinder.tr.js') }}"></script>
    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">
        // Helper function to get parameters from the query string.
        function getUrlParam(paramName) {
            var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i');
            var match = window.location.search.match(reParam);
            return (match && match.length > 1) ? match[1] : '';
        }
        $().ready(function () {
            var funcNum = getUrlParam('CKEditorFuncNum');
            var elf = $('#elfinder').elfinder({
                url : '{{ url ("/assets/uploader/php/connector.php") }}',  // connector URL (REQUIRED)
                getFileCallback: function (file) {
                    window.opener.CKEDITOR.tools.callFunction(funcNum, file);
                    window.close();
                },
                resizable: false
            }).elfinder('instance');
        });
    </script>
</head>
<body>
<!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>
</body>


</html>
