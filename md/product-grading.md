#  價格分級

功能路徑：`商品管理->價格分級`

設定商品購買到一訂的數量，單價更便宜的機制。

價格分級的單價，若有參加其他促銷折扣，將會以此設定的價格分級單價計算。


**操作範例說明 快速連結**

* [新增商品量多折扣](/guide/product-grading#新增商品量多折扣)

## 注意事項

* 若您數量設定為1，且不同於 價格組合 中所設定的總價，則會以此價格分級單價為優先



##  功能說明

| 項目  | 格式 | 備註 |
|---|---|---|
|商品貨號|`自動文字`|---|
|數量|`數量`|數字以上，例如2個以上(包含2)|
|價格設定|`單選`|貨幣別：請選擇貨幣|
||`數字`|分級售價：此為單個售價，此價格會用來計算參與的促銷活動。若不想參與促銷計算，請參考 [商品管理/適用促銷](/guide/product-set)|
|賣場選擇|`複選`|組若無選擇賣場，則表示應用於所有賣場。*了解此功能請至 [賣場管理](/guide/product-market) *|
|會員群組|`複選`|限定可使用的會員群組。不選為全部群組通用。*了解此功能請至 [權限角色管理](/guide/role)* |
|起始時間|`日期`|如果需要在未來期限到後開始應用，請在此設定一個日期。|
|結束時間|`日期`|如果需要在有效期限過後停止應用，請在此設定一個日期。|
|啟用狀態|`單選`|啟用 / 停用:不會計算價格|







##  操作範例說明

### [新增商品量多折扣](/guide/product-grading#新增商品量多折扣)

1. 於 `商品管理->價格分級` 列表中，點選右上角按鈕 `新增` 
2. 進去編輯頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

#### 範例-3入單價500 _(欄位內容)_

| 項目  | 格式 | 備註 |
|---|---|---|
|商品貨號|`自動文字`|000001|
|數量|`數字`|3|
|價格設定|`單選`|貨幣別：新臺幣|
||`數字`|分級售價：500|
|賣場選擇|`複選`||
|會員群組|`複選`||
|起始時間|`日期`||
|結束時間|`日期`||
|啟用狀態|`單選`|啟用|


#### 範例-5入單價480_(欄位內容)_

| 項目  | 格式 | 備註 |
|---|---|---|
|商品貨號|`自動文字`|000001|
|數量|`數字`|5|
|價格設定|`單選`|貨幣別：新臺幣|
||`數字`|分級售價：480|
|賣場選擇|`複選`||
|會員群組|`複選`||
|起始時間|`日期`||
|結束時間|`日期`||
|啟用狀態|`單選`|啟用|