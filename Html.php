<?php
class Html {
	
	private $html;
	private $result;
	private $options;
	private $selected;
	private $attributes;
	
	public function head($type = null, $url = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		if ($type == 'style') {
			$this->result .= '<link href="'.$url.'" rel="stylesheet" type="text/css"';
			$this->result .= $this->get_attributes();
			$this->result .= '/>';
		} elseif ($type == 'script') {
			$this->result .= '<script type="text/javascript" src="'.$url.'"';
			$this->result .= $this->get_attributes();
			$this->result .= '></script>';
		}
	
		return $this->result;
	}
	
	public function bold($text = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<strong';
		$this->result .= $this->get_attributes();
		$this->result .= '>'.$text.'</strong>';
	
		return $this->result;
	}
	
	public function heading($level = 1, $text = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<h'.$level;
		$this->result .= $this->get_attributes();
		$this->result .= '>'.$text.'</h'.$level.'>';
	
		return $this->result;
	}
	
	public function link($url = null, $text = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<a href="'.$url.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '>'.$text.'</a>';
	
		return $this->result;
	}
	
	public function img($src = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<img src="'.$src.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function hr($count = 1) {
		$this->result = null;
	
		for($i=1; $i<=intval($count); $i++) {
			$this->result .= '<hr />';
		}
	
		return $this->result;
	}
	
	public function br($count = 1) {
		$this->result = null;
	
		for($i=1; $i<=intval($count); $i++) {
			$this->result .= '< br />';
		}
	
		return $this->result;
	}
	
	public function nbs($count = 1) {
		$this->result = null;
	
		for($i=1; $i<=intval($count); $i++) {
			$this->result .= '& nbsp;';
		}
	
		return $this->result;
	}
	
	public function form_open($action = null, $method = 'GET', $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<form action="'.$action.'" method="'.$method.'" enctype="multipart/form-data"';
		$this->result .= $this->get_attributes();
		$this->result .= '>';
	
		return $this->result;
	}
	
	public function form_close() {
		return '</form>';
	}
	
	public function hidden($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="hidden" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function text($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="text" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function textarea($name = null, $text = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<textarea name="'.$name.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '>'.$text.'</textarea>';
	
		return $this->result;
	}
	
	public function password($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="password" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function number($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="number" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function date($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="date" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function time($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="time" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function url($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="url" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function file($name = null, $value = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="file" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '/>';
	
		return $this->result;
	}
	
	public function radio($name = null, $value = null, $text = null, $checked = false, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="radio" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
	
		if ($checked) {
			$this->result .= ' checked="checked"';
		}
	
		$this->result .= '/> '.$text;
	
		return $this->result;
	}
	
	public function checkbox($name = null, $value = null, $text = null, $checked = false, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<input type="checkbox" name="'.$name.'" value="'.$value.'"';
		$this->result .= $this->get_attributes();
	
		if ($checked) {
			$this->result .= ' checked="checked"';
		}
	
		$this->result .= '/> '.$text;
	
		return $this->result;
	}
	
	public function select($name = null, $selected = null, $options = array(), $attributes = null) {
		$this->selected = $selected;
		$this->options = $options;
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<select name="'.$name.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '>';
		$this->result .= $this->get_options();
		$this->result .= '</select>';
	
		return $this->result;
	}
	
	public function button($type = 'submit', $text = null, $attributes = null) {
		$this->attributes = $attributes;
	
		$this->result = null;
		$this->result .= '<button type="'.$type.'"';
		$this->result .= $this->get_attributes();
		$this->result .= '>'.$text.'</button>';
	
		return $this->result;
	}
	
	private function get_options() {
		$this->html = null;
	
		foreach ($this->options as $key=>$val) {
			$this->html .= '<option value="'.$key.'"';
			$this->html .= $this->selected == $key ? ' selected="selected"' : '';
			$this->html .= '>';
			$this->html .= $val;
			$this->html .= '</option>';
		}
	
		return $this->html;
	}
	
	private function get_attributes() {
		$this->html = null;
	
		if(is_array($this->attributes)) {
			foreach ($this->attributes as $key=>$val) {
				$this->html .= ' '.$key.'="'.$val.'"';
			}
		} else {
			$this->html .= ' '.$this->attributes;
		}
	
		return $this->html;
	}
}
