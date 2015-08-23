<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template_model
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Array_custom extends CI_Controller {

    var $active = array(
        '0' => '<span class="label label-danger">Tidak Aktif</span>',
        '1' => '<span class="label label-success">Aktif</span>'
    );

    public function index() {
        echo $this->tingkat_kumuh(18);
    }

    var $bagian = array(
        '1' => 'Eksisting',
        '2' => 'Perencanaan',
        '3' => 'Penanganan dan Pengendalian'
    );
    var $tingkat_persen = array(
        '0' => '0% - 25%',
        '1' => '26% - 50%',
        '3' => '51% - 75%',
        '5' => '76% - 100%'
    );
    var $tingkat_pn = array(
        '0' => '<strong>-</strong>',
        '1' => '<strong>+</strong>'
    );

    public function tingkat_kumuh($bobot) {
        if ($bobot < 19 || $bobot == null) {
            return '';
        }
        if (19 <= $bobot && $bobot <= 44) {
            return '<label title="Ringan" class="label label-success">RG</label>';
        }
        if (45 <= $bobot && $bobot <= 70) {
            return '<label title="Sedang" class="label label-warning">SD</label>';
        }
        if (71 <= $bobot) {
            return '<label title="Berat" class="label label-danger">BR</label>';
        }
    }

    public function tingkat_per_lain($bobot) {
        if ($bobot == null) {
            return '';
        }
        if (1 <= $bobot && $bobot <= 3) {
            return '<label title="Rendah" class="label label-success">RD</label>';
        }
        if (4 <= $bobot && $bobot <= 6) {
            return '<label title="Sedang" class="label label-warning">SD</label>';
        }
        if (7 <= $bobot) {
            return '<label title="Tinggi" class="label label-danger">TG</label>';
        }
    }

    public function tingkat_lainya($bobot) {
        if ($bobot == null) {
            return '';
        } else if ($bobot == 1) {
            return '<label class="label label-success"><i class="icon-plus"></i></label>';
        } else {
            return '<label class="label label-danger"><i class="icon-minus"></i></label>';
        }
    }

}
