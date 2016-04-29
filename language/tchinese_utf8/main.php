<?php
/**
 * ****************************************************************************
 * @author yaoh@dcjh.tn.edu.tw
 *
 * Version : 2.0
 * ****************************************************************************
 */
//分頁
define("_BP_BACK_PAGE","上一頁");
define("_BP_NEXT_PAGE","下一頁");
define("_BP_FIRST_PAGE","第一頁");
define("_BP_LAST_PAGE","最後頁");
define("_BP_GO_BACK_PAGE","前 %s 頁");
define("_BP_GO_NEXT_PAGE","後 %s 頁");
define("_BP_TOOLBAR","共 %s 頁，目前在第 %s 頁：");
//menu.php
define("_MD_MENU_YAOH_SL_BACK_HOME","回服務學習首頁");
define("_MD_MENU_YAOH_SL_BACK_HOME_DESC","回到服務學習公告系統首頁");
define("_MD_MENU_YAOH_SL_ADD_TASK","新增任務");
define("_MD_MENU_YAOH_SL_ADD_TASK_DESC","添加新的服務學習任務");
define("_MD_MENU_YAOH_MY_REG_LIST","我的推薦清單");
define("_MD_MENU_YAOH_MY_REG_LIST_DESC","列出自己推薦的同學清單");
define("_MD_MENU_YAOH_MY_TASK_LIST","我的任務列表");
define("_MD_MENU_YAOH_MY_TASK_LIST_DESC","列出您所管理的任務列表");
define("_MD_MENU_YAOH_LIST_ALL_TASK","列出所有服務學習");
define("_MD_MENU_YAOH_LIST_ALL_TASK_DESC","列出所有任務列表");
define("_MD_MENU_YAOH_TEACHER_REG_RANK","教師推薦數量排名");
define("_MD_MENU_YAOH_TEACHER_REG_RANK_DESC","推薦排名");
define("_MD_MENU_YAOH_STUDENT_REG_RANK","學生時數排名");
define("_MD_MENU_YAOH_STUDENT_REG_RANK_DESC","列出前幾名的學生");
//index.php
define("_MD_INDEX_YAOH_SL_MANAGE_MENU_TITLE","服務學習公告");
define("_MD_INDEX_YAOH_SL_MANAGE_MENU_YOUR_POWER","您的權限：");
define("_MD_INDEX_YAOH_SL_MANAGE_MENU_MENU_TITLE","管理選單");

define("_MD_INDEX_YAOH_SL_TASK_STATUS_IS_FULL","額滿");
define("_MD_INDEX_YAOH_SL_TASK_STATUS_IS_TIMEUP","截止");
define("_MD_INDEX_YAOH_SL_TASK_STATUS_IN_PREPARATION","準備中");
define("_MD_INDEX_YAOH_SL_TASK_STATUS_IS_ENROLLING","報名中");
define("_MD_INDEX_YAOH_SL_TASK_STATUS_NO_TASK","目前尚無服務學習之需求");

define("_MD_INDEX_YAOH_SL_TASK_ALERT_NO_POWER","很抱歉您尚無權限");
define("_MD_INDEX_YAOH_SL_TASK_ALERT_REG_SUCCESS","推薦成功");
define("_MD_INDEX_YAOH_SL_TASK_ALERT_STOP_REG","很抱歉，目前無法進行推薦");
define("_MD_INDEX_YAOH_SL_TASK_ALERT_REG_ERROR","推薦失敗，請聯絡管理員協助");

//function.php
define("_MD_FUNCTION_YAOH_SL_TASK_FORM_TITLE","服務學習需求");
define("_MD_FUNCTION_YAOH_SL_TASK_FORM_ADD","新增");
define("_MD_FUNCTION_YAOH_SL_TASK_FORM_EDIT","編輯");

//task_form
define("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_TITLE","任務標題");
define("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_DESC","詳細說明");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_WORKTIME","服務時間");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_LIMIT","條件限制");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_REGTIME","可登錄時數");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_MAXNUM","需求人數");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_MAXNUM_ENABLE","是否超額錄取");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_MAXNUM_ENABLE_TRUE","限制");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_MAXNUM_ENABLE_FALSE","不限制");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_MAXNUM_EACH","每位教師可推薦人數(空白代表不限制)");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_START_LINE","募集開始時間");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_DEAD_LINE","募集截止時間");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_GATHER","集合資訊(含要攜帶的物品)");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_ENABLE","募集中或停止募集");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_ENABLE_TRUE","募集中");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_TASK_ENABLE_FALSE","停止募集");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_NOTE","備註(含聯絡方式)");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_FORM_SEND","送出");
//YaohSL_TaskEditDo
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_EDIT_DO_ALERT_ADD_SUCCESS","任務新增成功");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_EDIT_DO_ALERT_ADD_ERROR","任務新增失敗");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_EDIT_DO_ALERT_NO_BLANK","標題不能空白");
//YaohSL_TaskList
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TITLE","服務學習機會列表");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_ID","服務學習編號");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_USER_NAME","公告人");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_TITLE","服務學習主題");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_REGTIME","可認證時數");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_REGTIME_FROM","起：");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_REGTIME_TO","迄：");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_NO_TASK_NOW","目前尚無服務學習公告");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_WORKTIME","工作時間");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_LIMIT","條件限制");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_MAXNUM","需求人數");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_MAXNUM_ENABLE_NOTICE","(可超額錄取)");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_START_END","招募期間");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_INFO_STATUS","目前招募狀況");
DEFINE("_MD_FUNCTION_YAOH_SL_TASK_LIST_TABLE_TASK_OWNER_NOTICE","*您的專案");
//showTaskBtn
DEFINE("_MD_FUNCTION_YAOH_SL_SHOW_TASK_BTN_OUTPUT_CSV","匯出填報資料csv格式");
DEFINE("_MD_FUNCTION_YAOH_SL_SHOW_TASK_BTN_OUTPUT_XLS","匯出填報資料xls格式");
DEFINE("_MD_FUNCTION_YAOH_SL_SHOW_TASK_BTN_EDIT_TASK","我想要修改此主題的內容");
DEFINE("_MD_FUNCTION_YAOH_SL_SHOW_TASK_BTN_DEL_TASK","我想要刪除此服務學習主題");

//PowerList
DEFINE("_MD_FUNCTION_YAOH_SL_POWER_LIST_VIEW","檢視權限");
DEFINE("_MD_FUNCTION_YAOH_SL_POWER_LIST_REG","推薦權限");
DEFINE("_MD_FUNCTION_YAOH_SL_POWER_LIST_MANAGE","管理權限");

//transTaskInfo
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_TASK_TITLE_HEAD","服務學習主題:");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_I_WANT_TO_REG","我要推薦");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_OWNER_REG_NOTICE","(您是此專案擁有者，可以無條件新增推薦喔)");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_EACH_REGABLE_HEAD","每位可推薦");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_EACH_REGABLE_TAIL","位");

DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_NOW","現在時刻：");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_REG_NOTICE","推薦");

DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_CLASS","班級");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_CLASS_NUMBER","座號");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_NAME","姓名");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_STUDENT_ID","學號");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TABLE_REG_REASON","理由");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_R_NOTE","備註");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_INFO_REG","推薦");
//YaohSL_RegEditDo
DEFINE("_MD_FUNCTION_YAOH_SL_REG_EDIT_DO_ID_NAME_NOTICE","姓名和學號都不能空白喔，以利服務學習時數之登錄");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_EDIT_DO_GUEST","訪客");

//RegHistory

DEFINE("_MD_FUNCTION_YAOH_SL_REG_HISTORY_NOTICE","下列是您所推薦過的學生資料列表，請勿任意刪除，以免學生權益受損喔");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TABLE_OPERATION","操作");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TABLE_REG_TIME","推薦時間");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TABLE_REG_TEACHER","推薦人");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TABLE_NO_REG_NOTICE","目前您尚無推薦記錄");

//RegTeacherStatic
DEFINE("_MD_FUNCTION_YAOH_SL_REG_STUDENT_STATIC_TITLE","教師推薦次數排名列表");
//YaohSL_RegStudentStatic
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TEACHER_STATIC_TITLE","學生學習時數列表");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TEACHER_STATIC_DESC","(*僅會列出有填具學號的學生資料 )若資料有誤,請檢查該您填具的學生學號是否有誤。錯誤的學號將無法登錄時數喔");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TEACHER_STATIC_TEACHER_NAME","教師姓名");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TEACHER_STATIC_STATIC","推薦統計");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TEACHER_STATIC_HOUR_COUNT","累計時數");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_TEACHER_STATIC_RECODER","服務學習記錄");
DEFINE("_MD_FUNCTION_YAOH_SL_REG_LIST_SQL_NO_REG","目前本服務學習無推薦記錄");
//transTaskToCSV
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_TO_CSV_TITLE_ARRAY","學年度,學期,年級,班級,座號,學號,姓名,時數,服務內容");
DEFINE("_MD_FUNCTION_YAOH_SL_TRANS_TASK_TO_CSV_FILE_NAME_HEADER","服務學習_編號");

//YaohSL_guestDeny
DEFINE("_MD_FUNCTION_YAOH_SL_GUEST_DENY_NOTICE","此動作『訪客』無法處理");


?>