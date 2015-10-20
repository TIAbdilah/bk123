<?php
if ($this->session->userdata('role') == 'super admin') {
    ?>
    <section class="panel">
        <header class="panel-heading tab-bg-dark-navy-blue">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#x1" title="Eksisting">EKS</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#x2" title="Perencanaan">PER</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#x3" title="Penanganan dan Pengendalian">PEN</a>
                </li>           
            </ul>
        </header>
        <div class="tab-content">
            <div id="x1" class="tab-pane active">
                <?php echo generate_data_pendukung('Eksisting', $data_detail_eks, $data); ?>
            </div>
            <div id="x2" class="tab-pane">
                <?php echo generate_data_pendukung('Perencanaan', $data_detail_per, $data); ?>
            </div>
            <div id="x3" class="tab-pane">
                <?php echo generate_data_pendukung('Penanganan', $data_detail_pen, $data); ?>
            </div>
        </div>
    </section>
    <?php
} else {
    if ($this->session->userdata('bagian') == 'eksisting') {
        echo generate_data_pendukung('Eksisting', $data_detail_eks, $data);
    } else if ($this->session->userdata('bagian') == 'perencanaan') {
        echo generate_data_pendukung('Perencanaan', $data_detail_per, $data);
    } else {
        echo generate_data_pendukung('Penanganan', $data_detail_pen, $data);
    }
}
?>