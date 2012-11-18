<?php
class Archivo{

	public $file;

	public function upload(){
		if (!empty($_FILES) || $_FILES["file"]["error"] < 0) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$file_name = $_FILES['Filedata']['name'];	
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
			$this->file =  str_replace('//','/',$targetPath) . $file_name;	
			if (move_uploaded_file($tempFile, $this->file)){
				echo "Evento creado";
				return true;
			} else {
				echo "Error al crear el evento";
				return false;
			}
		} else {
			echo "Error: " . $_FILES["file"]["error"] . "<br />";			
			return false;
		}
	}
}
?>