<?php 

require_once(__DIR__ . '/models/ABA.php');
require_once(__DIR__ . '/models/PiPay.php');
require_once(__DIR__ . '/models/Wing.php');

$allSales;
$ABAService = new ABA();
$PiPayService = new PiPay();
$WingService = new Wing();
function displayItem($data){
    usort($data,function($a,$b){ return $b['total'] <=> $a['total'];});
    $table = '<table style="width:100%" border="1"><tr><th>Item</th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>';
    foreach($data as $items => $item){
        $table .= '<tr><td>'.$item['item'].'</td><td>'.$item['price'].'</td><td>'.$item['quantity'].'</td><td>'.$item['method'].'</td><td>'.$item['total'].'</td></tr>';
    }
    $table .= '</table>';
    return $table;
}

echo '<h1>ABA sales</h1>';
echo displayItem($ABAService->getSales());
echo '<hr/>';
echo '<h1>PiPay sales</h1>';
echo displayItem($PiPayService->getSales());
echo '<hr/>';
echo '<h1>Wing sales</h1>';
echo displayItem($WingService->getSales());
echo '<hr/>';

echo '<hr/>';
echo '<h1>All sales</h1>';
$allSales = array_merge_recursive($ABAService->getSales(), $PiPayService->getSales(),$WingService->getSales());
echo displayItem($allSales);
?>