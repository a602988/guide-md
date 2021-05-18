# 操作手冊說明

## 更新說明

### v1.0.4

* 優化 style.md 範本內容
* 整理 md 文件內容
* 優化文檔命名  
  `default -> workflow`、`web -> operations`、`site -> mapping`
* 優化 Seeder 內容

### v1.0.3

* 更改 md 檔案名稱，原本 `car-***` 改為 `cart-`
* 更改左側選單順序
* 更改 seed 內容順序與更改檔案名稱相關的 Seeder

## 可執行 seed 的專案

* md 檔案請放入：`storage/app/admin/guide/zh-Hant`
* 可使用 seed 資料夾寫好的 Seeder 將操作手冊資料建入專案  
  (執行前先將專案的 `guide_book` 資料表備份並清除)

## 無法 seed 的專案

* 請直接於資料庫直接蓋掉 `guide_book` 資料表的資料  
  (sql 檔案請參見 `sql` 資料夾)

## 使用手冊專案撰寫

請依據**各別專案**，異動以下內容：

1. 調整手冊中，後臺因專案需求而「增寫的模組」或「原模組異動的欄位」
2. 此為目前全部的功能，請務必至總管理後臺停用不需要顯示的模組
3. 操作流程 `workflow`：移除專案不需要的部分
4. 機制說明 `operations`：移除專案不需要的部分
5. 功能對照 `mapping`：專案客制，請以此範本使用
