<?php

/**
 * @see       https://github.com/codenomdev/codeigniter4-midtrans for the canonical source repository
 *
 * @copyright 2020 - Codenom Dev (https://codenom.com).
 * @license   https://github.com/codenomdev/codeigniter4-midtrans/blob/main/LICENSE MIT License
 */

namespace Codenom\Midtrans\Config;

use CodeIgniter\Config\BaseConfig;

class Midtrans extends BaseConfig
{
    public $urlMidtrans = 'https://app.midtrans.com/snap/snap.js';
    /**
     * Your merchant's server key.
     */
    public $serverKey = 'Mid-server-EsM_7sEY4r-OPRtMEbM42IHs';
    /**
     * Your merchant's client key.
     */
    public $clientKey = 'Mid-client-8pWnnhSQTztNutQP';
    /**
     * Your ID merchant's key.
     */
    public $idMerchant = 'G204760773';
    /**
     * True for production
     * false for sandbox mode.
     */
    public $isProduction = true;
    /**
     * Set it true to enable 3D Secure by default.
     */
    public $is3ds = true;
    /**
     *  Set Append URL notification.
     */
    public $appendNotifUrl = '';
    /**
     *  Set Override URL notification.
     */
    public $overrideNotifUrl = '';
    /**
     * Enable request params sanitizer (validate and modify charge request params).
     * See Midtrans_Sanitizer for more details.
     */
    public $isSanitized = true;
    /**
     * Default options for every request.
     */
    public $curlOptions = [];
}
