<?php
namespace Models;

class Collection extends \Core\Model
{
	protected $guarded = array();
	protected $primaryKey = '_id';

	public function __construct(array $attributes = array()) {
		if (isset($attributes['table_name'])) {
			$this->setTable($attributes['table_name']);
			unset($attributes['table_name']);
		}
		parent::__construct($attributes);
	}

	public function app() {
		return $this->belongsTo('Models\App');
	}

}

