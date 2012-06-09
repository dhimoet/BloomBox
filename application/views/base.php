<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
    <META content='INDEX,FOLLOW' name='ROBOTS'></META>
    <meta content="bloombox, photography, bloomboxphoto, indonesia, canada, toronto" name='Keywords'/>
    <meta content="BloomBoxPhoto.com" name='Description'/>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
  
<?if(isset($page_css)) foreach($page_css as $item) {?>
    <link rel="stylesheet" type="text/css" href="/public/css/<?=$item;?>.css" />
<?}?>

<?if(isset($page_js)) foreach($page_js as $item) {?>
    <script type="text/javascript" src="/public/js/<?=$item;?>.js"></script>
<?}?>

    <title>BloomBoxPhoto <?=isset($page_title)?'| '.$page_title:'';?></title>
  
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
<?include($this->page_view);?>

</body>
</html>
