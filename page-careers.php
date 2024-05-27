<?php get_header() ?>
<div class="careers relative">
  <div class="relative flex items-center min-h-52">
    <h1 class="absolute z-0"><?php load_title_mark(get_field('title_mark'), 200) ?></h1>
    <div class="relative w-full z-10 px-[10%]"><?php load_section_header(get_field('title'), get_field('subtitle'), get_field('description')) ?></div>
  </div>
  <section class="bg-content-bg box-border px-[10%] pb-10 relative">
    <div class="h-[50px] bg-white absolute left-0 w-full top-0 z-0"></div>

    <?php
    $careers_items = get_field('items');
    if ($careers_items) {
      foreach ($careers_items as $row) { ?>
        <div class="relative w-full h-[159px] bg-white rounded-lg shadow-lg py-9 px-9 z-10 flex items-start mb-6">
          <div class="flex">
            <img class="h-[65px]" src="<?php echo get_field('icon', $row['career']) ?>" />

            <div class="flex flex-col ml-5">
              <span class="poppins text-[#7a7b7c]"><?php echo get_field('department_name', $row['career']) ?></span>
              <span class="poppins-bold text-xl leading-8"><?php echo get_the_title($row['career']) ?></span>
              <div class="flex items-center poppins text-[#7A7B7C] text-[15px] mt-2 -ml-1">
                <img src="<?php echo get_template_directory_uri() . '/resources/image/location.svg' ?>" />
                <span class="ml-2"><?php echo get_field('place_of_work', $row['career']) ?></span>

                <img class="ml-3" src="<?php echo get_template_directory_uri() . '/resources/image/calendar.svg' ?>" />
                <span class="ml-2"><?php echo get_field('work_time', $row['career']) ?></span>

                <img class="ml-3" src="<?php echo get_template_directory_uri() . '/resources/image/reports.svg' ?>" />
                <span class="ml-2"><?php echo get_field('job_grade', $row['career']) ?></span>
              </div>
            </div>
            <button class="absolute right-[72px] bottom-7 w-[208px] h-[39px] rounded-md border border-black hover:bg-slate-50 transition-colors">
              <a href="<?php echo get_the_permalink($row['career']) ?>">Click for more details</a>
            </button>
          </div>
        </div>
    <?php }
    } ?>

    <div class="text-xl leading-[1.8]"><?php echo get_field('footer_description') ?></div>
  </section>
</div>
<?php get_footer() ?>