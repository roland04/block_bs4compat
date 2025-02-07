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
 * TODO describe file index
 *
 * @package    block_bs4compat
 * @copyright  2024 Mikel Martín <mikel@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');

require_login();

$url = new moodle_url('/blocks/bs4compat/index.php', []);
$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());

$strtitle = get_string('pluginname', 'block_bs4compat') . ' - ' . get_string('checkcompatibility', 'block_bs4compat');
$PAGE->set_heading($strtitle);
echo $OUTPUT->header();
echo $OUTPUT->render_from_template('block_bs4compat/index', []);
echo $OUTPUT->footer();
