<?php
class UploadServ
{
	private $adapter;
	private $adapters = array(
			CMSConsts::IMAGE => array(
					CMSConsts::UPLOAD_CORSAIR_MODE => 'CorsairImgUploader',
					CMSConsts::UPLOAD_POCKET_MODE => 'PocketImgUploader',
					)
	);

	private $type;
	private $max_size = 4194304;//2048*2048
	private $mode;
	
	public function __construct($type, $mode, $path = UPLOAD_PATH)
	{
		Yii::import('application.components.service.upload.*');
		$this->type = $type;
		$this->mode = $mode;
		$adpater_name = $this->getAdapterName();
		$this->setAdapter(new $adpater_name());
		$this->getAdapter()->setInsName('Filedata')->setMaxSize($this->max_size)->setUploadPath($path);
	}
	
	public function getError()
	{
		return $this->getAdapter()->getError();
	}
	
	public function setParams(array $params)
	{
		$this->getAdapter()->setParams($params);
		return $this;
	}
	
	public function getFilePath()
	{
		return $this->getAdapter()->getFilePath();
	}
	
	public function getFileRef()
	{
		return $this->getAdapter()->getFileRef();
	}
	
	public function upload()
	{
		return $this->getAdapter()->upload();
	}
	
	private function getAdapterName()
	{
		if (isset($this->adapters[$this->type][$this->mode]))
			return $this->adapters[$this->type][$this->mode];
		else
			throw new CException("can not get adapter!");
	}
	
	private function setAdapter(UploadAbstract $adapter)
	{
		return $this->adapter = $adapter; 
	}
	
	private function getAdapter()
	{
		return $this->adapter;
	}
}