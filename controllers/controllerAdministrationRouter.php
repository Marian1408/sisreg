<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Controller
   * File description:    Router driver for administration, gets URL parameters to determine which view to call.
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  /**
   * Administration router controller class
   */
  class controllerAdministrationRouter
  {
    
    /**
     * Checks if the method being called exists, if not use the default method
     *
     * @param $nameOfView string <p>Name of method to execute</p>
     * @return void
     */
    public function selectView (string $nameOfView): void
    {
      
      switch ($nameOfView) {
        
        case ($nameOfView === 'login'):
          $this->login ();
          break;
        
        
        case ($nameOfView === 'documentList'):
          $this->documentList ();
          break;
        
        case ($nameOfView === 'documentComunicacionSocial'):
          $this->documentComunicacionSocial ();
          break;
        
        case ($nameOfView === 'documentEspacioDeEstacionamiento'):
          $this->documentEspacioDeEstacionamiento ();
          break;
        
        case ($nameOfView === 'documentInvitacionForaneos'):
          $this->documentInvitacionForaneos ();
          break;
        
        case ($nameOfView === 'documentInvitacionPresencial'):
          $this->documentInvitacionPresencial ();
          break;
        
        case ($nameOfView === 'documentInvitacionPresencialYvirtual'):
          $this->documentInvitacionPresencialYvirtual ();
          break;
        
        case ($nameOfView === 'documentPresidenta'):
          $this->documentPresidenta ();
          break;
        
        case ($nameOfView === 'documentPresidium'):
          $this->documentPresidium ();
          break;
        
        case ($nameOfView === 'documentPresidiumInvitacionAdarPalabrasSintesisCurricular'):
          $this->documentPresidiumInvitacionAdarPalabrasSintesisCurricular ();
          break;
        
        case ($nameOfView === 'documentPresidiumInvitacionDarPalabras'):
          $this->documentPresidiumInvitacionDarPalabras ();
          break;
        
        case ($nameOfView === 'documentPresidiumSoloAcompanar'):
          $this->documentPresidiumSoloAcompanar ();
          break;
        
        case ($nameOfView === 'documentTecnologia'):
          $this->documentTecnologia ();
          break;
        
        
        case ($nameOfView === 'eventAllEvents'):
          $this->eventViewAll ();
          break;
        
        case ($nameOfView === 'eventAddEvent'):
          $this->eventAddNew ();
          break;
        
        case ($nameOfView === 'eventDetails'):
          $this->eventDetails ();
          break;
        
        case ($nameOfView === 'eventCheckEvent'):
          $this->eventCheckEvent ();
          break;
        
        case ($nameOfView === 'eventCheckViewAll'):
          $this->viewEventCheckViewAll ();
          break;
        
        case ($nameOfView === 'eventCheckUser'):
          $this->eventCheckUser ();
          break;
        
        
        case ($nameOfView === 'userViewAllUsers'):
          $this->userViewAll ();
          break;
        
        case ($nameOfView === 'userAddUser'):
          $this->userAddNew ();
          break;
        
        case ($nameOfView === 'userViewProfile'):
          $this->userViewProfile ();
          break;
        
        case ($nameOfView === 'about'):
          $this->about ();
          break;
        
        case ($nameOfView === 'test'):
          $this->test ();
          break;
        
        default:
          if ($_SESSION['user_role_id'] == 1) {
            $this->homeAdministrator ();
          } elseif ($_SESSION['user_role_id'] == 2) {
            $this->homeBoss ();
          } else {
            $this->homeUser ();
          }
          break;
      }
    }
    
    
    /**
     * Load the administration home view
     *
     * @return void
     */
    public function homeAdministrator (): void
    {
      include "views/administration/pages/homeAdministrator.php";
    }
    
    /**
     * Load the boss administration home view
     *
     * @return void
     */
    public function homeBoss (): void
    {
      include "views/administration/pages/homeBoss.php";
    }
    
    /**
     * Load the user administration home view
     *
     * @return void
     */
    public function homeUser (): void
    {
      include "views/administration/pages/homeUser.php";
    }
    
    /**
     * Load the login view
     *
     * @return void
     */
    public function login (): void
    {
      header ("Location: login.php");
    }
    
    
    /**
     * Load the user view all view
     *
     * @return void
     */
    
    private function userViewAll (): void
    {
      include "views/administration/pages/user/viewUserViewAll.php";
    }
    
    /**
     * Load the user add new view
     *
     * @return void
     */
    private function userAddNew (): void
    {
      include "views/administration/pages/user/viewUserAddNew.php";
    }
  
  
    /**
     * Load the user view profile view
     *
     * @return void
     */
    private function userViewProfile (): void
    {
      include "views/administration/pages/user/viewUserViewProfile.php";
    }
    
    
    /**
     * Load the user view all view
     *
     * @return void
     */
    
    private function eventViewAll (): void
    {
      include "views/administration/pages/event/viewEventViewAll.php";
    }
    
    /**
     * Load the event add new view
     *
     * @return void
     */
    private function eventAddNew (): void
    {
      include "views/administration/pages/event/viewEventAddNew.php";
    }
    
    /**
     * Load event details view
     *
     * @return void
     */
    private function eventDetails (): void
    {
      include "views/administration/pages/event/viewEventDetails.php";
    }
    
    /**
     * Load event check event view
     *
     * @return void
     */
    private function eventCheckEvent (): void
    {
      include "views/administration/pages/event/viewEventCheckEvent.php";
    }
    
    /**
     * Load event check view all view
     *
     * @return void
     */
    private function viewEventCheckViewAll (): void
    {
      include "views/administration/pages/event/viewEventCheckViewAll.php";
    }
    
    /**
     * Load event check view all view
     *
     * @return void
     */
    private function eventCheckUser (): void
    {
      include "views/administration/pages/event/viewEventCheckUser.php";
    }
  
  
    
    
    /**
     * Calls the document list view
     *
     * @return void
     */
    private function documentList (): void
    {
      include "views/administration/pages/document/viewDocumentList.php";
    }
    
    /**
     * Calls the document view "Comunicación social"
     *
     * @return void
     */
    private function documentComunicacionSocial (): void
    {
      include "views/administration/pages/document/viewDocumentComunicacionSocial.php";
    }
    
    /**
     * Calls the document view "Espacio de estacionamiento"
     *
     * @return void
     */
    private function documentEspacioDeEstacionamiento (): void
    {
      include "views/administration/pages/document/viewDocumentEspacioDeEstacionamiento.php";
    }
    
    /**
     * Calls the document view "Invitación de foráneos"
     *
     * @return void
     */
    private function documentInvitacionForaneos (): void
    {
      include "views/administration/pages/document/viewDocumentInvitacionForaneos.php";
    }
    
    /**
     * Calls the document view "Invitación presencial"
     *
     * @return void
     */
    private function documentInvitacionPresencial (): void
    {
      include "views/administration/pages/document/viewDocumentInvitacionPresencial.php";
    }
    
    /**
     * Calls the document view "Invitación presencial y virtual"
     *
     * @return void
     */
    private function documentInvitacionPresencialYvirtual (): void
    {
      include "views/administration/pages/document/viewDocumentInvitacionPresencialYvirtual.php";
    }
    
    /**
     * Calls the document view "Presidenta"
     *
     * @return void
     */
    private function documentPresidenta (): void
    {
      include "views/administration/pages/document/viewDocumentPresidenta.php";
    }
    
    /**
     * Calls the document view "Presidium"
     *
     * @return void
     */
    private function documentPresidium (): void
    {
      include "views/administration/pages/document/viewDocumentPresidium.php";
    }
    
    /**
     * Calls the document view "Presidium invitación a dar palabras síntesis curricular"
     *
     * @return void
     */
    private function documentPresidiumInvitacionAdarPalabrasSintesisCurricular (): void
    {
      include "views/administration/pages/document/viewDocumentPresidiumInvitacionAdarPalabrasSintesisCurricular.php";
    }
    
    /**
     * Calls the document view "Presidium invitación a dar palabras"
     *
     * @return void
     */
    private function documentPresidiumInvitacionDarPalabras (): void
    {
      include "views/administration/pages/document/viewDocumentPresidiumInvitacionDarPalabras.php";
    }
    
    /**
     * Calls the document view "Presidium solo acompañar"
     *
     * @return void
     */
    private function documentPresidiumSoloAcompanar (): void
    {
      include "views/administration/pages/document/viewDocumentPresidiumSoloAcompanar.php";
    }
    
    /**
     * Calls the document view "Tecnologá"
     *
     * @return void
     */
    private function documentTecnologia (): void
    {
      include "views/administration/pages/document/viewDocumentTecnologia.php";
    }
    
    /**
     * Load the about view
     *
     * @return void
     */
    public function about (): void
    {
      include "views/administration/pages/about.php";
    }
    
    
    /**
     * Load the test view
     *
     * @return void
     */
    public function test (): void
    {
      include "views/administration/pages/test.php";
    }
    
  }