<? get_header() ?>

<div class="our_faculty relative">
  <h1><?php load_title_mark(get_the_title(), 270) ?></h1>
  <div class="absolute w-full left-1/2 -translate-x-1/2 top-[150px] px-[10%]"><?php load_section_header(get_field('title'), get_field('subtitle'), get_field('description')) ?></div>
  <section class="bg-content-bg box-border px-[10%] relative">
    <div class="relative  -top-36">
      <div class="mt-16 flex justify-between flex-wrap gap-y-8">
        <?php
        $faculty_items = get_field('items');
        if ($faculty_items) {
          foreach ($faculty_items as $row) { ?>
            <div class="w-[410px] bg-white rounded-[40px] shadow-lg py-7 px-10">
              <div class="w-fit h-[68px] py-2 px-4 flex items-center rounded-full" style="background-color: <?php echo $row['color'] ?>;">
                <img class="inline-block w-[52px] h-[52px] rounded-full object-contain object-center mr-3" src="<?php echo $row['avatar'] ?>" />
                <span class="text-xl whitespace-nowrap"><?php echo $row['name'] ?></span>
              </div>
              <div class="text-xxl mt-[30px]"><?php echo $row['position'] ?> <span class="text-sm"><?php echo $row['position_suffix'] ?></span></div>
              <div class="faculty_content opacity-70 mt-3 text-[13px] leading-[1.9] max-w-[95%]"><?php echo $row['content'] ?></div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
    <div class="absolute right-16 bottom-8">
      <a class="text-lg underline underline-offset-8 flex items-center" href="<?php the_field('more_file_url') ?>" download><?php the_field('more_label') ?><img class="ml-4" src="<?php echo get_template_directory_uri() . '/resources/image/download.svg' ?>" /></a>
    </div>
  </section>
</div>


<? get_footer() ?>