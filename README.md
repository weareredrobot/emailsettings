# Email Settings plugin for Craft CMS

Brought to you by [Red Robot](http://red-robot.co.uk)

## Licence

### MIT Software License

This plugin and all related code and documentation is Copyright &copy; 2017 Red Robot Digital Ltd.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Overview

Craft 2.x does not allow email to be configured on a per-environment basis. This plugin fixes that, and allows you to have different email settings depending on the environment your Craft site is running in. For example the local / development versions of your site could use one email provider, and the live version another.

It is recommended that you configure the plugin email settings *before* installing the plugin in the Control Panel.

> This plugin works with Craft 2.4.x and Craft 2.5.x. It isn't required for [Craft 3](https://github.com/craftcms/docs/blob/master/en/configuration.md#application-config).

## Installation

Download and unzip the plugin in your  `craft/plugins`  folder. 

> Make sure that the plugin folder is called `emailsettings`.

Once that's done, view the Craft Control Panel, go to *Settings > Plugins*, then you should see the plugin has been detected by Craft. Before hitting Install, we should configure the email settings for each environment.

Firstly, open `craft/plugins/emailsettings/config.php`. You’ll see some example email configurations here. You should edit / add a configuration array for each email provider you’ll be using.

> Email settings in the plugin file are ‘merged / inherited’ in the same was as the Craft general config file.

Once you’ve configured the various email provider details, open `craft/config/general.php`. To make all domains use the ‘mailtrap’ configuration (for example), edit the file as follows:

```php
return [
    '*' => [
        'siteUrl' => SITE_URL,
          // ...
        'emailConfig' => 'mailtrap'
    ],
```

Now every environment will use the ‘mailtrap’ configuration defined in `craft/plugins/emailsettings/config.php`. Add additional `emailConfig` keys / values to configure email for your other environments as needed.

Once you’ve finished with the configuration, hit ‘Install’, then visit *Settings > Email* in the Craft Control Panel.

You should see a notice saying the settings are being overridden by the plugin.  Scroll down, hit ‘Test’, and you should receive a test email using the email provider for the current environment.

If you change any of the email settings in either the plugin config file, or the Craft plugin file, the site email configuration will updated the next time a page is viewed in the site (i.e. you can just refresh the Email Settings page, and the settings will be updated automatically).

If you have any questions, feedback, or need help with the plugin, please feel free to email us at hello@red-robot.co.uk.

Pull requests / issues welcomed :-)
