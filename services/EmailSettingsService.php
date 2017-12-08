<?php

namespace Craft;

class EmailSettingsService extends BaseApplicationComponent {

    public function updateEmailSettings()
    {
        $configName       = craft()->config->get('emailConfig');
        $globalConfigData = craft()->config->get('*', 'emailsettings');
        $configData       = craft()->config->get($configName, 'emailsettings');

        if (!$globalConfigData) {
            $globalConfigData = [];
        }

        if (!$configData) {
            $configData = [];
        }

        // Merge options
        $config = array_merge($globalConfigData, $configData);

        // Get the hash of the current email settings
        $current = craft()->systemSettings->getSettings('email');

        if ($current) {
            // Keys need to be in the same order for hashing
            ksort($current);
            ksort($config);

            $currentHash = md5(json_encode($current));
            $newHash = md5(json_encode($config));

            // Update the settings if they have changed
            if ($newHash != $currentHash) {
                craft()->systemSettings->saveSettings('email', $config);
            }
        }
    }

}