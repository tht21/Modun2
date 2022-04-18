<table>
<?php
for($i=1;$i<=3;$i++){
    echo '<tr>';
    for($j=1;$j<=7;$j++){
        echo '<td>'.'*'.'</td>';
    }
        echo '</tr>';
}
?>
</table>
<script>document.write("----------------------------------")</script>
<table>
<?php
for($i=1;$i<=5;$i++){
    echo '<tr>';
    for($j=1;$j<=$i;$j++){
        echo '<td>'.'*'.'</td>';
    }
        echo '</tr>';
}
?>
</table>
<script>document.write("----------------------------------")</script>
<table>
<?php
for($i=5;$i>=1;$i--){
    echo '<tr>';
    for($j=1;$j<=$i;$j++){
        echo '<td>'.'*'.'</td>';
    }
        echo '</tr>';
}
?>
</table>