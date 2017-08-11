=== Emaze ===
Contributors: emaze, ramiy
Tags: Emaze, presentation, embed
Requires at least: 3.5
Tested up to: 4.5
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed presentation from Emaze.com into your WordPress site.

== Description ==

Create amazing presentation and embed them to your WordPress site using [Emaze](https://www.emaze.com) online tools.

= About Emaze =

[Emaze.com](https://www.emaze.com) is the next generation of online presentations, empowering you to create an amazing impression through design and technology. Instead of the standardized templates and features other tools provide, emaze allows you to have limitation-free creativity.

You can choose from any of our pre-designed templates made from a wide range of categories, by top designers to fit your messaging. In every presentation, you can utilize innovative features from 3D scenes to 2D slides, pan and zoom, videos, animation, sound effects and more.

You can easily make the transition from PowerPoint to emaze by importing your presentation through our easy-to-use application. emaze gives you the ability to share your presentation without the hassle of sending a heavy file that’s too big to send.

https://www.youtube.com/watch?v=VL7peSju6bc

= Emaze WordPress Plugin =

Using this WordPress plugin you can embed [presentation](https://www.emaze.com/get-inspired/) into your WordPress site using the presentation URL.

Choose any presentation from Emaze, or create your own! Copy the presentation URL and paste it to the post text editor. Then simply click over to the visual editor to confirm that it loads properly.

= More Information =

For any questions or more information, please [contact us](https://www.emaze.com/contact-us/).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Emaze".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended Requirements =
* The latest WordPress version.
* PHP version 5.6 or greater.
* MySQL version 5.6 or greater.

== Frequently Asked Questions ==

= How do I embed presentations from Emaze? =

With this plugin you can use the presentation URL, just paste the URL into your post editor:
`http://app.emaze.com/834412/marketing-strategy`

= How do I set custom dimensions to my presentation? =

Since wordpress 4.2, you can double click the embedded item to set max width and max height. It will add the WordPress `[embed]` shortcode:
`[embed width="400" height="300"]http://app.emaze.com/834412/marketing-strategy[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works with all the themes.

== Screenshots ==
1. Pasting the presentation URL to the text-editor.
2. Pasting the presentation URL to the visual-editor.

== Changelog ==

= 1.4 (2015-04-04) =
* Remove po/mo files from the plugin.
* Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin.
* Move plugin files to 'includes' directory.

= 1.3 (2015-07-07) =
* Fix embed handler - error in v1.2.

= 1.2 (2015-07-01) =
* Update embed handler REGEX to embed from <app.emaze.com> and <www.emaze.com> and <emaze.com>.

= 1.1 (2015-06-21) =
* Add ssl support - embed http and https items.
* Fix embed handler - better embed code.
* Add i18n support.
* Add hebrew (he_IL) traslation.

= 1.0 (2015-06-07) =
* Initial release.
* Register embed handler.
