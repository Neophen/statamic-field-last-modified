# A readonly fieldtype to show last modified for statamic
A simple statamic fieldtype to display readonly last modified date.

## Installation

1. Copy the "LastModified" folder to your Statamic `site/addons` directory
2. Run `php please update:addons` to load the addon's dependencies.

## Configuration

You can configure the addon by visiting CP > Addons > Show last modified:

  * **Date format** - the date format you want the last modified to be represented in.

For full reference of the supported format character and results, see the documentation of date(): http://www.php.net/manual/en/function.date.php

## Usage

 * add a `type: last_modified` field to the top level of your fieldset.

## Examples

In your fieldtype, it has to be a top level field, otherwise it will not work!
```
sections:
  main:
    display: "Main"
    fields:
      show_last_modified:
        type: last_modified
        display: Last modified
```

this will result in something like:
![show last modified](https://github.com/neophen/statamic-field-last-modified/raw/master/docs/img/figure-1.png "show last modified")



## License

[MIT License](http://emd.mit-license.org)
