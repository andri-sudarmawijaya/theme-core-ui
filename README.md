# Theme CoreUI
CodeIgniter 3 Theme Based on Core UI

## How to Use

### Install CodeIgniter

```
$ composer create-project andri-sudarmawijaya/codeigniter-composer-installer codeigniter
```

### Install this package

```
$ cd /path/to/codeigniter
$ nano bin/install.php
```
add package as array
```
            'theme-core-ui' => array(
                'site'  => 'github',
                'user'  => 'andri-sudarmawijaya',
                'repos' => 'theme-core-ui',
                'name'  => 'Theme CoreUI',
                'dir'   => array('controllers','models', 'views'),
                'msg'   => 'See https://github.com/andri-sudarmawijaya/theme-core-ui/',
                'example_branch' => 'master',
            ),
```
copy folder assets to public
```
cp -Rv vendor/andri-sudarmawijaya/theme-core-ui/public/assets public
```
## Result
access /dashboard from your site.