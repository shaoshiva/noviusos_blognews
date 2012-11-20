<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'data_mapping' => array(
        'post_title' => array(
            'title'    => __('Title'),
        ),
        'context' => true,
        'author->user_name' => array(
            'title'         => __('Author'),
            'value' => function ($item) {
                return $item->author->fullname();
            },
        ),
        'publication_status' => true,
        'post_created_at' => array(
            'title'    => __('Date'),
            'value' => function ($item) {
                return \Date::create_from_string($item->post_created_at, 'mysql')->format('%m/%d/%Y %H:%M:%S'); //%m/%d/%Y %H:%i:%s
            },
            'dataType' => 'datetime',
        ),
        'preview_url' => array(
            'value' => function($item) {
                return $item->preview_url();
            },
        ),
    ),
);