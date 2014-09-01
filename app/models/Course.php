<?php

class Course extends Eloquent {
	public function dates() {
		return $this->hasMany('Date');
	}
}
