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
Config to your TS Template.

Configuration
-------------

There are currently only two configuration values. Set those in the TS
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


