<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * @param $categoryRes
	 * @return array|bool
	 */
	protected function leftMenu($categoryRes){
		$categoryRes = is_object($categoryRes) && !empty($categoryRes) ? $categoryRes : '';
		if(empty($categoryRes)){
			return false;
		}

		foreach($categoryRes as $val){
			$pathLen = explode('-', $val->path);
			if(count($pathLen) == '2'){
				$categoryList[$val->id] = $val;
			}else if(count($pathLen) == '3'){
				$subCategoryList[$val->parent][] = $val;
			}
		}

		$leftMenu = array('category' => $categoryList, 'subCategory' => $subCategoryList);
		return $leftMenu;
	}

}
