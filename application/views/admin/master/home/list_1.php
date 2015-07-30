
<?php $this->load->view('admin/master/home/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>
    </div>
    <div class="panel-body">
        <h2>Welcome, <?php echo $this->session->userdata('username')?></h2>
    </div>
</div>



