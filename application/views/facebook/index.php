<?php require_once(VIEW_PATH . '_common/header.php'); ?>

<!--Main layout start-->
<style>
  .thumbnail {
    width: 60px;
    height: 60px;
    border-radius: 5px;
    object-fit: cover;

  }
</style>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4 _card">
              <div class="card-header with-border">
                <h5 class="card-title">
                  List Of Posts
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php

                // echo '<pre>';
                // print_r($this->data['facebook']['posts']['data']);
                // echo '</pre>';

                ?>

                <div class="table-responsive">

                  <table class="mb-0 table  ">
                    <thead>

                      <tr>
                        <th style="width: 130px;">Thumbnail</th>
                        <th style="width: 450px;">Title</th>
                        <th style="width: 200px;">Date Published</th>
                        <th style="width: 200px;">Likes</th>
                        <th style="width: 200px;">Comments</th>
                        <th style="width: 200px;">Share</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      foreach ($this->data['facebook']['posts']['data'] as $key => $post) {

                      ?>
                        <tr>
                          <td> <img class="thumbnail" src="<?= $post['full_picture'] ?>"> </td>
                          <td> <span class="toggle_visible"> <?= $post['message'] ?> </span> </td>
                          <td><?= date_create($post['created_time'])->format("d, M Y h:i A") ?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      <?php

                      }

                      ?>
                      <tr>

                      </tr>
                    </tbody>

                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<!--Main layout end-->

<?php require_once(VIEW_PATH . '_common/footer.php'); ?>