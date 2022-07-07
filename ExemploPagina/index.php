<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once './head.php';
        ?>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="slider">
            <ul class="slides">
                <input type="radio" name="radio-btn" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://www.cafeboutiquecafeteria.com.br/slider/slider-02.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-6" class="prev">&#x2039;</label>
                        <label for="img-2" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-2" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://www.cafeboutiquecafeteria.com.br/slider/slider-03.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-1" class="prev">&#x2039;</label>
                        <label for="img-3" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-3" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://www.cafeboutiquecafeteria.com.br/slider/slider-04.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-2" class="prev">&#x2039;</label>
                        <label for="img-4" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-4" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://www.cafeboutiquecafeteria.com.br/slider/slider-05.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-3" class="prev">&#x2039;</label>
                        <label for="img-5" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-5" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://www.cafeboutiquecafeteria.com.br/slider/slider-06.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-4" class="prev">&#x2039;</label>
                        <label for="img-6" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-6" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://www.cafeboutiquecafeteria.com.br/slider/slider-08.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-5" class="prev">&#x2039;</label>
                        <label for="img-1" class="next">&#x203a;</label>
                    </div>
                </li>

                <li class="nav-dots">
                    <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                    <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                    <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                    <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                    <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                    <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                </li>
            </ul>
        </div>
        <div id="resumo">
            <div class="artigo">
                <div class="imgArt">
                    <img src="imagens/19.jpg"/>
                </div>
                <div class="texArt">
                    <p>Fatia de bolo com Cappuccino</p>
                </div>
            </div>
            <div class="artigo">
                <div class="imgArt">
                    <img src="imagens/22.jpg"/>
                </div>
                <div class="texArt">
                    <p>Bolo de Laranja</p>
                </div>
            </div>
            <div class="artigo">
                <div class="imgArt">
                    <img src="imagens/25.jpg"/>
                </div>
                <div class="texArt">
                    <p>Torta de Morango</p>
                </div>
            </div>
        </div>
        <div id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3720228614625!2d-49.0651470853636!3d-26.923418183123015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df18eb1bfacb91%3A0x9fb645ac435b91ee!2sCaf%C3%A9+Boutique+Cafeteria!5e0!3m2!1spt-BR!2sbr!4v1504734714843" width="1280" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
