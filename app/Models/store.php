<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class store extends Eloquent {

    protected $connection = 'mongodb';

    protected $collection = '';

    private $db = null;

    public function __construct($collection)
    {
        parent::__construct();
        $this->collection = $collection;
        $this->db =  DB::collection($this->collection);
    }

    /**@function get
     * @return mixed
     */


    public function get(){
        return $this->db->get();
    }

    /**@function getWhere
     * @param array $data
     * @return mixed
     */
    public function getWhere($where = [], $select = []){
        return $this->db->select($select)->where($where)->get();
    }


    public function getWhereFirst($where = [], $select = []){
        return $this->db->select($select)->where($where)->get()->first();
    }

    public function getOrWhere($where = [], $select = []){
        return $this->db->select($select)->orwhere($where)->get();
    }

    public function getOrWhereFirst($where = [], $select = []){
        return $this->db->select($select)->orwhere($where)->get()->first();
    }

    public function getLike($key,$operador,$value,$select = []){
        return $this->db->select($select)->where($key,$operador,$value)->get();
    }

    /**
     * @param array $data
     * @return int
     */

    public function insertOne($data = []){
        return $this->db->insertGetId($data);
    }


    public function insertOnePush($where = [],$data = []){
        return $this->db->where($where)->push($data);
    }


    public function insertPush($where = [],$subCollection =  "", array $data){
        return $this->db->where($where)->push("$subCollection",$data);
    }

    public function whereUpdate($where = [],$data = [],$option = ['upsert' => true]){
        return $this->db->where($where)->update($data,$option);
    }

    public function whereRemove($where = [],$subCollection = "",$data = ""){
        return $this->db->where($where)->pull($subCollection,$data);
    }

    public function whereDelete($where = [],$data = ""){
        return $this->db->where($where)->unset($data);
    }

    public  function remove($where = []){
        return $this->db->where($where)->delete();
    }

    public function getId($where = []){
        return $this->db->where($where)->get()["_id"];
    }

    public function lastId(){
        return (int)$this->db->get()->last()["id"] + 1;
    }

    public function tarjetas(){
        $data = [
            "0" => ["tarjeta" => (int)1234567890, "fondo" => 10000],
            "1" => ["tarjeta" => (int)1234509876, "fondo" => 20000],
            "2" => ["tarjeta" => (int)5647382910, "fondo" => 0],
            "3" => ["tarjeta" => (int)1029384756, "fondo" => 10000000000],
        ];
        return $data;
    }

    function getCode($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
