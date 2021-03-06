# 訂單資料

功能路徑：`訂單管理->訂單資料`

**訂單處理流程對應表：**

| 流程 | 訂單狀態 | 訂單-貨運狀態 | 物流-出貨狀態 | 物流-物流狀態 | 金流-繳款狀態 | 金流-收款狀態 |
| --- | --- | --- | --- | --- | --- | --- |
| 訂單成立 | 待處理 | 未出貨 | 無 | 無 | 未付款 | - |
| 撿貨 | **處理中** | **撿貨** | 無 | 無 | 付款成功 | - |
| 理貨 | 處理中 | **理貨** | **待出貨** | **未到貨** | 付款失敗 | - |
| 出貨 | 處理中 | **出貨** | **已出貨** | 未到貨 | - | - |
| - | - | - | - | 待取貨(超商/門市) | - | - |
| 訂單完成 | 已完成 | 已送達 | 已出貨 | **已到貨** | - | - |
| 到貨 | 處理中 | **已送達** | 已出貨 | 已到貨 | - | - |

## 注意事項

* **檢貨訂單：** 已撿貨的訂單，使用者可於前端取消，系統金自動產生完成的退貨單不用處理。若訂單狀態已出貨，將採正常退貨申請流程。
* **批量出貨：** 批量出貨將都為每筆訂單都為單筆貨運單號，出貨的`貨運服務`，將自動依據 訂單本身消費者選擇的取貨方式，對應於後端 `購物車管理->取貨方式->取貨名稱` 中所選擇的 `物流服務` ，若有多個物流服務，則依據`系統整合->第三方設定->物流廠商(排序數字最小的)` 為預設優先使用。
* **部分出貨：** 部分商品出貨時，下一次再產生的出貨單，就會自動扣除已出貨商品部分
* **拋轉出貨單：** 若有拋轉到第三方物流廠商，都以 `訂單管理->物流資料`中，`出貨狀態` 為 `檢貨完成` 的才會拋轉。
* **到貨：** 是指 送貨狀態 配送完成後7天才會變成訂單完成
* **配送完成：** 若無串接需手動，手動設定配送完成。自動則依據廠商拋回來自動更改。
* **訂單取消：** 除了客戶手動取消訂單，當訂單於14天(可於 `購物車管理->購物車設定` 內更改)內未付款，將自動取消。
* **訂單取消：** 已經有退貨單的訂單，則不會產生退貨單，但若無退貨單的訂單，將自動產生一筆退貨單，且退貨單狀態為已完成。
* **自動出貨：** 自動出貨的機制，請於 `購物車管理->購物車設定->自動批次設定`，自動出貨僅會執行沒有出過貨的訂單，若有部分出貨，則不會執行。

**訂單狀態：說明**

1. 待處理：待處理的訂單
2. 處理中：已進入撿貨訂單
3. 已完成：**全部商品**已出貨滿7天，將自動變成已完成，商品則不可退貨。
4. 無效訂單：用於非使用者行為的取消，此不計入失敗訂單統計等
5. 取消訂單：未撿貨前可取消的訂單

## [整合ERP端出貨、回傳出貨狀態](/guide/order-form#整合ERP端出貨、回傳出貨狀態) {#整合ERP端出貨、回傳出貨狀態}

若您是使用ERP或POS等公司系統端處理作業，並由ERP或POS等公司系統回傳處理狀態，流程為下：

* 依據[排程時間](/guide/web#排程時間)，拋轉情境可出貨訂單(例如信用卡已付款、貨到付款等)
* 依據[排程時間](/guide/web#排程時間)，撈取貨運編號，自動變更`訂單狀態、物流狀態`為`已出貨`

## [整合ERP端資料、物流自動出貨](/guide/order-form#整合ERP端資料、物流自動出貨) {#整合ERP端資料、物流自動出貨}

若您是使用ERP或POS等公司系統端接收網站資料，並由物流公司出貨並回傳各種物流與取貨金流狀態，流程為下：

* 依據[排程時間](/guide/web#排程時間)，拋轉情境可出貨訂單於ERP或POS等公司系統端(例如信用卡已付款、貨到付款等)
* 依據[排程時間](/guide/web#排程時間)，撈取物流公司物流狀態，自動變更`訂單狀態、物流狀態、金流狀態`等狀態。

## [整合ERP端資料、網站出貨](/guide/order-form#整合ERP端資料、網站出貨) {#整合ERP端資料、網站出貨}

若您是使用ERP或POS等公司系統端接收網站資料，統一由網站處理作業，並由網站端拋轉訂單各種狀態給您的系統，流程為下：

* 依據[排程時間](/guide/web#排程時間)，拋轉情境可出貨訂單於ERP或POS等公司系統端(例如信用卡已付款、貨到付款等)
* 依據[排程時間](/guide/web#排程時間)，若以拋轉訂單狀態有異動，將會再次拋轉(包含訂單失效、取消等等)

## 操作範例說明 快速連結

依據不同商品屬性，或流程，請觀看您需要的部分即可。

**流程管理**

* [檢貨](/guide/order-form#檢貨)
  * [訂單批量檢貨](/guide/order-form#訂單批量檢貨)
  * [訂單單筆檢貨](/guide/order-form#訂單單筆檢貨)
* [理貨](/guide/order-form#理貨)
  * [出貨掃碼](/guide/order-form#出貨掃碼)
  * [訂單單筆出貨](/guide/order-form#訂單單筆出貨)
  * [訂單批次出貨](/guide/order-form#訂單批次出貨)
  * [列印出貨單](/guide/order-form#列印出貨單)
  * [列印貨運單](/guide/order-form#列印貨運單)：黑貓或宅急便等格式單
* [訂單批次建立待開發票](/guide/order-form#訂單批次建立待開發票)
* [已送達](/guide/order-form#已送達)
* [自動完成訂單](/guide/order-form#自動完成訂單)
* [訂單手動完成](/guide/order-form#訂單手動完成)

**報表建立**  

* [建立訂單的自訂篩選](/guide/order-form#建立訂單的自訂篩選)
  * [待撿貨-未收款](/guide/order-form#待撿貨-未收款)
  * [待撿貨-已收款](/guide/order-form#待撿貨-已收款)
  * [待撿貨-預購品](/guide/order-form#待撿貨-預購品)
  * [待出貨](/guide/order-form#待出貨)
  * [已出貨-今日](/guide/order-form#已出貨-今日)
  * [出貨後7天](/guide/order-form#出貨後7天)
  * [退貨-待處理訂單](/guide/order-form#退貨-待處理訂單)
  * [代客下訂的訂單報表](/guide/order-form#代客下訂的訂單報表)

## 操作範例說明

### [檢貨](/guide/order-form#檢貨) {#檢貨}

#### [訂單批量檢貨](/guide/order-form#訂單批量檢貨) {#訂單批量檢貨}

1. 於 `訂單管理->訂單資料` 或由自訂篩選進入，顯示的訂單列表中，勾選要撿貨的訂單
2. 於右上角點選 `批次->撿貨總表`，跳出視窗中，點選 `變更並列印` 後將自動變更狀態 *（訂單狀態為 `處理中`，訂單貨運狀態則為 `撿貨`)*，此將列印您所勾選訂單的所有商品數量總表，方便您快速撿貨。
3. 於產出的網頁點選瀏覽器的列印功能即可列印撿貨單
4. 於右上角點選 `批次->撿貨單`，跳出視窗中，點選 `列印`，此將列印每筆訂單商品數量明細，方便您掃碼包裝出貨。
5. 於產出的網頁點選瀏覽器的列印功能即可列印撿貨單

#### [訂單單筆檢貨](/guide/order-form#訂單單筆檢貨) {#訂單單筆檢貨}

1. 於 `訂單管理->訂單管理` 列表中，勾選要列印的撿貨單
2. 於右上角點選 `批次->撿貨單`，彈跳視窗中，點選 `僅列印`
3. 於產出的網頁點選瀏覽器的列印功能即可

### [理貨](/guide/order-form#理貨) {#理貨}

#### [出貨掃碼](/guide/order-form#出貨掃碼) {#出貨掃碼}

1. 請先製作檢貨單([檢貨](/guide/order-form#檢貨))，列印出的撿貨單右上角的條碼即為訂單編號條碼。
2. 於 `訂單管理->訂單資料` 右上角點選 `掃碼出貨`
3. 於跳出視窗中，掃碼或輸入 訂單編號
4. 進入`物流資料新增`，輸入以下內容

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 出貨商品 | 資料 | 請勾選全部出貨的商品或部分出貨商品 |
| 出貨代號 | 資料 | 請直接掃描後將自動帶入與勾選出貨商品 |
| 貨運服務 | 單選 | 自動帶入或自行選擇 |
| 貨運編號 | 文字 | 自動帶入或自行輸入 |
| 出貨狀態 | 單選 | 待出貨 |
| 同步訂單狀態 | 單選 | 撿貨 |

**備註：**

* 出貨狀態：物流`出貨狀態，`若為串接第三方，請於掃碼出貨後，狀態設定為 `待出貨`，系統將自動拋轉到第三方，並將出貨狀態更改為 `已出貨`

### [出貨](/guide/order-form#出貨) {#出貨}

#### [訂單批次出貨](/guide/order-form#訂單批次出貨) {#訂單批次出貨}

**請注意，批量出貨會將訂單所有商品用同一個物流單出貨。**
**請注意，可自動出貨的機制設定，請參見： `購物車管理->購物車設定->自動批次設定`**
**批量出貨：** 批量出貨會將訂單所有商品用同一個物流單出貨，出貨的`貨運服務`，將自動依據 訂單本身消費者選擇的取貨方式，對應於後端 `購物車管理->取貨方式->取貨名稱` 中所選擇的 `物流服務` ，若有多個物流服務，則依據`系統整合->第三方設定->物流廠商(排序數字最小的)` 為預設優先使用。

1. 於 `訂單管理->訂單資料->篩選：貨運狀態(檢貨)` 或由自訂篩選進入，顯示的訂單列表中，勾選全部要出貨的訂單
2. 進入編輯頁面，於右上角點選 `自動出貨`
3. 下方按鈕 `送出`
4. [列印貨運單](/guide/order-form#列印貨運單)

#### [訂單單筆出貨](/guide/order-form#訂單單筆出貨) {#訂單單筆出貨}

1. 於 `訂單管理->物流資料` 列表中，點選要出貨的出貨單`編輯`
2. 設定以下內容 _( 範例 )_，
3. 列印出貨單，請參見 [列印出貨單](/guide/order-form#列印出貨單)

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 出貨商品 | 資料 | 請勾選全部出貨的商品或部分出貨商品 |
| 貨運服務 | 單選 | 請選擇服務的廠商 |
| 貨運編號 | 文字 | 如果有的話請輸入貨運編號 |
| 出貨狀態 | 單選 | 已出貨 |
| 出貨日期 | 日期 | 當日 |
| 同步訂單狀態 | 單選 | 出貨 |

#### [列印出貨單](/guide/order-form#列印出貨單) {#列印出貨單}

1. 於 `訂單管理->物流資料` 列表中，勾選要列印的出貨單
2. 於右上角點選 `批次->出貨單`
3. 於產出的網頁點選瀏覽器的列印功能即可

#### [列印貨運單](/guide/order-form#列印貨運單) {#列印貨運單}

此需有搭配貨運單的物流廠商。

1. 於 `訂單管理->物流資料` 列表中，勾選要列印的出貨單
2. 於右上角點選 `批次->托運單`
3. 於產出的網頁點選瀏覽器的列印功能即可

#### [訂單批次建立待開發票](/guide/order-form#訂單批次建立待開發票) {#訂單批次建立待開發票}

1. 於 `訂單管理->訂單資料->篩選` 或由自訂篩選(例如：[已出貨-今日](/guide/order-form#已出貨-今日))進入，顯示的訂單列表中，勾選全部要開發票的訂單
2. 進入編輯頁面，於右上角點選 `自動發票`
3. 下方按鈕 `送出`
4. 將會自動產生待開發票資訊
5. 若為串接第三方，將於排程拋轉時，自動將`會計管理->發票管理`的`開立狀態`改為`已開立`
6. 若為手動開立發票，需補上建立發票的日期與號碼資訊，請參見  [已開立發票](/guide/receipt#已開立發票)

#### [已送達](/guide/order-form#已送達) {#已送達}

若無自動串接物流廠商，您可手動異動物流狀態為已送達。
此動作將發出系統通知信件：物流 - 商品到貨通知

1. 由自訂篩選 [出貨後7天](/guide/order-form#出貨後7天) 進入，顯示的訂單列表中，勾選全部要的物流單
2. 進入編輯頁面，於右上角點選 `批次/異動多重狀態`
3. 設定狀態=> 到貨狀態：已到貨、同步訂單狀態：已送達
4. 下方按鈕 `確認異動`

### [自動完成訂單](/guide/order-form#自動完成訂單) {#自動完成訂單}

已送達的訂單，將於 `購物車管理/購物車設定/自動完成訂單` 中欄位的數值，於該天數後自動異動狀態為 `已完成`。

### [訂單手動完成](/guide/order-form#訂單手動完成) {#訂單手動完成}

1. 更改金流單狀態為已付款：請參見 [已付款](/guide/order-payment#已付款)
2. 更改物流單狀態為已到達：請參見 [已到貨](/guide/order-delivery#已到貨)
3. 或於 `訂單管理->訂單資料` 列表中，於右上角點選 `批次/異動多重狀態`，勾選要異動的訂單
4. 設定狀態=> 送貨狀態：已送達 、付款狀態：已付款、訂單狀態：已完成
5. 下方按鈕 `確認異動`

### [建立訂單的自訂篩選](/guide/order-form#建立訂單的自訂篩選) {#建立訂單的自訂篩選}

#### [待撿貨-未收款](/guide/order-form#待撿貨-未收款) {#待撿貨-未收款}

用於 **超商取貨付款、貨到付款、門市取貨付款、免付費訂單** 等未收到錢可出貨付款方式的訂單。

**請注意需排除有退貨單的商品。**

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 訂單狀態 | `多選` | 待處理 |
| 付款狀態 | `多選` | 未付款 |
| 送貨狀態 | `多選` | 未出貨 |
| 退貨單 | `多選` | 無退貨單 |
| 不含商品類型 | `多選` | 預購品 |
| 付款方式 | `多選` | 超商取貨付款、貨到付款、門市取貨付款、免付費訂單 |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 待撿貨-未收款 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 1 |

#### [待撿貨-已收款](/guide/order-form#待撿貨-已收款) {#待撿貨-已收款}

用於 **超商取貨付款、貨到付款、門市取貨付款、免付費訂單** 等未收到錢可出貨付款方式的訂單。

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 訂單狀態 | `多選` | 待處理 |
| 付款狀態 | `多選` | 已付款 |
| 送貨狀態 | `多選` | 未出貨 |
| 退貨單 | `多選` | 無退貨單 |
| 不含商品類型 | `多選` | 預購品 |
| 付款方式 | `多選` | 信用卡 (一次付清)、信用卡分期 (3期0利率)、信用卡分期 (6期0利率)、信用卡分期 (12期0利率)、信用卡分期 (18期)、信用卡分期 (24期)、虛擬帳號 ATM、Line Pay、信用卡定期定額 (每月*12次) |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 待撿貨-已收款 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 2 |

#### [待撿貨-預購品](/guide/order-form#待撿貨-預購品) {#待撿貨-預購品}

用於 **預購品** 等訂單。

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 訂單狀態 | `多選` | 待處理 |
| 付款狀態 | `多選` | 已付款 |
| 送貨狀態 | `多選` | 未出貨 |
| 退貨單 | `多選` | 無退貨單 |
| 包含商品類型 | `多選` | 預購品 |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 待撿貨-預購品 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 3 |

#### [待出貨](/guide/order-form#待出貨) {#待出貨}

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 送貨狀態 | `多選` | 檢貨中 |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | ˋ訂單 |
| 搜尋名稱 | `多語系` | 待出貨 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 3 |

#### [已出貨-今日](/guide/order-form#已出貨-今日) {#已出貨-今日}

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 出貨日期 | `日期` | 今日 |
| 送貨狀態 | `多選` | 已出貨 |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 已出貨-今日 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 3 |

#### [出貨後7天](/guide/order-form#出貨後7天日) {#出貨後7天日}

1. 於 `訂單管理->物流資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 出貨日期 | `日期` | 在過去...之前/7/日 |
| 出貨狀態 | `多選` | 已出貨 |
| 送貨狀態 | `多選` | 出貨 |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 出貨後7天 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 3 |

#### [退貨-待處理訂單](/guide/order-form#退貨-待處理訂單) {#退貨-待處理訂單}

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 訂單狀態 | `複選` | 處理中 |
| 訂單狀態 | `複選` | 撿貨中、理貨、出貨、已送達 |
| 退貨單 | `多選` | 有退貨單 |

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 退貨-待處理訂單 |
| 公用狀態 | `單選` | 所有用戶可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
| 排序 | `數字` | 3 |

#### [代客下訂的訂單報表](/guide/order-form#代客下訂的訂單報表) {#代客下訂的訂單報表}

1. 於 `訂單管理->訂單資料` 列表中，點選右上角按鈕 `進階搜尋`
2. 進去新增頁面，設定以下內容 _( 範例1 )_，
3. 下方按鈕 `儲存`
4. 進入 `自訂篩選 編輯` ，設定以下內容 _( 範例2 )_，

_範例1：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 欄位依據 | `複選` | 追蹤來源 |
| 關鍵字 | `文字` | 管理者 ID |

**備註：**

* **取得管理者ID**：取得管理者ID，可直接參見下訂的訂單，來源會帶入管理者ID。或於`帳戶資訊=>後台帳戶管理`，點選編輯，網址出現於edit前面的字串則是該帳號的ID，例如：admin/xxxx/edit，xxxx就是ID

_範例2：請自行依據實際需求調整_

| 項目 | 內容 | 備註 |
| --- | --- | --- |
| 搜尋類別 | `固定` | 訂單 |
| 搜尋名稱 | `多語系` | 代客下訂的訂單報表 |
| 公用狀態 | `單選` | 僅自己可見 |
| 篩選條件 | `篩選` | 同上範例內容 |
