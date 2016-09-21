 <?php
 for ($i=0,$x=0; $x<16; $x++){
  for ($y=0,$y=0; $y<16; $y++){
  $chars[$x][$y] = array ($i, chr ($i));
  $i++;
  }
  }
 ?>
 <table border=1 cellpadding=1 cellspacing=0>
 <?foreach ($chars as $row){?>
 <tr>
 <?foreach ($row as $cell) { ?>
 <td>
 <?=$cell[0]?>:
 <b><tt><?=$cell[1]?></tt></b>
 </td>
 <?}?>
 </tr>
 <?}?>