<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        COLPOS - Colegio de Postgraduados
   * Project description: Survey System for the Postgraduate College
   * Version:             1.0.0
   * File type:           Controller
   * File description:    Event controller
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  require_once (dirname (__DIR__, 1) . '/models/modelEvent.php');
  require_once (dirname (__DIR__, 1) . '/controllers/controllerEvent.php');
  require_once (dirname (__DIR__, 1) . '/controllers/controllerUser.php');
  
  
  # ADD new user via AJAX for DataTable
  if (isset($_POST['inputNameOfActivity'])) {
    
    $inputNameOfActivity = $_POST['inputNameOfActivity'];
    
    $selectActivityType1 = $_POST['selectActivityType1'];
    $selectActivityType2 = $_POST['selectActivityType2'];
    $selectActivityType3 = $_POST['selectActivityType3'];
    $selectModality = $_POST['selectModality'];
    
    $action1ActionNumbers = checkActions ($_POST['action1ActionNumbers']);
    $action1TrainedPeople = checkActions ($_POST['action1TrainedPeople']);
    $action1NumberHours = checkActions ($_POST['action1NumberHours']);
    
    $action2ActionNumbers = checkActions ($_POST['action2ActionNumbers']);
    $action2TrainedPeople = checkActions ($_POST['action2TrainedPeople']);
    $action2NumberHours = checkActions ($_POST['action2NumberHours']);
    
    $action3ActionNumbers = checkActions ($_POST['action3ActionNumbers']);
    $action3TrainedPeople = checkActions ($_POST['action3TrainedPeople']);
    $action3NumberHours = checkActions ($_POST['action3NumberHours']);
    
    $action4ActionNumbers = checkActions ($_POST['action4ActionNumbers']);
    $action4TrainedPeople = checkActions ($_POST['action4TrainedPeople']);
    $action4NumberHours = checkActions ($_POST['action4NumberHours']);
    
    $action5ActionNumbers = checkActions ($_POST['action5ActionNumbers']);
    $action5TrainedPeople = checkActions ($_POST['action5TrainedPeople']);
    $action5NumberHours = checkActions ($_POST['action5NumberHours']);
    
    $action6ActionNumbers = checkActions ($_POST['action6ActionNumbers']);
    $action6TrainedPeople = checkActions ($_POST['action6TrainedPeople']);
    $action6NumberHours = checkActions ($_POST['action6NumberHours']);
    
    $action7ActionNumbers = checkActions ($_POST['action7ActionNumbers']);
    $action7TrainedPeople = checkActions ($_POST['action7TrainedPeople']);
    $action7NumberHours = checkActions ($_POST['action7NumberHours']);
    
    $action8ActionNumbers = checkActions ($_POST['action8ActionNumbers']);
    $action8TrainedPeople = checkActions ($_POST['action8TrainedPeople']);
    $action8NumberHours = checkActions ($_POST['action8NumberHours']);
    
    $action9ActionNumbers = checkActions ($_POST['action9ActionNumbers']);
    $action9TrainedPeople = checkActions ($_POST['action9TrainedPeople']);
    $action9NumberHours = checkActions ($_POST['action9NumberHours']);
    
    $action10ActionNumbers = checkActions ($_POST['action10ActionNumbers']);
    $action10TrainedPeople = checkActions ($_POST['action10TrainedPeople']);
    $action10NumberHours = checkActions ($_POST['action10NumberHours']);
    
    $selectTechnologyManagerManager = $_POST['selectTechnologyManagerManager'];
    $selectManagerSocialService = $_POST['selectManagerSocialService'];
    $inputEventRequester = $_POST['inputEventRequester'];
    $selectPortfolioManager = $_POST['selectPortfolioManager'];
    $inputNameMagistrate = $_POST['inputNameMagistrate'];
    
    $dateEventDate = $_POST['dateEventDate'];
    $dateFolderAssignmentDate = $_POST['dateFolderAssignmentDate'];
    $dateDeliveryDateAdministrativeLettersSignature = $_POST['dateDeliveryDateAdministrativeLettersSignature'];
    $dateAcknowledgmentDeliveryDateSignature = $_POST['dateAcknowledgmentDeliveryDateSignature'];
    $dateMakingPosterDissemination = $_POST['dateMakingPosterDissemination'];
    $dateDeliveryDateAdministrativeOffices = $_POST['dateDeliveryDateAdministrativeOffices'];
    $dateCreationOpeningRegistrationsPlatformCourse = $_POST['dateCreationOpeningRegistrationsPlatformCourse'];
    $dateSendCallsBeforeValidating = $_POST['dateSendCallsBeforeValidating'];
    $dateDeliveryConcentratesCertificatesValidation = $_POST['dateDeliveryConcentratesCertificatesValidation'];
    $dateFolderDeliveryDate = $_POST['dateFolderDeliveryDate'];
    
    $dateConcentratesRecordsValidation = $_POST['dateConcentratesRecordsValidation'];
    $dateIntegratedFolderDelivery = $_POST['dateIntegratedFolderDelivery'];
    $dateEmptyDataIntoExcelFile = $_POST['dateEmptyDataIntoExcelFile'];
    $dateClearInformationFromTrained = $_POST['dateClearInformationFromTrained'];
    
    $dateTimeVariable = date ("Y-m-d H:i:s");
    
    $objectEvent = new ControllerEvent();
    
    $data = " ('$inputNameOfActivity', '$selectActivityType1', '$selectActivityType2', '$selectActivityType3', '$selectModality',
    '$action1ActionNumbers', '$action1TrainedPeople', '$action1NumberHours', '$action2ActionNumbers', '$action2TrainedPeople', '$action2NumberHours',
    '$action3ActionNumbers', '$action3TrainedPeople', '$action3NumberHours', '$action4ActionNumbers', '$action4TrainedPeople', '$action4NumberHours',
    '$action5ActionNumbers', '$action5TrainedPeople', '$action5NumberHours', '$action6ActionNumbers', '$action6TrainedPeople', '$action6NumberHours',
    '$action7ActionNumbers', '$action7TrainedPeople', '$action7NumberHours', '$action8ActionNumbers', '$action8TrainedPeople', '$action8NumberHours',
    '$action9ActionNumbers', '$action9TrainedPeople', '$action9NumberHours', '$action10ActionNumbers', '$action10TrainedPeople', '$action10NumberHours',
    '$selectTechnologyManagerManager', '$selectManagerSocialService', '$inputEventRequester', '$selectPortfolioManager', '$inputNameMagistrate',
    '$dateEventDate', '$dateFolderAssignmentDate', '$dateDeliveryDateAdministrativeLettersSignature', '$dateAcknowledgmentDeliveryDateSignature',
    '$dateMakingPosterDissemination', '$dateDeliveryDateAdministrativeOffices', '$dateCreationOpeningRegistrationsPlatformCourse',
    '$dateSendCallsBeforeValidating', '$dateDeliveryConcentratesCertificatesValidation', '$dateFolderDeliveryDate',
    '$dateConcentratesRecordsValidation', '$dateIntegratedFolderDelivery', '$dateEmptyDataIntoExcelFile',
    '$dateClearInformationFromTrained', '$dateTimeVariable') ";
    $columns = '(event_name_of_activity, event_activity_type1, event_activity_type2, event_activity_type3,
    event_modality, event_action_1_action_numbers, event_action_1_trained_people, event_action_1_number_hours,
    event_action_2_action_numbers, event_action_2_trained_people, event_action_2_number_hours,
    event_action_3_action_numbers, event_action_3_trained_people, event_action_3_number_hours,
    event_action_4_action_numbers, event_action_4_trained_people, event_action_4_number_hours,
    event_action_5_action_numbers, event_action_5_trained_people, event_action_5_number_hours,
    event_action_6_action_numbers, event_action_6_trained_people, event_action_6_number_hours,
    event_action_7_action_numbers, event_action_7_trained_people, event_action_7_number_hours,
    event_action_8_action_numbers, event_action_8_trained_people, event_action_8_number_hours,
    event_action_9_action_numbers, event_action_9_trained_people, event_action_9_number_hours,
    event_action_10_action_numbers, event_action_10_trained_people, event_action_10_number_hours,
    event_technology_manager_manager, event_manager_social_service, event_event_requester, event_input_portfolio_manager, event_name_magistrate, event_date_event_date, event_date_folder_assignment_date, event_date_delivery_date_administrative_letters_signature, event_date_acknowledgment_delivery_date_signature, event_date_making_poster_dissemination, event_date_delivery_date_administrative_offices, event_date_creation_opening_registrations_platform_course, event_date_send_calls_before_validating, event_date_delivery_concentrates_certificates_validation,  event_date_folder_delivery_date, event_date_concentrates_records_validation, event_date_integrated_folder_delivery, event_date_empty_data_into_excel_file, event_date_clear_information_from_trained, event_last_change_date)';
    $result = $objectEvent->insertEvent ($columns, $data);
    echo $result;
  }
  
  if (!empty($_FILES['customFile']['name'])) {
    $response = $_FILES['customFile']['name'];
    $nombre_archivo = $_FILES['customFile']['name'];
    $ruta_temporal_archivo = $_FILES['customFile']['tmp_name'];
    //$name = $_POST['inputUsername'];
    echo $ruta_temporal_archivo;
  }
  
  
  # GET ALL event via AJAX for DataTable
  if (isset($_GET['getAllDataEvent'])) {
    ControllerEvent::getAllEventsForDataTables ();
  }
  
  # DELETE user via Ajax for DataTable
  if (isset($_POST['idUser'])) {
    $userObject = new ControllerUser();
    $userObject->deleteUserById ($_POST['idUser']);
  }
  
  
  function checkActions ($action)
  {
    if (!empty($action)) {
      return $action;
    } else {
      return '0';
    }
    
  }
  
  
  /**
   * User controller class
   */
  class ControllerEvent
  {
    private ModelEvent $model;
    
    /**
     * User Controller Constructor
     */
    function __construct ()
    {
      $this->model = new ModelEvent();
    }
    
    function insertEvent ($dataColumns, $data): array|bool
    {
      return $this->model->insertData ($dataColumns, $data);
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
    static function getAllEventsForDataTables (): void
    {
      $eventObject = new ModelEvent();
      $userNameObject = new ModelUser();
      
      $queryResult = $eventObject->getAllEventsDataTableFormat ();
      $data_array = array();
      
      # The data is sorted to create a new array
      while ($data = $queryResult->fetch_object ()) {
        $data_array[] = array(
          $data->event_id, // [0] | Id | Column
          $data->event_name_of_activity, // [1] | Tools | Column
          $data->event_id, // [2] | Image | Column
          $data->event_activity_type1, // [3] | User | Column
          $data->event_activity_type2, // [4] | Role | Column
          $data->event_activity_type3, // [5]
          $data->event_modality, // [6]
          $data->event_technology_manager_manager, //
          $data->event_manager_social_service, //
          $data->event_event_requester, //
          $data->event_input_portfolio_manager, //
          $data->event_name_magistrate, //
        );
      }
      
      # Add name [7]
      foreach ($data_array as $index => $item) {
        $userName = $userNameObject->getUserName ($item[7]);
        $data_array[$index][7] = $userName;
      }
      # Add name [8]
      foreach ($data_array as $index => $item) {
        $userName = $userNameObject->getUserName ($item[8]);
        $data_array[$index][8] = $userName;
      }
      # Add name [10]
      foreach ($data_array as $index => $item) {
        $userName = $userNameObject->getUserName ($item[10]);
        $data_array[$index][10] = $userName;
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