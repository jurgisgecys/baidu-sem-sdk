<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetAccountLiveDataRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAccountLiveDataRequest Attributes
  public $dataType;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setDataType($aDataType)
  {
    $wasSet = false;
    $this->dataType = $aDataType;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function getDataType()
  {
    return $this->dataType;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AcctOrCmpnLiveDataResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AcctOrCmpnLiveDataResultType Attributes
  public $updateTime;
  public $userId;
  public $campaignId;
  public $todayTotalClick;
  public $todayTotalCost;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setUpdateTime($aUpdateTime)
  {
    $wasSet = false;
    $this->updateTime = $aUpdateTime;
    $wasSet = true;
    return $wasSet;
  }

  public function setUserId($aUserId)
  {
    $wasSet = false;
    $this->userId = $aUserId;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
    $wasSet = true;
    return $wasSet;
  }

  public function setTodayTotalClick($aTodayTotalClick)
  {
    $wasSet = false;
    $this->todayTotalClick = $aTodayTotalClick;
    $wasSet = true;
    return $wasSet;
  }

  public function setTodayTotalCost($aTodayTotalCost)
  {
    $wasSet = false;
    $this->todayTotalCost = $aTodayTotalCost;
    $wasSet = true;
    return $wasSet;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function getUserId()
  {
    return $this->userId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getTodayTotalClick()
  {
    return $this->todayTotalClick;
  }

  public function getTodayTotalCost()
  {
    return $this->todayTotalCost;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetAccountLiveDataResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAccountLiveDataResponse Attributes
  public $data;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setData($adata) {
       $this->data = $adata;
   }

  public function addData($aData)
  {
    $wasAdded = false;
    $this->data[] = $aData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeData($aData)
  {
    $wasRemoved = false;
    unset($this->data[$this->indexOfData($aData)]);
    $this->data = array_values($this->data);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getData()
  {
    $newData = $this->data;
    return $newData;
  }

  public function numberOfData()
  {
    $number = count($this->data);
    return $number;
  }

  public function indexOfData($aData)
  {
    $rawAnswer = array_search($aData,$this->data);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKeywordLiveDataRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordLiveDataRequest Attributes
  public $keywordIds;
  public $device;
  public $startTime;
  public $endTime;
  public $regionTarget;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordIds($akeywordIds) {
       $this->keywordIds = $akeywordIds;
   }

  public function addKeywordId($aKeywordId)
  {
    $wasAdded = false;
    $this->keywordIds[] = $aKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordId($aKeywordId)
  {
    $wasRemoved = false;
    unset($this->keywordIds[$this->indexOfKeywordId($aKeywordId)]);
    $this->keywordIds = array_values($this->keywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndTime($aEndTime)
  {
    $wasSet = false;
    $this->endTime = $aEndTime;
    $wasSet = true;
    return $wasSet;
  }
   public function setRegionTarget($aregionTarget) {
       $this->regionTarget = $aregionTarget;
   }

  public function addRegionTarget($aRegionTarget)
  {
    $wasAdded = false;
    $this->regionTarget[] = $aRegionTarget;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRegionTarget($aRegionTarget)
  {
    $wasRemoved = false;
    unset($this->regionTarget[$this->indexOfRegionTarget($aRegionTarget)]);
    $this->regionTarget = array_values($this->regionTarget);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordIds()
  {
    $newKeywordIds = $this->keywordIds;
    return $newKeywordIds;
  }

  public function numberOfKeywordIds()
  {
    $number = count($this->keywordIds);
    return $number;
  }

  public function indexOfKeywordId($aKeywordId)
  {
    $rawAnswer = array_search($aKeywordId,$this->keywordIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }


  public function getRegionTarget()
  {
    $newRegionTarget = $this->regionTarget;
    return $newRegionTarget;
  }

  public function numberOfRegionTarget()
  {
    $number = count($this->regionTarget);
    return $number;
  }

  public function indexOfRegionTarget($aRegionTarget)
  {
    $rawAnswer = array_search($aRegionTarget,$this->regionTarget);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class KeywordLiveDataResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //KeywordLiveDataResultType Attributes
  public $keywordId;
  public $regionId;
  public $device;
  public $minute;
  public $leftRank;
  public $rightRank;
  public $topRank;
  public $bottomRank;
  public $leftShows;
  public $rightShows;
  public $topShows;
  public $bottomShows;
  public $click;
  public $cost;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKeywordId($aKeywordId)
  {
    $wasSet = false;
    $this->keywordId = $aKeywordId;
    $wasSet = true;
    return $wasSet;
  }

  public function setRegionId($aRegionId)
  {
    $wasSet = false;
    $this->regionId = $aRegionId;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function setMinute($aMinute)
  {
    $wasSet = false;
    $this->minute = $aMinute;
    $wasSet = true;
    return $wasSet;
  }

  public function setLeftRank($aLeftRank)
  {
    $wasSet = false;
    $this->leftRank = $aLeftRank;
    $wasSet = true;
    return $wasSet;
  }

  public function setRightRank($aRightRank)
  {
    $wasSet = false;
    $this->rightRank = $aRightRank;
    $wasSet = true;
    return $wasSet;
  }

  public function setTopRank($aTopRank)
  {
    $wasSet = false;
    $this->topRank = $aTopRank;
    $wasSet = true;
    return $wasSet;
  }

  public function setBottomRank($aBottomRank)
  {
    $wasSet = false;
    $this->bottomRank = $aBottomRank;
    $wasSet = true;
    return $wasSet;
  }

  public function setLeftShows($aLeftShows)
  {
    $wasSet = false;
    $this->leftShows = $aLeftShows;
    $wasSet = true;
    return $wasSet;
  }

  public function setRightShows($aRightShows)
  {
    $wasSet = false;
    $this->rightShows = $aRightShows;
    $wasSet = true;
    return $wasSet;
  }

  public function setTopShows($aTopShows)
  {
    $wasSet = false;
    $this->topShows = $aTopShows;
    $wasSet = true;
    return $wasSet;
  }

  public function setBottomShows($aBottomShows)
  {
    $wasSet = false;
    $this->bottomShows = $aBottomShows;
    $wasSet = true;
    return $wasSet;
  }

  public function setClick($aClick)
  {
    $wasSet = false;
    $this->click = $aClick;
    $wasSet = true;
    return $wasSet;
  }

  public function setCost($aCost)
  {
    $wasSet = false;
    $this->cost = $aCost;
    $wasSet = true;
    return $wasSet;
  }

  public function getKeywordId()
  {
    return $this->keywordId;
  }

  public function getRegionId()
  {
    return $this->regionId;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function getMinute()
  {
    return $this->minute;
  }

  public function getLeftRank()
  {
    return $this->leftRank;
  }

  public function getRightRank()
  {
    return $this->rightRank;
  }

  public function getTopRank()
  {
    return $this->topRank;
  }

  public function getBottomRank()
  {
    return $this->bottomRank;
  }

  public function getLeftShows()
  {
    return $this->leftShows;
  }

  public function getRightShows()
  {
    return $this->rightShows;
  }

  public function getTopShows()
  {
    return $this->topShows;
  }

  public function getBottomShows()
  {
    return $this->bottomShows;
  }

  public function getClick()
  {
    return $this->click;
  }

  public function getCost()
  {
    return $this->cost;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKeywordLiveDataResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordLiveDataResponse Attributes
  public $data;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setData($adata) {
       $this->data = $adata;
   }

  public function addData($aData)
  {
    $wasAdded = false;
    $this->data[] = $aData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeData($aData)
  {
    $wasRemoved = false;
    unset($this->data[$this->indexOfData($aData)]);
    $this->data = array_values($this->data);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getData()
  {
    $newData = $this->data;
    return $newData;
  }

  public function numberOfData()
  {
    $number = count($this->data);
    return $number;
  }

  public function indexOfData($aData)
  {
    $rawAnswer = array_search($aData,$this->data);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class sms_service_LiveReportService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'service', 'LiveReportService' );
    }

  // ABSTRACT METHODS 

 public function getAccountLiveData ($getAccountLiveDataRequest){
 return $this->execute ( 'getAccountLiveData', $getAccountLiveDataRequest );
}
 public function getKeywordLiveData ($getKeywordLiveDataRequest){
 return $this->execute ( 'getKeywordLiveData', $getKeywordLiveDataRequest );
}
  
}


?>