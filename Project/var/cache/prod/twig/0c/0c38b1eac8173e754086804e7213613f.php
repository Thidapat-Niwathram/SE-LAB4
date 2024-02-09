<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__eb5fa6047f47ce8ae1fc5cdce5e79bd0 */
class __TwigTemplate_ab251d41f971ddb3e02508771855d323 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/se_project/Project/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/se_project/Project/img/app_icon.png\" />

<title>Theme & Logo > Theme • SE Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'TH';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '21976cc93d17793c0300294eaaff05d2';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = 'abad4cf3cb44d62c3f0ce318bc9e080b';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/se_project/Project/admin2024se3/index.php/improve/modules/manage?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM';
    var admin_notification_get_link = '/se_project/Project/admin2024se3/index.php/common/notifications?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM';
    var admin_notification_push_link = adminNotificationPushLink = '/se_project/Project/admin2024se3/index.php/common/notifications/ack?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YD";
        // line 40
        echo "ElTeQM';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/se_project/Project/admin2024se3/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/se_project/Project/admin2024se3/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/admin2024se3/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/admin2024se3/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/se_project\\/Project\\/admin2024se3\\/\";
var baseDir = \"\\/se_project\\/Project\\/\";
var changeFormLanguageUrl = \"\\/se_project\\/Project\\/admin2024se3\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\";
var currency = {\"iso_code\":\"THB\",\"sign\":\"\\u0e3f\",\"name\":\"Thai Baht\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"THB\",\"currencySymbol\":\"\\u0e3f\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\"";
        // line 67
        echo ",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin2024se3/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin2024se3/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin2024se3/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin2024se3/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
";
        // line 91
        echo "
      textColor: '#FFFFFF',
      notificationGetUrl: '/se_project/Project/admin2024se3/index.php/common/notifications?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminthemes\"
  data-base-url=\"/se_project/Project/admin2024se3/index.php\"  data-token=\"QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminDashboard&amp;token=5749d1cd121f0bd9539cdfb0b890e440\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d7d0b92c62377c0efb567f68b642b71c\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin2024se3/index.php/improve/modules/manage?token=abe78d7b076b27efc92de510e052d3a2\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin2024se3/index.php/sell/catalog/categories/new?token=abe78d7b076b27efc92de510e052d3a2\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/se_project/Project/admin2024se3/index.php/sell/catalog/products-v2/create?token=abe78d7b076b2";
        // line 137
        echo "7efc92de510e052d3a2\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8f54b57eedcf0e72216b522ecf07f182\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin2024se3/index.php/sell/orders?token=abe78d7b076b27efc92de510e052d3a2\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"160\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminQuickAccesses&token=35c04729ea8d425d5ed1d9ab70cba550\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Theme &amp; Logo - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminQuickAccesses&token=35c04729ea8d425d5ed1d9ab70cba550\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/se_project/Project/admin2024se3/index.php?controller=AdminSearch&amp;token=354ab1b42ffb3e66a70328e05d090b1f\"
 ";
        // line 177
        echo "     role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart";
        // line 193
        echo "\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d7d0b92c62377c0efb567f68b642b71c\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin2024se3/index.php/improve/modules/manage?token=abe78d7b076b27efc92de510e052d3a2\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin2024se3/index.php/sell/catalog/categories/new?token=abe78d7b076b27efc92de510e052d3a2\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin2024se3/index.php/sell/catalog/products-v2/create?token=abe78d7b076b27efc92de510e052d3a2\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=A";
        // line 230
        echo "dminCartRules&amp;addcart_rule&amp;token=8f54b57eedcf0e72216b522ecf07f182\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin2024se3/index.php/sell/orders?token=abe78d7b076b27efc92de510e052d3a2\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"116\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes\"
      data-post-link=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminQuickAccesses&token=35c04729ea8d425d5ed1d9ab70cba550\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Theme &amp; Logo - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminQuickAccesses&token=35c04729ea8d425d5ed1d9ab70cba550\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/se_project/Project/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropd";
        // line 275
        echo "own-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a70d0f3ab7670425d0db496fec82479a\">abandoned carts</a></";
        // line 325
        echo "strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i";
        // line 375
        echo " class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/se_project/Project/img/pr/default.jpg\" alt=\"Suphachok\" /></span>
        <span class=\"employee_profile\">Welcome back Suphachok</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/employees/1/edit?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminLogin&amp;logout=1&amp;token=e2efe7a12582a006a56a99eafc5caa05\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/se_project/Project/admin2024se3/index.php/configure/advanced/employees/toggle-navigation?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminDashboard&amp;token=5749d1cd121f0bd9539cdfb0b890e440\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
  ";
        // line 421
        echo "          <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminDashboard&amp;token=5749d1cd121f0bd9539cdfb0b890e440\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/sell/orders/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/orders/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">";
        // line 455
        echo " Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/orders/invoices/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/orders/credit-slips/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/orders/delivery-slips/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
    ";
        // line 487
        echo "                            <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCarts&amp;token=a70d0f3ab7670425d0db496fec82479a\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/sell/catalog/products?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/catalog/products?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
        ";
        // line 518
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/catalog/categories?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/catalog/monitoring/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminAttributesGroups&amp;token=ea7ba6b5630fa21a82a9fc9921bb5452\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/catalog/brands/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM";
        // line 544
        echo "\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/attachments/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCartRules&amp;token=8f54b57eedcf0e72216b522ecf07f182\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/stocks/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
";
        // line 577
        echo "
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/sell/customers/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/customers/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/sell/addresses/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                              ";
        // line 606
        echo "                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCustomerThreads&amp;token=e6bd94525044a96203ce70987bbf446f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCustomerThreads&amp;token=e6bd94525044a96203ce70987bbf446f\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/se_project/Project/admin2024se3/i";
        // line 635
        echo "ndex.php/sell/customer-service/order-messages/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminReturn&amp;token=70fc7f8d19f528b341d46ead4ec1b825\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminStats&amp;token=d7d0b92c62377c0efb567f68b642b71c\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-a";
        // line 670
        echo "ctive\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/improve/modules/manage?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/modules/manage?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class";
        // line 703
        echo "=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/improve/design/themes/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/design/themes/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/design/mail_theme/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                          ";
        // line 730
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/design/cms-pages/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/design/modules/positions/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminImages&amp;token=bcde59a86f2d771439e5e6d86371fca1\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/modules/link-widget/list?_token=QGN63z6IJdJSEmaEkLMj8";
        // line 758
        echo "_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCarriers&amp;token=618a949cf15044e874fe83b016b3b2aa\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminCarriers&amp;token=618a949cf15044e874fe83b016b3b2aa\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class";
        // line 790
        echo "=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/shipping/preferences/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/improve/payment/payment_methods?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/payment/payment_methods?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                      ";
        // line 820
        echo "                                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/payment/preferences?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/improve/international/localization/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/se_project/Project/admin2024se";
        // line 849
        echo "3/index.php/improve/international/localization/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/international/zones/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/international/taxes/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/improve/international/translations/settings?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        <";
        // line 878
        echo "/li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/preferences/preferences?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/preferences/preferences?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            ";
        // line 914
        echo "
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/order-preferences/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/product-preferences/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/customer-preferences/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/contacts/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> C";
        // line 940
        echo "ontact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/shop/seo-urls/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminSearchConf&amp;token=ca1895a05829dbc146b89c671096aa59\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/system-information/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                  ";
        // line 972
        echo "                  <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/system-information/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/performance/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/administration/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Administration
                                </a>
                  ";
        // line 999
        echo "            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/emails/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/import/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/employees/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/se_project/Project";
        // line 1029
        echo "/admin2024se3/index.php/configure/advanced/sql-requests/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/logs/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/webservice-keys/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/feature-flags/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> New &amp; Experimental Features
                                </";
        // line 1054
        echo "a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/se_project/Project/admin2024se3/index.php/configure/advanced/security/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Theme &amp; Logo &gt; Theme          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/se_project/Project/admin2024se3/index.php/improve/design/themes/import?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\"                  title=\"Add new theme\"                                  >
                  <i class=\"material-icons\">add</i>                  Add new theme
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-de";
        // line 1104
        echo "sc-configuration-export\"
                  href=\"/se_project/Project/admin2024se3/index.php/improve/design/themes/export?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\"                  title=\"Export current theme\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Export current theme
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/se_project/Project/admin2024se3/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D8.1.2%2526country%253Den/Help?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/se_project/Project/admin2024se3/index.php/improv";
        // line 1130
        echo "e/design/themes/?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminPsThemeCustoConfiguration&token=2156ff8f2871965f37195e505eaaee11\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"128\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminPsThemeCustoAdvanced&token=ce9530b838d80552af35d1236e1f3421\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"129\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                 ";
        // line 1153
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/se_project/Project/admin2024se3/index.php/improve/design/themes/import?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\"              title=\"Add new theme\"            >
              Add new theme
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/se_project/Project/admin2024se3/index.php/improve/design/themes/export?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\"              title=\"Export current theme\"            >
              Export current theme
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
             ";
        // line 1178
        echo "  data-url=\"/se_project/Project/admin2024se3/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D8.1.2%2526country%253Den/Help?_token=QGN63z6IJdJSEmaEkLMj8_XKMPLVL9tSfN3YDElTeQM\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1199
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/se_project/Project/admin2024se3/index.php?controller=AdminDashboard&amp;token=5749d1cd121f0bd9539cdfb0b890e440\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1233
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1199
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1233
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__eb5fa6047f47ce8ae1fc5cdce5e79bd0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1404 => 1233,  1383 => 1199,  1372 => 103,  1363 => 1233,  1323 => 1199,  1300 => 1178,  1273 => 1153,  1248 => 1130,  1220 => 1104,  1168 => 1054,  1141 => 1029,  1109 => 999,  1080 => 972,  1046 => 940,  1018 => 914,  980 => 878,  949 => 849,  918 => 820,  886 => 790,  852 => 758,  822 => 730,  793 => 703,  758 => 670,  721 => 635,  690 => 606,  659 => 577,  624 => 544,  596 => 518,  563 => 487,  529 => 455,  493 => 421,  445 => 375,  393 => 325,  341 => 275,  294 => 230,  255 => 193,  237 => 177,  195 => 137,  156 => 103,  142 => 91,  116 => 67,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__eb5fa6047f47ce8ae1fc5cdce5e79bd0", "");
    }
}
