    <?php $view->inc('elements/header.php'); ?>

    <div class="row" id="diap">
      <div class="col-md-12">
        <?php
          $a = new Area('Zone1');
          $a->display($c);
        ?>
      </div>
    </div>

    <div class="container">
      <div class="row" id="first">
        <div class="col-md-4">
          <?php
            $a = new Area('Zone2');
            $a->display($c);
          ?>
        </div>
        <div class="col-md-4">
          <?php
            $a = new Area('Zone3');
            $a->display($c);
          ?>
        </div>
        <div class="col-md-4">
          <?php
            $a = new Area('Zone4');
            $a->display($c);
          ?>
        </div>
      </div>
    </div>

    <div class="row" id="CAT">
      <div class="col-md-12">
        <?php
          $a = new Area('Zone5');
          $a->display($c);
        ?>
      </div>
    </div>

    <div class="container">
      <div class="row" id="second">
        <div class="col-md-12">
          <?php
            $a = new Area('Zone6');
            $a->display($c);
          ?>
        </div>
      </div>
    </div>

    <?php $view->inc('elements/footer.php'); ?>
