<table class="table table-striped">
    <thead>
        <tr>
            <th align="center" colspan="2" width="10%">#</th>
            <th align="center" width="40%">KRITERIA dan Indikator</th>
            <th align="center" width="20%">%</th>
            <th align="center" width="30%">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="5">A. Fisik</th>
        </tr>
        <?php
        $id_ind = '';
        foreach ($data_indikator as $dt_ind) {
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
                if ($data_detail_per != null) {
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
        ?>
        <tr>
            <th colspan="5">B. Non Fisik</th>
        </tr>
        <tr>
            <th colspan="5">C. Lainya</th>
        </tr>

    </tbody>
</table>