<?php get_header(); ?>

<section class="front-page-banner w-[842px] mx-auto relative flex items-center flex-col">
  <h3 class="inline-block mx-auto mt-24">
    <?php
    $str = "TIC";
    $wrapped_str = '';

    for ($i = 0; $i < strlen($str); $i++) {
      $wrapped_str .= '<span class="relative text-base border-2 border-white border-solid 
      bg-primary w-9 h-9 inline-block text-white rounded-full text-center leading-9" style="right: ' . ($i * 10) . 'px">' . $str[$i] . '</span>';
    }

    echo $wrapped_str;
    ?>


    <span class="subtitle text-theme-black"><?php echo get_field('banner')['subtitle'] ?></span>
  </h3>
  <h1 class="text-[64px] mt-6 leading-[84px]"><?php echo get_field('banner')['title_top'] ?></h1>
  <h1 class="text-[64px] leading-[84px] text-primary"><?php echo get_field('banner')['title_bottom'] ?></h1>
  <p class="poppins text-theme-black text-center w-[831px] mt-6 leading-7"><?php echo get_field('banner')['description'] ?></p>

  <button class="z-20 w-[150px] h-10 border text-theme-black border-black rounded-[5px] mt-6 hover:bg-slate-50">
    <a href="<?php echo get_field('banner')['button_link'] ?>"><?php echo get_field('banner')['button_label'] ?></a>
  </button>


  <div class="z-10 relative -translate-y-14 h-[645px]">
    <img class="min-w-[1266px]" src="<?php echo get_field('banner')['cover_image'] ?>" />
    <div class="absolute left-1/2 -translate-x-1/2 top-[515px] w-[1280px] h-[348px] bg-theme-black rounded-[21px] px-16 py-[70px]"></div>
  </div>
</section>

<section class="content bg-content-bg h-[500px] mx-[101px] box-border"></section>


<?php
get_footer();
