// Initializing Date and Time Picker Controls
$('#dateEventDate').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateFolderAssignmentDate').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateDeliveryDateAdministrativeLettersSignature').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateAcknowledgmentDeliveryDateSignature').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateMakingPosterDissemination').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateDeliveryDateAdministrativeOffices').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateCreationOpeningRegistrationsPlatformCourse').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateSendCallsBeforeValidating').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateDeliveryConcentratesCertificatesValidation').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateFolderDeliveryDate').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});

$('#dateConcentratesRecordsValidation').datetimepicker({format: 'DD/MM/YYYY HH:mm',icons: {time: 'far fa-clock'}});
$('#dateIntegratedFolderDelivery').datetimepicker({ format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateEmptyDataIntoExcelFile').datetimepicker({format: 'DD/MM/YYYY HH:mm', icons: {time: 'far fa-clock'}});
$('#dateClearInformationFromTrained').datetimepicker({  format: 'DD/MM/YYYY HH:mm',  icons: {time: 'far fa-clock'}});


/**
 * Reset all values inputs of the "Logistics Prior Event" form
 */
function resetLogisticsPriorEvent() {

  $('#inputNameOfActivity').val('');
  $('#selectActivityType1').val('');
  $('#selectActivityType2').val('');
  $('#selectActivityType3').val('');
  $('#selectModality').val('');

  $('#action1ActionNumbers').val('');
  $('#action1TrainedPeople').val('');
  $('#action1NumberHours').val('');
  $('#action2ActionNumbers').val('');
  $('#action2TrainedPeople').val('');
  $('#action2NumberHours').val('');
  $('#action3ActionNumbers').val('');
  $('#action3TrainedPeople').val('');
  $('#action3NumberHours').val('');
  $('#action4ActionNumbers').val('');
  $('#action4TrainedPeople').val('');
  $('#action4NumberHours').val('');
  $('#action5ActionNumbers').val('');
  $('#action5TrainedPeople').val('');
  $('#action5NumberHours').val('');
  $('#action6ActionNumbers').val('');
  $('#action6TrainedPeople').val('');
  $('#action6NumberHours').val('');
  $('#action7ActionNumbers').val('');
  $('#action7TrainedPeople').val('');
  $('#action7NumberHours').val('');
  $('#action8ActionNumbers').val('');
  $('#action8TrainedPeople').val('');
  $('#action8NumberHours').val('');
  $('#action9ActionNumbers').val('');
  $('#action9TrainedPeople').val('');
  $('#action9NumberHours').val('');
  $('#action10ActionNumbers').val('');
  $('#action10TrainedPeople').val('');
  $('#action10NumberHours').val('');

  $('#inputTechnologyManagerManager').val('');
  $('#inputManagerSocialService').val('');
  $('#inputEventRequester').val('');
  $('#inputPortfolioManager').val('');
  $('#inputNameMagistrate').val('');

  $("#dateEventDate").find("input").val('');
  $("#dateFolderAssignmentDate").find("input").val('');
  $("#dateDeliveryDateAdministrativeLettersSignature").find("input").val('');
  $("#dateAcknowledgmentDeliveryDateSignature").find("input").val('');
  $("#dateMakingPosterDissemination").find("input").val('');
  $("#dateDeliveryDateAdministrativeOffices").find("input").val('');
  $("#dateCreationOpeningRegistrationsPlatformCourse").find("input").val('');
  $("#dateSendCallsBeforeValidating").find("input").val('');
  $("#dateDeliveryConcentratesCertificatesValidation").find("input").val('');
  $("#dateFolderDeliveryDate").find("input").val('');

}

/**
 * Reset all values inputs of the "In the Next Five Days After the Event" form
 */
function resetNextFiveDays() {

  $('#dateConcentratesRecordsValidation').find("input").val('');
  $('#dateIntegratedFolderDelivery').find("input").val('');
  $('#dateEmptyDataIntoExcelFile').find("input").val('');
  $('#dateClearInformationFromTrained').find("input").val('');

}