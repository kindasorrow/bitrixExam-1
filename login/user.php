<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("user");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"",
	Array(
		"FORGOT_PASSWORD_URL" => "login/?forgot_password=yes",
		"PROFILE_URL" => "login/user.php",
		"REGISTER_URL" => "login/?register=yes",
		"SHOW_ERRORS" => "N"
	)
);?> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>