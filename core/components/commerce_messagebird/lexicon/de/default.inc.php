<?php

$_lang['commerce_messagebird'] = 'MessageBird';
$_lang['commerce_messagebird.description'] = 'Integration of MessageBird, to allow sending order messages via SMS automatically (as status change action) or manually (through order messages).';
$_lang['commerce_messagebird.module_description'] = 'Important: before you can send messages with the MessageBird API, configure the commerce_messagebird.access_key and commerce_messagebird.originator system settings.';
$_lang['commerce_messagebird.recipients'] = 'Empfänger';
$_lang['commerce_messagebird.recipients.description'] = 'The recipient(s) of the text message(s) to be sent. Enter recipients separated by a comma. Valid values include: "billing", "shipping", or a valid phone number including country code, like +31612345678.';
$_lang['commerce_messagebird.content'] = 'Nachricht';
$_lang['commerce_messagebird.content.simple_description'] = 'The content to send in a text message to the customer. Keep in mind text messages are billed by the number of characters.';
$_lang['commerce_messagebird.content.description'] = 'The text message to send. You can use various placeholders for name/address information ({{ shipping_address.fullname }}, {{ shipping_address.address1 }}, etc), order information ({{ order.id }}, {{ order.total_formatted }}, etc) and more. See https://docs.modmore.com/en/Commerce/v1/Orders/Messages.html for available placeholders. Keep in mind that SMS is for short messages, and that MessageBird bills per 70 (unicode)/160 (GSM 03.38) characters.';
$_lang['commerce_messagebird.msgid'] = 'MessageBird Nachricht-ID';

$_lang['setting_commerce_messagebird.access_key'] = 'Zugriffsschlüssel';
$_lang['setting_commerce_messagebird.access_key_desc'] = 'Der Zugriffsschlüssel für die Integration von MessageBird. Finden oder erstellen Sie Ihren Zugriffsschlüssel im MessageBird Dashboard unter Entwickler > API Access (REST).';
$_lang['setting_commerce_messagebird.originator'] = 'Absender';
$_lang['setting_commerce_messagebird.originator_desc'] = 'Die "von" Telefon Nummer (im MSISDN Format einschließlich Vorwahl) oder eine alphanumerische Zeichenfolge, die als Absender auf den Text anzuwenden ist. Bis zu 11 Zeichen werden unterstützt.';

// Some lexicons are automatically called by the commerce core, based on the product class name, so add those.
$_lang['commerce.MessageBirdOrderMessage'] = 'SMS';
$_lang['commerce.send_MessageBirdOrderMessage'] = 'Senden Sie eine SMS';
$_lang['commerce.MessageBirdStatusChangeAction'] = 'SMS (via MessageBird)';
$_lang['commerce.add_MessageBirdStatusChangeAction'] = 'Senden Sie eine SMS (über MessageBird)';
