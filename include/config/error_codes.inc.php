<?php
$defflip = (!cfip()) ? exit(header('HTTP/1.1 401 Unauthorized')) : 1;

$aErrorCodes['OK'] = 'OK';
$aErrorCodes['E0001'] = 'Out of Order Share Detected';
$aErrorCodes['E0002'] = 'Upstream shares not found';
$aErrorCodes['E0003'] = 'Failed to change shares order';
$aErrorCodes['E0004'] = 'Failed to reset previous block';
$aErrorCodes['E0005'] = 'Unable to fetch blocks upstream share';
$aErrorCodes['E0006'] = 'Unable to conenct to RPC server backend';
$aErrorCodes['E0007'] = 'Out of Order Share detected, autofixed';
$aErrorCodes['E0008'] = 'Failed to delete archived shares';
$aErrorCodes['E0009'] = 'Cron disabled by admin';
$aErrorCodes['E0010'] = 'Unable set payout as processed';
$aErrorCodes['E0011'] = 'No new unaccounted blocks';
$aErrorCodes['E0012'] = 'No share_id found for block';
$aErrorCodes['E0013'] = 'No shares found for block';
$aErrorCodes['E0014'] = 'Failed marking block as accounted';
$aErrorCodes['E0015'] = 'Potential Double Payout detected';
$aErrorCodes['E0016'] = 'Failed to delete accounted shares';
$aErrorCodes['E0017'] = 'Failed to update Uptime Robot status';
$aErrorCodes['E0018'] = 'Cron disbaled due to errors';
$aErrorCodes['E0019'] = "SQL Query failed: %s";
$aErrorCodes['E0020'] = 'Internal error while executing SQL';
$aErrorCodes['E0021'] = 'Unable to fetch invitiations send from your account';
$aErrorCodes['E0022'] = 'Unable to create invitation record';
$aErrorCodes['E0023'] = 'Invalid E-Mail Address';
$aErrorCodes['E0024'] = 'Message may only contain alphanumeric characters';
$aErrorCodes['E0025'] = 'This email is already registered as an account';
$aErrorCodes['E0026'] = 'A pending invitation for this address already exists';
$aErrorCodes['E0027'] = 'Unable to generate invitation token: %s';
$aErrorCodes['E0028'] = 'Unable to send email to recipient';
$aErrorCodes['E0029'] = 'Unable to send invitation';
$aErrorCodes['E0030'] = 'Unable to fetch a valid token for this invitation';
$aErrorCodes['E0031'] = 'Failed to send e-mail via mail() function';
$aErrorCodes['E0032'] = 'Failed to run API call: %s';
$aErrorCodes['E0033'] = 'Failed to store uptime status: %s';
$aErrorCodes['E0034'] = 'Subject may only contain alphanumeric characters';
$aErrorCodes['E0035'] = 'Failed to add news record';
$aErrorCodes['E0036'] = 'Failed to delete news record';
$aErrorCodes['E0037'] = 'Failed to update news record';
$aErrorCodes['E0038'] = 'Failed to fetch news record entry';
$aErrorCodes['E0039'] = 'Failed to fetch news records';
$aErrorCodes['E0040'] = 'Failed to fetch active news records';
$aErrorCodes['E0041'] = 'Failed to fetch existing notification records';
$aErrorCodes['E0042'] = 'Failed to fetch active notification records';
$aErrorCodes['E0043'] = 'Unable to add new notification';
$aErrorCodes['E0044'] = 'Failed to fetch notifications for user account';
$aErrorCodes['E0045'] = 'Failed fetching notification settings for user account';
$aErrorCodes['E0046'] = 'Failed to fetch notification setting for user account';
$aErrorCodes['E0047'] = "Failed to update %s settings";
$aErrorCodes['E0048'] = 'Failed to check for existing active payouts';
$aErrorCodes['E0049'] = 'Unable to create new payout request';
$aErrorCodes['E0050'] = 'Failed to fetch unprocessed payouts';
$aErrorCodes['E0051'] = 'Failed to mark payout as processed';
$aErrorCodes['E0052'] = 'Unable to find valid upstream share for block: %s';
$aErrorCodes['E0053'] = 'Failed to update %s workers';
$aErrorCodes['E0054'] = 'Unable to fetch IDLE, monitored workers';
$aErrorCodes['E0055'] = 'Failed fetching worker details';
$aErrorCodes['E0056'] = 'Failed to fetch workers for your account';
$aErrorCodes['E0057'] = 'Failed to fetch workers for admin panel';
$aErrorCodes['E0058'] = 'Worker name and/or password must not be empty';
$aErrorCodes['E0059'] = 'Worker already exists';
$aErrorCodes['E0060'] = 'Failed to add new worker';
$aErrorCodes['E0061'] = 'Failed to delete worker';
$aErrorCodes['E0062'] = 'Block has no share_id, not running payouts';
$aErrorCodes['E0063'] = 'Upstream share already assigned to previous block';
$aErrorCodes['E0064'] = 'Failed to create transaction record';
$aErrorCodes['E0065'] = 'Remaining balance is greater than 0';
$aErrorCodes['E0072'] = 'Worker names must be alphanumeric';
$aErrorCodes['E0073'] = 'Worker name is too long; try entering a shorter name';
$aErrorCodes['E0074'] = 'Failed deleting expired tokens';
$aErrorCodes['E0075'] = 'Upgrade required';
$aErrorCodes['E0076'] = 'No coins in wallet available';
$aErrorCodes['E0077'] = 'RPC method or connection failed';
$aErrorCodes['E0078'] = 'RPC method did not return 200 OK';
$aErrorCodes['E0079'] = 'Wallet does not cover payouts total amount';
$aErrorCodes['E0080'] = 'No new unaccounted shares since last run';
$aErrorCodes['E0081'] = 'Failed to insert new block into database';
$aErrorCodes['E0082'] = 'Block does not supply any usable confirmation information';
$aErrorCodes['E0083'] = 'Maintenance mode enabled, skipped';
$aErrorCodes['E0084'] = 'Error updating %s table';
$aErrorCodes['E0085'] = 'Cron disabled due to invalid arguments';
