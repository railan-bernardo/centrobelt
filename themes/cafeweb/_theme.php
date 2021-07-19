<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2021-03-29T10:32:56-03:00+163467">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?= $head; ?>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/lightbox.css"); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<!--HEADER-->
  <header class="main-header">
     <div class="container">
       <div class="center">
           <div class="box-logo">
             <a href="<?= url("/"); ?>">
              <img src="<?= theme("/assets/images/logo.png"); ?>" alt="Centro Belt - Correias Transportadoras" title="Centro Belt - Correias Transportadoras">
             </a>
           </div>
       </div>
     </div>
  </header>
    <!-- end header -->

<!--CONTENT-->
<main class="main-container bg-main-container">
    <?= $v->section("content"); ?>
</main>
 <?php foreach ($site as $value){ ?>
        <a target="_blank" href="https://web.whatsapp.com/send?phone=<?= $value->phone_wp; ?>&text=<?= $value->msg; ?>" class="float desktop">
            <img src="<?=  theme("/assets/images/float.png"); ?>" alt="Whatssap">
        </a>

        <!-- vesão mobil -->
        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $value->phone_wp; ?>&text=<?= $value->msg; ?>" class="float smartphone">
            <img src="<?=  theme("/assets/images/float.png"); ?>" alt="Whatssap">
        </a>
        <?php } ?>
<div class="cookie hidden">
    <p> Esse website está em comformidade com a Lei Geral da proteção de Dados (LGPD) e utiliza cookies para
            oferecer uma melhor experiência
            ao visitante. Ao navegar em nosso site, você concorda com a utilização de cookies e com a nossa <a href="">Politica de Privacidade</a></p>
    
    <button type="button" class="accept-cookie">Aceitar</button>
  </div>

<!--FOOTER-->
    <footer class="main-footer">
      <div class="container">
         <?php foreach ($site as $value){ ?>
          <p>
            <?= $value->copyright; ?>© Copyright 2021 CentroBelt. Todos direitos reservados.
          </p>
        <?php } ?>
      </div>
  </footer>

    <script src="https://kit.fontawesome.com/86f5b0a58f.js" crossorigin="anonymous"></script>
       <script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
      <script src="https://cdn.jsdelivr.net/npm/js-cookie@2.2.1/src/js.cookie.min.js"></script>
       <script src="<?= theme('/assets/js/lighbox.js'); ?>"></script>
       <script>
            let cooke = document.querySelector(".cookie");
    let accept = document.querySelector(".accept-cookie");

    
      if(Cookies.get('aceito_privacidade')){
      cooke.classList.add("hidden")
    }else{
      cooke.classList.remove("hidden")
    }


    accept.addEventListener("click", e=>{
      Cookies.set("aceito_privacidade", "concordo", {
        expires: 30,
        domains: "https://sunflowergyn.com.br"
      });

      cooke.classList.add("hidden")
    });
            
       </script>

<?= $v->section("scripts"); ?>
</body>
</html>
