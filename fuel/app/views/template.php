<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NOTONZA</title>
    <meta name="description" content="休日もPC">
    <link rel="stylesheet" href="assets/css/notonza.css" media="all">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/codemura.js"></script>
    <script>
        $(function () {
            // カンマを挿入
            $('input').keyup(function () {
                var num = $(this).val();
                console.log(num);

                if (num.length > 3 && num.length % 3 == 1) {
                    console.log("４けた以上");

                }
            });
        });
    </script>
</head>
<body>
<?php echo $menu; ?>
<?php echo $header; ?>
<?php echo $content; ?>
</body>
</html>