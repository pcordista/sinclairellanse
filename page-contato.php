<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="page-representantes-banner">
    <img src="assets/img/contato.jpg" class="widthfull">
</div>

<div class="sectionStart representantes-intro faq icon-intro bolinhas relative">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>FALE CONOSCO</h1>
            <h3>Você tem alguma dúvida, crítica ou sugestão? <BR>
Entre em contato com a gente!   </h3>
            <P>0800 9413282   •   qualidadebr@sinclairpharma.com</P>

        </div>
    </div>
    <div class="">
        <div class="find-selects containerEighteen">
            <div class="row">
                <div class="col s12 m12 l10 offset-l1 contato textUpper">
                    <div class="input-field">
                        <span>nome</span>
                        <input type="text">
                    </div>
                    <div class="input-field">
                        <span>e-mail</span>
                        <input type="text">
                    </div>
                    <div class="row input-field">
                        <div class="col s12 m6">
                            <span>telefone</span>
                            <input type="text">
                        </div>
                        <div class="col s12 m2">
                            <span>uf</span>
                            <select class="browser-default">
                                <option value="" disabled selected>UF</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col s12 m4">
                            <span>cidade</span>
                            <select class="browser-default">
                                <option value="" disabled selected>Cidade</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <span>assunto</span>
                        <input type="text">
                    </div>
                    <div class="input-field">
                        <span>mensagem</span>
                        <textarea name="" id="" cols="30" rows="10" placeholder=""></textarea>
                    </div>
                    <div class="contato-button margin_1_top right">
                        <a href="#">
                            enviar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="contacts flex justifycenter">
        <div>
            <strong>Sinclair Pharma Brazil</strong><BR>
            Av. Queiroz Filho, Torre Gaivota 1.560<BR>
            Sala 205 - Vila Hamburguesa<BR>
            CEP 05319-000 - São Paulo - SP - Brasil<BR>
            Telefone: +55 11 3641- 4447<BR>
            <a href="#">
            veja no maps
            </a>
        </div>
    </div>


<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
</script>

</body>

</html>