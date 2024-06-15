<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Controller
   * File description:    User controller
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  require_once (dirname (__DIR__, 1) . '/models/modelUser.php');
  require_once (dirname (__DIR__, 1) . '/models/modelUserRole.php');
  require_once (dirname (__DIR__, 1) . '/controllers/controllerUser.php');
  
  
  # ADD new user via AJAX for DataTable
  if (isset($_POST['test'])) {
    $response = $_POST['test'];
    echo $response;
  }
  
  
  if (!empty($_FILES['customFile']['name'])) {
    $response = $_FILES['customFile']['name'];
    $nombre_archivo = $_FILES['customFile']['name'];
    $ruta_temporal_archivo = $_FILES['customFile']['tmp_name'];
    //$name = $_POST['inputUsername'];
    echo $ruta_temporal_archivo;
  }
  
  
  
  
  # GET ALL users via AJAX for DataTable
  if (isset($_GET['getAllData'])) {
    ControllerUser::getAllUsersForDataTables ();
  }
  
  # DELETE user via Ajax for DataTable
  if (isset($_POST['idUser'])) {
    $userObject = new ControllerUser();
    $userObject->deleteUserById ($_POST['idUser']);
  }
  
  /**
   * User controller class
   */
  class ControllerUser
  {
    private ModelUser $model;
    
    /**
     * User Controller Constructor
     */
    function __construct ()
    {
      $this->model = new ModelUser();
    }
    
    /***
     * This method checks if a user and password exist in the database users table
     *
     * @param string $user
     * @param string $password
     *
     * @return mixed
     */
    function checkUserAndPassword (string $user, string $password): mixed
    {
      return $this->model->checkUserAndPassword ($user, $password);
    }
    
    /**
     * This method return a user from with the parameter id
     *
     * @param $id
     * @return array|bool
     */
    function getUserById ($id): array|bool
    {
      return $this->model->getById ($id);
    }
    
    /**
     * This method return the total number of rows of the table
     *
     * @return array|bool|int
     */
    function getAllUsersTotal (): int|bool|array
    {
      return $this->model->getAllTotal ();
    }
    
    /***
     * Return Json object with the data for users table on DataTables
     *
     * @return void
     */
    static function getAllUsersForDataTables (): void
    {
      $userObject = new ModelUser();
      $userRoleObject = new ModelUserRole();
      
      $queryResult = $userObject->getAllUsersDataTableFormat ();
      $data_array = array();
      
      # The data is sorted to create a new array
      while ($data = $queryResult->fetch_object ()) {
        $data_array[] = array(
          $data->user_id, // [0] | Id | Column
          $data->user_id, // [1] | Tools | Column
          $data->user_image, // [2] | Image | Column
          $data->user_username, // [3] | User | Column
          $data->user_role, // [4] | Role | Column
          $data->user_name, // [5] |
          $data->user_last_name, // [6] |
          $data->user_mail, // [7] |
          $data->user_phone, // [8] |
          $data->user_date // [9] |
        );
      }
      
      # Buttons tools [1]
      foreach ($data_array as $index => $item) {
        $data_array[$index][1] = '
        
        <div class="btn-group">
         
         <form action="userViewProfile" method="post" id="formButtonUserView">
            <input type="hidden" name="userData" id="userData" value=" ' . $data_array[$index][0] . '" >
            <button type="submit" class="btn btn-primary btn-flat" style="margin-right: 5px; height: 40px;" title="View profile">
              <i class="fas fa-pen-to-square"></i>
            </button>
          </form>
          
          <button type="button" class="btn btn-danger btn-flat" style="margin-right: 5px; height: 40px;" title="Delete user" data-toggle="modal"
             data-target="#deleteModal" onclick="userDeleteModal(' . $data_array[$index][1] . ',\'' . $data_array[$index][3] . '\')">
            <i class="fas fa-trash-can"></i>
          </button>
          
        </div>
     ';
        
        # If there is no image path in the field
        if (!isset($data_array[$index][2]) || $data_array[$index][2] == null || $data_array[$index][2] == '') {
          $data_array[$index][2] = "views/resources/dist/img/users/no_image.jpg";
        }
        
        $data_array[$index][2] = '<img width="80px" src="' . $data_array[$index][2] . '" class="img-thumbnail" alt="...">';
      }
      
      
      # Add name of role [4]
      foreach ($data_array as $index => $item) {
        $nameOfRole = $userRoleObject->getRoleName ($item[4]);
        $data_array[$index][4] = $nameOfRole;
      }
      
      
      # An array is created with the data ordered and prepared for the table
      $new_array = array("data" => $data_array);
      
      # Print data Json
      echo json_encode ($new_array);
    }
    
    /**
     * Delete a user with the id parameter
     *
     * @param $id
     * @return void
     */
    function deleteUserById ($id): void
    {
      echo $this->model->deleteById ($id);
    }
    
  }