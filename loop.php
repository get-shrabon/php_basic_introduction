<h5 class="title">For Loop</h5>
<ul class="items">
    <?php
    for ($i = 1; $i <= 12; $i++) {
        echo "<li>This Box number is <strong>$i</strong></li>";
    }
    ?>
</ul>
<!--------------------------------- forEach Loop -------------------------------->
<h5 class="title">forEach Loop</h5>
<?php
$cars = ["Volovo", "Audi", "Mersitise", "BMW"];
foreach ($cars as $car) {
    echo "$car <br/>";
}
?>
<!--------------------------------- For Loop with Break -------------------------------->
<h5 class="title">For Loop with Break</h5>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    ;
    echo "this number is $i <br/>";
}
?>