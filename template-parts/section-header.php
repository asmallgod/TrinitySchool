<?php
$title = get_query_var('title');
$subtitle = get_query_var('subtitle');
$description = get_query_var('description');
?>
<header class="flex justify-between items-center px-3">
  <h3 class="flex-1 flex flex-col">
    <span class="poppins-bold text-5xl whitespace-nowrap"><?php echo $title ?></span>
    <span class="poppins text-primary text-[40px] whitespace-nowrap"><?php echo $subtitle ?></span>
  </h3>
  <p class="w-[557px] jakarta-medium text-xl leading-[1.8]"><?php echo $description ?></p>
</header>