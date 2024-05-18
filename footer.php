</main>
<footer class="bg-[#D8BB88] flex pt-[115px] pb-16 flex-wrap">
  <div class="flex-1 flex justify-center items-center h-[440px]">
    <div class="flex flex-col">
      <img class="w-[272px]" src="<?php the_field('footer_logo', 'option') ?>" />
      <p class="poppins w-[580px] mt-8"><?php the_field('footer_description', 'option') ?></p>
      <div class="flex items-center mt-8">
        <?php
        $media_items = get_field('media_items', 'option');
        if ($media_items) {
          foreach ($media_items as $row) { ?>
            <a class="block w-10 h-10 relative mr-3" href="<?php echo $row["url"] ?>"><img class="w-full h-full" src="<?php echo $row["icon"] ?>" /></a>
        <?php }
        } ?>
        <div class="poppins"><?php the_field('cpe_reg_text', 'option') ?></div>
      </div>
    </div>
  </div>
  <div class="flex-1 flex justify-center pt-16 pr-16">
    <div class="footer_navigation">
      <h3 class="poppins-bold text-2xl text-white">Navigation</h3>
      <div class="flex flex-col">
        <?php
        $footer_navigation_items = get_field('footer_navigation', 'option');
        if ($footer_navigation_items) {
          foreach ($footer_navigation_items as $row) { ?>
            <a class="poppins mt-4" href="<?php echo $row["link"] ?>"><?php echo $row['name'] ?></a>
        <?php }
        } ?>
      </div>
    </div>
    <div class="footer_license ml-28">
      <h3 class="poppins-bold text-2xl text-white">License</h3>
      <div class="flex flex-col">
        <?php
        $footer_license_items = get_field('footer_license', 'option');
        if ($footer_license_items) {
          foreach ($footer_license_items as $row) { ?>
            <a class="poppins mt-4" href="<?php echo $row["link"] ?>"><?php echo $row['name'] ?></a>
        <?php }
        } ?>
      </div>
    </div>
    <div class="footer_contact ml-28">
      <h3 class="poppins-bold text-2xl text-white">Contact</h3>
      <div class="flex flex-col items-start">
        <?php
        $footer_contact_items = get_field('footer_contact', 'option');
        if ($footer_contact_items) {
          foreach ($footer_contact_items as $row) { ?>
            <div class="flex items-start justify-center mt-4">
              <span class="w-6 h-6 inline-block mr-2">
                <img class="w-full h-full object-contain object-center mr-1" src="<?php echo $row['icon'] ?>" />
              </span>
              <span class="poppins inline-block flex-1"><?php echo $row['text'] ?></span>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>