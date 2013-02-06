=== Totem Press Page ===
Contributors:
Link: http://www.totemapp.com/
Tags: press page, totem
Requires at least: 3.0.1
Tested up to: 3.5
Stable tag: trunk
License: Apache 2.0
License URI: http://directory.fsf.org/wiki/License:Apache2.0

The Totem Press Page plugin lets you easily embed your Totem Press Page in your Wordpress website.

== Description ==

This plugin makes it easy to embed a [Totem](http://www.totemapp.com/) press page into your
Wordpress website.

== Installation ==

Here's all you need to do to get a Totem Press Page on your Wordpress website:

  1. Sign up for [Totem](http://www.totemapp.com/) and create your first press page.
  1. Upgrade your Press Page and visit the Goodies tab.
  1. Copy the shortcode for your press page (e.g. `[totem id="42"]`)
  1. Upload `totem-press-page` to the `/wp-content/plugins/` directory
  1. Activate the Totem Press Page plugin through the 'Plugins' menu in WordPress
  1. Create a new page on your Wordpress blog to act as your press page. Paste your
     shortcode into the page content and save the page.

For the best results, we recommend selecting a full-width template and turning
off comments for the page you embed Totem on.

== Changelog ==

= 0.3 =
Make changes to appease Wordpress, including (unfortunately) not using CDN-hosted, concatenated,
minified JavaScript resources, despite best-practice recommendations otherwise.

* Use Wordpress-provided jQuery
* Include jQuery Postmessage locally
* Include Press Page JavaScript locally

= 0.2 =
* First public release
