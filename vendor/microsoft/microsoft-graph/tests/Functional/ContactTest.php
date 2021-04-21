<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class ContactTest extends TestCase
{
	/**
	* @group functional
	*
	* http://graph.microsoft.io/en-us/docs/api-reference/v1.0/api/singlevaluelegacyextendedproperty_post_singlevalueextendedproperties
	*/
    public function testContactsSetGetSingleExtendedProperty()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$contact = new Model\Contact();
    	$contact->setGivenName("_Tom" . uniqid());
    	$customProperty = new Model\SingleValueLegacyExtendedProperty();
    	$namespaceGuid = "f5939744-0f22-4f03-b33c-f18a8acfa20b";
    	$mapiPropertyType = "String ";
    	$propertyName = "CustomProperty";
    	$propertyId = $mapiPropertyType . "{" . $namespaceGuid . "} Name " . $propertyName;
    	$customProperty->setId($propertyId);
    	$customProperty->setValue("My custom property value");

    	$extendedValueCollection[] = $customProperty;

    	$contact->setSingleValueExtendedProperties($extendedValueCollection);

    	$addedContact = $client->createRequest("POST", "/me/contacts")
    		                   ->attachBody($contact)
    		                   ->setReturnType(Model\Contact::class)
    		                   ->execute();

    	$this->assertNotNull($addedContact->getId());

    	$syncedContact = $client->createRequest("GET", 
    											"/me/contacts/".
    											$addedContact->getId().
    											"?\$expand=singleValueExtendedProperties(\$filter=id eq '$propertyId')"
    											)
    							->setReturnType(Model\Contact::class)
    							->execute();

    	$this->assertNotNull($syncedContact->getSingleValueExtendedProperties());
    }
}