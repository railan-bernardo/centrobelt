
        <?php $v->layout("_theme"); ?>
    	<div class="container">
             <header class="title-header">
                <h1>LINHA DE PRODUTOS</h1>
             </header>

             <section class="content-article">
                 <?php foreach($products as $product): ?>
                      <article>
                          <div class="box-image">
                                <a href="<?= url("/produto/{$product->uri}"); ?>"><img src="<?= url("storage/{$product->cover}"); ?>" alt="<?= $product->title; ?>" title="<?= $product->title; ?>"></a>
                          </div>
                      </article>
                 <?php endforeach; ?>
             </section>
        </div>
        <div class="opt-in-footer">
            <div class="container opt-flex">
                 <div class="items m-r">
                    <?php foreach ($site as $value){ ?>
                        <a target="_blank" href="https://web.whatsapp.com/send?phone=<?= $value->phone_wp; ?>&text=<?= $value->msg; ?>" class="desktop"> <span class="fab fa-whatsapp"></span>
                         <h2>Suporte / Vendas <br><?= $value->phone; ?></h2></a>

                          <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $value->phone_wp; ?>&text=<?= $value->msg; ?>" class="smartphone"> <span class="fab fa-whatsapp"></span>
                         <h2>Suporte / Vendas <br><?= $value->phone; ?></h2></a>
                    <?php } ?>
                 </div>
                 <div class="items m-r left">
                         <span class="fas fa-map-marker-alt"></span>
                         <h2>Rua das Palmas 737 <br>Parque Oeste Industrial, Goiânia-GO</h2>
                 </div>
                 <div class="items">
                         <span class="far fa-clock"></span>
                         <h2>De segunda a sexta-feira, de <br>das 8h às 12h e das 13h15 às 18h</h2>
                 </div>
            </div>
        </div>
       