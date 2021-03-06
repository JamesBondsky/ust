<?
##############################################
# Bitrix: SiteManager                        #
# Copyright (c) 2002-2010 Bitrix             #
# http://www.bitrixsoft.com                  #
# mailto:sources@bitrixsoft.com              #
##############################################

global $DB;
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/mail/constants.php");

CModule::AddAutoloadClasses(
	"mail",
	array(
		"CMailError" => "classes/general/mail.php",
		"CMailHeader" => "classes/general/mail.php",
		"CMailAttachment" => "classes/general/mail.php",
		"CMailFilter" => "classes/general/mail.php",
		"CMailFilterCondition" => "classes/general/mail.php",
		"CMailLog" => "classes/general/mail.php",

		"CMailbox" => "classes/".strtolower($DB->type)."/mail.php",
		"CMailUtil" => "classes/".strtolower($DB->type)."/mail.php",
		"CMailMessage" => "classes/".strtolower($DB->type)."/mail.php",
			
		"CSMTPServer" => "classes/general/smtp.php",
		"CSMTPServerHost" => "classes/general/smtp.php",
		"CSMTPConnection" => "classes/general/smtp.php",

		"CMailImap" => "classes/general/imap.php",

		"CMailRestService" => "classes/general/rest.php",
	)
);


?>