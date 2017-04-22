<?php  
class Database{   
    protected $_conn = "";
    protected $_result = "";  

    public function __construct() {
        $this->_conn = mysql_connect(config::HOST,config::USER,config::PASS) 
        or die ("Can't connect database");
        mysql_select_db(config::DATA,$this->_conn);
        mysql_query("SET NAMES utf8"); 
    }

    public function query($sql) {
        if ($this->_conn) { 
            $this->_result = mysql_query($sql);                                       
        }                                
    }

    public function num_rows() {
        if ($this->_result) { 
            $rows = mysql_num_rows($this->_result);
        } else {
            $rows = 0;
        }
        return $rows; 
    }

    public function fetch() {
        if ($this->_result) {
            $data = mysql_fetch_assoc($this->_result);
        } else {
            var_dump(mysql_error());
            $data = array();
        }
        return $data;
    }

    public function fetchAll() {
		$data = array();
        if ($this->_result) { 
            while ($db = mysql_fetch_assoc($this->_result)) {
                $data[] = $db; 
            }
        } else var_dump(mysql_error());
        return $data;
    }

    public function varDump() {
        if (mysql_fetch_assoc($this->_result) == false) {
            var_dump(mysql_error());
        }
    }
}
?>
