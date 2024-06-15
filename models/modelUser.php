<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    User model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */

  require_once (__DIR__ . '/modelGeneric.php');
  
  /**
   * This class defines the User model class
   */
  class ModelUser extends ModelGeneric
  {
    
    /**
     * Constructor of the User class
     */
    public function __construct ()
    {
      parent::__construct ('users', 'user_id');
    }
    
    /**
     * Check exist a user if username and password match in database and return a row with the user data.
     *
     * @param string $user     <p>String with the username</p>
     * @param string $password <p>String with the password</p>
     * @return mixed
     */
    public function checkUserAndPassword (string $user, string $password): mixed
    {
      $sql = "SELECT * FROM " . $this->table . " WHERE user_username = '$user' AND user_password = '$password' ";
      $sth = $this->connectionPDO->prepare ($sql);
      $sth->execute ();
      return $sth->fetch (PDO::FETCH_ASSOC);
    }
    
    /***
     * Get all users for DataTables format
     *
     * @return bool|mysqli_result
     */
    public function getAllUsersDataTableFormat (): mysqli_result|bool
    {
      $sql = "SELECT * FROM $this->table";
      $connection = $this->connectionMysqli;
      return $connection->query ($sql);
    }
    
  }