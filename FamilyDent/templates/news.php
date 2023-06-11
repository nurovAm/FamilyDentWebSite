<section class="news">
            <div class="wrapper">
                <h2 class="news__title title">
                    Новости
                </h2>
                <ul class="news__list">
                <?php 
                    $news = get_news_all();
                    foreach($news as $new):
                        $author = get_author_by_id($new["id_personal"]);
                ?>
                
                    <li class="news__item">
                        <img src="<?php echo $new["photo"]?>" alt="" class="news__img">
                        <span class="news__author"><?php echo $author["surname"], " ", $author["name"]," ", $author["lastname"];?></span>
                        <h4><?php echo $new["name"]?></h4>
                        <a href="#" class="news__more">Подробнее</a>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
        </section>