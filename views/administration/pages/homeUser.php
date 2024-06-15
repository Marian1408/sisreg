<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the boss admin screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    
    <!-- Image logo -->
    <div style="margin: 20px; text-align: center;">
      <img src="views/resources/dist/img/logo_SISREG_.png" alt="Photo">
    </div>
    
    <div class="row mb-2">
      
      <!-- Title /-->
      <div class="col-sm-6">
        <h1>Bienvenido a la administración
          <b><?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_lastname']; ?></b></h1>
      </div>
      
      <!-- Icon /-->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa-solid fa-sliders"></i>
        </ol>
      </div>
    
    </div>
  </div>
</div>

<!-- Content /-->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        
        <div class="card card-info card-outline sisreg-card-outline">
          
          <!-- Header card /-->
          <div class="card-header">
            <h5 class="card-title">Subtítulo 1</h5 class="card-title">
            
            <!-- Card buttons -->
            <div class="card-tools">
              
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
            
            </div>
          
          </div>
          
          <!-- Body card -->
          <div class="card-body">
            
            <h5 class="card-text">Subtitle 2</h5>
            
            <p class="card-text">
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
              of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
              desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
              search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
              evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
            
            <hr>
            <p class="card-text">
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
              of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
              desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
              search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
              evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
          
          
          </div>
          
          
          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em>Ver. <?php echo SYSTEM_VERSION; ?></em>
          </div>
        
        </div>
      
      </div>
    </div>
  </div>
</div>




