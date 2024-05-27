<?php
$parent_page = get_page_by_path('careers');
?>

<?php get_header() ?>
<div class="careers relative">
  <div class="relative flex items-center min-h-52">
    <h1 class="absolute z-0"><?php load_title_mark(get_field('title_mark', $parent_page->ID), 200) ?></h1>
    <div class="relative w-full z-10 px-[10%]"><?php load_section_header(get_field('title', $parent_page->ID), get_field('subtitle', $parent_page->ID), get_field('description', $parent_page->ID)) ?></div>
  </div>
  <section class="bg-content-bg box-border px-[10%] pb-10 relative">
    <div class="h-[50px] bg-white absolute left-0 w-full top-0 z-0"></div>
    <div class="relative w-full bg-white rounded-lg shadow-lg pt-9 pb-40 px-9 z-10 flex items-start flex-col mb-6">
      <div class="flex">
        <img class="h-[65px]" src="<?php echo get_field('icon') ?>" />

        <div class="flex flex-col ml-5">
          <span class="poppins text-[#7a7b7c]"><?php echo get_field('department_name') ?></span>
          <span class="poppins-bold text-xl leading-8"><?php the_title() ?></span>
          <div class="flex items-center poppins text-[#7A7B7C] text-[15px] mt-2 -ml-1">
            <img src="<?php echo get_template_directory_uri() . '/resources/image/location.svg' ?>" />
            <span class="ml-2"><?php echo get_field('place_of_work') ?></span>

            <img class="ml-3" src="<?php echo get_template_directory_uri() . '/resources/image/calendar.svg' ?>" />
            <span class="ml-2"><?php echo get_field('work_time') ?></span>

            <img class="ml-3" src="<?php echo get_template_directory_uri() . '/resources/image/reports.svg' ?>" />
            <span class="ml-2"><?php echo get_field('job_grade') ?></span>
          </div>
        </div>
      </div>
      <div class="mt-10">
        <?php the_content() ?>
      </div>

      <button class="absolute right-[72px] bottom-12 w-[208px] h-[39px] rounded-md border border-black hover:bg-slate-50 transition-colors">
        <a>Quick Apply</a>
      </button>
    </div>
  </section>
</div>
<?php get_footer() ?>