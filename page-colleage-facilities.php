<?php get_header() ?>
<style>
  .facilities_content h1 {
    font-size: 24px;
    line-height: 1.5;
  }

  .facilities_content p {
    font-family: 'poppins';
  }
</style>
<div class="careers relative">
  <div class="relative flex items-center min-h-52">
    <h1 class="absolute z-0"><?php load_title_mark(get_the_title(), 160) ?></h1>
    <div class="relative w-full z-10 px-[10%]"><?php load_section_header(get_field('title'), get_field('subtitle'), get_field('description')) ?></div>
  </div>
  <section class="bg-content-bg box-border px-[10%] pb-10 relative">
    <div class="h-[50px] bg-white absolute left-0 w-full top-0 z-0"></div>

    <div class="relative w-full bg-white rounded-lg shadow-lg py-9 px-9 z-10 flex items-center mb-6">
      <div class="flex-1">
        <img class="w-[488px] h-[251px] rounded-md" src="<?php echo get_field('card1')['image1'] ?>" />
        <img class="w-[488px] h-[251px] rounded-md mt-9" src="<?php echo get_field('card1')['image2'] ?>" />
      </div>
      <div class="facilities_content flex-1 leading-loose">
        <div class="border-t border-b border-black px-6 py-7"><?php echo get_field('card1')['content'] ?></div>
        <table class="w-full poppins text-xxl">
          <thead>
            <tr class="text-center">
              <th class="w-1/3">Classroom No.</th>
              <th class="w-1/3">Sqm.</th>
              <th class="w-1/3">Capacity</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $classroom_items = get_field('card1')['classrooms'];
            if ($classroom_items) {
              foreach ($classroom_items as $row) { ?>
                <tr class="text-center">
                  <td><?php echo $row['classroom_number'] ?></td>
                  <td><?php echo $row['sqm'] ?></td>
                  <td><?php echo $row['capacity'] ?></td>
                </tr>
            <?php }
            } ?>
          </tbody>

        </table>
      </div>
    </div>

    <div class="relative w-full bg-white rounded-lg shadow-lg py-9 px-9 z-10 flex items-center mb-6 mt-12">
      <div class="flex-1">
        <img class="w-[488px] h-[251px] rounded-md" src="<?php echo get_field('card2')['image'] ?>" />
      </div>
      <div class="facilities_content flex-1 leading-loose">
        <div class="border-t border-b border-black px-6 py-7"><?php echo get_field('card2')['content'] ?></div>
      </div>
    </div>

  </section>
</div>
<?php get_footer() ?>