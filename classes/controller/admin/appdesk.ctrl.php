<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Nos\BlogNews;

use Asset, Format, Input, Session, View, Uri;

class Controller_Admin_Appdesk extends \Nos\Controller_Admin_Appdesk
{

    protected $class_post;

    public function before()
    {
        $this->class_post = namespacize($this, 'Model_Post');
        parent::before();
    }

}
