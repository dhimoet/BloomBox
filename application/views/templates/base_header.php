<?=$doctype?>

<html>
<head>
	<META content='INDEX,FOLLOW' name='ROBOTS'></META>
    <meta content="bloombox, photography, bloomboxphoto, indonesia, canada, toronto" name='Keywords'/>
    <meta content="BloomBoxPhoto.com" name='Description'/>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    
	<title><?=$title?></title>
	
	<?foreach($css as $item) {?><link rel="stylesheet" type="text/css" href="<?=$item?>" />
	<?}?><?foreach($js as $item) {?><script type="text/javascript" src="<?=$item?>"></script>
	<?}?><?=(isset($other)) ? $other : "";?>
	
	<script type="text/javascript">
        /*** Google Analytics ***/
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32531428-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>

