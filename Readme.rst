Extension Manual
=================

This Extension provides an easy way to integrate a Plupper Status Button
to a TYPO3 Site. Plupper is a live support chat service based on
XMPP.

This is a first basic implementation. Planned for later:

- Optional lazy status lading via AJAX controller so that the API call
  is not made during page rendering.
- Plugins for the other Pluper integration methods.


Installation
------------

Install as usual with the EM and add the static Plupper TypoScript
Configs to your TS Template.

To add behavior to the status button you can include the Plupper JS
template which loads the plupper script and sets up the button or you
can roll you own JS in your main js.

Configuration
-------------

There are currently only three  configuration values. Set those in the TS
Constants.

plugin.tx_plupper.settings

.. container:: table-row

	Property
		apiUrl

	Data type
		string

	Description
		Url for the plupper API

	Default
    https://api.plupper.com


.. container:: table-row

	Property
		accountId

	Data type
		string

	Description
	 	plupper account name

	Default
    you@plupper.com


.. container:: table-row

	Property
    scriptUrl 

	Data type
    string

	Description
    script url for JS behavior

	Default
    typo3conf/ext/plupper/Resources/Public/JavaScript/script.js

