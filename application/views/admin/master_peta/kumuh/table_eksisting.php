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
            if (substr($dt_ind->id, 0, 1) < 8) {
                ?>
                <tr>
                    <?php
                    if (substr($dt_ind->id, 0, 1) != $id_ind) {
                        echo '<td><a title="' . $dt_ind->kriteria . '" href="#">' . substr($dt_ind->id, 0, 1) . '</a></td>';
                    } else {
                        echo '<td>&nbsp;</td>';
                    }
                    ?>                
                    <td><?php echo substr($dt_ind->id, 1, 1) ?></td>
                    <td><?php echo $dt_ind->kriteria ?></td>
                    <?php
                    if ($data_detail_eks != null) {
                        echo generate_td(
                                $text['arc']->tingkat_persen[$data_detail_eks[$dt_ind->field_name . '_prsn']]
                                , $data_detail_eks[$dt_ind->field_name . '_kt']
                                , $data_detail_eks[$dt_ind->field_name . '_foto']
                                , $dt_ind->id . '_eks');
                    } else {
                        echo '<td>-</td><td>-</td>';
                    }
                    ?>
                </tr>
                <?php
                $id_ind = substr($dt_ind->id, 0, 1);
            }
        }
        ?>
        <tr>
            <th colspan="6">B. Identifikasi Pertimbangan Lain</th>
        </tr>
        <?php
        $id_ind = '';
        foreach ($data_indikator as $dt_ind) {
            if (substr($dt_ind->id, 0, 1) == 8) {
                ?>
                <tr>
                    <?php
                    if (substr($dt_ind->id, 0, 1) != $id_ind) {
                        echo '<td><a title="' . $dt_ind->kriteria . '" href="#">' . substr($dt_ind->id, 0, 1) . '</a></td>';
                    } else {
                        echo '<td>&nbsp;</td>';
                    }
                    ?>                
                    <td><?php echo substr($dt_ind->id, 1, 1) ?></td>
                    <td><?php echo $dt_ind->kriteria ?></td>
                    <?php
                    if ($data_detail_eks != null) {
                        if($dt_ind->id == '8b'){
                            $prsn1 = $text['arc']->tingkat_persen_txt[$data_detail_eks[$dt_ind->field_name . '_prsn']];
                        } else if($dt_ind->id == '8c'){
                            $prsn1 = $text['arc']->ya_tidak[$data_detail_eks[$dt_ind->field_name . '_prsn']];
                        } else{
                            $prsn1 = $text['arc']->ada_tidak[$data_detail_eks[$dt_ind->field_name . '_prsn']];
                        }
                        echo generate_td(
                                $prsn1
                                , $data_detail_eks[$dt_ind->field_name . '_kt']
                                , ''
                                , $dt_ind->id . '_eks');
                    } else {
                        echo '<td>-</td><td>-</td>';
                    }
                    ?>
                </tr>
                <?php
                $id_ind = substr($dt_ind->id, 0, 1);
            }
        }
        ?>
        <tr>
            <th colspan="6">C. Identifikasi Legalitas Lahan</th>
        </tr>
        <?php
        $id_ind = '';
        foreach ($data_indikator as $dt_ind) {
            if (substr($dt_ind->id, 0, 1) == 9) {
                ?>
                <tr>
                    <?php
                    if (substr($dt_ind->id, 0, 1) != $id_ind) {
                        echo '<td><a title="' . $dt_ind->kriteria . '" href="#">' . substr($dt_ind->id, 0, 1) . '</a></td>';
                    } else {
                        echo '<td>&nbsp;</td>';
                    }
                    ?>                
                    <td><?php echo substr($dt_ind->id, 1, 1) ?></td>
                    <td><?php echo $dt_ind->kriteria ?></td>
                    <?php
                    if ($data_detail_eks != null) {
                        echo generate_td(
                                $text['arc']->tingkat_pn[$data_detail_eks[$dt_ind->field_name . '_prsn']]
                                , $data_detail_eks[$dt_ind->field_name . '_kt']
                                , ''
                                , $dt_ind->id . '_eks');
                    } else {
                        echo '<td>-</td><td>-</td>';
                    }
                    ?>
                </tr>
                <?php
                $id_ind = substr($dt_ind->id, 0, 1);
            }
        }
        ?>

    </tbody>
</table>