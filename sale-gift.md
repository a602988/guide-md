#  贈品活動

功能路徑：`促銷活動->贈品活動`

欄位的詳細說明與計算規則，請先了解後設定。請參見 [機制說明=>折扣計算說明](/guide/web#折扣說明與計算規則)


##  功能說明

**主要設定**

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|前端顯示的活動名稱 |
|活動代碼|`資料`|若需對應系統erp，可輸入代碼做商品或活動的對應。無使用可免輸入|
|活動專區|`單選`|停用，則可設定指定的連結。啟用，自動產生活動專區商品(需搭配頁面設計)_(註:活動專區)_|
|活動連結|`網址`|請輸入連結的網址，例如可以指定某分類為折扣商品專區，連結到該頁面去|
|優惠說明|`多語系`|活動的簡易說明|
|活動內容|`多語系`|活動的詳細介紹|
|顯示時間|`時間`|活動顯示時間|
|隱藏時間|`時間`|活動隱藏時間|
|開始時間|`時間`|活動開始時間|
|結束時間|`時間`|活動結束時間|
|適用星期|`複選`|設定活動可使用的星期|
|間隔天數|`數字`|設定間隔幾天可以使用一次該優惠。空白或設定為` 0 `表示不設限。預設為1，一天使用1次|
|會員群組|`複選`|設定活動可使用的會員群組|
|會員標籤|`標籤`|活動可使用的會員標籤|
|商品賣場|`複選`|活動可使用的賣場|
|商品品牌|`複選`|活動可適用的賣場 |
|商品分類|`複選`|活動可適用的商品分類|
|適用商品|`資料`|活動可適用的商品|
|排除商品|`資料`|活動排除的商品|
|條件數值|`件數`|設定滿x件或每x件|
| |`金額`|設定滿x元或每x元|
|贈品內容|`商品`|贈品數量： `＿＿`，贈送商品： `xxxx`(多選)，以此類推|
| |`折價卷`|選擇則價卷事件|
| |`點數`|選擇點數事件|
| |`線下`|文字活動|
|特殊情境|`單選`|依照各種情境限定使用。|
|重複計算|`單選`|停用/重複/強制同類/強制跨類/同類並跨類，是否可於其他折扣活動一起使用。|
|排序|`數字`|數字越大，越優先計算|
|啟用狀態|`單選`|活動狀態|



    
##  重點說明

*   **贈品中有權限不足無法看到時，不出現，且贈品數量小於贈送數量，則活動無法符合**
*   **贈品若可以選擇，則加入購物車時，也能刪除並選擇其他贈品**
*   **贈品數量如果小於贈送數量，代表不需要選擇贈品，將直接加入購物車，無法刪除**
*   **語系適用**：若有語系請記得建立，若滿/每件的活動，若該贈品無設定該幣別導致無贈品的話，該活動不會出現。若是滿/每金額的活動，無設定該幣別，也不會出現。

    
## 操作範例說明

**操作範例說明 快速連結**

以下範例為基本設定，其他欄位請依據需求輸入

* [全站滿1000送A商品](/guide/sale-gift#全站滿1000送A商品)
* [A分類滿1000送A商品](/guide/sale-gift#A分類滿1000送A商品)
* [A商品買1送1](/guide/sale-gift#A商品買1送1)
* [全站每1000送折價卷](/guide/sale-gift#全站每1000送折價卷)
* [全站滿1000送500紅利](/guide/sale-gift#全站滿1000送500紅利)
* [全站滿1000可參加抽獎活動](/guide/sale-gift#全站滿1000可參加抽獎活動)

### [全站滿1000送A商品](/guide/sale-gift#全站滿1000送A商品)

此為訂單級折扣。

1. 於 `促銷活動->贈品活動` 列表中，點選右上角按鈕 `新增` 
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出` 

#### 範例 _(欄位內容)_

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|全站滿1000送A商品|
|條件數值|`金額`|滿1000|
|贈品內容|`商品`|A商品|
|重複計算|`單選`|停用|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|

### [A分類滿1000送A商品](/guide/sale-gift#A分類滿1000送A商品)

此為商品級折扣。

1. 於 `促銷活動->贈品活動` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

#### 範例 _(欄位內容)_

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|A分類滿1000送A商品|
|商品分類|`複選`|請自行選擇，可多筆|
|條件數值|`金額`|滿1000|
|贈品內容|`商品`|A商品|
|重複計算|`單選`|停用|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|

### [A商品買1送1](/guide/sale-gift#A商品買1送1)

此為商品級折扣。

1. 於 `促銷活動->贈品活動` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

#### 範例 _(欄位內容)_

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|A商品買1送1|
|適用商品|`複選`|A商品|
|條件數值|`件數`|每1|
|贈品內容|`商品`|A商品|
|重複計算|`單選`|停用|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|


### [全站每1000送折價卷](/guide/sale-gift#全站每1000送折價卷)

此為訂單級折扣。

1. 於 `促銷活動->贈品活動` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

#### 範例 _(欄位內容)_

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|全站滿1000送折價卷|
|條件數值|`金額`|每1000|
|贈品內容|`折價卷`|指定折價卷|
|重複計算|`單選`|停用|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|


### [全站滿1000送500紅利](/guide/sale-gift#全站滿1000送500紅利)

此為訂單級折扣。

1. 於 `促銷活動->贈品活動` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

#### 範例 _(欄位內容)_

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|全站滿1000送折價卷|
|條件數值|`金額`|1000|
|贈品內容|`紅利`|指定紅利事件|
|重複計算|`單選`|停用|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|


### [全站滿1000可參加抽獎活動](/guide/sale-gift#全站滿1000可參加抽獎活動)

此為訂單級折扣。

1. 於 `促銷活動->贈品活動` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

#### 範例 _(欄位內容)_

| 項目  | 內容 | 備註 |
|---|---|---|
|活動名稱* | `多語系`|全站滿1000送折價卷|
|條件數值|`金額`|1000|
|贈品內容|`現下`|現下活動|
|重複計算|`單選`|停用|
|排序|`數字`|1|
|啟用狀態|`單選`|啟用|