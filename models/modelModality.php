<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    Modality model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (__DIR__ . '/modelGeneric.php');
  
  /**
   * This class defines the ModelModality class. This class inherits from the generic model class.
   */
  class ModelModality extends ModelGeneric
  {
    
    protected string $prefixTableName;
    
    /**
     * Constructor of the ModelModality class
     */
    public function __construct ()
    {
      $this->prefixTableName = 'opt_modality';
    }
    
    /**
     * Gets the list of activities depending on the number passed as a parameter
     *
     * @return bool|array
     */
    public function getAllModality (): bool|array
    {
      parent::__construct ($this->prefixTableName);
      return parent::getAll ();
    }
    
    public function getModalityName ($id): string
    {
      parent::__construct ($this->prefixTableName);
      $table = $this->prefixTableName;
      $sql = "SELECT * FROM $table WHERE id = '$id'";
      $connection = parent::getConnectionPDO ();
      $sth = $connection->prepare ($sql);
      $sth->execute ();
      $result = $sth->fetch (PDO::FETCH_ASSOC);
      return $result['name'];
    }
    
  }