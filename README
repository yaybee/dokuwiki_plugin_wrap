# Experimental update of Dokuwiki Wrap plugin.
The Wrap plugin is one of the most popular plugins of dokuwiki. Reading through the plugin comment pages a number of posted additions as well as requests for new features can be seen. Some of them have now been added to this *experimental* version of Wrap:

  * customisation of the picker tool output via Configuration Settings,
  * introduction of CSS variables for colors and images,
  * introduction of scalable svg images replacing png,
  * redefining the container (box) support of Wrap to make it more flexible (new notes and safety notes),
  * introduction of new box like containers: quotes & announcements
  * structured way of color support for Wrap,
  * some ability to change font sizes, 
  * a kind of automatic dark mode support,
  * some global settings for boxes, notes and quotes,
  * examples how to extend the style support using the new setup.

### Compatibility
Wrap plugin of 18-Oct-2022 is used as base. All current standard Wrap functionality should still work after installing the *experimental* changes. 

If you made changes to the Wrap plugin yourself, you should evaluate the impact of adding the changed files.

Tested with Dokuwiki versions: Hogfather & Igor.

## Installing the Experimental Wrap Plugin
This *experimental* version of Wrap is not available via the dokuwiki Extension Manager. You can however copy the changes with a bash script to your Wrap plugin.

### Install changes only
Do these steps:
- Install the original Wrap plugin
- Download the *experimental* Wrap plugin to a folder on your system
- Navigate to this *experimental* Wrap plugin folder
- Update the bash script **wcopy** with your base directory of dokuwiki (see below)
- Execute the **wcopy** script to copy the new content of *experimental* Wrap plugin into the Wrap plugin directory
- Copy the contents of the files **example.txt** and **original-example.txt** to pages in your dokuwiki
- Re-initialise dokuwiki by hitting the **Save** button in the Configuration Manager

Bash script **wcopy** contents; change *\<dokuwiki-base-dir\>* and make sure it is executable before starting it:
```
#!/bin/bash
cp -v ./action.php /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./example.txt /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./original_example.txt /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./helper.php /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./pdf.less /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./plugin.info.txt /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./print.less /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./README /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./all.less /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./style.less /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./userstyle.less /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v ./conf/default.php /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap/conf
cp -v ./conf/metadata.php /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap/conf
cp -v ./lang/en/* /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap/lang/en
cp -v ./lang/nl/* /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap/lang/nl
cp -v ./images/README /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap
cp -v -r ./images/svg /<dokuwiki-base-dir>/config/dokuwiki/lib/plugins/wrap/images
```

### User changes to Wrap Plugin
To enable the *user defined additions* as decribed in **example.txt** you can copy the file **userstyle.less** to your Dokuwiki or *merge* it with an existing file:
```
cp ./userstyle.less /<dokuwiki-base-dir>/config/dokuwiki/conf
```
### Revert back to original Wrap version
Just *re-install* Wrap using the Extension Manager.

## Example.txt output preview
An image file of the rendered page **example.txt** has been added as  **example.png**.
This page shows the new additions to Wrap and explains the architecture of the new CSS3 style templates:

![see doc/example.png](./doc/example.png?raw=true "Example output")