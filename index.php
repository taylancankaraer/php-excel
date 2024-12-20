<?php
/* www.phpmutfagi.com */

echo '<meta charset="utf-8" />'; //WE ADDED HTML UTF-8 CHECK TO AVOID CHARACTER ERROR IN ANY CASE.
header("Content-Type: application/vnd.ms-excel; charset=utf-8"); //WE HAVE DETERMINED WHICH FILE OPERATION WILL BE PERFORMED AND ITS CHARACTER.
header("Content-Disposition: attachment; filename=ilk-excelim-phpmutfagi-com.xls"); //WE HAVE DETERMINED THE NAME AND EXTENSION OF THE FILE TO BE DOWNLOADED.
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); //CACHE CONTROL; WE TURNED OFF CACHE CONTROLS BY SETTING THE CHECK FIELDS TO 0
header("Cache-Control: private", false); //CACHE CONTROL; WE REMOVED THE CACHE BY SETTING IT FALSE.
?>
<table border="1">
    <tr>
        <td style="font-size: 16px !important;font-weight: bold;background-color:red;color:white;">COLUMN 1</td>
        <td style="font-size: 16px !important;font-weight: bold;background-color:red;color:white;">COLUMN 2</td>
        <td style="font-size: 16px !important;font-weight: bold;background-color:red;color:white;">COLUMN 3</td>
        <td style="font-size: 16px !important;font-weight: bold;background-color:red;color:white;" colspan="2">THIS FIELD WAS TESTED TO MERGE COLUMNS.</td>
    </tr>
    <tr>
        <td style="font-size: 14px !important;font-weight: bold;">www.phpmutfagi.com</td>
        <td style="font-size: 14px !important;font-weight: bold;">Downloaded to learn excel structure with PHP.</td>
        <td style="font-size: 14px !important;font-weight: bold;"><?php echo date("d-m-Y H:i:s"); ?></td>
        <td style="font-size: 14px !important;font-weight: bold;">Merged column 1</td>
        <td style="font-size: 14px !important;font-weight: bold;">Merged column 2</td>
    </tr>
</table>
<?php /* www.phpmutfagi.com */ ?>
