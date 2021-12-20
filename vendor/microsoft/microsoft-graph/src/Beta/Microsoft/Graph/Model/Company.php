<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Company File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Company class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Company extends Entity
{
    /**
    * Gets the businessProfileId
    *
    * @return string The businessProfileId
    */
    public function getBusinessProfileId()
    {
        if (array_key_exists("businessProfileId", $this->_propDict)) {
            return $this->_propDict["businessProfileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessProfileId
    *
    * @param string $val The businessProfileId
    *
    * @return Company
    */
    public function setBusinessProfileId($val)
    {
        $this->_propDict["businessProfileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Company
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return Company
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the systemVersion
    *
    * @return string The systemVersion
    */
    public function getSystemVersion()
    {
        if (array_key_exists("systemVersion", $this->_propDict)) {
            return $this->_propDict["systemVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemVersion
    *
    * @param string $val The systemVersion
    *
    * @return Company
    */
    public function setSystemVersion($val)
    {
        $this->_propDict["systemVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accounts
     *
     * @return array The accounts
     */
    public function getAccounts()
    {
        if (array_key_exists("accounts", $this->_propDict)) {
           return $this->_propDict["accounts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accounts
    *
    * @param Account $val The accounts
    *
    * @return Company
    */
    public function setAccounts($val)
    {
		$this->_propDict["accounts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agedAccountsPayable
     *
     * @return array The agedAccountsPayable
     */
    public function getAgedAccountsPayable()
    {
        if (array_key_exists("agedAccountsPayable", $this->_propDict)) {
           return $this->_propDict["agedAccountsPayable"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agedAccountsPayable
    *
    * @param AgedAccountsPayable $val The agedAccountsPayable
    *
    * @return Company
    */
    public function setAgedAccountsPayable($val)
    {
		$this->_propDict["agedAccountsPayable"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agedAccountsReceivable
     *
     * @return array The agedAccountsReceivable
     */
    public function getAgedAccountsReceivable()
    {
        if (array_key_exists("agedAccountsReceivable", $this->_propDict)) {
           return $this->_propDict["agedAccountsReceivable"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agedAccountsReceivable
    *
    * @param AgedAccountsReceivable $val The agedAccountsReceivable
    *
    * @return Company
    */
    public function setAgedAccountsReceivable($val)
    {
		$this->_propDict["agedAccountsReceivable"] = $val;
        return $this;
    }
    

     /** 
     * Gets the companyInformation
     *
     * @return array The companyInformation
     */
    public function getCompanyInformation()
    {
        if (array_key_exists("companyInformation", $this->_propDict)) {
           return $this->_propDict["companyInformation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the companyInformation
    *
    * @param CompanyInformation $val The companyInformation
    *
    * @return Company
    */
    public function setCompanyInformation($val)
    {
		$this->_propDict["companyInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the countriesRegions
     *
     * @return array The countriesRegions
     */
    public function getCountriesRegions()
    {
        if (array_key_exists("countriesRegions", $this->_propDict)) {
           return $this->_propDict["countriesRegions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the countriesRegions
    *
    * @param CountryRegion $val The countriesRegions
    *
    * @return Company
    */
    public function setCountriesRegions($val)
    {
		$this->_propDict["countriesRegions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the currencies
     *
     * @return array The currencies
     */
    public function getCurrencies()
    {
        if (array_key_exists("currencies", $this->_propDict)) {
           return $this->_propDict["currencies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the currencies
    *
    * @param Currency $val The currencies
    *
    * @return Company
    */
    public function setCurrencies($val)
    {
		$this->_propDict["currencies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customerPaymentJournals
     *
     * @return array The customerPaymentJournals
     */
    public function getCustomerPaymentJournals()
    {
        if (array_key_exists("customerPaymentJournals", $this->_propDict)) {
           return $this->_propDict["customerPaymentJournals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customerPaymentJournals
    *
    * @param CustomerPaymentJournal $val The customerPaymentJournals
    *
    * @return Company
    */
    public function setCustomerPaymentJournals($val)
    {
		$this->_propDict["customerPaymentJournals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customerPayments
     *
     * @return array The customerPayments
     */
    public function getCustomerPayments()
    {
        if (array_key_exists("customerPayments", $this->_propDict)) {
           return $this->_propDict["customerPayments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customerPayments
    *
    * @param CustomerPayment $val The customerPayments
    *
    * @return Company
    */
    public function setCustomerPayments($val)
    {
		$this->_propDict["customerPayments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customers
     *
     * @return array The customers
     */
    public function getCustomers()
    {
        if (array_key_exists("customers", $this->_propDict)) {
           return $this->_propDict["customers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customers
    *
    * @param Customer $val The customers
    *
    * @return Company
    */
    public function setCustomers($val)
    {
		$this->_propDict["customers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dimensions
     *
     * @return array The dimensions
     */
    public function getDimensions()
    {
        if (array_key_exists("dimensions", $this->_propDict)) {
           return $this->_propDict["dimensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dimensions
    *
    * @param Dimension $val The dimensions
    *
    * @return Company
    */
    public function setDimensions($val)
    {
		$this->_propDict["dimensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dimensionValues
     *
     * @return array The dimensionValues
     */
    public function getDimensionValues()
    {
        if (array_key_exists("dimensionValues", $this->_propDict)) {
           return $this->_propDict["dimensionValues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dimensionValues
    *
    * @param DimensionValue $val The dimensionValues
    *
    * @return Company
    */
    public function setDimensionValues($val)
    {
		$this->_propDict["dimensionValues"] = $val;
        return $this;
    }
    

     /** 
     * Gets the employees
     *
     * @return array The employees
     */
    public function getEmployees()
    {
        if (array_key_exists("employees", $this->_propDict)) {
           return $this->_propDict["employees"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the employees
    *
    * @param Employee $val The employees
    *
    * @return Company
    */
    public function setEmployees($val)
    {
		$this->_propDict["employees"] = $val;
        return $this;
    }
    

     /** 
     * Gets the generalLedgerEntries
     *
     * @return array The generalLedgerEntries
     */
    public function getGeneralLedgerEntries()
    {
        if (array_key_exists("generalLedgerEntries", $this->_propDict)) {
           return $this->_propDict["generalLedgerEntries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the generalLedgerEntries
    *
    * @param GeneralLedgerEntry $val The generalLedgerEntries
    *
    * @return Company
    */
    public function setGeneralLedgerEntries($val)
    {
		$this->_propDict["generalLedgerEntries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the itemCategories
     *
     * @return array The itemCategories
     */
    public function getItemCategories()
    {
        if (array_key_exists("itemCategories", $this->_propDict)) {
           return $this->_propDict["itemCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the itemCategories
    *
    * @param ItemCategory $val The itemCategories
    *
    * @return Company
    */
    public function setItemCategories($val)
    {
		$this->_propDict["itemCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    *
    * @param Item $val The items
    *
    * @return Company
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    

     /** 
     * Gets the journalLines
     *
     * @return array The journalLines
     */
    public function getJournalLines()
    {
        if (array_key_exists("journalLines", $this->_propDict)) {
           return $this->_propDict["journalLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the journalLines
    *
    * @param JournalLine $val The journalLines
    *
    * @return Company
    */
    public function setJournalLines($val)
    {
		$this->_propDict["journalLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the journals
     *
     * @return array The journals
     */
    public function getJournals()
    {
        if (array_key_exists("journals", $this->_propDict)) {
           return $this->_propDict["journals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the journals
    *
    * @param Journal $val The journals
    *
    * @return Company
    */
    public function setJournals($val)
    {
		$this->_propDict["journals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the paymentMethods
     *
     * @return array The paymentMethods
     */
    public function getPaymentMethods()
    {
        if (array_key_exists("paymentMethods", $this->_propDict)) {
           return $this->_propDict["paymentMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the paymentMethods
    *
    * @param PaymentMethod $val The paymentMethods
    *
    * @return Company
    */
    public function setPaymentMethods($val)
    {
		$this->_propDict["paymentMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the paymentTerms
     *
     * @return array The paymentTerms
     */
    public function getPaymentTerms()
    {
        if (array_key_exists("paymentTerms", $this->_propDict)) {
           return $this->_propDict["paymentTerms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the paymentTerms
    *
    * @param PaymentTerm $val The paymentTerms
    *
    * @return Company
    */
    public function setPaymentTerms($val)
    {
		$this->_propDict["paymentTerms"] = $val;
        return $this;
    }
    

     /** 
     * Gets the picture
     *
     * @return array The picture
     */
    public function getPicture()
    {
        if (array_key_exists("picture", $this->_propDict)) {
           return $this->_propDict["picture"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the picture
    *
    * @param Picture $val The picture
    *
    * @return Company
    */
    public function setPicture($val)
    {
		$this->_propDict["picture"] = $val;
        return $this;
    }
    

     /** 
     * Gets the purchaseInvoiceLines
     *
     * @return array The purchaseInvoiceLines
     */
    public function getPurchaseInvoiceLines()
    {
        if (array_key_exists("purchaseInvoiceLines", $this->_propDict)) {
           return $this->_propDict["purchaseInvoiceLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the purchaseInvoiceLines
    *
    * @param PurchaseInvoiceLine $val The purchaseInvoiceLines
    *
    * @return Company
    */
    public function setPurchaseInvoiceLines($val)
    {
		$this->_propDict["purchaseInvoiceLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the purchaseInvoices
     *
     * @return array The purchaseInvoices
     */
    public function getPurchaseInvoices()
    {
        if (array_key_exists("purchaseInvoices", $this->_propDict)) {
           return $this->_propDict["purchaseInvoices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the purchaseInvoices
    *
    * @param PurchaseInvoice $val The purchaseInvoices
    *
    * @return Company
    */
    public function setPurchaseInvoices($val)
    {
		$this->_propDict["purchaseInvoices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesCreditMemoLines
     *
     * @return array The salesCreditMemoLines
     */
    public function getSalesCreditMemoLines()
    {
        if (array_key_exists("salesCreditMemoLines", $this->_propDict)) {
           return $this->_propDict["salesCreditMemoLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesCreditMemoLines
    *
    * @param SalesCreditMemoLine $val The salesCreditMemoLines
    *
    * @return Company
    */
    public function setSalesCreditMemoLines($val)
    {
		$this->_propDict["salesCreditMemoLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesCreditMemos
     *
     * @return array The salesCreditMemos
     */
    public function getSalesCreditMemos()
    {
        if (array_key_exists("salesCreditMemos", $this->_propDict)) {
           return $this->_propDict["salesCreditMemos"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesCreditMemos
    *
    * @param SalesCreditMemo $val The salesCreditMemos
    *
    * @return Company
    */
    public function setSalesCreditMemos($val)
    {
		$this->_propDict["salesCreditMemos"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesInvoiceLines
     *
     * @return array The salesInvoiceLines
     */
    public function getSalesInvoiceLines()
    {
        if (array_key_exists("salesInvoiceLines", $this->_propDict)) {
           return $this->_propDict["salesInvoiceLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesInvoiceLines
    *
    * @param SalesInvoiceLine $val The salesInvoiceLines
    *
    * @return Company
    */
    public function setSalesInvoiceLines($val)
    {
		$this->_propDict["salesInvoiceLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesInvoices
     *
     * @return array The salesInvoices
     */
    public function getSalesInvoices()
    {
        if (array_key_exists("salesInvoices", $this->_propDict)) {
           return $this->_propDict["salesInvoices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesInvoices
    *
    * @param SalesInvoice $val The salesInvoices
    *
    * @return Company
    */
    public function setSalesInvoices($val)
    {
		$this->_propDict["salesInvoices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesOrderLines
     *
     * @return array The salesOrderLines
     */
    public function getSalesOrderLines()
    {
        if (array_key_exists("salesOrderLines", $this->_propDict)) {
           return $this->_propDict["salesOrderLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesOrderLines
    *
    * @param SalesOrderLine $val The salesOrderLines
    *
    * @return Company
    */
    public function setSalesOrderLines($val)
    {
		$this->_propDict["salesOrderLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesOrders
     *
     * @return array The salesOrders
     */
    public function getSalesOrders()
    {
        if (array_key_exists("salesOrders", $this->_propDict)) {
           return $this->_propDict["salesOrders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesOrders
    *
    * @param SalesOrder $val The salesOrders
    *
    * @return Company
    */
    public function setSalesOrders($val)
    {
		$this->_propDict["salesOrders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesQuoteLines
     *
     * @return array The salesQuoteLines
     */
    public function getSalesQuoteLines()
    {
        if (array_key_exists("salesQuoteLines", $this->_propDict)) {
           return $this->_propDict["salesQuoteLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesQuoteLines
    *
    * @param SalesQuoteLine $val The salesQuoteLines
    *
    * @return Company
    */
    public function setSalesQuoteLines($val)
    {
		$this->_propDict["salesQuoteLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesQuotes
     *
     * @return array The salesQuotes
     */
    public function getSalesQuotes()
    {
        if (array_key_exists("salesQuotes", $this->_propDict)) {
           return $this->_propDict["salesQuotes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesQuotes
    *
    * @param SalesQuote $val The salesQuotes
    *
    * @return Company
    */
    public function setSalesQuotes($val)
    {
		$this->_propDict["salesQuotes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shipmentMethods
     *
     * @return array The shipmentMethods
     */
    public function getShipmentMethods()
    {
        if (array_key_exists("shipmentMethods", $this->_propDict)) {
           return $this->_propDict["shipmentMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shipmentMethods
    *
    * @param ShipmentMethod $val The shipmentMethods
    *
    * @return Company
    */
    public function setShipmentMethods($val)
    {
		$this->_propDict["shipmentMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taxAreas
     *
     * @return array The taxAreas
     */
    public function getTaxAreas()
    {
        if (array_key_exists("taxAreas", $this->_propDict)) {
           return $this->_propDict["taxAreas"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taxAreas
    *
    * @param TaxArea $val The taxAreas
    *
    * @return Company
    */
    public function setTaxAreas($val)
    {
		$this->_propDict["taxAreas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taxGroups
     *
     * @return array The taxGroups
     */
    public function getTaxGroups()
    {
        if (array_key_exists("taxGroups", $this->_propDict)) {
           return $this->_propDict["taxGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taxGroups
    *
    * @param TaxGroup $val The taxGroups
    *
    * @return Company
    */
    public function setTaxGroups($val)
    {
		$this->_propDict["taxGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the unitsOfMeasure
     *
     * @return array The unitsOfMeasure
     */
    public function getUnitsOfMeasure()
    {
        if (array_key_exists("unitsOfMeasure", $this->_propDict)) {
           return $this->_propDict["unitsOfMeasure"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the unitsOfMeasure
    *
    * @param UnitOfMeasure $val The unitsOfMeasure
    *
    * @return Company
    */
    public function setUnitsOfMeasure($val)
    {
		$this->_propDict["unitsOfMeasure"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vendors
     *
     * @return array The vendors
     */
    public function getVendors()
    {
        if (array_key_exists("vendors", $this->_propDict)) {
           return $this->_propDict["vendors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vendors
    *
    * @param Vendor $val The vendors
    *
    * @return Company
    */
    public function setVendors($val)
    {
		$this->_propDict["vendors"] = $val;
        return $this;
    }
    
}
