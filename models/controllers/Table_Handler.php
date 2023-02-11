<?php

Class Table_Handler implements Db
{
  public $table;
  public $link;

  public function __construct($table_name)
  {
    $this->link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $this->set_table($table_name);
  }

  public function set_table($table)
  {
    $this->table = $table;
  }

  public function select_record_by_id($id)
  {
    $query = "SELECT `download_count` FROM `{$this->table}` WHERE `user_id` = {$id}";
    return $this->query($query);
  }

  public function select_records($start)
  {
    $query = "SELECT * FROM `{$this->table}` LIMIT " . $start . "," /*. REC_PER_PAGE*/ ;
    return $this->query($query);
  }

  private function query($sql) 
  {
    $result = mysqli_query($this->link, $sql);
    $res = array();
    while($row = mysqli_fetch_array($result))
    {
      $res [] = $row;
    }
    if (count($res) === 1) return $res[0];
    else return $res;
  }

  public function insert(string $values, string $tb_rows) {
    $sql = " INSERT INTO {$this->table} ({$tb_rows}) VALUES ({}) ";
    return (mysqli_query($this->link, $sql)) ? "SUCCESS" : mysqli_error($this->link) ; 
  }

  public function update(int $id, string $values, string $rows) {
    mysqli_query($this->link, "UPDATE {$this->table} ($rows) VALUES ($values) /* set ... = ...  */ ");
  }

  public function increaseCounter(int $id)
  {
    mysqli_query($this->link, "
      UPDATE {$this->table} SET `download_count` = 
      (SELECT download_count FROM {$this->table} WHERE `user_id` = $id) +1;
    ");
  }

}