<?php

class Date extends Eloquent {
	
	public function course() {
		return $this->belongsTo('Course');
	}
	
}