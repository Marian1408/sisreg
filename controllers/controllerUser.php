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
  if (isset($_POST['inputUserName'])) {
    
    $inputUsername = $_POST['inputUsername'];
    $inputPassword = md5($_POST['inputPassword']);
    $inputName = $_POST['inputName'];
    $selectRole = $_POST['selectRole'];
    $inputEmail = $_POST['inputEmail'];
    $inputPhone = $_POST['inputPhone'];
    $textAreaDescription = $_POST['textAreaDescription'];
    
    $dateTime = date ("Y-m-d H:i:s");
    
    $resultImage = imageUploadValidation ($_FILES['customFile'],'users');
    
    $image = $resultImage['filePathForDatabase'];
    
    $objectUser = new ControllerUser();
    
    $data = " ('$inputUsername', '$inputPassword', '$inputName', '$selectRole', '$inputEmail',
    '$inputPhone', '$textAreaDescription', '$dateTime', '$image') ";
    
    $columns = '(user_username, user_password, 	user_name, user_role,
    user_mail, user_phone, user_description, user_date_last_change, user_image)';
    
    $result = $objectUser->insertUser ($columns, $data);
    echo $result;
  }
  
  
  /***
   * Image validation, copy and move to destination folder
   *
   * @param $fileContent
   * @param $folderName
   *
   * @return array
   */
  function imageUploadValidation ($fileContent, $folderName): array
  {
    // Data: File name e.g. image.jpg
    $fileName = $_FILES['customFile']['name'];
    
    // Data: Filetype e.g. image/jpeg
    $fileType = $_FILES['customFile']['type'];
    
    // Data: Filetype e.g. C:\xampp\tmp\phpC45D.tmp
    $fileTemporalName = $_FILES['customFile']['tmp_name'];
    
    // Data: Filetype e.g. 748391 in Kb
    $fileSize = $_FILES['customFile']['size'];
    
    // Data: Get image dimensions e.g. Array ( [0] => 1920 [1] => 845 [2] => 2 [3] => width="1920" height="845" [bits] => 8 [channels] => 3 [mime] => image/jpeg )
    $fileDimensions = getimagesize ($_FILES['customFile']['tmp_name']);
    
    // Data: Directory name destination e.g. './views/resources/dist/img/users/'
    $url = $_SERVER['DOCUMENT_ROOT'];
    
    $fileDirectoryDestinaton = $url  . '/views/resources/dist/img/' . $folderName . '/';
    
    // Get file extension
    $fileNameCmps = explode (".", $fileName);
    
    // Data: File extension e.g. jpg
    $fileExtension = strtolower (end ($fileNameCmps));
    
    // Data: New file name
    $fileNewFileName = 'user-' . date ("Y-m-d-h-i-s") . '.' . $fileExtension;
    
    // Data: New path of the image file
    $filePathForDatabase = 'views/resources/dist/img/' . $folderName . '/' . $fileNewFileName;
    
    // Data: New name and path
    $fileNameAndPath = $fileDirectoryDestinaton . $fileNewFileName; // File names and pat e.g. files/wallpaperbetter.jpg
    
    // --------------------- Validations before uploading to the server
    // Validate if file is image file
    if ($fileDimensions) {
      // echo 'OK::(fileDimensions) / Esto es una imagen<br>';
      
      // Validate image size
      if ($fileSize < 1000000) { // Validating file size in Mb 1000000
        // echo 'OK::(fileSize) / El documento tiene un tamaño menor de 1Mb <br>';
        
        // Validate file extension
        if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png') {
          //echo 'OK::($fileExtension) / Extensión de archivo permitida <br>';
          
          // Directory in which the uploaded file will be moved
          if (move_uploaded_file ($fileTemporalName, $fileNameAndPath)) {
            
            $dataFile['filePathForDatabase'] = $filePathForDatabase;
            $dataFile['fileProcess'] = 'successful';
            
            return $dataFile;
            
          } else {
            echo 'ERROR al mover';
          }
        } else {
          echo 'ERROR::($fileExtension) / Extensión de archivo NO permitida <br>';
        }
      } else {
        echo 'ERROR::(fileSize) / El archivo excede de 1Mb <br>';
      }
    } else {
      echo 'ERROR::(fileDimensions) / Esto no es una imágen <br>';
    }
    return 'ERROR';
  }
  
  
/*  if (!empty($_FILES['customFile']['name'])) {
    $response = $_FILES['customFile']['name'];
    $nombre_archivo = $_FILES['customFile']['name'];
    $ruta_temporal_archivo = $_FILES['customFile']['tmp_name'];
    //$name = $_POST['inputUsername'];
    echo $ruta_temporal_archivo;
  }*/
  
  
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
    
    function insertUser ($dataColumns, $data): array|bool
    {
      return $this->model->insertData ($dataColumns, $data);
    }
    
    public function getAllUsersWithRole (int $role= 1): bool|array
    {
      return $this->model->getAllUsersWithRole ($role);
    }
    
    function getAllUsers (): bool|array
    {
      return $this->model->getAll ();
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
    
    public function getUserName (int $id): string
    {
      return $this->model->getUserName ($id);
    }
    
  }