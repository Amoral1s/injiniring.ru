<div class="single-services">
  <?php if(have_rows('services_inner')) : while(have_rows('services_inner')) : the_row(); ?>
  <a class="item" href="<?php the_sub_field('ssylka_na_uslugu'); ?>">
    <b><?php the_sub_field('nazvanie_uslugi'); ?></b>
    <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"  fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1511 11.371C11.1511 11.9923 11.6547 12.496 12.2761 12.496H22.288L10.9502 23.8337C10.5109 24.2731 10.5109 24.9854 10.9502 25.4247C11.3896 25.8641 12.1019 25.8641 12.5412 25.4247L23.879 14.087L23.879 24.0989C23.879 24.7202 24.3827 25.2239 25.004 25.2239C25.6253 25.2239 26.129 24.7202 26.129 24.0989L26.129 11.371C26.129 10.7496 25.6253 10.246 25.004 10.246H12.2761C11.6547 10.246 11.1511 10.7496 11.1511 11.371Z" fill="#FF4848"/>
      </svg>
    </div>
  </a>
  <?php endwhile; endif; ?>
</div>
  