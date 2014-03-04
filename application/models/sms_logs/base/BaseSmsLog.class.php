<?php

  /**
  * BaseAdministrationLog class
  *
  * @author aaqureshi
  */
  abstract class BaseSmsLog extends DataObject {
  
    // -------------------------------------------------------
    //  Access methods
    // -------------------------------------------------------
  
    /**
    * Return value of 'id' field
    *
    * @access public
    * @param void
    * @return integer 
    */
    function getId() {
      return $this->getColumnValue('id');
    } // getId()
    
    /**
    * Set value of 'id' field
    *
    * @access public   
    * @param integer $value
    * @return boolean
    */
    function setId($value) {
      return $this->setColumnValue('id', $value);
    } // setId() 

    /**
    * Return value of 'created_on' field
    *
    * @access public
    * @param void
    * @return DateTimeValue 
    */
    function getCreatedOn() {
      return $this->getColumnValue('created_on');
    } // getCreatedOn()
    
    /**
    * Set value of 'created_on' field
    *
    * @access public   
    * @param DateTimeValue $value
    * @return boolean
    */
    function setCreatedOn($value) {
      return $this->setColumnValue('created_on', $value);
    } // setCreatedOn() 
    
    /**
    * Return value of 'category' field
    *
    * @access public
    * @param void
    * @return string 
    */
    function getCategory() {
      return $this->getColumnValue('category');
    } // getCategory()
    
    /**
    * Set value of 'category' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    function setCategory($value) {
      return $this->setColumnValue('category', $value);
    } // setCategory() 
    
    /**
    * Return value of 'title' field
    *
    * @access public
    * @param void
    * @return string 
    */
    function getNumber() {
      return $this->getColumnValue('number');
    } // getTitle()
    
    /**
    * Set value of 'title' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    function setNumber($value) {
      return $this->setColumnValue('number', $value);
    } // setTitle()
  
    
    /**
    * Return value of 'log_data' field
    *
    * @access public
    * @param void
    * @return string 
    */
    function getLogData() {
      return $this->getColumnValue('log_data');
    } // getLogData()
    
    /**
    * Set value of 'log_data' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    function setLogData($value) {
      return $this->setColumnValue('log_data', $value);
    } // setLogData()
    
    
    /**
    * Return manager instance
    *
    * @access protected
    * @param void
    * @return AdministrationLogs 
    */
    function manager() {
      if(!($this->manager instanceof SmsLogs)) $this->manager = SmsLogs::instance();
      return $this->manager;
    } // manager
  
  } // BaseSmsLog

?>