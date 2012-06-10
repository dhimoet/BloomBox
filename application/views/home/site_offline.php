<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>BloomBox | Site Offline</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
        
        #body_wrapper {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: absolute;
        }
        
        .site_offline_content {
            margin: 20px;
        }
        
        .site_offline_content p {
            font-family: "Comic Sans MS", "Brush Script MT", cursive;
            font-size: 22px;
        }
        
        .site_offline_content a {
            text-decoration: none;
        }
        
        .site_offline_content a:hover {
            font-weight: bold;
        }
        
        .background_1 {
            position: fixed;
            z-index: -1;
            bottom: 10%;
            left: 20px;
            width: 800px;
            opacity: 0.4;
        }
        
        .background_2 {
            position: fixed;
            z-index: -1;
            top: 10%;
            right: -15%;
            width: 1000px;
            opacity: 0.1;
        }
    </style>
    
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
<div id="body_wrapper">
    <div class="site_offline_content">
        <p>Sorry, we are undergoing a construction!</p>
        
        <p>Please send an email to <a href="mailto:ContactUs@bloomboxphoto.com">ContactUs@BloomBoxPhoto.com</a> for any inquiries.</p>
        
        <p>Meanwhile, please visit our blog <a href="http://blog.bloomboxphoto.com/">here</a>!</p>
    </div>
    
    <div class="site_offline_background">
        <img src="/public/img/site/bloombox-title.png" class="background_1" />
        <img src="/public/img/site/bloombox-logo.png" class="background_2" />
    </div>
</div>
</body>
</html>
