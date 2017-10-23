# iTop ITIL ITSM CMDB Software REST API Library for PHP
iTop is an open source ITIL ITSM CMDB Software developed by Combodo. You can find more about iTop on Combodo's official site : https://www.combodo.com/itop-193. 

This library is made to simplify the process to get / update data on iTop system through REST API. 

## Getting Started

You can read the iTop's official REST API documentation here : https://wiki.openitop.org/doku.php?id=2_2_0:advancedtopics:rest_json.

To use this API Library, you have to include "**apifunction.php**" on your script, then call the function you need. All available function is listed on **Available Function** section below.

Dont forget to fill your iTop's credential on "**apifunction.php**" file at the beginning of script.

## Available Function

* GET data

Get data on iTop system such as Incident, User Request and other object by specified key.

```
include('apifunction.php');

$itopApi = new itopApi;

$api	= $itopApi->get("Incident","1620"); // Get Incident number 1620 detail

print_r($api);
```

* Apply Stimulus

Apply stimulus on iTop object such as Incident or User Request. Available stimulus is ev_assign (to assign object to an agent) and ev_resolve (to resolve Incident or User Request). ev_assign is only available on an object when its stated is "new".

```

// Assigning Incident number 1620 to an agent with ID "3" that the part of a team with ID "39"

include('apifunction.php');

$itopApi = new itopApi;

$param['comment']	= "Assigned from API";
$param['stimulus']	= "ev_assign";
$param['class']		= "Incident";
$param['key']		= "1620";
	
$fields['team_id']	= "39";
$fields['agent_id']	= "3";
	
$api				= $itopApi->stimulus($param,$fields);

print_r($api);
```

## Example

You can use the "**tester.php**" to test the API. There are several example script to use this library.

## Authors

* **Aji Prakoso** - *Initial Work* - [Jipraks](https://github.com/jipraks)

## Notes

I'm a newbie on coding, so please be advised if there are lot of shortcomings on my code and also on my english :D

I'd love to receive feedback on suggestion about this API library.