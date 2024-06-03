<?php
$receiptNo = $_GET['receipt_no'] ?? '';
$totalAmount = $_GET['total_amount'] ?? '';
$numberOfType = $_GET['number_oF_type'] ?? '';
$clintName = $_GET['Clint_Name'] ?? '';
$date = $_GET['date'] ?? '';
$time = $_GET['time'] ?? '';
$Montant_Avance = $_GET['time'] ?? '';
$item_name = $_GET['item_name'] ?? '';
$item_qty = $_GET['item_qty'] ?? '';
$item_price = $_GET['item_price'] ?? '';
$totalPriceForOne = $_GET['totalPriceForOne'] ?? '';
$array_item_name = explode(",", $item_name);
$array_item_qty = explode(",", $item_qty);
$array_item_price = explode(",", $item_price);
$arrayOfPriceOfOne= explode(",", $totalPriceForOne);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
<div class="container">
 <div class="title">
    وصل التسليم
 </div>
 <div class="about-check">
    <div class="check-number">
        <div>وصل التسليم رقم </div>
        <div><?php echo $receiptNo; ?></div>
    </div>
    <div  class="check-date">
        <div> 
         <div>التاريخ</div>   
        </div>
        <div><?php echo $date; ?> <?php echo $time; ?></div>
    </div>
 </div>
 <div  class="client-info">
    <div>الزبون</div>
    <div>: <?php echo $clintName; ?></div>
   
 </div>
 <table>
    <thead>
        <tr>
            <th>العدد</th>
            <th >البضاعه</th>
            <th>ثمن الوحدة</th>
            <th>المبلغ</th>
        </tr>
    </thead>
    <tbody>
        
    <?php if (!empty($array_item_name[0] && $array_item_price[0] && $array_item_qty[0])) : ?>
    <?php for ($i = 0; $i < count($array_item_name); $i++) : ?>
        <tr>
            <td><?php echo $array_item_qty[$i]; ?></td>
            <td><?php echo $array_item_name[$i]; ?></td>
            <td><?php echo number_format($array_item_price[$i] && $array_item_price[$i], 2); ?></td>
            <td><?php echo number_format($arrayOfPriceOfOne[$i] &&$arrayOfPriceOfOne[$i], 2); ?></td>
        </tr>
    <?php endfor; ?>
<?php else : ?>
    <tr>
        <td colspan="4" align="center">No items to display</td>
    </tr>
<?php endif; ?>
    </tbody>
 </table>
 
 <table>
    <thead>
        <tr>
            <th>عدد المواد</th>
            <th>المجموع</th>
            <td><?php echo number_format($totalAmount,2); ?></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?php echo $numberOfType; ?></th>
            <th>الرصيد الكلي</th>
            <td><?php echo number_format(0,2); ?></td>
        </tr>
    </tbody>
 </table>
</div>
<script>

    window.print();
</script>
</body>
</html>