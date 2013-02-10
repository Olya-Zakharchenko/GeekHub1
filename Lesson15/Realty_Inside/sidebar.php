<div id="sidebar">
            <div class="section">
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                
				<?php endif; ?>
           </div>
             <div class="registration">
                <h4>Регистрация</h4>
                <form method="post" id="registration_form" action="#">
                	<ul>
                    	<li><input type="text" id="name" name="name" value="Логин"  /></li>
                    	<li><input type="text" id="password" name="password" value="Пароль" /></li>
                    </ul>
                    <input id="login" type="button" value="Войти" />
                </form>
                <a  href="<?php the_permalink(); ?>"" title="Регистрация">Регистрация</a>
            </div>
            <div class="information">
                <h4>Информация</h4>
                <ul>
                    <li><a href="<?php the_permalink(); ?>"" title="Законодательство">Законодательство</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Гражданство">Гражданство</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Статистика">Статистика</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Виза">Виза</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Карта">Карта</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Разговорник">Разговорник</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Инфраструктура">Инфраструктура</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Валюта">Валюта</a></li>
                    <li><a href="<?php the_permalink(); ?>"" title="Население">Население</a></li>
                </ul>
            </div>
       
    
    </div>