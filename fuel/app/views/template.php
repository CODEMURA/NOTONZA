<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NOTONZA</title>
    <meta name="description" content="休日もPC">
    <link rel="stylesheet" href="assets/css/notonza.css" media="all">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script>
        $(function () {

            var date = new Date();
            var y = date.getFullYear();
            var m = date.getMonth() + 1;

            var hideMonthBefore = function () {
                if($('[name=year_to]').val() == y){

                    for(i = 0; i < m; i++){
                        $('[name=month_to] option').eq(i).hide();
                    }
                }else{
                    for(i = 0; i < m; i++){
                        $('[name=month_to] option').eq(i).show();
                    }
                }
            };

            hideMonthBefore();
            $('[name=year_to]').change(function(){
                hideMonthBefore();
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