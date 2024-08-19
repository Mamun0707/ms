<?php include('include/header.php') ; ?>

<div class="hero_area">
  <!-- Basic -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="img-box">
                    <img src="images/medicine.png" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="detail-box">
                    <h1>
                      Welcome To Our <br>
                      <span>
                        Online Medicine
                      </span>

                    </h1>
                    <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.
                    </p>
                    <div>
                      <a href="">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="img-box">
                    <img src="images/medicine.png" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="detail-box">
                    <h1>
                      Welcome To Our <br>
                      <span>
                        Online Medicine
                      </span>

                    </h1>
                    <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.
                    </p>
                    <div>
                      <a href="">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="img-box">
                    <img src="images/medicine.png" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="detail-box">
                    <h1>
                      Welcome To Our <br>
                      <span>
                        Online Medicine
                      </span>

                    </h1>
                    <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.
                    </p>
                    <div>
                      <a href="">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>


    </section>
    <!-- end slider section -->
  </div>

 
  <!-- end feature section -->



  <!-- health section -->

  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        Medicine & Health
      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="owl-carousel">
        <?php 
          $result=$mysqli->common_select_query("select medicine.id,medicine.brand_name, medicine.generic_name,medicine.price, medicine.photo, medicine.dose,  medicine.status, type.type from medicine join type on type.id=medicine.type_id where medicine.deleted_at is null order by medicine.id DESC limit 0,12");
          if($result){
            if($result['data']){
              foreach($result['data'] as $data){
        ?>
          <div class="item">
            <div class="box w-100">
              <div class="btn_container">
                <a onclick="addToCart(<?= $data->id ?>)" href="javascript:void(0)">
                  Buy Now
                </a>
              </div>
              <div class="img-box w-100">
                <img src="<?= $baseurl ?>assets/img/medicine/<?= $data->photo ?>" alt="" class="w-100">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6><?= $data->brand_name ?></h6>
                  <h6 class="price">
                    <span>BDT</span>
                    <?= $data->price ?>
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <?php } } } ?>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="">
        See more
      </a>
    </div>
  </section>

  <!-- end health section -->
  <!-- discount section -->

  <section class="discount_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-5 offset-md-2">
          <div class="detail-box">
            <h2>
              You get <br>
              any medicine <br>
              on
              <span>
                10% discount
              </span>

            </h2>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
            <div>
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-5">
          <div class="img-box">
            <img src="images/medicines.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end discount section -->
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          About Us
        </h2>
      </div>

      <div class="img-box">
        <img src="images/about-medicine.png" alt="">
      </div>
      <div class="detail-box">
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
        <div class="d-flex justify-content-center">
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          What is says our clients
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Client
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Client
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Client
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form>
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputNumber1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1">
              </div>
              <div class="form-group ">
                <label for="inputState">Select medicine</label>
                <select id="inputState" class="form-control">
                  <option selected>Medicine 1</option>
                  <option selected>Medicine 2</option>
                  <option selected>Medicine 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputMessage">Message</label>
                <input type="text" class="form-control" id="exampleInputMessage">
              </div>
              <button type="submit" class="">Send</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Get Now Medicines
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- Footer -->
   <?php include('include/footer.php') ; ?>
           