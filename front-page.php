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
    <div class="absolute left-1/2 -translate-x-1/2 top-[515px] w-[1280px] h-[348px] bg-theme-black rounded-[21px] px-16 py-[70px] flex">

      <div class="relative bg-primary w-[357px] h-full rounded-3xl text-white flex items-start flex-col pl-[42px] py-3">
        <span class="poppins-bold text-[56px] leading-[1.2]"><?php echo get_field('reputation')['emphasised']['number_value'] ?></span>
        <span class="poppins-bold text-base"><?php echo get_field('reputation')['emphasised']['number_label'] ?></span>
        <p class="poppins-medium text-sm w-[287px] leading-normal mt-1"><?php echo get_field('reputation')['emphasised']['description'] ?></p>
        <button class="w-16 h-16 absolute flex items-center justify-center bg-white rounded-full right-[18px] top-[18px]">
          <a href="<?php get_field('reputation')['emphasised']['link'] ?>">
            <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.2067 43.7933L43.0784 25.9216" stroke="#25262A" stroke-width="1.76089" stroke-linecap="round" />
              <path d="M25.9216 24.4919L43.8039 24.4919C44.1929 24.4919 44.5082 24.8072 44.5082 25.1962L44.5082 43.0784" stroke="#25262A" stroke-width="1.76089" stroke-linecap="round" />
            </svg>
          </a>
        </button>
      </div>

      <?php
      $normal_reputation_items = get_field('reputation')['normal_items'];
      if ($normal_reputation_items) {
        foreach ($normal_reputation_items as $row) { ?>
          <div class="flex-1 bg-white rounded-3xl ml-[18px] flex items-center justify-center flex-col">
            <?php if ($row['is_prefix']) { ?>
              <span class="poppins-medium text-base"><?php echo $row['number_label'] ?></span>
              <span class="poppins-bold text-[56px] text-primary leading-[1.2]"><?php echo $row['number_value'] ?></span>
            <?php } else { ?>
              <span class="poppins-bold text-[56px] text-primary leading-[1.2]"><?php echo $row['number_value'] ?></span>
              <span class="poppins-medium text-base"><?php echo $row['number_label'] ?></span>
            <?php }
            ?>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</section>

<div class="frontpage_content bg-content-bg box-border pt-[262px] px-[10%] pb-[360px] relative">
  <section class="our_courses">
    <?php load_section_header(get_field('our_courses')['title'], get_field('our_courses')['subtitle'], get_field('our_courses')['description']) ?>
    <div class="flex flex-wrap justify-between mt-20">
      <?php
      $courses = get_field('our_courses')['items'];
      if ($courses) {
        foreach ($courses as $row) { ?>
          <div class="w-[352px] h-[94px] rounded-lg border border-solid border-black flex items-center mb-7 hover:bg-white hover:shadow-md transition-all">
            <img class="w-[50px] h-[50px] ml-[22px]" src="<?php echo $row['icon'] ?>" />
            <span class="text-xl redhatdisplay-bold ml-3"><?php echo $row['name'] ?></span>
          </div>
      <?php }
      } ?>
    </div>
  </section>

  <section class="our_vmv mt-[105px]">
    <?php load_section_header(get_field('our_vmv')['title'], get_field('our_vmv')['subtitle'], get_field('our_vmv')['description']) ?>
    <div class="flex justify-between mt-20 flex-wrap">
      <?php
      $vmv_items = get_field('our_vmv')['items'];
      if ($vmv_items) {
        foreach ($vmv_items as $row) { ?>
          <div class="relative px-8 pt-14 pb-7 w-[400px] h-[320px] mb-7 rounded-3xl bg-white shadow-md hover:shadow-lg transition-all">
            <div>
              <div class="w-[14px] h-[14px] rounded-full bg-primary"></div>
              <div class="text-[64px] text-primary"><?php echo $row['key'] ?></div>
              <p class="jakarta-regular text-xl leading-normal tracking-[-3%]"><?php echo $row['description'] ?></p>
            </div>
            <img class="w-[90px] h-[90px] ml-[22px] absolute top-6 right-8" src="<?php echo $row['icon'] ?>" />
          </div>
      <?php }
      } ?>
    </div>
  </section>

  <section class="events mt-20">
    <?php load_section_header(get_field('events')['title'], get_field('events')['subtitle'], get_field('events')['description']) ?>
    <div class="mt-20 flex items-center flex-wrap">
      <div class="relative w-[457px] h-[515px] mb-3 rounded-[40px] bg-white shadow-lg overflow-hidden">
        <img class="w-full h-full object-cover object-center" src="<?php echo get_field('events')['emphasised']['image'] ?>" />
        <button class="w-16 h-16 absolute flex items-center justify-center bg-white rounded-full right-[18px] top-[18px]">
          <a href="<?php get_field('events')['emphasised']['link'] ?>">
            <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.2067 43.7933L43.0784 25.9216" stroke="#25262A" stroke-width="1.76089" stroke-linecap="round" />
              <path d="M25.9216 24.4919L43.8039 24.4919C44.1929 24.4919 44.5082 24.8072 44.5082 25.1962L44.5082 43.0784" stroke="#25262A" stroke-width="1.76089" stroke-linecap="round" />
            </svg>
          </a>
        </button>

        <div class="w-[90%] h-[170px] bg-white shadow-sm absolute left-1/2 -translate-x-1/2 bottom-7 rounded-[30px] p-8">
          <h4 class="flex items-center">
            <span class="inline-block w-2 h-2 rounded-full bg-primary"></span>
            <span class="poppins-bold text-2xl leading-[1.2] ml-2"><?php echo get_field('events')['emphasised']['title'] ?></span>
          </h4>
          <p class="poppins text-xl leading-7 mt-2"><?php echo get_field('events')['emphasised']['description'] ?></p>
        </div>
      </div>

      <?php
      $event_items = get_field('events')['items'];
      if ($event_items) {
        foreach ($event_items as $row) { ?>
          <a class="relative flex-grow max-w-[300px] w-[255px] h-[515px] ml-2 mb-3 rounded-[40px] bg-white shadow-lg overflow-hidden" href="<?php echo $row['link'] ?>">
            <img class="w-full h-full object-cover object-center" src="<?php echo $row['image'] ?>" />
          </a>
      <?php }
      } ?>
    </div>
  </section>

  <section class="contact_form w-[1267px] h-[384px] rounded-[40px] bg-[#2E2F33] absolute left-1/2 -translate-x-1/2 bottom-0 translate-y-1/4 flex">
    <img class="absolute left-0 bottom-0 w-[26%]" src="<?php echo get_template_directory_uri() . '/resources/image/contact_form_bg_mark.svg' ?>" />
    <img class="absolute right-0 top-0 w-[26%]" src="<?php echo get_template_directory_uri() . '/resources/image/contact_form_bg_mark.svg' ?>" />

    <div class="flex-1 h-full flex flex-col pl-20 justify-center">
      <h3 class="text-white text-4xl"><?php echo get_field('contact_form')['title'] ?></h3>
      <h4 class="poppins text-xl text-[#ECC68A] mt-4"><?php echo get_field('contact_form')['subtitle'] ?></h4>
    </div>

    <div class="flex-1 h-full flex flex-col justify-around box-border py-7 pr-10">
      <div class="w-full h-16 rounded-lg bg-white flex items-center p-3 z-10">
        <img class="w-6 h-6 ml-6" src="<?php echo get_template_directory_uri() . '/resources/image/icon_email.svg' ?>" />
        <input class="flex-1 outline-none ml-2 placeholder:poppins" type="email" placeholder="Enter your email" />
        <button class="w-24 h-full bg-primary rounded-lg text-white">Send</button>
      </div>
      <textarea class="flex-1 w-full bg-white mt-5 rounded-lg py-6 px-10 outline-none z-10" placeholder="Enter your content"></textarea>
    </div>
  </section>
</div>


<?php
get_footer();
