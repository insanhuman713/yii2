<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = Yii::$app->name;
?>

<!-- Слайдер -->
<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider">
            <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(/img/home_slider/home_slider1.jpg)"></div>
            <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                <span>Добро пожаловать</span>
                <h2>Digital-агентство<br> We Coders</h2>
                <a class="my-button" href="#about_us">Подробнее</a>
            </div>
        </div>
        <div class="single-slider">
            <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(/img/home_slider/home_slider2.jpg)"></div>
            <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                <span>Работайте с лучшими</span>
                <h2>Судите по результатам</h2>
                <a class="my-button" href="#portfolio">Смотреть работы</a>
            </div>
        </div>
        <div class="single-slider">
            <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(/img/home_slider/home_slider3.jpg)"></div>
            <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                <span>Большой опыт</span>
                <h2>Классный результат</h2>
                <!--<a class="my-button" href="#portfolio">Смотреть работы</a>-->
            </div>
        </div>
    </div>
</section>

<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1">О нас</h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <p>Мы в <b>WeCoders</b> считаем, что любую задачу, даже которая кажется «невозможной» можно
                       решить, чем мы успешно и занимаемся! У нас собрались только творческие и ответственные
                       люди,которым под силу решить любую проблему в сфере digital, чтобы помочь другим бизнесам
                       достичь своих целей. </p>
                    <p>Используя накопленный за многие годы опыт работы с крупными мировыми корпорациями, мы создаем
                       творческие инновации, которые обеспечивают реальные результаты. Прокрутите вниз, чтобы узнать
                       немного о том, кто делает все это.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="img/about/o_nas_text_block.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Основные направления -->
<section class="service-area pt-90 pb-60 bg-color">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Основные направления</h2>
                <p>Всё что нужно для производства сайта любой сложности</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service brand-hover radius-4 mb-30 text-center">
                    <div class="service-icon">
                        <span class="icon-tools " aria-hidden="true"></span>
                    </div>
                    <div class="service-text">
                        <h3>Web-дизайн</h3>
                        <p>Создание индивидуальной концепции, от лаконичных решений до сложных динамических
                           элементов.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service brand-hover radius-4 mb-30 text-center">
                    <div class="service-icon">
                        <span class="icon-mobile" aria-hidden="true"></span>
                    </div>
                    <div class="service-text">
                        <h3>Frontend</h3>
                        <p>Красивая и отзывчивая <b>frontend</b> часть сайта, которая будет отлично работать на всех
                           разрешениях и устройствах.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service brand-hover radius-4 mb-30 text-center">
                    <div class="service-icon">
                        <span class="icon-tools-2" aria-hidden="true"></span>
                    </div>
                    <div class="service-text">
                        <h3>Backend</h3>
                        <p>Стабильный и быстрый <b>backend</b> сайта с гибкой админкой и высоким уровнем безопасности.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Инфографика -->
<section class="project-count-area brand-bg pad-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="single-count white-text text-center">
                    <span class="icon-briefcase "></span>
                    <h2 class="counter">360</h2>
                    <p>Готовых проектов</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="single-count white-text text-center">
                    <span class="icon-wine "></span>
                    <h2 class="counter">690</h2>
                    <p>Чашек кофе выпито</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="single-count white-text text-center">
                    <span class="icon-lightbulb"></span>
                    <h2 class="counter">420</h2>
                    <p>Воплотили супер-йдей</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="single-count white-text text-center">
                    <span class="icon-happy"></span>
                    <h2 class="counter">115</h2>
                    <p>Счастливых клиентов</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Наши работы -->


<section class="work-area pt-90 pb-60" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Портфолио</h2>
                <p>Лучший способ найти хорошую команду - это посмотреть результаты её работы</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu brand-filter text-center mb-70">
                    <div class="filter" data-filter="all">Все</div>
                    <!-- Подгружаю категории -->
                    <?if(isset($category)){?>
                        <?foreach($category as $itemCategory){?>
                            <div class="filter" data-filter="<?='.'.$itemCategory->alias ?? ''?>"><?=$itemCategory->title ?? ''?></div>
                        <?}?>
                    <?}?>
                    
                </div>
            </div>
            <div id="Container">
                <!-- Виды сайтов -->
             <?if(isset($portfolio)){?>
                <?foreach($portfolio as $itemPortfolio){?>
                    <!-- По классам через  Js идет сортировка категорий -->
                    <!-- Получается нужно использовать связанные данные -->
                  <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix 
                    <?=$itemPortfolio->category->alias ?? ''?>">
                        <div class="portfolio-wrapper portfolio-title">
                            <div class="portfolio-img">
                                <!-- Лучше через Html helper выводить, а не просто свойство подставлять -->
                                <?= Html::img("@web/{$itemPortfolio->url}") ?? '' ?>
                                <div class="work-text brand-bg">
                                    <div class="inner-text">
                                    <!-- А здесь можно просто к свойству обратиться -->
                                        <a class="view-portfolio image-link" 
                                               href="<?= $itemPortfolio->url ?? ''?>">
                                            <span class="plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-heading pd-15">
                                <h4 class="mb-10">
                                  <!-- Использую Url helper для правильного отображения поста -->
                                  <!-- index- это наш контроллер -->
                                    <a href="
                                            <?= Url::to(['index/view','id'=>$itemPortfolio->id])?>
                                    ">
                                    <?=$itemPortfolio->title ?? '' ?></a>
                                </h4>
                                <h5 class="m-0"><?=$itemPortfolio->name_action ?? '' ?></h5>
                            </div>
                        </div>
                 </div>
                <?}?>
             <?}?>
              
            </div>
       </div>
                    <div class="nav-links">
                         <!-- выведу погинацию через widget LinkPager-->
                        <?=LinkPager::widget([ 'pagination' => $pages,]);?>
                    </div>
              
    </div>
</section>


<!-- Отзывы клиентов -->
<section class="testimonial-area bg-color pad-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-active dots-style">
                    <?if(isset($reviews)){?>
                          <?foreach($reviews as $review){?>
                             <div class="single-testimonial black-text text-center">
                                    <div class="testimonial-title">
                                        <span class="icon-quote"></span>
                                        <h3 class="black-text">
                                            <?= $review->title?> 
                                        </h3>
                                    </div>
                                    <p><span>"</span> <?= $review->descr?><span>"</span>
                                    </p>
                                    <div class="testimonial-author text-uppercase">
                                        <span><?= $review->author?></span>
                                    </div>
                             </div>
                        <?}?>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</section>