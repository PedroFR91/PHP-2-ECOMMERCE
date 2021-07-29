<section id="cart" class="py-3 mb-5">
        <div class="container-fluid w-75">
          <h5 class="font-roboto font-size-20">Cesta</h5>
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
                    <div class="d-flex font-raleway w-25">
                      <button class="qty-up border bg-light" data-id="pro1">
                        <i class="fas fa-angle-up"></i>
                      </button>
                      <input
                        type="text"
                        class="qty-input border px-2 w-100 bg-light"
                        disabled
                        value="1"
                        placeholder="1"
                        data-id="pro1"
                      />
                      <button data-id="pro1" class="qty-down border bg-light">
                        <i class="fas fa-angle-down"></i>
                      </button>
                    </div>
                    <button
                      type="submit"
                      class="btn font-poppins text-danger px-3 border-right"
                    >
                      Eliminar
                    </button>
                    <button
                      type="submit"
                      class="btn font-poppins text-danger px-3 border-right"
                    >
                      Guardar para más tarde
                    </button>
                  </div>
                </div>
                <div class="col sm-2 text-right">
                  <div class="font-size-20 text-danger font-poppins">
                    $ <span class="product_price"><?php echo $item['item_price']?></span>
                  </div>
                </div>
              </div>
              <?php
              return $item['item_price'];
              },$cart);
              endforeach;
              ?>
            </div>
            <!--Subtotal-->
            <div class="col-sm-3">
              <div class="sub-total text-center mt-2 border">
                <h6 class="font-size-12 font-raleway text-succes py-3">
                  <i class="fas fa-check"></i> Tu pedido tiene entrega gratuita
                </h6>
                <div class="border-top py-4">
                  <h5 class="font-poppins font-size-16">
                    Subtotal (<?php echo count($subTotal)??0; ?> items)&nbsp;
                    <span class="text-danger"
                      >$
                      <span class="text-danger" id="deal-price">
                        <?php echo isset($subTotal) ? $Cart->getSum($subTotal):0?>
                        </span></span>
                  </h5>
                  <button type="submit" class="btn btn-warning mt-3 px-5">
                    Comprar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  