# govuk-joomla-template

A template for [Joomla](https://www.joomla.org/) 2.5, based on the [govuk_template (https://design-system.service.gov.uk/styles/page-template/)] (v0.24.1).

## Features & Usage
Supported positions are (will be):
- head
- header-menu
- search (under-developement)
- phase-banner
- breadcrumb
- content-menu
- right (Use Module Class Suffix: govuk-one-third-right)
- footer-links

Where possible css uses the [GDS Design System (https://design-system.service.gov.uk)] is used.  Joomla-specific css is located at /govuk_template/stylesheets/govuk-template-joomla.css.  An additional css file is include to suppress Joomla features commonly enabled by default, but not supported by the template / consistent with the GDS Design System: /govuk_template/stylesheets/hide-joomla-features.css.  

## head
This position is included in case the user want to add additionl content into the <head> element.  It is anticipated that it would be populated by a custom module.

## banner-menu
Populated by a custom module.  Example HTML for custom modules is:

## footer-links
Populated by a custom module.  Example HTML for custom modules is:

    <li class="govuk-footer__inline-list-item">
        <a class="govuk-footer__link" href="#1">Help</a>
    </li>
    <li class="govuk-footer__inline-list-item">
        <a class="govuk-footer__link" href="#2">Cookies</a>
    </li>
    <li class="govuk-footer__inline-list-item">
        <a class="govuk-footer__link" href="#3">Contact</a>
    </li>
    <li class="govuk-footer__inline-list-item">
        <a class="govuk-footer__link" href="#4">Terms and conditions</a>
    </li>


## Disclaimer
I knocked this together primarily as a hobby project.  I also have an occassional professional need to mock up services in the GOV.UK patterns.  I happen to be comfortable working with Joomla - more out of familiariy than anything else.  

I haven't written code as part of my day job since 2001.  I therefore make no apology for the quality of the code - it is what it is.  If you want to make it better, be my guest!

I have no affiliation with the [Government Digital Service](https://gds.blog.gov.uk/).  If you choose to use this template please read (ad respect) the GDS [guidance](https://www.gov.uk/service-manual/design/making-your-service-look-like-govuk) on using the GOV.UK patterns.  In particular, services not on GOV.UK must not:
- identify themselves as being part of GOV.UK
- use the crown or GOV.UK logotype in the header
- use the GDS Transport typeface
- suggest that they are an official UK government website if they are not




