<strong><i class="icon-facetime-video"></i> Video</strong> :&nbsp;
<?php
if ($data_detail_pen != null) {
    for ($index = 1; $index < 8; $index++) {
        if ($data_detail_pen['vid_kawasan_' . $index] != '') {
            echo '<a class="btn btn-success" data-toggle="modal" href="#myModal' . $index . '">Video ' . $index . '</a>&nbsp;'
            . '<div class="modal fade" id="myModal' . $index . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Video_' . $index . '</h4>
                        </div>
                        <div class="modal-body">
                            <video width="100%" controls>
                                <source src="' . base_url() . 'assets/admin/img/video/' . $data_detail_pen['vid_kawasan_' . $index] . '" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }
} else {
    echo '-';
}
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th align="center" colspan="2" width="10%">#</th>
            <th align="center" width="40%">KRITERIA dan Indikator</th>
            <th align="center" width="20%">%</th>
            <th align="center" width="20%">Keterangan</th>
            <th align="center" width="10%">Foto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="6">A. Identifikasi Kondisi Kekumuhan</th>
        </tr>
        <?php
        $id_ind = '';
        foreach ($data_indikator as $dt_ind) {
            if (substr($dt_ind->nomor, 0, 1) < 8) {
                ?>
                <tr>
                    <?php
                    if (substr($dt_ind->nomor, 0, 1) != $id_ind) {
                        echo '<td><a title="' . $dt_ind->aspek . '" href="#">' . substr($dt_ind->nomor, 0, 1) . '</a></td>';
                    } else {
                        echo '<td>&nbsp;</td>';
                    }
                    ?>                
                    <td><?php echo substr($dt_ind->nomor, 1, 1) ?></td>
                    <td><?php echo $dt_ind->kriteria ?></td>
                    <?php
                    if ($data_detail_per != null) {
                        echo generate_td(
                                $text['arc']->tingkat_persen[$data_detail_per[$dt_ind->field_name . '_prsn']]
                                , $data_detail_per[$dt_ind->field_name . '_kt']
                                , $data_detail_per[$dt_ind->field_name . '_foto']
                                , $dt_ind->nomor . '_pen');
                    } else {
                        echo '<td>-</td><td>-</td><td>-</td>';
                    }
                    ?>
                </tr>
                <?php
                $id_ind = substr($dt_ind->nomor, 0, 1);
            }
        }
        ?>
        <tr>
            <th colspan="6">B. Identifikasi Pertimbangan Lain</th>
        </tr>
        <?php
        $id_ind = '';
        foreach ($data_indikator as $dt_ind) {
            if (substr($dt_ind->nomor, 0, 1) == 8) {
                ?>
                <tr>
                    <?php
                    if (substr($dt_ind->nomor, 0, 1) != $id_ind) {
                        echo '<td><a title="' . $dt_ind->aspek . '" href="#">' . substr($dt_ind->nomor, 0, 1) . '</a></td>';
                    } else {
                        echo '<td>&nbsp;</td>';
                    }
                    ?>                
                    <td><?php echo substr($dt_ind->nomor, 1, 1) ?></td>
                    <td><?php echo $dt_ind->kriteria ?></td>
                    <?php
                    if ($data_detail_per != null) {
                        if ($dt_ind->nomor == '8b') {
                            $prsn1 = $text['arc']->tingkat_persen_txt[$data_detail_pen[$dt_ind->field_name . '_prsn']];
                        } else if ($dt_ind->nomor == '8c') {
                            $prsn1 = $text['arc']->ya_tidak[$data_detail_pen[$dt_ind->field_name . '_prsn']];
                        } else {
                            $prsn1 = $text['arc']->ada_tidak[$data_detail_pen[$dt_ind->field_name . '_prsn']];
                        }
                        echo generate_td(
                                $prsn1
                                , $data_detail_per[$dt_ind->field_name . '_kt']
                                , ''
                                , $dt_ind->nomor . '_pen');
                    } else {
                        echo '<td>-</td><td>-</td><td>-</td>';
                    }
                    ?>
                </tr>
                <?php
                $id_ind = substr($dt_ind->nomor, 0, 1);
            }
        }
        ?>
        <tr>
            <th colspan="6">C. Identifikasi Legalitas Lahan</th>
        </tr>
        <?php
        $id_ind = '';
        foreach ($data_indikator as $dt_ind) {
            if (substr($dt_ind->nomor, 0, 1) == 9) {
                ?>
                <tr>
                    <?php
                    if (substr($dt_ind->nomor, 0, 1) != $id_ind) {
                        echo '<td><a title="' . $dt_ind->aspek . '" href="#">' . substr($dt_ind->nomor, 0, 1) . '</a></td>';
                    } else {
                        echo '<td>&nbsp;</td>';
                    }
                    ?>                
                    <td><?php echo substr($dt_ind->nomor, 1, 1) ?></td>
                    <td><?php echo $dt_ind->kriteria ?></td>
                    <?php
                    if ($data_detail_per != null) {
                        echo generate_td(
                                $text['arc']->tingkat_pn[$data_detail_per[$dt_ind->field_name . '_prsn']]
                                , $data_detail_per[$dt_ind->field_name . '_kt']
                                , ''
                                , $dt_ind->nomor . '_pen');
                    } else {
                        echo '<td>-</td><td>-</td><td>-</td>';
                    }
                    ?>
                </tr>
                <?php
                $id_ind = substr($dt_ind->nomor, 0, 1);
            }
        }
        ?>

    </tbody>
</table>