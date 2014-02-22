<?php


/**
 * Class SmsController
 *
 * Primary Objective of this call is to invoke
 *
 * @author aqureshi
 */

class SmsController extends ApplicationController
{


    private $server_ip;

    private $action;

    private $username;

    private $password;

    private $recipient;

    private $origin;

    private $msgBody;

    private $fengOfficeURL = ROOT_URL;

    /**
     * The constructor initializes the configuration properties
     * of this object
     */
    function __construct()
    {
        parent::__construct();

        $this->server_ip = 'http://110.34.37.51:24555/';

        $this->action = 'api';

        $this->username = 'test';

        $this->password = 'testing321';

        $this->origin = 'test';


    }

    /**
     * This method finally sends the sms to the number
     * Before this call please verify that the message number or message body
     * are valid, otherwise this method will not send the sms
     * @param $p_num
     */
    function sendSms($p_num)
    {

        $this->recipient = $p_num;

        if ($p_num != null && !empty($p_num) && $this->msgBody != null && !empty($this->msgBody))
            file_get_contents($this->_getSmsUrl());
    }

    /**
     * This private method prepares the URL for sms API based upon its specification
     * @return string
     */
    function _getSmsUrl()
    {

        $data = array('action' => 'sendmessage',
            'username' => $this->username,
            'password' => $this->password,
            'originator' => $this->origin,
            'recipient' => $this->recipient,
            'messagedata' => $this->msgBody

        );

        return $this->server_ip . $this->action . "?" . http_build_query($data);
    }


    function prepareTaskSubscriberSms($displayName, $taskTitle)
    {
        $this->msgBody = "Dear, " . $displayName . ', There has been activity on Task "' . $taskTitle . '". To which you are a subscriber, please login to the system ' . $this->fengOfficeURL;
    }

    function prepareTaskAssignSms($displayName, $taskTitle)
    {
        $this->msgBody = "Dear, " . $displayName . ', There has been activity on Task "' . $taskTitle . '". Which has been assigned to you, please login to the system ' . $this->fengOfficeURL;
    }


}