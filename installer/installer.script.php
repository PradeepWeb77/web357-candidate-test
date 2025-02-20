<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Web357test
 * @author     Web357 Dev <careers@web357.com>
 * @copyright  2025 Web357.com
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
//no direct access
defined('_JEXEC') or die('restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Filesystem\Folder;
use Joomla\CMS\Installer\Installer;
use Joomla\CMS\Version;

class com_web357testInstallerScript
{

    /**
     * method to run after an install/update/uninstall method
     *
     * @return void
     */

    public function postflight($type, $parent)
    {
        if ($type == 'uninstall')
        {
            return true;
        }

        $src = $parent->getParent()->getPath('source');
        $manifest = $parent->getParent()->manifest;

        // Install Modules
        $modules = $manifest->xpath('modules/module');

        foreach ($modules as $module)
        {
            $name = (string)$module->attributes()->module;
            $client = (string)$module->attributes()->client;
            $path = $src . '/modules/' . $client . '/' . $name;

            $activate = (string)$module->attributes()->activate;
            $position = (isset($module->attributes()->position) && $module->attributes()->position) ? (string)$module->attributes()->position : '';
            $ordering = (isset($module->attributes()->ordering) && $module->attributes()->ordering) ? (string)$module->attributes()->ordering : 0;
            $platform = (isset($module->attributes()->platform) && $module->attributes()->platform) ? (string)$module->attributes()->platform : 'universal';

            $installer = new Installer;
            $result = $installer->install($path);
        }

    }
}
