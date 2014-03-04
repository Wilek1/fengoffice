<?php

/**
 * Sms logs manager class
 *
 * @author aaqureshi
 */
class SmsLogs extends BaseSmsLogs
{

    const SMS_LOG_CATEGORY_SUCCESS = 'success';
    const SMS_LOG_CATEGORY_FAILURE = 'failure';


    static function createLog($num, $log_data, $category = null)
    {
        if (is_null($category)) {
            $category = self::SMS_LOG_CATEGORY_FAILURE;
        } // if
        if (!self::isValidCategory($category)) {
            throw new Error("'$category' is not valid sms log category");
        } // if

        $log = new SmsLog();
        try {
            DB::beginWork();

            $log->setNumber($num);
            $log->setLogData($log_data);
            $log->setCategory($category);
            $log->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        return $log;
    } // createLog

    static function getLastLogs($category = '', $number = '', $log_data = '', $limit = 10, $additional_conds = '')
    {
        $cat_cond = $category == '' ? "" : " AND `category` = '" . mysql_real_escape_string($category) . "'";
        $number_cond = $number == '' ? "" : " AND `number` = '" . mysql_real_escape_string($number) . "'";
        $data_cond = $log_data == '' ? "" : " AND `log_data` = '" . mysql_real_escape_string($log_data) . "'";
        $conditions = "1=1 $cat_cond $number_cond $data_cond";
        if ($additional_conds != '') $conditions .= " AND $additional_conds";

        return self::findAll(array('conditions' => $conditions, 'limit' => $limit, 'order' => '`created_on` DESC'));
    }

    /**
     * Check if specific category is valid
     *
     * @param string $action
     * @return boolean
     */
    static function isValidCategory($action)
    {
        static $valid_actions = null;

        if (!is_array($valid_actions)) {
            $valid_actions = array(
                self::SMS_LOG_CATEGORY_SUCCESS,
                self::SMS_LOG_CATEGORY_FAILURE
            ); // array
        } // if

        return in_array($action, $valid_actions);
    } // isValidAction

} // AdministrationLogs

?>