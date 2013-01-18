NoTitle
=======

A Simple Mediawiki Extension adding a Magic Word (__NOTITLE__) to hide the
title on any editable wiki-page.
(c) 2012, Milcord llc.
by Tony Boyles, derived from work by Carlo Cabanilla


Usage
-----
Just put __NOTITLE__ on any pages where you want to hide the title. This
extension will work for any skins that puts the title heading in an h1 tag with
class="firstHeading", including the default Vector skin.


Installation
------------
Download the extension and save the files in a folder named NoTitle under your
extensions folder. Then add the following line to your LocalSettings.php:

    require_once("$IP/extensions/NoTitle/NoTitle.php");


Problems
--------
This software has been tested with Mediawiki versions 1.18.0 through 1.21.0a.
Older Versions of Mediawiki will not be supported.

If you should experience any issues with this software, please report them on
https://www.mediawiki.org/wiki/Extension_talk:NoTitle


Thanks
------
This extension is being maintained by Tony Boyles through a project of Milcord.
http://milcord.com


Copyright
---------
This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <http://www.gnu.org/licenses/>.
