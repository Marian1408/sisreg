<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the document list screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>


<!-- Header /-->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Oficios</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="nav-icon fas fa-solid fa-file-signature"></i>
        </ol>
      </div>

    </div>
  </div>
</section>

<!-- Content /-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Content -->
        <div class="card card-outline card-olive" style="border-top-color: #0e5b44">

          <!-- Card header -->
          <div class="card-header">

            <!-- Subtitle -->
            <h5 class="card-title">
              <i class="nav-icon fas fa-solid fa-file-signature"></i>
              <b>Lista de oficios</b>
            </h5>

            <!-- Card tools -->
            <div class="card-tools">

              <!-- Refresh button -->
              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html"
                      data-source-selector="#card-refresh-content" data-load-on-init="false"
                      title="Actualizar">
                <i class="fas fa-sync-alt"></i>
              </button>

              <!-- Maximize button -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"
                      title="Maximizar"><i class="fas fa-expand"></i>
              </button>

            </div>

          </div>

          <!-- Card body /-->
          <div class="card-body">

            <!-- Craft 1 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Comunicación Social</h5>
              <a href="documentComunicacionSocial">
                <p>Redactar formato del oficio para "Comunicación Social"</p>
              </a>
            </div>

            <!-- Craft 2 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Espacio de Estacionamiento</h5>
              <a href="documentEspacioDeEstacionamiento">
                <p>Redactar formato del oficio para "Espacio de Estacionamiento"</p>
              </a>
            </div>

            <!-- Craft 3 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Invitación Foráneos</h5>
              <a href="documentInvitacionForaneos">
                <p>Redactar formato del oficio de "Invitación Foráneos"</p>
              </a>
            </div>

            <!-- Craft 4 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Invitación Presencial</h5>
              <a href="documentInvitacionPresencial">
                <p>Redactar formato del oficio de "Invitación Presencial"</p>
              </a>
            </div>

            <!-- Craft 5 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Invitación Presencial y Virtual</h5>
              <a href="documentInvitacionPresencialYvirtual">
                <p>Redactar formato del oficio de "Invitación Presencial y Virtual"</p>
              </a>
            </div>

            <!-- Craft 6 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Presidenta</h5>
              <a href="documentPresidenta">
                <p>Redactar formato del oficio de "Presidenta"</p>
              </a>
            </div>

            <!-- Craft 7 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Presidium</h5>
              <a href="documentPresidium">
                <p>Redactar formato del oficio de "Presidium"</p>
              </a>
            </div>

            <!-- Craft 8 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Presidium Invitación a dar Palabras de Síntesis Curricular</h5>
              <a href="documentPresidiumInvitacionAdarPalabrasSintesisCurricular">
                <p>Redactar formato del oficio de "Presidium Invitación a dar Palabras de Síntesis Curricular"</p>
              </a>
            </div>

            <!-- Craft 9 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Presidium Invitación a dar Palabras</h5>
              <a href="documentPresidiumInvitacionDarPalabras">
                <p>Redactar formato del oficio de "Presidium Invitación a dar Palabras"</p>
              </a>
            </div>

            <!-- Craft 10 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Presidium Solo Acompañar</h5>
              <a href="documentPresidiumSoloAcompanar">
                <p>Redactar formato del oficio de "Presidium Solo Acompañar"</p>
              </a>
            </div>

            <!-- Craft 11 /-->
            <div class="callout callout-success">
              <h5><i class="nav-icon fas fa-solid fa-file-signature"></i> Oficio de Tecnología</h5>
              <a href="documentTecnologia">
                <p>Redactar formato del oficio de "Tecnología"</p>
              </a>
            </div>

          </div>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_FULL_NAME; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>

</section>
