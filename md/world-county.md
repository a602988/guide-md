#  縣市管理

功能路徑：`全球化管理->縣市管理`

常用於台灣可建立 ex ：台北市、台中市、花蓮縣等

大陸可建立 ex：廣州省裡面的 廣州市..等 

若有些縣市不提供運送, 請直接停用或不建立資料。



##  功能說明 

| 項目  | 格式 | 備註 |
|---|---|---|
|隸屬州區*|`單選`| 設定所屬州區 *( [州區管理](/guide/world-state) )*|
|縣市代碼*|`文字`|國際代碼，不可重複|
|縣市名稱*|`文字`||
|顯示文字|`多語系`|於網站前端顯示的文字，可依據不同語系設定|
|排序|`數字`|數字越小，優先顯示|
|啟用狀態|`單選`|啟用 / 停用|


##  操作範例說明


**操作範例說明 快速連結**

* [新增縣市](/guide/world-county#新增縣市)
* [離島不運送縣市](/guide/world-county#離島不運送縣市)

### [新增縣市](/guide/world-county#新增縣市)

1. 於 `全球化管理->縣市管理` 列表中，點選右上角按鈕 `新增` 
2. 進去新增頁面，設定以下內容 _( 範例01 )_，
3. 下方按鈕 `送出`

#### 範例01 _(欄位內容)_

| 項目  | 格式 | 備註 |
|---|---|---|
|隸屬州區*|`單選`| 台灣 |
|州區代碼*|`文字`|TW-KL|
|州區名稱*|`文字`|基隆市|
|顯示文字|`多語系`|基隆市|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|

### [離島不運送縣市](/guide/world-county#離島不運送縣市)

若有些縣市不提供運送, 請直接停用或不建立資料。

1. 於 `全球化管理->縣市管理` 列表中，選擇不運送的縣市(ex:金門縣)，點選鉛筆按鈕 `編輯` 
2. 進去修改頁面，設定以下內容 ( 範例01 )，
3. 下方按鈕 `送出`

**範例01 **

| 項目  | 格式 | 備註 |
|---|---|---|
|啟用狀態|`單選`|停用|