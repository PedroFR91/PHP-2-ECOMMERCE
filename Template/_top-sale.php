<?php

shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['top_sale_submit'])){
  //call method addToCart
  $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
  }
}
$in_cart=$Cart->getCardId($product->getData('cart'));
?>
<section id="top-sale">
        <div class="container py-5">
          <h4 class="font-Roboto font-size-20">Top Ventas</h4>
          <hr />
          <!--Carousel-->
          <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id'])  ?>"
                  ><img
                    src="<?php echo $item['item_image'] ?>"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6><?php echo $item['item_name'] ?? 'Desconocido' ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$<?php echo $item['item_price']?></span>
                  </div>
                  <form action="" method="POST">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                    <input type="hidden" name="user_id" value="<?php echo 1;?>">
                    <?php 
                      if(in_array($item['item_id'],$in_cart??[])){
                        echo '<button type="submit" disabled name="top_sale_submit" class="btn btn-success font-size-12">
                        En la cesta
                      </button>';
                      }
                      else{
                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">
                        Añadir a la Cesta
                      </button>';
                      }
                    ?>
                    
                  </form>
                  
                </div>
              </div>
          </div>
          <?php
            }?>
        
        </div>
      </section>