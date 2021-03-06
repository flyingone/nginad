<?php
/**
 * CDNPAL NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2015 CDNPAL Ltd. All Rights Reserved
 * @license GPLv3
 */

namespace model\openrtb;

// sort of cookie matching
class RtbBidRequestUser {
	
	public $id;
	
	public $buyeruid;
	
	public $yob;
	
	public $gender;
	
	public $keywords;
	
	public $customdata;
	
	public $RtbBidRequestGeo;
	
	public $RtbBidRequestDataList = array();
	
	public $ext;
	
}
