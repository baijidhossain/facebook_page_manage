<?php require_once(VIEW_PATH . '_common/header.php'); ?>

<!--Main layout start-->

<main>
  <div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row align-items-center my-4">
          <div class="col-sm-7">
            <h3 class="m-0"><?= $this->data['page_title'] ?></h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Header (Page Header) End-->

    <div class="content">
      <div class="container-fluid">
        <?php $this->getMessage(); ?>
        <div class="row row-deck">
          <div class="col-sm-12 ">
            <div class="card _card border-0 ">
              <div class="card-body">

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

  </div>
</main>

<!--Main layout end-->

<?php require_once(VIEW_PATH . '_common/footer.php'); ?>