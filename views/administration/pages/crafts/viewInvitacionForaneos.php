<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show "Invitación foráneos" craft screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */

?>

<!-- Header content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Oficio</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa-solid fa-file-signature"></i>
        </ol>
      </div>

    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Content -->
        <div class="card card-outline card-lightblue" style="border-top-color: #0e5b44">

          <!-- Card header -->
          <div class="card-header">

            <!-- Subtitle -->
            <h5 class="card-title" style="font-size: 1.25rem;">
              <i class="fa-solid fa-file-signature"></i>
              Invitación Foráneos</h5>

            <!-- Card tools -->
            <div class="card-tools">

              <!-- Minimize button -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse"
                      title="Minimizar">
                <i class="fas fa-minus"></i>
              </button>

              <!-- Refresh button -->
              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html"
                      data-source-selector="#card-refresh-content" data-load-on-init="false" onclick="resetCraft()"
                      title="Actualizar">
                <i class="fas fa-sync-alt"></i>
              </button>

              <!-- Maximize button -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"
                      title="Maximizar"><i class="fas fa-expand"></i>
              </button>

            </div>

          </div>

          <!-- Card body (table) -->
          <div class="card-body">
            <p>Este formato incluye secciones clave para referirse a los oficios y proporciona un marco claro y conciso
              para presentar la información relevante. Puedes adaptarlo según las necesidades específicas de tu
              comunicación oficial.
            </p>

            <hr>
            
            <textarea id="summernote">
                <div style="padding-left:80px;padding-right:80px;">
                    <div style="padding:30px;">
                        <div class="row">
                            <div class="col-12" style="text-align:left;">
                                <p><img class="image_resized" style="opacity:.3;width:60%;" src="views/resources/dist/img/logo_sisreg_.png" alt="Imagen del poder judicials y Escuela Judicial"></p>
                            </div>
                        </div>
                        <p style="margin:0cm;text-align:right;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:10.0pt;" lang="ES"></span><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:10.0pt;" lang="ES"></span><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:10.0pt;" lang="ES"></span></strong></span></p>
                        <p style="line-height:14.0pt;margin:0cm 0cm 0cm -7.1pt;text-align:right;">&nbsp;</p>
                        <p style="line-height:14.0pt;margin:0cm 0cm 0cm -7.1pt;text-align:right;">&nbsp;</p>
                        <p style="line-height:14.0pt;margin:0cm 0cm 0cm -7.1pt;text-align:right;">&nbsp;</p>
                        <p style="line-height:14.0pt;margin:0cm 0cm 0cm -7.1pt;text-align:right;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr">Oficio No. _______</span></span></p>
                        <p style="line-height:14.0pt;margin:0cm 0cm 0cm -7.1pt;text-align:right;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr">Asunto: ________</span></span></p>
                        <p style="line-height:14.0pt;margin:0cm 0cm 0cm -7.1pt;tab-stops:7.1pt;text-align:right;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr">Xalapa-Enríquez, Ver., ___ de ____ de 202__</span></span><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;"></span></strong></span></p>
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;sans-serif;"></span></strong></span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;"></span></strong></span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;"></span></strong></span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;"></span></strong></span></p>
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong>&nbsp;</strong></span></p>


                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;"></span></strong></span></p>
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;tab-stops:136.5pt;text-align:justify;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:11pt;"><span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></span></p>
                        <p style="line-height:12.0pt;margin:0cm -21.25pt 0cm -7.1pt;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;"></span></strong></span></p>
                        <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span>
                            
                            <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"> <span lang="ES" dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El Poder Judicial del Estado mediante la Escuela Judicial del Estado de Veracruz, llevará a cabo la capacitación<strong>modalidad ____________ </strong>denominada: “_____________________________”, la cual se efectuará el _____<strong>de</strong> ________ del año en curso,<strong>a las </strong> __:__ <strong>horas</strong>a través de la aplicación Videoconferencia Telmex o por la página de Facebook del Poder Judicial del Estado de Veracruz.

                            </span></p><br><br>
                                                        <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"></span>Dicha capacitación tiene como objeto: __________________________________________________

                            </span></p> <br><br>
                            <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span>&nbsp;</span><span lang="ES" dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por lo anterior, se le hace una cordial <strong>INVITACIÓN</strong> a usted y al personal del juzgado para participar en dicha capacitación, debiendo registrar su inscripción en el link, <strong>https://sistemas.pjeveracruz.gob.mx/EscuelaJudicial/login</strong>, con fecha de inicio de <strong>registro el _____ de _____ a las __:__ horas</strong> y con fecha de cierre ___ de _____ a las __:___ horas, o hasta agotar la disponibilidad de espacios que otorga la plataforma. Para ingresar a la capacitación será mediante la aplicación Videoconferencias Telmex, el día y en el horario señalado, con el número de <strong>ID y contraseña que estará disponible en su plataforma de cursos dos horas antes del evento, o por la página de Facebook del Poder Judicial del Estado de Veracruz, según sea el caso.</strong> Para cualquier duda o aclaración deberán comunicarse al teléfono (228) 8422800 extensiones <strong>34113, 34114.</strong> &nbsp;</span></span><a target="_blank" rel="noopener noreferrer" href="https://sistemas.pjeveracruz.gob.mx/EscuelaJudicial/login"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr><strong><u style="color: black;"></u></strong></span></span></a><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr">&nbsp;&nbsp; <u></u>  <strong><u></u></u></strong>&nbsp; </span><a name="_Hlk94622025"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"></span></a><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"></span></p>
                            <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"></span></strong></span></p><br><br>.
                            <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span><strong>Esta Dirección resalta a las y los participantes el compromiso e importancia que implica este programa de capacitación, por lo que se espera la reciprocidad en cuanto a la formalidad de que las personas inscrita en la plataforma efectivamente se conecten a la capacitación citada.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span><span lang="ES" dir="ltr"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sin otro particular, reciba un cordial y respetuoso saludo.</span></span><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"></span></strong></span></p><br><br><br>


                        <p style="line-height:16.0pt;margin:0cm;text-align:justify;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;" lang="ES"></span></strong></span></p>
                        <p style="line-height:16.0pt;margin:0cm -21.25pt 0cm 0cm;text-align:justify;"><a name="_Hlk94622742"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;" lang="ES"></span></strong></span></a></p>
                        <p style="line-height:16.0pt;margin:0cm -21.25pt 0cm 0cm;text-align:center;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr"><strong>A T E N T A M E N T E</strong></span></span></p>
                        <p style="line-height:16.0pt;margin:0cm -21.25pt 0cm 0cm;text-align:center;">&nbsp;</p>
                        <p style="line-height:16.0pt;margin:0cm -21.25pt 0cm 0cm;text-align:center;">&nbsp;</p>
                        <p style="line-height:16.0pt;margin:0cm -21.25pt 0cm 0cm;text-align:center;">&nbsp;</p>
                        <p style="line-height:16.0pt;margin:0cm;tab-stops:7.1pt;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;" lang="ES"></span></strong></span></p>
                        <p style="line-height:16.0pt;margin:0cm;tab-stops:226.5pt;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;" lang="ES"></span></strong></span></p>
                        <p style="line-height:16.0pt;margin:0cm;tab-stops:0cm;text-align:center;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr"><strong>MAGISTRADA DENISSE DE LOS ANGELES URIBE OBREGÓN</strong></span></span></p>
                        <p style="line-height:16.0pt;margin:0cm;tab-stops:0cm;text-align:center;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr"><strong>DIRECTORA DE LA ESCUELA JUDICIAL DEL ESTADO DE VERACRUZ</strong></span></span></p>
                        <p style="line-height:16.0pt;margin:0cm;tab-stops:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;" lang="ES"></span></strong></span></p>
                        <p style="text-align:center;">&nbsp;</p>
                        <p style="line-height:12.0pt;margin:0cm;tab-stops:0cm;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:8.0pt;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;C.c.p. Archivo.</span><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;"><span lang="ES" dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>
                        <p style="line-height:115%;margin:0cm 0cm 10pt;text-align:justify;">&nbsp;</p>
                        <p style="line-height:115%;margin:0cm 0cm 10pt;">&nbsp;</p>
                        <p style="line-height:115%;margin:0cm 0cm 10pt;justify-content: space-between;"><span style="font-family:Calibri, sans-serif;font-size:11pt;"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif;font-size:12.0pt;line-height:115%;" lang="ES"></span></span></p>
                        <hr style="
                        border-top: 8px solid #83d6aa;
                        margin-bottom: 0px;
                        ">
                        
                        <figure class="table" style="height:9%;width:20%;border-color: gray;">
                            
                            <table class="ck-table-resized" style="border-collapse:collapse;margin-left:0px;border-color: #a38080;" cellspacing="0" cellpadding="0" width="814">
                                <colgroup>
                                    <col style="width:0.76%;">
                                    <col style="width:0.9%;">
                                    <col style="width:0.4%;">
                                    <col style="width:1.29%;">
                                </colgroup>
                                <tbody>
                                    <tr style="justify-content:space-between;">
                                        <td style="border:1.0pt solid rgb(130, 130, 130);padding:0cm 5.4pt;width:41.35pt;" width="55">
                                            <p style="margin:0cm; center 212.6pt right 425.2pt;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;color: gray;"><span lang="ES" dir="ltr"><strong><sup>ACTIVIDAD</sup></strong></span></span></p>
                                        </td>
                                        <td style="border-bottom:1.0pt solid  rgb(130, 130, 130);border-left-style:none;border-right:1.0pt solid windowtext;border-top:1.0pt solid  rgb(130, 130, 130);padding:0cm 5.4pt;width:116.0pt;border-right: 1.0pt solid rgb(130, 130, 130);" width="155">
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;color: gray;"><span lang="ES" dir="ltr"><strong><sup>NOMBRE DEL SERVIDOR PÚBLICO</sup></strong></span></span></p>
                                        </td>
                                        <td style="border-bottom:1.0pt solid  rgb(130, 130, 130);border-left-style:none;border-right:1.0pt solid windowtext;border-top:1.0pt solid  rgb(130, 130, 130);padding:0cm 5.4pt;width:116.0pt;border-right: 1.0pt solid rgb(130, 130, 130);" width="155">
                                            
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;color: gray;"><span lang="ES" dir="ltr"><strong><sup>RÚBRICA</sup></strong></span></span></p>
                                        </td>
                                        <td style="padding:0cm 5.4pt;text-align:right;vertical-align:top;width:100.1pt;color: gray;border-top: 0px solid #ffffff;" rowspan="3" width="340">
                                            <p style="margin:0cm 0cm 0cm -21.3pt;text-align:right;"><span style="font-family:Calibri, sans-serif;font-size:6.0pt;"><span lang="ES" dir="ltr">Av. Lázaro Cárdenas No. 331, Col. El Mirador C. P. 91170, Xalapa, Ver. &nbsp;</span></span><span style="font-family:Calibri, sans-serif;font-size:11pt;"><sup><span style="font-size:12.0pt;" lang="ES"></span></sup></span></p>
                                            <p style="margin:0cm;text-align:right;"><span style="font-family:Calibri, sans-serif;font-size:6.0pt;"><span lang="ES" dir="ltr">&nbsp;Correo Electrónico: </span></span><span style="color:#548DD4;font-family:Calibri, sans-serif;font-size:8.0pt;"><span lang="ES" dir="ltr">escuela.judicial@pjeveracruz.gob.mx</span></span></p>
                                            <p style="margin:0cm 0cm 0cm -21.3pt;text-align:right;"><span style="font-family:Calibri, sans-serif;font-size:6.0pt;"><span lang="ES" dir="ltr">&nbsp;Tel. (228) 8-42-28-00 ext. 34111 y 34112&nbsp; (FAX) 34113 y 34114</span></span><span style="font-family:Calibri, sans-serif;font-size:11pt;"><span style="font-size:7.0pt;" lang="ES"></span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-bottom:1.0pt solid rgb(130, 130, 130);border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;width:116.0pt;border-left: 1.0pt solid rgb(130, 130, 130);border-right: 1.0pt solid rgb(130, 130, 130);" width="155"></td>
                                        
                                        
                                        <td style="border-bottom:1.0pt solid rgb(130, 130, 130);border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;width:116.0pt;border-left: 1.0pt solid rgb(130, 130, 130);border-right: 1.0pt solid rgb(130, 130, 130);" width="155">
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;color: gray;"><span lang="ES" dir="ltr"><sup>Dr. Alejandro Edgar González Flores</sup></span></span></p>
                                        </td>
                                        <td style="border-bottom-style:solid;border-color: rgb(130, 130, 130);border-left-style:solid;border-right-style:solid;border-top-style:none;border-width:1.0pt;padding:0cm 5.4pt;width:41.35pt;" width="55">
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;"><span lang="ES" dir="ltr"><sup>  </sup></span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-bottom:1.0pt solid rgb(130, 130, 130);border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;width:116.0pt;border-left: 1.0pt solid rgb(130, 130, 130);border-right: 1.0pt solid rgb(130, 130, 130);" width="155">
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;color: gray;"><span lang="ES" dir="ltr"><sup>Elaboró</sup></span></span></p>
                                        </td>
                                        <td style="border-bottom-style:solid;border-color: rgb(130, 130, 130);border-left-style:solid;border-right-style:solid;border-top-style:none;border-width:1.0pt;padding:0cm 5.4pt;width:41.35pt;" width="55">
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;"><span lang="ES" dir="ltr"><sup>   </sup></span></span></p>
                                        </td>
                                        <td style="border-bottom-style:solid;border-color: rgb(130, 130, 130);border-left-style:solid;border-right-style:solid;border-top-style:none;border-width:1.0pt;padding:0cm 5.4pt;width:41.35pt;" width="55">
                                            <p style="margin:0cm;text-align:center;"><span style="font-family:Calibri, sans-serif;font-size:9.0pt;"><span lang="ES" dir="ltr"><sup>  </sup></span></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </figure>
                    </div>
                </div>


            </textarea>

          </div>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_FULL_NAME; ?><?php echo SYSTEM_VERSION; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>

</section>


<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>

<!-- Page specific script -->
<script>
  $(document).ready(function () {
    // Summernote
    $('#summernote').summernote({
      fontNames: ['Arial Narrow'],
      addDefaultFonts: false,
      lang: 'es-ES',
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
        ['undo', ['undo']],
        ['redo', ['redo']],
        ['mybutton', ['refresh']],
        ['misc', ['print']]

      ],
      buttons: {
        refresh: refreshButton,
      },
      print: {
        'stylesheetUrl': 'views/administration/pages/craft1.css',
      }
    });

  });

  let refreshButton = function (context) {
    let ui = $.summernote.ui;

    // create button
    let button = ui.button({
      contents: '<i class="fa-solid fa-arrows-rotate"/> Reiniciar',
      tooltip: 'Reiniciar oficio',
      click: function () {
        // invoke insertText method with 'refresh' on editor module.
        resetCraft();
      }
    });

    return button.render();   // return button as jquery object
  }

  function resetCraft(){
    location.reload();
  }

</script>