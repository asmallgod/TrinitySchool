<?php
$page_content = get_post_field('post_content', get_the_ID());
$blocks = parse_blocks($page_content);
$about_singapore = "";
$financial_matters = "";
$shopping_and_eating = "";
$singapore_law = "";
foreach ($blocks as $block) {

  $name = "";
  if ($block['attrs'] && $block['attrs']['metadata'] && $block['attrs']['metadata']['name']) {
    $name = $block['attrs']['metadata']['name'];
  }


  $block_content = render_block($block);


  if ($name == 'about_singapore') {
    $about_singapore = $block_content;
  } else if ($name == 'financial_matters') {
    $financial_matters = $block_content;
  } else if ($name == 'shopping_and_eating') {
    $shopping_and_eating = $block_content;
  } else if ($name == 'singapore_law') {
    $singapore_law = $block_content;
  }
}
?>

<?php get_header(); ?>
<h1><?php load_title_mark(get_the_title(), 200) ?></h1>

<section class="bg-content-bg box-border pb-10 relative">
  <div class="relative z-10">
    <img class="absolute w-full h-[923px] object-cover object-center" src="<?php echo get_field('living_in_singapor_banner_image') ?>" />
    <div class="relative z-30 px-12 py-14 left-1/2 -translate-x-1/2 top-0 -translate-y-40 w-3/4 min-h-[600px] bg-white rounded-3xl shadow-2xl flex flex-col">
      <?php echo $about_singapore ?>
    </div>
  </div>
  <div class="px-[10%] mt-8">
    <?php echo $financial_matters ?>
  </div>

  <div>
    <h1 class="poppins-bold text-[9vw] text-white whitespace-nowrap text-center">Shopping & Eating</h1>
    <div class="flex flex-col items-center">
      <img class="absolute w-full" src="<?php echo get_field('shopping_&_eating_banner_image') ?>" />
      <div class="relative -translate-y-20 z-10 px-12 py-14 w-3/4 min-h-[600px] bg-white rounded-3xl shadow-2xl">
        <?php echo $shopping_and_eating ?>
      </div>
    </div>
  </div>

  <div class="mt-24 px-[10%]">
    <?php echo $singapore_law ?>
    <div class="flex flex-wrap justify-between gap-y-6 gap-x-4 mt-14">
      <?php
      $law_items = get_field('singapore_law');
      if ($law_items) {
        foreach ($law_items as $row) { ?>
          <div class="w-[630px] h-[230px] rounded-[20px] border border-black flex flex-col py-8 px-11 hover:bg-white transition-colors">
            <div class="flex items-center">
              <img class="w-11 h-11 object-contain object-center mr-4" src="<?php echo $row['icon'] ?>" />
              <span class="poppins-bold text-xxl leading-8"><?php echo $row['title'] ?></span>
            </div>
            <p class="poppins text-lg leading-8 mt-4">
              <?php echo $row['description'] ?>
            </p>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>