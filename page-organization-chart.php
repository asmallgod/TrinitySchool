<?php get_header() ?>
<div class="careers relative">
  <div class="relative flex items-center min-h-52">
    <h1 class="absolute z-0"><?php load_title_mark(get_the_title(), 160) ?></h1>
    <div class="relative w-full z-10 px-[10%]"><?php load_section_header(get_field('title'), get_field('subtitle'), get_field('description')) ?></div>
  </div>
  <section class="bg-content-bg box-border px-[10%] pb-10 relative">
    <div class="h-[50px] bg-white absolute left-0 w-full top-0 z-0"></div>

    <div class="relative w-full bg-white rounded-lg shadow-lg py-9 px-9 z-10 flex items-center justify-center mb-6">
      <img class="max-w-full" src="<?php echo get_field('chart_image') ?>" />
      <h3 class="absolute top-20 right-20 flex flex-col">
        <span class="poppins-ebold text-xl"><?php echo get_field('chart_title') ?></span>
        <span class="poppins text-[15px]"><?php echo get_field('chart_subtitle') ?></span>
      </h3>
    </div>
  </section>
</div>
<?php get_footer() ?>