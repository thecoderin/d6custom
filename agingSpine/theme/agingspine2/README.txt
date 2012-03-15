; $Id;

Starkish is a compromize between the styleless "Stark" theme and all the other bulky
framework themes. It includes NO CSS (except for tabs) like Stark but includes page and
node templates along with convenient template.php functions like Zen (much of it was
borrowed from the great Basic theme at http://drupal.org/project/basic).

Features
  * Smart body, node, comment, and block classes
  * Simple .info file for easy customization
  * Lack of any sort of theming in templates
  * Option for registry rebuilds with page loads.
  * Option to display block edit links

Installation
  * Download it.
  * Unpack it.
  * Put the folder in /sites/all/themes (or sites/yoursite.com/themes).
  * If you rename the theme, rename the following items to your theme's name:
    - starkish folder
    - starkish.info
    - "starkish" in template.php and theme-settings.php (do a find/replace)
  * Replace screenshot.png image with a 150x90 image of your theme.
  * Head to admin/build/themes to enable it and make it the default.