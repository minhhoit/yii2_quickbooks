<?php

namespace minhhoit\yii2_quickbooks;

define('QUICKBOOKS_LOADER_AUTOLOADER', false);
/**
 *
 */
define('QUICKBOOKS_TIMESTAMP', microtime(true));

/**
 *
 */
define('QUICKBOOKS_BASEDIR', dirname(__FILE__));

/**
 * Path separator for file paths/include/require paths
 * @var string
 */
define('QUICKBOOKS_DIRECTORY_SEPARATOR', PATH_SEPARATOR);

// Include path modifications (relative paths within library)
ini_set('include_path', ini_get('include_path') . QUICKBOOKS_DIRECTORY_SEPARATOR . dirname(__FILE__));

if (function_exists('date_default_timezone_get')) {
    @date_default_timezone_get();

    if (function_exists('error_get_last') and
        $arrerr = error_get_last() and
        substr($arrerr['message'], 0, strlen('date_default_timezone_get')) == 'date_default_timezone_get') {
        #Ooops, they never set their time-zone and PHP is warning them about
        #this! Let's try to auto-set their timezone, and set a flag so that
        #they can find out what's going wrong later.

        define('QUICKBOOKS_TIMEZONE_AUTOSET', true);

        date_default_timezone_set('America/New_York');
    }
}

if (!defined('QUICKBOOKS_TIMEZONE_AUTOSET')) {
    /**
     *
     */
    define('QUICKBOOKS_TIMEZONE_AUTOSET', false);
}

/**
 * The package author
 * @var string
 */
define('QUICKBOOKS_PACKAGE_AUTHOR', '"Keith Palmer" <keith@consolibyte.com>');

/**
 * The URL for the package
 * @var string
 */
define('QUICKBOOKS_PACKAGE_WEBSITE', 'http://www.ConsoliBYTE.com/');

/**
 * The name of the package
 * @var string
 */
define('QUICKBOOKS_PACKAGE_NAME', 'QuickBooks PHP DevKit');

/**
 * The version of this QuickBooks package
 * @var string
 */
define('QUICKBOOKS_PACKAGE_VERSION', '3.0');

if (!defined('QUICKBOOKS_CRLF')) {
    /**
     * The carraige-return line-feed sequence to use
     * @var string
     */
    define('QUICKBOOKS_CRLF', "\r\n");
}

if (!defined('QUICKBOOKS_SALT')) {
    /**
     * Salt value for hashing passwords
     * @var string
     */
    define('QUICKBOOKS_SALT', 'andB@++3ry');
}

if (!defined('QUICKBOOKS_HASH')) {
    /**
     * The name of a function to use for hashing passwords
     * @var string
     */
    define('QUICKBOOKS_HASH', 'sha1');
}

if (!defined('QUICKBOOKS_TIMEOUT')) {
    /**
     * The number of seconds without any activity a session can stay open before automatically closed
     * @var integer
     */
    define('QUICKBOOKS_TIMEOUT', 1800);
}

if (!defined('QUICKBOOKS_WSDL')) {
    /**
     * Path to the QuickBooks WSDL file (the default WSDL is included with this package, you shouldn't need to override this generally)
     * @var string
     */
    define('QUICKBOOKS_WSDL', dirname(__FILE__) . '/QuickBooks/QBWebConnectorSvc.wsdl');
}

if (!defined('QUICKBOOKS_DEBUG')) {
    /**
     * Whether or not to turn on debugging (unsupported for now...?)
     * @var boolean
     */
    define('QUICKBOOKS_DEBUG', true);
}

if (!defined('QUICKBOOKS_LOG')) {
    /**
     * Debug log (unsupported?)
     *
     * @deprecated
     * @var string
     */
    define('QUICKBOOKS_LOG', '/tmp/qb-debug.log');
}

/**
 * Developer logging (this is designed just for developing, you probably don't want to use this debug level...)
 * @var integer
 */
define('QUICKBOOKS_LOG_DEVELOP', 4);

/**
 * Debug logging (too much data is logged... generally only useful for debugging)
 * @var integer
 */
define('QUICKBOOKS_LOG_DEBUG', 3);

/**
 * Verbose logging (lots of data is logged)
 * @var integer
 */
define('QUICKBOOKS_LOG_VERBOSE', 2);

/**
 * Normal logging (minimal data is logged)
 * @var integer
 */
define('QUICKBOOKS_LOG_NORMAL', 1);

/**
 * No logging at all (you probably should not use this...)
 * @var integer
 */
define('QUICKBOOKS_LOG_NONE', 0);

/*
define('QUICKBOOKS_SERVICE_DESKTOP', 'Desktop');
define('QUICKBOOKS_SERVICE_DESKTOP_EDITION', QUICKBOOKS_SERVICE_DESKTOP);

define('QUICKBOOKS_SERVICE_QBOE', 'QBOE');
define('QUICKBOOKS_SERVICE_ONLINE_EDITION', QUICKBOOKS_SERVICE_QBOE);

define('QUICKBOOKS_SERVICE_QBMS', 'QBMS');
define('QUICKBOOKS_SERVICE_MERCHANT_SERVICES', QUICKBOOKS_SERVICE_QBMS);
*/

/**
 *
 */
define('QUICKBOOKS_TYPE_QBFS', 'QBFS');

/**
 *
 */
define('QUICKBOOKS_TYPE_QBPOS', 'QBPOS');

define('QUICKBOOKS_DATATYPE_STRING', 'STRTYPE');
define('QUICKBOOKS_DATATYPE_ID', 'IDTYPE');
define('QUICKBOOKS_DATATYPE_FLOAT', 'AMTTYPE');
define('QUICKBOOKS_DATATYPE_BOOLEAN', 'BOOLTYPE');
define('QUICKBOOKS_DATATYPE_INTEGER', 'INTTYPE');
define('QUICKBOOKS_DATATYPE_DATE', 'DATETYPE');
define('QUICKBOOKS_DATATYPE_ENUM', 'ENUMTYPE');
define('QUICKBOOKS_DATATYPE_DATETIME', 'DATETIMETYPE');


define('QUICKBOOKS_SUPPORTED_DEFAULT', '');
define('QUICKBOOKS_SUPPORTED_ALL', '0x0');
define('QUICKBOOKS_SUPPORTED_SIMPLESTART', '0x1');
define('QUICKBOOKS_SUPPORTED_PRO', '0x2');
define('QUICKBOOKS_SUPPORTED_PREMIER', '0x4');
define('QUICKBOOKS_SUPPORTED_ENTERPRISE', '0x8');

define('QUICKBOOKS_PERSONALDATA_DEFAULT', '');
define('QUICKBOOKS_PERSONALDATA_NOTNEEDED', 'pdpNotNeeded');
define('QUICKBOOKS_PERSONALDATA_OPTIONAL', 'pdpOptional');
define('QUICKBOOKS_PERSONALDATA_REQUIRED', 'pdpRequired');

define('QUICKBOOKS_UNATTENDEDMODE_DEFAULT', '');
define('QUICKBOOKS_UNATTENDEDMODE_REQUIRED', 'umpRequired');
define('QUICKBOOKS_UNATTENDEDMODE_OPTIONAL', 'umpOptional');


define('QUICKBOOKS_LOCALE_UNITED_STATES', 'US');
define('QUICKBOOKS_LOCALE_US', QUICKBOOKS_LOCALE_UNITED_STATES);

define('QUICKBOOKS_LOCALE_CANADA', 'CA');
define('QUICKBOOKS_LOCALE_CA', QUICKBOOKS_LOCALE_CANADA);

define('QUICKBOOKS_LOCALE_UNITED_KINGDOM', 'UK');
define('QUICKBOOKS_LOCALE_UK', QUICKBOOKS_LOCALE_UNITED_KINGDOM);

define('QUICKBOOKS_LOCALE_AUSTRALIA', 'AU');
define('QUICKBOOKS_LOCALE_AU', QUICKBOOKS_LOCALE_AUSTRALIA);

define('QUICKBOOKS_LOCALE_ONLINE_EDITION', 'OE');
define('QUICKBOOKS_LOCALE_OE', QUICKBOOKS_LOCALE_ONLINE_EDITION);

/**
 * Use the PHP SoapServer ext/soap PHP extension
 */
define('QUICKBOOKS_SOAPSERVER_PHP', 'php');

/**
 * Use the built-in pure PHP SOAP server
 */
define('QUICKBOOKS_SOAPSERVER_BUILTIN', 'builtin');

/**
 * QuickBooks flag to request to enter "Interactive Mode"
 *
 * *** DO NOT CHANGE THIS *** This is a required QuickBooks-defined constant that is neccessary for interactive mode requests
 *
 * @var string
 */
/*
define('QUICKBOOKS_INTERACTIVE_MODE', 'Interactive mode');
*/

/**
 *
 */
define('QUICKBOOKS_NOOP', 'NoOp');

// This is temporary, eventually we should implement an actual in-handler skip method
define('QUICKBOOKS_SKIP', 'NoOp');

define('QUICKBOOKS_ADD', 'Add');
define('QUICKBOOKS_MOD', 'Mod');
define('QUICKBOOKS_QUERY', 'Query');
define('QUICKBOOKS_DELETE', 'Delete');
define('QUICKBOOKS_IMPORT', 'Import');
define('QUICKBOOKS_AUDIT', 'Audit');

define('QUICKBOOKS_DERIVE_INVENTORYLEVELS', 'InventoryLevels');
define('QUICKBOOKS_DERIVE_INVENTORYASSEMBLYLEVELS', 'InventoryAssemblyLevels');

define('QUICKBOOKS_OBJECT_HOST', 'Host');
define('QUICKBOOKS_QUERY_HOST', 'HostQuery');
define('QUICKBOOKS_IMPORT_HOST', 'HostImport');

define('QUICKBOOKS_OBJECT_PREFERENCES', 'Preferences');
define('QUICKBOOKS_QUERY_PREFERENCES', 'PreferencesQuery');
define('QUICKBOOKS_IMPORT_PREFERENCES', 'PreferencesImport');

define('QUICKBOOKS_OBJECT_ACCOUNT', 'Account');
define('QUICKBOOKS_ADD_ACCOUNT', 'AccountAdd');
define('QUICKBOOKS_MOD_ACCOUNT', 'AccountMod');
define('QUICKBOOKS_QUERY_ACCOUNT', 'AccountQuery');
define('QUICKBOOKS_IMPORT_ACCOUNT', 'AccountImport');
define('QUICKBOOKS_DERIVE_ACCOUNT', 'AccountDerive');
define('QUICKBOOKS_AUDIT_ACCOUNT', 'AccountAudit');

define('QUICKBOOKS_OBJECT_BILL', 'Bill');
define('QUICKBOOKS_ADD_BILL', 'BillAdd');
define('QUICKBOOKS_MOD_BILL', 'BillMod');
define('QUICKBOOKS_QUERY_BILL', 'BillQuery');
define('QUICKBOOKS_IMPORT_BILL', 'BillImport');
define('QUICKBOOKS_DERIVE_BILL', 'BillDerive');
define('QUICKBOOKS_AUDIT_BILL', 'BillAudit');

define('QUICKBOOKS_OBJECT_BILLINGRATE', 'BillingRate');
define('QUICKBOOKS_ADD_BILLINGRATE', 'BillingRateAdd');
define('QUICKBOOKS_QUERY_BILLINGRATE', 'BillingRateQuery');
define('QUICKBOOKS_IMPORT_BILLINGRATE', 'BillingRateImport');

define('QUICKBOOKS_OBJECT_BILLTOPAY', 'BillToPay');
define('QUICKBOOKS_QUERY_BILLTOPAY', 'BillToPayQuery');
define('QUICKBOOKS_IMPORT_BILLTOPAY', 'BillToPayImport');

define('QUICKBOOKS_OBJECT_BILLPAYMENTCHECK', 'BillPaymentCheck');
define('QUICKBOOKS_ADD_BILLPAYMENTCHECK', 'BillPaymentCheckAdd');
define('QUICKBOOKS_MOD_BILLPAYMENTCHECK', 'BillPaymentCheckMod');
define('QUICKBOOKS_QUERY_BILLPAYMENTCHECK', 'BillPaymentCheckQuery');
define('QUICKBOOKS_IMPORT_BILLPAYMENTCHECK', 'BillPaymentCheckImport');

define('QUICKBOOKS_OBJECT_BILLPAYMENTCREDITCARD', 'BillPaymentCreditCard');
define('QUICKBOOKS_ADD_BILLPAYMENTCREDITCARD', 'BillPaymentCreditCardAdd');
define('QUICKBOOKS_MOD_BILLPAYMENTCREDITCARD', 'BillPaymentCreditCardMod'); // Not supported by current QuickBooks SDK
define('QUICKBOOKS_QUERY_BILLPAYMENTCREDITCARD', 'BillPaymentCreditCardQuery');
define('QUICKBOOKS_IMPORT_BILLPAYMENTCREDITCARD', 'BillPaymentCreditCardImport');

define('QUICKBOOKS_OBJECT_CHARGE', 'Charge');
define('QUICKBOOKS_ADD_CHARGE', 'ChargeAdd');
define('QUICKBOOKS_MOD_CHARGE', 'ChargeMod');
define('QUICKBOOKS_QUERY_CHARGE', 'ChargeQuery');
define('QUICKBOOKS_IMPORT_CHARGE', 'ChargeImport');
define('QUICKBOOKS_DERIVE_CHARGE', 'ChargeDerive');

define('QUICKBOOKS_OBJECT_CHECK', 'Check');
define('QUICKBOOKS_ADD_CHECK', 'CheckAdd');
define('QUICKBOOKS_MOD_CHECK', 'CheckMod');
define('QUICKBOOKS_QUERY_CHECK', 'CheckQuery');
define('QUICKBOOKS_IMPORT_CHECK', 'CheckImport');

define('QUICKBOOKS_OBJECT_CLASS', 'Class');
define('QUICKBOOKS_ADD_CLASS', 'ClassAdd');
define('QUICKBOOKS_QUERY_CLASS', 'ClassQuery');
define('QUICKBOOKS_IMPORT_CLASS', 'ClassImport');

define('QUICKBOOKS_OBJECT_COMPANY', 'Company');

/**
 * QuickBooks request to query a company for meta-data
 * @var string
 */
define('QUICKBOOKS_QUERY_COMPANY', 'CompanyQuery');
define('QUICKBOOKS_IMPORT_COMPANY', 'CompanyImport');

define('QUICKBOOKS_OBJECT_CREDITCARDCREDIT', 'CreditCardCredit');
define('QUICKBOOKS_ADD_CREDITCARDCREDIT', 'CreditCardCreditAdd');
define('QUICKBOOKS_MOD_CREDITCARDCREDIT', 'CreditCardCreditMod');
define('QUICKBOOKS_QUERY_CREDITCARDCREDIT', 'CreditCardCreditQuery');
define('QUICKBOOKS_IMPORT_CREDITCARDCREDIT', 'CreditCardCreditImport');

define('QUICKBOOKS_OBJECT_CREDITCARDREFUND', 'ARRefundCreditCard');
define('QUICKBOOKS_ADD_CREDITCARDREFUND', 'ARRefundCreditCardAdd');
define('QUICKBOOKS_QUERY_CREDITCARDREFUND', 'ARRefundCreditCardQuery');

define('QUICKBOOKS_OBJECT_CREDITCARDCHARGE', 'CreditCardCharge');
define('QUICKBOOKS_ADD_CREDITCARDCHARGE', 'CreditCardChargeAdd');
define('QUICKBOOKS_MOD_CREDITCARDCHARGE', 'CreditCardChargeMod');
define('QUICKBOOKS_QUERY_CREDITCARDCHARGE', 'CreditCardChargeQuery');
define('QUICKBOOKS_IMPORT_CREDITCARDCHARGE', 'CreditCardChargeImport');

define('QUICKBOOKS_OBJECT_CREDITCARDMEMO', 'CreditCardMemo');
define('QUICKBOOKS_ADD_CREDITCARDMEMO', 'CreditCardMemoAdd');
define('QUICKBOOKS_MOD_CREDITCARDMEMO', 'CreditCardMemoMod');
define('QUICKBOOKS_QUERY_CREDITCARDMEMO', 'CreditCardMemoQuery');

define('QUICKBOOKS_OBJECT_CREDITMEMO', 'CreditMemo');
define('QUICKBOOKS_ADD_CREDITMEMO', 'CreditMemoAdd');
define('QUICKBOOKS_MOD_CREDITMEMO', 'CreditMemoMod');
define('QUICKBOOKS_QUERY_CREDITMEMO', 'CreditMemoQuery');
define('QUICKBOOKS_IMPORT_CREDITMEMO', 'CreditMemoImport');
define('QUICKBOOKS_DERIVE_CREDITMEMO', 'CreditMemoDerive');

define('QUICKBOOKS_OBJECT_CURRENCY', 'Currency');
define('QUICKBOOKS_ADD_CURRENCY', 'CurrencyAdd');
define('QUICKBOOKS_MOD_CURRENCY', 'CurrencyMod');
define('QUICKBOOKS_QUERY_CURRENCY', 'CurrencyQuery');
define('QUICKBOOKS_IMPORT_CURRENCY', 'CurrencyImport');

/**
 * QuickBooks company object (company file meta-data)
 * @var string
 */
define('QUICKBOOKS_OBJECT_CUSTOMER', 'Customer');

/**
 * QuickBooks request to add a customer record
 * @var string
 */
define('QUICKBOOKS_ADD_CUSTOMER', 'CustomerAdd');

/**
 * QuickBooks request to modify a customer record
 * @var string
 */
define('QUICKBOOKS_MOD_CUSTOMER', 'CustomerMod');

/**
 * QuickBooks request to search for/query for customer records
 * @var string
 */
define('QUICKBOOKS_QUERY_CUSTOMER', 'CustomerQuery');
define('QUICKBOOKS_IMPORT_CUSTOMER', 'CustomerImport');
define('QUICKBOOKS_DERIVE_CUSTOMER', 'CustomerDerive');

define('QUICKBOOKS_OBJECT_CUSTOMERMSG', 'CustomerMsg');
define('QUICKBOOKS_ADD_CUSTOMERMSG', 'CustomerMsgAdd');
define('QUICKBOOKS_QUERY_CUSTOMERMSG', 'CustomerMsgQuery');
define('QUICKBOOKS_IMPORT_CUSTOMERMSG', 'CustomerMsgImport');

define('QUICKBOOKS_OBJECT_CUSTOMERTYPE', 'CustomerType');
define('QUICKBOOKS_ADD_CUSTOMERTYPE', 'CustomerTypeAdd');
define('QUICKBOOKS_QUERY_CUSTOMERTYPE', 'CustomerTypeQuery');
define('QUICKBOOKS_IMPORT_CUSTOMERTYPE', 'CustomerTypeImport');

define('QUICKBOOKS_OBJECT_DATAEXT', 'DataExt');
define('QUICKBOOKS_ADD_DATAEXT', 'DataExtAdd');
define('QUICKBOOKS_MOD_DATAEXT', 'DataExtMod');
define('QUICKBOOKS_DEL_DATAEXT', 'DataExtDel');
define('QUICKBOOKS_DELETE_DATAEXT', QUICKBOOKS_DEL_DATAEXT);

define('QUICKBOOKS_OBJECT_DATAEXTDEF', 'DataExtDef');
define('QUICKBOOKS_ADD_DATAEXTDEF', 'DataExtDefAdd');
define('QUICKBOOKS_MOD_DATAEXTDEF', 'DataExtDefMod');
define('QUICKBOOKS_DEL_DATAEXTDEF', 'DataExtDefDel');
define('QUICKBOOKS_DELETE_DATAEXTDEF', QUICKBOOKS_DEL_DATAEXTDEF);
define('QUICKBOOKS_QUERY_DATAEXTDEF', 'DataExtDefQuery');
define('QUICKBOOKS_IMPORT_DATAEXTDEF', 'DataExtDefImport');

define('QUICKBOOKS_OBJECT_DATEDRIVENTERMS', 'DateDrivenTerms');
define('QUICKBOOKS_ADD_DATEDRIVENTERMS', 'DateDrivenTermsAdd');
define('QUICKBOOKS_QUERY_DATEDRIVENTERMS', 'DateDrivenTermsQuery');
define('QUICKBOOKS_IMPORT_DATEDRIVENTERMS', 'DateDrivenTermsImport');

/**
 * Query QuickBooks for lists of deleted list items (customers, items, etc.)
 */
define('QUICKBOOKS_QUERY_DELETEDLISTS', 'ListDeletedQuery');
define('QUICKBOOKS_IMPORT_DELETEDLISTS', 'ListDeletedImport');

/**
 * Query QuickBooks for lists of deleted transactions (payments, invoices, estimates, etc.)
 */
define('QUICKBOOKS_QUERY_DELETEDTXNS', 'TxnDeletedQuery');
define('QUICKBOOKS_IMPORT_DELETEDTXNS', 'TxnDeletedImport');

/**
 * Alias of QUICKBOOKS_QUERY_DELETEDTXNS
 */
define('QUICKBOOKS_QUERY_DELETEDTRANSACTIONS', QUICKBOOKS_QUERY_DELETEDTXNS);

define('QUICKBOOKS_OBJECT_DEPOSIT', 'Deposit');
define('QUICKBOOKS_ADD_DEPOSIT', 'DepositAdd');
define('QUICKBOOKS_MOD_DEPOSIT', 'DepositMod');
define('QUICKBOOKS_QUERY_DEPOSIT', 'DepositQuery');
define('QUICKBOOKS_IMPORT_DEPOSIT', 'DepositImport');

define('QUICKBOOKS_OBJECT_DEPARTMENT', 'Department');
define('QUICKBOOKS_ADD_DEPARTMENT', 'DepartmentAdd');
define('QUICKBOOKS_MOD_DEPARTMENT', 'DepartmentMod');
define('QUICKBOOKS_QUERY_DEPARTMENT', 'DepartmentQuery');
define('QUICKBOOKS_IMPORT_DEPARTMENT', 'DepartmentImport');

define('QUICKBOOKS_OBJECT_EMPLOYEE', 'Employee');
define('QUICKBOOKS_ADD_EMPLOYEE', 'EmployeeAdd');
define('QUICKBOOKS_MOD_EMPLOYEE', 'EmployeeMod');
define('QUICKBOOKS_QUERY_EMPLOYEE', 'EmployeeQuery');
define('QUICKBOOKS_IMPORT_EMPLOYEE', 'EmployeeImport');

define('QUICKBOOKS_QUERY_ENTITY', 'EntityQuery');

define('QUICKBOOKS_OBJECT_ESTIMATE', 'Estimate');
define('QUICKBOOKS_ADD_ESTIMATE', 'EstimateAdd');
define('QUICKBOOKS_MOD_ESTIMATE', 'EstimateMod');
define('QUICKBOOKS_QUERY_ESTIMATE', 'EstimateQuery');
define('QUICKBOOKS_IMPORT_ESTIMATE', 'EstimateImport');
define('QUICKBOOKS_AUDIT_ESTIMATE', 'EstimateAudit');

define('QUICKBOOKS_OBJECT_INVENTORYADJUSTMENT', 'InventoryAdjustment');
define('QUICKBOOKS_ADD_INVENTORYADJUSTMENT', 'InventoryAdjustmentAdd');
define('QUICKBOOKS_QUERY_INVENTORYADJUSTMENT', 'InventoryAdjustmentQuery');
define('QUICKBOOKS_IMPORT_INVENTORYADJUSTMENT', 'InventoryAdjustmentImport');

/**
 * Job constant in QuickBooks
 *
 * In actuality, there are no such thing as "Jobs" in QuickBooks. Jobs in
 * QuickBooks are handled as customers with parent customers.
 *
 * @var string
 */
define('QUICKBOOKS_OBJECT_JOB', 'Job');
define('QUICKBOOKS_ADD_JOB', 'JobAdd');
define('QUICKBOOKS_MOD_JOB', 'JobMod');
define('QUICKBOOKS_QUERY_JOB', 'JobQuery');
define('QUICKBOOKS_IMPORT_JOB', 'JobImport');

define('QUICKBOOKS_OBJECT_ITEM', 'Item');
define('QUICKBOOKS_QUERY_ITEM', 'ItemQuery');
define('QUICKBOOKS_IMPORT_ITEM', 'ItemImport');
define('QUICKBOOKS_DERIVE_ITEM', 'ItemDerive');

define('QUICKBOOKS_OBJECT_INVENTORYITEM', 'ItemInventory');
define('QUICKBOOKS_ADD_INVENTORYITEM', 'ItemInventoryAdd');
define('QUICKBOOKS_MOD_INVENTORYITEM', 'ItemInventoryMod');
define('QUICKBOOKS_QUERY_INVENTORYITEM', 'ItemInventoryQuery');
define('QUICKBOOKS_IMPORT_INVENTORYITEM', 'ItemInventoryImport');
define('QUICKBOOKS_DERIVE_INVENTORYITEM', 'ItemInventoryDerive');

define('QUICKBOOKS_OBJECT_INVENTORYASSEMBLYITEM', 'ItemInventoryAssembly');
define('QUICKBOOKS_ADD_INVENTORYASSEMBLYITEM', 'ItemInventoryAssemblyAdd');
define('QUICKBOOKS_MOD_INVENTORYASSEMBLYITEM', 'ItemInventoryAssemblyMod');
define('QUICKBOOKS_QUERY_INVENTORYASSEMBLYITEM', 'ItemInventoryAssemblyQuery');
define('QUICKBOOKS_IMPORT_INVENTORYASSEMBLYITEM', 'ItemInventoryAssemblyImport');

define('QUICKBOOKS_OBJECT_GROUPITEM', 'ItemGroup');
define('QUICKBOOKS_ADD_GROUPITEM', 'ItemGroupAdd');
define('QUICKBOOKS_MOD_GROUPITEM', 'ItemGroupMod');
define('QUICKBOOKS_QUERY_GROUPITEM', 'ItemGroupQuery');
define('QUICKBOOKS_IMPORT_GROUPITEM', 'ItemGroupImport');

define('QUICKBOOKS_OBJECT_NONINVENTORYITEM', 'ItemNonInventory');
define('QUICKBOOKS_ADD_NONINVENTORYITEM', 'ItemNonInventoryAdd');
define('QUICKBOOKS_MOD_NONINVENTORYITEM', 'ItemNonInventoryMod');
define('QUICKBOOKS_QUERY_NONINVENTORYITEM', 'ItemNonInventoryQuery');
define('QUICKBOOKS_IMPORT_NONINVENTORYITEM', 'ItemNonInventoryImport');

define('QUICKBOOKS_OBJECT_DISCOUNTITEM', 'ItemDiscount');
define('QUICKBOOKS_ADD_DISCOUNTITEM', 'ItemDiscountAdd');
define('QUICKBOOKS_MOD_DISCOUNTITEM', 'ItemDiscountMod');
define('QUICKBOOKS_QUERY_DISCOUNTITEM', 'ItemDiscountQuery');
define('QUICKBOOKS_IMPORT_DISCOUNTITEM', 'ItemDiscountImport');

define('QUICKBOOKS_OBJECT_FIXEDASSETITEM', 'ItemFixedAsset');
define('QUICKBOOKS_ADD_FIXEDASSETITEM', 'ItemFixedAssetAdd');
define('QUICKBOOKS_MOD_FIXEDASSETITEM', 'ItemFixedAssetMod');
define('QUICKBOOKS_QUERY_FIXEDASSETITEM', 'ItemFixedAssetQuery');
define('QUICKBOOKS_IMPORT_FIXEDASSETITEM', 'ItemFixedAssetImport');

define('QUICKBOOKS_OBJECT_PAYMENTITEM', 'ItemPayment');
define('QUICKBOOKS_ADD_PAYMENTITEM', 'ItemPaymentAdd');
define('QUICKBOOKS_MOD_PAYMENTITEM', 'ItemPaymentMod');
define('QUICKBOOKS_QUERY_PAYMENTITEM', 'ItemPaymentQuery');
define('QUICKBOOKS_IMPORT_PAYMENTITEM', 'ItemPaymentImport');

define('QUICKBOOKS_OBJECT_SERVICEITEM', 'ItemService');
define('QUICKBOOKS_ADD_SERVICEITEM', 'ItemServiceAdd');
define('QUICKBOOKS_MOD_SERVICEITEM', 'ItemServiceMod');
define('QUICKBOOKS_QUERY_SERVICEITEM', 'ItemServiceQuery');
define('QUICKBOOKS_IMPORT_SERVICEITEM', 'ItemServiceImport');

define('QUICKBOOKS_OBJECT_SALESTAXITEM', 'ItemSalesTax');
define('QUICKBOOKS_ADD_SALESTAXITEM', 'ItemSalesTaxAdd');
define('QUICKBOOKS_MOD_SALESTAXITEM', 'ItemSalesTaxMod');
define('QUICKBOOKS_QUERY_SALESTAXITEM', 'ItemSalesTaxQuery');
define('QUICKBOOKS_IMPORT_SALESTAXITEM', 'ItemSalesTaxImport');

define('QUICKBOOKS_OBJECT_SALESTAXGROUPITEM', 'ItemSalesTaxGroup');
define('QUICKBOOKS_ADD_SALESTAXGROUPITEM', 'ItemSalesTaxGroupAdd');
define('QUICKBOOKS_MOD_SALESTAXGROUPITEM', 'ItemSalesTaxGroupMod');
define('QUICKBOOKS_QUERY_SALESTAXGROUPITEM', 'ItemSalesTaxGroupQuery');
define('QUICKBOOKS_IMPORT_SALESTAXGROUPITEM', 'ItemSalesTaxGroupImport');

define('QUICKBOOKS_OBJECT_OTHERCHARGEITEM', 'ItemOtherCharge');
define('QUICKBOOKS_ADD_OTHERCHARGEITEM', 'ItemOtherChargeAdd');
define('QUICKBOOKS_MOD_OTHERCHARGEITEM', 'ItemOtherChargeMod');
define('QUICKBOOKS_QUERY_OTHERCHARGEITEM', 'ItemOtherChargeQuery');
define('QUICKBOOKS_IMPORT_OTHERCHARGEITEM', 'ItemOtherChargeImport');

define('QUICKBOOKS_OBJECT_PAYROLLITEMWAGE', 'PayrollItemWage');
define('QUICKBOOKS_ADD_PAYROLLITEMWAGE', 'PayrollItemWageAdd');
define('QUICKBOOKS_MOD_PAYROLLITEMWAGE', 'PayrollItemWageMod');
define('QUICKBOOKS_QUERY_PAYROLLITEMWAGE', 'PayrollItemWageQuery');
define('QUICKBOOKS_IMPORT_PAYROLLITEMWAGE', 'PayrollItemWageImport');

define('QUICKBOOKS_OBJECT_PAYROLLITEMNONWAGE', 'PayrollItemNonWage');
define('QUICKBOOKS_ADD_PAYROLLITEMNONWAGE', 'PayrollItemNonWageAdd');
define('QUICKBOOKS_MOD_PAYROLLITEMNONWAGE', 'PayrollItemNonWageMod');
define('QUICKBOOKS_QUERY_PAYROLLITEMNONWAGE', 'PayrollItemNonWageQuery');
define('QUICKBOOKS_IMPORT_PAYROLLITEMNONWAGE', 'PayrollItemNonWageImport');

define('QUICKBOOKS_OBJECT_ITEMRECEIPT', 'ItemReceipt');
define('QUICKBOOKS_ADD_ITEMRECEIPT', 'ItemReceiptAdd');
define('QUICKBOOKS_MOD_ITEMRECEIPT', 'ItemReceiptMod');
define('QUICKBOOKS_QUERY_ITEMRECEIPT', 'ItemReceiptQuery');
define('QUICKBOOKS_IMPORT_ITEMRECEIPT', 'ItemReceiptImport');

define('QUICKBOOKS_OBJECT_SUBTOTALITEM', 'ItemSubtotal');
define('QUICKBOOKS_ADD_SUBTOTALITEM', 'ItemSubtotalAdd');
define('QUICKBOOKS_MOD_SUBTOTALITEM', 'ItemSubtotalMod');
define('QUICKBOOKS_QUERY_SUBTOTALITEM', 'ItemSubtotalQuery');
define('QUICKBOOKS_IMPORT_SUBTOTALITEM', 'ItemSubtotalImport');

define('QUICKBOOKS_QUERY_ITEMSITES', 'ItemSitesQuery');

define('QUICKBOOKS_OBJECT_INVENTORYSITE', 'InventorySite');
define('QUICKBOOKS_ADD_INVENTORYSITE', 'InventorySiteAdd');
define('QUICKBOOKS_MOD_INVENTORYSITE', 'InventorySiteMod');
define('QUICKBOOKS_QUERY_INVENTORYSITE', 'InventorySiteQuery');
define('QUICKBOOKS_IMPORT_INVENTORYSITE', 'InventorySiteImport');

define('QUICKBOOKS_OBJECT_JOBTYPE', 'JobType');
define('QUICKBOOKS_ADD_JOBTYPE', 'JobTypeAdd');
define('QUICKBOOKS_QUERY_JOBTYPE', 'JobTypeQuery');
define('QUICKBOOKS_IMPORT_JOBTYPE', 'JobTypeImport');

define('QUICKBOOKS_OBJECT_JOURNALENTRY', 'JournalEntry');
define('QUICKBOOKS_ADD_JOURNALENTRY', 'JournalEntryAdd');
define('QUICKBOOKS_MOD_JOURNALENTRY', 'JournalEntryMod');
define('QUICKBOOKS_QUERY_JOURNALENTRY', 'JournalEntryQuery');
define('QUICKBOOKS_IMPORT_JOURNALENTRY', 'JournalEntryImport');

define('QUICKBOOKS_OBJECT_INVOICE', 'Invoice');

/**
 * QuickBooks request to create an invoice
 * @var string
 */
define('QUICKBOOKS_ADD_INVOICE', 'InvoiceAdd');

/**
 * QuickBooks request to modify an invoice
 * @var string
 */
define('QUICKBOOKS_MOD_INVOICE', 'InvoiceMod');

/**
 * QuickBooks request to run a query for invoices
 * @var string
 */
define('QUICKBOOKS_QUERY_INVOICE', 'InvoiceQuery');
define('QUICKBOOKS_IMPORT_INVOICE', 'InvoiceImport');
define('QUICKBOOKS_DERIVE_INVOICE', 'InvoiceDerive');
define('QUICKBOOKS_AUDIT_INVOICE', 'InvoiceAudit');

define('QUICKBOOKS_OBJECT_RECEIVEPAYMENT', 'ReceivePayment');

/**
 * QuickBooks request to register a payment as received
 * @var string
 */
define('QUICKBOOKS_ADD_RECEIVEPAYMENT', 'ReceivePaymentAdd');
define('QUICKBOOKS_MOD_RECEIVEPAYMENT', 'ReceivePaymentMod');
define('QUICKBOOKS_QUERY_RECEIVEPAYMENT', 'ReceivePaymentQuery');
define('QUICKBOOKS_IMPORT_RECEIVEPAYMENT', 'ReceivePaymentImport');
define('QUICKBOOKS_AUDIT_RECEIVEPAYMENT', 'ReceivePaymentAudit');
define('QUICKBOOKS_DERIVE_RECEIVEPAYMENT', 'ReceivePaymentDerive');

define('QUICKBOOKS_ADD_RECEIVE_PAYMENT', QUICKBOOKS_ADD_RECEIVEPAYMENT);
define('QUICKBOOKS_MOD_RECEIVE_PAYMENT', QUICKBOOKS_MOD_RECEIVEPAYMENT);
define('QUICKBOOKS_QUERY_RECEIVE_PAYMENT', QUICKBOOKS_QUERY_RECEIVEPAYMENT);
define('QUICKBOOKS_IMPORT_RECEIVE_PAYMENT', QUICKBOOKS_IMPORT_RECEIVEPAYMENT);
define('QUICKBOOKS_DERIVE_RECEIVE_PAYMENT', QUICKBOOKS_DERIVE_RECEIVEPAYMENT);

define('QUICKBOOKS_OBJECT_OTHERNAME', 'OtherName');
define('QUICKBOOKS_ADD_OTHERNAME', 'OtherNameAdd');
define('QUICKBOOKS_MOD_OTHERNAME', 'OtherNameMod');
define('QUICKBOOKS_QUERY_OTHERNAME', 'OtherNameQuery');

define('QUICKBOOKS_OBJECT_PAYMENTMETHOD', 'PaymentMethod');
define('QUICKBOOKS_ADD_PAYMENTMETHOD', 'PaymentMethodAdd');
define('QUICKBOOKS_QUERY_PAYMENTMETHOD', 'PaymentMethodQuery');
define('QUICKBOOKS_IMPORT_PAYMENTMETHOD', 'PaymentMethodImport');

define('QUICKBOOKS_OBJECT_PRICELEVEL', 'PriceLevel');
define('QUICKBOOKS_ADD_PRICELEVEL', 'PriceLevelAdd');
define('QUICKBOOKS_MOD_PRICELEVEL', 'PriceLevelMod');
define('QUICKBOOKS_QUERY_PRICELEVEL', 'PriceLevelQuery');
define('QUICKBOOKS_IMPORT_PRICELEVEL', 'PriceLevelImport');

define('QUICKBOOKS_OBJECT_PURCHASEORDER', 'PurchaseOrder');
define('QUICKBOOKS_ADD_PURCHASEORDER', 'PurchaseOrderAdd');
define('QUICKBOOKS_MOD_PURCHASEORDER', 'PurchaseOrderMod');
define('QUICKBOOKS_QUERY_PURCHASEORDER', 'PurchaseOrderQuery');
define('QUICKBOOKS_IMPORT_PURCHASEORDER', 'PurchaseOrderImport');
define('QUICKBOOKS_DERIVE_PURCHASEORDER', 'PurchaseOrderDerive');
define('QUICKBOOKS_AUDIT_PURCHASEORDER', 'PurchaseOrderAudit');

define('QUICKBOOKS_ADD_PURCHASE_ORDER', QUICKBOOKS_ADD_PURCHASEORDER);
define('QUICKBOOKS_MOD_PURCHASE_ORDER', QUICKBOOKS_MOD_PURCHASEORDER);
define('QUICKBOOKS_QUERY_PURCHASE_ORDER', QUICKBOOKS_QUERY_PURCHASEORDER);
define('QUICKBOOKS_IMPORT_PURCHASE_ORDER', QUICKBOOKS_IMPORT_PURCHASEORDER);

define('QUICKBOOKS_OBJECT_SALESORDER', 'SalesOrder');
define('QUICKBOOKS_ADD_SALESORDER', 'SalesOrderAdd');
define('QUICKBOOKS_MOD_SALESORDER', 'SalesOrderMod');
define('QUICKBOOKS_QUERY_SALESORDER', 'SalesOrderQuery');
define('QUICKBOOKS_IMPORT_SALESORDER', 'SalesOrderImport');
define('QUICKBOOKS_DERIVE_SALESORDER', 'SalesOrderDerive');

define('QUICKBOOKS_OBJECT_SALESRECEIPT', 'SalesReceipt');
define('QUICKBOOKS_ADD_SALESRECEIPT', 'SalesReceiptAdd');
define('QUICKBOOKS_MOD_SALESRECEIPT', 'SalesReceiptMod');
define('QUICKBOOKS_QUERY_SALESRECEIPT', 'SalesReceiptQuery');
define('QUICKBOOKS_IMPORT_SALESRECEIPT', 'SalesReceiptImport');
define('QUICKBOOKS_AUDIT_SALESRECEIPT', 'SalesReceiptAudit');

define('QUICKBOOKS_OBJECT_SALESREP', 'SalesRep');
define('QUICKBOOKS_ADD_SALESREP', 'SalesRepAdd');
define('QUICKBOOKS_MOD_SALESREP', 'SalesRepMod');
define('QUICKBOOKS_QUERY_SALESREP', 'SalesRepQuery');
define('QUICKBOOKS_IMPORT_SALESREP', 'SalesRepImport');

define('QUICKBOOKS_OBJECT_SALESTAXCODE', 'SalesTaxCode');
define('QUICKBOOKS_ADD_SALESTAXCODE', 'SalesTaxCodeAdd');
define('QUICKBOOKS_QUERY_SALESTAXCODE', 'SalesTaxCodeQuery');
define('QUICKBOOKS_IMPORT_SALESTAXCODE', 'SalesTaxCodeImport');

define('QUICKBOOKS_OBJECT_SHIPMETHOD', 'ShipMethod');
define('QUICKBOOKS_ADD_SHIPMETHOD', 'ShipMethodAdd');
define('QUICKBOOKS_QUERY_SHIPMETHOD', 'ShipMethodQuery');
define('QUICKBOOKS_IMPORT_SHIPMETHOD', 'ShipMethodImport');

define('QUICKBOOKS_OBJECT_SPECIALACCOUNT', 'SpecialAccount');
define('QUICKBOOKS_ADD_SPECIALACCOUNT', 'SpecialAccountAdd');

define('QUICKBOOKS_OBJECT_SPECIALITEM', 'SpecialItem');
define('QUICKBOOKS_ADD_SPECIALITEM', 'SpecialItemAdd');

define('QUICKBOOKS_OBJECT_STANDARDTERMS', 'StandardTerms');
define('QUICKBOOKS_ADD_STANDARDTERMS', 'StandardTermsAdd');
define('QUICKBOOKS_QUERY_STANDARDTERMS', 'StandardTermsQuery');
define('QUICKBOOKS_IMPORT_STANDARDTERMS', 'StandardTermsImport');

define('QUICKBOOKS_OBJECT_TEMPLATE', 'Template');
define('QUICKBOOKS_QUERY_TEMPLATE', 'TemplateQuery');
define('QUICKBOOKS_IMPORT_TEMPLATE', 'TemplateImport');

define('QUICKBOOKS_OBJECT_TERMS', 'Terms');
define('QUICKBOOKS_QUERY_TERMS', 'TermsQuery');
define('QUICKBOOKS_IMPORT_TERMS', 'TermsImport');

define('QUICKBOOKS_DEL_LIST', 'ListDel');
define('QUICKBOOKS_DELETE_LIST', QUICKBOOKS_DEL_LIST);

/**
 *
 */
define('QUICKBOOKS_OBJECT_TIMETRACKING', 'TimeTracking');
define('QUICKBOOKS_ADD_TIMETRACKING','TimeTrackingAdd');
define('QUICKBOOKS_MOD_TIMETRACKING','TimeTrackingMod');
define('QUICKBOOKS_QUERY_TIMETRACKING','TimeTrackingQuery');
define('QUICKBOOKS_IMPORT_TIMETRACKING', 'TimeTrackingImport');

define('QUICKBOOKS_OBJECT_TRANSACTION', 'Transaction');

/**
 * QuickBooks request to delete a transaction
 * @var string
 */
define('QUICKBOOKS_DELETE_TRANSACTION', 'TxnDel');
define('QUICKBOOKS_DEL_TRANSACTION', QUICKBOOKS_DELETE_TRANSACTION);
define('QUICKBOOKS_DEL_TXN', QUICKBOOKS_DELETE_TRANSACTION);
define('QUICKBOOKS_DELETE_TXN', QUICKBOOKS_DELETE_TRANSACTION);

define('QUICKBOOKS_QUERY_TRANSACTION', 'TransactionQuery');
define('QUICKBOOKS_VOID_TRANSACTION', 'TxnVoid');

define('QUICKBOOKS_IMPORT_TRANSACTION', 'TransactionImport');

define('QUICKBOOKS_OBJECT_VEHICLE', 'Vehicle');
define('QUICKBOOKS_ADD_VEHICLE', 'VehicleAdd');
define('QUICKBOOKS_MOD_VEHICLE', 'VehicleMod');
define('QUICKBOOKS_QUERY_VEHICLE', 'VehicleQuery');
define('QUICKBOOKS_IMPORT_VEHICLE', 'VehicleImport');

define('QUICKBOOKS_OBJECT_VEHICLEMILEAGE', 'VehicleMileage');
define('QUICKBOOKS_ADD_VEHICLEMILEAGE', 'VehicleMileageAdd');
define('QUICKBOOKS_MOD_VEHICLEMILEAGE', 'VehicleMileageMod');
define('QUICKBOOKS_QUERY_VEHICLEMILEAGE', 'VehicleMileageQuery');
define('QUICKBOOKS_IMPORT_VEHICLEMILEAGE', 'VehicleMileageImport');

define('QUICKBOOKS_OBJECT_VENDOR', 'Vendor');
define('QUICKBOOKS_ADD_VENDOR', 'VendorAdd');
define('QUICKBOOKS_MOD_VENDOR', 'VendorMod');
define('QUICKBOOKS_QUERY_VENDOR', 'VendorQuery');
define('QUICKBOOKS_IMPORT_VENDOR', 'VendorImport');
define('QUICKBOOKS_DERIVE_VENDOR', 'VendorDerive');

define('QUICKBOOKS_OBJECT_VENDORCREDIT', 'VendorCredit');
define('QUICKBOOKS_ADD_VENDORCREDIT', 'VendorCreditAdd');
define('QUICKBOOKS_MOD_VENDORCREDIT', 'VendorCreditMod');
define('QUICKBOOKS_QUERY_VENDORCREDIT', 'VendorCreditQuery');
define('QUICKBOOKS_IMPORT_VENDORCREDIT', 'VendorCreditImport');
define('QUICKBOOKS_DERIVE_VENDORCREDIT', 'VendorCreditDerive');

define('QUICKBOOKS_OBJECT_VENDORTYPE', 'VendorType');
define('QUICKBOOKS_ADD_VENDORTYPE', 'VendorTypeAdd');
define('QUICKBOOKS_QUERY_VENDORTYPE', 'VendorTypeQuery');
define('QUICKBOOKS_IMPORT_VENDORTYPE', 'VendorTypeImport');

define('QUICKBOOKS_OBJECT_WORKERSCOMPCODE', 'WorkersCompCode');
define('QUICKBOOKS_ADD_WORKERSCOMPCODE', 'WorkersCompCodeAdd');
define('QUICKBOOKS_MOD_WORKERSCOMPCODE', 'WorkersCompCodeMod');
define('QUICKBOOKS_QUERY_WORKERSCOMPCODE', 'WorkersCompCodeQuery');
define('QUICKBOOKS_IMPORT_WORKERSCOMPCODE', 'WorkersCompCodeImport');

define('QUICKBOOKS_OBJECT_UNITOFMEASURESET', 'UnitOfMeasureSet');
define('QUICKBOOKS_ADD_UNITOFMEASURESET', 'UnitOfMeasureSetAdd');
#define('QUICKBOOKS_MOD_UNITOFMEASURESET', 'UnitOfMeasureSetMod');
define('QUICKBOOKS_QUERY_UNITOFMEASURESET', 'UnitOfMeasureSetQuery');
define('QUICKBOOKS_IMPORT_UNITOFMEASURESET', 'UnitOfMeasureSetImport');

/**
 * An always-present QuickBooks constant for "TAXABLE" items to embed in "SalesTaxCodeRef FullName" qbXML values
 *
 * @var string
 */
define('QUICKBOOKS_TAXABLE', 'TAX');

/**
 * An always-present QuickBooks constant for "NON-TAXABLE" items to embed in "SalesTaxCodeRef FullName" qbXML values
 *
 * @var string
 */
define('QUICKBOOKS_NONTAXABLE', 'NON');

define('QUICKBOOKS_LISTID', 'ListID');
define('QUICKBOOKS_TXNID', 'TxnID');
define('QUICKBOOKS_TXNLINEID', 'TxnLineID');

/*
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_ACCOUNTSPAYABLE', 'AccountsPayable');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_ACCOUNTSRECEIVABLE', 'AccountsReceivable');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_BANK', 'Bank');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_COSTOFGOODSSOLD', 'CostOfGoodsSold');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_CREDITCARD', 'CreditCard');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_EQUITY', 'Equity');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_EXPENSE', 'Expense');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_FIXEDASSET', 'FixedAsset');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_INCOME', 'Income');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_LONGTERMLIABILITY', 'LongTermLiability');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_NONPOSTING', 'NonPosting');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_OTHERASSET', 'OtherAsset');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_CURRENTASSET', 'OtherCurrentAsset');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_CURRENTLIABILITY', 'OtherCurrentLiability');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_OTHEREXPENSE', 'OtherExpense');
define('QUICKBOOKS_ACCOUNT_ACCOUNTTYPE_OTHERINCOME', 'OtherIncome');

define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_ACCOUNTSPAYABLE', 'AccountsPayable');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_ACCOUNTSRECEIVABLE', 'AccountsReceivable');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_CONDENSEITEMADJUSTMENTEXPENSES', 'CondenseItemAdjustmentExpenses');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_COSTOFGOODSSOLD', 'CostOfGoodsSold');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_DIRECTDEPOSITLIABILITIES', 'DirectDepositLiabilities');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_ESTIMATES', 'Estimates');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_INVENTORYASSETS', 'InventoryAssets');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_OPENINGBALANCEEQUITY', 'OpeningBalanceEquity');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_PAYROLLEXPENSES', 'PayrollExpenses');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_PAYROLLLIABILITIES', 'PayrollLiabilities');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_PETTYCASH', 'PettyCash');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_PURCHASEORDERS', 'PurchaseOrders');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_RECONCILIATIONDIFFERENCES', 'ReconciliationDifferences');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_RETAINEDEARNINGS', 'RetainedEarnings');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_SALESORDERS', 'SalesOrders');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_SALESTAXPAYABLE', 'SalesTaxPayable');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_UNCATEGORIZEDEXPENSES', 'UncategorizedExpenses');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_UNCATEGORIZEDINCOME', 'UncategorizedIncome');
define('QUICKBOOKS_ACCOUNT_SPECIALACCOUNTTYPE_UNDEPOSITEDFUNDS', 'UndepositedFunds');

define('QUICKBOOKS_CUSTOMER_DELIVERYMETHOD_PRINT', 'Print');
define('QUICKBOOKS_CUSTOMER_DELIVERYMETHOD_FAX', 'Fax');
define('QUICKBOOKS_CUSTOMER_DELIVERYMETHOD_EMAIL', 'Email');

define('QUICKBOOKS_ACTIVESTATUS_ALL', 'All');
define('QUICKBOOKS_ACTIVESTATUS_ACTIVEONLY', 'ActiveOnly');
define('QUICKBOOKS_ACTIVESTATUS_INACTIVEONLY', 'InactiveOnly');

define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASURETYPE_AREA', 'Area');
define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASTURETYPE_COUNT', 'Count');
define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASTURETYPE_LENGTH', 'Length');
define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASTURETYPE_OTHER', 'Other');
define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASTURETYPE_TIME', 'Time');
define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASTURETYPE_VOLUME', 'Volume');
define('QUICKBOOKS_UNITOFMEASURESET_UNITOFMEASTURETYPE_WEIGHT', 'Weight');

define('QUICKBOOKS_REPORT_GENERAL_SUMMARY', 'GeneralSummaryReportQuery');
define('QUICKBOOKS_REPORT_AGING', 'AgingReportQuery');
define('QUICKBOOKS_REPORT_BUDGET_SUMMARY', 'BudgetSummaryReportQuery');
*/

/**
 * Queuing status for queued QuickBooks transactions - QUEUED
 * @var char
 */
define('QUICKBOOKS_STATUS_QUEUED', 'q');

/**
 * QuickBooks status for queued QuickBooks transactions - was queued, then SUCCESSFULLY PROCESSED
 * @var char
 */
define('QUICKBOOKS_STATUS_SUCCESS', 's');

/**
 * QuickBooks status for queued QuickBooks transactions - was queued, an ERROR OCCURED when processing it
 * @var char
 */
define('QUICKBOOKS_STATUS_ERROR', 'e');

/**
 * QuickBooks status for items that have been dequeued and are being processed by QuickBooks (we assume) but we havn't received a response back about them yet
 * @var char
 */
define('QUICKBOOKS_STATUS_PROCESSING', 'i');

/**
 * QuickBooks status for items that were dequeued, had an error occured, and then the error was handled by an error handler
 * @var char
 */
define('QUICKBOOKS_STATUS_HANDLED', 'h');

/**
 * QuickBooks status for items that were cancelled
 * @var char
 */
define('QUICKBOOKS_STATUS_CANCELLED', 'c');

/**
 * QuickBooks status for items that were forcibly removed from the queue
 * @var char
 */
define('QUICKBOOKS_STATUS_REMOVED', 'r');

/**
 * QuickBooks status for items that were NoOp
 * @var char
 */
define('QUICKBOOKS_STATUS_NOOP', 'n');

/**
 * Error code for errors that are not really errors...
 * @var integer
 */
define('QUICKBOOKS_ERROR_OK', 0);

/**
 * Error code for SOAP server errors that occur internally (misc. errors)
 * @var integer
 */
define('QUICKBOOKS_ERROR_INTERNAL', -1);

/**
 * Error code for errors that occur within function handlers
 * @var integer
 */
define('QUICKBOOKS_ERROR_HANDLER', -2);

/**
 * Error code for errors that occur within driver classes
 * @var integer
 */
define('QUICKBOOKS_ERROR_DRIVER', -3);

/**
 * Error code for errors that are reported by hook classes
 * @var integer
 */
define('QUICKBOOKS_ERROR_HOOK', -4);

/**
 * Status for an enabled user
 * @var char
 */
define('QUICKBOOKS_USER_ENABLED', 'e');

/**
 * Status for a disabled user
 * @var char
 */
define('QUICKBOOKS_USER_DISABLED', 'd');

/**
 *
 */
require_once QUICKBOOKS_BASEDIR . '/QuickBooks/Loader.php';

/**
 * Frameworks declarations
 */
require_once QUICKBOOKS_BASEDIR . '/QuickBooks/Frameworks.php';

class QuickBooks
{
    public $debug = false;
    public static $quickbooks_is_connected = false;
    public static $realm;
    public static $quickbooks_CompanyInfo;
    public static $instance;
    public static $ipp;

    #Limits and throttles
    public $quickbooks_limits = array(
        'sanxbox' => array(
            'locate'      => 'US',
            'request'     => 100,
            'customer'    => 31,
            'invoice'     => 141,
            'item'        => 20,
            'payment'     => 40,
        ),
        'production' => array(
            'request'     => 500,
            'payment'     => 40,
            'report'      => 200,
            'customer'    => 500,
            'invoice'     => 500,
        )
    );

    #This is the URL of your OAuth auth handler page
    public $quickbooks_oauth_url = 'http://qb.gorilladesk.com/quickbooks/oauth';

    #This is the URL to forward the user to after they have connected to IPP/IDS via OAuth
    public $quickbooks_success_url = 'http://db.gorilladesk.com/quickbooks/success';

    #This is the menu URL script
    public $quickbooks_menu_url = 'http://db.gorilladesk.com/quickbooks/menu';

    #This is a database connection string that will be used to store the OAuth credentials
    #$dsn = 'pgsql://username:password@hostname/database';
    #$dsn = 'mysql://username:password@hostname/database';
    public $dsn = '';

    #Your application token (Intuit will give you this when you register an Intuit Anywhere app)
    public $token = '2d6a3a2bb0fa0b46f0b910ebaa523efb93de';

    #PHP DevKit IntuitAnywhere classes automatically.
    public $oauth_consumer_key = 'qyprdnqA2uDwyfNqA805eXNiAtUmQ3';

    public $oauth_consumer_secret = 'o9dYxioKsSdKj4dkvB3QlmG823gwMeHjxyVBqc6o';

    #If you're using DEVELOPMENT TOKENS, you MUST USE SANDBOX MODE!!!  If you're in PRODUCTION, then DO NOT use sandbox.
    #When you're using development tokens
    public $sandbox = true;

    #Do not change this unless you really know what you're doing!!!  99% of apps will not require a change to this.
    public $oauth_key = 'DO_NOT_CHANGE_ME';

    #The tenant that user is accessing within your own app
    public $oauth_pwd = 12345;

    #You should set this to an encryption key specific to your app
    public $encryption_key = 'bcde1234';

    public function init()
    {
        #Compatibility functions
        QuickBooks_Loader::load('/QuickBooks/Compat.php');

        #If this constant isn't defined, then include *everything*
        if (!defined('QUICKBOOKS_FRAMEWORKS')) {
            $all = 0;

            $constants = get_defined_constants(true);
            foreach ($constants['user'] as $constant => $value) {
                if (substr($constant, 0, 21) == 'QUICKBOOKS_FRAMEWORK_') {
                    $all = $all || $value;
                }
            }

            /**
             * Determines which frameworks are included (if not defined, this defines it to include *everything*)
             * @var integer
             */
            define('QUICKBOOKS_FRAMEWORKS', $all);
        }

        if (QUICKBOOKS_FRAMEWORKS && QUICKBOOKS_FRAMEWORK_QUEUE or
            QUICKBOOKS_FRAMEWORKS && QUICKBOOKS_FRAMEWORK_WEBCONNECTOR) {
            /**
             * Queue class for QuickBooks queueing
             */
            QuickBooks_Loader::load('/QuickBooks/WebConnector/Queue.php');
        }

        if (QUICKBOOKS_FRAMEWORKS && QUICKBOOKS_FRAMEWORK_WEBCONNECTOR) {
            /**
             * SOAP server for QuickBooks web services
             */
            QuickBooks_Loader::load('/QuickBooks/WebConnector/Server.php');

            /**
             * Web Connector generation
             */
            QuickBooks_Loader::load('/QuickBooks/WebConnector/QWC.php');

            /**
             * Various QuickBooks utility classes
             */
            QuickBooks_Loader::load('/QuickBooks/Utilities.php');
        }

        if (QUICKBOOKS_FRAMEWORKS && QUICKBOOKS_FRAMEWORK_IPP) {
            QuickBooks_Loader::load('/QuickBooks/IPP.php');
        }

        if (QUICKBOOKS_FRAMEWORK_MISCELLANEOUS && QUICKBOOKS_FRAMEWORKS or
            QUICKBOOKS_FRAMEWORK_ONLINEEDITION && QUICKBOOKS_FRAMEWORKS or
            QUICKBOOKS_FRAMEWORK_MERCHANTSERVICE && QUICKBOOKS_FRAMEWORKS) {
            /**
             * Encryption/decryption classes
             */
            QuickBooks_Loader::load('/QuickBooks/Encryption/Factory.php');
        }

        if (QUICKBOOKS_FRAMEWORK_CONSTANTS != QUICKBOOKS_FRAMEWORKS) {
            /**
             * Functions for calling callback functions
             */
            QuickBooks_Loader::load('/QuickBooks/Callbacks.php');
        }

        if (QUICKBOOKS_FRAMEWORK_MISCELLANEOUS && QUICKBOOKS_FRAMEWORKS) {
            /**
             * Utilities for ensuring values fit into qbXML fields
             */
            QuickBooks_Loader::load('/QuickBooks/Cast.php');
        }

        if (QUICKBOOKS_FRAMEWORK_MERCHANTSERVICE && QUICKBOOKS_FRAMEWORKS) {
            /**
             * QuickBooks Merchant Service support
             */
            QuickBooks_Loader::load('/QuickBooks/MerchantService.php');
        }

        if (QUICKBOOKS_FRAMEWORK_WEBCONNECTOR && QUICKBOOKS_FRAMEWORKS) {
            #Other servers
            QuickBooks_Loader::import('/QuickBooks/WebConnector/Server');
        }

        if (QUICKBOOKS_FRAMEWORK_QBXML && QUICKBOOKS_FRAMEWORKS) {
            #Objects for the API
            QuickBooks_Loader::import('/QuickBooks/QBXML/Object');
        }
    }

    /**
     * Construct method
    */
    public function __destruct()
    {
        #Method detruct
    }

    /**
     * Connect to system to gorilladesk
     * @return void
     */
    public function connection($uid = null, $token = null)
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        $this->init();

        if (empty($this->dsn)) {
            $this->dsn = 'mysqli://'.env('DB_USERNAME').':'.env('DB_PASSWORD').'@'.env('DB_HOST').'/'.env('DB_NAME');
        }

        #Check if account exist
        $this->setUsername($uid);
        $this->setPassword($token);

        #Initialize the database tables for storing OAuth information
        if (!QuickBooks_Utilities::initialized($this->dsn)) {
            #Initialize creates the neccessary database schema for queueing up requests and logging
            QuickBooks_Utilities::initialize($this->dsn);
        }

        self::$instance = new QuickBooks_IPP_IntuitAnywhere(
            $this->dsn,
            $this->encryption_key,
            $this->oauth_consumer_key,
            $this->oauth_consumer_secret,
            $this->quickbooks_oauth_url,
            $this->quickbooks_success_url
        );

        # Are they connected to QuickBooks right now?
        if (self::$instance->check($this->oauth_key, $this->oauth_pwd) and
            self::$instance->test($this->oauth_key, $this->oauth_pwd)) {
            # Yes, they are
            self::$quickbooks_is_connected = true;

            # Set up the IPP instance
            self::$ipp = new QuickBooks_IPP($this->dsn, null, array(), QUICKBOOKS_LOG_NORMAL, $this->sandbox);

            #Get our OAuth credentials from the database
            $creds = self::$instance->load($this->oauth_key, $this->oauth_pwd);

            #Tell the framework to load some data from the OAuth store
            self::$ipp->authMode(
                QuickBooks_IPP::AUTHMODE_OAUTH,
                $this->oauth_key,
                $creds
            );

             #Turn on/off sandbox mode/URLs
            self::$ipp->sandbox($this->sandbox);

            #This is our current realm
            self::$realm = $creds['qb_realm'];

            #Load the OAuth information from the database
            $Context = self::$ipp->context();

            #Get some company info
            $CompanyInfoService = new QuickBooks_IPP_Service_CompanyInfo();
            self::$quickbooks_CompanyInfo = $CompanyInfoService->get($Context, self::$realm);
        } else {
            self::$quickbooks_is_connected = false;
        }

        return self::$instance;
    }

    /**
     * Get object instance
     * @return object of quickbooks
     */
    public function getInstance($uid = null, $token = null)
    {
        if (self::$instance === null) {
            self::$instance = $this->connection($uid, $token);
        }

        return self::$instance;
    }

    public function setUsername($uid = null)
    {
        $this->oauth_key =  $uid;
    }

    public function setPassword($pwd = null)
    {
        $this->oauth_pwd = $pwd;
    }

    public function getIpp()
    {
        return self::$ipp;
    }

    public function quickbooksIsConnect()
    {
        return self::$quickbooks_is_connected;
    }

    public function getRealm()
    {
        return self::$realm;
    }

    public function getCompanyInfo()
    {
        return self::$quickbooks_CompanyInfo;
    }

    public function log($msg)
    {
        if ($this->debug) {
        }
    }

    public function getThrottles()
    {
        if ($this->sandbox) {
            return $this->quickbooks_limits['sanxbox'];
        }

        return $this->quickbooks_limits['production'];
    }

    public function getLimitItem($key)
    {
        $list = $this->getThrottles();

        if (isset($list[$key])) {
            return $list[$key];
        }

        #Default request
        return $list['request'];
    }
}
