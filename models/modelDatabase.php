<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    This file is the database model.
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  
  /**
   * This class defines the database model for the connection to the database
   */
  class ModelDatabase
  {
    
    private PDO $connectionPDO;
    private mysqli|PDO $connectionMysqli;
    
    /**
     * This construct defines the connection to database
     */
    public function __construct ()
    {
      # Required files
      require_once (dirname (__DIR__, 1) . '/includes/functions.php');
      require_once (dirname (__DIR__, 1) . '/config.php');
      
      $this->connectionMysqli ();
      $this->connectionPDO ();
    }
    
    /**
     * @return void
     */
    private function connectionMysqli (): void
    {
      
      # Database connection
      try {
        $this->connectionMysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
      } catch (PDOException $e) {
        header ("Location: ../login.php?error=Error al conectar la base de datos");
        exit();
      }
    }
    
    /**
     * @return void
     */
    private function connectionPdo (): void
    {
      
      # Additional attributes of the way in which the connection to the database will be made and the information will be returned to us like associative array
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ];
      
      # Database connection
      try {
        $this->connectionPDO = new PDO('mysql:host=' . DB_HOSTNAME . '; dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, $options);
        $this->connectionPDO->exec ("SET CHARACTER SET UTF8");
      } catch (PDOException $e) {
        header ("Location: ../login.php?error=Error al conectar la base de datos");
        exit();
      }
    }
    
    /**
     * We recover the connection of PDO type
     *
     * @return PDO $this->connection
     */
    protected function getConnectionPDO (): PDO
    {
      return $this->connectionPDO;
    }
    
    /**
     * Close the connection of PDO type
     *
     * @return PDO $this->connectionPDO
     */
    protected function closeConnectionPDO (): PDO
    {
      return $this->connectionPDO = null;
    }
    
    
    /**
     * We recover the connection of Mysqli type
     *
     * @return mysqli|PDO $this->connectionMysqli
     */
    protected function getConnectionMysqli (): mysqli|PDO
    {
      return $this->connectionMysqli;
    }
    
    /**
     * Close the connection of Mysqli type
     *
     * @return mysqli|PDO
     */
    protected function closeConnectionMysqli (): mysqli|PDO
    {
      return $this->connectionMysqli = null;
    }
  }