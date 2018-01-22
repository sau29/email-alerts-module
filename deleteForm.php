<?php
namespace Vanderbilt\EmailTriggerExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;


$prefix = ExternalModules::getPrefixForID($_GET['id']);
$pid = $_GET['pid'];
$index =  $_REQUEST['index_modal_delete_user'];

$email_deleted =  empty(ExternalModules::getProjectSetting($prefix, $pid, 'email-deleted'))?array():ExternalModules::getProjectSetting($prefix, $pid, 'email-deleted');

$email_deleted[$index] = "1";
$message = "D";


ExternalModules::setProjectSetting($prefix,$pid, 'email-deleted', $email_deleted);

echo json_encode(array(
    'status' => 'success',
    'message' => $message
));

?>
