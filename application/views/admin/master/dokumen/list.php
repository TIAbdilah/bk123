
<?php $this->load->view('admin/master/dokumen/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
                <span class="pull-right">
                    <a href="<?php echo site_url('master/dokumen/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-striped" id="example">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Thumbnail</th>
                                <th width="40%">Nama Dokumen</th>
                                <th width="20%">Kategori</th>
                                <th width="15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td>
                                        <?php 
                                        if($data->thumb != null){
                                            echo '<img src="'.base_url() . 'assets/admin/doc/thumb/' . $data->thumb.'" width="120px">';
                                        }else{
                                            echo '<img src="'.base_url() . 'assets/admin/img/no_img.png" width="120px">';
                                        }
                                        ?>    
                                        
                                    </td>
                                    <td>
                                        <?php
                                        echo $data->nm_doc . '<br><br>'
                                        . 'Link :<br>'
                                        . base_url() . 'assets/admin/doc/' . $data->nm_doc
                                        ?>
                                    </td>
                                    <td><?php echo $data->kategori ?></td>
                                    <td class="dt-body-center">
                                        <a target="_blank" title="<?php echo $text['txt']->button_title['view_data'] ?>" 
                                           href="<?php echo base_url() . 'assets/admin/doc/' . $data->nm_doc ?>" class="btn btn-xs btn-success">
                                               <?php echo $text['txt']->button['view_data'] ?>
                                        </a>
                                        <!--<a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                        href="<?php echo site_url('master/dokumen/edit/' . $data->id_doc) ?>" class="btn btn-xs btn-warning">
                                        <?php echo $text['txt']->button['edit_data'] ?>
                                        </a>-->
                                        <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                           onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array('ini')) ?>')) {
                                                           window.location = '<?php echo site_url('master/dokumen/delete/' . $data->id_doc) ?>';
                                                       }" class="btn btn-xs btn-danger">
                                            <?php echo $text['txt']->button['delete_data'] ?>
                                        </a>                      
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>                
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>



