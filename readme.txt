=== Transliterate Arabic ===
Contributors: little-wolf
Tags: Arabic,transliteration,romanization,language
Requires at least: 1.5.2, PHP 4.0.2
Tested up to: 4.9.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin for the transliteration of Arabic words in posts.


== Description ==

Use simple 'codes' in the post editor to insert romanized Arabic letters. The HTML entities for each symbol are inserted into the saved post, so no conversion is needed at display-time.

== Installation ==

1. Upload the folder `transliterate-arabic` with its contents to the `/wp-content/plugins` directory
2. Activate the plugin from the Plugins page in WordPress Admin

== Usage ==

In the post editor, simply use the following 'codes' to have romanized latin characters inserted in place.

* '/,,/' &rarr; ʾ (ء) 
* '/AA/' &rarr; Ā (آ) 
* '/aa/' &rarr; ā (آ) 
* '/EE/' &rarr; Ī (ي) 
* '/ee/' &rarr; ī (ي) 
* '/OO/' &rarr; Ū (و) 
* '/oo/' &rarr; ū (و) 
* '/HH/' &rarr; Ḥ (ح) 
* '/hh/' &rarr; ḥ (ح) 
* '/KH/' &rarr; Ḵ (خ) 
* '/kh/' &rarr; ḵ (خ) 
* '/DH/' &rarr; Ḏ (ذ) 
* '/dh/' &rarr; ḏ (ذ) 
* '/SH/' &rarr; Š (ش) 
* '/sh/' &rarr; š (ش) 
* '/SS/' &rarr; Ṣ (ص) 
* '/ss/' &rarr; ṣ (ص) 
* '/DD/' &rarr; Ḍ (ض) 
* '/dd/' &rarr; ḍ (ض) 
* '/TT/' &rarr; Ṭ (ط) 
* '/tt/' &rarr; ṭ (ط) 
* '/ZZ/' &rarr; Ẓ (ظ) 
* '/zz/' &rarr; ẓ (ظ) 
* '/cc/' &rarr; ʿ (ع) 
* '/GH/' &rarr; Ġ (غ) 
* '/gh/' &rarr; ġ (غ) 

= Examples =

* `kit/aa/b`     &rarr; kit&#257;b
* `/cc/arab/ee/` &rarr; &#703;arab&#299;
* `/AA/jurr/oo/m/ee/yah` &rarr; &#256;jurr&#363;m&#299;yah

== Changelog ==
= 1.0.7 =
Added support for the basmalah and salat and salam. Replaced HTML entity codes with characters.

= 1.0.6 =
Added support for more letters. Change of 'code' for letter ghayn.

= 1.0.5 =
Letter hamza now works properly.
Correct code for hamza "/,,/"

= 1.0.4 =
Bug fix

= 1.0.4 =
Added support for letter hamza.

= 1.0.0 =
Initial release.

== Upgrade Notice ==
= 1.0.4 =
Added support for letter hamza

