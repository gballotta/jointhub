<?php

class Date extends Eloquent {
	
	public function course() {
		return $this->belongsTo('Course');
	}
	
	public static $validationRules = array(
		'course_id' => 'required|numeric',
		'data' => 'required|date'
	);
}