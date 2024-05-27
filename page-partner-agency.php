<?php get_header() ?>
<div class="our_faculty relative">
  <div class="relative flex items-center min-h-52">
    <h1 class="absolute z-0"><?php load_title_mark(get_the_title(), 200) ?></h1>
    <div class="relative w-full z-10 px-[10%]"><?php load_section_header(get_field('title'), get_field('subtitle'), get_field('description')) ?></div>
  </div>
  <section class="bg-content-bg box-border px-[10%] pb-10 relative">
    <div class="h-[50px] bg-white absolute left-0 w-full top-0 z-0"></div>

    <?php
    $agency_items = get_field('items');
    if ($agency_items) {
      foreach ($agency_items as $row) { ?>
        <div class="relative w-full h-[140px] bg-white rounded-lg shadow-lg py-7 px-10 z-10 flex items-start mb-6">
          <div class="poppins-bold text-xxl w-16 h-16 bg-[#99CAF7] rounded-full flex items-center justify-center"><?php echo $row['agent_name'][0] ?></div>
          <div class="ml-6">
            <div class="poppins text-[#7A7B7C] text-[15px]">Agent Code: <?php echo $row['agent_code'] ?></div>
            <div class="poppins-bold text-xl"><?php echo $row['agent_name'] ?></div>
            <div class="flex items-center poppins text-[#7A7B7C] text-[15px] mt-3">
              <img src="<?php echo get_template_directory_uri() . '/resources/image/location.svg' ?>" />
              <span class="ml-2"><?php echo $row['coutries'] ?></span>

              <img class="ml-3" src="<?php echo get_template_directory_uri() . '/resources/image/calendar.svg' ?>" />
              <span class="ml-2"><?php echo $row['start_date'] ?></span>&nbsp;-&nbsp;<span><?php echo $row['end_date'] ?></span>
            </div>

            <div class="absolute right-6 top-4 text-white">
              <?php if ($row['is_active']) { ?>
                <span class="inline-block h-full bg-[#2FA960] py-1 px-2 rounded-[4px]">Active</span>
              <?php } else { ?>
                <span class="inline-block h-full bg-[#cf4444] py-1 px-2 rounded-[4px]">InActive</span>
              <?php } ?>
            </div>
          </div>
        </div>
    <?php }
    } ?>
  </section>
</div>
<?php get_footer() ?>