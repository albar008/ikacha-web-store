<div class="ev-schedule mb-3">
  <p class="mb-0 ev-date">
    <span>Tanggal</span><span>:</span><span><?php echo date('j M Y', strtotime($args['ev_start_date'])); ?>
      <?php echo $args['ev_end_date'] ? '<span> - </span>' . date('j M Y', strtotime($args['ev_end_date'])) : '' ?></span>
  </p>
  <p class="mb-0 ev-time"><span>Waktu</span><span>:</span><span><?php echo date('H:i', strtotime($args['ev_start_date'])); ?>
      <?php echo $args['ev_end_date'] ? '<span> - </span>' . date('H:i', strtotime($args['ev_end_date'])) : '' ?></span>
  </p>
</div>