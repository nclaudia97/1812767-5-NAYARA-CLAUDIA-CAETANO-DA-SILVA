<?php
  include('dados\dados.php');
?>
<section class="page-section">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\banner1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Seja bem-vindo(a) à</h5>
            <p>Casa de tortas Doce Nay</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images\banner2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>As melhores tortas</h5>
            <p>Diversos sabores para você escolher...</p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="page-section cta">
  <div class="container">
      <div class="row">
          <div class="col-sm mx-auto">
              <div class="cta-inner bg-faded text-center rounded">
                  <h2 class="section-heading mb-">
                      <span class="section-heading-upper">Nossos</span>
                      <span class="section-heading-lower">Produtos</span>
                  </h2>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">  
      <?php foreach ($data as $item):?>
        <div class="col">
        <div class="card h-100">
            <img src="images/<?=$item["img"];?>" class="d-block h-50"  class="img-fluid" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?=$item["title"];?></h5>
              <p class="card-text"><?=$item["flavor"];?></p>
            </div>
            <div class="card-footer">
              <a href="index.php?pg=produto&id=<?=$item["id"];?>" class="btn btn-primary">Ver detalhes</a>
            </div>
         </div>
        </div>
      <?php endforeach;?> 
    </div>
  </div>
</section>
