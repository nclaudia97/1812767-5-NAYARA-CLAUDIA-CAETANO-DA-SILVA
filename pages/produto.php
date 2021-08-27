<?php
  include('dados\dados.php');

  if (isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
  }else {
    return 0;
  }

  foreach($data as $item){
    if ($item["id"] == $id){
?>
      <section class="page-section">
        <div class="container">
          <div class="product-item">
            <div class="product-item-title d-flex">
              <div class="bg-faded p-5 d-flex ml-auto rounded">
                <h2 class="section-heading mb-0">
                  <span class="section-heading-upper">Torta de</span>
                  <span class="section-heading-lower"><?=$item["title"];?></span>
                </h2>
              </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="images/<?=$item["img"];?>" alt="">
            <div class="product-item-description d-flex mr-auto">
              <div class="bg-faded p-5 rounded">
                <p class="mb-0"><?=$item["description"];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php

    }else{
      //
    }
  }
?>



