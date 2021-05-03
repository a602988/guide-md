<?php

use Illuminate\Database\Seeder;

use Minmax\Base\Models\GuideBook;

class GuideBookAdDataSeeder extends Seeder
{
  /**
   * @var string $timestamp
   */
  protected $timestamp;

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function run()
  {
    $this->timestamp = date('Y-m-d H:i:s');

    $this->insertAdGuide();
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    $deleteParents = ['control-advertising'];

    if ($parent = GuideBook::find('root-modules')) {
      $parent->children = array_diff($parent->children ?? [], $deleteParents);
      $parent->save();
    }

    \DB::table('guide_book')
      ->whereIn('id', $deleteParents)
      ->orWhereIn('parent', $deleteParents)
      ->delete();
  }

  /**
   * Insert base guide book data.
   *
   * @return void
   */
  protected function insertAdGuide()
  {
    if ($parent = GuideBook::find('root-modules')) {
      $parent->children = array_merge($parent->children ?? [], ['control-advertising']);
      $parent->save();
    }

    $guideData = [
      [
        'id' => 'root-intro', 'parent' => null,
        'children' => json_encode(['index', 'default', 'web', 'site']),
        'title' => json_encode(['zh-Hant' => '操作介紹']),
        'content' => json_encode(['zh-Hant' => null]),
        'permission_key' => null,
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'root-modules', 'parent' => null,
        'children' => json_encode(['general','control-article','control-order','control-receipt', 'control-sale','control-product','control-member','control-advertising', 'control-sms','control-epaper','control-inbox','control-marcom',
          'control-reservationAdmin', 'control-reservation','control-holiday','control-configuration','control-account','control-integration','control-security','control-world']),
        'title' => json_encode(['zh-Hant' => '模組功能']),
        'content' => json_encode(['zh-Hant' => null]),
        'permission_key' => null,
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'index', 'parent' => 'root-intro',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '導覽說明']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('index.md')]),
        'permission_key' => null,
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'default', 'parent' => 'root-intro',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '操作流程']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('default.md')]),
        'permission_key' => null,
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'web', 'parent' => 'root-intro',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '機制說明']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('web.md')]),
        'permission_key' => null,
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'site', 'parent' => 'root-intro',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '功能對照']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('site.md')]),
        'permission_key' => null,
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'general', 'parent' => 'root-modules',
        'children' => json_encode(['general-list', 'general-editor']),
        'title' => json_encode(['zh-Hant' => '通用功能']),
        'content' => null,
        'permission_key' => null,
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'general-list', 'parent' => 'general',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '功能列表']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('general-list.md')]),
        'permission_key' => null,
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'general-editor', 'parent' => 'general',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '編輯器']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('general-editor.md')]),
        'permission_key' => null,
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'general-preview', 'parent' => 'general',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '草稿、預覽']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('general-preview.md')]),
        'permission_key' => null,
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'general-pic', 'parent' => 'general',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '圖片設定']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('general-pic.md')]),
        'permission_key' => null,
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'control-article', 'parent' => 'root-modules',
        'children' => json_encode(['article-news', 'article-page', 'article-faq', 'article-download', 'article-column', 'article-location', 'article-team', 'article-element', 'article-category']),
        'title' => json_encode(['zh-Hant' => '內容管理']),
        'content' => null,
        'permission_key' => null,
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'article-news', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '新聞稿']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-news.md')]),
        'permission_key' => 'articleNewsShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-page', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '靜態頁面']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-page.md')]),
        'permission_key' => 'articlePageShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-faq', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '常見問答']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-faq.md')]),
        'permission_key' => 'articleFaqShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-download', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '檔案下載']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-download.md')]),
        'permission_key' => 'articleDownloadShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-column', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '專欄文章']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-column.md')]),
        'permission_key' => 'articleColumnShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-location', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '營業據點']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-location.md')]),
        'permission_key' => 'articleLocationShow',
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-team', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '團隊介紹']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-team.md')]),
        'permission_key' => 'articleTeamShow',
        'sort' => 7, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-element', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '項目管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-element.md')]),
        'permission_key' => 'articleElementShow',
        'sort' => 8, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'article-category', 'parent' => 'control-article',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '內容類別管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('article-category.md')]),
        'permission_key' => 'articleCategoryShow',
        'sort' => 11, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-order', 'parent' => 'root-modules',
        'children' => json_encode(['order-form', 'order-payment', 'order-delivery', 'order-return']),
        'title' => json_encode(['zh-Hant' => '訂單管理']),
        'content' => null,
        'permission_key' => '',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'order-form', 'parent' => 'control-order',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '訂單資料']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('order-form.md')]),
        'permission_key' => 'orderFormShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'order-payment', 'parent' => 'control-order',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '金流資料']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('order-payment.md')]),
        'permission_key' => 'orderPaymentShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'order-delivery', 'parent' => 'control-order',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '物流資料']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('order-delivery.md')]),
        'permission_key' => 'orderDeliveryShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'order-return', 'parent' => 'control-order',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '退貨管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('order-return.md')]),
        'permission_key' => 'orderReturnShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-receipt', 'parent' => 'root-modules',
        'children' => json_encode(['receipt', 'allowance', 'receipt-number']),
        'title' => json_encode(['zh-Hant' => '會計管理']),
        'content' => null,
        'permission_key' => null,
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'receipt', 'parent' => 'control-receipt',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '發票管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('receipt.md')]),
        'permission_key' => 'receiptShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'allowance', 'parent' => 'control-receipt',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '折讓單管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('allowance.md')]),
        'permission_key' => 'receiptShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'receipt-number', 'parent' => 'control-receipt',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '發票字軌管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('receipt-number.md')]),
        'permission_key' => 'receiptShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-sale', 'parent' => 'root-modules',
        'children' => json_encode(['sale-discount', 'sale-grading', 'sale-level', 'sale-collect', 'sale-addition', 'sale-redeem', 'coupon-event', 'coupon-config' ,'coupon-ticket']),
        'title' => json_encode(['zh-Hant' => '活動促銷']),
        'content' => null,
        'permission_key' => null,
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-discount', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '折扣活動']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-discount.md')]),
        'permission_key' => 'saleDiscountShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-gift', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '贈品活動']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-gift.md')]),
        'permission_key' => 'saleGiftShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-grading', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '數量優惠']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-grading.md')]),
        'permission_key' => 'saleGradingShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-level', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '等級優惠']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-level.md')]),
        'permission_key' => 'saleLevelShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-collect', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '配搭優惠']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-collect.md')]),
        'permission_key' => 'saleCollectShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-addition', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '加購管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-addition.md')]),
        'permission_key' => 'saleAdditionShow',
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sale-redeem', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '兌禮管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sale-redeem.md')]),
        'permission_key' => 'saleRedeemShow',
        'sort' => 7, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'coupon-event', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '折價券事件']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('coupon-event.md')]),
        'permission_key' => 'couponEventShow',
        'sort' => 8, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'coupon-config', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '折價券設定']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('coupon-config.md')]),
        'permission_key' => 'couponConfigShow',
        'sort' => 9, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'coupon-ticket', 'parent' => 'control-sale',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '折價券明細']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('coupon-ticket.md')]),
        'permission_key' => 'couponTicketShow',
        'sort' => 10, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-product', 'parent' => 'root-modules',
        'children' => json_encode(['product-item', 'product-set', 'product-package', 'product-category',
          'product-brand', 'product-market', 'product-arrival']),
        'title' => json_encode(['zh-Hant' => '商品管理']),
        'content' => null,
        'permission_key' => null,
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'product-item', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '品項管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-item.md')]),
        'permission_key' => 'productItemShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-set', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '商品管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-set.md')]),
        'permission_key' => 'productSetShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-package', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '價格組合']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-package.md')]),
        'permission_key' => 'productPackageShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-category', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '商品分類']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-category.md')]),
        'permission_key' => 'productCategoryShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-brand', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '品牌管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-brand.md')]),
        'permission_key' => 'productBrandShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-market', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '賣場管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-market.md')]),
        'permission_key' => 'productMarketShow',
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-arrival', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '貨到通知']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-arrival.md')]),
        'permission_key' => 'productArrivalShow',
        'sort' => 7, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'product-rating', 'parent' => 'control-product',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '商品評價']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('product-rating.md')]),
        'permission_key' => 'productRatingShow',
        'sort' => 8, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-member', 'parent' => 'root-modules',
        'children' => json_encode(['member','member-upgrade','bonus-event','bonus-record','bonus-config']),
        'title' => json_encode(['zh-Hant' => '會員中心']),
        'content' => null,
        'permission_key' => null,
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'member', 'parent' => 'control-member',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '會員資料管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('member.md')]),
        'permission_key' => 'memberShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'member-upgrade', 'parent' => 'control-member',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '會員升等規則']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('member-upgrade.md')]),
        'permission_key' => 'memberUpgradeShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'bonus-event', 'parent' => 'control-member',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '點數事件']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('bonus-event.md')]),
        'permission_key' => 'bonusEventShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'bonus-record', 'parent' => 'control-member',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '點數紀錄']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('bonus-record.md')]),
        'permission_key' => 'bonusRecordShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'bonus-config', 'parent' => 'control-member',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '點數紀錄']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('bonus-config.md')]),
        'permission_key' => 'bonusConfigShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-advertising', 'parent' => 'root-modules',
        'children' => json_encode(['advertising','advertising-category']),
        'title' => json_encode(['zh-Hant' => '廣告模組']),
        'content' => null,
        'permission_key' => null,
        'sort' => 8, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'advertising', 'parent' => 'control-advertising',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '廣告項目']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('advertising.md')]),
        'permission_key' => 'advertisingShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'advertising-category', 'parent' => 'control-advertising',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '廣告分類']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('advertising-category.md')]),
        'permission_key' => 'advertisingCategoryShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],


      [
        'id' => 'control-sms', 'parent' => 'root-modules',
        'children' => json_encode(['sms-history', 'sms-template', 'sms-subscriber', 'sms-category']),
        'title' => json_encode(['zh-Hant' => '簡訊發送']),
        'content' => null,
        'permission_key' => null,
        'sort' => 9, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'sms-history', 'parent' => 'control-sms',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '發送管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sms-history.md')]),
        'permission_key' => 'smsHistoryShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sms-template', 'parent' => 'control-sms',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '範本管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sms-template.md')]),
        'permission_key' => 'smsTemplateShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sms-subscriber', 'parent' => 'control-sms',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '訂閱名單']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sms-subscriber.md')]),
        'permission_key' => 'smsSubscriberShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'sms-category', 'parent' => 'control-sms',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '簡訊類別']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('sms-category.md')]),
        'permission_key' => 'smsCategoryShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-epaper', 'parent' => 'root-modules',
        'children' => json_encode(['epaper-history', 'epaper-template', 'epaper-subscriber', 'epaper-category']),
        'title' => json_encode(['zh-Hant' => '電子報']),
        'content' => null,
        'permission_key' => null,
        'sort' => 9, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'epaper-history', 'parent' => 'control-epaper',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '發送管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('epaper-history.md')]),
        'permission_key' => 'epaperHistoryShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'epaper-template', 'parent' => 'control-epaper',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '範本管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('epaper-template.md')]),
        'permission_key' => 'epaperTemplateShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'epaper-subscriber', 'parent' => 'control-epaper',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '訂閱名單']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('epaper-subscriber.md')]),
        'permission_key' => 'epaperSubscriberShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'epaper-category', 'parent' => 'control-epaper',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '電子報類別']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('epaper-category.md')]),
        'permission_key' => 'epaperCategoryShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-inbox', 'parent' => 'root-modules',
        'children' => json_encode(['inbox-received', 'inbox-send', 'inbox-sent', 'inbox-category']),
        'title' => json_encode(['zh-Hant' => '客服中心']),
        'content' => null,
        'permission_key' => null,
        'sort' => 10, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'inbox-received', 'parent' => 'control-inbox',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '收信匣']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('inbox-received.md')]),
        'permission_key' => 'inboxReceivedShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'inbox-send', 'parent' => 'control-inbox',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '編寫郵件']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('inbox-send.md')]),
        'permission_key' => 'inboxSentCreate',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'inbox-sent', 'parent' => 'control-inbox',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '寄件備份']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('inbox-sent.md')]),
        'permission_key' => 'inboxSentShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'inbox-category', 'parent' => 'control-inbox',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '類別管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('inbox-category.md')]),
        'permission_key' => 'inboxCategoryShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-marcom', 'parent' => 'root-modules',
        'children' => json_encode(['short-link']),
        'title' => json_encode(['zh-Hant' => '行銷模組']),
        'content' => null,
        'permission_key' => null,
        'sort' => 10, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'short-link', 'parent' => 'control-marcom',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '短網址管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('short-link.md')]),
        'permission_key' => 'shortLinkShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-reservationAdmin', 'parent' => 'root-modules',
        'children' => json_encode(['reservation-personal','personal-calendar']),
        'title' => json_encode(['zh-Hant' => '預約管理']),
        'content' => null,
        'permission_key' => null,
        'sort' => 11, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-personal', 'parent' => 'control-reservationAdmin',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '預約管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-personal.md')]),
        'permission_key' => 'reservationPersonalShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'personal-calendar', 'parent' => 'control-reservationAdmin',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '預約日曆檢視']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('personal-calendar.md')]),
        'permission_key' => 'personalCalendarShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-reservation', 'parent' => 'root-modules',
        'children' => json_encode(['reservation-config','personal-product','personal-group','personal-date','personal-number','personal-calendar','personal-maneuver']),
        'title' => json_encode(['zh-Hant' => '預約設定']),
        'content' => null,
        'permission_key' => null,
        'sort' => 12, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-config', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '預約設定']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-config.md')]),
        'permission_key' => 'reservationConfigShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-product', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '預約項目']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-product.md')]),
        'permission_key' => 'reservationProductShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-group', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '場次群組']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-group.md')]),
        'permission_key' => 'reservationGroupShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-date', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '場次日期']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-date.md')]),
        'permission_key' => 'reservationDateShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-number', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '場次人數']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-number.md')]),
        'permission_key' => 'reservationNumberShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-calendar', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '場次日曆']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-calendar.md')]),
        'permission_key' => 'reservationCalendarShow',
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'reservation-maneuver', 'parent' => 'control-reservation',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '機動場次']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('reservation-maneuver.md')]),
        'permission_key' => 'reservationManeuverShow',
        'sort' => 7, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-holiday', 'parent' => 'root-modules',
        'children' => json_encode(['holiday-set','holiday-calendar','holiday-category']),
        'title' => json_encode(['zh-Hant' => '假日管理']),
        'content' => null,
        'permission_key' => null,
        'sort' => 13, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'holiday-set', 'parent' => 'control-holiday',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '機動場次']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('holiday-set.md')]),
        'permission_key' => 'holidaySetShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'holiday-calendar', 'parent' => 'control-holiday',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '機動場次']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('holiday-calendar.md')]),
        'permission_key' => 'holidayCalendarShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'holiday-category', 'parent' => 'control-holiday',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '機動場次']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('holiday-category.md')]),
        'permission_key' => 'holidayCategoryShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-configuration', 'parent' => 'root-modules',
        'children' => json_encode(['file-manager', 'web-data', 'web-menu', 'site-parameter-item', 'site-parameter-group', 'system-trash']),
        'title' => json_encode(['zh-Hant' => '控制臺']),
        'content' => null,
        'permission_key' => null,
        'sort' => 91, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'file-manager', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '檔案總管']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('file-manager.md')]),
        'permission_key' => 'systemUpload',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'web-data', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '網站基本資訊']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('web-data.md')]),
        'permission_key' => 'webDataEdit',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'web-menu', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '前臺選單目錄']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('web-menu.md')]),
        'permission_key' => 'webMenuShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'site-parameter-item', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '參數項目']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('site-parameter-item.md')]),
        'permission_key' => 'siteParameterItemShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'site-parameter-group', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '參數群組']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('site-parameter-group.md')]),
        'permission_key' => 'siteParameterGroupShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'notify-email', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '事件通知信件']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('notify-email.md')]),
        'permission_key' => 'notifyEmailShow',
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'notify-sms', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '事件通知簡訊']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('notify-sms.md')]),
        'permission_key' => 'notifySmsShow',
        'sort' => 7, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'system-trash', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '回收桶']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('system-trash.md')]),
        'permission_key' => 'systemTrashShow',
        'sort' => 8, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'search-keyword', 'parent' => 'control-configuration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '搜尋字詞']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('search-keyword.md')]),
        'permission_key' => 'searchKeywordShow',
        'sort' => 9, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-account', 'parent' => 'root-modules',
        'children' => json_encode(['admin', 'role']),
        'title' => json_encode(['zh-Hant' => '帳戶資訊']),
        'content' => null,
        'permission_key' => null,
        'sort' => 92, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'admin', 'parent' => 'control-account',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '後臺帳戶管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('admin.md')]),
        'permission_key' => 'adminShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'role', 'parent' => 'control-account',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '權限角色管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('role.md')]),
        'permission_key' => 'roleShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'control-integration', 'parent' => 'root-modules',
        'children' => json_encode(['service-config']),
        'title' => json_encode(['zh-Hant' => '系統整合']),
        'content' => null,
        'permission_key' => null,
        'sort' => 93, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'service-config', 'parent' => 'control-integration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '第三方設定']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('service-config.md')]),
        'permission_key' => 'serviceConfigShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'io-data', 'parent' => 'control-integration',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '資料匯入匯出']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('io-data.md')]),
        'permission_key' => 'ioDataShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'control-security', 'parent' => 'root-modules',
        'children' => json_encode(['firewall', 'system-log', 'login-log']),
        'title' => json_encode(['zh-Hant' => '資訊安全']),
        'content' => null,
        'permission_key' => null,
        'sort' => 94, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'firewall', 'parent' => 'control-security',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '防火牆']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('firewall.md')]),
        'permission_key' => 'firewallShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'system-log', 'parent' => 'control-security',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '操作紀錄']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('system-log.md')]),
        'permission_key' => 'systemLogShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'login-log', 'parent' => 'control-security',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '登入紀錄']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('login-log.md')]),
        'permission_key' => 'loginLogShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'control-world', 'parent' => 'root-modules',
        'children' => json_encode(['world-currency', 'world-continent', 'world-country', 'world-state', 'world-county', 'world-city']),
        'title' => json_encode(['zh-Hant' => '全球化管理']),
        'content' => null,
        'permission_key' => null,
        'sort' => 95, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],

      [
        'id' => 'world-currency', 'parent' => 'control-world',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '貨幣管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('world-currency.md')]),
        'permission_key' => 'worldCurrencyShow',
        'sort' => 1, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'world-continent', 'parent' => 'control-world',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '大洲管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('world-continent.md')]),
        'permission_key' => 'worldContinentShow',
        'sort' => 2, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'world-country', 'parent' => 'control-world',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '國家管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('world-country.md')]),
        'permission_key' => 'worldCountryShow',
        'sort' => 3, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'world-state', 'parent' => 'control-world',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '州區管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('world-state.md')]),
        'permission_key' => 'worldStateShow',
        'sort' => 4, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'world-county', 'parent' => 'control-world',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '縣市管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('world-county.md')]),
        'permission_key' => 'worldCountyShow',
        'sort' => 5, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
      [
        'id' => 'world-city', 'parent' => 'control-world',
        'children' => null,
        'title' => json_encode(['zh-Hant' => '城鎮管理']),
        'content' => json_encode(['zh-Hant' => $this->getMarkdown('world-city.md')]),
        'permission_key' => 'worldCityShow',
        'sort' => 6, 'active' => true, 'created_at' => $this->timestamp, 'updated_at' => $this->timestamp
      ],
    ];

    foreach ($guideData as $rowData) {
      \DB::table('guide_book')->updateOrInsert(array_only($rowData, ['id']), $rowData);
    }

    foreach (\DB::table('guide_book')->get() as $guideBook) {
      if (filled($children = \DB::table('guide_book')->where('parent', $guideBook->id)->pluck('id'))) {
        \DB::table('guide_book')->where('id', $guideBook->id)->update([
          'children' => $children->toJson()
        ]);
      }
    }
  }

  /**
   * Get markdown file context.
   *
   * @param  string $filename
   * @param  string $language
   * @return string|null
   */
  protected function getMarkdown($filename, $language = 'zh-Hant')
  {
    $path = __DIR__ . "/../../../storage/app/admin/guide/{$language}/{$filename}";

    return file_exists($path) ? trim(file_get_contents($path)) : null;
  }

}
