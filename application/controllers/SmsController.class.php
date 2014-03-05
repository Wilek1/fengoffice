<?php


/**
 * Class SmsController
 *
 * Primary Objective of this call is to invoke
 *
 * @author aaqureshi
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

        if ($p_num != null && !empty($p_num) && $this->msgBody != null && !empty($this->msgBody)) {


            $res = file_get_contents($this->_getSmsUrl());


            if (!empty($res))
                SmsLogs::createLog($p_num, $res, $this->_parseXML($res) ? SmsLogs::SMS_LOG_CATEGORY_SUCCESS : SmsLogs::SMS_LOG_CATEGORY_FAILURE);
            else {
                SmsLogs::createLog($p_num, $res, SmsLogs::SMS_LOG_CATEGORY_FAILURE);
            }
        }
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

    /**
     *
     * Prepare message body for subscriber. (This is a generic message which will be sent on every operation which involves adding
     * subscribers to the system)
     *
     * @param $displayName
     * @param $taskTitle
     * @param $objName
     */
    function prepareSubscriberSms($displayName, $taskTitle, $objName)
    {
        $this->msgBody = "Dear, " . $displayName . ', There has been activity on ' . $objName . ' "' . $taskTitle . '". To which you are a subscriber, please login to the system ' . $this->fengOfficeURL;
    }

    /**
     * Prepare message body for event invitee
     *
     * @param $displayName
     * @param $taskTitle
     * @param $objName
     */
    function prepareEventInvitee($displayName, $taskTitle, $objName)
    {
        $this->msgBody = "Dear, " . $displayName . ', There has been activity on ' . $objName . ' "' . $taskTitle . '". To which you are invited, please login to the system ' . $this->fengOfficeURL;
    }

    /**
     * Prepare message body for Assignee
     *
     * @param $displayName
     * @param $taskTitle
     * @param $objName
     */
    function prepareAssignSms($displayName, $taskTitle, $objName)
    {
        $this->msgBody = "Dear, " . $displayName . ', There has been activity on ' . $objName . ' "' . $taskTitle . '". Which has been assigned to you, please login to the system ' . $this->fengOfficeURL;
    }

    /**
     * Parse XML from SMS server response and figure out the response code
     * @param $xmlstr
     * @return bool
     */

    function _parseXML($xmlstr)
    {


        /**
         *
         * Sample XML Response from API Call
         * Any statuscode greater than 0 is considered an error
         * <response>
         * <action>sendmessage</action>
         *  <data>
         *        <acceptreport>
         *        <statuscode>1547</statuscode>
         *        <statusmessage>Message not accepted for delivery. ERROR 1547: Insufficient credits.</statusmessage>
         *        <messageid>4fd5a129-03a5-4e82-8c60-1c227133745b</messageid>
         *        <originator>test</originator>
         *        <recipient>92334XXXXXXX</recipient>
         *        <messagetype>SMS:TEXT</messagetype>
         *        <messagedata>Sms from Feng Office</messagedata>
         *        </acceptreport>
         *   </data>
         *        </response>
         *
         **/


        $xmlObj = new SimpleXMLElement($xmlstr); //Parsing XML to make a simple xml element object

        if ($xmlObj) {

            if ($xmlObj->data[0]->acceptreport[0]->statuscode > 0)
                return FALSE; // Return False if statuscode is greater than zero.
            else
                return TRUE; // Return True if statuscode is zero
        } else
            return FALSE; // Return False if XML couldnt prepare a valid SimpleXMLElement Object

    }

}