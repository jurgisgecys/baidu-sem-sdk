<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetCountByIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCountByIdRequest Attributes
  public $idType;
  public $countType;
  public $ids;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdType($aIdType)
  {
    $wasSet = false;
    $this->idType = $aIdType;
    $wasSet = true;
    return $wasSet;
  }

  public function setCountType($aCountType)
  {
    $wasSet = false;
    $this->countType = $aCountType;
    $wasSet = true;
    return $wasSet;
  }

  public function setIds($aIds)
  {
    $wasSet = false;
    $this->ids = $aIds;
    $wasSet = true;
    return $wasSet;
  }

  public function getIdType()
  {
    return $this->idType;
  }

  public function getCountType()
  {
    return $this->countType;
  }

  public function getIds()
  {
    return $this->ids;
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

class GetMaterialInfoResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMaterialInfoResultType Attributes
  public $moreMaterial;
  public $materialSearchInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMoreMaterial($aMoreMaterial)
  {
    $wasSet = false;
    $this->moreMaterial = $aMoreMaterial;
    $wasSet = true;
    return $wasSet;
  }

  public function setMaterialSearchInfos($aMaterialSearchInfos)
  {
    $wasSet = false;
    $this->materialSearchInfos = $aMaterialSearchInfos;
    $wasSet = true;
    return $wasSet;
  }

  public function getMoreMaterial()
  {
    return $this->moreMaterial;
  }

  public function getMaterialSearchInfos()
  {
    return $this->materialSearchInfos;
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

class GetMaterialInfoBySearchResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMaterialInfoBySearchResponse Attributes
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

class TabType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //TabType Attributes
  public $tabId;
  public $idType;
  public $tabName;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setTabId($aTabId)
  {
    $wasSet = false;
    $this->tabId = $aTabId;
    $wasSet = true;
    return $wasSet;
  }

  public function setIdType($aIdType)
  {
    $wasSet = false;
    $this->idType = $aIdType;
    $wasSet = true;
    return $wasSet;
  }

  public function setTabName($aTabName)
  {
    $wasSet = false;
    $this->tabName = $aTabName;
    $wasSet = true;
    return $wasSet;
  }

  public function getTabId()
  {
    return $this->tabId;
  }

  public function getIdType()
  {
    return $this->idType;
  }

  public function getTabName()
  {
    return $this->tabName;
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

class GetCountByIdResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCountByIdResultType Attributes
  public $countInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setCountInfos($aCountInfos)
  {
    $wasSet = false;
    $this->countInfos = $aCountInfos;
    $wasSet = true;
    return $wasSet;
  }

  public function getCountInfos()
  {
    return $this->countInfos;
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

class CountInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CountInfo Attributes
  public $id;
  public $count;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setId($aId)
  {
    $wasSet = false;
    $this->id = $aId;
    $wasSet = true;
    return $wasSet;
  }

  public function setCount($aCount)
  {
    $wasSet = false;
    $this->count = $aCount;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getCount()
  {
    return $this->count;
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

class GetMaterialInfoBySearchRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMaterialInfoBySearchRequest Attributes
  public $searchWord;
  public $startNum;
  public $endNum;
  public $campaignId;
  public $adgroupId;
  public $searchType;
  public $searchLevel;
  public $materialFields;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setSearchWord($aSearchWord)
  {
    $wasSet = false;
    $this->searchWord = $aSearchWord;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartNum($aStartNum)
  {
    $wasSet = false;
    $this->startNum = $aStartNum;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndNum($aEndNum)
  {
    $wasSet = false;
    $this->endNum = $aEndNum;
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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setSearchType($aSearchType)
  {
    $wasSet = false;
    $this->searchType = $aSearchType;
    $wasSet = true;
    return $wasSet;
  }

  public function setSearchLevel($aSearchLevel)
  {
    $wasSet = false;
    $this->searchLevel = $aSearchLevel;
    $wasSet = true;
    return $wasSet;
  }
   public function setMaterialFields($amaterialFields) {
       $this->materialFields = $amaterialFields;
   }

  public function addMaterialField($aMaterialField)
  {
    $wasAdded = false;
    $this->materialFields[] = $aMaterialField;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMaterialField($aMaterialField)
  {
    $wasRemoved = false;
    unset($this->materialFields[$this->indexOfMaterialField($aMaterialField)]);
    $this->materialFields = array_values($this->materialFields);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getSearchWord()
  {
    return $this->searchWord;
  }

  public function getStartNum()
  {
    return $this->startNum;
  }

  public function getEndNum()
  {
    return $this->endNum;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getSearchType()
  {
    return $this->searchType;
  }

  public function getSearchLevel()
  {
    return $this->searchLevel;
  }


  public function getMaterialFields()
  {
    $newMaterialFields = $this->materialFields;
    return $newMaterialFields;
  }

  public function numberOfMaterialFields()
  {
    $number = count($this->materialFields);
    return $number;
  }

  public function indexOfMaterialField($aMaterialField)
  {
    $rawAnswer = array_search($aMaterialField,$this->materialFields);
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

class GetTabResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetTabResponse Attributes
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

class GetCountByIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCountByIdResponse Attributes
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

class MaterialSearchInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //MaterialSearchInfo Attributes
  public $materialInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMaterialInfos($amaterialInfos) {
       $this->materialInfos = $amaterialInfos;
   }

  public function addMaterialInfo($aMaterialInfo)
  {
    $wasAdded = false;
    $this->materialInfos[] = $aMaterialInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMaterialInfo($aMaterialInfo)
  {
    $wasRemoved = false;
    unset($this->materialInfos[$this->indexOfMaterialInfo($aMaterialInfo)]);
    $this->materialInfos = array_values($this->materialInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMaterialInfos()
  {
    $newMaterialInfos = $this->materialInfos;
    return $newMaterialInfos;
  }

  public function numberOfMaterialInfos()
  {
    $number = count($this->materialInfos);
    return $number;
  }

  public function indexOfMaterialInfo($aMaterialInfo)
  {
    $rawAnswer = array_search($aMaterialInfo,$this->materialInfos);
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

class GetTabRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetTabRequest Attributes
  public $tabIds;
  public $idType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setTabIds($atabIds) {
       $this->tabIds = $atabIds;
   }

  public function addTabId($aTabId)
  {
    $wasAdded = false;
    $this->tabIds[] = $aTabId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeTabId($aTabId)
  {
    $wasRemoved = false;
    unset($this->tabIds[$this->indexOfTabId($aTabId)]);
    $this->tabIds = array_values($this->tabIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setIdType($aIdType)
  {
    $wasSet = false;
    $this->idType = $aIdType;
    $wasSet = true;
    return $wasSet;
  }


  public function getTabIds()
  {
    $newTabIds = $this->tabIds;
    return $newTabIds;
  }

  public function numberOfTabIds()
  {
    $number = count($this->tabIds);
    return $number;
  }

  public function indexOfTabId($aTabId)
  {
    $rawAnswer = array_search($aTabId,$this->tabIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getIdType()
  {
    return $this->idType;
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

class GetKeywordIdBySearchRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordIdBySearchRequest Attributes
  public $campaignIds;
  public $page;
  public $pcQuality;
  public $mobileQuality;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignIds($acampaignIds) {
       $this->campaignIds = $acampaignIds;
   }

  public function addCampaignId($aCampaignId)
  {
    $wasAdded = false;
    $this->campaignIds[] = $aCampaignId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignId($aCampaignId)
  {
    $wasRemoved = false;
    unset($this->campaignIds[$this->indexOfCampaignId($aCampaignId)]);
    $this->campaignIds = array_values($this->campaignIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setPage($aPage)
  {
    $wasSet = false;
    $this->page = $aPage;
    $wasSet = true;
    return $wasSet;
  }
   public function setPcQuality($apcQuality) {
       $this->pcQuality = $apcQuality;
   }

  public function addPcQuality($aPcQuality)
  {
    $wasAdded = false;
    $this->pcQuality[] = $aPcQuality;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePcQuality($aPcQuality)
  {
    $wasRemoved = false;
    unset($this->pcQuality[$this->indexOfPcQuality($aPcQuality)]);
    $this->pcQuality = array_values($this->pcQuality);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setMobileQuality($amobileQuality) {
       $this->mobileQuality = $amobileQuality;
   }

  public function addMobileQuality($aMobileQuality)
  {
    $wasAdded = false;
    $this->mobileQuality[] = $aMobileQuality;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileQuality($aMobileQuality)
  {
    $wasRemoved = false;
    unset($this->mobileQuality[$this->indexOfMobileQuality($aMobileQuality)]);
    $this->mobileQuality = array_values($this->mobileQuality);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setStatus($astatus) {
       $this->status = $astatus;
   }

  public function addStatus($aStatus)
  {
    $wasAdded = false;
    $this->status[] = $aStatus;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStatus($aStatus)
  {
    $wasRemoved = false;
    unset($this->status[$this->indexOfStatus($aStatus)]);
    $this->status = array_values($this->status);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignIds()
  {
    $newCampaignIds = $this->campaignIds;
    return $newCampaignIds;
  }

  public function numberOfCampaignIds()
  {
    $number = count($this->campaignIds);
    return $number;
  }

  public function indexOfCampaignId($aCampaignId)
  {
    $rawAnswer = array_search($aCampaignId,$this->campaignIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getPage()
  {
    return $this->page;
  }


  public function getPcQuality()
  {
    $newPcQuality = $this->pcQuality;
    return $newPcQuality;
  }

  public function numberOfPcQuality()
  {
    $number = count($this->pcQuality);
    return $number;
  }

  public function indexOfPcQuality($aPcQuality)
  {
    $rawAnswer = array_search($aPcQuality,$this->pcQuality);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getMobileQuality()
  {
    $newMobileQuality = $this->mobileQuality;
    return $newMobileQuality;
  }

  public function numberOfMobileQuality()
  {
    $number = count($this->mobileQuality);
    return $number;
  }

  public function indexOfMobileQuality($aMobileQuality)
  {
    $rawAnswer = array_search($aMobileQuality,$this->mobileQuality);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getStatus()
  {
    $newStatus = $this->status;
    return $newStatus;
  }

  public function numberOfStatus()
  {
    $number = count($this->status);
    return $number;
  }

  public function indexOfStatus($aStatus)
  {
    $rawAnswer = array_search($aStatus,$this->status);
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

class KeywordIdSearchInfoResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //KeywordIdSearchInfoResultType Attributes
  public $keywordIds;
  public $hasMore;

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

  public function setHasMore($aHasMore)
  {
    $wasSet = false;
    $this->hasMore = $aHasMore;
    $wasSet = true;
    return $wasSet;
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

  public function getHasMore()
  {
    return $this->hasMore;
  }

  public function isHasMore()
  {
    return $this->hasMore;
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

class GetKeywordIdBySearchResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordIdBySearchResponse Attributes
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

class GetCreativeIdBySearchRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeIdBySearchRequest Attributes
  public $campaignIds;
  public $page;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignIds($acampaignIds) {
       $this->campaignIds = $acampaignIds;
   }

  public function addCampaignId($aCampaignId)
  {
    $wasAdded = false;
    $this->campaignIds[] = $aCampaignId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignId($aCampaignId)
  {
    $wasRemoved = false;
    unset($this->campaignIds[$this->indexOfCampaignId($aCampaignId)]);
    $this->campaignIds = array_values($this->campaignIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setPage($aPage)
  {
    $wasSet = false;
    $this->page = $aPage;
    $wasSet = true;
    return $wasSet;
  }
   public function setStatus($astatus) {
       $this->status = $astatus;
   }

  public function addStatus($aStatus)
  {
    $wasAdded = false;
    $this->status[] = $aStatus;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStatus($aStatus)
  {
    $wasRemoved = false;
    unset($this->status[$this->indexOfStatus($aStatus)]);
    $this->status = array_values($this->status);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignIds()
  {
    $newCampaignIds = $this->campaignIds;
    return $newCampaignIds;
  }

  public function numberOfCampaignIds()
  {
    $number = count($this->campaignIds);
    return $number;
  }

  public function indexOfCampaignId($aCampaignId)
  {
    $rawAnswer = array_search($aCampaignId,$this->campaignIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getPage()
  {
    return $this->page;
  }


  public function getStatus()
  {
    $newStatus = $this->status;
    return $newStatus;
  }

  public function numberOfStatus()
  {
    $number = count($this->status);
    return $number;
  }

  public function indexOfStatus($aStatus)
  {
    $rawAnswer = array_search($aStatus,$this->status);
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

class CreativeIdSearchInfoResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CreativeIdSearchInfoResultType Attributes
  public $creativeIds;
  public $hasMore;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeIds($acreativeIds) {
       $this->creativeIds = $acreativeIds;
   }

  public function addCreativeId($aCreativeId)
  {
    $wasAdded = false;
    $this->creativeIds[] = $aCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeId($aCreativeId)
  {
    $wasRemoved = false;
    unset($this->creativeIds[$this->indexOfCreativeId($aCreativeId)]);
    $this->creativeIds = array_values($this->creativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setHasMore($aHasMore)
  {
    $wasSet = false;
    $this->hasMore = $aHasMore;
    $wasSet = true;
    return $wasSet;
  }


  public function getCreativeIds()
  {
    $newCreativeIds = $this->creativeIds;
    return $newCreativeIds;
  }

  public function numberOfCreativeIds()
  {
    $number = count($this->creativeIds);
    return $number;
  }

  public function indexOfCreativeId($aCreativeId)
  {
    $rawAnswer = array_search($aCreativeId,$this->creativeIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getHasMore()
  {
    return $this->hasMore;
  }

  public function isHasMore()
  {
    return $this->hasMore;
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

class GetCreativeIdBySearchResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeIdBySearchResponse Attributes
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

class GetIdsByTabsRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetIdsByTabsRequest Attributes
  public $tabIds;
  public $idType;
  public $page;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setTabIds($atabIds) {
       $this->tabIds = $atabIds;
   }

  public function addTabId($aTabId)
  {
    $wasAdded = false;
    $this->tabIds[] = $aTabId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeTabId($aTabId)
  {
    $wasRemoved = false;
    unset($this->tabIds[$this->indexOfTabId($aTabId)]);
    $this->tabIds = array_values($this->tabIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setIdType($aIdType)
  {
    $wasSet = false;
    $this->idType = $aIdType;
    $wasSet = true;
    return $wasSet;
  }

  public function setPage($aPage)
  {
    $wasSet = false;
    $this->page = $aPage;
    $wasSet = true;
    return $wasSet;
  }


  public function getTabIds()
  {
    $newTabIds = $this->tabIds;
    return $newTabIds;
  }

  public function numberOfTabIds()
  {
    $number = count($this->tabIds);
    return $number;
  }

  public function indexOfTabId($aTabId)
  {
    $rawAnswer = array_search($aTabId,$this->tabIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getIdType()
  {
    return $this->idType;
  }

  public function getPage()
  {
    return $this->page;
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

class GetIdsByTabsResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetIdsByTabsResultType Attributes
  public $ids;
  public $hasMore;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setIds($aids) {
       $this->ids = $aids;
   }

  public function addId($aId)
  {
    $wasAdded = false;
    $this->ids[] = $aId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeId($aId)
  {
    $wasRemoved = false;
    unset($this->ids[$this->indexOfId($aId)]);
    $this->ids = array_values($this->ids);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setHasMore($aHasMore)
  {
    $wasSet = false;
    $this->hasMore = $aHasMore;
    $wasSet = true;
    return $wasSet;
  }


  public function getIds()
  {
    $newIds = $this->ids;
    return $newIds;
  }

  public function numberOfIds()
  {
    $number = count($this->ids);
    return $number;
  }

  public function indexOfId($aId)
  {
    $rawAnswer = array_search($aId,$this->ids);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getHasMore()
  {
    return $this->hasMore;
  }

  public function isHasMore()
  {
    return $this->hasMore;
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

class GetIdsByTabsResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetIdsByTabsResponse Attributes
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

class sms_service_SearchService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'service', 'SearchService' );
    }

  // ABSTRACT METHODS 

 public function getCountById ($getCountByIdRequest){
 return $this->execute ( 'getCountById', $getCountByIdRequest );
}
 public function getTab ($getTabRequest){
 return $this->execute ( 'getTab', $getTabRequest );
}
 public function getMaterialInfoBySearch ($getMaterialInfoBySearchRequest){
 return $this->execute ( 'getMaterialInfoBySearch', $getMaterialInfoBySearchRequest );
}
 public function getKeywordIdBySearch ($getKeywordIdBySearchRequest){
 return $this->execute ( 'getKeywordIdBySearch', $getKeywordIdBySearchRequest );
}
 public function getCreativeIdBySearch ($getCreativeIdBySearchRequest){
 return $this->execute ( 'getCreativeIdBySearch', $getCreativeIdBySearchRequest );
}
 public function getIdsByTabs ($getIdsByTabsRequest){
 return $this->execute ( 'getIdsByTabs', $getIdsByTabsRequest );
}
  
}


?>