<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NOTONZA</title>
    <meta name="description" content="休日もPC">
    <link rel="stylesheet" href="assets/css/notonza.css" media="all">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <?= Asset::js("notonza.js"); ?>
</head>
<body>
<?php echo $menu; ?>
<?php echo $header; ?>
<?php echo $content; ?>
</body>
</html>