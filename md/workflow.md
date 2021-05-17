# 操作流程

請建議依據網站建置步驟建立您的網站內容，各順序的功能模組請連結至各模組內說明操作。

**操作範例說明 快速連結**

1. [登入](/guide/workflow#登入)
2. [基本建置](/guide/workflow#基本建置)：網站的基本資訊、管理者群組帳號、郵件伺服器、防火牆等基本設定。
3. [內容建置](/guide/workflow#內容建置)：請依據各模組建置。
4. [會員](/guide/workflow#會員)：會員的相關管理
5. [購物車設定](/guide/workflow#購物車設定)：購物車的運費、使用金流、運送方式等設定
6. [產品建置](/guide/workflow#產品建置)：產品的建置流程
7. [促銷折扣活動設定](/guide/workflow#促銷折扣活動設定)：所有促銷活動設定。
8. [其他功能](/guide/workflow#其他功能)：商品附加功能、電子報、簡訊發送、客服中心、行銷統計、行銷模組工具等等
9. [常用報表](/guide/workflow#常用報表)：訂單、金流、物流、發票、商品等常用報表。
10. [上線設定](/guide/workflow#上線設定)：網站正式上線時須設定項目。
11. [訂單管理流程](/guide/workflow#訂單管理流程)
12. [退貨管理流程](/guide/workflow#退貨管理流程)
13. [預約系統管理](/guide/workflow#預約系統管理)：所有預約商品的建置與管理。

## [登入](/guide/workflow#登入) {#登入}

**登入網址：** /siteadmin/login

**帳號:** 請洽詢廠商

**密碼：** 請洽詢廠商

**驗證碼：** 請輸入畫面顯示之驗證碼

**記住我：** 紀錄於瀏覽器 Cookie，只要未清除 Cookie，皆不需再重新登入。但若同時登入前端，登入前將會清除 Cookie。

## [基本建置](/guide/workflow#基本建置) {#基本建置}

* [網站基本資訊](/guide/web-data)： `控制台->網站基本資訊`  
  網站基本設定（網站名稱、系統信箱等）、聯絡資訊（電話、地址、服務信箱等）、社群媒體平台、搜尋引擎優化設定、網站追蹤碼設定、網站離線訊息、EULA 訊息。
Head前後與Body間的代碼設定，網站logo等置換。

* [群組角色管理](/guide/role)： `帳戶資訊->群組角色管理`  
  後端管理者帳戶權限設定，可針對不同角色設定可管理之功能與該功能瀏覽、新增、編輯、刪除等功能，另外包含解密資料瀏覽、檔案上傳、內容類別(例如最新消息分類)的權限。
例如總管理者可以管理全部功能，而上架角色者能發布新聞。

* [後臺帳戶管理](/guide/admin)： `帳戶資訊->後臺帳戶管理`  
  管理後端管理者帳號，設定所屬帳號群組，支持兩段式驗證(帳號於使用外網登入時，且每次登入都會產生MAIL驗證，即可跳過網站後端防火牆機制登入)

* [防火牆設定](/guide/firewall)： `資訊安全->防火牆`  
  防火牆功能可以保護使用者帳戶只能從特定的連線 IP 位址登入網站管理，或鎖定特定的IP 位址禁止連線。

* [第三方設定](/guide/service-config)：`系統整合->第三方設定`

* 網站發信設定：  
  若您未購買本公司電子郵件伺服器，請自行設定或將設定資料給予我方協助設定。請參見
  * [電子郵件伺服器](/guide/service-config#電子郵件伺服器)：`系統整合->第三方設定->電子郵件伺服器`
  * [電子報伺服器](/guide/service-config#電子報伺服器)：`系統整合->第三方設定->電子報伺服器`

* 其他第三方設定：除兩上述發信設定外，其他設定若需異動，建議您洽詢本公司。

* [事件通知信件](/guide/notify-email)：`控制台->事件通知信件`  
  藉由事件通知功能可以讓你設定當發生事件時，是否要傳送信件通知， 例如系統收到新的客服信件或客戶訂單、產品詢價單等，系統就會自動發出提醒通知信件， 同時你也可以在此編輯和修改要給事件收件人的通知信件與簡訊內容和格式，包含排序、啟用、停用之管理。  
  事件通知發送的說明，請參見 [事件通知(信箱/簡訊)觸發與發送](/guide/operations#事件通知(信箱/簡訊)觸發與發送)

* [事件通知簡訊](/guide/notify-sms)：`控制台->事件通知簡訊`  
  藉由事件通知功能可以讓你設定當發生事件時，是否要傳送信件通知， 例如系統收到新的客服信件或客戶訂單、產品詢價單等，系統就會自動發出提醒通知信件， 同時你也可以在此編輯和修改要給事件收件人的通知信件與簡訊內容和格式，包含排序、啟用、停用之管理。  
  事件通知發送的說明，請參見 [事件通知(信箱/簡訊)觸發與發送](/guide/operations#事件通知(信箱/簡訊)觸發與發送)

## [內容建置](/guide/workflow#內容建置) {#內容建置}

若您對應前端覺得麻煩，可直接參考 [前後台功能對照](/guide/mapping)

* [內容類別管理](/guide/article-category)：`內容管理->內容類別管理`  
  管理網站內容型態的資料類別，例如：最新消息分類、常見問答分類等等。可自訂排序、網址名稱、套用的版型、SEO、、停用啟用管理、後端可管理的群組*(需開設此權限，了解功能請參考：[群組角色管理](/guide/role))*。  
  分類的階層數依據前端設計固定。

* [新聞稿](/guide/article-news)：`內容管理->新聞稿`  
  各種訊息發布管理，例如 `最新消息` 與 `活動訊息` 等頁面。可設定新聞標題、簡短敘述 、內容、置頂、fb留言開放、代表的圖片(依據設計內容)、版型、關聯項目(依據設計內容)、網址名稱、SEO、發布下架時間、排序、停用啟用狀態、會員權限、關聯標籤、指定連結。可靈活地修改、增加、刪除頁面。

* [靜態頁面](/guide/article-page)：`內容管理->靜態頁面`  
  網站介紹內容的資料管理。例如：關於我們、隱私權聲明等圖文編輯的頁面。可設定頁面名稱、內容、代表的圖片(依據設計內容)、版型、關聯項目(依據設計內容)、網址名稱、SEO、發布下架時間、排序、停用啟用狀態。可靈活地修改、增加、刪除頁面。

* [常見問答](/guide/article-faq)：`內容管理->常見問答`  
  網站常見問題資料管理。例如：常見問題、使用QA等編輯器頁面或區塊。可設定標題、問答內容、代表圖片、關聯項目(依據設計內容)、網址名稱、SEO、發布下架時間、排序、停用啟用狀態。

* [檔案下載](/guide/article-download)：`內容管理->檔案下載`  
  網站檔案下載資料管理。例如：檔案下載、驅動程式等檔案。可紀錄下載次數，設定標題、檔案敘述、關聯項目(依據設計內容)、網址名稱發布下架時間、排序、停用啟用狀態。

* [專欄文章](/guide/article-column)：`內容管理->專欄文章`  
  文章的發布管理，例如 `小編專欄` 與 `部落客推薦` 等頁面。可設定文章標題、內容、代表的圖片(依據設計內容)、關聯項目(依據設計內容)、網址名稱、SEO、發布下架時間、排序、停用啟用狀態、置頂。可靈活地修改、增加、刪除頁面。

* [營業據點](/guide/article-column)：`內容管理->營業據點`  
  用於例如 `營業據點` 與 `取貨門市` 等功能頁面。可設定據點名稱、營業時間、簡短敘述、詳細介紹、代表圖片、基本聯絡資訊、關聯項目(依據設計內容)、標籤、排序、停用啟用狀態。

* [團隊介紹](/guide/article-team)：`內容管理->團隊介紹`  
  用於前端頁面例如 `我們的團隊` 、 `技術人員` 等頁面。可設定類別、名稱、職稱、介紹內容、代表圖片、關聯項目(依據設計內容)、網址名稱、SEO、發布下架時間、排序、停用啟用狀態、置頂。可靈活地修改、增加、刪除頁面。

* [項目管理](/guide/article-element)：`內容管理->項目管理`  
  各種頁面區塊的管理，例如 `歷史沿革` 、 `證書榮耀` ...等頁面。可設定項目標題、內容、代表的圖片(依據設計內容)、關聯項目(依據設計內容)、發布下架時間、排序、停用啟用狀態。可靈活地修改、增加、刪除資料。

* [廣告位置管理](/guide/advertising)：`內容管理->廣告項目`  
  用於網站首頁的廣告區塊、頁面的banner、局部的區塊等**位置**管理。

* [廣告管理](/guide/advertising)：`內容管理->廣告項目`  
  用於網站首頁的廣告區塊、頁面的banner、局部的區塊等資料管理。

* [選單管理](/guide/web-menu)：`控制台->前台選單項目`  
  整體網站選單設定，包含主選單、頁尾選單等等，依據設計而配置。

## [會員](/guide/workflow#會員) {#會員}

* [新增會員等級](/guide/role#新增會員等級)： `帳戶資訊->權限角色管理`  
  設定會員等級。

* [會員升等規則](/guide/member-upgrade)： `會員中心->會員升等規則`  
  設定會員群組自動升級/降級的條件，可依據累積金額、單次購買金額、購物次數的判斷自動升等，並可設定判斷所需計算的月份。升等狀態適用的天數，可運用在促銷上是否符合之使用，例如升等七天內可符合促銷設定的活動(需搭配相關促銷模組)。

## [購物車設定](/guide/workflow#購物車設定) {#購物車設定}

* [購物車設定](/guide/cart-config)： `購物車管理->購物車設定`：設定購物車常用參數，例如瀏覽紀錄保存、退貨期限、訂單顯示紀錄等等。
* [網站使用貨幣](/guide/world-currency) ： `全球化管理->貨幣管理`：設定網站顯示的貨幣與換算，此為專案開發時固定選項，新增時需看前端介面是否有對應。

1. [設定可銷售國家地區](/guide/world-continent) ：
   * [大洲管理](/guide/world-continent)  ： `全球化管理->大洲管理`
   * [國家管理](/guide/world-country)：`全球化管理->國家管理`：設定運送的國家
   * [洲區管理](/guide/world-state)：`全球化管理->洲區管理`：設定運送的洲區
   * [縣市管理](/guide/world-county)：`全球化管理->縣市管理`：設定運送的縣市
   * [城鎮管理](/guide/world-city)：`全球化管理->城鎮管理`：設定運送的城鎮
2. [設定金流群組](/guide/site-parameter-group#設定金流群組) ： `控制台->參數項目`：設定商品使用的金流群組
3. [設定物流群組](/guide/site-parameter-group#設定物流群組) ： `控制台->參數項目`：設定商品使用的物流群組
4. [設定金流](/guide/order-payment) ： `購物車管理->付款方式`：設定網站使用的金流
5. [使用物流](/guide/order-delivery) ： `購物車管理->取貨方式`：設定網站**本島、離島、跨國**使用的物流
6. 電子發票：[發票字軌管理](/guide/receipt-number) ：`會計管理->發票字軌管理`:此為使用財政部電子發票主機適用，若您是串接綠界或者手動者，請忽略此項目設定。

## [產品建置](/guide/workflow#產品建置) {#產品建置}

**商品相關**

* [建立商品通用運送說明](/guide/site-parameter-item) ： `控制台->運送說明`：每個案件設計不同，此會出現當商品有運送說明區塊時，會自動帶出來。
* [設定產品規格](/guide/site-parameter-group#產品規格)： `控制台->參數群組`：當您的商品有不同的顏色、尺寸、重量、材質等各種規格，可先於此設定。
* [產品分類](/guide/order-delivery) ： `商品管理->商品分類`
* [建立品牌分類](/guide/site-parameter-item) ： `控制台->參數項目`
* [設定品牌](/guide/product-brand) ： `商品管理->品牌管理`
* [賣場管理](/guide/product-market)：`商品管理->賣場管理`：若您的購物車有建立不同平台銷售，可於此管理您的賣場資訊。若無，請直接忽略即可。

**商品建置**

1. [建立品項](/guide/product-item) ： `商品管理->品項管理`：建立基本的品項資料
2. [建立商品內容](/guide/product-set) ： `商品管理->商品管理`：建立前端瀏覽者看到的商品詳細資料
3. [設定價格/組合](/guide/product-package) ：`商品管理->價格組合`

**商品建置後設定**

* [設定運費](/guide/cart-shipping) ：`購物車管理->運費設定`

## [促銷折扣活動設定](/guide/workflow#促銷折扣活動設定){#促銷折扣活動設定}

1. [折扣活動](/guide/sale-discount) ： `活動促銷>折扣活動`
2. [贈品活動](/guide/sale-gift) ： `活動促銷>贈品活動`
3. [數量優惠](/guide/sale-grading) ： `活動促銷>數量優惠`
4. [等級優惠](/guide/sale-level) ： `活動促銷>等級優惠`
5. [搭配優惠](/guide/sale-collect) ： `活動促銷>搭配優惠`
6. [加購管理](/guide/sale-addition) ： `活動促銷>加購管理`
7. [兌禮管理](/guide/sale-redeem) ： `活動促銷>兌禮管理`
8. [折價券事件](/guide/coupon-event) ： `活動促銷>折價券事件`
9. [折價券設定](/guide/coupon-config) ： `活動促銷>折價券設定`
10. [折價券明細](/guide/coupon-ticket.) ： `活動促銷>折價券明細`
11. [點數設定](/guide/bonus-event) ： `會員中心>點數設定`
12. [點數事件](/guide/bonus-record) ： `會員中心>點數事件`
13. [點數設定](/guide/bonus-config) ： `會員中心>點數設定`

## [其他功能](/guide/workflow#其他功能) {#其他功能}

**商品**

* [貨到通知](/guide/product-arrival) ：`購物車管理->貨到通知`：前端使用者若針對有缺貨的商品，點選貨到通知將會於此紀錄。
* [商品評價](/guide/product-rating) ：`購物車管理->商品評價`：前端使用者若有評價商品(商品直接評價或購買後評價，此為依據專案不同)，可於此管理顯示方式與自行新增好的評價。

**電子報**

* [電子報類別](/guide/epaper-category)：`電子報->電子報類別 `:可自訂各種電子報類別，提供使用者訂閱他想要的資訊。
* [範本管理](/guide/epaper-template)：`電子報->範本管理 `:常用的發信格式，可於此建立套用。
* [訂閱名單](/guide/epaper-subscriber)：`電子報->訂閱名單 `:網站訂閱電子報的名單。
* [發送管理](/guide/epaper-history)：`電子報->發送管理 `:發送電子報與發送紀錄，包含發送後的追蹤。

**簡訊發送**

* [簡訊類別](/guide/sms-category)：`簡訊發送->簡訊類別 `:可自訂各種簡訊類別，提供使用者訂閱他想要的資訊。
* [範本管理](/guide/sms-template)：`簡訊發送->範本管理 `:常用的發信格式，可於此建立套用。
* [訂閱名單](/guide/sms-subscriber)：`簡訊發送->訂閱名單 `:網站訂閱簡訊的名單。
* [發送管理](/guide/sms-history)：`簡訊發送->發送管理 `:發送簡訊與發送紀錄，包含發送後的追蹤。

**客服中心**

* [類別管理](/guide/inbox-category)：`客服中心->類別管理 `:所有透過前端表單詢問的內容，都會統一在收信匣管理回覆。包含：聯絡我們、訂單詢問、技術合作的等。系統將幫您建置好，您可不必管理此項目。
* [收信匣](/guide/inbox-received)：`客服中心->收信匣 `:所有透過前端表單詢問的內容，都會統一在收信匣管理回覆。包含：聯絡我們、訂單詢問、技術合作的等。
* [寄件備份](/guide/inbox-sent)：`客服中心->寄件備份 `:所有透過前端表單詢問的內容，都會統一在收信匣管理回覆，**並於此紀錄回覆內容**。包含：聯絡我們、訂單詢問、技術合作的等。

**行銷統計**

* [商品分析](/guide/statistic-product-set)：`統計分析->寄件備份 `：顯示商品銷售數量、點擊次數、退貨次數，並可依據月份區間觀看，匯出分析excel
* [訂單統計](/guide/statistic-order-form)：`統計分析->訂單統計 `：顯示訂單銷售金額、數量、運費、退貨次數、退貨金額、商品成本、交易毛利等，並可依據月份區間觀看，匯出分析excel
* [會員消費](/guide/statistic-member-order)：`統計分析->會員消費 `：顯示會員訂單數量、累積購物金額、平均訂單金額、最後購買時間等，並可依據月份區間觀看，匯出分析excel

**行銷模組**

* [短網址管理](/guide/short-link)：`行銷模組->類別管理 `:設定UTM的參數，指定到想要的網站連結，與紀錄點擊次數。可用於判斷給不同平台時，來網站的判斷結果等等。

**紀錄**

* [操作紀錄](/guide/system-log):`資訊安全->操作紀錄`：資料異動的紀錄。
* [登入紀錄](/guide/login-log):`資訊安全->登入紀錄`：管理者與使用者的登入紀錄。

## [常用報表](/guide/workflow#常用報表) {#常用報表}

您可建立常用的報表，給自己或者所有管理員看，例如今日處理訂單、推薦的熱門商品、待處理的金流等等。

* [建立訂單的自訂篩選](/guide/order-form#建立訂單的自訂篩選)
  * [待撿貨-未收款](/guide/order-form#待撿貨-未收款)
  * [待撿貨-已收款](/guide/order-form#待撿貨-已收款)
  * [待撿貨-預購品](/guide/order-form#待撿貨-預購品)
  * [待出貨](/guide/order-form#待出貨)
  * [已出貨-今日](/guide/order-form#已出貨-今日)
  * [出貨後7天](/guide/order-form#出貨後7天)
  * [退貨-待處理](/guide/order-form#退貨-待處理)
  * [代客下訂的訂單報表](/guide/order-form#代客下訂的訂單報表)

* [建立退貨單的自訂篩選](/guide/order-return#建立退貨單的自訂篩選)
  * [待審核退貨](/guide/order-return#待審核退貨)
  * [處理中退貨](/guide/order-return#處理中退貨)
  * [退貨待退款](/guide/order-return#退貨待退款)
  * [退貨已完成](/guide/order-return#退貨已完成)
  * [退貨已取消](/guide/order-return#退貨已取消)
  * [退貨無效](/guide/order-return#退貨無效)

* [建立金流的自訂篩選](/guide/order-payment#建立金流的自訂篩選)
  * [待付款](/guide/order-payment#待付款)
  * [待退款](/guide/order-payment#待退款)
  * [待請款](/guide/order-payment#待請款)
  * [待請退](/guide/order-payment#待請退)

* [建立物流的自訂篩選](/guide/order-delivery#建立物流的自訂篩選)
  * [退貨待取貨](/guide/order-delivery#退貨待取貨)
  * [退貨待收貨](/guide/order-delivery#退貨收貨)
  * [退貨收貨](/guide/order-delivery#退貨收貨)
  * [今日物流](/guide/order-delivery#今日物流)

* [自訂篩選](/guide/receipt#自訂篩選)
  * [待開發票](/guide/receipt#待開發票)
  * [已開發票待寄出-今日](/guide/receipt#已開發票待寄出-今日)
  * [已寄出發票-今日](/guide/receipt#已寄出發票-今日)
  * [作廢發票-本月](/guide/receipt#作廢發票-本月)
  * [中獎-上期](/guide/receipt#中獎-上期)

* [建立折讓單的自訂篩選](/guide/allowance#建立折讓單的自訂篩選)
  * [待處理折讓單](/guide/allowance#待處理折讓單)
  * [已開立折讓單-本月](/guide/allowance#已開立折讓單-本月)

* [檢視商品報表](/guide/product-set#檢視商品報表)

## [上線設定](/guide/workflow#上線設定) {#上線設定}

### [設定上線網址](/guide/workflow#設定上線網址) {#設定上線網址}

[網站基本資訊](/guide/web-data) ：

功能路徑：`控制台->網站基本資訊`

| 項目 | 格式 | 備註 |
| --- | --- | --- |
| 網站網址 | 文字 | 更改為正式上線的網址 |

### [後台首頁GA數值顯示設定](/guide/workflow#後台首頁GA數值顯示設定) {#後台首頁GA數值顯示設定}

**啟用 Google API 和服務**

1. 請提供ga設定的帳號密碼由我方申請設定，或您使用要申請的帳號密碼，登入進入[Google Cloud Platform](/guide/https://console.cloud.google.com/)
2. 點選左側選單 ：`API和服務`
3. 點選上面：`起用API和服務`
4. 搜尋：`Google Analytics API`，進入後`啟用`

**建立憑證**

1. 點選左側： ：`API和服務` 回到該頁
2. 點選左側選單 ："憑證" -> 上方點選 `建立憑證`-> 服務帳戶
3. 輸入資料、角色選擇：`擁有者`或其他適當的 -> `完成`
4. 於列表 `服務帳戶`-> `電子郵件` 點進 該郵件 `******.iam.gserviceaccount.com`
5. 上方選單： `金鑰`-> `新增金鑰` -> `JSON`
6. 下載的檔案更改名稱為：`service-account-credentials.json`
7. 提供給雲端 或自行上傳放置網站目錄 `/storage/app/analytics/` 即可

**設定瀏覽者權限**

1. 進入[Google Analytic](/guide/https://analytics.google.com/analytics/web/)
2. 進入管者者介面：點選左下角：`管理`
3. 新增使用者：選出您的網站資源 -> `資源使用者管理` -> 右上角`+` -> `新增使用者`
4. 輸入剛剛申請金鑰的電子郵件：`電子郵件地址` ->  貼入 **金鑰的電子郵件**，權限：`檢視及分析即`可(也可依據您的需求勾選其他) -> 右上角`新增`
5. 設定檢視ID：選出您的網站資源 -> 右側`資料檢視` -> `資料檢視設定` -> 資料檢視ID
6. 提供給雲端 或自行異動網站 env檔案->  `ANALYTICS_VIEW_ID=檢視ID`

### [GA追蹤設定](/guide/workflow#GA追蹤設定) {#GA追蹤設定}

**GA追蹤碼申請**

1. 進入 [Google Analytics](/guide/https://analytics.google.com/analytics/web/)
2. 進入管者者介面：點選左下角：`管理`
3. 下拉選擇要建立的`帳戶` -> 右側`建立資源`
4. 設定資源名稱 、點選 `顯示進階選項`，啟用 `建立通用 Analytics (分析) 資源` -> 下一步
5. 輸入 `網站網址` -> `下一步` -> `建立`

**網站設定GA追蹤碼**

* 進入網站後台：`控制台`->`網站基本資訊`->`標頭內容` 貼入Google Analytics 追蹤程式碼

## [訂單管理流程](/guide/workflow#訂單管理流程) {#訂單管理流程}

請依據您的商品屬性與流程，觀看您需要的部分。

### 代客下單 {#代客下單}

1. [給予可代客登入下單的群組權限](/guide/role#給予可代客登入下單的群組權限)：`帳戶資訊->權限角色管理`：開啟代客登入購買的權限。
2. [代客登入購買](/guide/member#代客登入購買):`會員中心->會員資料管理`:一鍵登入客戶帳號，協助購買。
3. [代客下訂的訂單報表](/guide/order-form#代客下訂的訂單報表): `訂單管理->訂單資料`：檢視自己協助客戶代訂購的訂單。

### 確認付款狀態： {#確認付款狀態}

1. 確認付款狀態：可依據報表 [待付款](/guide/order-payment#待付款)，或者直於`訂單管理->訂單資料`中，接篩篩選出未付款訂單，確認哪些已付款
2. 異動金流資料為已付款：請參見 [已付款](/guide/order-payment#已付款)：`訂單管理->金流資料`

### 檢貨： {#檢貨}

* [檢貨](/guide/order-form#檢貨)：`訂單管理->訂單資料`

### 理貨 {#理貨}

1. [理貨](/guide/order-form#理貨)：`訂單管理->訂單資料`
2. 隨貨附發票：_(若為後寄開發票，請略過)_
   * 紙本發票：
     1. [訂單批次建立待開發票](/guide/order-form#訂單批次建立待開發票)：`訂單管理->訂單資料`
     2. 撈出需開立的發票：依據建立的發票報表 *(建立方式請參見：[待開發票](/guide/receipt#待開發票))*：`會計管理->發票管理`
     3. 輸入發票資訊：[已開立發票](/guide/receipt#已開立發票)：`會計管理->發票管理`
     * [發票列印](/guide/order-form#發票列印)：`訂單管理->訂單資料`
   * [財政部電子發票](/guide/receipt#財政部電子發票)：`會計管理->發票管理`
   * [系統串接取得電子發票資料](/guide/receipt#系統串接取得電子發票資料)：`會計管理->發票管理`
   * [電子票發-綠界](/guide/receipt#電子票發-綠界)：`會計管理->發票管理`

### 出貨 {#出貨}

* 串接第三方物流
  * 系統排程：於指定時間自動拋轉檔案至第三方物流公司，出貨單狀態將變更為 `已出貨`
* 人工出貨：
  * [單筆手動出貨](/guide/order-delivery#單筆手動出貨) or [訂單批次出貨](/guide/order-form#訂單批次出貨)：`訂單管理->訂單資料`
  * 無物流單號需輸入：可直接[批次異動出貨](/guide/order-delivery#批次異動出貨)：`訂單管理->物流資料`。

### 處理有退貨的訂單部分出貨： {#處理有退貨的訂單部分出貨}

1. 撈取待退貨報表
   * [退貨-待處理訂單](/guide/order-form#退貨-待處理訂單)：`訂單管理->訂單資料`
2. 審核退貨單：
   * [確定可退貨單](/guide/order-return#確定可退貨單)：`訂單管理->退貨管理`
   * [取消退貨單](/guide/order-return#取消退貨單)：`訂單管理->退貨管理`
3. 依據退貨單狀態，產生出貨單時，請確認排除退貨商品的勾選。無法採取自動出貨方式。

### 收貨 {#收貨}

* 貨到付款/超商付款/門市付款/ATM付款/超商付款取貨：
  * 自動串接：將於排程撈取物流or金流廠商資料，併回拋物流付款狀態
  * 無串接：請於出貨後確認無退回，單筆或批次異動付款狀態，請參見 [更改付款狀態](/guide/order-payment#更改付款狀態) 或 [批次異動狀態](/guide/order-payment#批次異動狀態)。

* 超商取貨通知：超商到貨後，
  * 自動串接：將於排程撈取物流or金流廠商資料，併回拋物流狀態。
  * 無串接：請自行確認超商取貨到貨狀態，單筆或批次異動物流狀態：到貨狀態->待取貨 [手動超商已到貨](/guide/order-delivery#手動超商已到貨) 或 [批次異動狀態](/guide/order-delivery#批次異動狀態)

### 後開發票 {#後開發票}

* 紙本發票：
  1. [訂單批次建立待開發票](/guide/order-form#訂單批次建立待開發票)：`訂單管理->物流資料`
  2. 撈出需開立的發票：依據建立的發票報表 *(建立方式請參見：[待開發票](/guide/receipt#待開發票))*：`會計管理->發票管理`
  3. 輸入發票資訊：[已開立發票](/guide/receipt#已開立發票)：`會計管理->發票管理`

* 電子發票：請依據您的電子發票方式瀏覽處理
  * [財政部電子發票](/guide/receipt#財政部電子發票)：`會計管理->發票管理`
  * [系統串接取得電子發票資料](/guide/receipt#系統串接取得電子發票資料)：`會計管理->發票管理`
  * [電子票發-綠界](/guide/receipt#電子票發-綠界)：`會計管理->發票管理`

### 訂單完成 {#訂單完成}

* 自動完成：依據`購物車管理->購物車設定->自動完成訂單` 欄位設定，已付款訂單到貨後起算幾天後，則自動完成訂單，完成訂單將不可退貨。
* 手動完成：請參考：[訂單手動完成](/guide/order-form#訂單手動完成)：`訂單管理->訂單資料`

## [退貨管理流程](/guide/workflow#退貨管理流程) {#退貨管理流程}

### 退貨單來源： {#退貨單來源}

 * 自建退貨單貨：請參考[手動新增退貨單](/guide/order-return#手動新增退貨單)：`訂單管理->退貨管理`
 * 使用者前端所自動產生建立

### 審核退貨單 {#審核退貨單}

1. 撈取待處理退貨單：[待審核退貨](/guide/order-return#待審核退貨)：`訂單管理->退貨管理`
2. 審核退貨：[確定可退貨單](/guide/order-return#確定可退貨單)：`訂單管理->退貨管理`

### 處理退貨 {#處理退貨}

1. 產生物流單：
   * [新增單筆退貨物流](/guide/order-return#新增單筆退貨物流)：`訂單管理->退貨管理`

2. 收到退貨品：
   1. 撈取待退貨收貨報表資料：請參考[退貨待收貨](/guide/order-delivery#退貨收貨)：`訂單管理->物流資料`
   2. 將物流單狀態更改為已收到貨：
      * 單筆異動：[退貨物流收到貨](/guide/order-delivery#退貨物流收到貨)：`訂單管理->物流資料`
      * 批次異動：[批次異動狀態](/guide/order-delivery#批次異動狀態)：`訂單管理->物流資料`

### 退款 {#退款}

1. 撈取待退貨報表資料：請參考 [退貨待退款](/guide/order-return#退貨待退款)：`訂單管理->退貨管理`
2. **處理退款金流**：
   * [退貨單退款](/guide/order-payment#退貨單退款)：`訂單管理->金流資料`
   * 若為信用卡需請退，請參見：[信用卡退貨單待退款](/guide/order-payment#信用卡退貨單待退款) or [信用卡退貨單退款](/guide/order-payment#信用卡退貨單退款)
3. **處理退款發票**：請參見功能：[作廢發票](/guide/receipt#作廢發票) 或 [新增折讓發票](/guide/allowance#新增折讓發票)
4. 退貨完成：[退貨完成](/guide/order-return#退貨完成)：`訂單管理->退貨管理`

## [預約系統管理](/guide/workflow#預約系統管理) {#預約系統管理}

**假日設定：**

1. [假日類別](/guide/holiday-category#公休)：`假日管理->假日類別`：設定預約日期哪些是屬於假日、國定假日、公休等。
2. [假日設定](/guide/holiday-set)：`假日管理->假日設定`：設定假日、公休等公用日曆。
3. [假日日曆檢視](/guide/holiday-calendar)：`假日管理->假日日曆檢視`：用日曆方式檢視設定好的假日。
4. 預約設定：`預約設定->預約設定`：預約基本設定，包含預設前幾日可預約、票卷限制、團體票設定等等。

**建立預約販售的商品：**

1. 建立品項：[設定不需計算庫存的品項](/guide/product-item#設定不需計算庫存的品項)：`商品管理->品項管理`：建立可對應ERP的販售品項
2. 建立商品：[免運送商品](/guide/product-set#免運送商品)：`商品管理->商品管理`：建立前端使用者看到的商品名稱與內容。
3. 設定價格：[設定商品價格](/guide/product-package#設定商品價格) ：`商品管理->價格組合`：設定商品販售的價格

**優惠活動：**

* 試營運限定優惠：[試營運限定優惠價：全票450](/guide/sale-discount#試營運限定優惠價：全票450)：建立預約票卷的試營運限定優惠價。
* 團體優惠票：[大量團體票優惠](sale-grading#大量團體票優惠)：`促銷活動->數量優惠`：限定團體級別會員才能使用的優惠。
* 套票組優惠：[套票(全票含一門課程)](/guide/sale-collect#套票(全票含一門課程))`促銷活動->配搭優惠`：此運用於預約商品票卷＋課程時的設定。

**設定場次：**

1. [預約項目設定](/guide/reservation-product)：`預約設定->預約項目`：設定販售的商品對應預約預約項目，包含場次設定等等。
2. [場次群組](/guide/reservation-group)：`預約設定->場次群組`：設定預約項目的場次，能將以群組化，當不同的預約項目相同場次時間時，不需重新建立，直接選用即可。
3. [建立場次日期](/guide/reservation-date#建立場次日期)：`預約設定->場次日期`：設定場次群組適用的預約日期區間。
4. [設定預約位置](/guide/site-parameter-group#預約位置)：`控制台->參數項目`：此依據各別專案建置的項目，用於課程、活動位置或教室等建立。
5. [建立場次人數](/guide/reservation-number#建立場次人數)：`預約設定->場次人數`：設定場次群組的各別時段與時段的人數，可用[日曆檢視場次人數](/guide/reservation-number#建立場次人數)。
6. [機動場次](/guide/reservation-maneuver)：`預約設定->機動場次`：臨時的場次人數異動時，可用此異動原設定的場次人數。

**代客下單**

1. [給予可代客登入下單的群組權限](/guide/role#給予可代客登入下單的群組權限)：`帳戶資訊->權限角色管理`：開啟代客登入購買的權限。
2. [代客登入購買](/guide/member#代客登入購買):`會員中心->會員資料管理`:一鍵登入客戶帳號，協助購買。
3. [代客下訂的訂單報表](/guide/order-form#代客下訂的訂單報表): `訂單管理->訂單資料`：檢視自己協助客戶代訂購的訂單。

**已預約訂單**

* [預約管理](/guide/reservation-personal)：`預約管理->預約管理`:已下訂單的預約項目檢視。
* [匯出已預約資料](/guide/reservation-personal#匯出已預約資料)：`預約管理->預約管理`
* [預約日曆檢視](/guide/personal-calendar)：`預約管理->預約日曆檢視`：日曆檢視已預約的項目

**現場作業**

* [掃描取票](/guide/reservation-personal#掃描取票)