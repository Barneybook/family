﻿<?php

/**
 * 個人資料物件
 * @package person
 * @since 0.0.0
 */ 
class person {
	//20120405
	/**
	 * 姓名欄位
	 * @
	 * @ 使用姓氏欄位與名字欄位組合而成
	 * @
	 */
	$name;
	
	/**
	 * 名字欄位
	 * @
	 * @ 需中文檢查，不得超過三個中文字
	 * @
	 */
	$first_name;
	
	/**
	 * 姓氏欄位
	 * @
	 * @ 需中文檢查，不得超過兩個中文字
	 * @
	 */
	$last_name;
	
	/**
	 * 信箱欄位
	 * @
	 * @ 需檢查信箱格式。
	 * @ 要設定最大信箱長度。
	 * @ 
	 */
	$email;
	
	/**
	 * 性別欄位
	 * @
	 * @ 提供男與女作為選擇
	 * @ 控制丈夫與妻子欄位可否填寫
	 * @
	 */
	$sex;
	
	/**
	 * 生日欄位
	 * @
	 * @ 提供月曆選擇日期
	 * @ 格式：YYYY-MM-DD。範例：1985-12-18 
	 * @ 
	 */
	$birthday;
	
	/**
	 * 家中順位欄位
	 * @
	 * @ 欄位檢查：一定要為數字
	 * @ 數字範圍：1-20
	 * @
	 */
	$order;
	

	
	/**
	 * 手機欄位
	 * @
	 * @
	 * @
	 */
	$phone;
	
	/**
	 * 地址欄位
	 * @
	 * @
	 * @
	 */
	$address;
	
}

?>