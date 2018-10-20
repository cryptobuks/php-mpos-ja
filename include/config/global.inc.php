<?php
$defflip = (!cfip()) ? exit(header('HTTP/1.1 401 Unauthorized')) : 1;

/**
 * Do not edit this unless you have confirmed that your config has been updated!
 * Also the URL to check for the most recent upstream versions available
 *  https://github.com/MPOS/php-mpos/wiki/Config-Setup#config-version
 **/
$config['version'] = '1.0.1';
$config['version_url'] = 'https://raw.githubusercontent.com/MPOS/php-mpos/master/include/version.inc.php';

/**
 * Unless you disable this, we'll do a quick check on your config first.
 *  https://github.com/MPOS/php-mpos/wiki/Config-Setup#config-check
 */
$config['skip_config_tests'] = true;

/**
 * Unless you disable this, we'll do a check for a valid coin address on registration.
 *  https://github.com/MPOS/php-mpos/wiki/Config-Setup#check-for-valid-wallet-address
 */
$config['check_valid_coinaddress'] = true;

/**
 * Defines
 *  Debug setting and salts for hashing passwords
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#defines--salts
 */
$config['DEBUG'] = 0;
$config['SALT'] = 'japanesecoinpool_idolcoinpool_mpos'; 
$config['SALTY'] = 'japanesecoinpool_idolcoinpool_mpos';

/**
  * Coin Algorithm
  *  Algorithm used by this coin, sha256d or scrypt
  *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#algorithm
  **/
$config['algorithm'] = 'tribus';

/**
  * Getbalance API Calls
  *  System used for getting actual Balance from Wallet
  *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#getbalance-api-calls
  **/
$config['getbalancewithunconfirmed'] = true;

/**
 * Database configuration
 *  MySQL database configuration
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#database-configuration
 **/
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'mpos_user';
$config['db']['pass'] = 'idolpool';
$config['db']['port'] = 3306;
$config['db']['name'] = 'mpos';
// Disabled by default and set in bootstrap if unset, but left in here so
// people know it exists
// $config['db']['shared']['accounts'] = $config['db']['name'];
// $config['db']['shared']['workers'] = $config['db']['name'];
// $config['db']['shared']['news'] = $config['db']['name'];


/**
 * Setup read-only/slave database server for selects (read queries)
**/
$config['db-ro']['enabled'] = false;
$config['db-ro']['host'] = 'localhost';
$config['db-ro']['user'] = 'someuser';
$config['db-ro']['pass'] = 'somepass';
$config['db-ro']['port'] = 3306;
$config['db-ro']['name'] = 'mpos';

 
/**
 * Local wallet RPC
 *  RPC configuration for your daemon/wallet
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#local-wallet-rpc
 **/
$config['wallet']['type'] = 'http';
$config['wallet']['host'] = 'localhost:32339';
$config['wallet']['username'] = 'IDOLrpc';
$config['wallet']['password'] = 'jpw';

/**
 * Swiftmailer configuration
 *  Configure your way to send mails
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#swiftmailer
 **/
$config['swiftmailer']['type'] = 'sendmail';
$config['swiftmailer']['sendmail']['path'] = '/usr/sbin/sendmail';
$config['swiftmailer']['sendmail']['options'] = '-bs';
$config['swiftmailer']['smtp']['host'] = 'your.mail-relay.com';
$config['swiftmailer']['smtp']['port'] = '587';
$config['swiftmailer']['smtp']['encryption'] = 'tls';
$config['swiftmailer']['smtp']['username'] = '';
$config['swiftmailer']['smtp']['password'] = '';
$config['swiftmailer']['smtp']['throttle'] = 100;

/**
 * Getting Started Config
 *  Shown to users in the 'Getting Started' section
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#getting-started
 **/
$config['gettingstarted']['coinname'] = 'IDOLCOIN';
$config['gettingstarted']['coinurl'] = 'https://idol-coin.io';
$config['gettingstarted']['stratumurl'] = 'idol.japanesecoin-pool.work';
$config['gettingstarted']['stratumport'] = '6603';

/**
 * Ticker API
 *  Fetch exchange rates via an API
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#ticker-api
 **/
$config['price']['enabled'] = false;
$config['price']['url'] = 'https://btc-e.nz';
$config['price']['target'] = '/api/2/ltc_usd/ticker';
$config['price']['currency'] = 'USD';

/**
 * Automatic Payout Thresholds
 *  Minimum and Maximum auto payout amount
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#automatic-payout-thresholds
 **/
$config['ap_threshold']['min'] = 1;
$config['ap_threshold']['max'] = 10000;

/**
 * Minimum manual Payout Threshold
 *  Minimum manual payout amount
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#manual-payout-threshold
 **/
$config['mp_threshold'] = 1;

/**
 * Donation thresholds
 *  Minimum donation amount in percent
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#donation-thresholds
 **/
$config['donate_threshold']['min'] = 1;

/**
 * Account Specific Settings
 *  Settings for each user account
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#account-specific-settings
 **/
$config['accounts']['invitations']['count'] = 5;

/**
 * Currency
 *  Shorthand name for the currency
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#currency
 */
$config['currency'] = 'IDOL';

/**
 * Coin Target
 *  Target time for coins to be generated
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#coin-target
 **/
$config['cointarget'] = '60';

/**
 * Coin Diff Change
 *  Amount of blocks between difficulty changes
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#coin-diff-change
 **/
$config['coindiffchangetarget'] = 2016;

/**
 * TX Fees
 *  Fees applied to transactions
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#tx-fees
 **/
$config['txfee_auto'] = 0.;
$config['txfee_manual'] = 0.;

/**
 * Block & Pool Bonus
 *  Bonus coins for blockfinder or a pool bonus for everyone
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#block-bonus
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#pool-bonus
 */
$config['block_bonus'] = 0;
$config['pool_bonus'] = 0;
$config['pool_bonus_type'] = 'payout';

/**
 * Payout System
 *  Payout system chosen
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#payout-system
 **/
$config['payout_system'] = 'prop';

/**
 * Sendmany Support
 *  Enable/Disable Sendmany RPC method
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#sendmany-support
 **/
$config['sendmany']['enabled'] = true;

/**
 * Transaction Limits
 *  Number of transactions per payout run
 **/
$config['payout']['txlimit_manual'] = 100;
$config['payout']['txlimit_auto'] = 100;

/**
 * Round Purging
 *  Round share purging configuration
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#round-purging
 **/
$config['purge']['sleep'] = 1;
$config['purge']['shares'] = 25000;

/**
 * Share Archiving
 *  Share archiving configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#archiving
 **/
$config['archive']['maxrounds'] = 10; 
$config['archive']['maxage'] = 60 * 24; 


/**
 * Pool Fees
 *  Fees applied to users
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#pool-fees
 */
$config['fees'] = 0;

/**
 * PPLNS
 *  Pay Per Last N Shares
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#pplns-settings
 */
$config['pplns']['shares']['default'] = 10000;
$config['pplns']['shares']['type'] = 'fixed';
$config['pplns']['blockavg']['blockcount'] = 5;
$config['pplns']['reverse_payout'] = true;
$config['pplns']['dynamic']['percent'] = 30;

/**
 * Difficulty
 *  Difficulty setting for stratum/pushpool
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#pool-target-difficulty
 */
$config['difficulty'] = 20;

/**
 * Block Reward
 *  Block reward configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#reward-settings
 **/
$config['reward_type'] = 'block';
$config['reward'] = 1980;

/**
 * Confirmations
 *  Credit and Network confirmation settings
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#confirmations
 */
$config['confirmations'] = 30;
$config['network_confirmations'] = 30;

/**
 * PPS
 *  Pay Per Share configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#pps-settings
 **/
$config['pps']['reward']['default'] = 50;
$config['pps']['reward']['type'] = 'blockavg';
$config['pps']['blockavg']['blockcount'] = 10;

/**
 * Memcache
 *  Memcache configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#memcache
 **/
$config['memcache']['enabled'] = true;
$config['memcache']['host'] = 'localhost';
$config['memcache']['port'] = 11211;
$config['memcache']['keyprefix'] = 'mpos_';
$config['memcache']['expiration'] = 90;
$config['memcache']['splay'] = 15;
$config['memcache']['force']['contrib_shares'] = false;
$config['memcache']['sasl'] = false;
$config['memcache']['sasl']['username'] = '';
$config['memcache']['sasl']['password'] = '';

/**
 * Cookies
 *  Cookie configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#cookies
 **/
$config['cookie']['duration'] = '1440';
$config['cookie']['domain'] = '';
$config['cookie']['path'] = '/';
$config['cookie']['httponly'] = true;
$config['cookie']['secure'] = false;

/**
 * Smarty Cache
 *  Enable smarty cache and cache length
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#smarty-cache
 **/
$config['smarty']['cache'] = 0;
$config['smarty']['cache_lifetime'] = 30;

/**
 * System load
 *  Disable some calls when high system load
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#system-load
 **/
$config['system']['load']['max'] = 10.0;
