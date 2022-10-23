<?php
#Currency Exchange Practice Project
#10/23/2022

#Cambodia Currency
$riel = 2103942;
#Myanmar Currency
$kyat = 19092;
#Norway Currency
$krones = 109;
#Albania Currency
$lek = 9094;

#Exchange Rates
$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones = $krones * $krones_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

$conversion_fee = 1;

echo "Your $riel riel were exchanged for $$usd_from_riel usd at a conversion fee of $$conversion_fee.\n";

echo "Your $kyat kyat were exchanged for $$usd_from_kyat usd at a conversion fee of $$conversion_fee.\n";

echo "Your $krones krones were exchanged for $$usd_from_krones usd at a conversion fee of $$conversion_fee.\n";

echo "Your $lek lek were exchanged for $$usd_from_lek usd at a conversion fee of $$conversion_fee.\n";

$total_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - $conversion_fee * 4;

echo "Your total amount of foreign currency converted to usd is $$total_amount";