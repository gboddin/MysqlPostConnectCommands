<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\MysqlFixTimeout;
/**
 *
 */
class MysqlFixTimeout extends \Piwik\Plugin
{
    public function getListHooksRegistered()
    {
        return array(
            'CronArchive.init.finish' => 'setTimeout'
        );
    }

    public function setTimeout($siteIds)
    {
      //checking if we're running from cli/cron :
      if ( ! \Piwik\SettingsServer::isArchivePhpTriggered() )
        //refuse reset the timeout for web users :
        return true;

      //get the current db settings
      $dbConfig = \Piwik\Db::getDatabaseConfig();

      //if its MySQL
      if($dbConfig['adapter'] == 'PDO\MYSQL')
        // set the timeout to 20minutes
        \Piwik\Db::query("SET wait_timeout=1200;");
    }
}

