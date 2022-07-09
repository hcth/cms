<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Model extends CI_Model {


    public function __construct() {
        parent::__construct();
    }

    private function makeConnection($params){
        // echo "<pre>";var_dump($params);die;
        
        $env = 'db';
        if (!empty($params['env']))
                $env = $params['env'];
    
        if($env != 'db'){
            $this->$env    = $this->load->database($env, TRUE);
        }else{
            $this->load->database();
        }
        
    }


    private function closeConnection($env){
        if($env != 'db')
        $this->$env->close();
    }

   
    
    public function get_table_data_with_type($params) {
        $env = 'db';
        $this->makeConnection($params);

        if (!empty($params['env']))
            $env = $params['env'];

        if (!empty($params['distinct']))
            $this->$env->distinct();
        if(isset($params['escape_fields']))
            $this->$env->select($params['select_data'], $params['escape_fields']);
        else
        $this->$env->select($params['select_data']);
        $this->$env->from($params['table_name']);

        $add_condition = 0;
        if(isset($params['join_table']) && is_array($params['join_table'])){
            if(in_array('aggregated_search_data', $params['join_table']) || in_array('mf_aggregated_search_data', $params['join_table'])){
                $add_condition = 1;
            }
        }else if(isset($params['join_table']) && stripos($params['join_table'], 'aggregated_search_data') !== FALSE){
            $add_condition = 1;
        }

        if (!empty($params['where']) && !empty($params['where_data'])) {
            if(stripos($params['table_name'], 'aggregated_search_data') !== FALSE ||  $add_condition == 1 ){
                if(is_array($params['where_data'])){
                    // $params['where_data']['amc_status']     = 1;// ONLY allowed amcs defined in mycontroller
                    // $params['where_data']['scheme_found']   = 1;// ONLY schemes found in scheme details accord table
                    if(empty($params['exclude_default']))
                        $params['where_data']['soft_delete_status'] = 1;
                }
                else{
                    // if(empty($params['exclude_default']))
                    //     $params['where_data'].= " AND amc_status = 1 AND scheme_found = 1 AND soft_delete_status = 1";
                    // else
                    //     $params['where_data'].= " AND amc_status = 1 AND scheme_found = 1";

                     $params['where_data'].= " AND soft_delete_status = 1";
                }
                /*** added for transaction mode filter every time when getting data from aggregate search data */
                $transaction_mode = $this->session->userdata('transaction_mode'); //added for transaction mode filter
                $client_id = $this->session->userdata('client_id');//added for transaction mode filter
                if(empty($params['exclude_default']) && !empty($client_id) && !empty($transaction_mode)){
                    $trans_mode = array('DP',$transaction_mode);
                    $this->$env->where_in('Purchase_Transaction_mode_ag',$trans_mode);
                }
                /**** End changes for transaction mode */
                
            }

            if (isset($params['where_escape']) &&   $params['where_escape'])
                $this->$env->where($params['where_data'], NULL, FALSE);
            else
                $this->$env->where($params['where_data']);
        }else if(stripos($params['table_name'], 'aggregated_search_data') !== FALSE ||  $add_condition == 1){
            
            // $params['where_data']['amc_status'] = 1;
            // $params['where_data']['scheme_found'] = 1;           
            if(empty($params['exclude_default'])){
                $params['where'] = TRUE;
                $params['where_data']['soft_delete_status'] = 1;
                $this->$env->where($params['where_data']);
                /*** added for transaction mode filter every time when getting data from aggregate search data */
                $transaction_mode = $this->session->userdata('transaction_mode'); //added for transaction mode filter
                $client_id = $this->session->userdata('client_id');//added for transaction mode filter
                if(!empty($client_id) && !empty($transaction_mode)){
                    $trans_mode = array('DP',$transaction_mode);
                    $this->$env->where_in('Purchase_Transaction_mode_ag',$trans_mode);
                }
                /**** End changes for transaction mode */
            }
        }

        if (!empty($params['where_in']))
            $this->$env->where_in($params['where_in_field'], $params['where_in_data']);

        if (!empty($params['where_or']))
            $this->$env->or_where($params['where_or_data']);

        if (!empty($params['where_in_multi'])) {
            foreach ($params['where_in_multi_data'] as $field => $field_value)
                $this->$env->where_in($field, $field_value);
        }

        if (!empty($params['or_where_in_multi'])) {
            foreach ($params['or_where_in_multi_data'] as $field => $field_value)
                $this->$env->or_where_in($field, $field_value);
        }

        if (!empty($params['where_like']))
            $this->$env->like($params['where_like_data']);

        if (!empty($params['where_like_or'])) {
            $where_like_or_str = "(";
            foreach ($params['where_like_or_data'] as $like_field => $like_array)
                foreach ($like_array as $key => $like_value)
                    $where_like_or_str .= " " . $like_field . " like '%" . $like_value . "%' OR";

            $where_like_or_str = substr($where_like_or_str, 0, -3);
            $where_like_or_str .= ")";
            $this->$env->where($where_like_or_str);
        }

        if (!empty($params['limit_data']))
            $this->$env->limit($params['limit_data'], $params['limit_start']);

        if (!empty($params['order_by']))
            $this->$env->order_by($params['order_by']);

        if (!empty($params['group_by']))
            $this->$env->group_by($params['group_by']);

        if (!empty($params['having']))
            $this->$env->having($params['having']);

        if (!empty($params['where_not_in']))
            $this->$env->where_not_in($params['where_not_in_field'], $params['where_not_in_array']);
// x($params);

        if (!empty($params['db_prefix']))
            $this->$env->set_dbprefix($params['db_prefix_value']);

        if (!empty($params['join'])) {
            if (!empty($params['multiple_joins'])) {
                foreach ($params['join_table'] as $k => $v) {
                    $this->$env->join($v, $params['join_on'][$k], $params['join_type'][$k]);
                }
            } else
                $this->$env->join($params['join_table'], $params['join_on'], $params['join_type']);
        }

        $result = $this->$env->get();

        if (!empty($params['print_query']))
            echo '<BR>' . $this->$env->last_query();

        if (!empty($params['print_query_exit'])) {
// x($result,'asdasd');
            echo '<BR>' . $this->$env->last_query();
            exit;
        }

        $this->closeConnection($params['env']);

        if (!empty($result)) {
//echo '<BR>'.$this->$env->last_query();//exit();
            if ($result->num_rows() > 0) {
                if (empty($params['count'])) {
                    if (!empty($params['return_array']))
                        return $result->result_array();
                    else
                        return $result->result();
                } else
                    return $result->num_rows();
            } else
                return false;
        } else
            return false;
    }

    public function update_table_data_with_type($params) {
// echo "<pre>";print_r($params);exit;
        $this->makeConnection($params);
        $env = 'db';
        if (!empty($params['env']))
            $env = $params['env'];

        if (!empty($params['batch'])) {
            $this->$env->update_batch($params['table_name'], $params['update_data'], $params['where_key']);
        } else {
            if (!empty($params['where_in']))
                $this->$env->where_in($params['where_in_field'], $params['where_in_data']);
            if (!empty($params['where_data']))
                $this->$env->where($params['where_data']);

            $this->$env->update($params['table_name'], $params['update_data']);
        }

        if (!empty($params['print_query']))
            echo '<BR>' . $this->$env->last_query();

        if (!empty($params['print_query_exit'])) {
            echo '<BR>' . $this->$env->last_query();
            exit;
        }

        $affected_rows = $this->$env->affected_rows();
        $this->closeConnection($params['env']);

        return $affected_rows;
    }

    public function insert_table_data($params) {
        $this->makeConnection($params);
        $env = 'db';
        if (!empty($params['env']))
            $env = $params['env'];

        if (!empty($params['batch']))
            $this->$env->insert_batch($params['table_name'], $params['data']);
        else
            $this->$env->insert($params['table_name'], $params['data']);

        if (!empty($params['print_query']))
            echo '<BR>' . $this->$env->last_query();

        if (!empty($params['print_query_exit'])) {
            echo '<BR>' . $this->$env->last_query();
            exit;
        }

        $affected_rows = $this->$env->insert_id();
        $this->closeConnection($params['env']);

        return $affected_rows;
    }

    public function delete_table_data($params) {
        $this->makeConnection($params);
        $env = 'db';
        if (!empty($params['env']))
            $env = $params['env'];

        if (empty($params['batch_key'])){
            // $this->$env->where($params['where_data']);
            if (!empty($params['where_in']))
                $this->$env->where_in($params['where_in_field'], $params['where_in_data']);
            if (!empty($params['where_data']))
                $this->$env->where($params['where_data']);
        }
        else
            $this->$env->where_in($params['batch_key'], $params['where_data']);

        if (!empty($params['limit_data']))
            $this->$env->limit($params['limit_data']);

        $this->$env->delete($params['table_name']);

        if (!empty($params['print_query']))
            echo '<BR>' . $this->$env->last_query();

        if (!empty($params['print_query_exit'])) {
            echo '<BR>' . $this->$env->last_query();
            exit;
        }
        // return $this->$env->affected_rows();
        $affected_rows = $this->$env->affected_rows();
        $this->closeConnection($params['env']);

        return $affected_rows;
    }

    function truncate_table($params) {
        if (!empty($params['env'])) {
            $this->makeConnection($params);
            $env = $params['env'];
            $this->$env->truncate($params['table_name']);
            $this->closeConnection($params['env']);
        }
    }

    function execute_query($params) {
        $this->makeConnection($params);
        $env = 'db';
        if (!empty($params['env']))
            $env = $params['env'];

        $query = $this->$env->query($params['query']);

        if (!empty($params['print_query']))
            echo '<BR>' . $this->$env->last_query();

        if (!empty($params['print_query_exit'])) {
            echo '<BR>' . $this->$env->last_query();
            exit;
        }

        // $affected_rows = $this->$env->affected_rows();
        $this->closeConnection($params['env']);

        // return $affected_rows;
        return $query;
//     if($query->num_rows() > 0)
//             return $query->result();
//         else
//             return false;
    }

    function get_result_execute_query($params) {
        $this->makeConnection($params);
        $env = 'db';
        if (!empty($params['env']))
            $env = $params['env'];
        $query = $this->$env->query($params['query']);

        if (!empty($params['print_query']))
            echo '<BR>' . $this->$env->last_query();

        if (!empty($params['print_query_exit'])) {
            echo '<BR>' . $this->$env->last_query();
            exit;
        }
// return $query;

        if (!empty($query)) {
//echo '<BR>'.$this->$env->last_query();//exit();
            if ($query->num_rows() > 0) {
                if (empty($params['count'])) {
                    if (!empty($params['return_array'])) {
                        $result = $query->result_array();
                        $query->free_result(); // The $query result object will no longer be available
                        $this->closeConnection($params['env']);
                        return $result;
                    } else {

                        $result = $query->result();
                        $query->free_result(); // The $query result object will no longer be available
                        $this->closeConnection($params['env']);
                        return $result;
                    }
                } else{
                    $this->closeConnection($params['env']);
                    return $query->num_rows();
                }
            } else{
                $this->closeConnection($params['env']);
                return false;
            }
        } else{
            $this->closeConnection($params['env']);
            return false;
        }
    }

    function encrypt_decrypt($action, $string) {
        $output = false;

// hash
        $key = hash('sha256', ENCRYPT_SECRET_KEY);

// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', ENCRYPT_SECRET_IV), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, ENCRYPT_METHOD, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), ENCRYPT_METHOD, $key, 0, $iv);
        }

        return $output;
    }

    function listTableFields($params){
        $this->makeConnection($params);
        $env = $params['env'];
        $result = $this->$env->list_fields($params['table_name']);

        if(!empty($params['print_query']))
            echo '<BR>'.$this->$env->last_query();
        
        if(!empty($params['print_query_exit']))
        {
            echo '<BR>'.$this->$env->last_query();
            exit;
        }
        $this->closeConnection($env);
        return $result;
        
    }


    function getFieldData($params){
        $this->makeConnection($params);
        $env = $params['env'];
        $result = $this->$env->field_data($params['table_name']);

        if(!empty($params['print_query']))
            echo '<BR>'.$this->$env->last_query();
        
        if(!empty($params['print_query_exit']))
        {
            echo '<BR>'.$this->$env->last_query();
            exit;
        }
        $this->closeConnection($env);
        return $result;
        
    }


    function insert_on_duplicate_update_batch($params){
        foreach($params['keys'] as $key)
            $update_fields[] = $key.'=VALUES('.$key.')';
       
        $sql = "INSERT INTO ".$params['table_name']." (".implode(', ', $params['keys']).") VALUES ".implode(', ', $params['values'])." ON DUPLICATE KEY UPDATE ".implode(', ', $update_fields);

        $result = $this->$params['env']->query($sql);

        if(!empty($params['print_query']))
            echo '<BR>'.$this->$params['env']->last_query();
        
        if(!empty($params['print_query_exit']))
        {
            echo '<BR>'.$this->$params['env']->last_query();
            exit;
        }

        return $result;
    }


    //mongo functions start
    public function where_for_mongo($where_arr) {
        if (!empty($where_arr['equal']))
            $this->mongo_db->where($where_arr['equal']);

        if (!empty($where_arr['not_equal'])) {
            foreach ($where_arr['not_equal'] as $nek => $nev)
                $this->mongo_db->where_ne($nek, $nev);
        }

        if (!empty($where_arr['greater_than'])) {
            foreach ($where_arr['greater_than'] as $gtk => $gtv)
                $this->mongo_db->where_gt($gtk, $gtv);
        }

        if (!empty($where_arr['greater_than_equal'])) {
            foreach ($where_arr['greater_than_equal'] as $gtek => $gtev)
                $this->mongo_db->where_gte($gtek, $gtev);
        }

        if (!empty($where_arr['less_than'])) {
            foreach ($where['less_than'] as $ltk => $ltv)
                $this->mongo_db->where_lt($ltk, $ltv);
        }

        if (!empty($where_arr['less_than_equal'])) {
            foreach ($where_arr['less_than_equal'] as $ltek => $ltev)
                $this->mongo_db->where_lte($ltek, $ltev);
        }

        if (!empty($where_arr['between'])) {
            foreach ($where_arr['between'] as $btwk => $btv)
                $this->mongo_db->where_between($btwk, $btv['0']/* greater than */, $btv['1']/* less than */);
        }

        if (!empty($where_arr['not_between'])) {
            foreach ($where_arr['not_between'] as $ntbtwk => $ntbwv)
                $this->mongo_db->where_between_ne($ntbtwk, $ntbwv['0']/* greater than */, $ntbwv['1']/* less than */);
        }

        if (!empty($where_arr['or']))
            $this->mongo_db->where_or($where_arr['or']);

        if (!empty($where_arr['in'])) {
            foreach ($where_arr['in'] as $ink => $inv)
                $this->mongo_db->where_in($ink, $inv);
        }

        if (!empty($where_arr['not_in'])) {
            foreach ($where_arr['not_in'] as $nink => $ninv)
                $this->mongo_db->where_not_in($nink, $ninv);
        }

        if (!empty($where_arr['like'])) {
            foreach ($where_arr['like'] as $likek => $likev)
                $this->mongo_db->like($likek, $likev);
        }
    }

    public function get_table_data_with_type_mongo($params) {

        if (!empty($params['env']))
            $this->mongo_db->switch_db($params['env']); //pass full databsae name 

        if (!empty($params['select_data']) && !empty($params['deselect_data'])) {
            $params['select_data'] = explode(',', $params['select_data']);
            $params['deselect_data'] = explode(',', $params['deselect_data']);
            $this->mongo_db->select($params['select_data'], $params['deselect_data']);
        }

        if (!empty($params['select_data'])) {
            $params['select_data'] = explode(',', $params['select_data']);
            $this->mongo_db->select($params['select_data']);
        }

        if (!empty($params['deselect_data'])) {
            $params['deselect_data'] = explode(',', $params['deselect_data']);
            $this->mongo_db->select([], $params['deselect_data']);
        }

        if (!empty($params['where']) && $params['where'])
            $this->where_for_mongo($params['where_data']);

        if (!empty($params['limit_data']))
            $this->mongo_db->limit($params['limit_data']);

        if (!empty($params['limit_start']))
            $this->mongo_db->offset($params['limit_start']);

        if (!empty($params['order_by']))
            $this->mongo_db->order_by($params['order_by']);

        if (!empty($params['table_name'])) {
            if (!empty($params['get_one']))
                $result = $this->mongo_db->find_one($params['table_name']);
            else if (!empty($params['get_count']))
                $result = $this->mongo_db->count($params['table_name']);
            else if (!empty($params['distinct']))
                $result = $this->mongo_db->distinct($params['table_name'], $params['distinct']);
            else if (!empty($params['aggregate']))
                $result = $this->mongo_db->aggregate($params['table_name'],$params['aggregate']);
            else if (!empty($params['count']))
                $result = $this->mongo_db->count($params['count']);
            else
                $result = $this->mongo_db->get($params['table_name']);
        }else {
            $result = false;
        }

        return $result;
    }

    public function insert_table_data_mongo($params) {

        if (!empty($params['env']))
            $this->mongo_db->switch_db($params['env']);//pass full databsae name 

        if (!empty($params['batch']))
            $result = $this->mongo_db->batch_insert($params['table_name'], $params['data']);
        else
            $result = $this->mongo_db->insert($params['table_name'], $params['data']);

        return $result;
    }

    public function update_table_data_with_type_mongo($params) {
// echo "<pre>";print_r($params);exit;

        if (!empty($params['env']))
            $this->mongo_db->switch_db($params['env']);//pass full databsae name 

        if (!empty($params['update_data']))
            $this->mongo_db->set($params['update_data']);

        if (!empty($params['increment']))//Increments the value of a field
            $this->mongo_db->inc($params['increment_field'], $params['increment_value']);

        if (!empty($params['multiple']))//Multiple the value of a field
            $this->mongo_db->mul($params['multiple_field'], $params['multiple_value']);

        if ($params['where'])
            $this->where_for_mongo($params['where_data']);

        if (!empty($params['table_name'])) {
            if (!empty($params['update_one']))
                $result = $this->mongo_db->update($params['table_name']);
            else
                $result = $this->mongo_db->update_all($params['table_name']);
        }else {
            $result = false;
        }
//        /}

        return $result;
    }

    public function delete_table_data_mongo($params) {

        if (!empty($params['env']))
            $this->mongo_db->switch_db($params['env']);//pass full databsae name 

        if ($params['where'])
            $this->where_for_mongo($params['where_data']);

        if (!empty($params['table_name'])) {
            if (!empty($params['delete_one']))
                $result = $this->mongo_db->delete($params['table_name']);
            else
                $result = $this->mongo_db->delete_all($params['table_name']);
        }else {
            $result = false;
        }

        return $result;
    }

    public function truncate_table_mongo($params) {
        if (!empty($params['env']))
            $this->mongo_db->switch_db($params['env']);//pass full databsae name 

        $this->mongo_db->drop_collection($params['table_name']);
    }

    function aggregate_query_mongo($params) { // for group by, etc.
        /*eg. $group_pipeline = [
                '$group' => [
                    '_id' => [ 'event_type' => '$_id.eT' ],
                    'total' => ['$sum' => 1 ],
                ],
            ];
            $aggregation = $collection->aggregate([
                $match_pipeline,
                $group_pipeline,
                $sort_pipeline,
            ]); // refer https://stackoverflow.com/questions/35096298/how-to-use-the-mongodb-group-function-via-the-new-php-pecl-mongodb-driver-1-1-2
         */
        $result = '';
        if (!empty($params['env']))
            $this->mongo_db->switch_db($params['env']);//pass full databsae name 

        if (!empty($params['query']))
            $result = $this->mongo_db->aggregate($params['table_name'],$params['query']);
        
        return $result;
    }

    public function log_cron_status($cron_id, $date, $updateid='', $number_of_records=''){
        //ini_set('display_errors',1);error_reporting(E_ALL);

        if($updateid != ''){

            $update_params = array();
            $update_params['env'] = 'db';
            $params['print_query']= TRUE;
            $update_params['table_name'] = 'mf_bod_eod_cron_details';
            $update_params['update_data'] = array('end_time' => date('H:i:s'), 'action'=>2, 'number_of_records' => $number_of_records);
            $update_params['where_data'] = array('id' => $updateid);

            $update = $this->update_table_data_with_type($update_params);
            return $update;
            
        }else{

            $insert_array = array(
            'cron_id' => $cron_id,
            'of_date' => $date,
            'start_time' => date('H:i:s'),
            'action' => 1,
            
            );  

            $param_insert = array();
            $param_insert['env'] = 'db';
            $param_insert['table_name'] = 'mf_bod_eod_cron_details';
            $param_insert['data'] = $insert_array;
            //$param_insert['print_query'] = TRUE;
            $insert_id = $this->insert_table_data($param_insert);

            return $insert_id;

        }

    }

    function delete_and_batch_insert($data, $table, $condition) {
        $params['env'] = 'db';
        $this->makeConnection($params);
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($condition);
        $result = $this->db->get();
        //echo $this->mfdb->last_query();
        if ($result->num_rows() > 0) {
            $this->db->where($condition);
            $this->db->delete($table);
        }
        //echo '<pre>'; print_r($data); 
        $this->db->insert_batch($table, $data);
        //echo $this->mfdb->last_query();
        if ($this->db->affected_rows() > 0) {
            $this->closeConnection($params['env']);
            return "success";
        }else{
            $this->closeConnection($params['env']);
            return false;
        }


    }


    //API RELATED FUNCTIONS FOR TOKEN GENERATION
    /* Created by : Clyde 
    Created Date: 16-11-2018
    */

    private function accessToken($app_key, $app_secret, $user_id) {
        return base64_encode(md5($app_key . $app_secret . $user_id . 'WCAT' . microtime()));
    }
    
    
    public function generateAccessToken($app_key, $app_secret, $user_id, $override = TRUE) {
        
        $params['env'] = 'db';
        $this->makeConnection($params);
        $response = $errors = array();
        $retVal = array('status' => 'success', 'message' => 'success');
        $query = $this->db->select(['app_name', 'is_active'])
                ->from('mf_applications')
                ->where('app_key', $app_key)
                ->where('app_secret' ,$app_secret)
                ->get();
        $result = $query->result_array();
        #print_r($result);die;
        if(count($result) > 0) {
            $result = $result[0];
            if($result['is_active']) {
                if($override) {
                    $response['access_token'] = $this->accessToken($app_key, $app_secret, $user_id);
                    $response['at_expire_time'] = date('Y-m-d H:i:s', time() + ACCES_TOKEN_EXPIRY_DURATION);
                    $insertArray = array(
                        'app_key' => $app_key,
                        'user_id' => $user_id,
                        'access_token' => $response['access_token'],
                        'at_expire_time' => $response['at_expire_time'],
                        'created_on' => date('Y-m-d H:i:s')
                    );
                    $sql = $this->db->set($insertArray)->get_compiled_insert('mf_access_tokens') . ' ON DUPLICATE KEY UPDATE `access_token` = VALUES(`access_token`), `at_expire_time` = VALUES(`at_expire_time`)';
                    $ins = $this->db->query($sql);
                    if(!$ins) {
                        $errors[] = 'Unable perform action'; 
                    }
                }
                else {
                    //App Key & App Secret are valid and also application is active
                
                    $query = $this->db->select(['access_token', 'at_expire_time'])
                            ->from('mf_access_tokens')
                            ->where('app_key', $app_key)
                            ->where('user_id', $user_id)
                            ->get();
                    $result = $query->result_array();
                    #print_r($result);die;
                    #echo $result[0]['at_expire_time'] .' >= '. date('Y-m-d H:i:s');die;
                    if(count($result) > 0 && strtotime($result[0]['at_expire_time']) >= (time() + 60)) {
                        //The access token for this app is active, return the same
                        $response['access_token'] = $result[0]['access_token'];
                        $response['at_expire_time'] = $result[0]['at_expire_time'];
                    }
                    else {
                        $response['access_token'] = $this->accessToken($app_key, $app_secret, $user_id);
                        $response['at_expire_time'] = date('Y-m-d H:i:s', time() + ACCES_TOKEN_EXPIRY_DURATION);
                        $insertArray = array(
                            'app_key' => $app_key,
                            'user_id' => $user_id,
                            'access_token' => $response['access_token'],
                            'at_expire_time' => $response['at_expire_time'],
                            'created_on' => date('Y-m-d H:i:s')
                        );
                        $sql = $this->db->set($insertArray)->get_compiled_insert('mf_access_tokens') . ' ON DUPLICATE KEY UPDATE `access_token` = VALUES(`access_token`), `at_expire_time` = VALUES(`at_expire_time`)';
                        $ins = $this->db->query($sql);
                        if(!$ins) {
                            $errors[] = 'Unable perform action'; 
                        }
                    }
                }
                
            }
            else {
                $errors[] = $result['app_name'] . ' is no more active application';
            }
        }
        else {
            $errors[] = 'Invalid app key or app secret or both';
        }
        if(count($errors) > 0) {
            $retVal['status'] = 'error';
            $retVal['message'] = $errors;
        }
        else {
            $retVal['status'] = 'success';
            $retVal['response'] = $response;
        }
        $this->closeConnection($params['env']);
        return $retVal;
    }
     
    public function validateAccessToken($at, $user) {
        $params['env'] = 'db';
        $this->makeConnection($params);
        
        $retVal = 0;
        $query = $this->db->select('at_expire_time')
                ->where(['access_token' => $at, 'user_id' => $user])
                ->from('mf_access_tokens');
        #echo $query->get_compiled_select();die;
        $res = $query->get()->result_array();
        #print_r($res);die;
        if(count($res) > 0) {
            if(strtotime($res[0]['at_expire_time']) > time()) {
                $retVal = 1;
            }
            else {
                $retVal = -1;
            }
        }
        else {
            $retVal = 0;
        }
        $this->closeConnection($params['env']);
        return $retVal;
    }
    
    

    



}

/* End of file MY_Base_model.php */
/* Location: ./application/core/MY_Base_model.php */
