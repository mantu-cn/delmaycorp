<?php
/**
 * CNController class file.
 *
 * @author mantu <mantu.cn@gmail.com>
 *
 */

/**
 * Class CNController extends SBaseController,
 * The Controller which implements RBAC for all Actions.
 *
 * @author mantu
 * @package central.controllers
 *
 */
class CNController extends SBaseController
{
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();    /**
     * Overrides beforeAction Method of YII which is invoked right before
     * an action is to be executed (after all possible filters.)
     *
     * @param String $action The current action
     * @return boolean
     */
    protected function beforeAction($action)
    {
        return parent::beforeAction($action);
    }

    /**
     * Renders the View depending on whether its an AJAX Request or not.
     *
     * @param string $ps_view View for Normal Request.
     * @param array $pa_data Data to pass to render.
     * @param string $ps_viewAjax View for AJAX Request.
     */
    public function renderConditional($ps_view, $pa_data = null, $ps_viewAjax = '')
    {
        if (empty($ps_viewAjax)) {
            $ps_viewAjax = $ps_view;
        }
        if (Yii::app()->request->isAjaxRequest) {
            $this->renderPartial($ps_viewAjax, $pa_data, false, true);
        } else {
            $this->render($ps_view, $pa_data);
        }
    }
}
