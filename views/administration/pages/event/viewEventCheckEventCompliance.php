<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the add new event screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  # Files required
  require_once ('controllers/controllerActivities.php');
  require_once ('controllers/controllerModality.php');
  
  $objectModality = new ControllerModality();
  $objectActivities = new ControllerActivities('activities1', '1');
  
  $modalities = $objectModality->getAllModality ();
  
  $activities1 = $objectActivities->getAllActivities ('1');
  $activities2 = $objectActivities->getAllActivities ('2');
  $activities3 = $objectActivities->getAllActivities ('3');

?>

<!-- Header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Logística el día del evento</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 sisreg-icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa-regular fa-square-check"></i>
        </ol>
      </div>

    </div>
  </div>
</div>

<!-- Logistics prior to the event /-->
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">

        <div class="card card-info card-outline sisreg-card-outline">

          <!-- Header card /-->
          <div class="card-header" style="background: #062f1d; border-radius: 0px !important;">
            <h5 class="card-title" style="color:white;">Cumplimiento de la Logística del Evento</h5>

            <!-- Card buttons -->
            <div class="card-tools">

              <!-- Clean form button -->
              <button type="button"
                      class="btn btn-tool"
                      data-card-widget="card-refresh"
                      data-source="userAddNew"
                      data-source-selector="#card-refresh-content"
                      data-load-on-init="false"
                      onclick="resetForm()"
                      title="Limpiar formulario">
                <i class="fa-solid fa-eraser"></i>
              </button>

              <!-- Minimize button -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse"
                      title="<?php echo 'Minimizar'; ?>">
                <i class="fas fa-minus"></i>
              </button>

              <!-- Maximize button -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"
                      title="<?php echo 'Maximizar'; ?>">
                <i class="fas fa-expand"></i>
              </button>

              <!-- Help show button -->
              <button type="button"
                      class="btn btn-tool"
                      onclick="showHelpForm()"
                      id="helpToolButtonInactive"
                      title="Mostrar ayuda">
                <i class="fas fa-question"></i>
              </button>

              <!-- Help hidden button -->
              <button type="button"
                      class="btn btn-tool"
                      onclick="hiddenHelpForm()"
                      id="helpToolButtonActive"
                      style="display: none"
                      title="Ocultar ayuda">
                <i class="fa-solid fa-question fa-shake"></i>
              </button>

            </div>

          </div>

          <!-- Body card -->
          <div class="card-body">

            <div class="row">


              <!-- Personal check card -->
              <div class="col-md-12 mb-auto">
                <div class="card card-primary card-outline sisreg-card-outline cltm-height">

                  <!-- Card header -->
                  <div class="card-header">

                    <!-- Activity data title -->
                    <h5 class="card-text">
                      <i class="fa-solid fa-list-check"></i>
                      Del personal
                    </h5>

                  </div>

                  <!-- Card body /-->
                  <div class="card-body">

                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Responsable de Tecnología (Directivo)</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Responsable de Tecnología (Servicio Social)</label>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Solicitante del evento</label>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Responsable de carpeta</label>
                      </div>
                    </div>


               

                  </div>

                </div>
              </div>


            </div>

          </div>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_VERSION; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>




<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>

<!-- jquery-validation -->
<script src="views/resources/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="views/resources/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- InputMask -->
<script src="views/resources/plugins/moment/moment.min.js"></script>
<script src="views/resources/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="views/resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="views/resources/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="views/resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- bs-custom-file-input -->
<script src="views/resources/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

<script src="views/resources/dist/js/mainThemeControl.js"></script>
<script src="views/resources/dist/js/modalityControl.js"></script>
<script src="views/resources/dist/js/activityTypeControl.js"></script>

<script>

  //Date picker dateWarrantyPurchaseDate
  $('#dateWarrantyPurchaseDate').datetimepicker({
    format: 'L'
  });

  //Date picker dateWarrantyPurchaseDate
  $('#dateWarrantyExpirationDate').datetimepicker({
    format: 'L'
  });


  /**
   * Reset all values of the form
   */
  function resetForm() {
    bsCustomFileInput.destroy();
    clearInputFile('customFile');
    $("#imageAsset").attr('src', 'views/resources/dist/img/products/no_image.jpg');
    resetAddNewAssetForm();
  }

  /**
   * Reset all values inputs of the form
   */
  function resetAddNewAssetForm() {
    $('#inputGeneralName').val('');
    $('#textAreaGeneralDescription').val('');

    $('#inputInventoryLocation').val('');
    $('#inputInventoryAssignment').val('');
    $('#inputInventoryAmount').val('');
    $('#inputInventoryPrice').val('');
    $('#textAreaInventoryAdditionalInformation').val('');

    $('#inputPropertiesColor').val('');

    $('#inputDetailsBrand').val('');
    $('#inputDetailsModel').val('');
    $('#inputDetailsSerialNumber').val('');
    $('#inputDetailsIdNumber').val('');

    $('#datepickerWarrantyPurchaseDate').val('');
    $('#selectWarrantyCondition').val('');
    $('#selectWarrantyWarrantyStatus').val('');
    $('#datepickerWarrantyExpirationDate').val('');

    $('#selectCategories').val('');

    $('#customFile').val('');
  }

  /**
   * Shows control help and hides the "Hide Help" tool button
   */
  function showHelpForm() {
    document.getElementById("inputGeneralNameHelp").style.display = 'inline';
    document.getElementById("textAreaGeneralDescriptionHelp").style.display = 'inline';

    document.getElementById("inputInventoryLocationHelp").style.display = 'inline';
    document.getElementById("inputInventoryAssignmentHelp").style.display = 'inline';
    document.getElementById("inputInventoryAmountHelp").style.display = 'inline';
    document.getElementById("inputInventoryPriceHelp").style.display = 'inline';
    document.getElementById("textAreaInventoryAdditionalInformationHelp").style.display = 'inline';

    document.getElementById("inputPropertiesColorHelp").style.display = 'inline';

    document.getElementById("inputDetailsBrandHelp").style.display = 'inline';
    document.getElementById("inputDetailsModelHelp").style.display = 'inline';
    document.getElementById("inputDetailsSerialNumberHelp").style.display = 'inline';
    document.getElementById("inputDetailsIdNumberHelp").style.display = 'inline';

    document.getElementById("datepickerWarrantyPurchaseDateHelp").style.display = 'block';
    document.getElementById("selectWarrantyConditionHelp").style.display = 'inline';
    document.getElementById("selectWarrantyWarrantyStatusHelp").style.display = 'inline';
    document.getElementById("datepickerWarrantyExpirationDateHelp").style.display = 'block';

    document.getElementById("imageAssetHelp").style.display = 'block';
    document.getElementById("textAreaImageDescriptionHelp").style.display = 'block';
    document.getElementById("selectCategoriesHelp").style.display = 'inline';
    document.getElementById("customFileHelp").style.display = 'inline';


    document.getElementById("helpToolButtonActive").style.display = 'inline';
    document.getElementById("helpToolButtonInactive").style.display = 'none';
  }

  /**
   * Hides control help and hides the "Show Help" tool button.
   */
  function hiddenHelpForm() {
    document.getElementById("inputGeneralNameHelp").style.display = 'none';
    document.getElementById("textAreaGeneralDescriptionHelp").style.display = 'none';

    document.getElementById("inputInventoryLocationHelp").style.display = 'none';
    document.getElementById("inputInventoryAssignmentHelp").style.display = 'none';
    document.getElementById("inputInventoryAmountHelp").style.display = 'none';
    document.getElementById("inputInventoryPriceHelp").style.display = 'none';
    document.getElementById("textAreaInventoryAdditionalInformationHelp").style.display = 'none';

    document.getElementById("inputPropertiesColorHelp").style.display = 'none';

    document.getElementById("inputDetailsBrandHelp").style.display = 'none';
    document.getElementById("inputDetailsModelHelp").style.display = 'none';
    document.getElementById("inputDetailsSerialNumberHelp").style.display = 'none';
    document.getElementById("inputDetailsIdNumberHelp").style.display = 'none';

    document.getElementById("datepickerWarrantyPurchaseDateHelp").style.display = 'block';
    document.getElementById("selectWarrantyConditionHelp").style.display = 'none';
    document.getElementById("selectWarrantyWarrantyStatusHelp").style.display = 'none';
    document.getElementById("datepickerWarrantyExpirationDateHelp").style.display = 'none';

    document.getElementById("imageAssetHelp").style.display = 'none';
    document.getElementById("textAreaImageDescriptionHelp").style.display = 'none';
    document.getElementById("selectCategoriesHelp").style.display = 'none';
    document.getElementById("customFileHelp").style.display = 'none';

    document.getElementById("helpToolButtonActive").style.display = 'none';
    document.getElementById("helpToolButtonInactive").style.display = 'inline';
  }

  // Conversion from MXN to USD
  $('#inputInventoryPriceUSD').on('input', function (e) {
    let priceUSD = $('#inputInventoryPriceUSD').val();
    let dollarValue = getCookieValue('dollarValue');
    let convertMXN = (priceUSD * dollarValue).toFixed(3);
    let value1 = $('#inputInventoryPriceMXN').val(convertMXN);
  });

  // Conversion from USD to MXN
  $('#inputInventoryPriceMXN').on('input', function (e) {
    let priceMXN = $('#inputInventoryPriceMXN').val();
    let dollarValue = getCookieValue('dollarValue');
    let convertUSD = (priceMXN / dollarValue).toFixed(3);
    let value2 = $('#inputInventoryPriceUSD').val(convertUSD);
  });

</script>