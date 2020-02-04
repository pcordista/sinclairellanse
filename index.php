<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="home-slider-content relative">
    <div class="home-slider relative">
        <div class="home-slider-item relative">
            <img src="assets/img/homeSliderOne.jpg" class="widthfull">
        </div>
        <div class="home-slider-item relative">
            <img src="assets/img/homeSliderTwo.jpg" class="widthfull">
        </div>

    </div>
</div>

<div class="home-intro hide-on-med-and-down">
    <img src="assets/img/intro.jpg" class="widthfull">
    <div class="container">
        <div class="home-intro-one white-text">
            <h4>Ellansé pertence a uma nova geração <BR>
                de produtos da Sinclair.</h4>
            Com ação 2 em 1, é preenchedor e bioestimulador de colágeno, garantindo resultados imediatos e duradouros. Há 10 anos no mercado e presente em mais de 65 países, Ellansé chegou no Brasil em 2018 e já está conquistando os principais profissionais
            do País. Com alta performance e segurança máxima, Ellansé tem garantido grande satisfação dos pacientes.
        </div>
        <div class="home-intro-two black-text">
            Entre suas vantagens estão a correção de rugas e linhas de expressão, remodelação do contorno da face, sustentação e efeito lifting, volumização e estímulo do colágeno natural da pele.
            A partir de 25 anos, o colágeno vai diminuindo e isso contribui
            para o aparecimento de linhas de expressão e flacidez, então este
            é o tratamento ideal para homens e mulheres que desejam retardar ao máximo o processo de envelhecimento.
        </div>
    </div>
</div>

<div class="home-products">
    <div class="title">
        <strong>Regenera naturalmente</strong> o volume da pele<BR>
        e <strong>restaura as formas</strong> que o tempo apagou.
    </div>
</div>

<div class="split-screen-content">
    <div class="containerEighteen">
        <div>
            <div class="center-align margin_1_vert">
                Confira o <strong>antes e depois</strong> das pacientes
            </div>

            <div class="before-after-page split-slider">
                <div>
                    <div class="split-screen twentytwenty-container row">
                        <img src="assets/img/split-before.jpg" class="widthfull" />
                        <img src="assets/img/split-after.jpg" class="widthfull" />
                    </div>
                    <div class="row black white-text before-after relative">
                        <div class="col s12 m12 l6 title">
                            <div class="center-align"><strong class="textUpper bold">valerie</strong></div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    sinais de envelhecimento
                                </div>
                                <div>Flacidez Facil</div>
                                <div>linhas e rugas profundas no rosto</div>
                                <div>linhas mandibular sem contorno e definição</div>
                            </div>
                        </div>
                        <div class="col s12 m12 l6 links">
                            <div class="">
                                <a href="#" class="cta">
                                    Sabine após 24 meses
                                </a>
                            </div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    ANTES ELLANSÉ®
                                </div>
                                <div>Sulcos nasolabiais suavizados</div>
                                <div>Redefinição da linha mandibular</div>
                                <div>Aumento de volume nas maçãs do rosto e região temporal</div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/perfectha.png" alt="">
                </div>
                <div>
                    <div class="split-screen twentytwenty-container row">
                        <img src="assets/img/split-before.jpg" class="widthfull" />
                        <img src="assets/img/split-after.jpg" class="widthfull" />
                    </div>
                    <div class="row black white-text before-after relative">
                        <div class="col s12 m12 l6 title">
                            <div class="center-align"><strong class="textUpper bold">valerie</strong></div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    sinais de envelhecimento
                                </div>
                                <div>Flacidez Facil</div>
                                <div>linhas e rugas profundas no rosto</div>
                                <div>linhas mandibular sem contorno e definição</div>
                            </div>
                        </div>
                        <div class="col s12 m12 l6 links">
                            <div class="">
                                <a href="#" class="cta">
                                    Sabine após 24 meses
                                </a>
                            </div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    ANTES ELLANSÉ®
                                </div>
                                <div>Sulcos nasolabiais suavizados</div>
                                <div>Redefinição da linha mandibular</div>
                                <div>Aumento de volume nas maçãs do rosto e região temporal</div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/ellanse.png" alt="">
                </div>
                <div>
                    <div class="split-screen twentytwenty-container row">
                        <img src="assets/img/split-before.jpg" class="widthfull" />
                        <img src="assets/img/split-after.jpg" class="widthfull" />
                    </div>
                    <div class="row black white-text before-after relative">
                        <div class="col s12 m12 l6 title">
                            <div class="center-align"><strong class="textUpper bold">valerie</strong></div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    sinais de envelhecimento
                                </div>
                                <div>Flacidez Facil</div>
                                <div>linhas e rugas profundas no rosto</div>
                                <div>linhas mandibular sem contorno e definição</div>
                            </div>
                        </div>
                        <div class="col s12 m12 l6 links">
                            <div class="">
                                <a href="#" class="cta">
                                    Sabine após 24 meses
                                </a>
                            </div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    ANTES ELLANSÉ®
                                </div>
                                <div>Sulcos nasolabiais suavizados</div>
                                <div>Redefinição da linha mandibular</div>
                                <div>Aumento de volume nas maçãs do rosto e região temporal</div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/perfectha.png" alt="">
                </div>
                <div>
                    <div class="split-screen twentytwenty-container row">
                        <img src="assets/img/split-before.jpg" class="widthfull" />
                        <img src="assets/img/split-after.jpg" class="widthfull" />
                    </div>
                    <div class="row black white-text before-after relative">
                        <div class="col s12 m12 l6 title">
                            <div class="center-align"><strong class="textUpper bold">valerie</strong></div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    sinais de envelhecimento
                                </div>
                                <div>Flacidez Facil</div>
                                <div>linhas e rugas profundas no rosto</div>
                                <div>linhas mandibular sem contorno e definição</div>
                            </div>
                        </div>
                        <div class="col s12 m12 l6 links">
                            <div class="">
                                <a href="#" class="cta">
                                    Sabine após 24 meses
                                </a>
                            </div>
                            <div class="margin_1_top  textUpper content">
                                <div class="colorYellow bold">
                                    ANTES ELLANSÉ®
                                </div>
                                <div>Sulcos nasolabiais suavizados</div>
                                <div>Redefinição da linha mandibular</div>
                                <div>Aumento de volume nas maçãs do rosto e região temporal</div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/perfectha.png" alt="">
                </div>
            </div>
        <div class="margin_2_top row">
            <a href="#" class="see-more textUpper center-align">
                veja mais resultados
            </a>
        </div>
        </div>
    </div>
</div>
</div>

<div class="search">
    <img src="assets/img/search-profs.png" alt="">
    <div class="full_absolute flex alignCenter">
        <div class="center">
            <h4>Encontre um profissional especializado</h4>
            <div class="margin_2_top">
                <a href="#" class="textUpper">
                    clique aqui
                </a>
            </div>
        </div>
    </div>
</div>





<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
    document.addEventListener("load", startHome());
    document.addEventListener("load", startSplit());

</script>

</body>

</html>