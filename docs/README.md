# CakePHP Plugin

## Installation

```
composer require token27/cakephp-plugin-skeleton
```

### Load the plugin

If you prefer load the plugin from command CLI:

```sh
bin/cake plugin load  YourPluginName
```

If you want edit in your `you-app-path/src/Application.php`'s bootstrap():

```php
$this->addPlugin('YourPluginName');
```

If you want to also access the backend controller (not just using CLI), you need to use

```php
$this->addPlugin('YourPluginName', ['routes' => true]);
```

### Create database plugin schema

Run the following command in the CakePHP console to create the tables using the Migrations plugin:

```sh
bin/cake migrations migrate -p YourPluginName
```

### Global configuration

The plugin allows some simple runtime configuration.
You may create a file called `app_your_plugin_name.php` inside your `config` folder (NOT the plugins config folder) to
set the
following values:

- Use a different connection:

```php
$config['YourPluginName']['connection'] = 'custom'; // Defaults to 'default'
```

### Shell

- Example

```
bin/cake your_plugin_name.example --debug 1
```
