tailwindcss Form
==============================================================

Adapt output of EXT:form for direct usage with the utility-first CSS framework [tailwindcss](https://tailwindcss.com/).

## Usage

Simply include the `setup.typoscript` of this extension in your sitePackage with

`@import 'EXT:tailwindcss_form/Configuration/TypoScript/setup.typoscript'`

There is also some SCSS for the default CSS classes of some elements in EXT:form. That breaks the utility-first approach but this way much less changes on partials are needed.
To use this SCSS include it in your main SCSS file.
