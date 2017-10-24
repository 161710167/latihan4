<?php
class sekolah
{
public $nama;
public $sekolah;


public function __construct($nama, $sekolah)
{
$this->nama = $nama;
$this->sekolah  = $sekolah;


}

public function get_nama()
	{
		return $this->nama;
	}
	public function get_sekolah()
	{
		return $this->sekolah;
	}
	}

?>