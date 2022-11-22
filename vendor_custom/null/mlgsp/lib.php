<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * local_mlgsp - lib.php
 *
 * @package    local_mlgsp
 * @copyright  2022 Bernhard Strehl <moodle@software.bernhard-strehl.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Das ist der hook  <range>_<name>__standard_after_main_region_html
 * wird benutzt, um eine "hosted-by"-nachricht anzupinnen.
 */
function local_mlgsp_standard_after_main_region_html() {
    $code = "";
    // $code = html_writer::empty_tag("hr");
    $code .= html_writer::start_tag("style");
    $code .= '.hosted_notice {
                width:100%; 
                margin-top:1em;
                border-top:1px solid var(--secondary);
                }
             .hosted_notice div{
                width: 180px;
                margin: auto;
                font-size: 80%;
             }';
    $code .= html_writer::end_tag("style");
    $code .= html_writer::start_div('hosted_notice');
    $code .= html_writer::start_div();
    $code .= 'Hosted by ';
    $code .= html_writer::start_tag("a", array("target" => "_blank", "href" => "https://ml.phil.uni-augsburg.de/"));
    $code .= 'Medienlabor';
    $code .= html_writer::end_div();
    $code .= html_writer::end_tag("a");
    $code .= html_writer::end_div();
    return $code;
}
