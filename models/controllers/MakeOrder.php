<?php

class MakeOrder 
{
  private Table_Handler $table;

  public function __construct() {
    $this->table = new Table_Handler("orders");
  }

  public function newOrder($is_valid, $user_id) {
    if ($is_valid) {
      $this->table->insert("'0', '{$user_id}'", "'download_count', 'user_id'");
    }
  }

  public function checkUserExisting(bool $is_valid)
  {
    
  }

  public function increaseDownloadCounter(int $user_id)
  {
    $this->table->increaseCounter($user_id);
  }

  public function checkCounter(int $user_id)
  {
    if ( $this->table->select_record_by_id($user_id) > 7 ) 
      header("location:./payment.php");
    else 
      $this->increaseDownloadCounter($user_id);
  }

}