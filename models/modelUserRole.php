<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    Rol model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (__DIR__ . '/modelGeneric.php');
  
  /**
   * This class defines the role model class
   */
  class ModelUserRole extends ModelGeneric
  {
    
    /**
     * Constructor of the Role model class
     */
    public function __construct ()
    {
      parent::__construct ('users_roles', 'user_role_id');
    }
    
    
    /**
     * Return the name role of a user with the id role
     *
     * @param int $roleId <p>A number id of the role of a user</p>
     * @return string <p>The name of the role</p>
     */
    public function getRoleName (int $roleId): string
    {
      $sql = "SELECT * FROM $this->table WHERE user_role_id = '$roleId'";
      $sth = $this->connectionPDO->prepare ($sql);
      $sth->execute ();
      $result = $sth->fetch (PDO::FETCH_ASSOC);
      return ucfirst ($result['user_role_name']);
    }
    
    /***
     * Get all roles for DataTables format
     *
     * @return bool|mysqli_result
     */
    public function getAllRolesDataTableFormat (): mysqli_result|bool
    {
      $sql = "SELECT * FROM $this->table";
      $connection = $this->connectionMysqli;
      return $connection->query ($sql);
    }
  }