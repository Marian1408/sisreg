<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    Base model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */

  require_once (__DIR__ . '/modelDatabase.php');
  
  /**
   * This class defines the generic model class, from this class all model classes inherit. It also contains the generic
   * methods: getAll, getById, deleteById, updateById an insert
   */
  class ModelGeneric extends ModelDatabase
  {
    
    protected string $table;
    protected string $field;
    protected PDO $connectionPDO;
    protected mysqli|PDO $connectionMysqli;
    
    /**
     * @param $table string <p>Name of the table to use</p>
     * @param $field string <p>Name of the field id of the table to use</p>
     */
    public function __construct (string $table, string $field = 'id')
    {
      parent::__construct ();
      $this->connectionMysqli = parent::getConnectionMysqli ();
      $this->connectionPDO = parent::getConnectionPDO ();
      $this->table = $table;
      $this->field = $field;
    }
    
    /**
     * Generic method that returns all records from a table
     *
     * @return bool|array
     */
    public function getAll (): bool|array
    {
      $sql = " SELECT * FROM {$this->table} ";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $statement->fetchAll ();
    }
    
    /**
     * Generic method that returns the total number of columns in a table
     *
     * @return bool|array
     */
    public function getAllTotal (): bool|int
    {
      $sql = " SELECT COUNT(*) FROM {$this->table} ";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $statement->fetchColumn();
    }
    
    
    /**
     * Generic method that returns a record that matches the id passed as a parameter
     *
     * @param $id <p>Id of the record to obtain</p>
     * @return array|false
     */
    public function getById ($id): bool|array
    {
      $sql = " SELECT * FROM {$this->table} WHERE {$this->field} ='$id' ";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $statement->fetch ();
    }
    
    /**
     * Generic method that deletes a record that matches the id passed as a parameter
     *
     * @param $id <p>Id of the record to delete</p>
     * @return int
     */
    public function deleteById ($id): int
    {
      $sql = "DELETE FROM {$this->table} WHERE {$this->field} = '$id' ";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $count = $statement->rowCount();
    }
    
    /**
     * Generic method that updates a record that matches the id passed as a parameter
     *
     * @param $id   <p>Id of the record to update</p>
     * @param $data <p>Data to update on record</p>
     * @return int
     */
    public function updateById ($id, $data): int
    {
      $sql = "UPDATE {$this->table} SET $data WHERE {$this->field} = '$id' ";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $count = $statement->rowCount();
    }
    
    /**
     * Generic method that inserts a new record
     *
     * @param $dataColumns
     * @param $data <p>Data to insert as a new record</p>
     * @return int|bool
     */
    public function insert ($dataColumns, $data): int|bool
    {
      $sql = "INSERT INTO {$this->table} {$dataColumns} VALUES {$data}";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $count = $statement->rowCount();
    }
    
    
    
  }
