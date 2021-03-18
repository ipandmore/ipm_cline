========================================
Documentation for IPM C-Line (ipm_cline)
========================================

General
=======
Add copyright lines to your TYPO3 project. With the "today"-Feature the plugin keeps track of the current date in the copyright line, so you won't have to update the date at New Year.

- Easy to install
- Easy to use
- FlexForm only

Installation
============

Install via Composer
--------------------

.. code-block:: shell

   composer require ipandmore/ipm-cline


Install via Extension Manager
-----------------------------

1. Open Extension Manager in your TYPO3 backend
2. Search for ``ipm_cline``
3. Download and install it

Integrators Guide
=================

Before the plugin can be used you have to include the static TypoScript template "IPM C-Line" in your site template. To include some basic CSS you can use the static TypoScript template "IPM C-Line CSS".

Editors Guide
=============

To use the plugin on your site you have to add "IPM Cline" via the Content Wizard (Tab "Plugins"). With the following options you can customize the copyright lines according to your requirements:

- **Merge all fields to a "oneliner" (No splitting by div-Elements)**: if selected, in the HTML output all content will be inside a single DIV element; otherwise the date and the custom text will be in separate DIV elements.
- **Set "©" at beginning**: if selected, there will be placed "©" before the date output, e.g. © 2013-2021
- **Copyright start/Copyright end**: here you can specify the date for the copyright date period
- **Use "today" as copyright end (Overrides the field "Copyright end")**: if selected, the current date will be used as the end of the copyright period
- **Date format (d-m-Y => 00-00-0000)**: here you can specify the date format, in most cases it will be only the year in the 4-digit format (Y)
- **Copyright text**: the text that will be displayed after the copyright date

Frequently asked questions
==========================
There are currently no questions to answer.

Wish list
=========
There are currently no wishes open. Feel free to contact us with your wishes.

Change log
==========

BREAKING CHANGE: Version 1.4.0 moves predefined css from main typoscript to extended; if you want to use it, you have to include the additional "IPM C-Line CSS" TypoScript in your root page.