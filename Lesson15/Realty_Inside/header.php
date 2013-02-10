<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
	<!--HEADER-->
    <div id="header">
    <div class="background"><img src="<?php bloginfo('template_directory'); ?>/images/main-background.jpg" width="1080" height="549" alt="background Rielty-Inside" />
    </div>
    	<a href="/" title="Rielty-Inside"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="298" height="74" alt="Rielty-Inside" title="Rielty-Inside" /></a>
        <ul class="languages">
        	<li><a class="english" href="#" title="English">English</a></li>
            <li><a class="montenegro" href="#" title="Црногорац">Црногорац</a></li>
            <li><a class="ukraine" href="#" title="Українська">Українська</a></li>
        </ul>

    <!--BANNER-->
    <div id="banner">
        <div id="slideshow">
            <ul class="slides">
                <li><img src="<?php bloginfo('template_directory'); ?>/images/banner_img.jpg" width="507" height="362" alt="Rielty-Inside" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/1.jpg" width="507" height="362" alt="Marsa Alam underawter close up" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" width="507" height="362" alt="Turrimetta Beach - Dawn" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/3.jpg" width="507" height="362" alt="Power Station" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/4.jpg" width="507" height="362" alt="Colors of Nature" /></li>
            </ul>
        	<span class="arrow previous"></span>
            <span class="arrow next"></span>
        </div>
        <div class="banner_menu">
        	<img src="<?php bloginfo('template_directory'); ?>/images/realt-inside_5_years.png" width="79" height="100" alt="rielty-inside-5-yers" title="5 years"/>
        	<a class="clear" href="#">Читать подробнее>></a>
            <a class="choose_form">Поиск</a>
            	 <ul>
                    <li>
                        <select>
                            <option>Тип недвижимости</option>
                        </select>
                    </li>
                    <li>    
                        <select>
                            <option>Местоположение</option>
                        </select>
                    </li>
                	<li>    
                        <select>
                            <option>Стоимость</option>
                        </select>
                    </li>
                    <li>    
                        <select>
                            <option>Площадь</option>
                        </select>
                    </li>
                    <li>    
                        <select>
                            <option>Класс</option>
                        </select>
                    </li>
                </ul>
            
        </div>
    </div>
    <!--NAV-->
    <div id="nav">
    	<?php wp_nav_menu(); ?>
       
    </div>
 </div>
