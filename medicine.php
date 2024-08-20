<?php include('include/header.php') ; ?>


  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        All Medicine
      </h2>
      <div class="container">
        <div class="row">
        <?php 
          $result=$mysqli->common_select_query("select medicine.id,medicine.brand_name, medicine.generic_name,medicine.price, medicine.photo, medicine.dose,  medicine.status, type.type from medicine join type on type.id=medicine.type_id where medicine.deleted_at is null order by medicine.id DESC");
          if($result){
            if($result['data']){
              foreach($result['data'] as $data){
        ?>
          <div class="col-sm-3 col-6">
            <div class="box w-100">
              <div class="btn_container">
                <a onclick="addToCart(<?= $data->id ?>)" href="javascript:void(0)">
                  Buy Now
                </a>
              </div>
                <div class="img-box w-100">
                  <img src="<?= $baseurl ?>assets/img/medicine/<?= $data->photo ?>" alt="" class="w-100">
                </div>
                <a class="mt-0 p-0 w-100" href="<?= $baseurl ?>product.php?id=<?= $data->id ?>">
                  <div class="detail-box">
                    
                    <div class="text">
                      <h6><?= $data->brand_name ?></h6>
                      <h6 class="price">
                        <span>BDT</span>
                        <?= $data->price ?>
                      </h6>
                    </div>
                  </div>
                </a>
            </div>
          </div>
          <?php } } } ?>
          
        </div>
      </div>
    </div>
  </section>

  <!-- end health section -->


<!-- Footer -->
            
            <?php include('include/footer.php') ; ?>
  