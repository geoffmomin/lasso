=== Lasso ===
Contributors: nphaskins
Author URI:  http://nickhaskins.com
Plugin URI: https://lasso.is
Requires at least: 3.5
Tested up to: 4.2.2
Stable tag: 0.9.3

Front-end editing and creation suite.

== Description ==

Front-end editing and creation suite.

== Installation ==

Refer to owners manual

== Changelog ==

= 0.9.3 =
* fixed .entry-content being applied as a default Article CSS Class
* allow escaping the warning modal that warns users if no Article CSS class is present
* fixed image control setting with images inserted without Aesop Story Engine active
* fixed feautred image not being saved

= 0.9.2 =
* fixed links not working if editor was active but not in use
* massive internal rewrite to use a custom API for processing requests instead of hitting admin-ajax. This increases the saving speed and ensures compatibility for very large WordPress installations and Enterprise users. Tested and working on WordPress MU, Apache, Nginx , and HHVM.

= 0.9.1.1 =
* fixed a js error that happened if an uploaded media item wasn't large enough to be resized to large

= 0.9.1 =
* added ability to insert standard WordPress images and blockquote. If Aesop Story Engine is activated, it replaces these with Aesop Story Engine's story components.
* fixed css class names in toolbar components not being namespaced
* better iOS compatibility with editing toolbar
* removed H2 and H3 buttons from the insert HTML area if Extended Toolbar is selected as its redundant(Extended Toolbar puts H2, and H3 buttons into the toolbar)
* clarified in the instructions that the article class name in the settings should include the preceding dot
* if an embedded Tweet is in the content, we now remove it when you enter the editor so it's not save as HTML. In a future update, we plan to actually have some type of live ombed parsing system. This is a good fix for the time being.
* prepended a ul class to ul.editor-controls and ul.editor-component-controls as well as set letter-spacing to 0 in hopes of clearing up theme CSS conflicting with Lasso CSS. Normally this is bad practice (ul.this), but it's better than applying !important.

= 0.9 =
* fixed a capability issue where contributors were allowed to publish posts
* class visibility methods

= 0.8.8 =
* added an alert that pops up if the user tries to use the editor but hasn't added the required Article Class in order to use Lasso
* added all Aesop built themes to automatically supported themes list
* updated pot file

= 0.8.7 =
* added a new option that lets you list CSS classes of items to ignore on save. This makes Lasso compatible with 99.99% of all WordPress themes

= 0.8.6 =
* new pre-flight function to check to ensure plugin settings are configured
* added automatic theme support for WordPress core themes and UpThemes
* added a new define define('LASSO_AGENCY_MODE') which removes the license page and links out to Lasso website
* added a new tab for Lasso to hold the status page, license page, and settings
* added new license menu page in preperation of the public launch of this plugin
* fixed an issue with the height in the Tour slider sometimes not calculating correctly
* fixed a permission issue where a user was allowed to edit another users posts. we were using edit_posts and switched to edit_post

= 0.8.5 =
* misc bug fixes
* removed the "url helper" field for creating new posts as it was confusing some users
* added helper text to the field for creating new posts as a better visual guide
* new activation welcome screen in WordPress
* fixed the content component from not correctly saving
* added two actions: lasso_editor_controls_before && lasso_editor_controls_after
* added two css classes that get applied to the body when a featured thumbnail is added or removed : lasso-post-thumb-added && lasso-post-thumb-removed

= 0.8.1 =
* fixed media library sometimes not closing after selecting an image
* fixed bug with editing more than one standard WordPress image inserted from the backend
* fixed bugs with toolbar size with extended options on and aesop story engine off
* when live editing image, parallax, and quote and no caption or cite exists, append it live
* compatibility with the new "Pull Quote" option in Aesop 1.5 with live editing
* fixed map zoom and location not saving
* fixed map controls if map is used in sticky mode
* fixed gallery options not saving

= 0.8 =
* added a confirmation to publish in case publish button is accidentally triggered
* more mobile work for iOS
* various UX improvements and animation additions
* fixed gallery type not saving
* all strings localized
* pot file generated

= 0.7 =
* video component live editing
* content component live editing
* image component live editing
* timeline component integration plus live editable
* new welcome screen (in progress)
* 99% compatible with iOS
* responsive on screens under 600px

= 0.6.1 =
* user tour filterable
* escape editor button helper

= 0.6 =
* H2 and H3 heading support added to toolbar with option
* new user tour
* better modal positioning logic

= 0.5 =
* full gallery compatibility
* misc fixes and improvements for founder launch

= 0.3 =
* filter fixes

= 0.25 =
* full maps compatibility
* links now editable
* insert html now no longer inserting into p

= 0.2 =
* initial tracking
