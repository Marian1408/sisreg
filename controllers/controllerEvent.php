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
    
    $dateTimeVariable = date("Y-m-d H:i:s");
    
    $objectEvent = new ControllerEvent();
    
    $data = " ('$inputNameOfActivity', '$selectActivityType1', '$selectActivityType2', '$selectActivityType3', '$selectModality', '$action1ActionNumbers', '$action1TrainedPeople', '$action1NumberHours', '$action2ActionNumbers', '$action2TrainedPeople', '$action2NumberHours', '$action3ActionNumbers', '$action3TrainedPeople', '$action3NumberHours', '$action4ActionNumbers', '$action4TrainedPeople', '$action4NumberHours', '$action5ActionNumbers', '$action5TrainedPeople', '$action5NumberHours', '$action6ActionNumbers', '$action6TrainedPeople', '$action6NumberHours', '$action7ActionNumbers', '$action7TrainedPeople', '$action7NumberHours', '$action8ActionNumbers', '$action8TrainedPeople', '$action8NumberHours', '$action9ActionNumbers', '$action9TrainedPeople', '$action9NumberHours', '$action10ActionNumbers', '$action10TrainedPeople', '$action10NumberHours', '$dateEventDate', '$dateFolderAssignmentDate', '$dateDeliveryDateAdministrativeLettersSignature', '$dateAcknowledgmentDeliveryDateSignature', '$dateMakingPosterDissemination', '$dateDeliveryDateAdministrativeOffices', '$dateCreationOpeningRegistrationsPlatformCourse', '$dateSendCallsBeforeValidating', '$dateDeliveryConcentratesCertificatesValidation', '$dateFolderDeliveryDate', '$dateConcentratesRecordsValidation', '$dateIntegratedFolderDelivery', '$dateEmptyDataIntoExcelFile', '$dateClearInformationFromTrained', '$selectTechnologyManagerManager', '$selectManagerSocialService', '$inputEventRequester', '$selectPortfolioManager', '$inputNameMagistrate', '$dateTimeVariable') ";
    $columns = '(event_name_of_activity, event_activity_type1, event_activity_type2, event_activity_type3, event_modality, event_action_1_action_numbers, event_action_1_trained_people, event_action_1_number_hours, event_action_2_action_numbers, event_action_2_trained_people, event_action_2_number_hours, event_action_3_action_numbers, event_action_3_trained_people, event_action_3_number_hours, event_action_4_action_numbers, event_action_4_trained_people, event_action_4_number_hours, event_action_5_action_numbers, event_action_5_trained_people, event_action_5_number_hours, event_action_6_action_numbers, event_action_6_trained_people, event_action_6_number_hours, event_action_7_action_numbers, event_action_7_trained_people, event_action_7_number_hours, event_action_8_action_numbers, event_action_8_trained_people, event_action_8_number_hours, event_action_9_action_numbers, event_action_9_trained_people, event_action_9_number_hours, event_action_10_action_numbers, event_action_10_trained_people, event_action_10_number_hours, event_technology_manager_manager, event_manager_social_service, event_event_requester, event_input_portfolio_manager, event_name_magistrate, event_date_event_date, event_date_folder_assignment_date, event_date_delivery_date_administrative_letters_signature, event_date_acknowledgment_delivery_date_signature, event_date_making_poster_dissemination, event_date_delivery_date_administrative_offices, event_date_creation_opening_registrations_platform_course, event_date_send_calls_before_validating, event_date_delivery_concentrates_certificates_validation,  event_date_folder_delivery_date, event_date_concentrates_records_validation, event_date_integrated_folder_delivery, event_date_empty_data_into_excel_file, event_date_clear_information_from_trained, event_last_change_date)';
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
  
  
  # GET ALL users via AJAX for DataTable
  if (isset($_GET['getAllData'])) {
    ControllerUser::getAllUsersForDataTables ();
  }
  
  # DELETE user via Ajax for DataTable
  if (isset($_POST['idUser'])) {
    $userObject = new ControllerUser();
    $userObject->deleteUserById ($_POST['idUser']);
  }
  
  
  
  function checkActions ($action)
  {
    if (!empty($action)){
     return $action;
    }else{
     return '0';
    }
   
  }

  
  function action2 (): void
  {
    if (!empty($_POST['action2ActionNumbers'])){
      $action2ActionNumbers = $_POST['action2ActionNumbers'];
    }else{
      $action2ActionNumbers = '0';
    }
    if (!empty($_POST['action2TrainedPeople'])){
      $action2TrainedPeople = $_POST['action2TrainedPeople'];
    }else{
      $action2TrainedPeople = '0';
    }
    if (!empty($_POST['action2NumberHours'])){
      $action2NumberHours = $_POST['action2NumberHours'];
    }else{
      $action2NumberHours = '0';
    }
  }
  
  function action3 (): void
  {
    if (!empty($_POST['action3ActionNumbers'])){
      $action3ActionNumbers = $_POST['action3ActionNumbers'];
    }else{
      $action3ActionNumbers = '0';
    }
    if (!empty($_POST['action3TrainedPeople'])){
      $action3TrainedPeople = $_POST['action3TrainedPeople'];
    }else{
      $action3TrainedPeople = '0';
    }
    if (!empty($_POST['action3NumberHours'])){
      $action3NumberHours = $_POST['action3NumberHours'];
    }else{
      $action3NumberHours = '0';
    }
  }
  
  function action4 (): void
  {
    if (!empty($_POST['action4ActionNumbers'])){
      $action4ActionNumbers = $_POST['action4ActionNumbers'];
    }else{
      $action4ActionNumbers = '0';
    }
    if (!empty($_POST['action4TrainedPeople'])){
      $action4TrainedPeople = $_POST['action4TrainedPeople'];
    }else{
      $action4TrainedPeople = '0';
    }
    if (!empty($_POST['action4NumberHours'])){
      $action4NumberHours = $_POST['action4NumberHours'];
    }else{
      $action4NumberHours = '0';
    }
  }
  
  function action5 (): void
  {
    if (!empty($_POST['action5ActionNumbers'])){
      $action5ActionNumbers = $_POST['action5ActionNumbers'];
    }else{
      $action5ActionNumbers = '0';
    }
    if (!empty($_POST['action5TrainedPeople'])){
      $action5TrainedPeople = $_POST['action5TrainedPeople'];
    }else{
      $action5TrainedPeople = '0';
    }
    if (!empty($_POST['action5NumberHours'])){
      $action5NumberHours = $_POST['action5NumberHours'];
    }else{
      $action5NumberHours = '0';
    }
  }
  
  function action6 (): void
  {
    if (!empty($_POST['action6ActionNumbers'])){
      $action6ActionNumbers = $_POST['action6ActionNumbers'];
    }else{
      $action6ActionNumbers = '0';
    }
    if (!empty($_POST['action6TrainedPeople'])){
      $action6TrainedPeople = $_POST['action6TrainedPeople'];
    }else{
      $action6TrainedPeople = '0';
    }
    if (!empty($_POST['action6NumberHours'])){
      $action6NumberHours = $_POST['action6NumberHours'];
    }else{
      $action6NumberHours = '0';
    }
  }
  
  function action7 (): void
  {
    if (!empty($_POST['action7ActionNumbers'])){
      $action7ActionNumbers = $_POST['action7ActionNumbers'];
    }else{
      $action7ActionNumbers = '0';
    }
    if (!empty($_POST['action7TrainedPeople'])){
      $action7TrainedPeople = $_POST['action7TrainedPeople'];
    }else{
      $action7TrainedPeople = '0';
    }
    if (!empty($_POST['action7NumberHours'])){
      $action7NumberHours = $_POST['action7NumberHours'];
    }else{
      $action7NumberHours = '0';
    }
  }
  
  function action8 (): void
  {
    if (!empty($_POST['action8ActionNumbers'])){
      $action8ActionNumbers = $_POST['action8ActionNumbers'];
    }else{
      $action8ActionNumbers = '0';
    }
    if (!empty($_POST['action8TrainedPeople'])){
      $action8TrainedPeople = $_POST['action8TrainedPeople'];
    }else{
      $action8TrainedPeople = '0';
    }
    if (!empty($_POST['action8NumberHours'])){
      $action8NumberHours = $_POST['action8NumberHours'];
    }else{
      $action8NumberHours = '0';
    }
  }
  
  function action9 (): void
  {
    if (!empty($_POST['action9ActionNumbers'])){
      $action9ActionNumbers = $_POST['action9ActionNumbers'];
    }else{
      $action9ActionNumbers = '0';
    }
    if (!empty($_POST['action9TrainedPeople'])){
      $action9TrainedPeople = $_POST['action9TrainedPeople'];
    }else{
      $action9TrainedPeople = '0';
    }
    if (!empty($_POST['action9NumberHours'])){
      $action9NumberHours = $_POST['action9NumberHours'];
    }else{
      $action9NumberHours = '0';
    }
  }
  
  function action10 (): void
  {
    if (!empty($_POST['action10ActionNumbers'])){
      $action10ActionNumbers = $_POST['action10ActionNumbers'];
    }else{
      $action10ActionNumbers = '0';
    }
    if (!empty($_POST['action10TrainedPeople'])){
      $action10TrainedPeople = $_POST['action10TrainedPeople'];
    }else{
      $action10TrainedPeople = '0';
    }
    if (!empty($_POST['action10NumberHours'])){
      $action10NumberHours = $_POST['action10NumberHours'];
    }else{
      $action10NumberHours = '0';
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