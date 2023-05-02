<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Microvisor;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Microvisor\V1\AccountConfigList;
use Twilio\Rest\Microvisor\V1\AccountSecretList;
use Twilio\Rest\Microvisor\V1\AppList;
use Twilio\Rest\Microvisor\V1\DeviceList;
use Twilio\Version;

/**
 * @property AccountConfigList $accountConfigs
 * @property AccountSecretList $accountSecrets
 * @property AppList $apps
 * @property DeviceList $devices
 * @method \Twilio\Rest\Microvisor\V1\AccountConfigContext accountConfigs(string $key)
 * @method \Twilio\Rest\Microvisor\V1\AccountSecretContext accountSecrets(string $key)
 * @method \Twilio\Rest\Microvisor\V1\AppContext apps(string $sid)
 * @method \Twilio\Rest\Microvisor\V1\DeviceContext devices(string $sid)
 */
class V1 extends Version {
    protected $_accountConfigs;
    protected $_accountSecrets;
    protected $_apps;
    protected $_devices;

    /**
     * Construct the V1 version of Microvisor
     *
     * @param Domain $domain Domain that contains the version
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    protected function getAccountConfigs(): AccountConfigList {
        if (!$this->_accountConfigs) {
            $this->_accountConfigs = new AccountConfigList($this);
        }
        return $this->_accountConfigs;
    }

    protected function getAccountSecrets(): AccountSecretList {
        if (!$this->_accountSecrets) {
            $this->_accountSecrets = new AccountSecretList($this);
        }
        return $this->_accountSecrets;
    }

    protected function getApps(): AppList {
        if (!$this->_apps) {
            $this->_apps = new AppList($this);
        }
        return $this->_apps;
    }

    protected function getDevices(): DeviceList {
        if (!$this->_devices) {
            $this->_devices = new DeviceList($this);
        }
        return $this->_devices;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Microvisor.V1]';
    }
}