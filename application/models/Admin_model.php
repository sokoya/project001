<?php
// Admin functionality model

Class Admin_model extends CI_Model{


    /**
     * @param $table
     * @param array $data
     * @return string
     */
    function insert_data($table, $data = array()){
        $result = '';
        if(!empty($data)){
            try {
                $this->db->insert($table, $data);
                $result = $this->db->insert_id();
            } catch (Exception $e) {
                $result = $e->getMessage();
            }
            return $result;
        }
    }


    /**
     * @param $table_name
     * @param array $where
     * @return mixed
     */
    function read_all_data($table_name, $where = array()){
        if( !empty($where) ){
            // perform where actions
        }
        return $this->db->get($table_name)->result();
    }

    /**
     * @param $table
     * @param array $fields
     * @return bool
     */
    function create_specification($table, $fields = array()){
        // does table exists
        if( $this->db->table_exists(TABLE_PREFIX.$table) || empty($fields) || count($fields) < 1 ){
            return false;
            exit;
        }
        $table = strtolower($table);
        $table_id = $table . '_id';
        $query = "CREATE TABLE " . TABLE_PREFIX.$table ." ( 
            `$table_id` int(6) AUTO_INCREMENT PRIMARY KEY, 
            `" .$table. "_name` varchar(255),
            UNIQUE( " .$table . "_name)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

        if( $this->db->query( $query )){
            foreach ($fields as $key => $value) {
                $this->insert_data(TABLE_PREFIX.$table, array( $table .'_name' => $value));
                unset($fields[$key]);
            }
            return true;

        }
        return false;
    }

}

?>