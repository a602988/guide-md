# 第三方設定


功能路徑：`系統整合->第三方設定`

整合第三方api串接項目。無法提供新增，僅提供修改。

**重點說明**

* 網站發信設定：
  若您未購買本公司電子郵件伺服器，請自行設定或將設定資料給予我方協助設定。請參見
  [電子郵件伺服器](guide/service-config#電子郵件伺服器) 與 [電子報伺服器](guide/service-config#電子報伺服器)
  
* 其他第三方設定：除兩上述發信設定外，其他設定若需異動，建議您洽詢本公司。


##  功能說明

| 項目 | 格式 | 備註 |
|---|---|---|
|標題|文字|系統建置無法修改|
|服務代碼|文字|系統建置無法修改|
|連線位置|文字|若有特定連線埠口，請使用半形冒號 : 設置。若未指定埠口則採用服務預設設定。|
|服務設定|資料|依據api項目設定|
|啟用狀態|`單選`|啟用/停用|


## 重要設定

### [電子郵件伺服器](guide/service-config#電子郵件伺服器)

請設定發信主機，與使用者收到信件時，顯示的來源與名稱。

#### 範例：

此範例為透過 smtp2go 服務發信，依據mail serve api設定

| 項目 | 格式 | 備註 |
|---|---|---|
|標題|文字|電子郵件伺服器|
|服務代碼|文字|smtp|
|連線位置|文字|smtpcorp.com:2525|
|服務設定|資料|請參見下方 服務設定|
|啟用狀態|`單選`|啟用/停用|

**服務設定**

| 項目 | 內容 | 說明 | 
|---|---|---|
|driver|smtp|發信模式|
|username|joe@youweb.tw|帳號|
|password| |密碼|
|encryption|tls|加密模式|
|from.address|server@greattree.com.tw|請填寫發信人信箱|
|from.name|大樹會員購物網|請填寫發信人名子|

* 信件將顯示為：大樹會員購物網 server@greattree.com.tw 透過 smtpcorp.com

### [電子報伺服器](guide/service-config#電子報伺服器)

請設定電子報發信主機。

#### 範例：

此範例為透過 smtp2go 服務發信，依據mail serve api設定

| 項目 | 格式 | 備註 |
|---|---|---|
|標題|文字|電子郵件伺服器|
|服務代碼|文字|smtp|
|連線位置|文字|smtpcorp.com:2525|
|服務設定|資料|請參見下方 服務設定|
|啟用狀態|`單選`|啟用/停用|

**服務設定**

| 項目 | 內容 | 說明 | 
|---|---|---|
|driver|smtp|發信模式|
|username|joe@youweb.tw|帳號|
|password| |密碼|
|encryption|tls|加密模式|
|from.address|server@greattree.com.tw|請填寫發信人信箱|
|from.name|大樹會員購物網|請填寫發信人名子|

* 信件將顯示為：大樹會員購物網 server@greattree.com.tw 透過 smtpcorp.com
