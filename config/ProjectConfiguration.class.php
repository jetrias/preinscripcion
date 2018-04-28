<?php
//require_once '/var/www/symfony-1.4.20/lib/autoload/sfCoreAutoload.class.php';
require_once 'C://wamp//www//symfony-1.4.20//lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfAdminThemejRollerPlugin');
    $this->enablePlugins('sfDependentSelectPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
