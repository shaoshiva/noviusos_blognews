<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array (
    'controller_url'  => 'admin/{{application_name}}/tag',
    'model' => '{{namespace}}\Model_Tag',
    'messages' => array(
        'successfully deleted' => __('The tag has successfully been deleted!'),
        'you are about to delete, confim' => __('You are about to delete the tag <span style="font-weight: bold;">":title"</span>. Are you sure you want to continue?'),
        'you are about to delete' => __('You are about to delete the tag <span style="font-weight: bold;">":title"</span>.'),
        'exists in multiple context' => __('This tag exists in <strong>{count} contexts</strong>.'),
        'delete in the following contexts' => __('Delete this tag in the following contexts:'),
        'item deleted' => __('This tag has been deleted.'),
        'not found' => __('Tag not found'),
    ),
);
