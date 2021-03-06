<?php
$brand=array_map(function($pro){return $pro['item_brand'];},$product_shuffle);
$unique=array_unique($brand);
sort($unique);
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['special_price_submit'])){
    //call method addToCart
  $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
  }
}
$in_cart=$Cart->getCardId($product->getData('cart'));
?>
<section class="special-price">
        <div class="container">
          <h4 class="font-roboto font-size-20">Precios Especiales</h4>
          <div id="filters" class="button-group text-right">
            <button class="btn is-checked" data-filter="*">
              Todas las marcas
            </button>
            <?php
            array_map(function($brand){
              printf('<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
            },$unique);
            ?>
          </div>
          <div class="grid">
            <?php array_map(function($item) use ($in_cart){?>
            <div class="grid-item border <?php echo $item['item_brand'] ?>">
          
              <div class="item py-2" style="width: 200px">
                <div class="product font-raleway">
                  <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id'])  ?>"
                    ><img
                      src="<?php echo $item['item_image']?>"
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
                        A??adir a la Cesta
                      </button>';
                      }
                    ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php },$product_shuffle)?>
          </div>
        </div>
      </section>