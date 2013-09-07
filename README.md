Whitestier is a port of [the whitebull drupal theme](http://drupal.org/project/whitebull) from web2.0 to css3.

This lowers compatability with older IE browsers (It will still render but without the fancy rounded corners and drop shadow) but supplies much larger benefits:

* Replaces images for rounded corners and drop shadows with CSS3
  * Reducing server requests by over 70% on most drupal websites (19 less images to request)
  * Reducing total size of the theme by ~1MB
* Removes added superfish and jquery slideshow
  * Slideshow turned into region that can be filled with a views slideshow instead
  * Superfish menu can be installed through nice menus with a theme hook [as per instructions](https://drupal.org/node/185543) (Advanced theming section)
