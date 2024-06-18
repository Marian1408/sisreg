<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    Event Logistic model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (__DIR__ . '/modelGeneric.php');
  
  /**
   * This class defines the Event Logisitic model class
   */
  class ModelEventLogistic extends ModelGeneric
  {
    
    /**
     * Constructor of the Event class
     */
    public function __construct ()
    {
      parent::__construct ('events_logistic',  'event_logistic_id');
    }
    
    
    /***
     * Get all users for DataTables format
     *
     * @return bool|mysqli_result
     */
    public function getAllEventsLogisticDataTableFormat (): mysqli_result|bool
    {
      $sql = "SELECT * FROM $this->table";
      $connection = $this->connectionMysqli;
      return $connection->query ($sql);
    }
    
    public function insertData ($dataColumns, $data): int|bool
    {
      return parent::insert ($dataColumns, $data);
    }
    
    public function getAllEventsLogisticTotalWithUserId ($id): bool|int
    {
      $sql = " SELECT COUNT(*) FROM {$this->table} WHERE event_technology_manager_manager = '$id' OR event_manager_social_service = '$id' OR event_input_portfolio_manager = '$id'";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $statement->fetchColumn();
    }
    
    
    public function getAllEventsLogisticWithId ($id): bool|array
    {
      $sql = " SELECT * FROM {$this->table} WHERE event_technology_manager_manager = '$id' OR event_manager_social_service = '$id' OR event_input_portfolio_manager = '$id'";
      $statement = $this->connectionPDO->prepare ($sql);
      $statement->execute ();
      return $statement->fetchAll ();
    }
    
    
  }