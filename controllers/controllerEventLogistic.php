<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        COLPOS - Colegio de Postgraduados
   * Project description: Survey System for the Postgraduate College
   * Version:             1.0.0
   * File type:           Controller
   * File description:    Event Logistic Controller
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  require_once (dirname (__DIR__, 1) . '/models/modelEventLogistic.php');
  require_once (dirname (__DIR__, 1) . '/models/modelEvent.php');
  require_once (dirname (__DIR__, 1) . '/controllers/controllerEventLogistic.php');
  
  
  if (isset($_POST['eventDataCheckId'])) {
    
    if (!isset($_POST['event_logistic_personal_rtd'])) {
      $event_logistic_personal_rtd = '0';
    } else {
      $event_logistic_personal_rtd = '1';
    }
    if (!isset($_POST['event_logistic_personal_rtd'])) {
      $event_logistic_personal_rtd = '0';
    } else {
      $event_logistic_personal_rtd = '1';
    }
    if (!isset($_POST['event_logistic_personal_rtss'])) {
      $event_logistic_personal_rtss = '0';
    } else {
      $event_logistic_personal_rtss = '1';
    }
    if (!isset($_POST['event_logistic_personal_se'])) {
      $event_logistic_personal_se = '0';
    } else {
      $event_logistic_personal_se = '1';
    }
    if (!isset($_POST['event_logistic_personal_rc'])) {
      $event_logistic_personal_rc = '0';
    } else {
      $event_logistic_personal_rc = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_chairs'])) {
      $event_logistic_auditorium_chairs = '0';
    } else {
      $event_logistic_auditorium_chairs = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_presidium'])) {
      $event_logistic_auditorium_presidium = '0';
    } else {
      $event_logistic_auditorium_presidium = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_platform_data'])) {
      $event_logistic_auditorium_platform_data = '0';
    } else {
      $event_logistic_auditorium_platform_data = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_id_data'])) {
      $event_logistic_auditorium_id_data = '0';
    } else {
      $event_logistic_auditorium_id_data = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_staff_compliance'])) {
      $event_logistic_auditorium_staff_compliance = '0';
    } else {
      $event_logistic_auditorium_staff_compliance = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_prepare_attendance_list'])) {
      $event_logistic_auditorium_prepare_attendance_list = '0';
    } else {
      $event_logistic_auditorium_prepare_attendance_list = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_verify_support_staff'])) {
      $event_logistic_auditorium_verify_support_staff = '0';
    } else {
      $event_logistic_auditorium_verify_support_staff = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_attendance_link'])) {
      $event_logistic_auditorium_attendance_link = '0';
    } else {
      $event_logistic_auditorium_attendance_link = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_attendace_password_link'])) {
      $event_logistic_auditorium_attendace_password_link = '0';
    } else {
      $event_logistic_auditorium_attendace_password_link = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_lift_tablecloths'])) {
      $event_logistic_auditorium_lift_tablecloths = '0';
    } else {
      $event_logistic_auditorium_lift_tablecloths = '1';
    }
    if (!isset($_POST['event_logistic_auditorium_personifiers'])) {
      $event_logistic_auditorium_personifiers = '0';
    } else {
      $event_logistic_auditorium_personifiers = '1';
    }
    
    
    $event_logistic_event_id = $_POST['eventDataCheckId'];
    
    $objectEvent = new ControllerEventLogistic();
    
    $columns = '(event_logistic_personal_rtd, event_logistic_personal_rtss, event_logistic_personal_se, event_logistic_personal_rc, event_logistic_auditorium_chairs, event_logistic_auditorium_presidium, event_logistic_auditorium_platform_data, event_logistic_auditorium_id_data, event_logistic_auditorium_staff_compliance, event_logistic_auditorium_prepare_attendance_list, event_logistic_auditorium_verify_support_staff, event_logistic_auditorium_attendance_link, event_logistic_auditorium_attendace_password_link, event_logistic_auditorium_lift_tablecloths, event_logistic_auditorium_personifiers, event_logistic_event_id)';
    
    $data = " ('$event_logistic_personal_rtd','$event_logistic_personal_rtss','$event_logistic_personal_se','$event_logistic_personal_rc','$event_logistic_auditorium_chairs','$event_logistic_auditorium_presidium','$event_logistic_auditorium_platform_data','$event_logistic_auditorium_id_data','$event_logistic_auditorium_staff_compliance','$event_logistic_auditorium_prepare_attendance_list','$event_logistic_auditorium_verify_support_staff','$event_logistic_auditorium_attendance_link','$event_logistic_auditorium_attendace_password_link','$event_logistic_auditorium_lift_tablecloths','$event_logistic_auditorium_personifiers','$event_logistic_event_id') ";
    $result = $objectEvent->insertEvent ($columns, $data);
    echo $result;
  }
  
  
  # ADD new event via AJAX for DataTable
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
    
    $dateEventDate = strtotime ($_POST['dateEventDate']);
    $dateEventDate = date ("Y-m-d H:i:s", $dateEventDate);
    
    $dateFolderAssignmentDate = strtotime ($_POST['dateFolderAssignmentDate']);
    $dateFolderAssignmentDate = date ("Y-m-d H:i:s", $dateFolderAssignmentDate);
    
    $dateDeliveryDateAdministrativeLettersSignature = strtotime ($_POST['dateDeliveryDateAdministrativeLettersSignature']);
    $dateDeliveryDateAdministrativeLettersSignature = date ("Y-m-d H:i:s", $dateDeliveryDateAdministrativeLettersSignature);
    
    $dateAcknowledgmentDeliveryDateSignature = strtotime ($_POST['dateAcknowledgmentDeliveryDateSignature']);
    $dateAcknowledgmentDeliveryDateSignature = date ("Y-m-d H:i:s", $dateAcknowledgmentDeliveryDateSignature);
    
    $dateMakingPosterDissemination = strtotime ($_POST['dateMakingPosterDissemination']);
    $dateMakingPosterDissemination = date ("Y-m-d H:i:s", $dateMakingPosterDissemination);
    
    $dateDeliveryDateAdministrativeOffices = strtotime ($_POST['dateDeliveryDateAdministrativeOffices']);
    $dateDeliveryDateAdministrativeOffices = date ("Y-m-d H:i:s", $dateDeliveryDateAdministrativeOffices);
    
    $dateCreationOpeningRegistrationsPlatformCourse = strtotime ($_POST['dateCreationOpeningRegistrationsPlatformCourse']);
    $dateCreationOpeningRegistrationsPlatformCourse = date ("Y-m-d H:i:s", $dateCreationOpeningRegistrationsPlatformCourse);
    
    $dateSendCallsBeforeValidating = strtotime ($_POST['dateSendCallsBeforeValidating']);
    $dateSendCallsBeforeValidating = date ("Y-m-d H:i:s", $dateSendCallsBeforeValidating);
    
    $dateDeliveryConcentratesCertificatesValidation = strtotime ($_POST['dateDeliveryConcentratesCertificatesValidation']);
    $dateDeliveryConcentratesCertificatesValidation = date ("Y-m-d H:i:s", $dateDeliveryConcentratesCertificatesValidation);
    
    $dateFolderDeliveryDate = strtotime ($_POST['dateFolderDeliveryDate']);
    $dateFolderDeliveryDate = date ("Y-m-d H:i:s", $dateFolderDeliveryDate);
    
    $dateConcentratesRecordsValidation = strtotime ($_POST['dateConcentratesRecordsValidation']);
    $dateConcentratesRecordsValidation = date ("Y-m-d H:i:s", $dateConcentratesRecordsValidation);
    
    $dateIntegratedFolderDelivery = strtotime ($_POST['dateIntegratedFolderDelivery']);
    $dateIntegratedFolderDelivery = date ("Y-m-d H:i:s", $dateIntegratedFolderDelivery);
    
    $dateEmptyDataIntoExcelFile = strtotime ($_POST['dateEmptyDataIntoExcelFile']);
    $dateEmptyDataIntoExcelFile = date ("Y-m-d H:i:s", $dateEmptyDataIntoExcelFile);
    
    $dateClearInformationFromTrained = strtotime ($_POST['dateClearInformationFromTrained']);
    $dateClearInformationFromTrained = date ("Y-m-d H:i:s", $dateClearInformationFromTrained);
    
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
    event_technology_manager_manager, event_manager_social_service, event_event_requester, event_input_portfolio_manager,
    event_name_magistrate, event_date_event_date, event_date_folder_assignment_date, event_date_delivery_date_administrative_letters_signature,
    event_date_acknowledgment_delivery_date_signature, event_date_making_poster_dissemination, event_date_delivery_date_administrative_offices,
    event_date_creation_opening_registrations_platform_course, event_date_send_calls_before_validating, event_date_delivery_concentrates_certificates_validation,
    event_date_folder_delivery_date, event_date_concentrates_records_validation, event_date_integrated_folder_delivery, event_date_empty_data_into_excel_file,
    event_date_clear_information_from_trained, event_last_change_date)';
    $result = $objectEvent->insertEvent ($columns, $data);
    echo $result;
  }
  
  
  # GET ALL event logistic via AJAX for DataTable
  if (isset($_GET['getAllDataEvent'])) {
    ControllerEventLogistic::getAllEventsLogisticForDataTables ();
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
  class ControllerEventLogistic
  {
    private ModelEventLogistic $model;
    
    /**
     * User Controller Constructor
     */
    function __construct ()
    {
      $this->model = new ModelEventLogistic();
    }
    
    function insertEvent ($dataColumns, $data): int|bool
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
    
    function getAllEvents (): int|bool|array
    {
      return $this->model->getAll ();
    }
    
    function getById ($id): int|bool|array
    {
      return $this->model->getById ($id);
    }
    
    /**
     * This method return the total number of rows of the table
     *
     * @return array|bool|int
     */
    function getAllEventsTotal (): int|bool|array
    {
      return $this->model->getAllTotal ();
    }
    
    
    function getAllEventsTotalWithUserId ($id): bool|int
    {
      return $this->model->getAllEventsTotalWithUserId ($id);
    }
    
    function getAllEventsWithId ($id): bool|array
    {
      return $this->model->getAllEventsWithId ($id);
    }
    
    /***
     * Return Json object with the data for users table on DataTables
     *
     * @return void
     */
    static function getAllEventsLogisticForDataTables (): void
    {
      $eventLogisticObject = new ModelEventLogistic();
      $eventObject = new ModelEvent();
      // $userNameObject = new ControllerUser();
      // $activityObject = new ControllerActivities();
      // $modalityObject = new ControllerModality();
      
      $queryResult = $eventLogisticObject->getAllEventsLogisticDataTableFormat ();
      $data_array = array();
      
      # The data is sorted to create a new array
      while ($data = $queryResult->fetch_object ()) {
        $data_array[] = array(
          $data->event_logistic_id,
          $data->event_logistic_event_id,
          $data->event_logistic_personal_rtd,
          $data->event_logistic_personal_rtss,
          $data->event_logistic_personal_se,
          $data->event_logistic_personal_rc,
          $data->event_logistic_auditorium_chairs,
          $data->event_logistic_auditorium_presidium,
          $data->event_logistic_auditorium_platform_data,
          $data->event_logistic_auditorium_id_data,
          $data->event_logistic_auditorium_staff_compliance,
          $data->event_logistic_auditorium_prepare_attendance_list,
          $data->event_logistic_auditorium_verify_support_staff,
          $data->event_logistic_auditorium_attendance_link,
          $data->event_logistic_auditorium_attendace_password_link,
          $data->event_logistic_auditorium_lift_tablecloths,
          $data->event_logistic_auditorium_personifiers,
          $data->event_logistic_date_creation
        );
      }
      
      # Add name [1]
      foreach ($data_array as $index => $item) {
        $id = $data_array[$index][1];
        $dataEvent = $eventObject->getById ($id);
        $data_array[$index][1] = $dataEvent['event_name_of_activity'];
      }
      
      
      # Add name [2]
      foreach ($data_array as $index => $item) {
        for ($i=2; $i<=16; $i++){
          if($data_array[$index][$i] == '0'){
            $data_array[$index][$i] = 'No cumplió';
          }else {
            $data_array[$index][$i] = 'Si cumplió';
          }
        }
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