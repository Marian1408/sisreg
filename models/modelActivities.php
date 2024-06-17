<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    Activities model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (__DIR__ . '/modelGeneric.php');
  
  /**
   * This class defines the ModelActivities class. This class inherits from the generic model class.
   */
  class ModelActivities extends ModelGeneric
  {
    
    protected string $prefixTableName;
    
    /**
     * Constructor of the ModelActivities class
     */
    public function __construct ()
    {
      $this->prefixTableName = 'opt_activities';
      
    }
    
    /**
     * Gets the list of activities depending on the number passed as a parameter
     *
     * @param string $number
     * @return bool|array
     */
    public function getAllActivities (string $number='1'): bool|array
    {
      parent::__construct ($this->prefixTableName.$number);
      return parent::getAll ();
    }
    
    public function getActivityName (string $number='1', $id): string
    {
      parent::__construct ($this->prefixTableName.$number);
      $table = $this->prefixTableName.$number;
      $sql = "SELECT * FROM $table WHERE id = '$id'";
      $connection = parent::getConnectionPDO ();
      $sth = $connection->prepare ($sql);
      $sth->execute ();
      $result = $sth->fetch (PDO::FETCH_ASSOC);
      return $result['name'];
    }
    
  }