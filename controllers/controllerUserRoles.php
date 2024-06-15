<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Controller
   * File description:    Rol controller
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */

  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  require_once (dirname (__DIR__, 1) . '/models/modelUserRole.php');
  
  # GET ALL product categories via AJAX for DataTable
  if (isset($_GET['getAllUserRoles'])) {
    ControllerUserRoles::getAllUsersRolesForDataTables ();
  }
  
  # DELETE product categories  via Ajax
  if (isset($_POST['categoryProductIdForDelete'])) {
    $productCategoriesObject = new ControllerProductCategories();
    $result = $productCategoriesObject->deleteProductCategoryById ($_POST['categoryProductIdForDelete']);
    
    # Validation
    if($result == 1) {
      echo json_success($result);
    } else {
      echo json_error($result);
    };
    
  }
  
  # EDIT product categories  via Ajax
  if (isset($_POST['categoryProductDataEdit'])) {
    $category_name = ("product_category_name='" . $_POST['categoryProductDataEdit']['categoryName'] . "',");
    $category_description = ("product_category_description='" . $_POST['categoryProductDataEdit']['categoryDescription'] . "',");
    $category_parent = ("product_category_parent='" . $_POST['categoryProductDataEdit']['categoryParent'] . "'");
    
    $data = ($category_name . $category_description . $category_parent);
    
    $productCategoriesObject = new ControllerProductCategories();
    $result = $productCategoriesObject->updateProductCategory ($_POST['categoryProductDataEdit']['categoryId'], $data);
    
    # Validation
    if($result == 1) {
      echo json_success($result);
    } else {
      echo json_error($result);
    };
    
  }
  
  # ADD new product categories via Ajax
  if (isset($_POST['categoryProductDataAddNew'])) {
    
    $dateObject = new DateTime();
    $date = $dateObject->format('Y-m-d H:i:s');
    
    $category_name = ("('" . $_POST['categoryProductDataAddNew']['categoryName'] . "',");
    $category_description = ("'" . $_POST['categoryProductDataAddNew']['categoryDescription'] . "',");
    $category_parent = ("'" . $_POST['categoryProductDataAddNew']['categoryParent'] . "',");
    $category_date_last_change = ("'" .$date."')");
    
    $data = ($category_name . $category_description . $category_parent . $category_date_last_change);
    
    $dataColumns = ("(product_category_name, product_category_description, product_category_parent, product_category_date_last_change)");
    
    $productCategoriesObject = new ControllerProductCategories();
    $result = $productCategoriesObject->addNewProductCategory ($dataColumns, $data);
    
    # Validation
    if($result == 1) {
      echo json_success($result);
    } else {
      echo json_error($result);
    };
    
  }
  
  /**
   * Return success function
   *
   * @param int $affectedColumns
   * @return bool|string
   */
  function json_success(int $affectedColumns): bool|string
  {
    $return = array();
    $return['error'] = FALSE;
    $return['affectedColumns'] = $affectedColumns;
    return json_encode($return);
  }
  
  /**
   * Return error function
   *
   * @param int $affectedColumns
   * @return bool|string
   */
  function json_error(int $affectedColumns): bool|string
  {
    $return = array();
    $return['error'] = TRUE;
    $return['affectedColumns'] = $affectedColumns;
    return json_encode($return);
  }
  
  
  class ControllerUserRoles
  {
    private ModelUserRole $model;
    
    /**
     *
     */
    function __construct ()
    {
      $this->model = new ModelUserRole();
    }
    
    /***
     * This method checks if a user and password exist in the database users table
     *
     * @param string $rolId <p>A number id of the rol of a user</p>
     * @return mixed
     */
    function getRoleName (string $rolId): mixed
    {
      return $this->model->getRoleName($rolId);
    }
    
    
    /**
     * Return the total number of rows of the table
     *
     * @return array|bool|int
     */
    function getAllProductCategoriesTotal (): int|bool|array
    {
      return $this->model->getAllTotal ();
    }
    
    /***
     * Return Json object with the data for user roles table on DataTables
     *
     * @return void
     */
    static function getAllUsersRolesForDataTables (): void
    {
      $userRolesObject = new ModelUserRol();
      $queryResult = $userRolesObject->getAllRolesDataTableFormat ();
      $data_array = array();
      
      # The data is sorted to create a new array
      while ($data = $queryResult->fetch_object ()) {
        $data_array[] = array(
          $data->user_rol_id, // Column "Id"
          $data->user_rol_id, // Column "Tools"
          $data->user_rol_name, // Column "Name"
          $data->user_rol_description // Column "Description"
        );
      }
      
      foreach ($data_array as $index => $item) {
        $data_array[$index][1] = '
        
        <div class="btn-group">
   
            <input type="hidden" name="productEdit" id="productEdit" value="edit" >
            <input type="hidden" name="productId" id="productId" value=" ' . $item[0] . '" >
            <button type="button" class="btn btn-primary btn-flat" style="margin-right: 5px;
            height: 40px;" title="View details" onclick="editUserRol(' . $item[1] . ',\'' . $item[2] . '\',\'' . $item[3] . '\')">
              <i class="fas fa-pen-to-square"></i>
            </button>
            
        </div>
     ';
      }
      
      # An array is created with the data ordered and prepared for the table
      $new_array = array("data" => $data_array);
      
      # Print data Json
      echo json_encode ($new_array);
    }
    
    /**
     * Return the all user roles
     *
     * @return array|bool|int
     */
    function getAllUserRoles (): int|bool|array
    {
      return $this->model->getAll ();
    }
    
    /**
     * Return the user role record with product id
     *
     * @param $roleId
     * @return array|bool|int
     */
    function getUserRoleById ($roleId): int|bool|array
    {
      return $this->model->getById ($roleId);
    }
    
    /**
     * Delete a product category with the category id, returns 1 if there was an update and 0 if there was no deleted
     *
     * @param $id
     * @return int
     */
    function deleteProductCategoryById ($id): int
    {
      return $this->model->deleteById ($id);
    }
    
    /**
     * Updates an edition of a product category, returns 1 if there was an update and 0 if there was no update
     * @param $categoryId
     * @param $categoryData
     * @return int|bool
     */
    function updateProductCategory ($categoryId, $categoryData): int|bool
    {
      return $this->model->updateById ($categoryId, $categoryData);
    }
    
    /**
     * Add new product category, returns 1 if there was an update and 0 if there was no added
     *
     * @param $categoryColumns
     * @param $categoryData
     * @return int|bool
     */
    function addNewProductCategory ($categoryColumns, $categoryData): int|bool
    {
      return $this->model->insert ($categoryColumns, $categoryData);
    }
    
  }