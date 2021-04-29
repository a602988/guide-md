#  點數事件

功能路徑：`會員中心->點數事件`


事件的觸發事件，以合約簽署的功能才會有效。




##  功能說明


* **帳號綁定**：可用於門市、社群、舊會員等綁定時觸發。
* **週期天數**：若次數可使用多次，以該事件第一次使用的時間開始計算。
* **會員升等 (狀態)、會員續等 (狀態)** ：是指升等時，於幾天內都屬於該狀態。可於 `購物車管理->購物車設定->欄位：等級變更狀態期效`
* **到期通知**：為前七天，例如，今天3/17，3/24到期的將於今天發送


**主要設定**

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數/購物金/儲值金等，此功能依據合約簽署才有所作用。|
|促發條件|`單選`|系統自動、訂單完成、註冊成功、門市綁定、舊轉新戶、登入成功、廣告點擊、文章點擊、商品點擊、登錄代碼。此功能依據合約簽署才有所作用。|
|事件類型|`單選`|無、首購、當月生日、當週生日、當天生日、會員升等、會員續等。此功能依據合約簽署才有所作用。|
|事件名稱|`多語系`||
|事件簡述|`多語系`||
|事件說明|`多語系`||
|點數設定|`固定點數`|x點|
||`金額計算`|百分比|
|適用會員|`複選`|選擇會員群組|
|會員標籤|`標籤`|活動可使用的會員標籤|
|緩贈天數|`數字`|事件發生後，需要經過幾天才贈送。空白則為立即給。|
|有效天數|`數字`|經由該事件發放的點數，其有效期為多少天。|
|有效至月底|`單選`|停用/啟用。有效時間是否延長到原有效天數所在日之當月月底。|
|週期天數|`數字`|間格天數的計算週期。|
|限制次數|`數字`|在週期天數內，每個會員最多可觸發的次數。|
|開始時間|`時間`|活動開始時間|
|結束時間|`時間`|活動結束時間|
|排序|`數字`|數字越大，越優先計算 _(註:排序)_|
|啟用狀態|`單選`|活動狀態|


##  可搭配設定一覽

|事件|無|首購|當月生日|當週生日|當天生日|會員升等(狀態)|會員續等(狀態)|
|---|---|---|---|---|---|---|---|
|系統自動|v|v|v|v|v|v|v|
|訂單完成|v|v|v|v|v|v|v|
|活動贈品|v|x|x|x|x|x|x|
|註冊成功|無|v|v|v|v|v|v|
|帳號綁定|無|v|v|v|v|v|v|
|舊轉新戶|無|v|v|v|v|v|v|
|登入成功|v|v|v|v|v|v|v|
|廣告點擊|v|v|v|v|v|v|v|
|文章點擊|v|v|v|v|v|v|v|
|商品點擊|v|v|v|v|v|v|v|
|登錄代碼|v|v|v|v|v|v|v|

* 請注意：當事件為 系統自動＋會員升等(狀態) 時，將不會判斷他訂單條件，只要狀態仍屬於升等期間內，將都會自動符合此事件觸發。
建議使用 訂單完成＋會員升等(狀態) 使用。請參考以下範例。

* **註冊成功**：後端新增會員，視同觸發註冊事件
* **會員升等**：會員升等事件觸發贈點/折價卷，判斷時間
  1.最後升等時間
  2.升等條件撈取今天以前符合升等條件內的時間

## 操作範例說明

* [紅利訂單加倍送](/guide/bonus-event#紅利訂單加倍送)
* [紅利商品加倍送](/guide/bonus-event#紅利商品加倍送)
* [登入送](/guide/bonus-event#登入送)
* [生日消費紅利](/guide/bonus-event#生日消費紅利)
* [生日紅利](/guide/bonus-event#生日紅利)
* [續會週期購物](/guide/bonus-event#續會週期購物)
* [升等週期購物](/guide/bonus-event#升等週期購物)
* [會員升等](/guide/bonus-event#會員升等)
* [會員續等](/guide/bonus-event#會員續等)
* [首購贈送](/guide/bonus-event#首購贈送)
* [商品點擊](/guide/bonus-event#商品點擊)
* [廣告點擊](/guide/bonus-event#廣告點擊)
* [文章點擊](/guide/bonus-event#文章點擊)
* [贈品活動送點數](/guide/bonus-event#贈品活動送點數)

### [紅利訂單加倍送](/guide/bonus-event#紅利訂單加倍送)


1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數|
|促發條件|`單選`|訂單完成|
|事件類型|`單選`|無|
|事件名稱|`多語系`|紅利訂單加倍送|
|點數設定|`固定點數`||
||`金額計算`|200|
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用|
|週期天數|`數字`||
|限制次數|`數字`||
|開始時間|`時間`|請設定|
|結束時間|`時間`|請設定|
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [紅利商品加倍送](/guide/bonus-event#紅利商品加倍送)

此功能僅會針對 `商品管理->商品管理->欄位：計算紅利：計算紅利` 的商品累計金額計算獲得紅利。

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數|
|促發條件|`單選`|訂單完成|
|事件類型|`單選`|無|
|事件名稱|`多語系`|紅利商品加倍送|
|點數設定|`固定點數`||
||`金額計算`|200|
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|請自行設定|
|週期天數|`數字`||
|限制次數|`數字`||
|開始時間|`時間`|請設定|
|結束時間|`時間`|請設定|
|排序|`數字`||
|啟用狀態|`單選`|啟用|


### [登入送](/guide/bonus-event#登入送)


1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數|
|促發條件|`單選`|登入成功	|
|事件類型|`單選`|無|
|事件名稱|`多語系`|登入送|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`|1|
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|


### [註冊送](/guide/bonus-event#註冊送)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數|
|促發條件|`單選`|註冊成功|
|事件類型|`單選`|無|
|事件名稱|`多語系`|註冊送|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [帳號綁定](/guide/bonus-event#帳號綁定)


1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數|
|促發條件|`單選`|帳號綁定|
|事件類型|`單選`|無|
|事件名稱|`多語系`|帳號綁定|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [生日消費紅利](/guide/bonus-event#生日消費紅利)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`|紅利點數|
|促發條件|`單選`|訂單完成|
|事件類型|`單選`|當月生日、當週生日、當天生日，皆可設定，請依據您需求擇一選擇|
|事件名稱|`多語系`|生日消費紅利|
|點數設定|`固定點數`||
||`金額計算`|(請自行設定)|
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`|31|
|限制次數|`數字`|1|
|開始時間|`時間`|當月生日：下個月1號開始、當週生日：下週一開始、當天生日：當天開始|
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [生日紅利](/guide/bonus-event#生日紅利)


1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|系統自動|
|事件類型|`單選`|當月生日、當週生日、當天生日，皆可設定，請依據您需求擇一選擇|
|事件名稱|`多語系`|生日紅利|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`|31|
|限制次數|`數字`|1|
|開始時間|`時間`|當月生日：下個月1號開始、當週生日：下週一開始、當天生日：當天開始|
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [續會週期購物](/guide/bonus-event#續會週期購物)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|訂單完成|
|事件類型|`單選`|會員續等|
|事件名稱|`多語系`|會員等級-續年度維持|
|點數設定|`固定點數`||
||`金額計算`|(請自行設定)|
|適用會員|`複選`|依據續等後的會員群組設定|
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`|依據該等級週期設定|
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [升等週期購物](/guide/bonus-event#升等週期購物)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|訂單完成|
|事件類型|`單選`|會員升等|
|事件名稱|`多語系`|會員等級-升等週期購物|
|點數設定|`固定點數`||
||`金額計算`|(請自行設定)|
|適用會員|`複選`|依據生等後的會員群組設定|
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [會員升等](/guide/bonus-event#會員升等)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|系統自動|
|事件類型|`單選`|會員升等|
|事件名稱|`多語系`|會員升等|
|點數設定|`固定點數`||
||`金額計算`|(請自行設定)|
|適用會員|`複選`|依據生等後的會員群組設定|
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [會員續等](/guide/bonus-event#會員續等)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|系統自動|
|事件類型|`單選`|會員續等|
|事件名稱|`多語系`|會員續等|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`|依據續等後的會員群組設定|
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`|依據該等級週期設定|
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [首購贈送](/guide/bonus-event#首購贈送)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|訂單完成|
|事件類型|`單選`|首購|
|事件名稱|`多語系`|首購贈送|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`|1|
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [商品點擊](/guide/bonus-event#商品點擊)


1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|商品點擊|
|事件類型|`單選`|無|
|事件名稱|`多語系`|商品點擊|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`||
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [廣告點擊](/guide/bonus-event#廣告點擊)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|廣告點擊|
|事件類型|`單選`|無|
|事件名稱|`多語系`|廣告點擊|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`||
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

### [文章點擊](/guide/bonus-event#文章點擊)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|文章點擊|
|事件類型|`單選`|無|
|事件名稱|`多語系`|文章點擊|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`||
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|


### [贈品活動送點數](/guide/bonus-event#贈品活動送點數)

1. 於 `會員中心->點數事件` 列表中，點選右上角按鈕 `新增`
2. 進去新增頁面，設定以下內容 _( 範例 )_，
3. 下方按鈕 `送出`
4. 請至 [贈品活動](/guide/sale-gift#全站滿1000送500紅利) 新增贈品點數活動設定。

| 項目  | 內容 | 備註 |
|---|---|---|
|點數類別|`單選`||
|促發條件|`單選`|活動贈品|
|事件類型|`單選`|無|
|事件名稱|`多語系`|贈品活動送點數|
|點數設定|`固定點數`|(請自行設定)|
||`金額計算`||
|適用會員|`複選`||
|會員標籤|`標籤`||
|緩贈天數|`數字`||
|有效天數|`數字`||
|有效至月底|`單選`|停用(請自行設定)|
|週期天數|`數字`||
|限制次數|`數字`||
|開始時間|`時間`||
|結束時間|`時間`||
|排序|`數字`||
|啟用狀態|`單選`|啟用|

