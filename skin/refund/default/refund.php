<?
if (!defined('_DMSHOP_')) exit;
?>
<style type="text/css">
.refund_position .home {line-height:14px; font-size:11px; color:#9e9e9e; font-family:gulim,굴림;}
.refund_position .off {line-height:14px; font-size:11px; color:#9e9e9e; font-family:gulim,굴림;}

.refund_title .b1 {margin-top:6px;}
.refund_title .b2 {margin-top:7px;}
.refund_title .t1 {font-weight:bold; line-height:15px; font-size:13px; color:#777777; font-family:gulim,굴림;}
.refund_title .t2 {line-height:15px; font-size:11px; color:#acacac; font-family:dotum,돋움;}
.refund_title .t3 {text-decoration:underline; line-height:15px; font-size:11px; color:#000000; font-family:dotum,돋움;}

.refund_all .bg {height:44px; background:url('<?=$dmshop_refund_path?>/img/title_bg.gif') repeat-x;}
.refund_all .t1 {line-height:14px; font-size:11px; color:#717171; font-family:dotum,돋움;}
.refund_all .date {line-height:18px; font-size:12px; color:#717171; font-family:gulim,굴림;}
.refund_all .view {text-decoration:underline; line-height:14px; font-size:11px; color:#7da7d9; font-family:dotum,돋움;}
.refund_all .time {line-height:18px; font-size:12px; color:#959595; font-family:gulim,굴림;}
.refund_all .thumb {border:2px solid #e4e4e4;}
.refund_all .item_name {line-height:14px; font-size:12px; color:#717171; font-family:gulim,굴림;}
.refund_all .option {line-height:15px; font-size:11px; color:#717171; font-family:gulim,굴림;}
.refund_all .money {line-height:15px; font-size:12px; color:#333333; font-family:gulim,굴림;}
.refund_all .order_type {line-height:15px; font-size:13px; color:#717171; font-family:gulim,굴림;}
.refund_all .payment {line-height:15px; font-size:12px; color:#959595; font-family:dotum,돋움;}
.refund_all .dot {height:1px; background:url('<?=$dmshop_refund_path?>/img/dot.gif') repeat-x;}

.refund_msg .t1 {line-height:18px; font-size:11px; color:#959595; font-family:dotum,돋움;}
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="2" bgcolor="#efefef" class="none">&nbsp;</td></tr>
<tr><td height="1" bgcolor="#cccccc" class="none">&nbsp;</td></tr>
<tr><td height="1" bgcolor="#ffffff" class="none">&nbsp;</td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="refund_position">
<tr height="34" bgcolor="#f8f8f8">
    <td>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<?
echo "<td width='10'></td>";
echo "<td><a href='".$shop['url']."' class='home'>홈</a></td>";
echo "<td width='20' align='center'><img src='".$dmshop_refund_path."/img/arrow.gif' class='up1'></td>";
echo "<td><a href='".$shop['https_url']."/mypage.php' class='off'>마이페이지</a></td>";
echo "<td width='20' align='center'><img src='".$dmshop_refund_path."/img/arrow.gif' class='up1'></td>";
echo "<td><a href='".$shop['https_url']."/refund.php' class='off'>환불 내역</a></td>";
?>
</tr>
</table>
    </td>
</tr>
</table>

<?
// 회원등급 및 기타정보
include_once("$dmshop_mypage_path/information.php");
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="40"><td></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="refund_title">
<tr>
    <td width="9"></td>
    <td width="82" valign="top"><img src="<?=$dmshop_refund_path?>/img/t1.gif"></td>
    <td width="10"></td>
    <td width="100"><p class="b1 t2"><span class="t1"><?=number_format($total_count);?></span> 건</p></td>
    <td align="right"><p class="b2 t2">환불(반품)을 요청하신 주문건과, 환불이 완료된 주문건을 확인 합니다.</p></td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="15"><td></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="refund_all">
<colgroup>
    <col width="139">
    <col width="2">
    <col width="">
    <col width="2">
    <col width="118">
    <col width="2">
    <col width="118">
</colgroup>
<tr class="bg">
    <td align="center" class="t1"><b>환불요청일</b></td>
    <td><img src="<?=$dmshop_refund_path?>/img/line.gif"></td>
    <td align="center" class="t1"><b>상품명/주문옵션</b></td>
    <td><img src="<?=$dmshop_refund_path?>/img/line.gif"></td>
    <td align="center" class="t1"><b>주문상태</b></td>
    <td><img src="<?=$dmshop_refund_path?>/img/line.gif"></td>
    <td align="center" class="t1"><b>환불상태</b></td>
</tr>
<?
for ($i=0; $i<count($list); $i++) {

    $thumb = shop_item_thumb($list[$i]['item_id'], "default", "", "50", "50", "2");
    if (!file_exists($thumb)) { $thumb = $dmshop_refund_path."/img/noimage.gif"; }
?>
<? if ($i > '0') { ?>
<tr><td colspan="7" class="dot"></td></tr>
<? } ?>
<tr height="74">
    <td align="center">
<table border="0" cellspacing="0" cellpadding="0" class="auto">
<tr>
    <td class="date"><?=date("Y-m-d", strtotime($list[$i]['order_refund_datetime']));?></td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="5"><td></td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" class="auto">
<tr>
    <td><a href="#" onclick="orderPopupView('<?=$list[$i]['order_code']?>'); return false;" class="view">상세주문내역</a></td>
</tr>
</table>
    </td>
    <td></td>
    <td>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="9"></td>
    <td width="50" align="center"><div class="thumb"><a href="<?=$shop['url']?>/item.php?id=<?=$list[$i]['item_code']?>" target="_blank"><img src="<?=$thumb?>" width="50" height="50" border="0"></a></div></td>
    <td width="20"></td>
    <td>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><a href="<?=$shop['url']?>/item.php?id=<?=$list[$i]['item_code']?>" target="_blank" class="item_name"><?=$list[$i]['order_title']?></a></td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="2"><td></td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><b class="money"><?=number_format($list[$i]['order_pay_money']);?> 원</b></td>
</tr>
</table>
    </td>
</tr>
</table>
    </td>
    <td></td>
    <td>
<table border="0" cellspacing="0" cellpadding="0" class="auto">
<tr>
    <td class="order_type"><?=shop_order_payment($list[$i]['order_payment']);?></td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="5"><td></td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" class="auto">
<tr>
    <td class="payment"><?=shop_pay_name($list[$i]['order_pay_type']);?></td>
</tr>
</table>
    </td>
    <td></td>
    <td align="center" class="order_type"><?=shop_order_type($list[$i]['order_type']);?></td>
</tr>
<? } ?>
<? if (!$i) { ?>
<tr><td colspan="7" height="225" align="center"><img src="<?=$dmshop_refund_path?>/img/refund_no.gif"></td></tr>
<? } ?>
<tr><td colspan="7" height="2" bgcolor="#dddddd"></td></tr>
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

<table border="0" cellspacing="0" cellpadding="0" class="auto">
<tr>
    <td>
<div style="border:2px solid #f6f6f6; background-color:#dddddd; padding:1px;">
<div style="padding:15px 20px; background-color:#ffffff;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="refund_msg">
<tr>
    <td class="t1">
- 환불접수 시, 쇼핑몰 운영자는 판매자의 과실 또는 소비자의 과실 여부를 판단하며, 판매자의 과실일 경우, 환불을 승인 합니다.<br>
- 주문자의 과실일 경우, 쇼핑몰 운영자의 판단하에 환불을 승인 및 거절할 수 있으며, 환불 승인시 <b>왕복 택배비 <?=number_format($dmshop['delivery_money'] * 2);?>원</b>을<br>
- 고객님이 부담하셔야 합니다. 환불이 거절될 경우, 해당 주문건은 주문내역에서 구매완료 상태로 확인하실 수 있습니다.<br>
- 환불 진행시, 고객님은 수령중인 상품을 반드시 지정 택배사인 <b><u><?=$dmshop['parcel_name']?> (전화 : <?=$dmshop['parcel_tel']?>)</u></b> 을 통해 반송해 주시기 바랍니다.<br>
- 반송상품 수령 후, 전자결제건은 자동으로 승인취소 및 환불되며 무통장입금/가상계좌로 결제된 주문건은 고객센터에서<br>
- 별도로 연락을 드리오니 환불 받으실 계좌번호를 알려주시기 바랍니다.<br>
    </td>
</tr>
</table>
</div>
</div>
    </td>
</tr>
</table>

<table border="0" cellspacing="0" cellpadding="0">
<tr><td height="50"></td></tr> 
</table>