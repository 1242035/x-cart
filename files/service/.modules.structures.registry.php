# <?php if (!defined('LC_DS')) { die(); } ?>

Amazon-PayWithAmazon:
    tables: {  }
    columns: { profiles: { socialLoginProvider: 'socialLoginProvider VARCHAR(128) DEFAULT NULL', socialLoginId: 'socialLoginId VARCHAR(128) DEFAULT NULL' } }
    dependencies: {  }
CDev-AustraliaPost:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-AuthorizeNet:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-Bestsellers:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-ContactUs:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-Coupons:
    tables: [order_coupons, coupons, product_class_coupons, membership_coupons, coupon_categories]
    columns: {  }
    dependencies: {  }
CDev-Egoods:
    tables: [product_attachment_history_points, order_item_private_attachments]
    columns: { product_attachments: { private: 'private TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev-FeaturedProducts:
    tables: [featured_products]
    columns: {  }
    dependencies: {  }
CDev-FedEx:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-FileAttachments:
    tables: [product_attachment_translations, product_attachments, product_attachment_storages]
    columns: {  }
    dependencies: {  }
CDev-GoSocial:
    tables: {  }
    columns: { categories: { ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, category_translations: { ogMeta: 'ogMeta LONGTEXT NOT NULL' }, pages: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL', ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' }, page_translations: { ogMeta: 'ogMeta LONGTEXT NOT NULL' }, products: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, product_translations: { ogMeta: 'ogMeta LONGTEXT DEFAULT NULL' } }
    dependencies: { CDev-SimpleCMS: { pages: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL', ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' }, page_translations: { ogMeta: 'ogMeta LONGTEXT NOT NULL' } } }
CDev-GoogleAnalytics:
    tables: {  }
    columns: { order_items: { categoryAdded: 'categoryAdded VARCHAR(255) DEFAULT NULL' }, profiles: { gaClientId: 'gaClientId VARCHAR(255) NOT NULL' } }
    dependencies: {  }
CDev-MarketPrice:
    tables: {  }
    columns: { products: { marketPrice: 'marketPrice NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
CDev-PINCodes:
    tables: [pin_codes]
    columns: { products: { pinCodesEnabled: 'pinCodesEnabled TINYINT(1) NOT NULL', autoPinCodes: 'autoPinCodes TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev-Paypal:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-ProductAdvisor:
    tables: [product_stats]
    columns: {  }
    dependencies: {  }
CDev-Quantum:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-Sale:
    tables: {  }
    columns: { products: { participateSale: 'participateSale TINYINT(1) NOT NULL', discountType: 'discountType VARCHAR(32) NOT NULL', salePriceValue: 'salePriceValue NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
CDev-SalesTax:
    tables: [sales_tax_rates, sales_taxes, sales_tax_translations]
    columns: {  }
    dependencies: {  }
CDev-SimpleCMS:
    tables: [page_images, menu_quick_flags, menus, menu_translations, pages, page_translations]
    columns: { clean_urls: { page_id: 'page_id INT UNSIGNED DEFAULT NULL' } }
    dependencies: {  }
CDev-TwoCheckout:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-USPS:
    tables: [usps_shipment]
    columns: {  }
    dependencies: {  }
CDev-UserPermissions:
    tables: {  }
    columns: { roles: { enabled: 'enabled TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev-VolumeDiscounts:
    tables: [volume_discounts]
    columns: {  }
    dependencies: {  }
CDev-XMLSitemap:
    tables: {  }
    columns: {  }
    dependencies: {  }
QSL-AuthorizenetAcceptjs:
    tables: {  }
    columns: {  }
    dependencies: {  }
QSL-BraintreeVZ:
    tables: {  }
    columns: { profiles: { braintree_customer_id: 'braintree_customer_id VARCHAR(255) NOT NULL', saveCardBoxChecked: 'saveCardBoxChecked TINYINT(1) NOT NULL' } }
    dependencies: {  }
QSL-CloudSearch:
    tables: {  }
    columns: { categories: { csLastUpdate: 'csLastUpdate INT NOT NULL' }, products: { csLastUpdate: 'csLastUpdate INT NOT NULL' } }
    dependencies: {  }
QSL-FlyoutCategoriesMenu:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-BulkEditing:
    tables: {  }
    columns: { products: { xcPendingBulkEdit: 'xcPendingBulkEdit TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-CanadaPost:
    tables: [k, capost_delivery_service_options, capost_delivery_services, order_capost_parcel_items, order_capost_parcel_manifest_link_storage, order_capost_parcel_manifest_links, order_capost_parcel_manifests, order_capost_parcel_shipments_manifests, order_capost_parcel_shipment_link_storage, order_capost_parcel_shipment_links, order_capost_parcel_shipment_tracking_options, order_capost_parcel_shipment_tracking_files, order_capost_parcel_shipment_tracking_events, order_capost_parcel_shipment_tracking, order_capost_parcel_shipment, order_capost_parcels, order_capost_office, capost_return_items, capost_return_link_storage, capost_return_links, capost_returns]
    columns: {  }
    dependencies: {  }
XC-Concierge:
    tables: {  }
    columns: { profiles: { conciergeUserId: 'conciergeUserId VARCHAR(128) DEFAULT NULL' } }
    dependencies: {  }
XC-CrispWhiteSkin:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-CustomOrderStatuses:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-CustomProductTabs:
    tables: [custom_global_tab_translation, custom_global_tabs, product_tabs, product_tab_translations]
    columns: { global_product_tabs: { enabled: 'enabled TINYINT(1) NOT NULL', link: 'link VARCHAR(255) DEFAULT NULL' } }
    dependencies: {  }
XC-CustomerAttachments:
    tables: [customer_attachments_storage]
    columns: { products: { isCustomerAttachmentsAvailable: 'isCustomerAttachmentsAvailable TINYINT(1) NOT NULL', isCustomerAttachmentsRequired: 'isCustomerAttachmentsRequired TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-EPDQ:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-ESelectHPP:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-FacebookMarketing:
    tables: {  }
    columns: { products: { facebookMarketingEnabled: 'facebookMarketingEnabled TINYINT(1) DEFAULT ''1'' NOT NULL' } }
    dependencies: {  }
XC-FastLaneCheckout:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-FreeShipping:
    tables: {  }
    columns: { products: { freeShip: 'freeShip TINYINT(1) NOT NULL', shipForFree: 'shipForFree TINYINT(1) NOT NULL', freightFixedFee: 'freightFixedFee NUMERIC(14, 4) NOT NULL' }, shipping_methods: { free: 'free TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-FroalaEditor:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Geolocation:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-GoogleFeed:
    tables: {  }
    columns: { attributes: { googleShoppingGroup: 'googleShoppingGroup VARCHAR(255) DEFAULT NULL' }, products: { googleFeedEnabled: 'googleFeedEnabled TINYINT(1) DEFAULT ''1'' NOT NULL' } }
    dependencies: {  }
XC-IdealPayments:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-MailChimp:
    tables: [mailchimp_list_group, mailchimp_list_group_name, mailchimp_profile_interests, mailchimp_lists, mailchimp_subscriptions, mailchimp_list_segments, segment_membership, segment_products, mailchimp_segment_subscriptions, mailchimp_store]
    columns: { orders: { mailchimpStoreId: 'mailchimpStoreId VARCHAR(255) NOT NULL' }, products: { useAsSegmentCondition: 'useAsSegmentCondition TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-News:
    tables: [news, news_message_translations]
    columns: { clean_urls: { news_message_id: 'news_message_id INT UNSIGNED DEFAULT NULL' } }
    dependencies: {  }
XC-NewsletterSubscriptions:
    tables: [newsletter_subscriptions_subscribers]
    columns: {  }
    dependencies: {  }
XC-NextPreviousProduct:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-NotFinishedOrders:
    tables: {  }
    columns: { orders: { not_finished_order_id: 'not_finished_order_id INT DEFAULT NULL' } }
    dependencies: {  }
XC-Onboarding:
    tables: {  }
    columns: { categories: { demo: 'demo TINYINT(1) NOT NULL' }, orders: { demo: 'demo TINYINT(1) NOT NULL' }, products: { demo: 'demo TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-ProductComparison:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-ProductFilter:
    tables: [category_class_links]
    columns: { attributes: { visible: 'visible TINYINT(1) DEFAULT ''1'' NOT NULL' }, categories: { useClasses: 'useClasses CHAR(1) NOT NULL' } }
    dependencies: {  }
XC-ProductTags:
    tables: [tag_translations, product_tags, tags]
    columns: {  }
    dependencies: {  }
XC-RESTAPI:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Reviews:
    tables: [reviews, order_review_keys]
    columns: {  }
    dependencies: {  }
XC-SagePay:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Sitemap:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Stripe:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-ThemeTweaker:
    tables: [overridden_view_lists, theme_tweaker_template]
    columns: {  }
    dependencies: {  }
XC-UPS:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-UpdateInventory:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Upselling:
    tables: [upselling_products]
    columns: {  }
    dependencies: {  }
XC-VendorMessages:
    tables: [conversations, conversation_members, vendor_convo_message_reads, vendor_convo_messages]
    columns: {  }
    dependencies: {  }
XPay-XPaymentsCloud:
    tables: [xpayments_fraud_check_data]
    columns: { orders: { xpaymentsFraudStatus: 'xpaymentsFraudStatus VARCHAR(255) NOT NULL', xpaymentsFraudType: 'xpaymentsFraudType VARCHAR(255) NOT NULL', xpaymentsFraudCheckTransactionId: 'xpaymentsFraudCheckTransactionId INT NOT NULL' }, order_items: { xpaymentsEmulated: 'xpaymentsEmulated TINYINT(1) NOT NULL' }, profiles: { xpaymentsCustomerId: 'xpaymentsCustomerId VARCHAR(255) NOT NULL' } }
    dependencies: {  }
Viauco-Vietnamese:
    tables: {  }
    columns: {  }
    dependencies: {  }
