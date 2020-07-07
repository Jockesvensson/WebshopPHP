<?php

/**
 * Categories and products
 */
class WGR_shopModel
{
	/**
	 * @var WGR_BaseModel
	 */
	private $model;

	/**
	 * @param WGR_BaseModel $model
	 */
	public function __construct(WGR_BaseModel $model)
	{
		$this->model = $model;
	}

	/**
	 * @param string $type
	 * @return array
	 */
	public function getCategories($type)
	{
		return $this->model->dbFetchAllPrepared(
			'SELECT id, name, url
			FROM categories
			WHERE type = ?', array($type), PDO::FETCH_OBJ);
	}

	/**
	 * @param string $type
	 * @return array
	 */
	public function getProducts($type)
	{
		return $this->model->dbFetchAllPrepared2(
			'SELECT id, name, url, imageFileName, price
			FROM products
			WHERE type = ?', array($type), PDO::FETCH_OBJ);
	}
}
