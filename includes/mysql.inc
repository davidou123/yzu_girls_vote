<?php
/*
*	Copyright (c) 2010 Zakura
*
*	Authou: Bency & Davidou
*
*	File name: mysql.inc
*	Description: Provide mysql functions to manage queries
*	
*	Vim configurations:
*	:set tabstop=4;
*	:set ft=php;
*/
class mysql {
        var $conId ;
        var $lastId ;
        var $result ;
        function mysql($host, $user, $password, $database) {
                $this->conId = @mysql_connect($host, $user, $password) or $this->_error(mysql_error()) ;
    mysql_query("SET CHARACTER_SET_CLIENT=utf8");
    mysql_query("SET CHARACTER_SET_CONNECTION=utf8");
    mysql_query("SET CHARACTER_SET_RESULTS=utf8");
    mysql_query("SET NAMES 'utf8'");
                @mysql_select_db($database) or $this->_error(mysql_error()) ;
        }
        function query($query) {
                $this->result = mysql_query($query, $this->conId) ;
                $this->lastId = mysql_insert_id($this->conId) ;
                if ($this->result == false) {
                        $this->_queryError(mysql_error(), $query) ;
                }
                else {
                        return true ;
                }
        }
        function numRows() {
                return mysql_num_rows($this->result) ;
        }
        function fetch($mode = MYSQL_ASSOC ) {
                return mysql_fetch_array($this->result, $mode) ;
        }
        function fetchAll($mode = MYSQL_ASSOC ) {
                $arr = array() ;
                while ($row = $this->fetch($mode)) {
                        $arr[] = $row ;
                }
                return $arr ;
        }
        function getLastId() {
                return $this->lastId ;
        }
        function freeResult() {
                return mysql_free_result($this->result) ;
        }
        function disconnect() {
                $ret = mysql_close($this->conId) ;
                $this->conId = NULL ;
                return $ret ;
        }
        function _error($error) {
                die($error) ;
        }
        function _queryError($error, $query) {
                die('<p><pre>Query error:<br/>'.htmlspecialchars($query).'</pre></p><p>'.$error.'</p>') ;
        }
}

?>
