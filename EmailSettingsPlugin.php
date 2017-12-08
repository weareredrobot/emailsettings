<?php
/**
 * Email Settings plugin for Craft CMS
 *
 * Configure email settings on a per-environment basis
 *
 * This plugin and all related code / documentation is Copyright &copy; 2017 Red Robot Digital Ltd.
 *
 * By purchasing this plugin, you have the right to use it in as many Craft sites as you want.
 * You are not allowed to re-sell the plugin and / or remove any copyright notices from the
 * documentation or source code.
 *
 * @author    Red Robot Digital Ltd
 * @copyright Copyright (c) 2017 Red Robot Digital Ltd
 * @link      http://red-robot.co.uk
 * @package   EmailSettings
 * @since     1.0.0
 */

namespace Craft;

class EmailSettingsPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();

        craft()->emailSettings->updateEmailSettings();

        if (craft()->request->isCpRequest() && craft()->userSession->isLoggedIn()) {
            $segments = craft()->request->getSegments();

            if (count($segments) == 2) {
                $path = implode('/', $segments);
                if ($path == 'settings/email') {
                    craft()->templates->includeJsResource('emailsettings/js/emailsettings.js');
                }
            }
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Email Settings');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Configure email settings on a per-environment basis');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'http://red-robot.co.uk/our-work/email-settings-craft-cms-plug-in';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'http://red-robot.co.uk/emailsettings/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Red Robot Digital Ltd';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://red-robot.co.uk';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onAfterInstall()
    {
        craft()->emailSettings->updateEmailSettings();
    }

}