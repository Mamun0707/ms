<?php include('include/header.php') ; ?>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
    <?php 
      $id=$_GET['id'];
      $result=$mysqli->common_select_query("select medicine.id,medicine.brand_name, medicine.generic_name,medicine.price, medicine.photo, medicine.dose,  medicine.status, type.type from medicine join type on type.id=medicine.type_id where medicine.deleted_at is null and medicine.id=$id");
      if($result){
        if($result['data']){
          foreach($result['data'] as $data){
    ?>
      <div class="row">
        <div class="col-sm-6">
          <div class="img-box">
            <img src="<?= $baseurl ?>assets/img/medicine/<?= $data->photo ?>" alt="" height="500">
          </div>
        </div>
        <div class="col-sm-6">
          <h4 class="text-left"> <?= $data->brand_name ?> </h4>
          <div class="detail-box">
            <p class="text-left">
              <?= $data->generic_name ?> <br>
              <?= $data->dose ?> <br>
              <?= $data->type ?>
            </p>
            <div class="text-left">
              <span>BDT</span> <?= $data->price ?>
            </div>
            <a onclick="addToCart(<?= $data->id ?>)" href="javascript:void(0)">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
      <?php } } } ?>
    </div>
  </section>

<!-- Footer -->
            
            <?php include('include/footer.php') ; ?>

  