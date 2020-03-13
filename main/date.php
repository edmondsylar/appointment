<?php include_once "includes/head.php"; ?>
<?php
$id = $_GET['id'];
include_once "back/config.php";
$cur = new Config();

$dates = $cur->doc_dates($id);

?>
<main>
  <div id="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="index.php">Bookings</a></li>
        <li>Payments</li>
      </ul>
    </div>
  </div>
  <!-- /breadcrumb -->

  <div class="container margin_60">
    <div class="row">
      <div class="col-xl-8 col-lg-8">
        <div class="box_general_3 cart">

          <div class="form_title">
            <h3><strong>2</strong>Select dates available</h3>
          </div>
          <hr>

          <form action="back/attachDate.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $id ?>">
            <?php if (!empty($dates)) : ?>
              <select name="time" class="form-control" id="">
                <?php foreach ($dates as $key => $value) : ?>
                  <option value="<?php echo $value['time'] ?>"><?php echo $value['time'] ?></option>
                <?php endforeach; ?>
              </select>
            <?php endif; ?>
            <hr>
            <div id="policy">
              <input type="submit" class="btn_1 full-width" value="Complete Booking">
          </form>
        </div>
      </div>

    </div>
    <!-- /col -->
  </div>
  <!-- /row -->
  </div>
  <!-- /container -->
</main>