<?php $this->load->view('public2/content/breadcrumb') ?>
<div class="w-section section">
    <div class="w-container">
      <div class="w-row">
          <div class="w-col w-col-9 w-col-stack">
               <?php echo $data->isi?>
          </div>
          <div class="w-col w-col-3 w-col-stack">
              <?php $this->load->view('public2/content/sidebar') ?>
          </div>
      </div>
    </div>
</div>
            