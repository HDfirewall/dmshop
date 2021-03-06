<?
if (!defined('_DMSHOP_')) exit;

// 설정
$dmshop_design_image = shop_design_image();
$dmshop_design_font = shop_design_font();

// 썸네일 설정
if ($dmshop_plan['thumb_use'] == '0') { if ($dmshop_design_image['image_plan_use'] == '0') { $thumb_width = shop_split("|", $dmshop_design_image['image_plan'], "0"); $thumb_height = shop_split("|", $dmshop_design_image['image_plan'], "1"); } else { $thumb_width = $dmshop_design_image['image_plan_width']; $thumb_height = $dmshop_design_image['image_plan_height']; } } else { $thumb_width = $dmshop_plan['thumb_width']; $thumb_height = $dmshop_plan['thumb_height']; }

// 스타일 처리
echo "\n<style type=\"text/css\">\n";

// 썸네일 테두리
if ($dmshop_design_image['image_plan1_border']) { echo ".plan_item .thumb {border:".(int)($dmshop_design_image['image_plan1_border'])."px solid #".$dmshop_design_image['image_plan1_border_color'].";}\n"; }
if ($dmshop_design_image['image_plan2_border']) { echo ".plan_item .thumb:hover {border:".(int)($dmshop_design_image['image_plan2_border'])."px solid #".$dmshop_design_image['image_plan2_border_color'].";}\n"; }

// 상품명
echo ".plan_item .title {\n";
if ($dmshop_design_font['pl_item_title_font_family']) { echo "font-family:".$dmshop_design_font['pl_item_title_font_family'].";\n"; }
if ($dmshop_design_font['pl_item_title_font_size']) { echo "font-size:".$dmshop_design_font['pl_item_title_font_size']."px;\n"; }
if ($dmshop_design_font['pl_item_title_font_color']) { echo "color:#".$dmshop_design_font['pl_item_title_font_color'].";\n"; }
if ($dmshop_design_font['pl_item_title_font_bold']) { echo "font-weight:bold;\n"; } else { echo "font-weight:normal;\n"; }
if ($dmshop_design_font['pl_item_title_font_italic']) { echo "font-style:italic;\n"; } else { echo "font-style:normal;\n"; }
if ($dmshop_design_font['pl_item_title_font_underline']) { echo "text-decoration:underline;\n"; } else { echo "text-decoration:none;\n"; }
echo "}\n";

// 시중가격
echo ".plan_item .price {\n";
if ($dmshop_design_font['pl_item_price_font_family']) { echo "font-family:".$dmshop_design_font['pl_item_price_font_family'].";\n"; }
if ($dmshop_design_font['pl_item_price_font_size']) { echo "font-size:".$dmshop_design_font['pl_item_price_font_size']."px;\n"; }
if ($dmshop_design_font['pl_item_price_font_color']) { echo "color:#".$dmshop_design_font['pl_item_price_font_color'].";\n"; }
if ($dmshop_design_font['pl_item_price_font_bold']) { echo "font-weight:bold;\n"; } else { echo "font-weight:normal;\n"; }
if ($dmshop_design_font['pl_item_price_font_italic']) { echo "font-style:italic;\n"; } else { echo "font-style:normal;\n"; }
if ($dmshop_design_font['pl_item_price_font_through']) { echo "text-decoration:line-through;\n"; } else { echo "text-decoration:none;\n"; }
echo "}\n";

// 상품가격
echo ".plan_item .money {\n";
if ($dmshop_design_font['pl_item_money_font_family']) { echo "font-family:".$dmshop_design_font['pl_item_money_font_family'].";\n"; }
if ($dmshop_design_font['pl_item_money_font_size']) { echo "font-size:".$dmshop_design_font['pl_item_money_font_size']."px;\n"; }
if ($dmshop_design_font['pl_item_money_font_color']) { echo "color:#".$dmshop_design_font['pl_item_money_font_color'].";\n"; }
if ($dmshop_design_font['pl_item_money_font_bold']) { echo "font-weight:bold;\n"; } else { echo "font-weight:normal;\n"; }
if ($dmshop_design_font['pl_item_money_font_italic']) { echo "font-style:italic;\n"; } else { echo "font-style:normal;\n"; }
if ($dmshop_design_font['pl_item_money_font_underline']) { echo "text-decoration:underline;\n"; } else { echo "text-decoration:none;\n"; }
echo "}\n";

// 기타
echo ".plan_item .etc {\n";
echo "letter-spacing:-1px;\n";
if ($dmshop_design_font['pl_etc_font_family']) { echo "font-family:".$dmshop_design_font['pl_etc_font_family'].";\n"; }
if ($dmshop_design_font['pl_etc_font_size']) { echo "font-size:".$dmshop_design_font['pl_etc_font_size']."px;\n"; }
if ($dmshop_design_font['pl_etc_font_color']) { echo "color:#".$dmshop_design_font['pl_etc_font_color'].";\n"; }
if ($dmshop_design_font['pl_etc_font_bold']) { echo "font-weight:bold;\n"; } else { echo "font-weight:normal;\n"; }
if ($dmshop_design_font['pl_etc_font_italic']) { echo "font-style:italic;\n"; } else { echo "font-style:normal;\n"; }
if ($dmshop_design_font['pl_etc_font_underline']) { echo "text-decoration:underline;\n"; } else { echo "text-decoration:none;\n"; }
echo "}\n";

// 기타
echo ".plan_item .etc_line {\n";
echo "padding:0 4px;\n";
echo "letter-spacing:-1px;\n";
if ($dmshop_design_font['pl_line_font_family']) { echo "font-family:".$dmshop_design_font['pl_line_font_family'].";\n"; }
if ($dmshop_design_font['pl_line_font_size']) { echo "font-size:".$dmshop_design_font['pl_line_font_size']."px;\n"; }
if ($dmshop_design_font['pl_line_font_color']) { echo "color:#".$dmshop_design_font['pl_line_font_color'].";\n"; }
if ($dmshop_design_font['pl_line_font_bold']) { echo "font-weight:bold;\n"; } else { echo "font-weight:normal;\n"; }
if ($dmshop_design_font['pl_line_font_italic']) { echo "font-style:italic;\n"; } else { echo "font-style:normal;\n"; }
if ($dmshop_design_font['pl_line_font_underline']) { echo "text-decoration:underline;\n"; } else { echo "text-decoration:none;\n"; }
echo "}\n";

echo "</style>\n";

if (!$q) {

    $q = "검색어";

}

$query = "";
$query = "검색어";
?>
<script type="text/javascript">
var query = "<?=$query?>";
</script>

<? if ($shop_user_admin) { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><div style="border:1px solid #b4d9e0; background-color:#e2fdff; text-align:center; padding:4px 0 3px 0;"><a href="<?=$shop['path']?>/adm/plan_write.php?m=u&plan_id=<?=$pl_id?>"><span style="font-weight:bold; line-height:14px; font-size:12px; color:#027d94; font-family:dotum,돋움;">관리자 권한으로 본 페이지를 수정 합니다.</span></a></div></td>
</tr>
<tr><td height="10"></td></tr>
</table>
<? } ?>

<style type="text/css">
#item_preview {position:absolute; z-index:99999; left:0px; top:0px;}

.plan_position .home {line-height:14px; font-size:12px; color:#9e9e9e; font-family:gulim,굴림;}
.plan_position .off {line-height:14px; font-size:12px; color:#555555; font-family:gulim,굴림;}
.plan_position .on {font-weight:bold; line-height:14px; font-size:12px; color:#555555; font-family:gulim,굴림;}
.plan_position .title {line-height:14px; font-size:11px; color:#9e9e9e; font-family:dotum,돋움;}
.plan_position .input {width:118px; height:17px; border:1px solid #cccccc; padding:1px 3px 0px 3px;}
.plan_position .input {font-weight:bold; line-height:17px; font-size:12px; color:#555555; font-family:gulim,굴림;}

.plan_icon .title {line-height:14px; font-size:11px; color:#9e9e9e; font-family:dotum,돋움;}
.plan_icon .checkbox {width:13px; height:13px; position:relative; overflow:hidden; left:0; top:-1px;}

.plan_list .line {background:url('<?=$dmshop_plan_path?>/img/line.gif') repeat-y;}
.plan_list .off {line-height:14px; font-size:12px; color:#555555; font-family:gulim,굴림;}
.plan_list .on {font-weight:bold; line-height:14px; font-size:12px; color:#555555; font-family:gulim,굴림;}

.plan_title .bg1 {width:2px; height:30px; background:url('<?=$dmshop_plan_path?>/img/title_bg1.gif') no-repeat;}
.plan_title .bg2 {height:30px; background:url('<?=$dmshop_plan_path?>/img/title_bg2.gif') repeat-x;}
.plan_title .bg3 {width:2px; background:url('<?=$dmshop_plan_path?>/img/title_bg3.gif') no-repeat;}
.plan_title .count {font-weight:bold; line-height:14px; font-size:11px; color:#555555; font-family:dotum,돋움;}
.plan_title .title {line-height:14px; font-size:11px; color:#9e9e9e; font-family:dotum,돋움;}

.plan_item .checkbox {width:13px; height:13px; position:relative; overflow:hidden; left:0; top:0px;}
.plan_item .text {line-height:16px; font-size:11px; color:#787879; font-family:dotum,돋움;}

.star0 {width:85px; height:18px; background:transparent url('<?=$dmshop_plan_path?>/img/reply_star.png') no-repeat;}
.star1 {width:85px; height:18px; background:transparent url('<?=$dmshop_plan_path?>/img/reply_star.png') no-repeat 0px -18px;}
.star2 {width:85px; height:18px; background:transparent url('<?=$dmshop_plan_path?>/img/reply_star.png') no-repeat 0px -36px;}
.star3 {width:85px; height:18px; background:transparent url('<?=$dmshop_plan_path?>/img/reply_star.png') no-repeat 0px -54px;}
.star4 {width:85px; height:18px; background:transparent url('<?=$dmshop_plan_path?>/img/reply_star.png') no-repeat 0px -72px;}
.star5 {width:85px; height:18px; background:transparent url('<?=$dmshop_plan_path?>/img/reply_star.png') no-repeat 0px -90px;}

.plan_cart .title {line-height:14px; font-size:11px; color:#9e9e9e; font-family:dotum,돋움;}
</style>

<!--[if IE 6]>
<script type="text/javascript">
/* IE6 PNG 배경투명 */
DD_belatedPNG.fix('.star0');
DD_belatedPNG.fix('.star1');
DD_belatedPNG.fix('.star2');
DD_belatedPNG.fix('.star3');
DD_belatedPNG.fix('.star4');
DD_belatedPNG.fix('.star5');
</script>
<![endif]-->

<script type="text/javascript" src="<?=$dmshop_plan_path?>/plan.js"></script>

<div id="item_data" style="display:none;"></div>
<div id="item_preview" style="display:none;"></div>

<form method="post" name="formItem">
<input type="hidden" name="url" value="<?=$urlencode?>" />
<input type="hidden" name="m" value="" />
<input type="hidden" name="cart_type" value="" />
<input type="hidden" name="item_id" value="" />
<input type="hidden" name="order_limit" value="" />
<input type="hidden" id="order_option" name="order_option" value="" />
</form>

<form method="get" name="formPlanSearch" action="plan.php" onSubmit="return planSearch('');">
<input type="hidden" name="pl_id" value="<?=$pl_id?>" />
<input type="hidden" name="sort" value="<?=$sort?>" />
<input type="hidden" name="liststyle" value="<?=$liststyle?>" />

<!-- 현재위치 표기 start //-->
<div style="border:1px solid #cccccc;" class="plan_position">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="1" bgcolor="#ffffff" class="none">&nbsp;</td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="33" bgcolor="#f4f4f4">
    <td width="10"></td>
    <td>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<?
echo "<td><a href='".$shop['path']."/' class='home'>홈</a></td>";
echo "<td width='20' align='center'><img src='".$dmshop_plan_path."/img/arrow.gif'></td>";
echo "<td><a href='".$shop['path']."/plan.php?pl_id=".$pl_id."' class='on'>".$dmshop_plan['title']."</a></td>";
?>
</tr>
</table>
    </td>
    <td width="270" align="right">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><span class="title">기획전내 상품검색</span></td>
    <td width="7"></td>
    <td><input type="text" name="q" value="<?=$q?>" onmouseover=" planKeywordReset();" onfocus="planKeywordReset();" class="input" /></td>
    <td width="3"></td>
    <td><input type="image" src="<?=$dmshop_plan_path?>/img/search.gif" border="0"></td>
</tr>
</table>
    </td>
    <td width="10"></td>
</tr>
</table>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="2" bgcolor="#efefef" class="none">&nbsp;</td></tr>
</table>
<!-- 현재위치 표기 end //-->

<!-- 혜택별보기 start //-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="plan_icon">
<tr>
    <td align="right">
<table border="0" cellspacing="0" cellpadding="0">
<tr height="30">
<td><span class='title'>혜택별 보기 : </span></td>
<? for ($i=0; $i<count($icon); $i++) { ?>
<td width="5"></td>
<td><input type="checkbox" name="ic[<?=$i?>]" value="<?=$icon[$i]['id']?>" class="checkbox" <? if ($icon[$i]['checked']) { echo "checked"; } ?> /></td>
<td width="5"></td>
<td><span class="title"><?=$icon[$i]['title']?></span></td>
<? } ?>
<td width="10"></td>
<td><a href="#" onclick="planSearch('search'); return false;"><img src="<?=$dmshop_plan_path?>/img/move.gif" border="0"></a></td>
</tr>
</table>
    </td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="1" bgcolor="#efefef" class="none">&nbsp;</td></tr>
</table>
<!-- 혜택별보기 end //-->

<?
// top 이미지
$file = shop_design_file("plan_top_".$pl_id); if ($file['upload_file']) { echo shop_file_view($shop['path']."/data/design/".shop_data_path("u", $file['datetime'])."/".$file['upload_file'], $file['upload_width'], $file['upload_height']); }

// top 내용
if ($dmshop_plan['text_top']) { echo stripslashes($dmshop_plan['text_top']); }
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="1" bgcolor="#e5e5e5" class="none">&nbsp;</td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="35"></td></tr>
</table>

<!-- 버튼 start //-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="plan_btn">
<tr>
    <td class="none">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><a href="#" onclick="planSearch('1'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort1<? if ($sort == '1') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('2'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort2<? if ($sort == '2') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('3'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort3<? if ($sort == '3') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('4'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort4<? if ($sort == '4') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('5'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort5<? if ($sort == '5') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('6'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort6<? if ($sort == '6') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('7'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort7<? if ($sort == '7') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td><img src="<?=$dmshop_plan_path?>/img/sort_line.gif"></td>
    <td><a href="#" onclick="planSearch('8'); return false;"><img src="<?=$dmshop_plan_path?>/img/sort8<? if ($sort == '8') { echo "_on"; } ?>.gif" border="0"></a></td>
</tr>
</table>
    </td>
    <td width="200" align="right">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td>
<!--[if IE 6]>
<style type="text/css">
.plan_btn .select_box {position:relative; overflow:hidden; left:0; top:-1px;}
</style>
<![endif]--> 

<style type="text/css">
.plan_btn .select {line-height: 1.5; font-size:12px; color:#000000; font-family:"돋움",Dotum,Helvetica,AppleGothic,Sans-serif;}
.plan_btn .selectBox-dropdown {width:60px; height:18px;}
.plan_btn .selectBox-dropdown .selectBox-label {padding:0px 5px 0px 5px;}
</style>

<script type="text/javascript">
$(document).ready( function() { $(".plan_btn select").selectBox(); });
</script>

<div class="select_box">
<select id="rows" name="rows" onchange="planSearch('search');" class="select">
    <option value="<?=$total_rows?>">상품출력 수</option>
    <option value="20">20개씩 보기</option>
    <option value="40">40개씩 보기</option>
    <option value="60">60개씩 보기</option>
    <option value="80">80개씩 보기</option>
</select>
</div>

<script type="text/javascript">
<? if ($rows) { ?>document.getElementById("rows").value = "<?=$rows?>";<? } ?>
</script></td>
    <td width="2"></td>
    <td><a href="#" onclick="planStyle('1'); return false;"><img src="<?=$dmshop_plan_path?>/img/liststyle1<? if ($liststyle == '1') { echo "_on"; } ?>.gif" border="0"></a></td>
    <td width="1"></td>
    <td><a href="#" onclick="planStyle('2'); return false;"><img src="<?=$dmshop_plan_path?>/img/liststyle2<? if ($liststyle == '2') { echo "_on"; } ?>.gif" border="0"></a></td>
</tr>
</table>
    </td>
</tr>
</table>
<!-- 버튼 end //-->
</form>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="10"></td></tr>
</table>

<!-- 타이틀 start //-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="plan_title">
<tr>
    <td class="bg1"></td>
    <td class="bg2">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="30">
    <td align="center"><img src="<?=$dmshop_plan_path?>/img/title1.gif"></td>
    <td width="1" valign="top">
<div style="position:relative; left:0; top:0px;">
<div style="position:absolute; right:8px; top:9px; width:200px;">
<table border="0" cellspacing="0" cellpadding="0" align="right">
<tr>
    <td><span class="count"><?=number_format($total_count);?></span></td>
    <td width="5"></td>
    <td><span class="title">개의 상품</span></td>
</tr>
</table>
</div>
</div>
    </td>
</tr>
</table>
    </td>
    <td class="bg3"></td>
</tr>
</table>
<!-- 타이틀 end //-->

<? if ($liststyle == '1') { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="20"></td></tr>
</table>
<? } else { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="10"></td></tr>
</table>
<? } ?>

<!-- 리스트 start //-->
<form method="post" name="formList">
<input type="hidden" name="url" value="<?=$urlencode?>" />
<input type="hidden" name="m" value="" />
<?
// 갤러리 모드
if ($liststyle == '1') {

// 가로갯수
$mod = (int)($dmshop_plan['item_width']);

$width = (int)(100 / $dmshop_plan['item_width'])."%";
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="plan_item">
<tr>
<?
for ($i=0; $i<count($list); $i++) {

    // 상품 페이지
    $item_link = $shop['path']."/item.php?pl_id=".$pl_id."&id=".$list[$i]['item_code'];

    $thumb = shop_item_thumb($list[$i]['item_id'], "plan".$pl_id, "default", $thumb_width, $thumb_height, shop_thumb_type($dmshop_design_image['image_plan_thumb_type']));

    if ($thumb) {

        $img = "<a href='".$item_link."'><img src='".$thumb."'  border='0'></a>";

    } else {

        $img = "<div style='background-color:#fafafa; width:".$thumb_width."px; height:".$thumb_height."px; overflow:hidden; text-align:center;'><div style='margin-top:".(int)(($thumb_height - 54) * 0.5)."px;'><a href='".$item_link."'><img src='".$dmshop_plan_path."/img/noimage.gif' border='0'></a></div></div>";

    }

    if ($i && $i%$mod == '0') {

        echo "</tr>\n";
        echo "<tr height='25'><td colspan='".(int)(($mod * 2) - 1)."'></td></tr>\n";
        echo "<tr height='1' bgcolor='#e5e5e5'><td colspan='".(int)(($mod * 2) - 1)."'></td></tr>\n";
        echo "<tr height='40'><td colspan='".(int)(($mod * 2) - 1)."'></td></tr>\n";
        echo "<tr>\n";

    }

    echo "<td width='".$width."' valign='top'><input type='hidden' name='item_id[".$i."]' value='".$list[$i]['item_id']."' />\n";
    echo "<table border='0' cellspacing='0' cellpadding='0' class='auto' style='table-layout:fixed;'><tr><td>\n";

    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td><div class='thumb'><table border='0' cellspacing='0' cellpadding='0'><tr><td width='".$thumb_width."' height='".$thumb_height."' align='center'>".$img."</td></tr></table></div></td></tr></table>\n";
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td height='5'></td></tr></table>\n";

    if ($list[$i]['item_icon']) {

        echo "<table border='0' cellspacing='0' cellpadding='0' class='auto'><tr><td>".shop_icon_view($list[$i]['item_icon'])."</td></tr></table>";
    
    }

    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td height='5'></td></tr></table>\n";
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td><a href='".$item_link."' class='title'>".$list[$i]['item_title']."</a></td></tr></table>\n";

    if ($list[$i]['item_price']) {

        echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td height='5'></td></tr></table>\n";
        echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td><span class='price'>".number_format($list[$i]['item_price'])."</span></td></tr></table>\n";

    }

    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td height='5'></td></tr></table>\n";
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td><span class='money'>".number_format($list[$i]['item_money'])."</span></td></tr></table>\n";
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td height='5'></td></tr></table>\n";
    echo "<table border='0' cellspacing='0' cellpadding='0'><tr><td class='chk_id'><input type='checkbox' name='chk_id[]' value='".$i."' class='checkbox' /></td><td width='5'></td><td><a href='#' onclick=\"itemCart('".$list[$i]['item_id']."'); return false;\" class='etc'>장바구니</a></td><td class='etc_line'>|</td><td><a href='#' onclick=\"itemFavorite('".$list[$i]['item_id']."'); return false;\" class='etc'>보관함</a></td><td class='etc_line'>|</td><td><a href='#' onclick=\"itemPreview('".$list[$i]['item_code']."'); return false;\" class='etc'>미리보기</a></td></tr></table>\n";

    echo "</td></tr></table>\n";
    echo "\n</td>";

}

// 나머지 셀을 채운다.
$cnt = $i%$mod;
if ($cnt) {

    for ($i=$cnt; $i<$mod; $i++) {

        echo "<td width='".$thumb_width."'>&nbsp;</td>";

    }

}
?>
</tr>
</table>
<?
}

// 리스트 모드
else if ($liststyle == '2') {

    // 고정 사이즈다
    $thumb_width = "80";
    $thumb_height = "80";
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="plan_item">
<?
for ($i=0; $i<count($list); $i++) {

    // 상품 페이지
    $item_link = $shop['path']."/item.php?pl_id=".$pl_id."&id=".$list[$i]['item_code'];

    $thumb = shop_item_thumb($list[$i]['item_id'], "plan".$pl_id, "default", $thumb_width, $thumb_height, shop_thumb_type($dmshop_design_image['image_plan_thumb_type']));

    if ($thumb) {

        $img = "<a href='".$item_link."'><img src='".$thumb."'  border='0'></a>";

    } else {

        $img = "<div style='background-color:#fafafa; width:".$thumb_width."px; height:".$thumb_height."px; overflow:hidden; text-align:center;'><div style='margin-top:".(int)(($thumb_height - 54) * 0.5)."px;'><a href='".$item_link."'><img src='".$dmshop_plan_path."/img/noimage.gif' border='0'></a></div></div>";

    }

    $reply_score = shop_reply_score_total($list[$i]['item_id']);
?>
<? if ($i > '0') { ?>
<tr height="1" bgcolor="#e5e5e5"><td colspan="9"></td></tr>
<? } ?>
<input type='hidden' name='item_id[<?=$i?>]' value='<?=$list[$i]['item_id']?>' />
<tr height="104">
    <td width="20"></td>
    <td width="20" class="chk_id"><input type='checkbox' name='chk_id[]' value='<?=$i?>' class='checkbox' /></td>
    <td width="82"><div class='thumb'><?=$img?></div></td>
    <td width="15"></td>
    <td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><a href='<?=$item_link?>' class='title'><?=$list[$i]['item_title']?></a></td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="5"><td></td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><a href='#' onclick="itemCart('<?=$list[$i]['item_id']?>'); return false;" class='etc'>장바구니</a></td>
    <td class='etc_line'>|</td>
    <td><a href='#' onclick="itemFavorite('<?=$list[$i]['item_id']?>'); return false;" class='etc'>보관함</a></td>
    <td class='etc_line'>|</td>
    <td><a href='#' onclick="itemPreview('<?=$list[$i]['item_code']?>'); return false;" class='etc'>미리보기</a></td>
</tr>
</table>

<? if ($reply_score) { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="5"><td></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><div class="star<?=$reply_score?>"></div></td>
</tr>
</table>
<? } ?>
    </td>
    <td width="100">
<?
$icon_view = shop_icon_view($list[$i]['item_icon']);
$icon_view = preg_replace("/(<img)/", "<p>$1", $icon_view);
$icon_view = preg_replace("/(border='0'>)/", "$1</p>", $icon_view);
echo $icon_view;
?>
    </td>
    <td width="100">
<? if ($list[$i]['item_price']) { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><span class='price'><?=number_format($list[$i]['item_price']);?></span></td>
</tr>
</table>
<? } ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><span class='money'><?=number_format($list[$i]['item_money']);?></span></td>
</tr>
</table>
    </td>
    <td width="100">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="8"><img src='<?=$dmshop_plan_path?>/img/dot.gif' class='up1'></td>
    <td><span class='text'>재고수량 : <? if ($list[$i]['item_option_use']) { echo number_format(shop_item_option_limit($list[$i]['item_id'])); } else { echo number_format($list[$i]['item_limit']); } ?></span></td>
</tr>
<tr>
    <td width="8"><img src='<?=$dmshop_plan_path?>/img/dot.gif' class='up1'></td>
    <td><span class='text'>판매수량 : <?=number_format(shop_order_limit($list[$i]['item_id']));?></span></td>
</tr>
<tr>
    <td width="8"><img src='<?=$dmshop_plan_path?>/img/dot.gif' class='up1'></td>
    <td><span class='text'>상품평 : <?=number_format($list[$i]['item_reply']);?></span></td>
</tr>
<tr>
    <td width="8"><img src='<?=$dmshop_plan_path?>/img/dot.gif' class='up1'></td>
    <td><span class='text'>적립금 : <?=number_format($list[$i]['item_cash']);?> P</span></td>
</tr>
</table>
    </td>
    <td width="20"></td>
</tr>
<? } ?>
</table>
<? } ?>
</form>
<!-- 리스트 end //-->

<? if (!$i) { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="150">
    <td align="center"><span class="not">상품이 없습니다.</span></td>
</tr>
</table>
<? } ?>

<? if ($liststyle == '1' || !$i) { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="40"><td></td></tr>
</table>
<? } ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="1" bgcolor="#e5e5e5" class="none">&nbsp;</td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="8"><td></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="plan_cart">
<tr>
    <td align="right">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><span class="title">선택한 상품을</span></td>
    <td width="10"></td>
    <td><a href="#" onclick="checkCart(); return false;"><img src="<?=$dmshop_plan_path?>/img/item_cart.gif" border="0"></a></td>
    <td width="1"></td>
    <td><a href="#" onclick="checkFavorite(); return false;"><img src="<?=$dmshop_plan_path?>/img/item_favorites.gif" border="0"></a></td>
    <td width="10"></td>
    <td><span class="title">담기</span></td>
</tr>
</table>
    </td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="8"><td></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="2" bgcolor="#e5e5e5" class="none">&nbsp;</td></tr>
</table>

<? if ($i && $total_count > $rows) { ?>
<table border="0" cellspacing="0" cellpadding="0">
<tr><td height="30"></td></tr> 
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><?=$shop_pages?></td>
</tr>
</table>
<? } ?>

<table border="0" cellspacing="0" cellpadding="0">
<tr><td height="50"></td></tr> 
</table>

<?
// bottom 내용
if ($dmshop_plan['text_bottom']) { echo stripslashes($dmshop_plan['text_bottom']); }

// bottom 이미지
$file = shop_design_file("plan_bottom_".$pl_id); if ($file['upload_file']) { echo shop_file_view($shop['path']."/data/design/".shop_data_path("u", $file['datetime'])."/".$file['upload_file'], $file['upload_width'], $file['upload_height']); }
?>