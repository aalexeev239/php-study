<div class="container">
  <div class="box">
    <h2>Применение Get запроса</h2>
    <p class="lead">
      <?php
        $shop = array(
          'title' => '',
          'description' => '',
          'category' => '',
          'price' => ''
        );

        foreach ($shop as $key => $value) {
          if (isset($_GET[$key])) {
              $value = $_GET[$key];
              echo 'Shop '.$key.'= '.htmlspecialchars($value).'<br>';
          }
        }
      ?>
    </p>
  </div>
</div>