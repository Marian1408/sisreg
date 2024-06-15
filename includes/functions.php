<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Class
   * File description:    Contains the definition of global system functions
   * Package:             Core
   */
   
  class Functions
  {
    
    # General Functions ------------------------------------------------------------------------------------------------
    
    /**
     * This function is used to test the functions file scope.
     *
     * @return void <p>Print a text message used for testing</p>
     */
    function test (): void
    {
      echo "Message test"; // Print the message for test
    }
    
    
    
    /**
     * Return success function
     *
     * @param int $affectedColumns
     * @return bool|string
     */
    function json_success(int $affectedColumns): bool|string
    {
      $return = array();
      $return['error'] = FALSE;
      $return['affectedColumns'] = $affectedColumns;
      return json_encode($return);
    }
    
    /**
     * Return error function
     *
     * @param int $affectedColumns
     * @return bool|string
     */
    function json_error(int $affectedColumns): bool|string
    {
      $return = array();
      $return['error'] = TRUE;
      $return['affectedColumns'] = $affectedColumns;
      return json_encode($return);
    }
    
    
    
    /**
     * This function is used to clean strings by cleaning them of whitespace, forward slashes, and special characters.
     *
     * @param string $string <p>String to clean.</p>
     * @return string <p>Return the string cleaned.</p>
     */
    static function cleanStringFromInput (string $string): string
    {
      $string = trim ($string); // Clean start and end string of blanks
      $string = stripslashes ($string); // Remove slashes from a string with escaped quotes e.g. \'
      return htmlspecialchars ($string); // Convert special characters to HTML entities
    }
    
    /**
     * Shows the user's image if it exists, otherwise shows a default image.
     *
     * @return void
     */
    static function showUserImage (): void
    {
      # If no exists user image
      if (!isset($_SESSION['user_image'])) {
        echo 'views/resources/dist/img/users/no_image.jpg';
      } else {
        echo $_SESSION['user_image'];
      }
    }
    
    # Session Functions ------------------------------------------------------------------------------------------------
    
    /**
     * This function initialize to $_SESSION variable with the user data in an
     * associative array, the data add in the session of variable are:
     * - user_id
     * - user
     * - name
     * - lastname
     * - rol_id
     * - state
     *
     * @param Array $dataUser <p>Associative array with data user</p>
     * @return void
     */
    static function sessionsInitializeSessionVariable (array $dataUser): void
    {
      $_SESSION['user_id'] = $dataUser['user_id'];
      $_SESSION['user_username'] = $dataUser['user_username'];
      $_SESSION['user_role_id'] = $dataUser['user_role'];
      $_SESSION['user_status'] = $dataUser['user_status'];
      $_SESSION['user_description'] = $dataUser['user_description'];
      $_SESSION['user_name'] = $dataUser['user_name'];
      $_SESSION['user_lastname'] = $dataUser['user_last_name'];
      $_SESSION['user_mail'] = $dataUser['user_mail'];
      $_SESSION['user_phone'] = $dataUser['user_phone'];
      $_SESSION['user_image'] = $dataUser['user_image'];
      $_SESSION['user_date_last_change'] = $dataUser['user_date_last_change'];
      $_SESSION['user_date'] = $dataUser['user_date'];
    }
    
    /**
     * This function add new data to array of the $_SESSION variable
     *
     * @param String $newName <p>The name of the new value</p>
     * @param String $newData <p>The data of the new value</p>
     */
    static function sessionsAddNewValue (string $newName, string $newData): void
    {
      $_SESSION[$newName] = $newData;
    }
    
    # ------------------------------------------------------------------------------------------------------------------
    # Menu Functions
    # ------------------------------------------------------------------------------------------------------------------
    
    /**
     * This functions set class active, if is selected.
     *
     * @param string $function <p>Is the class name to activate for function in the menu.</p>
     * @param string $string   <p>URL captured.</p>
     * @param string $namePage <p>Name of page.</p>
     * @return void
     */
    static function menuActive (string $function, string $string, string $namePage): void
    {
      $pos = strpos ($string, $namePage);
      if ($pos === false) {
      } else {
        if ($function === 'menuActiveItem' || $function === 'menuOpenedActive') {
          echo "active";
        } elseif ($function === 'menuOpened') {
          echo "menu-is-opening menu-open";
        }
      }
    }
    
    /***
     * Image validation, copy and move to destination folder
     *
     * @param $fileContent
     * @param $folderName
     *
     * @return array
     */
    static function imageUploadValidation ($fileContent, $folderName): array
    {
      // Data: File name e.g. image.jpg
      $fileName = $_FILES['inputFileUserImageUpload']['name'];
      
      // Data: Filetype e.g. image/jpeg
      $fileType = $_FILES['inputFileUserImageUpload']['type'];
      
      // Data: Filetype e.g. C:\xampp\tmp\phpC45D.tmp
      $fileTemporalName = $_FILES['inputFileUserImageUpload']['tmp_name'];
      
      // Data: Filetype e.g. 748391 in Kb
      $fileSize = $_FILES['inputFileUserImageUpload']['size'];
      
      // Data: Get image dimensions e.g. Array ( [0] => 1920 [1] => 845 [2] => 2 [3] => width="1920" height="845" [bits] => 8 [channels] => 3 [mime] => image/jpeg )
      $fileDimensions = getimagesize ($_FILES['inputFileUserImageUpload']['tmp_name']);
      
      // Data: Directory name destination e.g. './views/resources/dist/img/users/'
      $fileDirectoryDestinaton = SYSTEM_ROOT_URL . '/views/resources/dist/img/' . $folderName . '/';
      
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
    
  }