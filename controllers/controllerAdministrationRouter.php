<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Controller
   * File description:    Main controller which calls its methods through the URL which is divided
   *                      in two parameters: For example: https://localhost/controller/method
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  /**
   * Router controller class
   */
  class controllerAdministrationRouter
  {
    
    /**
     * Checks if the method being called exists, if not use the default method
     *
     * @param $nameOfMethod string <p>Name of method to execute</p>
     * @return void
     */
    public function selectView (string $nameOfMethod): void
    {
      
      switch ($nameOfMethod) {
        
        case ($nameOfMethod === 'login'):
          $this->login ();
          break;
      
        case ($nameOfMethod === 'craftsList'):
          $this->craftsList ();
          break;
        
        case ($nameOfMethod === 'comunicacionSocial'):
          $this->comunicacionSocial ();
          break;
        
        case ($nameOfMethod === 'espacioDeEstacionamiento'):
          $this->espacioDeEstacionamiento ();
          break;
        
        case ($nameOfMethod === 'invitacionForaneos'):
          $this->invitacionForaneos ();
          break;
        
        case ($nameOfMethod === 'invitacionPresencial'):
          $this->invitacionPresencial ();
          break;
        
        case ($nameOfMethod === 'invitacionPresencialYvirtual'):
          $this->invitacionPresencialYvirtual ();
          break;
        
        case ($nameOfMethod === 'presidenta'):
          $this->presidenta ();
          break;
        
        case ($nameOfMethod === 'presidium'):
          $this->presidium ();
          break;
        
        case ($nameOfMethod === 'presidiumInvitacionAdarPalabrasSintesisCurricular'):
          $this->presidiumInvitacionAdarPalabrasSintesisCurricular ();
          break;
        
        case ($nameOfMethod === 'presidiumInvitacionDarPalabras'):
          $this->presidiumInvitacionDarPalabras ();
          break;
        
        case ($nameOfMethod === 'presidiumSoloAcompanar'):
          $this->presidiumSoloAcompanar ();
          break;
        
        case ($nameOfMethod === 'tecnologia'):
          $this->tecnologia ();
          break;
        
        
        case ($nameOfMethod === 'viewAllEvents'):
          $this->eventViewAll ();
          break;
        case ($nameOfMethod === 'addEvent'):
          $this->eventAddNew ();
          break;
        
        case ($nameOfMethod === 'eventEdit'):
          $this->eventEdit ();
          break;
        
        case ($nameOfMethod === 'eventCheckEventCompliance'):
          $this->eventCheckEventCompliance ();
          break;
        
        case ($nameOfMethod === 'eventCheckEventAuditorium'):
          $this->eventCheckEventAuditorium ();
          break;
        
        case ($nameOfMethod === 'viewAllUsers'):
          $this->userViewAll ();
          break;
        
        case ($nameOfMethod === 'addUser'):
          $this->userAddNew ();
          break;
        
        case ($nameOfMethod === 'userEdit'):
          $this->userEdit ();
          break;
        
        case ($nameOfMethod === 'viewProfile'):
          $this->userViewProfile ();
          break;
        
        case ($nameOfMethod === 'about'):
          $this->about ();
          break;
        
        case ($nameOfMethod === 'base'):
          $this->base ();
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
     * Load the admin view
     *
     * @return void
     */
    public function homeAdministrator (): void
    {
      include "views/administration/pages/homeAdministrator.php";
    }
    
    /**
     * Load the boss view
     *
     * @return void
     */
    public function homeBoss (): void
    {
      include "views/administration/pages/homeBoss.php";
    }
    
    /**
     * Load the user view
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
     * Load the craft view
     *
     * @return void
     */
    public function craft (): void
    {
      include "views/administration/pages/craft1.php";
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
     * Load the base view
     *
     * @return void
     */
    public function base (): void
    {
      include "views/administration/pages/base.php";
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
     * Load the user edit view
     *
     * @return void
     */
    private function userEdit (): void
    {
      include "views/administration/pages/user/viewUserEdit.php";
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
     * Load the event edit view
     *
     * @return void
     */
    private function eventEdit (): void
    {
      include "views/administration/pages/event/viewUserEdit.php";
    }
    
    private function eventCheckEventCompliance (): void
    {
      include "views/administration/pages/event/viewEventCheckEventCompliance.php";
    }
    
    private function eventCheckEventAuditorium (): void
    {
      include "views/administration/pages/event/viewEventCheckEventAuditorium.php";
    }
    
    
    private function craftsList (): void
    {
      include "views/administration/pages/crafts/viewCraftsList.php";
    }
    
    private function comunicacionSocial (): void
    {
      include "views/administration/pages/crafts/viewComunicacionSocial.php";
    }
    
    private function espacioDeEstacionamiento (): void
    {
      include "views/administration/pages/crafts/viewEspacioDeEstacionamiento.php";
    }
    
    private function invitacionForaneos (): void
    {
      include "views/administration/pages/crafts/viewInvitacionForaneos.php";
    }
    
    private function invitacionPresencial (): void
    {
      include "views/administration/pages/crafts/viewInvitacionPresencial.php";
    }
    
    private function invitacionPresencialYvirtual (): void
    {
      include "views/administration/pages/crafts/viewInvitacionPresencialYvirtual.php";
    }
    
    private function presidenta (): void
    {
      include "views/administration/pages/crafts/viewPresidenta.php";
    }
    
    private function presidium (): void
    {
      include "views/administration/pages/crafts/viewPresidium.php";
    }
    
    private function presidiumInvitacionAdarPalabrasSintesisCurricular (): void
    {
      include "views/administration/pages/crafts/viewPresidiumInvitacionAdarPalabrasSintesisCurricular.php";
    }
    
    private function presidiumInvitacionDarPalabras (): void
    {
      include "views/administration/pages/crafts/viewPresidiumInvitacionDarPalabras.php";
    }
    
    private function presidiumSoloAcompanar (): void
    {
      include "views/administration/pages/crafts/viewPresidiumSoloAcompanar.php";
    }
    
    private function tecnologia (): void
    {
      include "views/administration/pages/crafts/viewTecnologia.php";
    }
    
    
  }