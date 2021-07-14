<?php
require_once "../core/start.php";
$newsAjax = news::getData($_POST['offset']);
echo '<ul class="unstyled row-fluid">';
foreach ($newsAjax as $item) {
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
echo '<ul/>';
