<?=doctype('html4-trans');?>

<html>
<head>
	<META content='INDEX,FOLLOW' name='ROBOTS'></META>
	<meta content="bloombox, photography, bloomboxphoto, indonesia, canada, toronto, dhimoet.com" name='Keywords'/>
	<meta content="BloomBoxPhoto.com" name='Description'/>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
    
	<title><?=$title?></title>
	
	<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/validationEngine.jquery.css" />
	
	<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/static/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="/static/js/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="/static/js/underscore-min.js"></script>
	<script type="text/javascript" src="/static/js/backbone-min.js"></script>
	<script type="text/javascript" src="/static/js/script.js"></script>
	
	<?if(!DEV_SITE) {?>
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
    <?}?>
    
</head>
<body id="<?=$id?>">

