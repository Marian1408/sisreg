<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the base screen. This view is for tests.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title /-->
      <div class="col-sm-6">
        <h1>ACERCA DE..</h1>
      </div>

      <!-- Icon /-->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa fa-circle-info"></i>
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

        <div class="card card-info card-outline">

          <!-- Header card /-->
          <div class="card-header">
            <h5 class="card-title">Subtítulo</h5 class="card-title">

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

            <h5 class="card-text">Acerca del sistema</h5>

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

            <h1 class="display-1">Display 1</h1>
            <h1 class="display-2">Display 2</h1>
            <h1 class="display-3">Display 3</h1>
            <h1 class="display-4">Display 4</h1>

            <h1>h1. Bootstrap heading</h1>
            <h2>h2. Bootstrap heading</h2>
            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>

            <p>You can use the mark tag to
              <mark>highlight</mark>
              text.
            </p>
            <p>
              <del>This line of text is meant to be treated as deleted text.</del>
            </p>
            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
            <p>
              <ins>This line of text is meant to be treated as an addition to the document.</ins>
            </p>
            <p><u>This line of text will render as underlined.</u></p>
            <p><small>This line of text is meant to be treated as fine print.</small></p>
            <p><strong>This line rendered as bold text.</strong></p>
            <p><em>This line rendered as italicized text.</em></p>

          </div>



          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right">
            <em>Ver. <?php echo SYSTEM_VERSION; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

