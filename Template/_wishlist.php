<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['delete-cart-submit'])){
    $deletedrecord=$Cart->deleteCart($_POST['item_id']);
  }
  //save for later
  if(isset($_POST['wishlist-submit'])){
    $Cart->saveForLater($_POST['item-id']);
  }
} 
?>
<section id="cart" class="py-3 mb-5">
        <div class="container-fluid w-75">
          <h5 class="font-roboto font-size-20">Lista de deseos</h5>
          <!--Cart Items-->
          <div class="row">
            <div class="col-sm-9">
              <!--Items-->
              <?php 
                foreach ($product->getData('cart') as $item):
                  $cart=$product->getProduct($item['item_id']);
                  $subTotal[]=array_map(function($item){
              ?>
              <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                  <img
                    src="<?php echo $item['item_image'] ?>"
                    alt="cart1"
                    style="height: 120px"
                    class="img-fluid"
                  />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-roboto font-size-20"><?php echo $item['item_name'] ?></h5>
                  <small>by <?php echo $item['item_brand'] ?></small>
                  <!--Rating-->
                  <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-raleway font-size-14"
                      >203 valoraciones</a
                    >
                  </div>
                  <!--Quantity-->
                  <div class="qty d-flex pt-2">
                   
                    <form method="post">
                      <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                    <button
                      type="submit"
                      name="delete-cart-submit"
                      class="btn font-poppins text-danger pl-0 pr-3 border-right"
                    >
                      Eliminar
                    </button>
                  </form>
                  <form method="post">
                      <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                      <button
                      type="submit"
                      name="wishlist-submit"
                      class="btn font-poppins text-danger px-3 border-right"
                    >
                      Añadir a la cesta
                    </button>
                  </form>

               
                  </div>
                </div>
                <div class="col sm-2 text-right">
                  <div class="font-size-20 text-danger font-poppins">
                    $ <span class="product_price" data-id="<?php echo $item['item_id']??'0'; ?>"><?php echo $item['item_price']?></span>
                  </div>
                </div>
              </div>
              <?php
              return $item['item_price'];
              },$cart);
              endforeach;
              ?>
            </div>
          </div>
        </div>
      </section>  