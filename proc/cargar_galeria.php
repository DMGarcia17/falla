<?php
require_once '../core/proc.php';

$db = new procedimientos();

if(isset($_POST['data']) && !empty($_POST['data'])){
	$res = $db->filtered_query("img_cat", "*", "categoria='{$_POST['data']}'");
	foreach ($res as $r) {
		@$r2 = $db->filtered_query("label_img", "label", "id_label='{$r['label']}'");
		echo "<div class='col-md-6 col-lg-4 item zoom-on-hover'>
                <a class'lightbox' href='{$r['img']}'>
                    <img class='img-fluid image' src='{$r['img']}'>
                    <span class='description'>
                        <span class='description-heading'>{$r2[0]['label']}</span>
                    </span>
                </a>
              </div>";
	}
}elseif(@empty($_POST['data'])){
	$res = $db->blankect_query("img_cat", "*");
	foreach ($res as $r) {
		$r2 = $db->filtered_query("label_img", "label", "id_label='{$r['label']}'");
		echo "<div class='col-md-6 col-lg-4 item zoom-on-hover'>
                <a class'lightbox' href='{$r['img']}'>
                    <img class='img-fluid image' src='{$r['img']}'>
                    <span class='description'>
                        <span class='description-heading'>{$r2[0]['label']}</span>
                    </span>
                </a>
              </div>";
	}
}
sleep(0.05);