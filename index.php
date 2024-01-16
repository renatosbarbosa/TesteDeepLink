<?php
define("page_title", "Restaurante Juninaria");
define("logo", "ifood.png");
define("id_restaurante", "918ff598-3c9b-42fe-b62d-766b8f616845");
define("link_restaurante", "https://www.ifood.com.br/delivery/niteroi-rj/juninaria---lanches-juninos---barcas-centro/918ff598-3c9b-42fe-b62d-766b8f616845");
define("id_gtm", "GTM-M0Mkeay");
define("mensagem_personalizada", "Estamos conectando você com o restaurante selecionado.");

// NÃO MEXER NO CÓDIGO ABAIXO.

function IdentificaDispositivo() {
    $LinkIfoodMobile = "ifood://restaurant/" . id_restaurante;
    $LinkIfoodComputador = link_restaurante;
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $symbian = strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
    $windowsphone = strpos($_SERVER['HTTP_USER_AGENT'], "Windows Phone");
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
        echo $LinkIfoodMobile;
    } else {
        echo $LinkIfoodComputador;
    }
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title><?php echo page_title; ?></title>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '<?php echo id_gtm; ?>');</script>
        <!-- End Google Tag Manager -->

        <script type="text/javascript">
            var numero = 10;
            function chamar() {
                if (numero > 0) {
                    document.getElementById('contador').innerHTML = --numero;
                }
                if (numero === 0) {
                    document.getElementById("btn-ifood").style.display = "block";
                }
            }
            setInterval("chamar();", 1000);
            setTimeout("document.location.href = '<?php echo IdentificaDispositivo(); ?>'", 10000);
        </script>
    </head>
    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo id_gtm; ?>"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 offset-md-5 text-center">
                    <img class="logo" src="images/<?php echo logo; ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="text-center">
                        <div class="spinner-border text-danger" style="width: 5rem; height: 5rem; margin: 50px 0 50px 0;" role="status">
                        </div>
                    </div>
                    <p class="text-center mensagem">
                        <?php echo mensagem_personalizada ?>
                        <br>
                        Você será redirecinado(a) em <label id="contador">10</label> segundos.
                    </p>
                </div>
            </div>

            <div id="btn-ifood" class="row text-center" style="margin-top: 30px;  display: none;">
                <div class="col-md-6 offset-md-3">
                    <span> Clique no botão abaixo se você tiver algum problema para acessar o restaurante selecionado.</span><br>
                    <a class="btn btn-primary" href="<?php echo link_restaurante; ?> " role="button" style="text-transform: uppercase; font-weight: 600; padding: 10px 25px 10px 25px; margin-top: 20px;">Acessar pelo navegador</a>
                </div>
            </div>

        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>