<?php get_header(); ?>
<h1><?php load_title_mark(get_the_title(), 200) ?></h1>
<div class="relative mt-10">
  <img class="h-[623px] object-cover object-center" src="<?php echo get_field('banner')['image'] ?>" />
  <div class="absolute z-0 px-12 py-14 left-1/2 -translate-x-1/2 top-0 -translate-y-36 w-3/4 min-h-[600px] bg-white rounded-3xl shadow-2xl flex flex-wrap">
    <div class="flex-1 px-8">
      <h2 class="text-[64px] leading-tight"><?php echo get_field('banner')['title'] ?></h2>
      <div class="*:py-3 mt-8">
        <?php echo get_field('banner')['content'] ?>
      </div>
    </div>
    <div class="flex-1">
      <?php the_content() ?>
    </div>
  </div>
</div>
<div class="bg-content-bg box-border pt-[108px] px-[10%] pb-10 relative">
  <section class="our_vmv">
    <?php load_section_header(get_field('our_vmv')['title'], get_field('our_vmv')['subtitle'], get_field('our_vmv')['description']) ?>
    <div class="px-3">
      <?php
      $vmv_items = get_field('our_vmv')['items'];
      if ($vmv_items) {
        foreach ($vmv_items as $row) { ?>
          <div class="flex items-center mt-14">
            <div class="flex-1">
              <h3 class="redhatdisplay-ebold text-[40px]"><?php echo $row['title'] ?></h3>
              <h4 class="poppins text-xl max-w-[90%]"><?php echo $row['subtitle'] ?></h4>
            </div>
            <div class="flex-1">
              <img class="w-[568px] h-[140px] object-cover object-center rounded-xl" src="<?php echo $row['image'] ?>" />
            </div>

          </div>
      <?php }
      } ?>

      <div class="mt-14">
        <h3 class="redhatdisplay-ebold text-[40px]"><?php echo get_field("our_vmv")['core_values']['title'] ?><span class="text-2xl ml-2"><?php echo get_field("our_vmv")['core_values']['subtitle'] ?></span></h3>
        <div class="flex flex-wrap justify-between mt-10">
          <?php
          $core_value_items = get_field('our_vmv')['core_values']['items'];
          if ($core_value_items) {
            foreach ($core_value_items as $row) { ?>
              <div class="w-[370px] h-[170px] px-5 py-3 rounded-lg border border-solid border-black mb-7 hover:bg-white hover:shadow-md transition-all">
                <h3 class="flex items-center redhatdisplay-bold text-xl"><span class="inline-block w-[14px] h-[14px] mr-2 rounded-full bg-primary"></span><?php echo $row['title'] ?></h3>
                <span class="text-lg poppins"><?php echo $row['description'] ?></span>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="welcome_message mt-20">
    <?php load_section_header(get_field('welcome_message')['title'], get_field('welcome_message')['subtitle'], get_field('welcome_message')['description']) ?>

    <div class="bg-white rounded-3xl border border-black mt-12">
      <div class="relative w-full min-h-[583px] overflow-hidden " id="welcome_message_swiper">
        <div class="swiper-wrapper h-full text-[0px]" id="welcome_message_slide_content">
          <?php
          $welcome_message_items = get_field('welcome_message')['items'];
          if ($welcome_message_items) {
            foreach ($welcome_message_items as $row) { ?>
              <div class="swiper-slide h-full py-8 px-12 inline-block box-border">
                <div class="flex flex-col">
                  <div class="text-2xl leading-10 *:py-4">
                    <?php echo $row['message'] ?>
                  </div>
                  <div class="flex items-center mt-14 ml-5">
                    <img class="w-[77px] h-[77px] object-cover object-center rounded-full" src="<?php echo $row['author_icon'] ?>" />
                    <div class="flex flex-col ml-6">
                      <span class="poppins-bold text-xl"><?php echo $row['author_name'] ?></span>
                      <span class="poppins text-base"><?php echo $row['author_position'] ?></span>
                    </div>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
        <div class="absolute right-[86px] bottom-[60px] z-10">
          <?php get_template_part('template-parts/slide-page-button') ?>
        </div>
      </div>
    </div>

  </section>

  <section class="achievement mt-20">
    <?php load_section_header(get_field('achievement')['title'], get_field('achievement')['subtitle'], get_field('achievement')['description']) ?>
    <div class="relative w-full h-[420px] mt-12 py-1 overflow-hidden" id="achievement_swiper">
      <div class="swiper-wrapper h-full text-[0px]" id="ahievement-slide-content">
        <?php
        $achievement_items = get_field('achievement')['items'];
        if ($achievement_items) {
          foreach ($achievement_items as $row) { ?>
            <div class="swiper-slide inline-block w-[622px] h-full bg-white rounded-3xl shadow-md mr-8 p-8">
              <div class="w-full h-full flex items-center justify-between">
                <img class="w-[252px] border-primary border rounded-xl" src="<?php echo $row['image'] ?>" />
                <div class="w-[280px] h-full">
                  <h3 class="poppins-bold text-xxl"><?php echo $row['title'] ?></h3>
                  <div class="poppins text-base *:py-3"><?php echo $row['content'] ?></div>
                </div>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
    <div id="achievement_swiper_pagination" class="flex items-center justify-center mt-12"></div>
  </section>
</div>
<?php get_footer(); ?>