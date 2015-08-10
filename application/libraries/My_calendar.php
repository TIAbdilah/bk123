<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyPagination
 *
 * @author TIAbdilah
 */
class My_calendar extends CI_Calendar {

    /**
     * Get Month Name
     *
     * Generates a textual month name based on the numeric
     * month provided.
     *
     * @access	public
     * @param	integer	the month
     * @return	string
     */
    function get_month_name($month) {
        if ($this->month_type == 'short') {
            $month_names = array('01' => 'cal_jan', '02' => 'cal_feb', '03' => 'cal_mar', '04' => 'cal_apr', '05' => 'cal_may', '06' => 'cal_jun', '07' => 'cal_jul', '08' => 'cal_aug', '09' => 'cal_sep', '10' => 'cal_oct', '11' => 'cal_nov', '12' => 'cal_dec');
        } else {
            $month_names = array('01' => 'cal_januari', '02' => 'cal_februari', '03' => 'cal_maret', '04' => 'cal_april', '05' => 'cal_mei', '06' => 'cal_juni', '07' => 'cal_juli', '08' => 'cal_agustus', '09' => 'cal_september', '10' => 'cal_oktober', '11' => 'cal_november', '12' => 'cal_desember');
        }

        $month = $month_names[$month];

        if ($this->CI->lang->line($month) === FALSE) {
            return ucfirst(str_replace('cal_', '', $month));
        }

        return $this->CI->lang->line($month);
    }

// --------------------------------------------------------------------

    /**
     * Set Default Template Data
     *
     * This is used in the event that the user has not created their own template
     *
     * @access	public
     * @return array
     */
    function default_template() {
        return array(
            'table_open' => '<table border="0" cellpadding="4" cellspacing="0" class="table table-striped">',
            'heading_row_start' => '<caption>',
            'heading_previous_cell' => '<span class="pull-left"><a href="{previous_url}">&lt;&lt;</a></span>',
            'heading_title_cell' => '<span class="text-center">{heading}</span>',
            'heading_next_cell' => '<span class="pull-right"><a href="{next_url}">&gt;&gt;</a></span>',
            'heading_row_end' => '</caption>',
            'week_row_start' => '<thead><tr>',
            'week_day_cell' => '<th>{week_day}</th>',
            'week_row_end' => '</tr></thead><tbody>',
            'cal_row_start' => '<tr>',
            'cal_cell_start' => '<td>',
            'cal_cell_start_today' => '<td>',
            'cal_cell_content' => '<a href="{content}">{day}</a>',
            'cal_cell_content_today' => '<a href="{content}"><strong>{day}</strong></a>',
            'cal_cell_no_content' => '{day}',
            'cal_cell_no_content_today' => '<strong>{day}</strong>',
            'cal_cell_blank' => '&nbsp;',
            'cal_cell_end' => '</td>',
            'cal_cell_end_today' => '</td>',
            'cal_row_end' => '</tr>',
            'table_close' => '</tbody></table>'
        );
    }

}
