<?php
$title = get_query_var('title');
$font_size = get_query_var('font_size');
?>

<div class="text-[#F5F5F5] poppins-bold whitespace-nowrap text-center -z-10" style="font-size: <?php echo $font_size ?>px;">
  <?php echo $title ?>
</div>