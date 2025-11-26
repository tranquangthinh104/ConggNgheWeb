<?php
$file = fopen("65HTTT_Danh_sach_diem_danh.csv", "r");
?>
<table style="border: 1px solid black; border-collapse: collapse;">
    <?php
while (($row = fgetcsv($file)) !== false) { ?>
    <tr>
        <?php foreach ($row as $cell) { ?>
            <td style="border: 1px solid black; padding: 5px;">
                <?php echo htmlspecialchars($cell); ?>
            </td>
            <?php } ?>
    </tr>
    <?php } ?>
</table>
<?php
fclose($file);
?>