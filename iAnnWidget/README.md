iAnn Widget

Let you embed the iAnn stream in you wiki


Installation
============

Download and extract the files in a directory called "iAnnWidget" in your extensions/ folder.

Add the following code to your LocalSettings.php (at the bottom)

  require_once( "$IP/extensions/iAnnWidget/iAnnWidget.php" );

Navigate to Special:Version on your wiki to verify that the extension is successfully installed.


Configuration parameters
========================

Just insert the <iannwidget/> tag where you want the stream to appear.

You can configure it as an iFrame (it is iFrame-based).

<iannwidget width="720" height="700" scrolling="auto" frameborder="0" /> is the default values if you don't set them.

*width  (default "720") : The width of the widget

*height (default "700") : The height of the widget

*scrolling (default "auto") : ["auto" / "yes" / "no"] for enabling / disabling the scrolling.

*frameborder (default "0") : ["1" / "0"] for enabling / disabling the frameborder


Troubleshooting
===============

iAnn widget is an extremely simple extension; all it does is convert a "ianntwidget" tag into an "<iframe></iframe>" tag, with the stream of iAnn (http://iann.pro/node/15).
There is default values to prevent errors from the users.


Wiki Compatibility
==================

WikiTwidget uses ResourceLoader, which was introduced in MW 1.17. I only have access to a wiki running 1.19.2, so I cannot guarantee that iAnn widget will work on earlier versions of MediaWiki.
Another way to do it is this method : http://iann.pro/node/6


Change Log
==========

v0.1:
*Initial version


To Do
=====

*Use this method : http://iann.pro/node/6 for higher customization


Please email comments, questions, or bug reports to bossiaux.flavien at gmail.org.
