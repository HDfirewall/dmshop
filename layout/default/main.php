<?
if (!defined('_DMSHOP_')) exit;
?>
<!--[if IE 6]>
<script type="text/javascript">
/* IE6 PNG */
DD_belatedPNG.fix('.png');
</script>
<![endif]-->

<style type="text/css">
.display_title a img {border:0px;}
</style>

<?
// top image
$file = shop_design_file("main_image_top"); if ($file['upload_file']) { echo "<div>".shop_file_view($shop['path']."/data/design/".shop_data_path("u", $file['datetime'])."/".$file['upload_file'], $file['upload_width'], $file['upload_height'])."</div>\n"; }

// top tag
if ($dmshop_design['main_tag_top_text']) { echo "<div>".stripslashes($dmshop_design['main_tag_top_text'])."</div>\n"; }

$display_id = 1;
if ($dmshop_design["display".$display_id."_type"]) {
    if ($dmshop_design['display'.$display_id.'_top']) { echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr height='".$dmshop_design['display'.$display_id.'_top']."'><td></td></tr></table>\n"; }
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr>"; if ($dmshop_design["display".$display_id."_type"] == '1') { $display_type = 1; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '2') { $display_type = 2; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 3; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '3') { $display_type = 4; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 5; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 6; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } } echo "</tr></table>\n";
}

$display_id = 2;
if ($dmshop_design["display".$display_id."_type"]) {
    if ($dmshop_design['display'.$display_id.'_top']) { echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr height='".$dmshop_design['display'.$display_id.'_top']."'><td></td></tr></table>\n"; }
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr>"; if ($dmshop_design["display".$display_id."_type"] == '1') { $display_type = 1; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '2') { $display_type = 2; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 3; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '3') { $display_type = 4; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 5; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 6; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } } echo "</tr></table>\n";
}

$display_id = 3;
if ($dmshop_design["display".$display_id."_type"]) {
    if ($dmshop_design['display'.$display_id.'_top']) { echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr height='".$dmshop_design['display'.$display_id.'_top']."'><td></td></tr></table>\n"; }
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr>"; if ($dmshop_design["display".$display_id."_type"] == '1') { $display_type = 1; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '2') { $display_type = 2; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 3; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '3') { $display_type = 4; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 5; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 6; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } } echo "</tr></table>\n";
}

$display_id = 4;
if ($dmshop_design["display".$display_id."_type"]) {
    if ($dmshop_design['display'.$display_id.'_top']) { echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr height='".$dmshop_design['display'.$display_id.'_top']."'><td></td></tr></table>\n"; }
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr>"; if ($dmshop_design["display".$display_id."_type"] == '1') { $display_type = 1; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '2') { $display_type = 2; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 3; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '3') { $display_type = 4; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 5; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 6; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } } echo "</tr></table>\n";
}

$display_id = 5;
if ($dmshop_design["display".$display_id."_type"]) {
    if ($dmshop_design['display'.$display_id.'_top']) { echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr height='".$dmshop_design['display'.$display_id.'_top']."'><td></td></tr></table>\n"; }
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr>"; if ($dmshop_design["display".$display_id."_type"] == '1') { $display_type = 1; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '2') { $display_type = 2; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 3; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; } else if ($dmshop_design["display".$display_id."_type"] == '3') { $display_type = 4; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 5; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } $display_type = 6; $dmshop_design_box_type = shop_design_box_type($display_id, $display_type); echo "<td ".shop_display_box_size($dmshop_design_box_type['box_width'], $dmshop_design_box_type['box_height'])." valign='top'>"; if ($dmshop_design_box_type['box_type']) { include("$dmshop_layout_path/display.{$dmshop_design_box_type['box_type']}.php"); } echo "</td>"; if ($dmshop_design_box_type['side_width']) { echo "<td width='".$dmshop_design_box_type['side_width']."'></td>"; } } echo "</tr></table>\n";
}

// bottom tag
if ($dmshop_design['main_tag_bottom_text']) { echo "<div>".stripslashes($dmshop_design['main_tag_bottom_text'])."</div>\n"; }

// bottom image
$file = shop_design_file("main_image_bottom"); if ($file['upload_file']) { echo "<div>".shop_file_view($shop['path']."/data/design/".shop_data_path("u", $file['datetime'])."/".$file['upload_file'], $file['upload_width'], $file['upload_height'])."</div>\n"; }
?>