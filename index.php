<?php
require_once "core/start.php";
require_once "templates/" . SITE_TEMPLATE_NAME . "header.php";
?>
    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Our Services -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="section-header">
              <h1>
                Наши услуги                
              </h1>
            </div>
            <ul class="unstyled row-fluid">
<?php
            $services = services::getData();
            foreach ($services as $item)
                echo <<<SERVICE
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="templates/main/assets/images/photo/{$item['image_path']}">
                    <i class="icon-heart"></i>
                  </span>
                </div>
                <h3 class="text-center">
                  {$item['name']}
                </h3>
                <p>
                  {$item['description']}
                </p>
                <a class="more-link" href="javascript:void(0)">
                  Подробнее
                </a>
              </li>
SERVICE;
?>
            </ul>
          </div>
        </div>
      </section>
      <!-- Latest News -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Последние новости
            </h1>
          </div>
          <div class="ajax-result-list-container" id="ajax-content">
<?php
echo '<ul class="unstyled row-fluid">';
                $news = news::getData();
                foreach ($news as $item) {
                    $phpdate = strtotime($item['date']);
                    $dt = date("d M Y", $phpdate);
                    echo <<<NEWS
                <li class="span4">
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="round-box box-small">
                                <a class="box-inner" href="javascript:void(0)">
                                    <img alt="some image" class="img-circle" src="templates/main/assets/images/photo/{$item['image_path']}">
                                </a>
                            </div>
                            <h5 class="text-center light">
                                {$dt}
                            </h5>
                        </div>
                        <div class="span8">
                            <h3>
                                <a href="javascript:void(0)">
                                    {$item['name']}
                                </a>
                            </h3>
                            <p>
                                {$item['description']}
                            </p>
                        </div>
                    </div>
                </li>
NEWS;
}
echo '</ul>';
?>
    <?$allCount = news::getAllCount();?>
    <script> var allNewsCount = <?=$allCount?>; </script>
          </div>
          <div class="text-center">
            <button class="btn btn-link" id="btn">Загрузить еще...</button>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php
require_once "templates/" . SITE_TEMPLATE_NAME . "footer.php";
?>