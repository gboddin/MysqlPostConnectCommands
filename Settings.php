<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\MysqlPostConnectCommands;
use Piwik\Piwik;
use Piwik\Settings\SystemSetting;
use Piwik\Settings\UserSetting;
/**
 * Defines Settings for LeftMenu.
 */
class Settings extends \Piwik\Plugin\Settings {
  /** @var SystemSetting */
  public $MysqlPostConnectCommands;

  protected function init() {
    $this->setIntroduction($this->t('SettingsIntroduction'));
    $this->createMysqlPostConnectCommandsSetting();
  }


  private function createMysqlPostConnectCommandsSetting()
  {
    $this->MysqlPostConnectCommands = new SystemSetting('MysqlPostConnectCommands', $this->t('GlobalSettingTitle'));
    $this->MysqlPostConnectCommands->uiControlType = static::CONTROL_TEXTAREA;
    $this->MysqlPostConnectCommands->description  = $this->t('GlobalSettingDescription');
    $this->MysqlPostConnectCommands->defaultValue = 'SET wait_timeout=1200;';
    $this->MysqlPostConnectCommands->readableByCurrentUser = true;
    $this->addSetting($this->MysqlPostConnectCommands);
  }

  private function t($key)
  {
    return Piwik::translate('MysqlPostConnectCommands_' . $key);
  }
}
